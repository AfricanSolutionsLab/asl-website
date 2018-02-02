<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function create()
    {
        return view('contactez');
    }


    public function save( Request $request){
        if($request->get('nom') !='' && $request->get('email') !=''
            && $request->get('telephone') !='' && $request->get('sujet') !=''
            && $request->get('message') !=''){
            $contact = new Contact();
            $contact->nom = $request->get('nom');
            $contact->email = $request->get('email');
            $contact->telephone = $request->get('telephone');
            $contact->sujet = $request->get('sujet');
            $contact->message = $request->get('message');
            $contact->save();

            return redirect('/contactez-nous')->with('success','Merci pour votre confiance !');
        }
        return redirect('/contactez-nous')->with('error','Veuillez remplir les champs obligatoires !');
    }

}
