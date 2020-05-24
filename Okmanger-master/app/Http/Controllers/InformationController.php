<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Information;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $carts = null;
        if (session()->has('cart')) {
            $carts = new Cart(session()->get('cart'));
        }

        $data = $request->validate([
            'ville' => ['required'],
            'adresse' => ['required'],
            'numappart' => ['required'],
            'codepostale' => ['required', 'numeric'],
            'digicode' => ['required'],
            'heureLivraison' => ['required'],
        ]);

        $information = Auth::user()->information()->create($data);

        return view('cart.checkout', compact('information', 'carts'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $informations = Information::find($id);

        $carts = null;
        if (session()->has('cart')) {
            $carts = new Cart(session()->get('cart'));
        }

        $data = $request->validate([
            'ville' => ['required'],
            'adresse' => ['required'],
            'numappart' => ['required'],
            'codepostale' => ['required', 'numeric'],
            'digicode' => ['required'],
            'heureLivraison' => ['required'],
        ]);

        $informations->update($data);
        $information = Information::find($informations->id);
        return view('cart.checkout', compact('information', 'carts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
