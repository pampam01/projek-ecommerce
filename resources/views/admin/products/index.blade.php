@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tabel Product
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>nama produk</th>
                                    <th>deskripsi produk</th>
                                    <th>harga per produk</th>
                                    <th>gambar produk</th>
                                    <th>jumlah yang tersedia</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $a)
                                    <tr>
                                        <td>{{ $a->name_product }}</td>
                                        <td>{{ $a->description }}</td>
                                        <td>{{ $a->price }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $a->image) }}" alt="{{ $a->name_product }}"
                                                height="100" width="100">
                                        </td>
                                        <td>{{ $a->quantity }}</td>

                                        <td> edit</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
