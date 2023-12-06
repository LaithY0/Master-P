<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
  public function classes(){

    $classes= Classes::all();

    return view('admin.classes', compact('classes'));

   }

  public function addclass(){
  
      return view('admin.addclass');
  
     }

    
     public function editclass ($id) {

      $class = Classes::find($id);
      
      return view('admin.editclass' ,compact('class')); 
     
     
  }
  


     public function saveclass (Request $request) {

      $data_input = $request->validate([
          'class' => 'required|min:3|max:255',
          'class_name' => 'required|min:3|max:255',
          'photo' => 'required|image|mimes:jpeg,png,jpg,gif',]);
      
      if ($request->hasFile('photo')) {
          $data_input = $request->file('photo');
          $filename =  $data_input->getClientOriginalName();
          $data_input->move(public_path('assets/images'), $filename);
  
      }

      $class = new Classes([
          'class' => $request['class'],
          'class_name' => $request['class_name'],
          'photo' => $filename, 
      ]);

      
      $class->save();

      return(redirect('/classes'))->with('success', 'The class has been added successfully');

  }

  public function edit (Request $request){

   $data_input = $request->validate([
      'class' => 'nullable|min:3|max:255',
      'class_name' => 'nullable||min:3|max:255',
      'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',]);
   
  
   $id = $request->id;

   $class = Classes::find($id);

   $class->class = $request->input('class');
   $class->class_name = $request->input('class_name');

   if ($request->hasFile('photo')) {
       $data_input = $request->file('photo');
       $filename =  $data_input->getClientOriginalName();
       $data_input->move(public_path('assets/images'), $filename);
       $class->photo = $filename;
   }

   $class->save();

   return(redirect('/classes'))->with('success', 'The modifications have been saved');

  }


  public function delete ($id) {

   $class = Classes::find($id);

   $class->delete();

   return(redirect('/classes'))->with('success', 'Class deleted .');
}
 

   
}
