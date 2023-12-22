@extends('pelajar.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Pelajar</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">No Identitas  : {{ $pelajar->no_identitas }}</h5>
            <h5 class="card-title">Nama  : {{ $pelajar->nama }}</h5>
            <h5 class="card-title">Kelas  : {{ $pelajar->kelas }}</h5>
            <h5 class="card-title">Jenis Kelamin  : {{ $pelajar->jenis_kelamin }}</h5>
            <h5 class="card-title">Umur  : {{ $pelajar->umur }}</h5>
            <h5 class="card-title">Hobi  : {{ $pelajar->hobi }}</h5>
            <h5 class="card-title">Alamat  : {{ $pelajar->alamat }}</h5>

        </div>
    </div>