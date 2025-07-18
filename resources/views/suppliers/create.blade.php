@extends('layouts.app')

@section('title', 'Tambah Supplier')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Tambah Supplier</h1>

  {{-- Tampilkan error validasi jika ada --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Form Tambah Supplier --}}
  <form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="supplier_name" class="form-label">Nama Supplier</label>
      <input type="text" name="supplier_name" class="form-control" value="{{ old('supplier_name') }}" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Telepon</label>
      <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Alamat</label>
      <textarea name="address" class="form-control" rows="3" required>{{ old('address') }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
@endsection
