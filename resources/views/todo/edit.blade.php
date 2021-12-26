@extends('layouts.app')

@section('title')
    New Todo
@endsection

@section('content')
   <h1 class="text-center my-5">Edit Todos</h1>
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit Todo</div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/todos/{{ $todo->id }}/update-todo" method="post">
                     @csrf
                    <div class="form-group my-3">
                        <input type="text" placeholder="Name" class="form-control" name="name" value="{{ $todo->name }}">
                    </div>

                    <div class="form-group my-3">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control" >{{ $todo->description }}</textarea>
                    </div>

                    <div class="form-group my-3 text-center"> 
                      <a href="/show/{{ $todo->id }}" class="btn btn-primary">Cancel</a>
                      <button type="submit" class="btn btn-warning">Update Todo</button>
                    </div>

                </form>
                 
            </div>
        </div>
       </div>
   </div>

@endsection
