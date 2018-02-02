<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsletterController extends Controller
{


    public function store(Request $request)
    {

        $email=$request->get('email');
        if($email!=''){
            $nb=DB::table('newsletters')->where('email','=',''.$email.'')->count();
            if($nb==0){
                $newsletter = new Newsletter();
                $newsletter->email = $email;
                $newsletter->save();
                return '1Votre inscription est enrégistrée avec succès';
            }
            return '0Cette adresse mail est déjà souscrite';
        }
        
        return '0Veuillez saisir votre adresse mail';
    }
}
