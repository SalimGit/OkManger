<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Restaurants extends Controller
{
    public function index()
    {
        return view('Restaurants');
    }
}
