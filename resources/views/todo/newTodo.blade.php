@extends('layouts.app')

@section('title')
    New Todo
@endsection

@section('content')
   <h1 class="text-center my-5">Create Todos</h1>
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create a New Todo</div>
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

                <form action="save-todo" method="post">
                     @csrf
                    <div class="form-group my-3">
                        <input type="text" placeholder="Name" class="form-control" name="name">
                    </div>

                    <div class="form-group my-3">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group my-3 text-center">
                      <a href="/" class="btn btn-warning">Cancel</a>
                      <button type="submit" class="btn btn-success">Create</button>
                    </div>

                </form>
                 
            </div>
        </div>
       </div>
   </div>

@endsection
