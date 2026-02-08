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
    
    <div class="card">
        <div class="card-title">
            <h3>creer un compte</h3>
        </div>
        
        <div class="card-body">
            <form action="{{route('compte.store')}}" method="post">
                @csrf
                <div>
                    <label for="">email</label>
                    <input type="email" name="email"
                     value="{{old('email')}}"
                     class=" form-control @error('email') is-invalid @enderror   ">
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                 <div>
                    <label for="">password</label>
                    <input type="password"
                     name="pw"
                     class=" form-control @error('pw') is-invalid @enderror"
                     >
                      @error('pw')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                 <div>
                    <label for="">confirmation</label>
                    <input type="password"
                     name="pw_confirmation"
                     class=" form-control @error('pw_confirmation') is-invalid @enderror"
                     >
                      @error('pw_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-success" >creer</button>
            </form>

        </div>
    </div>
    
</body>
</html>