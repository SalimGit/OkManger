<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User;
use App\Lieu;
use Illuminate\Http\Request;


class rechercheController extends Controller
{
    public function index()
{
    $product = User::search()->orderBy('name');

    return view('lesRestaurant', compact('products'));


}

public function search(Request $request)
{
    $data = $request->validate([
        'search' =>['required'],
    ]);

    $lieu = Lieu::where('ville', 'like', '%' . explode(",", $data['search'])[0] . '%')->first();


    if (empty($lieu)){
        session()->flash('message', 'Nous ne sommes pas encore là ! Mais on y travaille ! Nous pouvons vous envoyer un e-mail dès que nous serons présents dans cette zone. ');
        return redirect()->back();
    }
    $restaurants = $lieu->restaurants()->get();

    return view('lesRestaurants', compact('restaurants','lieu'));
}


}
