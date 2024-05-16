@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cprogramming</div>

                <div class="card-body">
                    <a href="{{ route('cprogramming.create') }}" class="btn btn-primary mb-3">Add New C-Programming</a>

                    @if ($cprograming->isEmpty())
                        <p>No cprogramming  resources found.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>File Path</th>
                                        <th>Type</th>
                                        <th>Image Path</th>
                                        <th>Tutor Name</th>
                                        <th>File Size</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cprograming as $cprogramming)
                                        <tr>
                                            <td>{{ $cprogramming->title }}</td>
                                            <td>{{ $cprogramming->description }}</td>
                                            <td>{{ $cprogramming->file_path }}</td>
                                            <td>{{ $cprogramming->type }}</td>
                                            <td>{{ $cprogramming->image_path }}</td>
                                            <td>{{ $cprogramming->tutor_name }}</td>
                                            <td>{{ $cprogramming->file_size }}</td>
                                            <td>
                                                <a href="{{ route('cprogramming.show', $cprogramming->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('cprogramming.edit', $cprogramming->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('cprogramming.destroy', $cprogramming->id) }}" method="POST" style="display: inline-block;">
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
