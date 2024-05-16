@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">political economy</div>

                <div class="card-body">
                    <a href="{{ route('political.create') }}" class="btn btn-primary mb-3">Add New political economy</a>

                    @if ($politicaleconomy->isEmpty())
                        <p>No political economy resources found.</p>
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
                                    @foreach ($politicaleconomy as $political)
                                        <tr>
                                            <td>{{ $political->title }}</td>
                                            <td>{{ $political->description }}</td>
                                            <td>{{ $political->type }}</td>
                                            <td>{{ $political->file_path }}</td>
                                            <td>{{ $political->image_path }}</td>
                                            <td>{{ $political->tutor_name }}</td>
                                            <td>{{ $political->file_size }}</td>
                                            <td>
                                                <a href="{{ route('political.show', $political->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('political.edit', $political->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('political.destroy', $political->id) }}" method="POST" style="display: inline-block;">
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
