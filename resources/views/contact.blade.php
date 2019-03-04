@extends('base')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <form action="{{ route('contact') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" class="form-control">
    </div>
    <textarea name="message" id="message" rows="5" class="form-control"></textarea>
    <input type="submit" value="Submit" id="submit" class="btn btn-primary mt-3">
    </form>
</div>
@endsection
