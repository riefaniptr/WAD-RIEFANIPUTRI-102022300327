<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu Cafe</title>
    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 5px 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Menu Cafe</h2>
    <table>
        <thead>
            <tr>
                <th>Menu</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->category }}</td>
                    <td>{{ $menu->stock }}</td>
                    <td>Rp. {{ number_format($menu->price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
