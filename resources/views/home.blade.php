@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p><a href="/pizzas">View all pizza orders</a></p>
                </div>
            </div> -->
            


        </div>
    </div>
</div>

<div class="home-header">
    <div class="home-header-background">
     </div>
     <!-- <img src="/img/home.png" alt="pizza house logo" class="home-header-background" > -->
    <div class="home-nav-bar">
    <ul class="nav-bar">
        <li class="nav-list"><a href="#" class="nav-list">Home</a></li>
        <li class="nav-list"><a href="#news" class="nav-list">Gallery</a></li>
        <li class="nav-list"><a href="{{route('pizzas.store')}}" class="nav-list">View Orders</a></li>
        <li class="nav-list"><a href="{{route('pizzas.create')}}" class="nav-list">Order Pizza</a></li>
    </ul>
    </div>
    </div>

<div class="body-container">
    <div class="body-content">
        <h1 class="body-text-header">The Organic restaurant</h1>
        <h4 class="body-text-subheader">is a unique place. It attracts with its original interior but above all the pizza selling places</h4>
    </div>
    <div class="body-content">
        <h1 class="body-text-header">Quality of the dishes</h1>
        <h4 class="body-text-subheader">served. Carefully prepared dishes are characterized by freshness and a lot of ingredients</h4>
    </div>
</div>

<div class="random-image">
</div>

<div class="body2-container">
    <div class="body2-content">
        <h1 class="body2-text-header">Pizza House</h1>
        <h4 class="body2-text-subheader">The World's Best Pizza</h4>
        <div class="buttonContainer">
        <a href="{{route('pizzas.create')}}" class="linkbutton">Order Now</a>
        </div>
    </div>
</div>

<footer>
    <p>Copyright @pizzahouse 2022</p>
</footer>
@endsection
