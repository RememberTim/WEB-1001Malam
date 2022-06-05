<table class="table tablebordered">
    {{-- @foreach ($item->users as $user) --}}
    <tr>
        <th>Nama</th>
        <td>{{ $item->users->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->users->email }}</td>
    </tr>
    <tr>
        <th>Nomor</th>
        <td>{{ $item->users->telepon }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{$item->users->alamat }}</td>
    </tr>
    {{-- @endforeach --}}
    <tr>
        <th>Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Keuntungan</th>
        <td>{{ $item->total_keuntungan }}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="tabble table-bordered w-100">
                <tr>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>        
                </tr>
                @foreach ($item->details as $detail)
                <tr>
                    <td>{{ $detail->product->nama}}</td>
                    <td>{{ $detail->product->tipe}}</td>
                    <td>{{ $detail->product->harga}}</td>
                </tr>
                @endforeach
            </table>

        </td>
    </tr>
</table>

