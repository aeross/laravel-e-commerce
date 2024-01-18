<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    <ul>
        @foreach($data as $d)
        <li>
            product: {{ $d['name'] }}, price: {{ $d['price'] }}
        </li>
        @endforeach
    </ul>

    <h2>Total price: {{ array_sum(
        array_map(fn($d) => $d['price'], $data)
    ) }}
    </h2>
</body>

</html>