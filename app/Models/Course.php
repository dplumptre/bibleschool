<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected  $table = 'courses';


    public function schools(){
        return $this->belongsTo(School::class);
    }


}
