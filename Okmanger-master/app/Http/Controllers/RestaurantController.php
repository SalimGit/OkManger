<?php

namespace App\Http\Controllers;

use App\Cart;
use App\restaurant;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\User;
use App\Information;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param restaurant $restaurant
     * @return Factory|View
     */
    public function index(Restaurant $restaurant)
    {

        $products = $restaurant->products()->get();
        return view('Restaurant.index', compact('products'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($product->id);

        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Le produit a été supprimé');
    }

    public function addToCart(Product $product)
    {

        $restaurant = $product->restaurant()->first();
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        //dd($cart);
        session()->put('cart', $cart);
        return redirect()->route('product.index', $restaurant)->with('success', 'Le produit a été ajouté');
    }

    public function showCart()
    {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }


        return view('cart.show', compact('cart'));
    }


    public function checkout()
    {
        $information = Auth::user()->information()->first();
        $carts = null;
        if (session()->has('cart')) {
            $carts = new Cart(session()->get('cart'));
        }
        if ($information == null){
            $information = new Information();

        }
        $fraisLivraison = 0;
        if(Auth::user()->category == "Particulier"){
            $carts->totalPrice += 5;
            $fraisLivraison = 5;
        }

        if(Auth::user()->category == "Entreprise"){
            $carts->totalPrice += 2;
            $fraisLivraison = 2;
        }

        return view('cart.checkout', compact('carts', 'information', 'fraisLivraison'));
    }

    public function charge(Request $request)
    {

        //dd($request->stripeToken);
        $charge = Stripe::charges()->create([
            'currency' => 'EUR',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Le paiement a bien été pris en compte.',
            'metadata' => [
            'discount' => collect(session()->get('coupon'))->toJson(),
        ]
            ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...

            auth()->user()->orders()->create([
                'cart' => serialize(session()->get('cart'))
            ]);
            // clearn cart
            if (session()->has('cart')) {
                $carts = new Cart(session()->get('cart'));
            }
            session()->forget('cart');
            return view('maCommande', compact('carts'));
        } else {
            return view('maCommandeError');
        }
    }
    public function maCommande()
    {
        return view('maCommande');
    }
/*
    private function findNearestRestaurants($latitude, $longitude, $radius = 1000)
    {
        $restaurants = DB::table('restaurant')
                        ->selectRaw("id, nom, specialite, latitude, longitude, rating, zone ,
                        ( 6371000 * acos( cos( radians(?) ) *
                        cos( radians( latitude ) )
                        * cos( radians( longitude ) - radians(?)
                        ) + sin( radians(?) ) *
                        sin( radians( latitude ) ) )
                        ) AS distance", [$latitude, $longitude, $latitude])
            ->where('active', '=', 1)
            ->having("distance", "<", $radius)
            ->orderBy("distance",'asc')
            ->offset(0)
            ->limit(20)
            ->get();

        return $restaurants;
    }*/
}
