<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    protected function slugAndName ($name){
        $result = Str::slug($name, '-');
        return $result;
      }


    public function run()
    {
        
        $data = School::create([
            'school' => 'School of Post Graduate Studies',
            'slug' => $this->slugAndName('School of Post Graduate Studies'),
        ]);

        $data = School::create([
            'school' => 'School of Ministry',
            'slug' => $this->slugAndName('School of Ministry'),
        ]);

    }
}
