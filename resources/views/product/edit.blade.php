<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cập nhật sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Cập nhật sản phẩm</h1>

        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="category_id" class="form-select">
                    @foreach ($category as $item)
                        <option {{ $item->id == $product->category_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Lượt xem</label>
                <input type="text" name="view" value="{{ $product->view }}" class="form-control">
            </div>

            <button class="btn btn-primary mt-3">Cập nhật sản phẩm </button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
