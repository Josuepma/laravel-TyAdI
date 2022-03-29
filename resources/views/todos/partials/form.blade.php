@csrf
    <div class="col-md-6">
            <label for="todo" class="col-form-label">Task: </label>
            <input name="todo" type="text" class="form-control @error('todo') is-invalid @enderror" id="todo"  aria-describedby="todo"
                value="{{ old('todo')}}@isset($todo){{$todo->todo}}@endisset" autofocus>
            @error('todo')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
            <input class="form-check-input" name="done[]" type="checkbox" value="done" id="done"
                @isset($todo)@if($todo->done) checked @endif @endisset>
            <label class="form-check-label" for="done">done</label>
    </div>
