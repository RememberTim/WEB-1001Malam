@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Data Transaksi</strong>
         
        </div>   
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id)}}" method="POST">
                @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name" class="form-control-label"> Nama Pemesan</label>
            <input type="text"
                name="name"
                value= "{{ old('name') ? old('name') : $item->name }}"
                class="form-control @error('name') is-invalid @enderror"/>
            @error('name')<div class ="text-muted">{{ $message }}</div>   @enderror  
        </div>
        <div class="form-group">
            <label for="email" class="form-control-label"> Email</label>
            <input email="text"
                name="email"
                value= "{{ old('email') ? old('email') : $item->email }}"
                class="form-control @error('email') is-invalid @enderror"/>
                @error('email')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
       
        <div class="form-group">
            <label for="price" class="form-control-label"> No HP</label>
            <input type="text"
                name="telepon"
                value= "{{ old('telepon') ? old('telepon') : $item->telepon }}"
                class="form-control @error('telepon') is-invalid @enderror"/>
                @error('telepon')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <label for="alamat" class="form-control-label"> Alamat Pemesanan</label>
            <input type="text"
                name="alamat"
                value= "{{ old('alamat') ? old('alamat') : $item->alamat }}"
                class="form-control @error('alamat') is-invalid @enderror"/>
                @error('alamat')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                Kembali
            </button>
        </div>
            </form>
        </div>     
    </div> 

@endsection