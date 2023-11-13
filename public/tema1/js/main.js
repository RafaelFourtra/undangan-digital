function setCountdown(targetDateString) {
    const targetDate = new Date('2024-5-21');

    // Memperbarui countdown setiap 1 detik
    const timer = setInterval(function () {
        // Waktu saat ini
        const currentDate = new Date();

        // Selisih waktu antara target dan saat ini
        const timeLeft = targetDate - currentDate;

        // Menghitung hari, jam, menit, dan detik
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        // Menampilkan countdown pada elemen-elemen HTML yang sesuai
        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;

        // Hentikan countdown jika sudah mencapai tanggal target
        if (timeLeft < 0) {
            clearInterval(timer);
            document.getElementById("countdown").innerHTML = "Waktu habis!";
        }
    }, 1000); // Interval per 1 detik
}