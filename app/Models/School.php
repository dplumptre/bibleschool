<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected  $table = 'schools';


    public function courses(){
        return $this->hasMany(Course::class);
    }




}
