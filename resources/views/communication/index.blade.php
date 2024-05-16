@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">communication skills</div>

                <div class="card-body">
                    <a href="{{ route('communication.create') }}" class="btn btn-primary mb-3">Add New communication skills</a>

                    @if ($communicationwritingskills->isEmpty())
                        <p>No engineering math resources found.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Image Path</th>
                                        <th>Image Path</th>
                                        <th>Tutor Name</th>
                                        <th>File Size</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($communicationwritingskills as $communication)
                                        <tr>
                                            <td>{{ $communication->title }}</td>
                                            <td>{{ $communication->description }}</td>
                                            <td>{{ $communication->type }}</td>
                                            <td>{{ $communication->file_path }}</td>
                                            <td>{{ $communication->image_path }}</td>
                                            <td>{{ $communication->tutor_name }}</td>
                                            <td>{{ $communication->file_size }}</td>
                                            <td>
                                                <a href="{{ route('communication.show', $communication->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('communication.edit', $communication->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('communication.destroy', $communication->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
