<?php

use Illuminate\Database\Seeder;
use App\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listArtikel = [
            [
                'judul'         => 'Bahaya Mie Instan Bagi Kesehatan',
                'cuplikan'      => 'Setiap orang sudah pasti kenal dengan makanan cepat saji bernama mie instan Kecuali mudah diperoleh, variasi makanan yang satu ini juga mempunyai rasa yang sedap.
                                    Hanya saja, dibalik sifat praktis dan rasanya yang sangat sedap, mie instan juga mempunyai sejumlah resiko.',
                'isi'           => 'Menurut sejumlah hasil penelitian, Terlalu kerap mengonsumsi mie instan dapat meningkatkan resiko timbulnya penyakit kanker, ginjal dan usus buntu. 
                                    Pada beberapa kasus orang yang mengkonsumsi mie instan berlebihan juga dapat menyebabkan kegemukan atau obesitas.
                                    Sekiranya Anda umumnya mengonsumsi mie instan tiap-tiap hari, mulailah untuk menguranginya dengan tenggang waktu 2 hingga 3 hari dan lakukan sampai Anda terbebas dari mie instan sama sekali.
                                    Menurut penelitian rupanya didalam mie instan terdapat kandungan lilin yang sangat membahayakan bagi kesehatan manusia.
                                    Mie instan mengandung kandungan lilin yang berguna untuk membuat mie tak lengket satu dengan lainnya. Dengan seringnya kita mengonsumsi mie instan berarti kita juga sudah memasukkan banyak kandungan lilin ke dalam tubuh kita. 
                                    Dengan seringnya kita mengonsumsi mie instan berarti kita juga sudah memasukkan banyak kandungan lilin ke dalam tubuh kita. 
                                    Kandungan lilin tersebut akan merusak metode kerja pencernaan dalam tubuh karena baru dapat dicerna oleh tubuh dalam waktu minimal 2 hari.',
                'gambar'        => 'mie.png',
                'waktu_artikel' => '2017'
            ],

            [
                'judul'         => 'Pengaruh Pendidikan Terhadap Kualitas Anak Pedalaman',
                'cuplikan'      => 'Bukan rahasia lagi bila anak-anak yang tinggal di daerah pedalaman sangat sulit mendapatkan kehidupan yang layak seperti anak-anak pada umumnya. 
                                    Mereka kesulitan mendapat air bersih, mengenyam pendidikan sesuai batas kelayakan pendidikan Indonesia dan sulit mengikuti perkembangan zaman. 
                                    Tak hanya itu saja , mereka bahkan tidak mengenal alat komunikasi seperti telepon genggam.',
                'isi'           => 'Hal pokok yang menjadi sorotan utama yaitu betapa sulitnya mereka mendapat pendidikan yang layak dan mengenyam pendidikan dua belas tahun. 
                                    Pada faktanya tak semua salah mereka, kesulitan mereka menjangkau lokasi sekolah menjadi masalah karena mereka harus mengarungi sungai. 
                                    Mereka juga harus berjalan kaki hingga berpuluh-puluh kilo meter, bahkan ada pula yang tak memakai alas kaki.
                                    Kurangnya tenaga pengajar di pedalaman karena sulitnya mencari pengajar yang mau mengajar di daerah tersebut juga sangat disayangkan. 
                                    Padahal kualitas seseorang diukur melalui seberapa jauh pendidikan yang dicapai karena kualitas seorang lulusan SD berbeda dengan kualitas seorang sarjana.
                                    Sehingga dapat disimpulkan bahwa pendidikan sangat memengaruhi kualitas seorang anak pedalaman.',
                'gambar'        => 'pedalaman.jpg',
                'waktu_artikel' => '2018'
            ],

            [
                'judul'         => 'Manfaat Madu Bagi Kesehatan',
                'cuplikan'      => 'Madu adalah hasil produksi dari hewan lebah yang kini telah dikenal lebih jauh karena khasiatnya bagi kesehatan yang melimpah.
                                    Tak heran jika madu banyak digunakan untuk pengobatan berbagai macam penyakit.',
                'isi'           => 'Madu tak hanya dikenal sebagai pemanis alami, madu juga memiliki manfaat lain yang dapat digunakan untuk kesehatan kulit khususnya kulit wajah.
                                    Madu dipercaya dapat digunakan untuk penghilang jerawat, namun perlu ditambahkan dengan beberapa bahan lain seperti jeruk nipis. 
                                    Madu pun dapat dimanfaatkan untuk mengecilkan pori-pori wajah dan menghaluskan kulit wajah. 
                                    Di dalam madu ada aneka nutrisi yang begitu kompleks mulai dari vitamin hingga aneka mineral yang dibutuhkan tubuh. 
                                    Tak heran bila kini banyak para orang tua yang mempercayai madu untuk diberikan kepada anak-anak mereka. 
                                    Alasan para orang tua memberikan madu yaitu untuk menjaga kesehatan sang anak terutama untuk meningkatkan kekebalan tubuh dan stamina.',
                'gambar'        => 'madu.jpg',
                'waktu_artikel' => '2016'
            ],

            [
                'judul'         => 'Dampak Buruk Junk Food Untuk Kesehatan Tubuh',
                'cuplikan'      => 'Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia. 
                                    Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. 
                                    Tak hanya itu saja, makanan cepat saji juga memiliki cita rasa yang lezat ditambah lagi harganya yang terjangkau.',
                'isi'           => 'Makanan cepat saji sudah lama mengundang kontroversi di negara kita karena terungkapnya beberapa dampak buruk yang ia miliki. 
                                    Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan seperti lilin yang ada pada mie instan. 
                                    Tak berhenti disitu, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin.
                                    Fenomena kata micin kini mendadak kerap digunakan para remaja hingga dewasa bila seseorang mengalami hal-hal yang kurang normal. 
                                    Maksud dari hal kurang normal itu seperti seseorang yang telat berpikir, lama menjawab bila diajak bicara dan lain sebagainya. 
                                    Tak dielakkan, makanan cepat saji memang mengandung zat berbahaya seperti yang telah diungkapkan di atas.',
                'gambar'        => 'food.jpg',
                'waktu_artikel' => '2018'
            ],

            [
                'judul'         => 'Kebakaran Hutan di Indonesia',
                'cuplikan'      => 'Indonesia adalah suatu negara dengan iklim tropis yang terdiri dari ribuan pulau.
                                    Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). 
                                    Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia).',
                'isi'           => 'Mengenai faktor alam memang tak ada yang dapat disalahkan, namun mengenai faktor buatan yaitu manusia itulah hal yang perlu dievaluasi.
                                    Manusia kini telah kehilangan kesadarannya hingga mereka melakukan hal-hal yang merugikan banyak pihak diantaranya merugikan lingkungan hidup contohnya hutan.
                                    Hutan adalah habitat dari ribuan spesies makhluk hidup yang saling bergantungan.
                                    Maka dari itu, aksi manusia membakar hutan untuk memenuhi maksud dari dalam dirinya sendiri memang perlu diadili. 
                                    Alasan mereka melakukan pembakaran hutan beragam mulai dari ingin membuka lahan tanam baru hingga berdirinya gedung-gedung bertingkat. 
                                    Namun, hal yang disayangkan yaitu betapa mereka tak memikirkan aneka flora dan fauna yang tinggal di dalam hutan tersebut.',
                'gambar'        => 'hutan.jpg',
                'waktu_artikel' => '2017'
            ],

            [
                'judul'         => 'Bahaya Internet Bagi Remaja',
                'cuplikan'      => 'Pada era digital pada saat ini Internet rasanya sudah sangat mudah dijangkau dan melekat di dalam kehidupan sehari-hari, khususnya bagi para kalangan remaja.
                                    Pada dasarnya internet mampu membantu banyak meneylesaikan kegiatan manusia seperti pekerjaan, pelajaran dan komunikasi.',
                'isi'           => 'Di tengah kehidupan sebagian para kalangan remaja yang mana saat ini internet nampaknya sudah melekat menjadi salah satu jenis kebutuhan pokok.
                                    Namun tentunya tidak semua para remaja yang bisa mengakses atau menggunakan internet dengan baik dan benar tanpa terpengaruh dampak negatifnya. 
                                    Sebab diluaran sana banyak juga sebagian para remaja yang salah memanfaatkan jejaring internet sehingga menghasilkan dampak yang buruk bagi dirinya dan juga bagi lingkungan disekitar remaja.
                                    Dengan berdasarkan riset yang dikaji secara mendalam ada beberapa bahaya yang bisa ditimbulkan apabila tidak bijak dalam menggunakan jejaring internet terutama di kalangan para kalangan remaja',
                'gambar'        => 'remaja.jpg',
                'waktu_artikel' => '2020'
            ],

            [
                'judul'         => 'Limbah Plastik Untuk Meningkatkan Perekonomian Masyarakat',
                'cuplikan'      => 'Limbah plastik sudah menjadi salah satu kasus limbah yang hingga sampai saat ini memerlukan penindakan lebih, karena disebabkan sifatnya yang membutuhkan waktu lama serta susah untuk didaur ulang.',
                'isi'           => 'Bermacam aksi oleh pemerintah sudah dicoba untuk mengurangi jumlah limbah plastik semacam pengurangan kandungan plastik dalam sesuatu produk, kantong plastik belanja yang berbayar, pemakaian plastik yang lebih ramah area serta lain sebagainya.
                                    Pengurangan pemakaian plastik pada kehidupan tiap hari pula sudah dicoba, tetapi jumlah limbah plastik masih terbilang lumayan banyak, tidak terkecuali di Kota Malang.
                                    Dari informasi DKP Kota Malang, mengatakan kalau di Kota Malang limbah plastik jadi penyumbang limbah paling banyak kedua sehabis limbah organik.',
                'gambar'        => 'limbah.jpg',
                'waktu_artikel' => '2018'
            ],

            [
                'judul'         => 'Belajar Untuk Menjadi Pelajar Berkarakter',
                'cuplikan'      => 'Pembelajaran menjadi salah satu fasilitas yang dapat berpengaruh besar dalam membentuk sumber energi manusia bermutu. 
                                    Lewat pembelajaran, bisa terbentuk generasi berkarakter yang sanggup mengaktualisasikan diri jadi ujung tombak kemajuan peradaban.',
                'isi'           => 'Keadaan para pelajar Indonesia ini masih sangat jauh dari harapan bagaikan generasi yang pintar serta sanggup bersaing di kancah internasional. 
                                    Bila ditarik garis sebagian tahun kebelakang, bisa disaksikan bersama kalau Indonesia populer dengan jati diri bangsa yang berkaraker serta berbudi luhur.
                                    Bermacam kebijakan pembelajaran yang dibuat pemerintah dengan harapan bisa memusatkan para siswa jadi unggul dalam seluruh bidang, baik dari segi kompetensi, kepribadian, dan jiwa kompetitif bagaikan bekal bersaing dengan pelajar-pelajar dari negeri lain.',
                'gambar'        => 'pelajar.jpg',
                'waktu_artikel' => '2019'
            ],

            [
                'judul'         => 'Ayo Jangan Malas Cuci Tangan Biar Hidup Sehat',
                'cuplikan'      => 'Dalam hal menjaga kesehatan tubuh dapat diawali dari hal yang sangat sederhana. 
                                    Misalnya seperti mencuci tangan sebelum melakukan apapun. 
                                    Maka upayakan dimulai sejak saat ini jadikanlah mencuci tangan sebagai salah satu bagian dari gaya hidup anda yang sehat.',
                'isi'           => 'Dalam hal menjaga kesehatan tubuh dapat diawali dari halyang sangat sederhana. 
                                    Misalnya seperti mencuci tangan sebelum melakukan apapun. 
                                    Maka upayakan dimulai sejak saat ini jadikanlah mencuci tangan sebagai salah satu bagian dari gaya hidup anda yang sehat. 
                                    Dimana hal yang harus kita ketahui bahwa tangan merupakan sebuah organ dari tubuh yang sangat vital yang dapat dipergunakan untuk menunjang berbagai aktivitas dalam kehidupan sehari-hari.
                                    Selain itu dengan tangan kita dapat menciptakan berbagai karya-karya indah. 
                                    Namun, hal yang harus dipahami juga bahwa dari tangan juga berbagai jenis penyakit yang dapat menular.',
                'gambar'        => 'cuci.jpg',
                'waktu_artikel' => '2020'
            ],

            [
                'judul'         => 'Mengatur Makanan Untuk Kesehatan Tubuh',
                'cuplikan'      => 'Makanan merupakan asupan nutrisi yang berarti untuk kesehatan serta kekuatan badan. 
                                    Tetapi, apa yang hendaknya kalian makan selepas melaksanakan berolahraga sangat butuh dicermati dengan baik.
                                    Upayakan supaya tidak salah memilah makanan. Sebab apa? Sebab, salah memilah makanan yang dimakan sehabis berolahraga dapat saja menimbulkan bahaya untuk kesehatan badan.',
                'isi'           => 'Dilansir dari halaman prevention. com, salah komsumsi makanan sehabis berolahraga dapat saja membuat badan kesusahan memulihkan tenaga yang lenyap.
                                    Hendaknya, kita komsumsi makanan yang memiliki air, karbohidrat lingkungan serta beberapa protein supaya badan senantiasa sehat serta mengesankan.
                                    Sepanjang berolahraga, badan menghasilkan banyak tenaga dimana tenaga ini  dapat mengurangi glukosa ataupun zat gula.
                                    untuk itu, dianjurkan supaya dapat mengkonsumsi makanan yang dapat meningkatkan gula darah.',
                'gambar'        => 'aturmakanan.jpeg',
                'waktu_artikel' => '2017'
            ]
        ];

        foreach ($listArtikel as $artikel) {
            Artikel::create($artikel);
        }
    }
}
