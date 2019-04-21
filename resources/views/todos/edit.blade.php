@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Update Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo</div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif     

                    <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="todo_id" value="{{ $todo->id }}"> --}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name" value="{{ $todo->name }}">
                            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="email" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Description" cols="5" rows="5">{{ $todo->description }}</textarea>
                            <small id="descriptionHelp" class="form-text text-muted">We'll never share your description with anyone else.</small>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection