@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf <!--cross site request forgery-->
        <label for="name">Your name:</label><br/>
        <input type="text" id="name" name="name"/><br/>

        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</options>
            <option value="hawaiian">Hawaiian</options>
            <option value="veg supreme">Veg Supreme</options>
            <option value="volcano">Volcano</options>
        </select>

        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</options>
            <option value="garlic crust">Garlic crust</options>
            <option value="thin & crispy">Thin & Crispy</options>
            <option value="thick">Thick</options>
        </select>

        <label for="price">Choose size:</label>
        <select name="price" id="price">
            <option value="10">Small</options>
            <option value="12">Medium</options>
            <option value="15">Large</options>
        </select>

        <fieldset class="fieldset">
            <label>Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"/>Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers"/>Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic"/>Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives"/>Olives<br/>

        </fieldset>
        <input type="submit" value="Order pizza"/>
    </form>
</div>
@endsection