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
            'name' => 'LAPTOP HP PAVILION 15-EC2501LA RYZEN 5- 5600H 4.2GHZ 8GB 256GB-SSD GTX-1650 4GB 15.6″',
            'slug' => 'LAPTOP HP PAVILION 15-EC2501LA',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 3429,
            'shipping_cost' => 2500,
            'description' => 'LAPTOP HP PAVILION 15-EC2501LA',
            'subcategoria_id' => 7,
            'brand_id' => 1,
            'image_path' => 'laptop-hp-pavilon.jpg'
        ]);

        Producto::create([
            'name' => 'Acer Laptop CI5 11400H 2.70 GHz, RAM 12GB DDR4 , 256GB SSD , GTX 1650 4GB GDDR6',
            'slug' => 'Acer Laptop CI5 11400H 2.70 GHz',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 3699.00,
            'shipping_cost' => 2800,
            'description' => 'Acer Laptop CI5 11400H 2.70 GHz',
            'subcategoria_id' => 7,
            'brand_id' => 2,
            'image_path' => 'laptop-acer-ci511400.png'
        ]);
        Producto::create([
            'name' => 'MONITOR SAMSUNG LED CURVO AMD FREESYNC LC27R500FHLXPE 27',
            'slug' => 'MONITOR SAMSUNG LC27R500FHLXPE',
            'details' => '27 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 719.00,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'monitor-27-samsung-lc27r500fhlxpe-fhd-vga-hdmi-curvo.jpg'
        ]);

        Producto::create([
            'name' => 'All-in-One HP 200 G4 22 CORE I3 DECIMA',
            'slug' => 'All-in-One HP 200 G4 22 CORE I3 DECIMA',
            'details' => '22.1 pulgadas, 8GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'All-in-One HP 200 G4 22 CORE I3 DECIMA',
            'subcategoria_id' => 5,
            'brand_id' => 1,
            'image_path' => 'All-in-One-HP-200.png'
        ]);

        Producto::create([
            'name' => 'AURICULAR MSI IMMERSER GH30-V2',
            'slug' => 'AURICULAR MSI IMMERSER GH30-V2',
            'details' => 'AURICULAR MSI IMMERSER GH30-V2',
            'price' => 179.0,
            'shipping_cost' => 100,
            'description' => 'AURICULAR MSI IMMERSER GH30-V2',
            'subcategoria_id' => 1,
            'brand_id' => 3,
            'image_path' => 'IMMERSE-GH30-V2.jpg'
        ]);

        Producto::create([
            'name' => 'MONITOR TEROS CURVO TE-3176N',
            'slug' => 'MONITOR TEROS CURVO TE-3176N',
            'details' => '32 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 759.00,
            'shipping_cost' => 600,
            'description' => 'MONITOR TEROS CURVO TE-3176N',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => '5081c5b5c1ec7ac5940e1de7370700c9-product.jpg'
        ]);

        Producto::create([
            'name' => 'CÁMARA TEROS TE-9060, HASTA 720P, MICRÓFONO INCORPORADO, USB 2.0.',
            'slug' => 'CÁMARA TEROS TE-9060',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 65.99,
            'shipping_cost' => 13.39,
            'description' => 'CÁMARA TEROS TE-9060',
            'subcategoria_id' => 2,
            'brand_id' => 4,
            'image_path' => 'CAM-TEROS-720P.fw_.png'
        ]);
        Producto::create([
            'name' => 'MONITOR LED TEROS 27″ TE-3178N IPS QHD 75HZ 2MS FLAT FHD',
            'slug' => 'MONITOR LED TEROS 27″ TE-3178N',
            'details' => '27 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'TE-3178N IPS QHD 75HZ 2MS FLAT FHD',
            'subcategoria_id' => 4,
            'brand_id' => 4,
            'image_path' => 'mov27te3178n.jpg'
        ]);
        Producto::create([
            'name' => 'COMPUTADORA INTEL CORE I3 DECIMA 4GB DDR4 VIDEO GT710 2GB',
            'slug' => 'COMPUTADORA INTEL CORE I3 DECIMA 4GB DDR4 VIDEO GT710 2GB',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 2480.00,
            'shipping_cost' => 1900,
            'description' => 'COMPUTADORA INTEL CORE I3 DECIMA 4GB DDR4 VIDEO GT710 2GB', 
            'subcategoria_id' => 6,
            'brand_id' => 5,
            'image_path' => 'compu-i3.jpg'
        ]);
        Producto::create([
            'name' => 'PC COMPLETA CORE i3 10th',
            'slug' => 'PC COMPLETA CORE i3 10th',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 2099.00,
            'shipping_cost' => 12.59,
            'description' => 'PC COMPLETA CORE i3 10th',
            'subcategoria_id' => 6,
            'brand_id' => 4,
            'image_path' => 'POST-nept-computer-PC-CORE-I3-10th-WEB-.png'
        ]);
        Producto::create([
            'name' => 'COMPUTADORA HP 260 G4 CORE I3',
            'slug' => 'COMPUTADORA HP 260 G4 CORE I3',
            'details' => '260gb disco duro 4gb RAM',
            'price' => 2099.00,
            'shipping_cost' => 13.39,
            'description' => 'COMPUTADORA HP 260 G4 CORE I3',
            'subcategoria_id' => 6,
            'brand_id' => 4,
            'image_path' => 'MINI-PC-HP-260-G4-CI3.jpg'
        ]);

    }
}
