<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



<body>
    <div class="container">
        <h1>New Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title', $comic->title)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{old('description', $comic->description)}}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumb URL</label>
                <input type="text" class="form-control" name="thumb" value="{{old('thumb', $comic->thumb)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{old('price', $comic->price)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Series Name</label>
                <input type="text" class="form-control" name="series" value="{{old('series', $comic->series)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{old('type', $comic->type)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" value="{{old('artists', $comic->artists)}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" value="{{old('writers', $comic->writers)}}">
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
