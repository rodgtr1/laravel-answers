@extends('base')

@section('content')
    <div class="container">
        <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>
        <p>
            Submitted By: {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}
        </p>
        @if ($question->user->id == Auth::id())
            <a class="btn btn-sm btn-link" href="{{ route('questions.edit', $question->id) }}">Edit Question</a>
        @endif
        <hr>
        <br>
        
        @if ($question->answers()->count() > 0)
        @foreach ($question->answers as $answer)
            <div class="card p-2 ml-4">
                <div class="card-block">
                    <div class="card-text">
                        <p class="lead mb-0">{{ $answer->content }}</p>
                        <h6 class="small font-italic">Answered By {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}</h6>
                        @if ($question->user->id == Auth::id())
                            <a class="btn btn-sm btn-link" href="{{ route('answers.edit', $answer->id) }}">Edit Answer</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        @else 
        <h4>There are no submitted answers for this question. Why don't you be the first to submit =)</h4>
        @endif
        <br>
        <hr>

        {{-- Normally display all of the answers to this question- --}}

        {{-- // Display form to submit an answers --}}
        <br>
        <form action="{{ route('answers.store') }}" method="POST">
            {{ csrf_field() }}
            <h3>Answer the Question Here</h3>
            <textarea name="content" id="content" class="form-control" rows="4"></textarea>
            <input type="hidden" value="{{ $question->id }}" name="question_id">
            <input type="submit" class="mt-2 btn btn-primary" value="Submit Answer">
        </form>
    </div> 
@endsection