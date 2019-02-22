@extends('base')

@section('content')
<div class="container">
    <h1>{{ $user->name }}'s Profile</h1>
    <p>See what {{ $user->name }} has been up to on LaravelAnswers</p>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h3>Questions</h3>
            @foreach ($user->questions as $question)
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $question->title }}</h4>
                        <p>{{ $question->description }}</p>
                        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <h3>Answers</h3>
            @foreach ($user->answers as $answer)
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>{{ $answer->question->title }}</h5>
                        </div>
                        <div class="card-body">
                            <small>{{ $user->name }}'s Answer</small>
                            <p>{{ $answer->content }}</p>
                            <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-sm btn-link">View all answers for this quesion</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection