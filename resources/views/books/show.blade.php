<!-- File: resources/views/books/show.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Detail Buku</h1>

        <div>
            <p><strong>Judul Buku:</strong> {{ $book->title }}</p>
            <p><strong>Penulis:</strong> {{ $book->author }}</p>
            <p><strong>Deskripsi:</strong> {{ $book->description }}</p>
            <!-- Tambahkan informasi lain yang ingin ditampilkan -->
        </div>

        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali ke Daftar Buku</a>
    </div>
@endsection