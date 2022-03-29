<?php

namespace App\Http\Controllers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Entreprise;

class AdminController extends Controller
{
    public function User(){

        $data=user::all();
        return view('admin.user',compact('data'));
    }


    //deleting user
    public function deleteUser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
       
    }
    
    //storing
   public function entreprise(){
        $data=entreprise::all();
        return view('admin.entreprise',compact('data'));
   }

   //updating
   public function update(Request $request){
    $data=new entreprise;
    $data->nameEntreprise=$request->nameEntreprise;
    $data->localite=$request->localite;
    $data->ninea=$request->ninea;
    $data->registre=$request->registre;
    $data->save();
    return redirect()->back();
   }
   
   //delete entreprise:
   public function deleteEntreprise($id){
       $data=entreprise::find($id);
       $data->delete();
       return redirect()->back();
   }


  
}