<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    //
    function insert(Request $req)
    {
        $name = $req->get('pname');
        $price = $req->get('price');
        $stock = $req->get('pstock');
        $pimage = $req->file('image')->getClientOriginalName();
        //move uploaded file
        $req->image->move(public_path('images'), $pimage);

        $prod = new product();
        $prod->Pname = $name;
        $prod->Pprice = $price;
        $prod->Pstock = $stock;
        $prod->PImage = $pimage;
        $prod->save();

        return redirect('/home');
    }
        function readdata()
        {
            $mydata = product::all();
            return view('insertRead',['mydata'=>$mydata]);
        }
        function updateordelete(Request $req){
           $id = $req->get('id');
           $name = $req->get('name');
           $price = $req->get('price');
           $stock = $req->get('stock');
           if($req->get('update') == 'UPDATE')
           {
            return view('updateview',['pid'=>$id, 'pname'=>$name, 'pprice'=>$price, 'pstock'=>$stock]);
           }
           else
           {
            $prod = product::find($id);
            $prod->delete();
           }
           return redirect('/home');
        }
        function update(Request $req)
        {
            $ID = $req->get('id');
            $Name = $req->get('name');
            $Price = $req->get('price');
            $Stock = $req->get('stock');

            $prod = product::find($ID);
            $prod->Pname = $Name;
            $prod->PPrice = $Price;
            $prod->Pstock = $Stock;
            $prod->save();

            return redirect('/home');

        }
        
}
