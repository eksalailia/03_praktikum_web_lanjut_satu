@extends('template')

@section('judul_halaman_website','Halaman News')
@section('konten_website')

<p>Untuk melihat kabar terkini, Anda bisa mengunjungi link di bawah ini.</p>
<a href="https://www.educastudio.com/{{$news}}">Berita Utama</a><br>
<a href="https://www.educastudio.com/{{$news}}/{{$topic}}">Berita Covid</a>

@endsection