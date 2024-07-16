<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Danh sách sản phẩm</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('product.create') }}" class="btn btn-primary">Thêm sản phẩm</a>

        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tìm kiếm</label>
                <input type="text" name="search" class="form-control">
            </div>
            <button class="btn btn-primary">Tìm kiếm</button>
        </form>

        <table class="table table-striped mt-3">
            <tr class="table-dark">
                <th>STT</th>
                <th>Tên</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
            </tr>
            @foreach ($products as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->view }}</td>
                    <td class="d-flex">
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Sửa</a>

                        <form action="{{ route('product.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
