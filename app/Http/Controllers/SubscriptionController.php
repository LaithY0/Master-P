<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
   
    function subscriptions() {

        $users = Users::all();
        $subscriptions = Subscription::all();
    
        return view('admin.subscriptions', compact('subscriptions', 'users'));
    }
    


    public function delete($id) {
       
        Subscription::where('id', $id)->delete();
    
        return redirect('/subscriptions')->with('success', 'Subscription deleted.');
    }
    
    
}
