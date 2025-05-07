<html>
    <body>
        <h1>create barang</h1>
        <form method="post" action="{{ route('barang.store')}}">
            @csrf
            <div>
                <label for="barcode">Barcode</label>
                <input tpye="text" name="barcode"
                    value="{{old('barcode') || $item->barcode }}"/>
            </div>
            <div>
                <label for="nama">Nama</label>
                <input tpye="text" name="nama"
                    value="{{old('nama') || $item->nama }}"/>
            </div>
            <div>
                <label for="satuan">Satuan</label>
                <input tpye="text" name="satuan"
                    value="{{old('satuan') || $item->satuan }}"/>
            </div>
            <div>
                <input type="submit" value="simpan"/>
            </div>
        </form>
    </body>
</html>