<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'jokowidodo',
            'alamat' => 'magetan',
            'telp' => '0812312312',
            'no_sim' => '873243247743',
            'username' => 'jokowi',
            'password' => 'qweqwe123',
        ]);

        $mobils = [
            [

                'merek' => 'Toyota',
                'model' => 'Avanza',
                'nomor_plat' => 'B 1234 AB',
                'tarif' => 200000,
                'user_id' => 1
            ],
            [

                'merek' => 'Honda',
                'model' => 'Civic',
                'nomor_plat' => 'D 5678 CD',
                'tarif' => 250000,
                'user_id' => 1
            ],
            [

                'merek' => 'Suzuki',
                'model' => 'Ertiga',
                'nomor_plat' => 'F 9012 EF',
                'tarif' => 180000,
                'user_id' => 1
            ],
            [

                'merek' => 'Nissan',
                'model' => 'X-Trail',
                'nomor_plat' => 'G 3456 GH',
                'tarif' => 300000,
                'user_id' => 1
            ],
            [

                'merek' => 'Mitsubishi',
                'model' => 'Pajero',
                'nomor_plat' => 'H 7890 IJ',
                'tarif' => 350000,
                'user_id' => 1
            ],

        ];
        foreach ($mobils as $d) {
            \App\Models\Mobil::create($d);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
