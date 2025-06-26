@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Produk</div>
                <div class="card-body">
                    <form action="{{ route('backend.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label>Nama Product</label>
                                    <input type="text" value="{{ $product->name }}" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="mb-2">
                                    <label>Harga</label>
                                    <input type="number" value="{{ $product->price }}" name="price" class="form-control @error('price') is-invalid @enderror">
                                    @error('price')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="mb-2">
                                    <label>Kategori</label>
                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                        @foreach ($category as $data)
                                        <option value="{{ $data->id }}" {{ $data->id == $product->category_id ? 'selected' : '' }}>{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="mb-2">
                                    <label>Stok</label>
                                    <input type="number" value="{{ $product->stock }}" name="stock" class="form-control @error('stock') is-invalid @enderror">
                                    @error('stock')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>

                            <div class="col">
                                @if($product->image)
                                <img src="{{ Storage::url($product->image) }}" style="width: 100px; height:100px;">
                                @endif

                                <div class="mb-2">
                                    <label>Gambar</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="mb-2">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                                    @error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-outline-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-outline-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection