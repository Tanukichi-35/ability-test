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

    // 検索機能
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        // dd($keyword);
        if (!empty($keyword)) {
            // $query->where('last_name', 'like', '%'.$keyword.'%');
            //  ->orWhere("first_name", "like", "%".$keyword."%")
            //  ->orWhere("email", "like", "%".$keyword."%");
            $query->where(function ($query) use ($keyword) {
            $query->where("last_name", "like", "%".$keyword."%")
                ->orWhere("first_name", "like", "%".$keyword."%")
                ->orWhere("email", "like", "%".$keyword."%");
            });
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        // dd($gender);
        if (!empty($gender) || $gender != 0) {
            $query->where('gender', $gender);
        }
    }

    public function scopeCategorySearch($query, $category_id)
    {
        // dd($category_id);
        if (!empty($category_id) || $category_id != 0) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeDateSearch($query, $date)
    {
        // dd($date);
        if (!empty($date)) {
            $query->where('created_at', $date)
            ->orWhere('updated_at', $date);
        }
    }
}
