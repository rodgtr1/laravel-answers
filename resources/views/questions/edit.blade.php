@extends('base')

@section('content')
<div class="container">
        <h1>Edit Question</h1>
        <hr>
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <label for="title">Question</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $question->title }}"/>
    
            <label for="description">More information:</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ $question->description }}</textarea>
    
            <input type="submit" class="mt-2 btn btn-primary" value="Update Question">
    
        </form>
    </div>
@endsection