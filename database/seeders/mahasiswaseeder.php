<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mahasiswa::create([
            'nama' => 'admin',
            'nim' => '1',
            'prodi_id' => '1',
            'jurusan_id' => '1',
            'nohp' => '1',
            'alamat' => 'admin',
            'tgllahir' => '6 juli 2000',
            'jeniskelamin' => 'Laki-laki',
            'email' => 'admin@gmail.com',
        ]);
        mahasiswa::create([
            'nama' => 'user',
            'nim' => '1857301035',
            'prodi_id' => '1',
            'jurusan_id' => '1',
            'nohp' => '082382898960',
            'alamat' => 'kpjb',
            'tgllahir' => '6 juli 2000',
            'jeniskelamin' => 'Laki-laki',
            'email' => 'user@gmail.com',
        ]);
    }
}
