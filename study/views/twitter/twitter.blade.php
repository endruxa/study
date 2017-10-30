@extends('layouts.main')

@section('content')
    <form action="{{ $_SERVER['REQUEST_URI'] }}" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя">
        </div>
        <div class="form-group">
            <label for="pass">Message</label>
            <textarea>Message</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection