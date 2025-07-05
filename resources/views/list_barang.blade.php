<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
</head>
<body>
    <h2>List Barang</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $barang)
            <tr>
                <td>{{ $barang['id'] }}</td>
                <td>{{ $barang['nama'] }}</td>
                <td>{{ $barang['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
