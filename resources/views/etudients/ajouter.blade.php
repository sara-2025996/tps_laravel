<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources\css\app.css','resources\js\app.js'])

</head>
<body>
   
<div class="card mt-3 w-50 ">
    <div class="card-title  text-center ">
        <h3>ajouter un etudient</h3>
    </div>
    @if (session('success'))
    <div class="alert alert-success " >
        {{ session('success') }}
    </div>
@endif
     <div class="card-body">
        <form action="{{route('etudient.store')}}" method="post" class="row">
            <div class="col-6" >
                @csrf 
             <div class="mb-3" >
                    <label for="">Nom</label>
                    <input type="text" name="nom"
                    value="{{ old('nom') }}"
                     class="form-control  @error('nom') is-invalid @enderror ">
                    @error('nom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{--prenom--}}
                <div class="mb-3" >
                    <label for="">prenom</label>
                    <input type="text" name="prenom"
                    value="{{ old('prenom') }}"
                     class="form-control  @error('prenom') is-invalid @enderror ">
                    @error('prenom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{--email--}}
                <div class="mb-3" >
                    <label for="">email</label>
                    <input type="email" name="email"
                    value="{{ old('email') }}"
                     class="form-control  @error('email') is-invalid @enderror ">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{--password--}}
                <div class="mb-3" >
                    <label for="">mot de passe </label>
                    <input type="password" name="password"
            
                     class="form-control  @error('password') is-invalid @enderror ">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                </div>

                <div  class="col-6" >
                {{--confirmation--}}
                    <div class="mb-3  " >
                        <label for="">confirmation</label>
                        <input type="password" name="password_confirmation"
                    
                         class="form-control  @error('password_confirmation') is-invalid @enderror ">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                {{--radio--}}
                     <div class="mb-3  " >
                        <label for="">type de bac</label><br>
                        <input type="radio" name="type" 
                        value="marocain"
                        class="mt-3
                        {{old('type')=='marocain'?'checked':''}}
                           @error('type') is-invalid @enderror ">
                        marocain

                        <input type="radio" name="type"
                        value="internationnal"
                        
                        class="mt-2
                        {{old('type')=='internationnal'?'checked':''}}
                           @error('type') is-invalid @enderror" >
                         internationnal

                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                {{--select--}}
                     <div class="mb-3  " >
                        <label for="">choisir une filiere</label>
                        <select name="filier" class="form-control @error('filier') is-invalid @enderror " >
                            <option value=""> choisir une filier </option>
                            <option value="SMI" {{old('filier')=='SMI'?'selected':''}} >SMI</option>
                            <option value="SMA" {{old('filier')=='SMA'?'selected':''}} >SMA</option>
                            <option value="SEG" {{old('filier')=='SEG'?'selected':''}} >SEG</option>
                            <option value="PC"  {{old('filier')=='PC'?'selected':''}}>PC</option>

                        </select>
                        @error('filier')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ajouter</button>

        </form>
        
    </div>
</div>

    
</body>
</html>