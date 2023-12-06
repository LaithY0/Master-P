<?php

namespace App\Http\Controllers;

use App\Models\Subscription_price;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class SubscriptionPriceController extends Controller
{
    function prices(){
        $prices = Subscription_price::all();

        return view('admin.prices', compact('prices'));
    }

    function editprice($id){
       
        $prices = Subscription_price::find($id);
        return view('admin.editprices', compact('prices'));
    }

    function addprice(){

        return view('admin.addprices');
    }


    public function saveprice (Request $request) {

        $data_input = $request->validate([
            'months' => 'required',
            'price' => 'required',
            'months_num' => 'required',
            'details1' => 'required',
            'details2' => 'required', 
            'details3' => 'required',]);
        
            
        
        $price = new Subscription_price([
            'months' => $request['months'],
            'price' => $request['price'],
            'months_num' => $request['months_num'],
            'details_1' => $request['details1'],
            'details_2' => $request['details2'],
            'details_3' => ($request['details3']), 
           
        ]);

        
        $price->save();

        return(redirect('/prices'))->with('success', 'The new subscription has been added successfully');

    }


    public function savepriceedit (Request $request) {

       
        $data_input = $request->validate([
            'months' => 'required',
            'price' => 'required',
            'months_num' => 'required',
            'details1' => 'required',
            'details2' => 'required', 
            'details3' => 'required',]);
        
            $id = $request->id;

        $price = Subscription_price::find($id);

        $price->months = $request->input('months');
        $price->price = $request->input('price');
        $price->months_num = $request->input('months_num');
        $price->details_1 = $request->input('details1');
        $price->details_2 = $request->input('details2');
        $price->details_3 = $request->input('details3');

        
        $price->save();

        return(redirect('/prices'))->with('success', 'The subscription has been updated successfully');

    }


    public function deleteprice($id) {
        try {
           
            Subscription_price::destroy($id);
    
            
            return(redirect('/prices'))->with('success', 'The subscription has been deleted successfully');
        } catch (QueryException $e) {
            
            return redirect('/users')->with('success', 'Something wrong');
        }
    }


}
