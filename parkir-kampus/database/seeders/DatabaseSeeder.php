<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Insert jenis data
        $jenis = [
            ['nama' => 'Mobil'],
            ['nama' => 'Motor'],
            ['nama' => 'Sepeda'],
            // Add more jenis as needed
        ];

        DB::table('jenis')->insert($jenis);

        // Insert kampus data
        $kampus = [
            [
                'nama' => 'Kampus A',
                'alamat' => 'Jl. Kampus A No. 1',
                'latitude' => -6.200000,
                'longitude' => 106.816666,
            ],
            [
                'nama' => 'Kampus B',
                'alamat' => 'Jl. Kampus B No. 2',
                'latitude' => -6.900000,
                'longitude' => 107.600000,
            ],
            // Add more kampus as needed
        ];

        DB::table('kampus')->insert($kampus);

        // Insert area_parkirs data
        $areaParkirs = [
            [
                'nama' => 'Area Parkir A',
                'kapasitas' => 100,
                'keterangan' => 'Dekat gedung A',
                'kampus_id' => 1, // Assuming Kampus A has id 1
            ],
            [
                'nama' => 'Area Parkir B',
                'kapasitas' => 200,
                'keterangan' => 'Dekat gedung B',
                'kampus_id' => 2, // Assuming Kampus B has id 2
            ],
            // Add more area parkirs as needed
        ];

        DB::table('area_parkirs')->insert($areaParkirs);
    }
}
