@extends('layout.master');

@section('content')
    <div class="card mt-3 " >
        <div class="card-title">
            <div class="card-title text-center ">
                <h3>
                    ajouter un produit
                </h3>
            </div>
        </div>

        <div class="card-body">
            {{--

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            --}}

            <form action=" {{route('products.store')}} " method="post">
                @csrf

                <div class="mb-3" >
                    <label for="">titre</label>
                    <input type="text" name="title"
                    value="{{ old('title') }}"
                     class="form-control  @error('title') is-invalid @enderror ">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3" >
                    <label for="">price</label>
                    <input type="number" name="price"
                    value="{{ old('price') }}"
                     class="form-control @error('price') is-invalid @enderror ">
                     @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="" >
                    <label for="">description</label>
                    <textarea value="{{ old('desc') }}"
                     class="form-control @error('desc') is-invalid @enderror" name="desc" id="" cols="30" rows="10"></textarea>
                    @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class=" btn btn-primary mt-3 form-control" >ajouter</button>
            </form>
        </div>
    
    </div>
@endsection