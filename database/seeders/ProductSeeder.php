<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ikan Kakap',
            'code' => 'HL-304',
            'description' => 'Ikan kakap adalah pilihan utama bagi pencinta hidangan laut. Dikenal dengan dagingnya yang lembut, manis, dan berbutir halus, kakap adalah mahakarya kuliner. Kulitnya yang renyah dan dagingnya yang gurih menyatukan cita rasa yang luar biasa. Kakap dengan mudah menyesuaikan diri dengan berbagai bumbu dan metode memasak, membuatnya menjadi bahan yang serba guna dalam kreasi kuliner. Ikan kakap juga kaya akan nutrisi, seperti protein berkualitas tinggi, asam lemak omega-3, dan berbagai vitamin. Dalam setiap gigitannya, ikan kakap menghadirkan sensasi laut yang istimewa, menjadikannya pilihan sempurna bagi pencinta makanan laut yang mencari cita rasa eksklusif dan kenikmatan yang tak terlupakan.',
            'price' => 20000,
            'rating' => 4,
            'isBestSeller' => false,
            'image' => 'lib/images/kakap.png',
            'stock' => 5,
            'seller_id' => 1,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Kepiting',
            'code' => 'HL-305',
            'description' => 'Kepiting adalah makanan laut yang memikat dengan rasa lezat dan tekstur uniknya. Daging kepiting segar memiliki cita rasa manis, gurih, dan sedikit garam alami, membuatnya menjadi sajian yang memanjakan lidah. Dapat diolah dalam berbagai masakan, dari kepiting goreng hingga saus lada hitam yang kaya rasa. Selain kelezatan, kepiting juga dikenal karena kandungan protein tinggi, rendah lemak, dan kaya nutrisi seperti selenium dan asam omega-3. Dengan kombinasi ini, kepiting bukan hanya hidangan lezat, tapi juga pilihan sehat. Jadi, jangan lewatkan kesempatan untuk menikmati hidangan laut yang istimewa ini yang akan memikat selera Anda.',
            'price' => 100000,
            'rating' => 4,
            'isBestSeller' => true,
            'image' => 'lib/images/kepiting.png',
            'stock' => 8,
            'seller_id' => 2,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Cumi-cumi',
            'code' => 'HL-302',
            'description' => 'Ikan kakap adalah pilihan utama bagi pencinta hidangan laut. Dikenal dengan dagingnya yang lembut, manis, dan berbutir halus, kakap adalah mahakarya kuliner. Kulitnya yang renyah dan dagingnya yang gurih menyatukan cita rasa yang luar biasa. Kakap dengan mudah menyesuaikan diri dengan berbagai bumbu dan metode memasak, membuatnya menjadi bahan yang serba guna dalam kreasi kuliner. Ikan kakap juga kaya akan nutrisi, seperti protein berkualitas tinggi, asam lemak omega-3, dan berbagai vitamin. Dalam setiap gigitannya, ikan kakap menghadirkan sensasi laut yang istimewa, menjadikannya pilihan sempurna bagi pencinta makanan laut yang mencari cita rasa eksklusif dan kenikmatan yang tak terlupakan.',
            'price' => 75000,
            'rating' => 5,
            'isBestSeller' => false,
            'image' => 'lib/images/kepiting.png',
            'stock' => 12,
            'seller_id' => 2,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Lobster',
            'code' => 'HL-303',
            'description' => 'Lobster adalah simbol kemewahan di dunia kuliner. Dagingnya yang lembut dan manis, ditemukan di perairan dalam, menghadirkan pengalaman makan yang istimewa. Dengan warna merah cerah yang menggoda, lobster adalah hidangan yang mengundang selera. Citarasa lautnya yang unik, dipadu dengan mentega lezat atau saus rempah, menciptakan kenikmatan yang tak terlupakan. Lobster juga merupakan sumber protein berkualitas tinggi dan rendah lemak, menjadikannya pilihan sehat. Dalam hidangan mewah ini, Anda akan menemukan kelezatan yang tak tertandingi, menjadikannya pilihan ideal bagi mereka yang menginginkan pengalaman kuliner yang istimewa dan tak terlupakan.',
            'price' => 300000,
            'rating' => 4,
            'isBestSeller' => false,
            'image' => 'lib/images/lobster-2.png',
            'stock' => 9,
            'seller_id' => 1,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Penyewaan Perahu',
            'code' => 'PJ-401',
            'description' => 'Selami keindahan alam dan kegembiraan petualangan dengan penyewaan perahu eksklusif kami. Tawarkan diri Anda pengalaman yang tak terlupakan di atas ombak dengan perahu berkualitas tinggi yang siap membawa Anda menjelajahi destinasi yang menakjubkan. Dengan berbagai pilihan perahu yang sesuai dengan kebutuhan dan anggaran Anda, kami menjamin kenyamanan dan keamanan selama petualangan laut Anda. Nikmati kemewahan bersantai atau ketegangan berpetualang, semua dalam satu penyewaan perahu. Ideal untuk liburan keluarga, perjalanan romantis, atau bahkan acara khusus, kami menawarkan fleksibilitas dan kenyamanan untuk memastikan setiap penyewaan perahu menjadi pengalaman yang memuaskan dan berkesan.',
            'price' => 250000,
            'rating' => 3,
            'isBestSeller' => false,
            'image' => 'lib/images/sampan.png',
            'stock' => 1,
            'seller_id' => 1,
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Kepiting Asap',
            'code' => 'KL-210',
            'description' => 'Nikmati pengalaman kuliner tak terlupakan dengan kepiting asap kami yang lezat. Setiap gigitan menghadirkan kombinasi sempurna antara daging kepiting yang lembut dan cita rasa asap yang khas. Dipanggang dengan hati-hati, setiap potongan kepiting dipersiapkan dengan bumbu rahasia yang menambahkan kelezatan istimewa. Kepiting asap kami cocok untuk penyuka seafood yang menginginkan sensasi baru dan cita rasa yang memanjakan lidah. Sajikan hidangan istimewa ini di meja makan Anda dan nikmati kelezatan kepiting asap yang luar biasa.',
            'price' => 150000,
            'rating' => 5,
            'isBestSeller' => true,
            'image' => 'lib/images/kepiting-asap.png',
            'stock' => 5,
            'seller_id' => 1,
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Ikan Asam Pedas',
            'code' => 'KL-210',
            'description' => 'Ikan Asam Pedas adalah hidangan khas yang memikat selera dengan kombinasi cita rasa pedas, asam, dan segar yang menggugah selera. Dipenuhi dengan bumbu-bumbu rempah yang khas, hidangan ini menawarkan pengalaman kuliner yang unik dan memuaskan. Potongan ikan yang segar dan lembut menyatu dalam kuah asam pedas yang menggoda, menciptakan harmoni rasa yang tak terlupakan. Bumbu-bumbu utama, seperti cabai, belimbing wuluh, tomat, dan rempah-rempah lainnya, memberikan hidangan ini karakter pedas yang mencolok dan rasa asam yang menyegarkan. Keseimbangan rasa yang dihasilkan dari perpaduan berbagai elemen ini membuat Ikan Asam Pedas menjadi pilihan yang populer di meja makan.',
            'price' => 100000,
            'rating' => 4,
            'isBestSeller' => false,
            'image' => 'lib/images/ikan-asam-pedas.png',
            'stock' => 5,
            'seller_id' => 2,
            'category_id' => 3
        ]);
    }
}
