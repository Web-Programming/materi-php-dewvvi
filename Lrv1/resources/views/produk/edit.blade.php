@extends('app.master')
@section('title', $title)
@section('sidebar')
    @parent
@section('submenu-produk')
    <a href="/produk/create"
        class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/create') ? 'active' : '' }}">Tambah Produk</a>
    <a href="/produk/search"
        class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/search') ? 'active' : '' }}">Cari Produk</a>
@endsection
@endsection

@section('content')
<div class="container fluid">
    <h1>({$title})</h1>
    @if ($errors->any())
        <div class = "alert alert-danger">
            <ul class = "mb-0">
                @foreach ($errors->all() as $error)
                    <li>{($error)}</li>
            </ul>
        </div>
    @endif

    <form action="{{ route('produk.update', $product -> id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price"
                class="form-control @error('price') is-invalid @enderror"
                    value="{{ old('price') }}">
             @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">
                {(old('description'))}
                </textarea>
            @error('description')
             <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control @error('description') is-invalid @enderror">
                <option value="">Pilih status</option>
                <option value="new" {{old('status', $product -> status) === 'new' ? 'selected' : }}>Baru</option>

            </select>
            @error('status')
             <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">tanggal rilis</label>
            <input type="date" name="release_date" id="release_date"
                  class="form-control @error('description') is-invalid @enderror"
                  value="{{old('release_date', $product -> release_date)}}"
            >
            </select>
            @error('status')
             <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </form>
    @endsection
