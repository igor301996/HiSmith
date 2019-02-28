@extends('layouts.app')
@section('content')
    @include('chunks.errors')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <h3 class="card-title">Создать книгу</h3>
                        <form action="{{ route('books.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" type="text">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" type="text">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" type="text">
                            </div>

                            <div class="form-group">
                                <lable>Автор</lable>
                                <select name="author" class="form-control">
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->fullName }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group float-right">
                                <button class="btn btn-success" type="submit">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection