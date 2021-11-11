@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Detail Buku') }}</div>

                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('books.index') }}">Back To List</a>
                    </div>
                    <div class="row">
                        <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data" style="color: white;">
                            @csrf
                            @method('PUT')

                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul:</strong>
                                        <input type="text" name="judul" value="{{ $book->judul }}" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Pengarang:</strong>
                                        <textarea class="form-control" name="pengarang" placeholder="Pengarang">{{ $book->pengarang }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Penerbit:</strong>
                                        <textarea class="form-control" name="penerbit" placeholder="Penerbit">{{ $book->penerbit }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        <input type="file" name="gambar" class="form-control" placeholder="image" value="{{ old('gambar', $book->gambar) }}">
                                        <img src="/image/{{ $book->gambar }}" width="300px">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
