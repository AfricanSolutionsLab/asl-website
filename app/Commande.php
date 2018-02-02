<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }

    public function projets(){
        return $this->hasMany('App\Projet');
    }

    public function validate($input){
        $rules=[
            'contact' => 'required',
            'libelle' => 'required',
            'objectif' => 'required'.$this->id,
            'type_commande' => 'required'.$this->id
        ];
        
        $messages=[
            'contact.required' => "Ce numéro d'identification fiscal existe déjà.",
            'libelle.required' => "Ce numéro RC existe déjà.",
            'objectif.required' => "Ce numéro CNSS existe déjà.",
            'type_commande.required' => "Ce numéro CNAMGS existe déjà."
        ];
    }

    
}
