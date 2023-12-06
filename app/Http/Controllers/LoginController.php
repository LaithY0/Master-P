<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;


class LoginController extends Controller
{
    function login () {
       
        return view('login');
    }



        public function store (Request $request){

        
            $data_input = $request->validate([
                'fname' => 'required|alpha||min:3|max:255',
                'lname' => 'required|alpha||min:3|max:255',
                'email' => 'required|email',
                'password' => 'required_with:confirm_password|same:confirm_password|max:255|min:8',
                'confirm_password' => 'required|same:password',
                'phone' => 'required|numeric|digits_between:10,13',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);


            try{

            
            $user_data = new Users(); 
            $user_data->fname = $data_input['fname'];
            $user_data->lname = $data_input['lname'];
            $user_data->email = $data_input['email'];
            $user_data->phone = $data_input['phone'];
            $user_data->password = bcrypt($data_input['password']);
            if ($request->hasFile('photo')) {
                $data_input = $request->file('photo');
                $filename =  $data_input->getClientOriginalName();
                $data_input->move(public_path('assets/images'), $filename);

                $user_data->photo = $filename;
        
            }
        
            $user_data->save();
            return(redirect('/login'))->with('success', 'You are now one of our members !');
        }

        catch (QueryException $e){

            return back()->withErrors(['email' => 'The email already exist']);

        }
            

            
        }

    public function userlogin(Request $request) {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = Users::where('email', $request->email)->first();

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           
            return redirect('/'); 
        } else {
           
            return back()->withErrors(['email' => 'Invalid email or password']);
        }
    
        
    }
    
   
}
