@extends('layout.master')
@section('content')



    <div class="card w-50" >
        <img src="{{asset('image/'.$product['img'])}}" alt="" class="img-card-top w-50 ">
        <div class="card-body">
            <div class="card-title">{{$product['title']}}</div>
            <div class="fw-bold">{{$product['price']}}</div>
        </div>
        
    </div>
    <a href="{{url('/products')}}" class="btn btn-primary">return</a>
@endsection