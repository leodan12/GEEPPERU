<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Principale;

class PrincipaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Principale::create([
            'nombre' => 'PREMIAMOS TUS COMPRAS',
            'imagen' => 'geep.jpg',
        ]);
        Principale::create([
            'nombre' => 'SORTEO FIESTAS PATRIAS',
            'imagen' => '292311660_3844740_.jpg',
        ]);
        Principale::create([
            'nombre' => 'LA MEJOR TECNOLOGIA',
            'imagen' => 'lo_mejor.jpg',
        ]);
        
        Principale::create([
            'nombre' => 'SORTEO NAVIDEÑO',
            'imagen' => 'sorteo_navideño.jpg',
        ]);
     
    }
}
