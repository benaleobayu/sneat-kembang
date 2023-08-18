@extends('layouts/contentNavbarLayout')

@section('title', 'Edit daerah')

@section('content')
    <!-- create.blade.php -->
    <div class="container">
        <form method="POST" action="/daerah/{{ $data->id }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label for="name" class="form-label">Nama Daerah:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $data->name) }}" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="city" class="form-label">Kota:</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $data->city) }}" required>
                    </div>
                </div>
            </div>


            <div class="d-flex">
                <button type="btn" class="btn btn-secondary my-3" onclick="window.location='/daerah'">Kembali</button>
                <button type="submit" class="btn btn-primary my-3 ms-auto">Simpan</button>
            </div>
        </form>
    </div>


@endsection
