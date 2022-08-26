<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    public function index()
    {
    // get data from a database
        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name','desc')->get();
        //$pizzas = Pizza::where('type','hawaiaan')->get();

    return view('pizzas.index', [
        'pizzas' => $pizzas, 
    ]);

    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');
        $pizza->save();

        //error_log($pizza);
        //error_log(request('toppings'));
        return redirect('/')->with('msg','Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
