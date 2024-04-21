@extends('layouts.home')

@section('content')

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h4 class="mb-0"> semua Data Pelanggan</h4>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary px-3">Upload data</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nama Pelanggan</td>
                    <td>Email Pelanggan</td>
                    <td>Nomor Telepon</td>
                    <td>Alamat Rumah</td>
                    <th>Aksi</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($items as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pelanggan.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
