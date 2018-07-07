<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Phone, Comment, Product};

class TestController extends Controller
{
    //

    public function testModel()
    {
       
        $user = User::find(2);
        $product = Product::find(6);
        $user->product()->save($product);
        dd($user->toArray());
    }
}
