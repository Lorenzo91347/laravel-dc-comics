<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<form action="{{ route('comics.update' ['id'=> $comics -> id]) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{$comics -> title}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$comics -> description}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Thumb URL</label>
        <input type="text" class="form-control" name="thumb" value="{{$comics -> thumb}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price"value="{{$comics -> price}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Series Name</label>
        <input type="text" class="form-control" name="series" value="{{$comics -> series}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Sale Date</label>
        <input type="text" class="form-control" name="sale_date"value="{{$comics -> sale_date}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" class="form-control" name="type" value="{{$comics -> type}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Artists</label>
        <input type="text" class="form-control" name="artists" value="{{$comics -> Artists}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Writers</label>
        <input type="text" class="form-control" name="writers" value="{{$comics -> writers}}">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>