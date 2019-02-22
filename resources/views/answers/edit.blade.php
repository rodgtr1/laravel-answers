@extends('base')

@section('content')
<div class="container">
        <h1>Edit Answer</h1>
        <hr>
        <form action="{{ route('answers.update', $answer->id) }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
    
            <label for="description">Answer:</label>
            <textarea class="form-control" name="content" id="content" rows="4">{{ $answer->content }}</textarea>
    
            <input type="submit" class="mt-2 btn btn-primary" value="Update Answer">
    
        </form>
    </div>
@endsection