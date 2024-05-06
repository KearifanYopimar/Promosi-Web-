@extends('backend.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Produk</div>
                    <div class="card-body">
                        <a href="{{ route('product.tambah') }}" class="btn btn-success mb-3">Tambah</a> <!-- Tombol Tambah -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id_product }}</td>
                                    <td>{{ $product->Product_Name }}</td>
                                    <td>{{ $product->Price }}</td>
                                    <td>{{ $product->Qty }}</td>
                                    <td>{{ $product->KategoriAA }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', ['id' => $product->id_product]) }}">Edit Produk</a>
                                        <form action="{{ route('product.delete', ['id' => $product->id_product]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
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
