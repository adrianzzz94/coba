<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th> name</th>
                <th>quantity</th>
                <th>harga</th>
                <th>coba</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($goodsbuilder as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $coba }}</td>
                <td>
                    <a href="{{ route('goods.edit', $item->id) }}">
                        edit
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>