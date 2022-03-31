@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                   <h4>
                       Produk Muslim
                       <a href="{{ route('tambah-produk') }}" class="btn btn-success float-end">Tambah Produk</a>
                   </h4>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>no</th>
                            <th>category</th>
                            <th>nama</th>
                            <th>harga</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                            ?>
                         @foreach ($kategori as $data )
                             <tr>
                                 <td>{{ $i++ }}</td>
                                 <td>{{ $data->categories->nama }}</td>
                                 <td>{{ $data->nama }}</td>
                                 <td>{{ $data->harga }}</td>
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
