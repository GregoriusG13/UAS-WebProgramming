@extends('center')

@section('title', 'Home')

@section('content')
<div class="card-list">
    @foreach ($items as $item)
    <div class="card">
        <img src="{{URL::asset('/images/sayur.png')}}" alt="Image">
        <h3>{{$item->item_name}}</h3>
        <a href="{{route('item.show',$item->item_id)}}">Detail</a>
    </div>
    @endforeach

    <br>
    <div class="pagination">
        <a href="{{ $items->previousPageUrl() }}" class="{{ ($items->currentPage() == 1) ? 'disabled' : '' }}">Previous</a>
        <span>Page {{ $items->currentPage() }} of {{ $items->lastPage() }}</span>
        <a href="{{ $items->nextPageUrl() }}" class="{{ ($items->currentPage() == $items->lastPage()) ? 'disabled' : '' }}">Next</a>
    </div>

</div>
@endsection