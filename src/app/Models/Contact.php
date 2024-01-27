<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'category_id',
        'detail',
    ];

    public function getGenderNo(String $genderValue){
        if($genderValue == '男性'){
            return 1;
        }else if($genderValue == '女性'){
            return 2;
        }else{
            return 3;
        }
    }

    public function getTellNo(String $tell_1, String $tell_2, String $tell_3){
        return $tell_1.'-'.$tell_2.'-'.$tell_3;
    }
}
