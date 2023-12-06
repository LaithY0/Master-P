<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Slider;
use App\Models\Coachesl;
use App\Models\Subscription_price;
use App\Models\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
    public function index (){
        $data= Users::all();
        return view('admin.users',compact('data'));
    }
    public function home () {

        $slider= Slider::all();
        $classes= Classes::all();
        $coaches= Coachesl::all();
        $price = Subscription_price::all();


        return view('home', compact('slider', 'classes', 'coaches', 'price'));
        
    }


    public function services () {
       
        $price = Subscription_price::all();
        return view('services', compact('price'));
    }

    public function product () {
        return view('product');
    }

    public function contact () {
        return view('contact');
    }

    public function team () {
        return view('team');
    }

    public function about () {
        $data= Coachesl::all();
        return view('about',compact('data'));
    }

    public function admin () {
        return view('admin.index');
    }

    public function dashbord () {
        $users = Users::all();
        $subscriptions = Subscription::all();
        $classes= Classes::all();
        $subCount = $subscriptions->count();
        $totalPrice = $subscriptions->sum('price');
        $clasCount = $classes->count();
        $userCount = $users->count(); 
        return view('admin.dashbord', compact('userCount' , 'subCount' , 'totalPrice' , 'clasCount'));
    }
    public function Aproduct () {
        return view('admin.product');
    }

    public function users () {

        $data= Users::all();
        return view('admin.users',compact('data'));

    }


    public function profile () {
        $id = Auth()->User()->id;
        $user = Users::where('id',$id)->first();
        return view('user' , compact('user'));
    }




    public function saveprofileedit (Request $request) {
        
        $data_input = $request->validate([
            'first_name' => 'nullable|alpha|min:3',
            'last_name' => 'nullable|alpha|min:3',
            'email' => 'nullable|email',
            'phone' => 'nullable|numeric|digits_between:10,13',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'password' => 'nullable|max:255|min:8',
            'c_password' => 'nullable|same:password',
        ]);
        
       try{
    
        $id = $request->id;

        $user = Users::find($id);

        $user->fname = $request->input('first_name');
        $user->lname = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
            $user->photo = $filename;
        }

        if ($request->filled('password')) {

            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return(redirect('/profile'))->with('success', 'The modifications have been saved');
    }

    catch (QueryException $e) {
            
        return redirect('/editmyprofile')->with('success', 'The email already exists');
    }

    }



    public function editmyprofile () {
        $id = Auth()->User()->id;
        $user = Users::where('id',$id)->first();
        return view('editprofil' , compact('user'));
    }





    

    public function saveedit (Request $request) {
        $data_input = $request->validate([
            'fname' => 'nullable|alpha|min:3',
            'lname' => 'nullable|alpha|min:3',
            'email' => 'nullable|email',
            'phone' => 'nullable|numeric|digits_between:10,13',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        
       
        $id = $request->id;

        $user = Users::find($id);

        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->subscription_s = $request->input('subscription_s');
        $user->subscription_e = $request->input('subscription_e');

        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
            $user->photo = $filename;
        }

        $user->save();

        return(redirect('/users'))->with('success', 'The modifications have been saved');
    }








    public function adduser () {
        return view('admin.addUser');
    }



    public function edituser ($id) {
        $sub = Subscription::where('user_id', $id)->get();
        $user = Users::find($id);

        return view('admin.editUser' ,compact('user', 'sub')); 
    }



    public function logout(){
        Auth::logout();
        return redirect('/');
    }




    public function add (Request $request) {

        $data_input = $request->validate([
            'fname' => 'required|alpha||min:3|max:255',
            'lname' => 'required|alpha||min:3|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|numeric|digits_between:10,13',
            'password' => 'max:255|min:5',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',]);
        
            $filename = null;

            
        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
    
        }

        $user = new Users([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => ($request['password']), 
            'photo' => $filename, 
        ]);

        
        $user->save();

        return(redirect('/users'))->with('success', 'The user has been added successfully');

    }

   
    public function deleteuser($id) {
        try {
           
            Users::destroy($id);
    
            
            return redirect('/users')->with('success', 'User deleted.');
        } catch (QueryException $e) {
            
            return redirect('/users')->with('success', 'Cannot delete this user because he has an active subscription');
        }
    }


    public function test($id) {

        dd($id);
    }



    public function confirmSubscription(Request $request)
    {
        $price = $request->input('price');
        $userId = $request->input('user_id');
    
        
        $user = Users::find($userId);
        
            $user->update(['sub_req' => 1]);
    
           
            $subscriptionPrice = Subscription_price::where('price', $price)->first();

                
                $months = $subscriptionPrice->months;
                $months_num = $subscriptionPrice->months_num;
    
                
                $user->update(['subtype' => $months]);  
                $user->update(['months_num' => $months_num]); 
                $user->update(['sub_price' => $price]); 

           
    }    
    
}
