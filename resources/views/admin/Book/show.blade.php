@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data pesanan</h1>
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
                <div class="card-header">Data pesanan</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> nama pesanan</label>
                        <input type="text" name="title" value="{{$book->title}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">pesan</label>
                        <input type="text" name="" class="form-control" value="{{$book->author->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/books')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
