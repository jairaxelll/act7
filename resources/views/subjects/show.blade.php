@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $subject->name }}</h1>
    <p>{{ $subject->description }}</p>

    <h2>Grades</h2>
    <ul>
        @foreach($subject->grades as $grade)
            <li>{{ $grade->student_name }}: {{ $grade->score }}</li>
        @endforeach
    </ul>
</div>
@endsection