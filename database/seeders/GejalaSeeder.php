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
            ['kode_gejala' => 'G001', 'nama_gejala' => 'Kulit normal', 'deskripsi_gejala' => 'Kulit yang sehat dan seimbang, tidak terlalu berminyak atau terlalu kering, tidak ada masalah khusus yang terlihat.', 'foto_gejala' => 'images/gejalas/G001.jpg'],
            ['kode_gejala' => 'G002', 'nama_gejala' => 'Kulit kering', 'deskripsi_gejala' => 'Kulit terasa kering dan kasar, mungkin terkelupas atau terasa ketat setelah dicuci. Garis-garis halus dan kerutan mungkin lebih terlihat.', 'foto_gejala' => 'images/gejalas/G002.jpg'],
            ['kode_gejala' => 'G003', 'nama_gejala' => 'Kulit berminyak', 'deskripsi_gejala' => 'Permukaan kulit tampak berkilau dan terlalu berminyak, sering kali terutama di zona T (dahi, hidung, dagu). Rentan terhadap jerawat dan pori-pori terlihat lebih besar.', 'foto_gejala' => 'images/gejalas/G003.jpg'],
            ['kode_gejala' => 'G004', 'nama_gejala' => 'Kulit sensitif', 'deskripsi_gejala' => 'Kulit yang rentan terhadap iritasi, kemerahan, gatal, atau terasa terbakar setelah terpapar bahan tertentu seperti produk perawatan kulit, deterjen, atau cuaca ekstrem.', 'foto_gejala' => 'images/gejalas/G004.jpg'],
            ['kode_gejala' => 'G005', 'nama_gejala' => 'Tipe kulit campuran', 'deskripsi_gejala' => 'Bagian T-zone (dahi, hidung, dagu) cenderung berminyak, sementara pipi cenderung kering atau normal. Rentan terhadap jerawat di daerah berminyak dan mungkin terasa kering di area kering.', 'foto_gejala' => 'images/gejalas/G005.jpg'],
            ['kode_gejala' => 'G006', 'nama_gejala' => 'Hiperpigmentasi (flek) (hormonal, aging)', 'deskripsi_gejala' => 'Area kulit yang lebih gelap dari warna kulit sekitarnya, mungkin disebabkan oleh paparan sinar matahari, bekas jerawat, atau perubahan hormon.', 'foto_gejala' => 'images/gejalas/G006.jpg'],
            ['kode_gejala' => 'G007', 'nama_gejala' => 'PIH (Post inflamatory hiperpigmentation)', 'deskripsi_gejala' => 'Area gelap pada kulit setelah peradangan atau luka sembuh, seringkali merupakan bekas jerawat atau luka.', 'foto_gejala' => 'images/gejalas/G007.jpg'],
            ['kode_gejala' => 'G008', 'nama_gejala' => 'PIE (Post inflamatory Eritematous)', 'deskripsi_gejala' => 'Area merah pada kulit setelah peradangan atau luka sembuh, biasanya lebih merah daripada warna kulit sekitarnya.', 'foto_gejala' => 'images/gejalas/G008.jpg'],
            ['kode_gejala' => 'G009', 'nama_gejala' => 'Hormonal acne (hormon)', 'deskripsi_gejala' => 'Jerawat yang muncul terutama di sekitar dagu, rahang, dan pipi, seringkali terkait dengan fluktuasi hormon seperti selama menstruasi atau kehamilan.', 'foto_gejala' => 'images/gejalas/G009.jpg'],
            ['kode_gejala' => 'G010', 'nama_gejala' => 'Fungal acne (area wajah yang lembab dan berambut)', 'deskripsi_gejala' => 'Jerawat yang disebabkan oleh infeksi jamur, muncul sebagai benjolan kecil di area yang lembab dan berambut seperti di sekitar rambut atau di daerah lipatan kulit.', 'foto_gejala' => 'images/gejalas/G010.jpg'],
            ['kode_gejala' => 'G011', 'nama_gejala' => 'Regular acne (infeksi bakteri)', 'deskripsi_gejala' => 'Jerawat yang disebabkan oleh infeksi bakteri Propionibacterium acnes pada pori-pori kulit, terlihat sebagai komedo (jerawat hitam dan putih), papula (benjolan merah), pustula (berisi nanah), atau nodul (benjolan keras yang dalam).', 'foto_gejala' => 'images/gejalas/G011.jpg'],
            ['kode_gejala' => 'G012', 'nama_gejala' => 'Garis - garis halus', 'deskripsi_gejala' => 'Garis-garis kecil yang muncul pada kulit sebagai tanda penuaan atau kehilangan elastisitas, terutama di area yang sering bergerak seperti di sekitar mata atau mulut.', 'foto_gejala' => 'images/gejalas/G012.jpg'],
            ['kode_gejala' => 'G013', 'nama_gejala' => 'Kulit terlihat kusam', 'deskripsi_gejala' => 'Kulit yang kehilangan kecerahan alaminya dan tampak kurang sehat, mungkin disebabkan oleh dehidrasi, polusi, atau kurangnya perawatan kulit yang tepat.', 'foto_gejala' => 'images/gejalas/G013.jpg'],
            ['kode_gejala' => 'G014', 'nama_gejala' => 'Kulit kemerahan (iritasi)', 'deskripsi_gejala' => 'Kulit yang merah dan mungkin terasa panas atau gatal karena terpapar bahan yang menyebabkan iritasi seperti produk perawatan kulit yang keras atau paparan lingkungan yang ekstrem.', 'foto_gejala' => 'images/gejalas/G014.jpg'],
            ['kode_gejala' => 'G015', 'nama_gejala' => 'Kulit kemerahan (Skin barrier rusak)', 'deskripsi_gejala' => 'Kulit yang merah dan rentan terhadap iritasi karena lapisan pelindungnya rusak, seringkali disebabkan oleh penggunaan produk yang terlalu keras atau terlalu sering.', 'foto_gejala' => 'images/gejalas/G015.jpg'],
            ['kode_gejala' => 'G016', 'nama_gejala' => 'Pori-pori lebar', 'deskripsi_gejala' => 'Pori-pori yang terlihat besar dan terbuka, mungkin disebabkan oleh kelebihan produksi minyak, penumpukan kotoran dan debu, atau faktor genetik.', 'foto_gejala' => 'images/gejalas/G016.jpg'],
            ['kode_gejala' => 'G017', 'nama_gejala' => 'Eye Dark circle (lingkar hitam dibawah mata)', 'deskripsi_gejala' => 'Area gelap di sekitar mata yang dapat disebabkan oleh faktor genetik, kurang tidur, stres, atau penuaan.', 'foto_gejala' => 'images/gejalas/G017.jpg'],
            ['kode_gejala' => 'G018', 'nama_gejala' => 'Berkomedo', 'deskripsi_gejala' => 'Penumpukan sebum dan sel-sel kulit mati di dalam pori-pori, terlihat sebagai titik hitam (komedo terbuka) atau putih (komedo tertutup).', 'foto_gejala' => 'images/gejalas/G018.jpg'],
            ['kode_gejala' => 'G019', 'nama_gejala' => 'Sunburn (kulit merah karena sinar uv/sinar matahari)', 'deskripsi_gejala' => 'Kulit yang merah dan terasa panas setelah terpapar sinar UV matahari terlalu lama, dapat meningkatkan risiko kanker kulit dan penuaan dini.', 'foto_gejala' => 'images/gejalas/G019.jpg'],
            ['kode_gejala' => 'G020', 'nama_gejala' => 'Bruntusan', 'deskripsi_gejala' => 'Benjolan kecil atau kemerahan di kulit yang mirip dengan jerawat tetapi bukan jerawat, seringkali terjadi di area pipi atau dahi.', 'foto_gejala' => 'images/gejalas/G020.jpg'],
            ['kode_gejala' => 'G021', 'nama_gejala' => 'Kulit wajah belang', 'deskripsi_gejala' => 'Perbedaan warna yang terlihat pada kulit wajah, mungkin disebabkan oleh hiperpigmentasi, penuaan, atau kondisi kulit lainnya.', 'foto_gejala' => 'images/gejalas/G021.jpg'],
            ['kode_gejala' => 'G022', 'nama_gejala' => 'Keriput (terdapat kerutan yang cukup banyak)', 'deskripsi_gejala' => 'Garis-garis yang muncul pada kulit sebagai tanda penuaan atau kehilangan elastisitas, terutama di area yang sering bergerak seperti di sekitar mata, mulut, dan kening.', 'foto_gejala' => 'images/gejalas/G022.jpg'],
            ['kode_gejala' => 'G023', 'nama_gejala' => 'Tekstur kulit tidak merata', 'deskripsi_gejala' => 'Kulit yang tidak halus atau rata, mungkin terasa kasar atau berlekuk, seringkali disebabkan oleh penumpukan sel-sel kulit mati atau kerusakan kolagen.', 'foto_gejala' => 'images/gejalas/G023.jpg'],
            ['kode_gejala' => 'G024', 'nama_gejala' => 'Terdapat kulit mati', 'deskripsi_gejala' => 'Lapisan kulit yang kering dan mati yang terlihat sebagai kulit yang terkelupas atau terasa kasar, seringkali membutuhkan eksfoliasi atau peeling untuk menghilangkannya.', 'foto_gejala' => 'images/gejalas/G024.jpg'],
            ['kode_gejala' => 'G025', 'nama_gejala' => 'Rosacea (Kulit kemerhan dan pembuluh darah terlihat di wajah)', 'deskripsi_gejala' => 'Kondisi kulit yang ditandai dengan kemerahan, pembengkakan, dan pembuluh darah yang tampak pada wajah, seringkali terjadi di pipi, hidung, dahi, atau dagu.', 'foto_gejala' => 'images/gejalas/G025.jpg'],
            ['kode_gejala' => 'G026', 'nama_gejala' => 'Kulit kelelahan (akibat polusi, debu dll)', 'deskripsi_gejala' => 'Kulit yang tampak kusam, kering, atau kemerahan akibat paparan polusi, debu, radiasi UV, stres, kurang tidur.', 'foto_gejala' => 'images/gejalas/G026.jpg'],
            ['kode_gejala' => 'G027', 'nama_gejala' => 'Dermatitis (kemerahan dan bintik-bintik)', 'deskripsi_gejala' => 'Kulit yang meradang dengan bintik-bintik yang muncul, seringkali disebabkan oleh alergi atau reaksi terhadap iritan tertentu.', 'foto_gejala' => 'images/gejalas/G027.jpg'],
            ['kode_gejala' => 'G028', 'nama_gejala' => 'Kulit mengelupas', 'deskripsi_gejala' => 'Kulit yang mengalami pengelupasan, seringkali karena kulit kering yang parah atau kondisi kulit tertentu seperti psoriasis.', 'foto_gejala' => 'images/gejalas/G028.jpg']
        ];

        DB::table('gejala')->insert($gejala);
    }
}
