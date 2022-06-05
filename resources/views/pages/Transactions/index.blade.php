@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="box-title">DAFTAR TRANSAKSI</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No.Telp</th>                            
                                        <th>Transaksi Status</th>
                                       
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            <tbody>
                              @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->users->name }}</td>
                                    <td>{{ $item->users->email}}</td>
                                    <td>{{ $item->users->telepon }}</td>                       
                                    <td>
                                      @if ($item->transaction_status == 'MASUK')
                                        <span class="badge badge-info">
                                        @elseif ($item->transaction_status == 'KONFIRMASI')
                                        <span class="badge badge-warning">
                                        @elseif ($item->transaction_status == 'SELESAI')
                                        <span class="badge badge-success">
                                        @elseif ($item->transaction_status == 'BATAL')
                                        <span class="badge badge-danger">
                                        @else
                                        <span>
                                        @endif
                                            {{ $item->transaction_status }}
                                        </span>
                                    </td>
                                 
                                    <td>
                                    @if($item->transaction_status == 'MASUK')
                                <a href="{{ route('transactions.status', $item->id) }}?status=TERIMA" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        @endif
                                    <a href="#mymodal"
                                        data-remote="{{ route('transactions.show', $item->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Detail Transaksi {{ $item->id  }}"
                                        class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                  
                                    <form action="{{ route('transactions.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection