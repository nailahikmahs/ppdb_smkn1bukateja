@extends('layouts.main')
@include('partials.navbar')


<div class="container mt-5">
    <h2 class="text-center">Persyaratan Pendaftaran PPDB</h2>
    <p class="text-center">Sebelum melanjutkan ke proses registrasi, pastikan Anda memenuhi persyaratan berikut:</p>
    
    <div class="list-group">
        <li class="list-group-item">
            <h5>1. Menyertakan Fotocopy Kartu Keluarga (KK)</h5>
            <p>Persyaratan ini harus dipenuhi sebelum melanjutkan ke proses registrasi. Pastikan fotocopy KK jelas dan terbaca.</p>
        </li>
        <li class="list-group-item">
            <h5>2. Menyertakan Fotocopy Akta Kelahiran</h5>
            <p>Persyaratan ini harus dipenuhi sebelum melanjutkan ke proses registrasi. Pastikan fotocopy Akta Kelahiran jelas dan terbaca.</p>
        </li>
        <li class="list-group-item">
            <h5>3. Mengisi Data Diri dengan Benar</h5>
            <p>Pastikan Anda memasukkan data yang benar dan valid saat registrasi untuk menghindari kesalahan yang dapat mempengaruhi proses seleksi.</p>
        </li>
        <li class="list-group-item">
            <h5>4. Membayar Biaya Pendaftaran</h5>
            <p>Pastikan Anda telah melakukan pembayaran biaya pendaftaran sesuai dengan ketentuan yang berlaku. Anda akan menerima bukti pembayaran setelah melakukan transfer.</p>
        </li>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-lg">Berikutnya - Mulai Registrasi</a>
    </div>
</div>

