<?php

namespace App\Http\Controllers;

use App\Models\Coachesl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoacheslController extends Controller
{


  public function coaches (){

   $data= Coachesl::all();
   return view('admin.coaches',compact('data'));

  }

  public function team (){

    $data= Coachesl::all();
    return view('team',compact('data'));
 
   }

   public function addcoach (){

    return view('admin.addcoach');

   }


   public function add (Request $request){
   
    $data_input = $request->validate([
      'name' => 'required|regex:/^[a-zA-Z\s]{3,}$/|min:3',
      'position' => 'required|min:3|max:255',
      'phone' => 'nullable|numeric|digits_between:10,13',
      'photo' => 'required|image|mimes:jpeg,png,jpg,gif',]);


      $filename = null;
      
  if ($request->hasFile('photo')) {
      $data_input = $request->file('photo');
      $filename =  $data_input->getClientOriginalName();
      $data_input->move(public_path('assets/images'), $filename);

  }

  $coach = new Coachesl([
      'name' => $request['name'],
      'position' => $request['position'],
      'phone' => $request['phone'],
      'photo' => $filename, 
  ]);


  $coach->save();
  
 
  return(redirect('/coaches'))->with('success', 'The coach has been added successfully');
 
   }



   public function edit (Request $request){
   

    $data_input = $request->validate([
        'name' => 'nullable|regex:/^[a-zA-Z\s]{3,}$/|min:3',
        'position' => 'nullable|alpha',
        'phone' => 'nullable|numeric|digits_between:10,13',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);
    
   
    $id = $request->id;

    $user = Coachesl::find($id);

    $user->name = $request->input('name');
    $user->position = $request->input('position');
    $user->phone = $request->input('phone');

    if ($request->hasFile('photo')) {
        $data_input = $request->file('photo');
        $filename =  $data_input->getClientOriginalName();
        $data_input->move(public_path('assets/images'), $filename);
        $user->photo = $filename;
    }

    $user->save();

    return(redirect('/coaches'))->with('success', 'The modifications have been saved');
 
   }



   public function editcoach ($id) {

    $coach = Coachesl::find($id);

    
    return view('admin.editcoach' ,compact('coach')); 
   
   
}



   public function delete ($id) {

    $coach = Coachesl::find($id);

    $coach->delete();

    return(redirect('/coaches'))->with('success', 'Coach deleted .');
}



}
