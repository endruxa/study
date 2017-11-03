@extends('layouts.main')

@section('content')
    <form method="post" action="{{ $_SERVER['REQUEST_URI'] }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="your name is">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="msg" class="form-control" id="Message" rows="2" placeholder="some message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
