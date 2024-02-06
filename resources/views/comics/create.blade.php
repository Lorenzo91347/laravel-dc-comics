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
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10">{{old('description' )}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Thumb URL</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{old('thumb' )}}">
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price' )}}">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Series Name</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{old('series' )}}">
                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{old('type')}}">
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" value="{{old('artists')}}">
                @error('artists')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" value="{{old('writers')}}">
                @error('writers')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
           
        </form>
    </div>

</body>

</html>
