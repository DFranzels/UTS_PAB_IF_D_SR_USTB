<html>
    <body>
        <div>
            <h1>Detail Barang</h1>
            <span>Barcode: </span>
            <span>{{ $item->barcode }}</span>
        </div>
        <div>
            <span>Nama: </span>
            <span>{{ $item->nama }}</span>
        </div>
        <div>
            <span>Satuan: </span>
            <span>{{ $item->satuan }}</span>
        </div>
        <div>
            <a href="{{ route('barang.index') }}">Kembali ke index</a>
        </div>
        </div>
    </body>
</html>


