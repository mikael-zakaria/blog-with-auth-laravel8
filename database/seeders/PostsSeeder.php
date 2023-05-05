<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'user_id' => 1,
        // 	'title' => 'Jupiter - Planet Gas Raksasa',
        // 	'content' => 'Jupiter atau Yupiter adalah planet terdekat kelima dari Matahari setelah Merkurius, Venus, Bumi, dan Mars. Planet ini juga merupakan planet terbesar di Tata Surya.[11] Jupiter merupakan raksasa gas dengan massa seperseribu massa Matahari dan dua setengah kali jumlah massa semua planet lain di Tata Surya. Planet ini dan raksasa gas lain di Tata Surya (yaitu Saturnus, Uranus, dan Neptunus) kadang-kadang disebut planet Jovian atau planet luar. Jupiter telah dikenal oleh para astronom sejak zaman kuno,[12] dan dikaitkan dengan mitologi dan kepercayaan religius banyak peradaban. Bangsa Romawi menamai planet ini dari dewa Jupiter dalam mitologi Romawi.[13] Saat diamati dari Bumi, magnitudo tampak Jupiter dapat mencapai −2,94, yang cukup terang untuk menghasilkan bayangan,[14] dan juga menjadikannya objek tercerah ketiga di langit malam setelah Bulan dan Venus, walaupun Mars dapat menyaingi kecerahan Jupiter pada saat tertentu.

        //     Jupiter sebagian besar terdiri dari hidrogen dan helium. Seperempat massa Jupiter merupakan helium, walaupun jumlahnya hanya sepersepuluh komposisi Jupiter. Planet ini mungkin memiliki inti berbatu yang terdiri dari unsur-unsur berat,[15] namun tidak memiliki permukaan yang padat layaknya raksasa gas lainnya. Akibat rotasinya yang cepat, planet ini berbentuk bulat pepat (terdapat tonjolan di sekitar khatulistiwa Jupiter). Atmosfer luar terbagi menjadi beberapa lapisan di lintang yang berbeda, dan interaksi antara batas-batas lapisan tersebut menghasilkan badai. Salah satu dampaknya adalah Bintik Merah Raksasa, yaitu badai besar yang telah diketahui keberadaannya semenjak abad ke-17 dengan menggunakan teleskop. Di sekeliling Jupiter terdapat cincin yang tipis dan magnetosfer yang kuat. Selain itu terdapat paling tidak 67 satelit alami, termasuk empat satelit besar yang disebut satelit-satelit Galileo yang pertama kali ditemukan oleh Galileo Galilei pada tahun 1610. Satelit terbesar Jupiter, yaitu Ganimede, memiliki diameter yang lebih besar daripada planet Merkurius.
            
        //     Jupiter telah dijelajahi beberapa kali oleh wahana robotik, seperti misi terbang lintas Pioneer, Voyager, dan Galileo. Wahana terakhir yang mengunjungi Jupiter adalah wahana New Horizons pada akhir Februari 2007 saat sedang menuju Pluto. Wahana tersebut menggunakan bantuan gravitasi dari Jupiter untuk membantu meningkatkan kecepatannya. Ke depannya, beberapa satelit yang mengelilingi Jupiter mungkin akan dijelajahi, seperti satelit Europa yang mungkin memiliki samudra cair di bawah lapisan esnya.',
        //     'picture' => 'post-1681378528.jpg',
        //     'created_at' =>  now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('posts')->insert([
        //     'user_id' => 1,
        // 	'title' => 'Mars - Gurun Merah yang Tandus',
        // 	'content' => 'Mars adalah planet terdekat keempat dari Matahari. Namanya diambil dari dewa perang Romawi, Mars. Planet ini sering dijuluki sebagai "planet merah" karena tampak dari jauh berwarna kemerah-kemerahan. Ini disebabkan oleh keberadaan besi(III) oksida di permukaan planet Mars.[6] Mars adalah planet bebatuan dengan atmosfer yang tipis. Di permukaan Mars terdapat kawah, gunung berapi, lembah, gurun, dan tudung es. Periode rotasi dan siklus musim Mars mirip dengan Bumi. Di Mars berdiri Olympus Mons, gunung tertinggi di Tata Surya, dan Valles Marineris, lembah terbesar di Tata Surya. Selain itu, di belahan utara terdapat cekungan Borealis yang meliputi 40% permukaan Mars.[7][8]

        //     Lingkungan Mars lebih bersahabat bagi kehidupan dibandingkan keadaan planet Venus. Namun begitu, keadaannya tidak cukup ideal untuk manusia. Suhu udara yang cukup rendah dan tekanan udara yang rendah, ditambah dengan komposisi udara yang sebagian besar karbondioksida, menyebabkan manusia harus menggunakan alat bantu pernapasan jika ingin tinggal di sana. Misi-misi ke planet merah ini, sampai penghujung abad ke-20, belum menemukan jejak kehidupan di sana, meskipun yang amat sederhana.
            
        //     Planet ini memiliki 2 buah satelit, yaitu Fobos dan Deimos. Planet ini mengorbit selama 687 hari dalam mengelilingi Matahari. Planet ini juga berotasi. Kala rotasinya 25,62 jam.
            
        //     Di planet Mars, terdapat sebuah kenampakan unik di daerah Cydonia Mensae. Kenampakan ini merupakan sebuah perbukitan yang bila dilihat dari atas tampak sebagai sebuah wajah manusia. Banyak orang yang menganggapnya sebagai sebuah bukti dari peradaban yang telah lama musnah di Mars, walaupun pada masa kini, telah terbukti bahwa kenampakan tersebut hanyalah sebuah kenampakan alam biasa.',
        //     'picture' => 'post-1681392163.jpg',
        //     'created_at' =>  now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('posts')->insert([
        //     'user_id' => 1,
        // 	'title' => 'Uranus - Raksasa Es Metana',
        // 	'content' => 'Uranus (berasal dari nama Latin Ūranus untuk nama dewa Yunani Οὐρανός) adalah planet ketujuh dari Matahari. Uranus merupakan planet yang memiliki jari-jari terbesar ketiga sekaligus massa terbesar keempat di Tata Surya. Uranus juga merupakan satu-satunya planet yang namanya berasal dari tokoh dalam mitologi Yunani, dari versi Latinisasi nama dewa langit Yunani Ouranos. Komposisi Uranus serupa dengan Neptunus, dan keduanya mempunyai komposisi kimiawi yang berbeda dari raksasa gas yang lebih besar, Jupiter dan Saturnus. Karenanya, para astronom sering menempatkan Uranus dan Neptunus dalam kategori "raksasa es" untuk membedakan keduanya dari raksasa gas. Atmosfer Uranus serupa dengan Jupiter dan Saturnus karena kandungan utamanya adalah hidrogen dan helium, tetapi mengandung lebih banyak unsur "es" seperti air, amonia dan metana, bersama dengan sisa hidrokarbon. Atmosfer Uranus merupakan atmosfer planet terdingin di Tata Surya, dengan suhu terendah mencapai 49 K (−224 °C; −371 °F). Atmosfer Uranus mempunyai struktur awan berlapis-lapis dan kompleks, serta diperkirakan lapisan awan terendahnya terdiri atas air dan lapisan awan tertingginya terdiri atas metana. Bagian dalam Uranus sebagian besar terdiri atas es dan bebatuan.

        //     Seperti planet raksasa lain, Uranus memiliki sistem cincin, magnetosfer, serta banyak satelit alami. Sistem Uranus mempunyai konfigurasi yang unik di antara planet-planet karena kemiringan sumbunya miring ke samping, hampir pada bidang revolusinya mengelilingi Matahari. Oleh karena itu, kutub utara dan selatannya terletak pada tempat yang merupakan khatulistiwa bagi planet lain. Pada tahun 1986, citra yang diabadikan oleh wahana antariksa Voyager 2 menunjukkan Uranus sebagai planet yang terlihat tidak memiliki ketampakan pada cahaya tampak, yaitu tanpa pita awan atau badai yang biasanya dimiliki oleh planet raksasa. Meskipun demikian, pengamat di Bumi melihat tanda-tanda perubahan musim dan aktivitas cuaca yang meningkat ketika Uranus mencapai ekuinoksnya pada tahun 2007. Kecepatan angin di permukaan Uranus dapat mencapai 250 meter per detik (900 km/h; 560 mph).',
        //     'picture' => 'post-1681392336.jpg',
        //     'created_at' =>  now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('posts')->insert([
        //     'user_id' => 1,
        // 	'title' => 'Venus - Planet Neraka',
        // 	'content' => 'Venus adalah planet terdekat kedua dari Matahari setelah Merkurius. Planet ini mengorbit Matahari selama 224,7 hari Bumi.[11] Venus tidak memiliki satelit alami dan dinamai dari dewi cinta dan kecantikan dalam mitologi Romawi. Setelah Bulan, planet ini merupakan objek alami tercerah di langit malam, dengan magnitudo tampak sebesar −4,6 yang cukup cerah untuk menghasilkan bayangan.[12] Venus merupakan planet inferior dengan sudut elongasi yang mencapai 47,8°. Kecerahan maksimal planet ini dapat dilihat segera sebelum matahari terbit atau setelah matahari terbenam, sehingga disebut Bintang Fajar atau Bintang Senja.

        //     Venus adalah planet kebumian dan kadang-kadang disebut “planet saudara” Bumi karena ukuran, gravitasi, dan komposisi yang mirip (Venus merupakan planet terdekat dari Bumi dan planet yang ukurannya paling mendekati Bumi). Namun, dalam hal lain planet ini sangat berbeda dari Bumi. Planet ini memiliki atmosfer terpadat di antara empat planet kebumian yang terdiri dari 96% karbon dioksida. Tekanan atmosfer permukaan Venus 92 kali lebih besar daripada Bumi. Dengan rata-rata suhu permukaan sebesar 735 K (462 °C; 863 °F), Venus merupakan planet terpanas di Tata Surya. Planet ini tidak memiliki siklus karbon yang memerangkap karbon dalam batuan dan kenampakan permukaan, dan juga tidak memiliki kehidupan organik yang dapat menyerap karbon dalam bentuk biomassa. Venus diselimuti oleh lapisan buram yang terdiri dari awan asam sulfat yang sangat reflektif, sehingga permukaannya tidak dapat dilihat dari luar angkasa. Venus mungkin pernah memiliki samudra,[13][14] namun samudra tersebut menguap karena peningkatan suhu yang disebabkan oleh efek rumah kaca berketerusan.[15] Sebagian besar air mungkin telah terfotodisosiasi, dan angin matahari telah membuat hidrogen bebas mengalami pelepasan ke luar angkasa sebagai akibat dari ketiadaan medan magnet internal di Venus.[16] Permukaan Venus sendiri bergurun, kering, dan diselingi oleh batuan yang diperbarui secara periodik oleh aktivitas vulkanik.',
        //     'picture' => 'post-1681735795.jpg',
        //     'created_at' =>  now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('posts')->insert([
        //     'user_id' => 1,
        // 	'title' => 'Neptunus - Bola Es Metana',
        // 	'content' => 'Neptunus merupakan planet terjauh (kedelapan) jika ditinjau dari Matahari. Planet ini dinamai dari dewa lautan Romawi. Neptunus merupakan planet terbesar keempat berdasarkan diameter (49.530 km) dan terbesar ketiga berdasarkan massa. Massa Neptunus tercatat 17 kali lebih besar daripada Bumi, dan sedikit lebih kecil daripada Uranus.[10] Neptunus mengorbit Matahari pada jarak 30,1 sa atau sekitar 4.450 juta km. Periode rotasi planet ini adalah 16,1 jam, sedangkan periode revolusinya adalah 164,8 tahun. Simbol astronomisnya adalah ♆, yang merupakan trisula dewa Neptunus.

        //     Neptunus ditemukan pada tanggal 23 September 1846.[1] Planet ini merupakan planet pertama yang ditemukan melalui prediksi matematika. Perubahan yang tak terduga di orbit Uranus membuat Alexis Bouvard menyimpulkan bahwa hal tersebut diakibatkan oleh gangguan gravitasi dari planet yang tak dikenal. Neptunus selanjutnya diamati oleh Johann Galle dalam posisi yang diprediksikan oleh Urbain Le Verrier. Satelit alam terbesarnya, Triton, ditemukan segera sesudahnya, sementara 12 satelit alam lainnya baru ditemukan lewat teleskop pada abad ke-20. Neptunus telah dikunjungi oleh satu wahana angkasa, yaitu Voyager 2, yang terbang melewati planet tersebut pada tanggal 25 Agustus 1989.[11]
            
        //     Komposisi penyusun planet ini mirip dengan Uranus, dan komposisi keduanya berbeda dari raksasa gas Jupiter dan Saturnus. Atmosfer Neptunus mengandung hidrogen, helium, hidrokarbon, kemungkinan nitrogen, dan kandungan "es" yang besar seperti es air, amonia, dan metana. Astronom kadang-kadang mengategorikan Uranus dan Neptunus sebagai "raksasa es" untuk menekankan perbedaannya.[12] Seperti Uranus, interior Neptunus terdiri dari es dan batu.[13] Metana di wilayah terluar planet merupakan salah satu penyebab kenampakan kebiruan Neptunus.[14]
            
        //     Sementara atmosfer Uranus relatif tidak berciri, atmosfer Neptunus bersifat aktif dan menunjukkan pola cuaca. Contohnya, pada saat Voyager 2 terbang melewatinya pada tahun 1989, di belahan selatan planet terdapat Titik Gelap Besar yang mirip dengan Titik Merah Besar di Jupiter. Pola cuaca tersebut diakibatkan oleh angin yang sangat kencang, dengan kecepatan hingga 2.100 km/jam.[15] Karena jaraknya yang jauh dari Matahari, atmosfer luar Neptunus merupakan salah satu tempat terdingin di Tata Surya, dengan suhu terdingin −218 °C (55 K). Suhu di inti planet diperkirakan sebesar 5.400 K (5.000 °C).[16][17] Neptunus memiliki sistem cincin yang tipis. Sistem cincin tersebut baru dilacaktemu pada tahun 1960-an dan dipastikan keberadaannya oleh Voyager 2 pada tahun 1989.',
        //     'picture' => 'post-1681735988.jpg',
        //     'created_at' =>  now(),
        //     'updated_at' => now()
        // ]);
        
    }
}
