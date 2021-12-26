@extends('layouts.app')

@section('title')
    Todo List
@endsection
    

@section('content')
    <h1 class="text-center my-5">My ToDo List</h1>        
    <div class="row justify-content-center">       
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">       
                    Todos
                </div>
                <div class="card-body">
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th></th>
                                    <th></th>
                                    <th><a href="/new-todos" class="btn btn-sm btn-success float-md-right">New Todo</a></th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td scope="row">{{ $i++ }}</td>
                                        <td>{{ $todo->name }}</td>
                                        <td></td>
                                        <td>
                                            <span>
                                                <a href="/show/{{ $todo->id }}" class="btn btn-sm  btn-info">View</a>
                                                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-sm  btn-primary">Edit</a>
                                                <a href="/todos/{{ $todo->id }}/delete" class="btn btn-sm  btn-danger">Delete</a>

                                                @if(!$todo->completed)
                                                <a href="/todos/{{ $todo->id }}/complete" class="btn btn-sm  btn-warning">Complete</a>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection
