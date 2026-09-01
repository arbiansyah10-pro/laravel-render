<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CallDocController extends Controller
{
    public function index(): View
    {
        return view('calldoc.index', [
            'questions' => $this->questions(),
            'tips' => $this->tips(),
        ]);
    }

    private function questions(): array
    {
        return [
            ['q' => 'Berapa gelas air putih yang disarankan buat orang dewasa tiap hari?', 'opts' => ['2-3 gelas', '4-5 gelas', '6-8 gelas', '10-12 gelas'], 'correct' => 2, 'note' => 'Sekitar 6-8 gelas (±2 liter) bantu tubuh tetap terhidrasi dan fokus.'],
            ['q' => 'Berapa jam tidur yang ideal buat orang dewasa tiap malam?', 'opts' => ['4-5 jam', '5-6 jam', '7-9 jam', '10-12 jam'], 'correct' => 2, 'note' => '7-9 jam kasih waktu buat otak dan tubuh benar-benar pulih.'],
            ['q' => 'Kenapa sarapan itu penting sebelum mulai aktivitas?', 'opts' => ['Biar ngantuk', 'Ngasih energi buat mulai hari', 'Biar cepat lapar lagi', 'Nggak ada manfaatnya'], 'correct' => 1, 'note' => 'Sarapan ngisi bahan bakar tubuh setelah semalaman berpuasa saat tidur.'],
            ['q' => 'Berapa lama minimal cuci tangan pakai sabun biar kuman beneran hilang?', 'opts' => ['5 detik', '10 detik', '20 detik', '1 menit'], 'correct' => 2, 'note' => "20 detik setara nyanyi 'Happy Birthday' dua kali, cukup buat angkat kuman."],
            ['q' => 'Berapa porsi buah dan sayur yang disarankan tiap hari?', 'opts' => ['1-2 porsi', '5 porsi', '10 porsi', 'Nggak perlu tiap hari'], 'correct' => 1, 'note' => 'Sekitar 5 porsi sehari bantu cukupin serat, vitamin, dan mineral.'],
            ['q' => 'Berapa menit olahraga ringan yang disarankan tiap hari?', 'opts' => ['5 menit', '15 menit', '30 menit', '2 jam'], 'correct' => 2, 'note' => 'Sekitar 30 menit jalan cepat atau aktivitas ringan tiap hari udah oke banget.'],
            ['q' => 'Idealnya, berapa kali sehari kita gosok gigi?', 'opts' => ['1 kali', '2 kali', '4 kali', 'Cuma pas bau'], 'correct' => 1, 'note' => '2 kali sehari, pagi dan sebelum tidur, jaga gigi dari plak dan sisa gula makanan.'],
            ['q' => 'Aturan 20-20-20 buat mata yang lama natap layar itu gimana?', 'opts' => ['Tiap 20 menit, lihat jauh 20 detik', 'Tiap 20 jam istirahat', 'Kedip 20 kali tiap 20 detik', 'Pakai kacamata 20 menit'], 'correct' => 0, 'note' => 'Tiap 20 menit, alihkan pandangan ke jarak sekitar 6 meter selama 20 detik biar mata nggak tegang.'],
            ['q' => 'Apa yang bisa terjadi kalau kebanyakan makan/minum manis?', 'opts' => ['Badan makin bugar', 'Risiko diabetes & berat badan naik', 'Nggak ada efek', 'Bikin tidur lebih nyenyak'], 'correct' => 1, 'note' => 'Gula berlebih terus-terusan bisa naikin risiko diabetes tipe 2 dan obesitas.'],
            ['q' => 'Kalau kebanyakan makan makanan asin, apa risikonya?', 'opts' => ['Tekanan darah naik', 'Rambut cepat panjang', 'Nggak ada efek', 'Nafsu makan hilang'], 'correct' => 0, 'note' => 'Garam berlebih bisa bikin tekanan darah naik dan kerja jantung jadi lebih berat.'],
            ['q' => 'Cara sederhana buat kelola stres sehari-hari?', 'opts' => ['Nahan semua sendirian', 'Istirahat cukup & cerita ke orang terdekat', 'Begadang terus', 'Skip makan'], 'correct' => 1, 'note' => 'Istirahat cukup dan cerita ke orang yang dipercaya bantu beban pikiran nggak numpuk.'],
            ['q' => 'Kenapa vaksinasi itu penting?', 'opts' => ['Cuma formalitas', 'Melindungi dari penyakit menular tertentu', 'Bikin makin gampang sakit', 'Nggak ngaruh ke tubuh'], 'correct' => 1, 'note' => 'Vaksin melatih sistem imun buat kenal dan lawan penyakit tertentu sebelum beneran kena.'],
            ['q' => 'Postur duduk yang baik pas kerja atau belajar itu gimana?', 'opts' => ['Membungkuk biar fokus', 'Punggung tegak, layar sejajar mata', 'Selonjoran di kursi', 'Nggak penting posisi duduk'], 'correct' => 1, 'note' => 'Punggung tegak dan layar sejajar mata bikin leher dan punggung nggak gampang pegal.'],
            ['q' => 'Vitamin apa yang didapat tubuh dari sinar matahari pagi?', 'opts' => ['Vitamin C', 'Vitamin D', 'Vitamin K', 'Vitamin B12'], 'correct' => 1, 'note' => 'Kulit yang kena sinar matahari bantu tubuh memproduksi vitamin D buat tulang.'],
            ['q' => 'Kenapa penting pakai tabir surya (sunscreen)?', 'opts' => ['Biar kulit belang', 'Melindungi kulit dari sinar UV', 'Bikin kulit gosong lebih cepat', 'Nggak ada gunanya'], 'correct' => 1, 'note' => 'Tabir surya bantu lindungi kulit dari sinar UV yang bisa merusak kulit.'],
        ];
    }

    private function tips(): array
    {
        return [
            ['title' => 'Minum air teratur', 'hint' => 'Ketuk untuk detail', 'detail' => 'Taruh botol minum di meja atau tas biar keinget minum tiap 1-2 jam, bukan cuma pas haus.'],
            ['title' => 'Jaga jam tidur', 'hint' => 'Ketuk untuk detail', 'detail' => 'Coba tidur dan bangun di jam yang mirip tiap hari, termasuk akhir pekan, biar ritme tubuh stabil.'],
            ['title' => 'Gerak tiap hari', 'hint' => 'Ketuk untuk detail', 'detail' => 'Nggak harus ke gym, jalan kaki, naik tangga, atau stretching 10 menit juga sudah membantu.'],
            ['title' => 'Kurangi gula & garam', 'hint' => 'Ketuk untuk detail', 'detail' => 'Coba kurangi sedikit demi sedikit, misal ganti minuman manis dengan air putih atau infused water.'],
            ['title' => 'Istirahatkan mata', 'hint' => 'Ketuk untuk detail', 'detail' => 'Terapkan aturan 20-20-20 tiap kali kerja lama di depan layar komputer atau HP.'],
            ['title' => 'Cerita saat penat', 'hint' => 'Ketuk untuk detail', 'detail' => 'Ngobrol sama orang yang dipercaya bisa bantu meringankan pikiran yang lagi penuh.'],
        ];
    }
}
