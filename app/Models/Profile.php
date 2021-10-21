<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected  $table = 'profiles';
    protected $fillable = [
        'email',
        'password',
        'address',
        'phone',
        'gender',
        'nature_of_business',
        'designation',
        'dob',
        'birth_place',
        'nationality',
        'marital_status',
        'pastor_name',
        'church_role',
        'time_in_church',
        'other_churches_and_roles',
        'born_again',
        'born_again_time',
        'name_and_address_of_church',
        'church_involvement',
        'academics',
        'other_bible_college',
        'first_referee',
        'first_referee_phone',
        'second_referee',
        'second_referee_phone',
    ];

    public function users(){
        return $this->belongsTo(User::class,'id');
    }
}
