@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Produk
                    </div>
                    <div class="card-body">
                        <!-- Menampilkan pesan error -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="name_product">Nama Produk</label>
                                <input id="name_product" class="form-control" type="text" name="name_product"
                                    value="{{ old('name_product') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input id="price" class="form-control" type="number" name="price"
                                    value="{{ old('price') }}" min="1" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input id="image" class="form-control" type="file" name="image" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Jumlah</label>
                                <input id="quantity" class="form-control" type="number" name="quantity"
                                    value="{{ old('quantity') }}" min="1" required>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
