<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'name' => 'Laptop APPLE MacBook Air 13.6" M2 8-Core, RAM 8GB, SSD 512GB, Liquid Retina (2560x1664) ,Teclado En Inglés, MacOS, Space Gray.',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro',
            'subcategoria_id' => 7,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Producto::create([
            'name' => 'Laptop DELL G15RE A975 GRY-PUS, Ryzen 7 5800H, RAM 16GB, SSD 512GB, 15.6" FHD 120HZ, Video RTX3050 4GB',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557',
            'subcategoria_id' => 7,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);
        Producto::create([
            'name' => 'Monitor HP 24" , FHD 1920x1080, HDMI / VGA, 60HZ, 5 MS.',
            'slug' => 'HP-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Producto::create([
            'name' => 'iPhone 11 Pro max 64GB 4GB RAM Liberado',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro',
            'subcategoria_id' => 5,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Producto::create([
            'name' => 'Remax 610D Headset Audífonos Con Conexión Lightning Color Blanco',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset',
            'subcategoria_id' => 1,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Producto::create([
            'name' => 'Monitor SAMSUNG 22" LS22A336NHNXZA / LS22A333NHNXZA, FHD 1920x1080, HDMI / VGA, 60HZ, 5 MS.',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Producto::create([
            'name' => 'Samsung Cámara Web AVATEC 2200, 1080P (CCM-2200BW) Usb HD Microfono',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'description' => 'Samsung Digital Camera',
            'subcategoria_id' => 2,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);
        Producto::create([
            'name' => 'Monitor LG 32 curvo  2 HDMI, 140HZ, 1 MS.',
            'slug' => 'LG-led-32',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'LG LED monitor',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);
        Producto::create([
            'name' => 'Huawei GR 5 2017   WS318n Wi-Fi N300 2.4Ghz. Blanco',
            'slug' => 'gr5-2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'shipping_cost' => 6.79,
            'description' => 'Huawei GR 5 2017', 
            'subcategoria_id' => 5,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);
        Producto::create([
            'name' => 'DELL"  3 HDMI, 120HZ, 2 MS.',
            'slug' => 'DELL-led-32',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'LG LED monitor',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);
        Producto::create([
            'name' => 'Cámara Web 2200, 1080P (CCM-2200BW) Usb HD Microfono',
            'slug' => 'samsung-mv800 1',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'description' => 'Samsung Digital Camera',
            'subcategoria_id' => 2,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);

    }
}
