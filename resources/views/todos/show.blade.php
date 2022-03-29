@extends('app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-5 fw-bold">Show Todo #{{$todo->id}}</h4>
                <label class="col-form-label">Task:</label>
                <span class="mb-2 fs-14">{{ $todo->todo }}</span>
                @switch($todo->done)
                    @case(1)
                        <span class="badge bg-primary">Done</span>
                        @break
                    @default
                        <span class="badge bg-danger">Danger</span>
                @endswitch
            </div>
        </div>
        <div class="card-footer text-end">
            <a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
                Back
            </a>
        </div>
    </div>
@endsection
