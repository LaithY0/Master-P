<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




class AdminController extends Controller
{

    public function admins (){
        $admins = Admin::all();

        return view('admin.admins',compact('admins'));
    }

    public function addadmin (){
        return view('admin.addadmin');
    }

    public function editadmin ($id) {

        $admin = Admin::find($id);

        return view('admin.editadmin' ,compact('admin')); 
    }


    public function saveadmin (Request $request) {
        $data_input = $request->validate([
            'name' => 'nullable|alpha|min:3',
            'email' => 'nullable|email',
        ]);
        
       
        $id = $request->id;

        $user = Admin::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');


        $user->save();

        return(redirect('/admins'))->with('success', 'The modifications have been saved');
    }

    public function deleteadmin($id) {
        try {
           
            Admin::destroy($id);
    
            
            return redirect('/admins')->with('success', 'Admin deleted.');
        } catch (QueryException $e) {
            
            return redirect('/admins')->with('success', 'Cannot delete this user because he has an active subscription');
        }
    }


    public function addnewadmin (Request $request){
   
        $data_input = $request->validate([
          'name' => 'required|min:3|max:255',
          'email' => 'required|email',
          'password' => 'max:255|min:5',]);
    
    
      $admin = new Admin([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => $request['password'],
      ]);
    
    
      $admin->save();
      
     
      return(redirect('/admins'))->with('success', 'The admin has been added successfully');
     
       }




       public function subreq(){

          $users = Users::where('sub_req', 1)->get();

         return view('admin.sub_req', compact('users'));
  }





public function accept($id) {


    $user = Users::find($id);

    
    $monthsNum = $user->months_num;
    $daysToAdd = $monthsNum * 30;

    
    $startDate = now();

    
    $endDate = $startDate->copy()->addDays($daysToAdd);
    
    $user->update([
        'subscription_s' => $startDate,
        'subscription_e' => $endDate,
        'sub_req' => 0,
        'subscriper' => 1,
    ]);


    $users = Users::where('subscriper', 1)->get();
    
        foreach ($users as $user) {
           
            $existingSubscription = Subscription::where('user_id', $user->id)->first();
    
            if (!$existingSubscription) {
                
                $sub = new Subscription([
                    'user_id' => $user->id,
                    'start_in' => $user->subscription_s,
                    'end_in' => $user->subscription_e,
                    'price' => $user->sub_price,
                ]);
    
                $sub->save();
    
                
            }
        }

    return redirect('/subreq')->with('success', 'Member subscription has been activated. You can see
      it through the subscription table');
}


   
public function login(){

    return view('admin.login');
}

public function adminlogedd(Request $request){

    
    $validator = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);


    
    $email = $request->input('email');
    $password = $request->input('password');

    $admin = Admin::where('email', $request->email)->first();

    // Auth::attempt(['email' => $email, 'password' => $password])

    if ($admin->email == $email && $admin->password == $password ) {
       
        session()->put('data', $admin->id);
        return redirect('/dashbord'); 
        

    } else {
       
        return back()->withErrors(['email' => 'Invalid email or password']);
    }


}


    public function logout (){

         session()->forget('data');

         return redirect('/adminlogin');


    }
    
}
