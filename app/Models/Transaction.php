<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id','user_id'];
    protected  $table = 'transactions';



    public function users(){
        return $this->belongsTo(User::class);
    }

    public function getProfile($user_id){
        $data = Profile::where('user_id',$user_id)->first();
        return $data;
    }
    
}
