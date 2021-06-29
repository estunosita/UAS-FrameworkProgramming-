<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static {
            position: relative;
            border: 1px solid #000;
        }
    </style>
    <title>CETAK DATA Kendaraan</title>
</head>

<body>

    <div class="form-group">
        <h1 align="center"><b>Laporan Data Kendaraan</b></h1>
        <p align="center">Tanggal: <span id="datetime"></span></p>

        <table class="static" align="center" rules="all" border="1px" style="width: 90%;">
            <tr>
                <th>No</th>
                <th>Plat</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Foto Gambar</th>
            </tr>
            @foreach ($productcetak as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->plat }}</td>
                <td>{{ $product->merek }}</td>
                <td>{{ $product->tipe }}</td>
                <td>
                    <img src="{{ asset('img/'. $product->foto)}}" alt="" width="50px" height="70px">
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
    window.print();
</script>

</html>