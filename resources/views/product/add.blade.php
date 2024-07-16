<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Thêm sản phẩm</h1>

        <form action="{{ route('product.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="category_id" class="form-select">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Lượt xem</label>
                <input type="text" name="view" class="form-control">
            </div>

            <button class="btn btn-primary mt-3">Thêm sản phẩm </button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
