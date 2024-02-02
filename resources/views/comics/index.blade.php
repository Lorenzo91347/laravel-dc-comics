

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($comics as $comic)
        <li>{{$comic -> title }}</li>
        <li>{{$comic -> thumb }}</li>
        <li>{{$comic -> price }}</li>
        <li>{{$comic -> series }}</li>
        <form action="{{route('comics.destroy',['id'=>$comics->id])}}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete">
        </form>
        
            
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">File new comic</a>
    
</body>
</html>