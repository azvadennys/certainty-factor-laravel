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
            [
                'kode_gejala' => 'G001', 'nama_gejala' => 'Kulit Normal',
                'deskripsi_gejala' => 'Kulit normal adalah kulit yang seimbang secara alami, tidak terlalu kering atau berminyak, tidak sensitif, dengan tekstur halus, warna merata, pori-pori normal, dan kurang tanda-tanda penuaan dini.', 'foto_gejala' => 'images/gejalas/G001.jpg'
            ],
            [
                'kode_gejala' => 'G002', 'nama_gejala' => 'Kulit kering',
                'deskripsi_gejala' => 'Kulit kering merupakan kondisi di mana kulit kekurangan kelembapan alami. Ciri-cirinya termasuk terasa kaku atau kasar, mungkin bersisik atau pecah-pecah, serta rentan terhadap iritasi dan gatal', 'foto_gejala' => 'images/gejalas/G002.jpg'
            ],
            [
                'kode_gejala' => 'G003', 'nama_gejala' => 'Kulit berminyak',
                'deskripsi_gejala' => 'Kulit berminyak adalah kondisi di mana kulit menghasilkan sebum berlebihan. Ciri-cirinya termasuk kilau berlebihan, pori-pori yang membesar, rentan terhadap jerawat dan komedo.', 'foto_gejala' => 'images/gejalas/G003.jpg'
            ],
            [
                'kode_gejala' => 'G004', 'nama_gejala' => 'Kulit sensitif',
                'deskripsi_gejala' => 'Kulit sensitif adalah kondisi di mana kulit rentan terhadap iritasi dan reaksi negatif terhadap faktor eksternal seperti produk perawatan kulit, bahan kimia, atau lingkungan. Ciri-cirinya termasuk kemerahan, gatal, rasa terbakar, atau bahkan timbulnya ruam.', 'foto_gejala' => 'images/gejalas/G004.jpg'
            ],
            [
                'kode_gejala' => 'G005', 'nama_gejala' => 'Tipe kulit campuran',
                'deskripsi_gejala' => 'Kulit campuran adalah kombinasi dari dua jenis kulit yang berbeda di area wajah. Biasanya, bagian T-zone (dahi, hidung, dan dagu) cenderung berminyak, sementara pipi dan area lainnya mungkin kering atau normal. Ciri-cirinya termasuk kilau di T-zone, pori-pori yang memperluas, serta kemungkinan munculnya jerawat di area berminyak dan kekeringan di area lainnya.', 'foto_gejala' => 'images/gejalas/G005.jpg'
            ],
            [
                'kode_gejala' => 'G006', 'nama_gejala' => 'Hiperpigmentasi (Flek) (Hormonal, Aging)',
                'deskripsi_gejala' => 'Hiperpigmentasi adalah kondisi di mana terjadi penumpukan melanin yang mengakibatkan area kulit menjadi gelap atau berwarna tidak merata. Ini bisa disebabkan oleh paparan sinar matahari berlebihan, peradangan kulit, atau perubahan hormonal seperti saat hamil atau menggunakan kontrasepsi.', 'foto_gejala' => 'images/gejalas/G006.jpg'
            ],
            [
                'kode_gejala' => 'G007', 'nama_gejala' => 'PIH (Post inflamatory hiperpigmentation)',
                'deskripsi_gejala' => 'Post-inflammatory hyperpigmentation (PIH) adalah kondisi di mana area kulit mengalami hiperpigmentasi setelah mengalami peradangan (jerawat) atau cedera. Ini bisa terjadi setelah jerawat, luka, dermatitis, atau trauma kulit lainnya. Penyebabnya adalah peningkatan produksi melanin sebagai respons terhadap peradangan atau trauma. Ciri-cirinya adalah bercak gelap atau berwarna pada kulit yang mungkin memudar seiring waktu, tetapi seringkali memerlukan waktu lama untuk menghilang secara alami.', 'foto_gejala' => 'images/gejalas/G007.jpg'
            ],
            [
                'kode_gejala' => 'G008', 'nama_gejala' => 'PIE (Post inflamatory Eritematous)',
                'deskripsi_gejala' => 'Post-inflammatory erythema (PIE) adalah kondisi di mana terjadi perubahan warna kulit menjadi merah atau kemerahan setelah mengalami peradangan atau cedera. Berbeda dengan hiperpigmentasi (PIH), PIE tidak melibatkan penumpukan melanin, tetapi lebih terkait dengan peningkatan aliran darah dan peradangan pada kulit. Ini sering kali terlihat sebagai bercak merah muda atau merah tua yang dapat bertahan lebih lama dari hiperpigmentasi dan cenderung memudar perlahan seiring waktu.PIE umumnya terjadi setelah jerawat, luka, atau reaksi inflamasi kulit lainnya.', 'foto_gejala' => 'images/gejalas/G008.jpg'
            ],
            [
                'kode_gejala' => 'G009', 'nama_gejala' => 'Hormonal acne (hormon)',
                'deskripsi_gejala' => 'Hormonal acne adalah jenis jerawat yang dipicu oleh perubahan hormon dalam tubuh, terutama kadar hormon androgen seperti testosteron. Jerawat hormonal sering kali muncul pada wanita selama siklus menstruasi, kehamilan, atau menopause, dan juga dapat terjadi pada pria. Ciri-ciri hormonal acne meliputi jerawat yang muncul di daerah T-zone (dahi, hidung, dan dagu), jerawat yang meradang dengan ukuran besar, serta kemungkinan munculnya jerawat yang persisten dan sulit diobati.', 'foto_gejala' => 'images/gejalas/G009.jpg'
            ],
            ['kode_gejala' => 'G010', 'nama_gejala' => 'Fungal acne (area wajah yang lembab dan berambut)', 'deskripsi_gejala' => 'Fungal acne, atau yang dikenal juga sebagai pityrosporum folliculitis, adalah kondisi jerawat yang disebabkan oleh pertumbuhan jamur jenis yeast di kulit, terutama Malassezia. Ciri-ciri fungal acne meliputi jerawat kecil berwarna putih atau merah muda yang muncul di area yang cenderung lembab dan berambut, seperti wajah, leher, atau punggung. Jerawat jenis ini sering kali terasa gatal dan dapat memburuk dengan penggunaan produk perawatan kulit yang mengandung minyak atau dapat menyumbat pori-pori.', 'foto_gejala' => 'images/gejalas/G010.jpg'],
            ['kode_gejala' => 'G011', 'nama_gejala' => 'Regular acne (infeksi bakteri)', 'deskripsi_gejala' => 'Regular acne, atau jerawat biasa, adalah kondisi kulit yang disebabkan oleh peradangan folikel rambut akibat infeksi bakteri Propionibacterium acnes (P. acnes). Jerawat biasa ini umumnya terjadi pada masa remaja atau selama perubahan hormonal lainnya, tetapi dapat juga mempengaruhi orang dewasa. Ciri-ciri jerawat biasa meliputi munculnya komedo (komedo terbuka atau tertutup), papula (benjolan kecil yang merah), pustula (jerawat berisi nanah), dan dalam kasus yang lebih parah, nodul atau kista yang lebih besar dan lebih dalam di bawah kulit. Jerawat biasa sering kali muncul di area wajah yang merupakan area dengan kelenjar minyak yang lebih aktif.', 'foto_gejala' => 'images/gejalas/G011.jpg'],
            ['kode_gejala' => 'G012', 'nama_gejala' => 'Garis - garis halus', 'deskripsi_gejala' => 'Garis-garis halus pada wajah adalah tanda-tanda penuaan dini yang biasanya muncul sebagai lipatan halus atau kerutan kecil di permukaan kulit. Mereka dapat disebabkan oleh penurunan elastisitas kulit dan hilangnya kolagen seiring bertambahnya usia, serta faktor-faktor seperti paparan sinar UV, gaya hidup, dan genetika.', 'foto_gejala' => 'images/gejalas/G012.jpg'],
            ['kode_gejala' => 'G013', 'nama_gejala' => 'Kulit terlihat kusam', 'deskripsi_gejala' => 'Kulit terlihat kusam pada wajah adalah kondisi di mana kulit kehilangan kilau alami dan tampak tidak segar. Penyebabnya bisa bermacam-macam, termasuk kurangnya kelembapan, penumpukan sel kulit mati, paparan lingkungan, kurangnya tidur, dan kurangnya perawatan kulit yang tepat.', 'foto_gejala' => 'images/gejalas/G013.jpg'],
            ['kode_gejala' => 'G014', 'nama_gejala' => 'Kulit kemerahan (iritasi)', 'deskripsi_gejala' => 'Kulit kemerahan adalah kondisi di mana kulit tampak merah atau berwarna lebih terang dari biasanya. Ini sering disebabkan oleh iritasi atau peradangan kulit yang bisa disebabkan oleh berbagai faktor seperti reaksi alergi, paparan sinar matahari, suhu ekstrem, stres, dan infeksi kulit.', 'foto_gejala' => 'images/gejalas/G014.jpg'],
            ['kode_gejala' => 'G015', 'nama_gejala' => 'Kulit kemerahan (Skin barrier rusak)', 'deskripsi_gejala' => 'Kulit kemerahan karena kerusakan pada skin barrier adalah kondisi di mana lapisan pelindung kulit menjadi terganggu, menyebabkan kulit tampak merah dan sensitif. Skin barrier atau penghalang kulit biasanya terdiri dari lapisan luar kulit yang terdiri dari lemak (lipid) dan protein yang menjaga kelembapan dan melindungi kulit dari iritasi serta infeksi.', 'foto_gejala' => 'images/gejalas/G015.jpg'],
            ['kode_gejala' => 'G016', 'nama_gejala' => 'Pori-pori lebar', 'deskripsi_gejala' => 'Pori-pori lebar adalah kondisi di mana lubang-lubang di permukaan kulit yang mengeluarkan minyak (sebum) dan keringat terlihat lebih besar dan lebih terbuka dari biasanya.', 'foto_gejala' => 'images/gejalas/G016.jpg'],
            ['kode_gejala' => 'G017', 'nama_gejala' => 'Eye Dark circle (lingkar hitam dibawah mata)', 'deskripsi_gejala' => 'Lingkar hitam di bawah mata, atau yang dikenal sebagai dark circles, adalah kondisi di mana area di sekitar mata tampak gelap atau bayangan. Beberapa faktor yang dapat menyebabkan dark circles meliputi genetika, kurang tidur, penuaan, faktor lingkungan, dan ketidakseimbangan hormon.', 'foto_gejala' => 'images/gejalas/G017.jpg'],
            ['kode_gejala' => 'G018', 'nama_gejala' => 'Berkomedo', 'deskripsi_gejala' => 'Komedo adalah jenis jerawat yang terbentuk ketika pori-pori kulit tersumbat oleh sebum (minyak kulit) dan sel-sel kulit mati. Ada dua jenis komedo: Komedo terbuka (blackhead) yang terlihat seperti titik hitam kecil di permukaan kulit, terbentuk ketika pori-pori terbuka dan sebum serta sel kulit mati mengoksidasi di udara. Komedo tertutup (whitehead) yang terbentuk ketika pori-pori tertutup oleh sel-sel kulit mati dan sebum, terlihat seperti benjolan kecil putih di kulit.', 'foto_gejala' => 'images/gejalas/G018.jpg'],
            ['kode_gejala' => 'G019', 'nama_gejala' => 'Sunburn (kulit merah karena sinar uv/sinar matahari)', 'deskripsi_gejala' => 'Sunburn adalah kondisi kulit yang terbakar atau merah karena paparan sinar ultraviolet (UV) dari sinar matahari atau sumber lainnya seperti lampu UV. Paparan sinar UV dapat menyebabkan kerusakan pada kulit yang terlihat dalam bentuk kemerahan, nyeri, dan bahkan pembengkakan.', 'foto_gejala' => 'images/gejalas/G019.jpg'],
            ['kode_gejala' => 'G020', 'nama_gejala' => 'Bruntusan', 'deskripsi_gejala' => 'Bruntusan adalah kondisi kulit di mana terbentuk banyak bintik-bintik kecil atau komedo yang tidak begitu mencolok tetapi cukup terlihat. Bintik-bintik ini biasanya terjadi di area wajah, terutama di dahi, hidung, dan dagu. Penyebabnya dapat bervariasi, termasuk produksi sebum berlebihan, penumpukan sel kulit mati, reaksi terhadap produk perawatan kulit, atau perubahan hormonal.', 'foto_gejala' => 'images/gejalas/G020.jpg'],
            ['kode_gejala' => 'G021', 'nama_gejala' => 'Kulit wajah belang', 'deskripsi_gejala' => 'Kulit wajah yang belang adalah kondisi di mana terdapat perbedaan warna atau bintik-bintik yang tidak merata pada kulit wajah. Ini bisa disebabkan oleh beberapa faktor, seperti paparan sinar matahari, penuaan, hiperpigmentasi, dan masalah kulit lainnya.', 'foto_gejala' => 'images/gejalas/G021.jpg'],
            ['kode_gejala' => 'G022', 'nama_gejala' => 'Keriput (terdapat kerutan yang cukup banyak)', 'deskripsi_gejala' => 'Keriput adalah tanda penuaan pada kulit yang ditandai dengan munculnya garis-garis atau lipatan kecil di permukaan kulit. Ini terjadi karena proses alami penuaan yang menyebabkan berkurangnya elastisitas dan kolagen kulit. Faktor-faktor lain yang mempengaruhi munculnya keriput meliputi paparan sinar matahari berlebihan, merokok, polusi, dan genetika.', 'foto_gejala' => 'images/gejalas/G022.jpg'],
            ['kode_gejala' => 'G023', 'nama_gejala' => 'Tekstur kulit tidak merata', 'deskripsi_gejala' => 'Tekstur kulit tidak merata merujuk pada kondisi di mana permukaan kulit tampak tidak halus atau tidak sejajar, sering kali dengan adanya ketidakrataan, pori-pori yang besar, atau bintik-bintik yang tidak teratur. Beberapa penyebabnya seperti kerusakan atau masalah kulit dan penuaan.', 'foto_gejala' => 'images/gejalas/G023.jpg'],
            ['kode_gejala' => 'G024', 'nama_gejala' => 'Terdapat kulit mati', 'deskripsi_gejala' => 'Kulit mati adalah lapisan sel-sel kulit yang sudah mati dan menumpuk di permukaan kulit. Ini adalah bagian dari siklus alami regenerasi kulit di mana sel-sel kulit yang tua dan mati digantikan oleh sel-sel kulit baru di bawahnya. Penumpukan kulit mati dapat menyebabkan kulit terlihat kusam, kasar, dan tidak merata.', 'foto_gejala' => 'images/gejalas/G024.jpg'],
            ['kode_gejala' => 'G025', 'nama_gejala' => 'Rosacea (Kulit kemerhan dan pembuluh darah terlihat di wajah)', 'deskripsi_gejala' => 'Rosacea adalah kondisi kulit kronis yang ditandai oleh kemerahan, pembuluh darah terlihat, dan seringkali dapat disertai dengan pembengkakan pada wajah. Beberapa faktor dapat mempengaruhinya rosacea termasuk faktor genetik, perubahan dalam pembuluh darah, dan reaksi inflamasi pada kulit.', 'foto_gejala' => 'images/gejalas/G025.jpg'],
            ['kode_gejala' => 'G026', 'nama_gejala' => 'Kulit kelelahan (akibat polusi, debu dll)', 'deskripsi_gejala' => 'Kulit kelelahan adalah kondisi di mana kulit tampak kusam, lelah, dan kurang bercahaya akibat paparan lingkungan yang buruk seperti polusi udara, debu, serta faktor-faktor lain seperti stres dan kurang tidur.', 'foto_gejala' => 'images/gejalas/G026.jpg'],
            ['kode_gejala' => 'G027', 'nama_gejala' => 'Dermatitis (kemerahan dan bintik-bintik)', 'deskripsi_gejala' => 'Dermatitis adalah istilah medis yang digunakan untuk menggambarkan kondisi kulit yang meradang dan iritasi. Beberapa ciri-ciri umum dermatitis yaitu kemerahan, gatal, bintik-bintik ruam, dan kulit kering atau bersisik.', 'foto_gejala' => 'images/gejalas/G027.jpg'],
            ['kode_gejala' => 'G028', 'nama_gejala' => 'Kulit mengelupas', 'deskripsi_gejala' => 'Kulit mengelupas adalah kondisi di mana lapisan luar kulit terkelupas atau terlepas dari permukaan kulit. Ini biasanya terjadi sebagai respons alami terhadap regenerasi kulit di mana sel-sel kulit mati digantikan oleh sel-sel kulit baru di bawahnya. Beberapa penyebab umum kulit mengelupas yaitu paparan sinar matahari berlebihan, kulit kering, efek samping perawatan kulit, da pelepasan sel-sel kulit mati.', 'foto_gejala' => 'images/gejalas/G028.jpg']
        ];

        DB::table('gejala')->insert($gejala);
    }
}
