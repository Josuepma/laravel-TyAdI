@extends('app')

@section('title')
    Edit Todo
@endsection

@section('content')
    <div class="row">
        <form method="POST" action="{{ route('todos.update', $todo->id) }}">
            @method('PATCH')
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 fw-bold">Edit Todo #{{$todo->id}}</h4>
                    @include('todos.partials.form', ['edit' => true])
                </div>
            </div>
            <div class="card-footer text-end">
                <a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
					Back
				</a>
                <button type="submit" class="btn btn-primary">
					Save
				</button>
            </div>

        </form>
    </div>
@endsection
