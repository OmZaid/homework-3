<?php


namespace App\Http\Controllers;

use mysql_xdevapi\Table;


class HomeController extends  controller
{
      function about()
     {
         $users = \DB::table('users')->get();

         $name=$users[0]->name;
  return view('about', compact('users'));
    //}

}
    function product1()
    {
        $products = \DB::table('products')->get();

        $name=$products[0]->name;
        return view('product', compact('products'));
        //}

    }

    function bring_info(){
        $products = \DB::table('products')->get();
        $users = \DB::table('users')->get();
        $info = \DB::table('user_products')
            ->join('users', 'user_products.user_id', '=', 'users.id')
            ->join('products', 'user_products.product_id', '=', 'products.id')
            ->select('*')
            ->get();
        //$name=$info[0]->name;
        return view('info', compact('products','users','info'));
    }
}