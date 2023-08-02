<?php

namespace Database\Seeders;

use App\Models\Supplier; // Pastikan namespace yang sesuai di sini
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        // Misalkan Anda ingin menghasilkan 10 data supplier:
        Supplier::factory()->count(10)->create();
    }
}
