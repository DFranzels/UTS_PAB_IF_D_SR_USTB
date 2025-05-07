<html>
    <body>
        <div>
            <h1>Detail barang</h1>
            <div>
                <span>Barcode:</span>
                <span>{{$item->barcode}}</span>
            </div>
            <div>
                <span>Nama: </span>
                <span>{{$item->nama}} </span>
            </div>
            <div>
                <span>Satuan: </span>
                <span>{{$item->satuan}} </span>
            </div>
            <div>
                <a href="{{route('barang.index')}}">Kembali ke Index</a>
            </div>
        </div>
    </body>
</html>