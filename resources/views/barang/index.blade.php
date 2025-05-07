<html>
    <body>
        <h1>Barang</h1>
        <table>
            <tr>
                <td>Barcode</td>
                <td>Nama</td>
                <td>satuan</td>
                <td>&nbsp;</td>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item -> barcode }}</td>
                <td>{{ $item -> nama }}</td>
                <td>{{ $item -> satuan }}</td>
                <td> <a href="{{ route('barang.show', $item -> id)}}">view </td>
            </tr>
            @endforeach
        </table>
        <td><a href="{{ route('barang.create', $item -> id)}}">Create Barang </td>
    </body>
</html>