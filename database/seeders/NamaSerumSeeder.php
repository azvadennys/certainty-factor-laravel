<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaSerumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serums = [
            [
                'kode_serum' => 'S001',
                'nama_serum' => 'Diamond Phyto Stem Cell Serum',
                'deskripsi' => 'Somethinc Diamond Phyto Stem Cell Serum merupakan vegan serum dengan Real Diamond & Swiss Alps Stem Cells untuk membantu membuat kulit halus bercahaya, mempercepat pembaharuan lapisan kulit, sekaligus melawan tanda penuaan dini seperti kerutan & pori-pori besar. Dilengkapi dengan kandungan 4-MSK Diamond Bright Molecule & Guaiazulene yang membantu mencerahkan, menghaluskan, meratakan warna kulit, & menenangkan kemerahan.',
                'foto_serum' => 'images/serums/S001.jpg',
            ],
            [
                'kode_serum' => 'S002',
                'nama_serum' => '5% Niacinemide + Moisture sabi beet serum',
                'deskripsi' => 'Serum Niacinamide 5% dengan kandungan SABIWHITE x BEET sebagai #1 Brightening Agent. Hadir untuk membantu mencerahkan secara maksimal, mengurangi pigmentasi, memperbaiki tekstur kulit, memperkuat skin barrier, menyamarkan noda hitam, melembabkan, & mengurangi kemerahan. Kandungan Niacinamide 10% memiliki efek & hasil yang lebih kuat pada kulit wajah dan cocok bagi kalian yang sudah terbiasa memakai Niacinamide. Cocok untuk kulit sensitif, berminyak dan berjerawat.',
                'foto_serum' => 'images/serums/S002.jpg',
            ],
            [
                'kode_serum' => 'S003',
                'nama_serum' => 'Lemonade Waterless Vitamin C + Ferulic + NAG',
                'deskripsi' => 'Vitamin C (EAA) & Ferulic, yang memiliki efek sinergis sempurna untuk mencerahkan kulit, serta 67% air ekstrak lemon Jeju yang kaya akan antioksidan sehingga efektif mengurangi flek hitam, keriput & tampilan garis halus. Dengan Ethyl Ascorbic Acid (EAA) yang sudah teruji klinis mampu mencerahkan kulit dalam 4 minggu.',
                'foto_serum' => 'images/serums/S003.jpg',
            ],
            [
                'kode_serum' => 'S004',
                'nama_serum' => 'Dark Spot Reducer Ampoule',
                'deskripsi' => 'PIH & PIE Targeted Treatment Ampoule yang diformulasikan dengan kombinasi zat aktif yang teruji klinis, salah satunya adalah Tranexamoyl Dipeptide-23 yang bertindak sebagai double brightening effect tanpa mengiritasi kulit sehingga warna kulit lebih merata, lebih cerah, bekas jerawat & flek hitam tersamarkan. Tingkat penyerapan dan efikasinya pun lebih tinggi dari Tranexamic Acid biasa.',
                'foto_serum' => 'images/serums/S004.jpg',
            ],
            [
                'kode_serum' => 'S005',
                'nama_serum' => 'CRIOUSLY 24K GOLD Essence',
                'deskripsi' => 'Essence Vitamin C (Ascorbil Glucoside) yang lebih stabil, tidak mudah oksidasi, & sangat membantu untuk mencerahkan kulit. Diinfus dengan ekstrak emas yang bersifat anti-aging, kulit pun menjadi lebih halus, cerah bercahaya, & tampak sehat karena terlindungi dari paparan sinar UV.',
                'foto_serum' => 'images/serums/S005.jpg',
            ],
            [
                'kode_serum' => 'S006',
                'nama_serum' => 'Revive Potion 3% Arbutin + Bakuchiol',
                'deskripsi' => 'Alpha Arbutin, SabiWhite®, & Bakuchiol yang mampu mencerahkan & meratakan warna kulit tanpa efek samping. Disempurnakan dengan kandungan Bakuchiol yang juga mampu melindungi kulit dari polusi & radikal bebas, menyamarkan hiperpigmentasi, serta menghambat penuaan dini.',
                'foto_serum' => 'images/serums/S006.jpg',
            ],
            [
                'kode_serum' => 'S007',
                'nama_serum' => 'HYALuronic9+ Advanced + B5 Serum',
                'deskripsi' => 'Mengandung 9 jenis Hyaluronic Acid, B5 (Panthenol) & Chlorella, berperan penting dalam meningkatkan produksi kolagen & mengunci kelembaban maksimal hingga 48 jam ke lapisan kulit terdalam. Menenangkan kulit & membersihkan pori-pori kulit. Baik untuk semua jenis kulit & kulit sensitif.',
                'foto_serum' => 'images/serums/S007.jpg',
            ],
            [
                'kode_serum' => 'S008',
                'nama_serum' => 'RESURRECT Multibiome Serum',
                'deskripsi' => 'Serum neutralizer & balancer ini bertindak sebagai solusi bagi kulit yang mengalami breakout dengan Millions Microbiome Balancer in One Drop sehingga mencegah permasalahan kulit akibat ketidakseimbangan skin mikrobiota.',
                'foto_serum' => 'images/serums/S008.jpg',
            ],
            [
                'kode_serum' => 'S009',
                'nama_serum' => '3% Astaxanthin + Chlorelina Serum',
                'deskripsi' => 'Astaxanthin, Chlorella & Spirulina, merupakan 65x* Antioxidant Booster yang mampu memberikan energi & kesegaran pada kulit yang tampak lelah akibat polusi, radikal bebas, serta pola tidur yang kurang baik.',
                'foto_serum' => 'images/serums/S009.jpg',
            ],
            [
                'kode_serum' => 'S010',
                'nama_serum' => '10% Niacinamide Barrier Serum',
                'deskripsi' => '10% Serum Niacinamide dengan formulasi Vegan, 3 jenis Ceramide dan Rosa Damascena Water dapat memperkuat skin barrier, mencerahkan,   menyamarkan noda hitam, mengurangi kemerahan dan melembabkan kulit. Cocok untuk segala jenis kulit & kulit bruntusan.',
                'foto_serum' => 'images/serums/S010.jpg',
            ],
            [
                'kode_serum' => 'S011',
                'nama_serum' => 'Skin Defender Bakuchiol + COQ10 Serum',
                'deskripsi' => 'Merupakan Free Radical Defense System dengan kombinasi powerful dari Bakuchiol (vegan alternatif Retinol) , CoQ10, & PALMITOYL TRIPEPTIDE-38, yang efektif untuk membantu memperkuat jaringan kolagen, mencegah tanda penuaan dini, berfungsi sebagai penetral radikal bebas & pelindung kulit dari kerusakan yang disebabkan sinar UV, polusi, atau paparan eksternal. Serum ini melengkapi 3 komponen penting yang dibutuhkan skin barrier (Squalane, Ceramide, Hyaluronic Acid) dengan cara menghidrasi & melembabkan kulit, serta memperkuat skin barrier.',
                'foto_serum' => 'images/serums/S011.jpg',
            ],
            [
                'kode_serum' => 'S012',
                'nama_serum' => '2% BHA Salicylic Acid Acne Treatment',
                'deskripsi' => 'Vegan Gentle Salicylic Acid Serum Somethinc dengan 4X Acne Combat untuk membantu mengurangi jerawat & komedo sekaligus mencegah terbentuknya jerawat baru. Diformulasikan dengan Salicylic Acid yang lebih gentle untuk membersihkan pori tersumbat, mengangkat sel kulit mati, & melawan bakteri penyebab jerawat; Hydrolyzed Algin & Zinc Sulfate untuk mengurangi sebum berlebih; & Poria Cocos yang menenangkan kemerahan sekaligus memperbaiki barrier kulit.',
                'foto_serum' => 'images/serums/S012.jpg',
            ],
            [
                'kode_serum' => 'S013',
                'nama_serum' => 'AHA BHA PHA Peeling Solution',
                'deskripsi' => 'AHA 3% BHA 1% PHA 2% dapat mengangkat sel kulit mati, mengatasi masalah pori-pori tersumbat & komedo, sekaligus menjaga kelembaban kulit. Cocok untuk kulit kering mengelupas.',
                'foto_serum' => 'images/serums/S013.jpg',
            ],
            [
                'kode_serum' => 'S014',
                'nama_serum' => '60% Vita Propolis + Bee Venom Glow Serum',
                'deskripsi' => 'Natural 60% Vita Propolis & Manuka Honey yang sejak lama telah menjadi utama dalam mengatasi jerawat, bruntusan, serta mengurangi sebum berlebih. Diperkaya dengan Bee Venom yang memiliki sifat anti-bakteri & anti-inflamasi. Serum yang ampuh untuk memberi nutrisi pada kulit, membuat kulit menjadi sehat & glowing serta mencegah tanda-tanda penuaan.',
                'foto_serum' => 'images/serums/S014.jpg',
            ],
            [
                'kode_serum' => 'S015',
                'nama_serum' => 'Hylapore Away Solution',
                'deskripsi' => '30%* dengan perawatan dari bahan-bahan Vegan seperti Cleome Gynandra Leaf Extract, Zinc PCA, Mastic Gum, & Palmitoyl Tripeptide-38. Telah teruji klinis dalam membantu mengencangkan pori-pori, membantu meredakan kemerahan pada kulit, & membantu mengontrol produksi sebum berlebih, sehingga pori-pori di permukaan wajah tampak mengecil.',
                'foto_serum' => 'images/serums/S015.jpg',
            ],
            [
                'kode_serum' => 'S016',
                'nama_serum' => '5% Mandelic Acid Mild Exfoliating Serum',
                'deskripsi' => '5% Mandelic Acid untuk mengangkat sel kulit mati dengan potensi iritasi yang sangat minim. Dapat mencerahkan kulit, mendukung regenerasi kulit baru, mengurangi komedo whitehead & blackhead, pori-pori jadi lebih halus dalam 2 minggu*, mengurangi jerawat, memudarkan bekas jerawat & flek hitam sekaligus menghidrasi kulit. Diperuntukkan kulit sensitif dan berjerawat.',
                'foto_serum' => 'images/serums/S016.jpg',
            ],
            [
                'kode_serum' => 'S017',
                'nama_serum' => '10% Lactic + Glycolic Peeling Serum',
                'deskripsi' => '10% Lactic dan Glycolic dengan 7x Glowing Effect untuk kulit normal hingga berminyak guna merangsang regenerasi kulit, mencerahkan tampilan kulit, mengurangi komedo putih & hitam, menghilangkan garis halus, hiperpigmentasi, dan bekas jerawat, meratakan tekstur kulit & pori-pori dalam 2 minggu. Juga mengandung Mugwort, Calendula & Panthenol yang berfungsi untuk shooting and calming kulit wajah.',
                'foto_serum' => 'images/serums/S017.jpg',
            ],
            [
                'kode_serum' => 'S018',
                'nama_serum' => 'Level 1% Encapsulated Retinol',
                'deskripsi' => 'Level-Up Encapsulated Retinol yang efektif dalam menyamarkan kerutan halus, membantu mengencangkan kulit, menjaga keremajaan & kekenyalan kulit dengan Retinol yang merupakan Gold Standard for Anti-Aging. Didukung dengan Teknologi Enkapsulasi, membuatnya lebih stabil & memiliki efikasi 2x lebih efektif dari retinol biasa, namun tetap gentle. Mengandung 4-t-Butylcyclohexanol yang teruji secara klinis dapat meredakan gejala iritasi (burning & stinging reaction) dengan cepat.',
                'foto_serum' => 'images/serums/S018.jpg',
            ],
            [
                'kode_serum' => 'S019',
                'nama_serum' => '1% Pure Retinol + Squalane',
                'deskripsi' => '10xAdvanced Retinol yang merupakan versi paling murni dari Retinol yang dikenal sebagai Gold Standard untuk membantu mencegah tanda penuaan dini. Retinol berbasis oil yang sangat potent & stabil sehingga tidak mudah teroksidasi. Dilengkapi dengan Squalane sebagai Natural Moisturizing Factors (NMF) untuk menjaga kekenyalan kulit.',
                'foto_serum' => 'images/serums/S019.jpg',
            ],
            [
                'kode_serum' => 'S020',
                'nama_serum' => 'Granactive Snow Retinoid 2%',
                'deskripsi' => 'Beginner-Friendly Soothing Retinol yang merupakan turunan retinol paling gentle & less-irritation, sehingga Granactive Retinoid Serum ini menjadi pilihan terbaik untuk kulit yang super sensitif. Diformulasikan secara Fungal Acne Friendly dengan Snow Mushroom yang memberikan Cooling Effect pada kulit meradang & Natural Alpha Bisabolol yang bersifat antimikroba, cocok untuk kulit sensitif, serta mampu mencegah hiperpigmentasi. Teruji klinis mampu menyamarkan kerutan dan garis halus, mengencangkan dan memperbaiki tekstur kulit, sekaligus mencegah tanda penuaan dini.',
                'foto_serum' => 'images/serums/S020.jpg',
            ],
            [
                'kode_serum' => 'S021',
                'nama_serum' => 'Salmon DNA + Marine Collagen Elixir',
                'deskripsi' => 'Skin Booster Elixir dari laut dalam yang diformulasikan dengan 62% Deep Sea Water, Salmon DNA, Pseudoalteromonas Ferment Extract, Hydrolyzed Marine Collagen & Pearl. Menjaga elastisitas kulit, Merevitalisasi tekstur kulit yang tidak merata, Meningkatkan produksi Kolagen 1 & 4, Meregenerasi kulit, & Menjadikan kulit bercahaya.',
                'foto_serum' => 'images/serums/S021.jpg',
            ],
            [
                'kode_serum' => 'S022',
                'nama_serum' => 'Bakuchiol Skinpair Oil Serum',
                'deskripsi' => 'Serum Vegan yang menjadi alternatif retinol dari bahan natural untuk merawat jerawat sehingga cocok digunakan untuk seluruh jenis kulit bahkan direkomendasikan untuk kulit berminyak. Bakuchiol mampu menstimulasi pembentukan collagen & memperbaiki tekstur kulit. Dikombinasikan dengan Salicylic Acid, serum ini mampu bekerja untuk menghilangkan beruntusan pada wajah, sehingga kulit menjadi halus, glowing, dan tampak kenyal. Cocok untuk pemula skincare, kulit sensitif, dan berjerawat. Alternatif Retinol untuk anti-oksidan & anti-aging yang lebih ringan.',
                'foto_serum' => 'images/serums/S022.jpg',
            ],
            [
                'kode_serum' => 'S023',
                'nama_serum' => 'Holygral Multipetide Youth Elixir',
                'deskripsi' => 'Somethinc Holygrail Multipeptide Youth Elixir merupakan elixir pengencang kulit dari 12 jenis peptides yang terkenal dengan Botox Look Effect-nya dan diformulasikan dengan SYN®-AKE, Argireline dan 12 jenis Anti-Aging Peptide yang terfokus untuk mengencangkan kulit, regenerasi sel, stimulasi kolagen, dan mengembalikan kekenyalan kulit kembali.',
                'foto_serum' => 'images/serums/S023.jpg',
            ],
        ];

        DB::table('serum')->insert($serums);
    }
}
