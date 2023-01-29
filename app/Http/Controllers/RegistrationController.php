<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //

    public function registration()
    {
           return view('user.registration');
    }

    public function post_registration(Request $request)
    {
            $request->validate([
                 'name' => 'required|max:200',
                 'email' => 'required|unique:users|email|max:100',
                 'phone' => 'required|max:10',
                 'pickup_name' => 'required|max:200',
                 'pickup_relation' => 'required|not_in:Select Relation',
                 'pickup_phone' => 'required|max:10',
            ]);

            
           $save_user = User::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
           ]);


           // pick-up details

           foreach($request->pickup_name as $pn){
                  $pick_names[] = $pn;
           }

           foreach($request->pickup_relation as $pr){
                  $pick_relation[] = $pr;
           }

           foreach($request->pickup_phone as $pp){
                 $pick_phone[] = $pp;
           }
          
           
        for($i =0; $i<count($pick_names); $i++){
           $details_save = Registration::create([
                  'user_id' => $save_user->id,
                  'pickup_name' => $pick_names[$i],
                  'relation' => $pick_relation[$i],
                  'pickup_phone' => $pick_phone[$i],
           ]);
         }
        

        return redirect()->route('view-user-lists');
    }


    public function view_user_lists()
    {
            $details = Registration::orderBy('id', 'desc')->paginate(5);
            return view('user.view', compact('details'));
    }
}
