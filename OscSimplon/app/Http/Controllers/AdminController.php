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

    public function deleteUser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
       
    }
    
   public function entreprise(){
       return view('admin.entreprise');
   }

    
}
