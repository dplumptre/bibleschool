<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne(Role::class,'id');

    }

 public function transactions(){
     return $this->hasMany(Transaction::class);
 }

 public function profile(){
    return $this->hasOne(Profile::class);
}

public function getProfile($user_id){
    $data = Profile::where('id',$user_id)->first();
    return $data;
}

 public function isNotFilled(){

    

      if( strlen($this->profile->address)<1 || 
          strlen($this->profile->phone)<1 ||
          strlen($this->profile->gender)<1 ||
          strlen($this->profile->nature_of_business)<1 ||
          strlen($this->profile->designation)<1 ||
          strlen($this->profile->dob)<1 ||
          strlen($this->profile->birth_place)<1 ||
          strlen($this->profile->nationality)<1 ||
          strlen($this->profile->marital_status)<1 ||
          strlen($this->profile->pastor_name)<1 ||
          strlen($this->profile->church_role)<1 ||
          strlen($this->profile->time_in_church)<1 ||
          strlen($this->profile->other_churches_and_roles)<1 ||
          strlen($this->profile->born_again)<1 ||
          strlen($this->profile->born_again_time)<1 ||
          strlen($this->profile->name_and_address_of_church)<1 ||
          strlen($this->profile->church_involvement)<1 ||
          strlen($this->profile->academics)<1 ||
          strlen($this->profile->other_bible_college)<1 ||
          strlen($this->profile->first_referee)<1 ||
          strlen($this->profile->first_referee_phone)<1 ||
          strlen($this->profile->second_referee)<1 ||
          strlen($this->profile->second_referee_phone)<1
          
          ){
            return true;

          }


    return false;
}


}
