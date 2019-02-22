@extends('base')

@section('content')

<div class="container">
    <h1>Recent Questions</h1>
    <hr>

    @foreach ($questions as $question)
        <div class="well mt-4">
            <h3>{{ $question->title }}</h3>    
            <p>{{ $question->description }}</p>  
            <a href="{{ route('questions.show' , $question->id) }}" class="btn btn-primary btn-small">View Details</a>  
        </div>    
    @endforeach

    <div class="mt-4"> {{ $questions->links('vendor.pagination.simple-bootstrap-4') }}</div>

</div>
    
@endsection