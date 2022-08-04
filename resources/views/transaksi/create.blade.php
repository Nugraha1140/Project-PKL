@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header">
                        Data Supplier
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="post">
                            @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Costumer</label>
                        <select name="id_costumer" class="form-control @error('id_costumer') is-invalid @enderror"
                            id="">
                            @foreach ($costumer as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_costumer }}</option>
                            @endforeach
                        </select>
                        @error('id_costumer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror"
                            id="">
                            @foreach ($barang as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                            @endforeach
                        </select>
                        @error('id_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <select name="harga" class="form-control @error('harga') is-invalid @enderror"
                            id="">
                            @foreach ($barang as $data)
                                <option value="{{ $data->id }}">{{ $data->harga }}</option>
                            @endforeach
                        </select>
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror"
                                    name="jumlah">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
