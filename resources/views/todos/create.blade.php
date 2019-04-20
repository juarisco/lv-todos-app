@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new todo</div>
                <div class="card-body">
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name">
                            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="email" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Description" cols="5" rows="5"></textarea>
                            <small id="descriptionHelp" class="form-text text-muted">We'll never share your description with anyone else.</small>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection