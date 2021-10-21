<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\School;
use App\Models\Course;


class CourseSeeder extends Seeder
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

        $school = School::where('slug','school-of-ministry')->first();
        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'FOUNDATION IN CHRISTIAN MINISTRY',
            'price' => '5000',
            'application_price' => '1000',
            'slug' => 'fcm',
            'description' => 'FCM is a ten weeks Programme designed to lay proper foundation for Christian maturity, spiritual understanding and discovery of God’s purpose for life and ministry.',
            'duration' => '10 weeks.',
            'requirement' => 'Interested candidate must be born again and must have the ability to understand and communicate in English.',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'CERTIFICATE IN CHRISTIAN MARRIAGE COUNSELLING',
            'price' => '30000',
            'application_price' => '5000',
            'slug' => 'ccmc',
            'description' => 'CCMC is a twenty-two weeks Programme designed to prepare students for marriage and marriage counselling ministry.',
            'duration' => '22 Weeks.',
            'requirement' => 'Interested candidate must be born again and must be able to understand and communicate well in English language. GCE O’ Level or its equivalent is an added advantage.',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'CERTIFICATE IN FOLLOW-UP & DISCIPLESHIP STRATEGIES',
            'application_price' => '5000',
            'price' => '20000',
            'slug' => 'cfus',
            'description' => 'CFDS is a 22 weeks Programme designed to equip students with the needed skill for ethical and effective follow up and discipleship ministry work.',
            'duration' => '22 weeks',
            'requirement' => 'Interested candidate must be born again and must be able to understand and communicate well in English language. GCE O’ Level or its equivalent is an added advantage',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'CERTIFICATE IN CHRISTIAN MINISTRY ',
            'application_price' => '5000',
            'price' => '25000',
            'slug' => 'ccm',
            'description' => 'CCM is a 22 weeks Programme designed to prepare students for ministry work. It is a basic requirement for Diploma in Christian Ministry Programme',
            'duration' => '22 weeks',
            'requirement' => 'Interested candidate must be born again and must be able to understand and communicate well in English language. GCE O’ Level or its equivalent is an added advantage.',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'DIPLOMA IN CHRISTIAN MINISTRY',
            'application_price' => '5000',
            'price' => '40000',
            'slug' => 'dcm',
            'description' => 'DCM is a twelve months Programme designed to develop the understanding, attitude and skills necessary both in theory and practices for students to fulfill their calling. It intends to provide the intellectual depth necessary for ministry realities and commitment. Students with outstanding performance could proceed for Bachelor of Theology Programme.',
            'duration' => '34 Weeks',
            'requirement' => 'Interested candidates must be born again and have 4 O Level credits including English Language, CRK is an added advantage.',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'DIPLOMA IN CHURCH PLANTING AND ADMINISTRATION',
            'application_price' => '5000',
            'price' => '40000',
            'slug' => 'dcpa',
            'description' => 'Philosophy: - Ministry according to the purpose of Christ and centered on the Word.
            Purpose: - To equip pastors and church workers adequately for effective ministry within the Church..',
            'duration' => '34 Weeks',
            'requirement' => 'Interested candidates must be born again.',
        ]);

        $data = Course::create([
            'school_id' => $school->id,
            'course' => 'ADVANCED DIPLOMA IN LEADERSHIP',
            'application_price' => '5000',
            'price' => '60000',
            'slug' => 'adl',
            'description' => ' To produce in participants, high-integrity and leadership empowerment that will make them quality leaders in their various spheres of influence and also create a hunger for excellence in the discharge of their responsibilities.',
            'duration' => '41 Weeks',
            'requirement' => 'Must be Born-again, must have a minimum academic qualification of O’ Levels W.A.S.C. or its equivalent, certificates from recognized seminary. Must have the ability to communicate in English.',
        ]);


    }
}
