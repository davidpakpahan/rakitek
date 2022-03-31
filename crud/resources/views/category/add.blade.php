@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   <h4>
                       Tambah Kategori
                       <a href="{{ url('/category') }}" class="btn btn-danger float-end">Back</a>
                   </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('process-add-category') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="tambah_kategori" class="form-label">Nama Kategori</label>
                          <input type="text" class="form-control" id="tambah_kategori" name="nama">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
