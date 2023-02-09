@extends('center')

@section('title', 'Home')

@section('content')
<div class="form-container">
    <h1>cart!</h1>
    <table class="table">
        <tbody>
            <?php $jumlah = 0; ?>
            @foreach($orders as $item)
            <tr>
                <td>
                    <img width="100px" src="{{URL::asset('/images/item.png')}}" alt="Product Image">
                </td>
                <td>{{$item->item_name}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <form action="post"></form>
                    <a href="{{route('delete',$item->order_id)}}">delete</a>
                </td>
            </tr>
            <?php $jumlah += $item->price;  ?>
            @endforeach
        </tbody>
    </table>
    <br>
    <h3>Total: {{$jumlah}}</h3>

    <div class="button">
        <form action="{{route('buy')}}" method="post">
            @csrf
            <button type="submit">Buy</button>
        </form>
    </div>
</div>
@endsection