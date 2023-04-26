@extends('layouts.app')

@section('title', 'My Form')

@section('styles')
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
@endsection

@section('content')
    <h1>My Form</h1>
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
