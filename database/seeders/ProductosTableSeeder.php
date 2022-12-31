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
            'marca' => 'LAPTOP HP PAVILION 15-EC2501LA',
            'descripcion' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 3429,
            'oferta' => 1,
            'porcentajedescuento' => 10,
            'subcategoria_id' => 7,
            'stock' => 10,
            'image_path' => 'laptop-hp-pavilon.jpg'
        ]);

        Producto::create([
            'name' => 'Acer Laptop CI5 11400H 2.70 GHz, RAM 12GB DDR4 , 256GB SSD , GTX 1650 4GB GDDR6',
            'marca' => 'Acer Laptop CI5 11400H 2.70 GHz',
            'descripcion' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 3699.00, 
            'porcentajedescuento' => 0,
            'subcategoria_id' => 7,
            'oferta' => 0,
            'stock' => 20,
            'image_path' => 'laptop-acer-ci511400.png'
        ]);
        Producto::create([
            'name' => 'MONITOR SAMSUNG LED CURVO AMD FREESYNC LC27R500FHLXPE 27',
            'marca' => 'MONITOR SAMSUNG LC27R500FHLXPE',
            'descripcion' => '27 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 719.00,
            'oferta' => 1,
            'porcentajedescuento' => 5,
            'subcategoria_id' => 4,
            'stock' => 40,
            'image_path' => 'monitor-27-samsung-lc27r500fhlxpe-fhd-vga-hdmi-curvo.jpg'
        ]);

        Producto::create([
            'name' => 'All-in-One HP 200 G4 22 CORE I3 DECIMA',
            'marca' => 'All-in-One HP 200 G4 22 CORE I3 DECIMA',
            'descripcion' => '22.1 pulgadas, 8GB 4GB RAM',
            'price' => 649.99,
            'oferta' => 0,
            'porcentajedescuento' => 0,
            'subcategoria_id' => 5,
            'stock' => 10,
            'image_path' => 'All-in-One-HP-200.png'
        ]);

        Producto::create([
            'name' => 'AURICULAR MSI IMMERSER GH30-V2',
            'marca' => 'AURICULAR MSI IMMERSER GH30-V2',
            'descripcion' => 'AURICULAR MSI IMMERSER GH30-V2',
            'price' => 179.0,
            'oferta' => 1,
            'porcentajedescuento' => 10,
            'subcategoria_id' => 1,
            'stock' => 0,
            'image_path' => 'IMMERSE-GH30-V2.jpg'
        ]);

        Producto::create([
            'name' => 'MONITOR TEROS CURVO TE-3176N',
            'marca' => 'MONITOR TEROS CURVO TE-3176N',
            'descripcion' => '32 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 759.00,
            'oferta' => 0,
            'porcentajedescuento' => 0,
            'subcategoria_id' => 4,
            'stock' => 4,
            'image_path' => '5081c5b5c1ec7ac5940e1de7370700c9-product.jpg'
        ]);

        Producto::create([
            'name' => 'CÁMARA TEROS TE-9060, HASTA 720P, MICRÓFONO INCORPORADO, USB 2.0.',
            'marca' => 'CÁMARA TEROS TE-9060',
            'descripcion' => '16.1MP, 5x Optical Zoom',
            'price' => 65.99,
            'oferta' => 1,
            'porcentajedescuento' => 10,
            'subcategoria_id' => 2,
            'stock' => 4,
            'image_path' => 'CAM-TEROS-720P.fw_.png'
        ]);
        Producto::create([
            'name' => 'MONITOR LED TEROS 27″ TE-3178N IPS QHD 75HZ 2MS FLAT FHD',
            'marca' => 'MONITOR LED TEROS 27″ TE-3178N',
            'descripcion' => '27 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 419.99,
            'oferta' => 0,
            'porcentajedescuento' => 0,
            'subcategoria_id' => 4,
            'stock' => 3,
            'image_path' => 'mov27te3178n.jpg'
        ]);
        Producto::create([
            'name' => 'COMPUTADORA INTEL CORE I3 DECIMA 4GB DDR4 VIDEO GT710 2GB',
            'marca' => 'COMPUTADORA INTEL CORE I3 DECIMA 4GB DDR4 VIDEO GT710 2GB',
            'descripcion' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 2480.00,
            'oferta' => 0,
            'porcentajedescuento' => 0, 
            'subcategoria_id' => 6,
            'stock' => 10,
            'image_path' => 'compu-i3.jpg'
        ]);
        Producto::create([
            'name' => 'PC COMPLETA CORE i3 10th',
            'marca' => 'PC COMPLETA CORE i3 10th',
            'descripcion' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 2099.00,
            'oferta' => 1,
            'porcentajedescuento' => 10,
            'subcategoria_id' => 6,
            'stock' => 5,
            'image_path' => 'POST-nept-computer-PC-CORE-I3-10th-WEB-.png'
        ]);
        Producto::create([
            'name' => 'COMPUTADORA HP 260 G4 CORE I3',
            'marca' => 'COMPUTADORA HP 260 G4 CORE I3',
            'descripcion' => '260gb disco duro 4gb RAM',
            'price' => 2099.00,
            'oferta' => 1,
            'porcentajedescuento' => 5,
            'subcategoria_id' => 6,
            'stock' => 2,
            'image_path' => 'MINI-PC-HP-260-G4-CI3.jpg'
        ]);

    }
}
