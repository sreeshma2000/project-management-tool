@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lead Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $lead->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $lead->email }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $lead->description }}</p>
            <a href="{{ route('leads.edit', $lead) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
