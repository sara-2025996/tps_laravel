@extends('layout.master')

@section('content')

<div class="container">
    <h2>modifier annonce</h2>

    <form method="post" action="{{ route('annonces.update',['annonce'=>$annonce]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
       @include('annonce.form')

        <button type="submit" class="btn btn-primary mt-3">modifier</button>

    </form>

</div>

@endsection