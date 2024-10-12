@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Activity</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Activity Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $activity->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $activity->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $activity->date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Activity</button>
    </form>
</div>
@endsection