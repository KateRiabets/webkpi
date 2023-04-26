@extends('layouts.app')

@section('title', 'Result')

@section('content')
    <h1>Result:</h1>
    <p>Name: {{ $data['name'] }}</p>
    <p>Age: {{ $data['age'] }}</p>

    @if ($data['age'] < 18)
        <p>You are under 18.</p>
    @elseif ($data['age'] >= 18 && $data['age'] < 60)
        <p>You are between 18 and 59 years old.</p>
    @else
        <p>You are 60 or older.</p>
    @endif
@endsection
