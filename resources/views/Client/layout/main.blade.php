<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            Shoppe
        @show
    </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 bg-info position-fixed top-0 start-0 sidebar">
                <h3 class="mt-3 text-light">Shoppe</h3>
                <div class="list-group mt-4">
                    <a href="{{ route('quanLyUser') }}" class="list-group-item ">
                        Quản lý người dùng
                    </a>
                    <a href="#" class="list-group-item">
                        Quản lý sản phẩm
                    </a>
                    <a href="#" class="list-group-item ">
                        Báo cáo
                    </a>
                    <a href="#" class="list-group-item ">
                        Thống kê
                    </a>
                </div>
            </div>

            <div class="col-9 offset-3 p-0 position-relative">
                <!-- Header -->
                <x-header title="Shoppe Fashion"></x-header>
                <!-- Main -->
                @yield('main')

                <!-- Footer -->
                <x-footer></x-footer>

            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
