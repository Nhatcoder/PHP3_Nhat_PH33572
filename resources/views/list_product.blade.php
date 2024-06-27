<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- <ul>
        @foreach ($arrSv as $item)
            <li>{{ $item['id'] }}</li>
            <li>{{ $item['name'] }}</li>
        @endforeach
    </ul> --}}


    {{-- <ul>
        @foreach ($dataPhim['items'] as $item)
            <img width="150px" src="{{ $item['thumb_url'] }}" alt="">
            <li>{{ $item['name'] }} </li>
        @endforeach

    </ul> --}}

    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ảnh</th>
        </tr>
        @foreach ($dataPhim['items'] as $key => $item)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $item['name'] }} </td>
                <td> <img width="150px" src="{{ $item['thumb_url'] }}" alt=""></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
