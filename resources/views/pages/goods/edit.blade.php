<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('goods.update', $goods->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <label for="nama">nama</label>
            <input type="text" name="name" value="{{ $goods->name }}">
        </div>
        <div class="row">
            <label for="nama">quantity</label>
            <input type="text" name="quantity" value="{{ $goods->quantity }}">
        </div>
        <div class="row">
            <label for="nama">harga</label>
            <input type="text" name="price" value="{{ $goods->price }}">
        </div>
        <button type="Submit">Simpan</button>
    </form>
</body>

</html>