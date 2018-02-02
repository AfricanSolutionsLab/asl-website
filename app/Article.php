<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    
    public function categorie(){
        return$this->belongsTo('App\Categorie');
    }
    
    public function images(){
        return $this->hasMany('App\Fichier');
    }
    
    public static function listePaginate($per_page){
        $articles=Article::select('*')
            ->where('ispublished',true)
            ->where('date_publication','<=',''.date('Y-m-d').'')
            ->orderBy('date_publication','desc')
            ->paginate($per_page);
        return $articles;
    }
    
    public function countComments(){
        $nb=DB::table('commentaires')
            ->where('article_id','=',$this->id)
            ->count();
        return $nb;
    }
}
