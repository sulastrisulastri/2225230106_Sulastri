@extends('pelajar.layout')
@section('content')

<div class="card">
    <div class="card-header">Data Pelajar</div>
    </div class="card-body">

        <form action="{{ url('pelajar') }}" method="post">
            {!! csrf_field() !!}
            <label>No Identitas</label></br>
            <input type="text" name="no_identitas" id="no_identitas" class="form-control"></br>
            <label>Nama</label></br>
            <input type="text" name="nama" id="nama" class="form-control"></br>
            <label>Kelas</label></br>
            <input type="text" name="kelas" id="kelas" class="form-control"></br>
            <label>Jenis_Kelamin</label></br>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"></br>
            <label>Umur</label></br>
            <input type="text" name="umur" id="umur" class="form-control"></br>
            <label>Hobi</label></br>
            <input type="text" name="hobi" id="hobi" class="form-control"></br>
            <label>Alamat</label></br>
            <input type="text" name="alamat" id="alamat" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop