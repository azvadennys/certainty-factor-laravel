<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = [
            ['kode_gejala' => 'G001', 'nama_gejala' => 'Kulit Normal', 'deskripsi' => 'Kulit yang sehat dan seimbang, tidak terlalu berminyak atau terlalu kering, tidak ada masalah khusus yang terlihat.'],
            ['kode_gejala' => 'G002', 'nama_gejala' => 'Kulit Kering', 'deskripsi' => 'Kulit terasa kering dan kasar, mungkin terkelupas atau terasa ketat setelah dicuci. Garis-garis halus dan kerutan mungkin lebih terlihat.'],
            ['kode_gejala' => 'G003', 'nama_gejala' => 'Kulit Berminyak', 'deskripsi' => 'Permukaan kulit tampak berkilau dan terlalu berminyak, sering kali terutama di zona T (dahi, hidung, dagu). Rentan terhadap jerawat dan pori-pori terlihat lebih besar.'],
            ['kode_gejala' => 'G004', 'nama_gejala' => 'Kulit Sensitif', 'deskripsi' => 'Kulit yang rentan terhadap iritasi, kemerahan, gatal, atau terasa terbakar setelah terpapar bahan tertentu seperti produk perawatan kulit, deterjen, atau cuaca ekstrem.'],
            ['kode_gejala' => 'G005', 'nama_gejala' => 'Tipe Kulit Campuran', 'deskripsi' => 'Bagian T-zone (dahi, hidung, dagu) cenderung berminyak, sementara pipi cenderung kering atau normal. Rentan terhadap jerawat di daerah berminyak dan mungkin terasa kering di area kering.'],
            ['kode_gejala' => 'G006', 'nama_gejala' => 'Hiperpigmentasi (Flek)', 'deskripsi' => 'Area kulit yang lebih gelap dari warna kulit sekitarnya, mungkin disebabkan oleh paparan sinar matahari, bekas jerawat, atau perubahan hormon.'],
            ['kode_gejala' => 'G007', 'nama_gejala' => 'PIH (Post Inflammatory Hyperpigmentation)', 'deskripsi' => 'Area gelap pada kulit setelah peradangan atau luka sembuh, seringkali merupakan bekas jerawat atau luka.'],
            ['kode_gejala' => 'G008', 'nama_gejala' => 'PIE (Post Inflammatory Erythema)', 'deskripsi' => 'Area merah pada kulit setelah peradangan atau luka sembuh, biasanya lebih merah daripada warna kulit sekitarnya.'],
            ['kode_gejala' => 'G009', 'nama_gejala' => 'Hormonal Acne', 'deskripsi' => 'Jerawat yang muncul terutama di sekitar dagu, rahang, dan pipi, seringkali terkait dengan fluktuasi hormon seperti selama menstruasi atau kehamilan.'],
            ['kode_gejala' => 'G010', 'nama_gejala' => 'Fungal Acne', 'deskripsi' => 'Jerawat yang disebabkan oleh infeksi jamur, muncul sebagai benjolan kecil di area yang lembab dan berambut seperti di sekitar rambut atau di daerah lipatan kulit.'],
            ['kode_gejala' => 'G011', 'nama_gejala' => 'Regular Acne', 'deskripsi' => 'Jerawat yang disebabkan oleh infeksi bakteri Propionibacterium acnes pada pori-pori kulit, terlihat sebagai komedo (jerawat hitam dan putih), papula (benjolan merah), pustula (berisi nanah), atau nodul (benjolan keras yang dalam).'],
            ['kode_gejala' => 'G012', 'nama_gejala' => 'Garis-Garis Halus', 'deskripsi' => 'Garis-garis kecil yang muncul pada kulit sebagai tanda penuaan atau kehilangan elastisitas, terutama di area yang sering bergerak seperti di sekitar mata atau mulut.'],
            ['kode_gejala' => 'G013', 'nama_gejala' => 'Kulit Terlihat Kusam', 'deskripsi' => 'Kulit yang kehilangan kecerahan alaminya dan tampak kurang sehat, mungkin disebabkan oleh dehidrasi, polusi, atau kurangnya perawatan kulit yang tepat.'],
            ['kode_gejala' => 'G014', 'nama_gejala' => 'Kulit Kemerahan (Iritasi)', 'deskripsi' => 'Kulit yang merah dan mungkin terasa panas atau gatal karena terpapar bahan yang menyebabkan iritasi seperti produk perawatan kulit yang keras atau paparan lingkungan yang ekstrem.'],
            ['kode_gejala' => 'G015', 'nama_gejala' => 'Kulit Kemerahan (Skin Barrier Rusak)', 'deskripsi' => 'Kulit yang merah dan rentan terhadap iritasi karena lapisan pelindungnya rusak, seringkali disebabkan oleh penggunaan produk yang terlalu keras atau terlalu sering.'],
            ['kode_gejala' => 'G016', 'nama_gejala' => 'Pori-Pori Lebar', 'deskripsi' => 'Pori-pori yang terlihat besar dan terbuka, mungkin disebabkan oleh kelebihan produksi minyak, penumpukan kotoran dan debu, atau faktor genetik.'],
            ['kode_gejala' => 'G017', 'nama_gejala' => 'Eye Dark Circle (Lingkar Hitam di Bawah Mata)', 'deskripsi' => 'Area gelap di sekitar mata yang dapat disebabkan oleh faktor genetik, kurang tidur, stres, atau penuaan.'],
            ['kode_gejala' => 'G018', 'nama_gejala' => 'Berkomedo', 'deskripsi' => 'Penumpukan sebum dan sel-sel kulit mati di dalam pori-pori, terlihat sebagai titik hitam (komedo terbuka) atau putih (komedo tertutup).'],
            ['kode_gejala' => 'G019', 'nama_gejala' => 'Sunburn', 'deskripsi' => 'Kulit yang merah dan terasa panas setelah terpapar sinar UV matahari terlalu lama, dapat meningkatkan risiko kanker kulit dan penuaan dini.'],
            ['kode_gejala' => 'G020', 'nama_gejala' => 'Bruntusan', 'deskripsi' => 'Benjolan kecil atau kemerahan di kulit yang mirip dengan jerawat tetapi bukan jerawat, seringkali terjadi di area pipi atau dahi.'],
            ['kode_gejala' => 'G021', 'nama_gejala' => 'Kulit Wajah Belang', 'deskripsi' => 'Perbedaan warna yang terlihat pada kulit wajah, mungkin disebabkan oleh hiperpigmentasi, penuaan, atau kondisi kulit lainnya.'],
            ['kode_gejala' => 'G022', 'nama_gejala' => 'Keriput', 'deskripsi' => 'Garis-garis yang muncul pada kulit sebagai tanda penuaan atau kehilangan elastisitas, terutama di area yang sering bergerak seperti di sekitar mata, mulut, dan kening.'],
            ['kode_gejala' => 'G023', 'nama_gejala' => 'Tekstur Kulit Tidak Merata', 'deskripsi' => 'Kulit yang tidak halus atau rata, mungkin terasa kasar atau berlekuk, seringkali disebabkan oleh penumpukan sel-sel kulit mati atau kerusakan kolagen.'],
            ['kode_gejala' => 'G024', 'nama_gejala' => 'Terdapat Kulit Mati', 'deskripsi' => 'Lapisan kulit yang kering dan mati yang terlihat sebagai kulit yang terkelupas atau terasa kasar, seringkali membutuhkan eksfoliasi atau peeling untuk menghilangkannya.'],
            ['kode_gejala' => 'G025', 'nama_gejala' => 'Rosacea', 'deskripsi' => 'Kondisi kulit yang ditandai dengan kemerahan, pembengkakan, dan pembuluh darah yang tampak pada wajah, seringkali terjadi di pipi, hidung, dahi, atau dagu.'],
            ['kode_gejala' => 'G026', 'nama_gejala' => 'Kulit Kelelahan', 'deskripsi' => 'Kulit yang tampak kusam, kering, atau kemerahan akibat paparan polusi, debu, radiasi UV, stres, kurang tidur.'],
        ];

        DB::table('gejala')->insert($gejala);
    }
}
