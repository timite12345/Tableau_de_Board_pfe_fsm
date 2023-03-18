<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Request\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\AppServiceProovider;
use App\Models\Personne;
use App\Models\Etbsante;
use App\Models\User;
use App\Models\Demandetransport;
use App\Models\Chauffeur;
use App\Models\Facture;
use App\Models\Partenaire;
use App\Models\Personne_malade;
use App\Models\Transport;
use App\Models\Type_etb;
use App\Models\Type_permis;
use App\Models\Vehicule;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function Home(){
    $chauffeurs= Chauffeur::all();
    return view('/Login_V', compact('chauffeurs'));
}


public function NewMission(){
    $users= User::all();
    return view('/NewMission', compact('users'));
}

  //FONCTION POUR CREER NOUVEL UTILISATEUR

    public function Create(Request $request){
        $request->password = Hash::make($request->password);
        $data['nom'] = $request->nom ;
        $data['prenom'] = $request->prenom ;
        $data['contact'] = $request->contact ;
        $data['adresse'] = $request->adresse ;
        $data['email'] = $request->email ;
        $data['password'] = $request->password ;
        //dd($data);
        User::create($data);
        session()->flash('Succes','Un nouvel utilisateur ajouté');

        return redirect('/welcome');
    }

        // FONCTION RENSEIGNER NOUVEL HOPITAL

    public function CreateHopital(Request $request){
        $data['refEtb'] = $request->refEtb ;
        $data['nom'] = $request->nom ;
        $data['adresseEtb'] = $request->adresseEtb ;
        $data['email'] = $request->email ;
        $data['tel'] = $request->tel ;
        $data['estValide'] = $request->estValide ;

        //dd($data);
        Etbsante::create($data);
        session()->flash('Succes','Un nouvel hopital ajouté');

        return redirect('/welcome');
    }

   // FONCTION CREER NOUVELLE MISSION

    public function CreateNewMission(Request $request){
        $data['condTransp'] = $request->condTransp ;
        $data['nom'] = $request->nom ;
        $data['prenom'] = $request->prenom ;
        $data['email'] = $request->email ;
        $data['date_Dep'] = $request->date_Dep ;
        $data['adresse_Dep'] = $request->adresse_Dep ;
        $data['adresse_Arriv'] = $request->adresse_Arriv ;
        $data['estUrgent'] = $request->estUrgent ;
        $data['estFacture'] = $request->estFacture ;
        // $data['refEtb'] = $request->refEtb ;
        // $data['idMalade'] = $request->idMalade ;
        $data['idChauffeur'] = $request->idChauffeur ;
        Demandetransport::create($data);

        // return view('/');
        return redirect('/welcome');
    }

    public function Login(LoginRequest $request){
        $request->authenticate();
        $request->session()->regenerate();
        return redirect('/welcome');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/LoginPage');

    }



    public function UpdateProfil(Request $request, User $user){
        $data = $request->request->validate([
            'firstname' => 'required|max:250',
            'lastname' =>  'required|max:250',
            'gendar' => 'required',
            'contact' => 'required | min:8|max:10',
            'email' => 'required | email',
            'password' => 'required',

        ]);

        $user->update($request->all());
        $user->save();

        alert()->succes('Infos utilisateur mise à jour avec succes !')->persistent('Ok');

        return redirect('/welcome')->with('message',"Infos mises à jours !");

    }
    
}