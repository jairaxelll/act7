@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subjects</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>
                    <a href="{{ route('subjects.show', $subject->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('subjects.create') }}" class="btn btn-primary">Add New Subject</a>
</div>
@endsection