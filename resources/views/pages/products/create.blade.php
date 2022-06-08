@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>TAMBAH DATA</strong>

        </div>   
        <div class="card-body card-block">
            <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-control-label"> Nama Jamu </label>
            <input type="text"
                name="nama"
                value= "{{ old('nama')}}"
                class="form-control @error('nama') is-invalid @enderror"/>
            @error('nama')<div class ="text-muted">{{ $message }}</div>   @enderror  
        </div>
        <div class="form-group">
        <label for="tipe" class=" form-control-label">Tipe Jamu</label>
            <select name="tipe" class="form-control">
                <option value="Anak-anak & Dewasa">Anak-anak & Dewasa</option>     
                <option value="Anak-anak">Anak-anak</option>
                <option value="Dewasa">Dewasa</option>                                   
        </select>
       
        </div>
        <!-- <div class="form-group">
            <label for="tipe" class="form-control-label"> Tipe</label>
            <br>
           <label>
           <input type="radio"
                name="tipe"
                value= "Anak-anak"
                class="form-control @error('tipe') is-invalid @enderror"/> Anak-anak
           </label>
            &nbsp;
            <label>
           <input type="radio"
                name="tipe"
                value= "Dewasa"
                class="form-control @error('tipe') is-invalid @enderror"/> Dewasa
           </label>
                @error('tipe')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div> -->
       
        <div class="form-group">
            <label for="deskripsi" class="form-control-label"> Deskripsi </label>
            <textarea name="deskripsi" 
            class="ckeditor form-control  @error('deskripsi') is-invalid @enderror">{{old('deskripsi')}}</textarea>
            @error('deskripsi')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

         <div class="form-group">
            <label for="bahan" class="form-control-label"> bahan </label>
            <textarea name="bahan" 
            class="ckeditor form-control  @error('bahan') is-invalid @enderror">{{old('bahan')}}</textarea>
            @error('bahan')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

        <div class="form-group">
            <label for="harga" class="form-control-label"> Harga </label>
            <input type="number"
                name="harga"
                value= "{{ old('harga')}}"
                class="form-control @error('harga') is-invalid @enderror"/>
                @error('harga')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <label for="keuntungan" class="form-control-label"> keuntungan </label>
            <input type="number"
                name="keuntungan"
                value= "{{ old('keuntungan')}}"
                class="form-control @error('keuntungan') is-invalid @enderror"/>
                @error('keuntungan')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>

        <div class="form-group">
            <label for="stok" class="form-control-label"> Stok</label>
            <input type="number"
                name="stok"
                value= "{{ old('stok')}}"
                class="form-control @error('stok') is-invalid @enderror"/>
                @error('stok')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <label for="rating" class="form-control-label"> Rating</label>
            <input type="double"
                name="rating"
                value= "{{ old('rating')}}"
                class="form-control @error('rating') is-invalid @enderror"/>
                @error('rating')<div class ="text-muted">{{ $message }}</div>   @enderror 
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                Tambah Barang
            </button>
        </div>
            </form>
        </div>     
    </div> 

@endsection