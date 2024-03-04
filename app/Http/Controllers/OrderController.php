<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\OrderModel;
use App\Models\PaketModel;
use App\Models\TemplatePesanModel;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $paket = PaketModel::all();

        return view('administrator.order', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'paket' => 'required',
            'harga' => 'required',
            'domain' => 'required',
            'expired' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => '0892172812',
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('Customer');
        event(new Registered($user));

        $newUserId = $user->id;

        $userAdmin = Auth::user();
        $idUserAdmin = $userAdmin->id;
        $nameUserAdmin = $userAdmin->name;
        $emailUserAdmin = $userAdmin->email;

        $order = OrderModel::create([
            'user_id' => $newUserId,
            'admin_id' => $idUserAdmin,
            'paket' => $request->paket,
            'harga' => $request->harga,
            'domain' => $request->domain,
            'tanggal_order' => Carbon::now(),
            'expired' => $request->expired,
            'status' => '1',
        ]);

        $template = TemplatePesanModel::create([
            'user_id' => $newUserId,
            'title' => 'Undangan Pernikahan',
            'templatepesan' =>
            "Kepada Yth,
            {nama_tamu} 
                        
            Tanpa Mengurangi Rasa Hormat. Kami Bermaksud Mengundang Bapak/Ibu/Saudara/i, Pada Acara Pernikahan Kami. 
                        
            Info lebih lengkap klik link dibawah ini {link_undangan} Atas Kehadiran dan Do'a Restunya Kami Ucapkan Terimakasih."
        ]);

        if ($user && $order && $template) {
            $mailData = [
                'nama' => $request->name,
                'admin' => $nameUserAdmin,
                'email' => $request->email,
                'password' =>  $request->password,
            ];
            Mail::to(['rafael44842@gmail.com'])->send(new OrderMail($mailData));
            return response()->json(['code' => 1]);
        } else {
            return response()->json(['code' => 0]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function get()
    {
        $data = OrderModel::with('user')->get();

        return response()->json(compact('data'));
    }
}
