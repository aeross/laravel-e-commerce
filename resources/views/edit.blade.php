<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        label,
        input {
            margin: 5px;
            padding: 3px 6px;
        }
    </style>
</head>

<body>

    <form method="POST" action="/edit/{{$product['id']}}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">name</label>
            <input type="text" id="name" name="name" value="{{$product['name']}}">
        </div>
        <div>
            <label for="price">price</label>
            <input type="number" id="price" name="price" value="{{$product['price']}}">
        </div>
        <button type="submit">submit</button>
    </form>

</body>

</html>