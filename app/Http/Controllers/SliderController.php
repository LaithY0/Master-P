<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
   
   public function slider (){

        $slider = Slider::all(); 
        return view('admin.slider',compact('slider'));

    }

    public function addslider (){

       
        return view('admin.addslider');

    }


    public function saveslider (Request $request){
   

        $data_input = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',]);
        
        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
      
        }
      
        $photo = new Slider([
            'photo' => $filename, 
        ]);
      
      
        $photo->save();
        
       
        return(redirect('/slider'))->with('success', 'The photo has been added successfully');
     
       }

       public function deleteslider ($id) {


        $photo = Slider::find($id);

        $photo->delete();

        return(redirect('/slider'))->with('success', 'Photo deleted .');
    }

    
}
