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




class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
   
    public function NewMission(Request $request){
        $chauffeurs= Chauffeur::all();
        $data['condTransp'] = $request->refEtb ;
        $data['nom'] = $request->nom ;
        $data['prenom'] = $request->adresseEtb ;
        $data['email'] = $request->email ;
        $data['date_Dep'] = $request->tel ;
        $data['adresse_Dep'] = $request->estValide ;
        $data['adresse_Arriv'] = $request->refEtb ;
        $data['estUrgent'] = $request->refEtb ;
        $data['estFacture'] = $request->refEtb ;
        $data['refEtb'] = $request->refEtb ;
        $data['idMalade'] = $request->refEtb ;
        $data['idChauffeur'] = $request->refEtb ;
        Demandetransport::create($data);

        return view('AjouterMission', compact('chauffeurs'));
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