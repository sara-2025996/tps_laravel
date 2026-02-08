<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/calculatrice" method="post">
        @csrf
        <input type="number" name="a" id="">
        <input type="number" name="b" id="">
        <select name="op" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit" >calculer</button>
    </form>

    @if(isset($result))
        <h1>{{$result}}</h1>
    @endif
    

</body>
</html>