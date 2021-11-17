@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">kasir restoran</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    data pelanggan
                    <a href="{{route('author.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Pelanggan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Pelanggan</th>
                                <th>edit data pelanggan</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($author as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <form action="{{route('author.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('author.edit',$data->id)}}" class="btn btn-outline-info">edit data pelanggan</a>
                                        <a href="{{route('author.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
