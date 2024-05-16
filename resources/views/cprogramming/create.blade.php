@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create C-Programming </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cprogramming.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file_path">File Path</label>
                            <input type="text" name="file_path" id="file_path" class="form-control" value="{{ old('file_path') }}" required>
                            @error('file_path')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}" required>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image_path">Image Path</label>
                            <input type="text" name="image_path" id="image_path" class="form-control" value="{{ old('image_path') }}">
                            @error('image_path')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tutor_name">Tutor Name</label>
                            <input type="text" name="tutor_name" id="tutor_name" class="form-control" value="{{ old('tutor_name') }}" required>
                            @error('tutor_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file_size">File Size</label>
                            <input type="number" name="file_size" id="file_size" class="form-control" value="{{ old('file_size') }}">
                            @error('file_size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
