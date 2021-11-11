@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('List Buku') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 mt-2">
                            <form action="{{ route('books.index') }}" method="GET" role="search" style="">

                                <div class="input-group" style="width: 30% ">
                                    <input type="text" class="form-control mr-2" name="term" placeholder="Search Book" id="term">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 mt-2">
                            <a href="{{ route('books.create') }}" class="btn btn-success">Tambah Buku</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        @foreach ($book as $key)
                            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">{{ $key->judul }}</h4>
                                        <img src="image/{{ $key->gambar }}" alt="" class="img-fluid card-img-top">
                                        <form action="{{ route('books.destroy',$key->id) }}" method="POST">

                                            <a class="btn btn-info" href="{{ route('books.show',$key->id) }}">Detail</a>

                                            <a class="btn btn-primary" href="{{ route('books.edit',$key->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
