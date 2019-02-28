@extends('layouts.app')
@section('content')
    @include('chunks.errors')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <h3 class="card-title">Создать автора</h3>
                        <form action="{{ route('authors.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="first_name" type="text">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name" type="text">
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