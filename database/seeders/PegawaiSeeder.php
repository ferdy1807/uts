<?php

namespace Database\Seeders;
use App\Models\Pegawai;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = [
            ['nama'=>'Ferdy Perdana','jekel'=> 'pria','nohp'=> '082110735089','foto'=> 'default.jpg'],
            ['nama'=>'Bobby','jekel'=> 'wanita','nohp'=> '082110735088','foto'=> 'default.jpg'],
            ['nama'=>'Rani','jekel'=> 'wanita','nohp'=> '082110735087','foto'=> 'default.jpg'],
        ];
        Pegawai::insert($pegawai);
    }
}
