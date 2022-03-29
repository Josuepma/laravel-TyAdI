@extends('app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="row">
        <form method="POST" action="{{ route('todos.store') }}">
            @method('POST')
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 fw-bold">Create Todo</h4>
                    @include('todos.partials.form')
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
