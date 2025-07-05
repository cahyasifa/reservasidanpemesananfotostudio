@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Daftar Produk</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @include('components.card', [
            'image' => '/images/gambar.jpg',
            'title' => 'Produk A',
            'desc' => 'Deskripsi produk A yang menarik dan lengkap.'
        ])

        @include('components.card', [
            'image' => '/images/gambar.jpg',
            'title' => 'Produk B',
            'desc' => 'Deskripsi produk B yang unik dan terjangkau.'
        ])
    </div>
@endsection
