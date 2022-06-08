@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>UBAH DATA </strong>
            <small>{{ $item->name }}</small>

        </div>   
        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id)}}" method="POST">
                @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nama" class="form-control-label"> Nama Jamu</label>
            <input type="text"
                name="nama"
                value= "{{ old('nama') ? old('nama') : $item->nama }}"
                class="form-control @error('nama') is-invalid @enderror"/>
            @error('nama')<div class ="text-muted">{{ $message }}</div>   @enderror  
        </div>
        <div class="form-group">
        <label for="tipe" class=" form-control-label">Tipe Jamu</label>
            <select name="tipe" class="form-control @error('tipe') is-invalid @enderror">
                <option value="{{ old('tipe') ? old('tipe') : $item->tipe }}">{{ old('tipe') ? old('tipe') : $item->tipe }}</option>
                <option value="Anak-anak & Dewasa">Anak-anak & Dewasa</option>     
                <option value="Anak-anak">Anak-anak</option>
                <option value="Dewasa">Dewasa</option>   
                @error('tipe')<div class ="text-muted">{{ $message }}</div>   @enderror                                 
        </select>
   </div>
        <div class="form-group">
            <label for="deskripsi" class="form-control-label"> Deskripsi </label>
            <textarea name="deskripsi" 
            class="ckeditor form-control  @error('deskripsi') is-invalid @enderror">{{old('deskripsi') ? old('deskripsi') : $item->deskripsi}}</textarea>
            @error('deskripsi')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <label for="bahan" class="form-control-label"> Bahan </label>
            <textarea name="bahan" 
            class="ckeditor form-control  @error('bahan') is-invalid @enderror">{{old('bahan') ? old('bahan') : $item->bahan}}</textarea>
            @error('bahan')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <label for="harga" class="form-control-label"> Harga </label>
            <input type="number"
                name="harga"
                value= "{{ old('harga') ? old('harga') : $item->harga }}"
                class="form-control @error('harga') is-invalid @enderror"/>
                @error('harga')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

        <div class="form-group">
            <label for="keuntungan" class="form-control-label"> keuntungan </label>
            <input type="number"
                name="keuntungan"
                value= "{{ old('keuntungan') ? old('keuntungan') : $item->keuntungan }}"
                class="form-control @error('keuntungan') is-invalid @enderror"/>
                @error('keuntungan')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

        <div class="form-group">
            <label for="stok" class="form-control-label"> Stok </label>
            <input type="number"
                name="stok"
                value= "{{ old('stok') ? old('stok') : $item->stok }}"
                class="form-control @error('stok') is-invalid @enderror"/>
                @error('stok')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

        <div class="form-group">
            <label for="rating" class="form-control-label"> Rating </label>
            <input type="double"
                name="rating"
                value= "{{ old('rating') ? old('rating') : $item->rating }}"
                class="form-control @error('rating') is-invalid @enderror"/>
                @error('rating')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                Ubah 
            </button>
        </div>
            </form>
        </div>     
    </div> 

@endsection