@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lead</h1>
    <form action="{{ route('leads.update', $lead) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $lead->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Lead</button>
    </form>
</div>
@endsection
