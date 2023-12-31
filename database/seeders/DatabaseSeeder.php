<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            Admin::create([
                'name'       => 'Admin2',
                'email'      => 'doantotnghiep2@gmail.com',
                'phone'      => '0909888223',
                'password'   => bcrypt('123456789'),
                'created_at' => Carbon::now()
            ]);
        } catch (\Exception $exception) {
            Log::error("-------------- ". $exception->getMessage());
        }

    }
}
