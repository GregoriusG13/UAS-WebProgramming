@extends('center')

@section('title', 'Home')

@section('content')
<div class="card-list">
    <div class="product-detail">

        <div class="product-image">
            <h2>{{$data->item_name}}</h2>
            <br>
            <img width="50%" src="{{URL::asset('/images/sayur.png')}}" alt="Product Image">
        </div>
        <div class="product-info">
            <h3>Price: Rp.{{$data->price}}</h3>
            <br>
            <p>{{$data->item_desc}}</p>
        </div>
    </div>
    <div class="button">
        <form action="{{route('buy')}}" method="post">
            @csrf
            <input type="hidden" name="price" value="{{$data->price}}">
            <input type="hidden" name="item_id" value="{{$data->item_id}}">
            <button type="submit">Buy</button>
        </form>
    </div>
</div>

@endsection