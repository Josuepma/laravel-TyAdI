@extends('app')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="container">
        <div class="text-center">
            <h2>Todo</h2>
        </div>
        <div class="text-end">
            <a href="{{ route('todos.create') }}" class="btn btn-success"> Add</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Todo</th>
                <th scope="col">Done</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @isset($todos)
                @foreach($todos as $todo)
                    <tr>
                    <th scope="row">{{ $todo->id }}</th>
                    <td>{{ $todo->todo }}</td>
                    <td>
                        @switch($todo->done)
                            @case(1)
                                <span class="badge bg-primary">Done</span>
                                @break
                            @default
                                <span class="badge bg-danger">Danger</span>
                        @endswitch
                    </td>
                    <td>
                        <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="event.preventDefault();
                            document.getElementById('delete-todo-form-{{$todo->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-todo-form-{{$todo->id}}" action="{{ route('todos.destroy', $todo->id) }}"
                              method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            @endisset
        </table>
        @isset($todos)
            {{ $todos->links() }}
        @endisset
    </div>
@endsection
