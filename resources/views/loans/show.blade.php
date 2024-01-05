<!-- File: resources/views/loans/show.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Detail Peminjaman</h1>

        <div>
            <p><strong>Nama Peminjam:</strong> {{ $loan->borrower_name }}</p>
            <p><strong>Tanggal Peminjaman:</strong> {{ $loan->loan_date }}</p>
            <p><strong>Tanggal Jatuh Tempo:</strong> {{ $loan->due_date }}</p>
            <p><strong>Judul Buku:</strong> {{ $loan->book->title }}</p>
            <!-- Tambahkan informasi lain yang ingin ditampilkan -->
        </div>

        <a href="{{ route('loans.index') }}" class="btn btn-primary">Kembali ke Daftar Peminjaman</a>
    </div>
@endsection