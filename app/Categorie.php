<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function articles(){
        return $this->hasMany('App\Article');
    }
    
    public static function liste($limit){
        $categories=Categorie::select('*')
            ->limit($limit)
            ->get();
        return $categories;
    }
}
