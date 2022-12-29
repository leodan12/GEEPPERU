<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Principal;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Principal::create([
            'nombre' => 'PREMIAMOS TUS COMPRAS',
            'imagen' => 'geep.jpg',
        ]);
        Principal::create([
            'nombre' => 'SORTEO FIESTAS PATRIAS',
            'imagen' => '292311660_3844740_.jpg',
        ]);
        Principal::create([
            'nombre' => 'LA MEJOR TECNOLOGIA',
            'imagen' => 'lo_mejor.jpg',
        ]);
        
        Principal::create([
            'nombre' => 'SORTEO NAVIDEÑO',
            'imagen' => 'sorteo_navideño.jpg',
        ]);
    }
}
