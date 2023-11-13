<?php

namespace App\Http\Controllers;

use App\Models\AmplopDigitalModel;
use App\Models\CeritaCintaModel;
use App\Models\GaleriModel;
use App\Models\InformasiAcaraModel;
use App\Models\MempelaiModel;
use App\Models\OrderModel;
use App\Models\PaketModel;
use App\Models\PaymentVendorModel;
use App\Models\ProtokolModel;
use App\Models\QuotesModel;
use App\Models\TemaTransaksiModel;
use App\Models\UcapanModel;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UndanganController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $idUser = $user->id;

        $data = ProtokolModel::where('user_id', $idUser)->first();
        $order = OrderModel::where('user_id', $idUser)->first();
        $mempelai = MempelaiModel::where('user_id', $idUser)->first();
        $paymentvendor = PaymentVendorModel::all();
        $pvcustomer = AmplopDigitalModel::where('user_id', $idUser)->first();
        return view('undangan.index', compact('data', 'order', 'mempelai', 'paymentvendor', 'pvcustomer'));
    }

    public function protokolStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;

        $checkData = ProtokolModel::where('user_id', $idUser)->first();

        if ($checkData != null) {
            $query = ProtokolModel::where('user_id', $idUser)->update([
                'is_protokol' => $request->protocol,
            ]);

            $codeResponse = 1;

            if ($request->protocol == 0) {
                $codeResponse = 2;
            }

            if ($query) {
                return response()->json(['code' => $codeResponse]);
            } else {
                return response()->json(['code' => 0]);
            }
        } else {
            $query = ProtokolModel::create([
                'user_id' => $idUser,
                'is_protokol' => $request->protocol,
            ]);

            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }

    public function domainUpdate(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;
        $checkData = OrderModel::where('user_id', $idUser)->first();

        if ($checkData != null) {
            $query = OrderModel::where('user_id', $idUser)->update(['domain' => $request->domain]);
            if ($query) {
                return response()->json(['code' => 1]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }

    public function publikasiStore(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;

        $checkData = OrderModel::where('user_id', $idUser)->first();

        if ($checkData != null) {
            $query = OrderModel::where('user_id', $idUser)->update([
                'status' => $request->publikasi,
            ]);

            $codeResponse = 1;

            if ($request->publikasi == 0) {
                $codeResponse = 2;
            }

            if ($query) {
                return response()->json(['code' => $codeResponse]);
            } else {
                return response()->json(['code' => 0]);
            }
        }
    }

    public function undanganShow(Request $request, $domain)
    {
        $getUser = OrderModel::where('domain', $domain)->first();
        //Tema
        $tema = TemaTransaksiModel::where('user_id', $getUser->user_id)->with('temaMaster')->first();

        //Mempelai
        $mempelai = MempelaiModel::where('user_id', $getUser->user_id)->first();

        //Quotes
        $quotes = QuotesModel::where('user_id', $getUser->user_id)->first();

        //Informasi Acara
        $informasiacara = InformasiAcaraModel::where('user_id', $getUser->user_id)->first();
        $tanggalPernikahan = $informasiacara->tanggalpernikahan;
        $datetime = new DateTime($tanggalPernikahan);
        $oriTanggalAcara = $datetime->format('Y-m-d');
        $day = Carbon::instance($datetime)->locale('id')->format('l');

        $convertDay = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
        ];

        $convertMonth = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];

        $afterConvertDay = $convertDay[$day];

        $day = $datetime->format('d');
        $month = $datetime->format('m');
        $year = $datetime->format('Y');
        $afterConvertMonth = $convertMonth[$month];
        $tanggalAcara =  $day . ' ' . $afterConvertMonth . ' ' . $year;

        //Galeri
        $galeri = GaleriModel::where('user_id', $getUser->user_id)->get();
        $count = $galeri->count();

        //Cerita Cinta
        $ceritacinta = CeritaCintaModel::where('user_id', $getUser->user_id)->first();

        //Amplop Digital
        $amplopdigital = AmplopDigitalModel::where('user_id', $getUser->user_id)->first();


        //Nama Tamu
        $namaTamu = 'Tamu Undangan';
        if ($request->to != null) {
            $namaTamu = $request->to;
        }

        return view($tema->temaMaster->url_tema, compact('getUser', 'namaTamu', 'mempelai', 'quotes', 'informasiacara', 'afterConvertDay', 'tanggalAcara', 'oriTanggalAcara', 'galeri', 'count', 'ceritacinta', 'amplopdigital'));
    }

    public function ucapanShow($id)
    {
        $ucapan = UcapanModel::where('user_id', $id)->get();

        return response()->json(compact('ucapan'));
    }

    public function ucapanStore(Request $request, $id)
    {
        $query = UcapanModel::create([
            'user_id' => $id,
            'nama' => $request->nama,
            'ucapan' => $request->ucapan,
        ]);

        if ($query) {
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }
}
