<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use Illuminate\Database\QueryException;


class ContactController extends Controller
{
    
   public function snedComment (Request $request){

        $data_input = $request->validate([
        'name' => 'required|regex:/^[a-zA-Z\s]{3,}$/|min:3',
        'email' => 'required|email',
        'phone' => 'required|numeric|digits_between:10,13',
        'comment' => 'required|min:4|max:255',]);

        try{
        $comment = new Contact([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'comment' => $request['comment'], 
            
        ]);

        
        $comment->save();

        return(redirect('/contact'))->with('success', 'Your comment was sent successfully ');
     }

     catch (QueryException $e){

          return back()->withErrors(['phone' => 'The phone number must be correct']);
  
      }

   }


   public function comment(){
    $user = Contact::all();
    return view('admin.contact' ,compact('user'));
   }

   public function deletecomment($id){

        $commint = Contact::find($id);
     
        $commint->delete();
     
        return(redirect('/comment'))->with('success', 'Comment deleted .');
     
   }
}
