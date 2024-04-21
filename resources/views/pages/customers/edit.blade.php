@extends('layouts.home')

@section('content')

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h4 class="mb-0"> Edit Data {{ $item->name }}</h4>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-light px-3">Batal dan Kembali</a>
    </div>

    <form action="{{ route('pelanggan.update', $item->id ) }}" method="post">
    @csrf
    @method( 'PUT' )
    <div class="bm-3">
        <label for="name">Nama Pelanggan </label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" required>
    </div>
    <div class="bm-3">
        <label for="email">email </label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $item->email }}" required>
    </div>
    <div class="bm-3">
        <label for="phone_number">Nomor Telepon </label>
        <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ $item->phone_number }}" required>
    </div>

    <div class="mb-3">
        <label for="address">Alamat Rumah</label>
        <textarea name="address" id="address" cols="30" rows="4" class="form-control" > {{ $item->address }}</textarea>
    </div>
    <button class="btn btn-primary px-4" type="submit">Simpan Perubahan</button>
    </form>
</div>

@endsection
