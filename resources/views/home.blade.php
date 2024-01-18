<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        table,
        th,
        td {
            border: 1px solid grey;
            margin: 6px 0;
        }

        th,
        td {
            padding: 3px 6px;
        }
    </style>
</head>

<body>
    <h1>Products</h1>

    <a href="/add"><button>add</button></a>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>
                    <a href="/edit/{{$product['id']}}">
                        <button>edit</button>
                    </a>
                    <form method="POST" action="/delete/{{$product['id']}}">
                        @csrf
                        @method('DELETE')
                        <button>delete</button>
                    </form>
                    <form method="POST" action="/cart/{{$product['id']}}">
                        @csrf
                        <button>add to cart</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>