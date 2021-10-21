<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Setting::create([
            'service' => 'Email listing',
            'slug' => 'email-listing',
            'status' => "1",
        ]);
        $data = Setting::create([
            'service' => 'Acceptance letter',
            'slug' => 'acceptance-letter',
            'status' => "1",
        ]);
    }
}
