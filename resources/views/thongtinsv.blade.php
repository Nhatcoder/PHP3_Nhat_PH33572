<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        @foreach ($thongtinsv as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">Tuổi: {{ $item['age'] }}</p>
                    <p class="card-text">Giới tính: {{ $item['gender'] }}</p>
                    <p class="card-text">Ngành học: {{ $item['major'] }}</p>
                    <p class="card-text">Địa chỉ: {{ $item['address'] }}</p>
                    <p class="card-text">Sở thích: {{ $item['hobbie'] }}</p>
                    <a href="#" class="btn btn-primary">Xem thêm</a>
                </div>
            </div>
        @endforeach

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
