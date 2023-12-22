@extends('pelajar.layout')
@section('content')

<div class="card">
    <div class="card-header">Perbaiki Data</div>
    </div class="card-body">

        <form action="{{ url('pelajar/' .$pelajar->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$pelajar->id}}" id="id" />
            <label>No Identitas</label></br>
            <input type="text" name="no_identitas" id="no_identits" value="{{$pelajar->no_identitas}}" class="form-control"></br>
            <label>Nama</label></br>
            <input type="text" name="nama" id="nama" value="{{$pelajar->nama}}" class="form-control"></br>
            <label>Jenis Kelamin</label></br>
            <input type="text" name="kelas" id="kelas" value="{{$pelajar->kelas}}" class="form-control"></br>
            <label>Jabatan</label></br>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$pelajar->jenis_kelamin}}" class="form-control"></br>
            <label>Tanggal Masuk</label></br>
            <input type="text" name="umur" id="umur" value="{{$pelajar->umur}}" class="form-control"></br>
            <label>Alamat</label></br>
            <input type="text" name="hobi" id="hobi" value="{{$pelajar->hobi}}" class="form-control"></br>
            <label>Alamat</label></br>
            <input type="text" name="alamat" id="alamat" value="{{$pelajar->alamat}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop