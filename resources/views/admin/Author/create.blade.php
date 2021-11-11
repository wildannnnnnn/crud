@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Penulis</h1>
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
                <div class="card-header">Data Penulis</div>
                <div class="card-body">
                    <form action="{{route('author.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama Penulis</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid " @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$messege}}</strong>
                                </span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
