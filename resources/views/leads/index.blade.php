@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leads</h1>
    <a href="{{ route('leads.create') }}" class="btn btn-primary">Create Lead</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->description }}</td>
                    <td>
                        <a href="{{ route('leads.show', $lead) }}" class="btn btn-info">View</a>
                        <a href="{{ route('leads.edit', $lead) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
