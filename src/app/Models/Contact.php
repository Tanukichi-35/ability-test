<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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

    public function getName(){
        return $this->last_name.'  '.$this->first_name;
    }

    public function getGenderNo(String $genderValue){
        if($genderValue == '男性'){
            return 1;
        }else if($genderValue == '女性'){
            return 2;
        }else{
            return 3;
        }
    }

    public function getGender(){
        if($this->gender == 1){
            return '男性';
        }else if($this->gender == 2){
            return '女性';
        }else{
            return 'その他';
        }
    }

    public function getTellNo(String $tell_1, String $tell_2, String $tell_3){
        return $tell_1.'-'.$tell_2.'-'.$tell_3;
    }

    public function getCategory(){
        $category = Category::find($this->category_id);
        return $category->content;
    }
}
