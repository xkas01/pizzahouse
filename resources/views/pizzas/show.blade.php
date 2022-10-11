@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
        <h1>
            Order for {{ $pizza->name }}
        </h1>
        <p class="type">
            Type - {{ $pizza->type }}
        </p>
        <p class="base">
            Base - {{ $pizza->base }}
        </p>
        <p class="topping">Extra toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
    </div>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
