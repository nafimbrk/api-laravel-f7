<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nip' => '68868',
                'nama' => 'eko',
                'gender' => 'laki-laki',
                'email' => 'eko@gmail.com'
            ], [
                'nip' => '97997',
                'nama' => 'putri',
                'gender' => 'perempuan',
                'email' => 'putri@gmail.com'
            ]
        ]);
    }
}
