@extends('layout.master')
@section('content')

<div>
    <h3>les produits</h3>

    <div class="row">
        @foreach($products as $product)
        <div class="col-3">

            <x-product-card :id="$product['id']" :img="$product['img']"  :titre="$product['title']" :price="$product['price']" />
        </div>

       
        @endforeach
    </div>

</div>
@endsection

