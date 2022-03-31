@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                   <h4>
                       Kategori Produk
                       <a href="{{ route('tambah-kategori') }}" class="btn btn-success float-end">Tambah Kategori</a>
                   </h4>
                </div>

                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                          <tr>
                            <th>no</th>
                            <th>nama</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                            ?>
                         @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url("delete/".$data->id) }}" class="btn btn-danger" onclick= "return confirm ('Yakin ingin menghapus data ini ?');">Delete</a>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
