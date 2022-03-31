@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   <h4>
                       Tambah Produk
                       <a href="{{ url('/product') }}" class="btn btn-danger float-end">Back</a>
                   </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('process-add-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select class="form-select mb-3" name="category_id">
                           @foreach ($kategori as $data )
                               <option value="{{ $data->id }}" {{ $data->id === $product->category_id ? 'selected' : '' }}>
                                {{ $data->nama }}
                                </option>
                           @endforeach
                        </select>
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                          </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
