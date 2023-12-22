@extends('pelajar.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="position-relative">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Pelajar</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pelajar/create') }}" class="btn btn-success btn-sm" title="Add New Pelajar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No Identitas</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Hobi</th>
                                        <th>Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pelajar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_identitas }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->jenis_kelamin}}</td>
                                        <td>{{ $item->umur }}</td>
                                        <td>{{ $item->hobi }}</td>
                                        <td>{{ $item->alamat }}</td>


 
                                        <td>
                                            <a href="{{ url('/pelajar/' . $item->id) }}" title="View Pelajar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/pelajar/' . $item->id . '/edit') }}" title="Edit Pelajar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/pelajar' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pelajar" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection