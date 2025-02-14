@extends('layouts.navbar')

@section('title', 'Edit course')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Course with Image
                            <a href="{{ url('/crud_course') }}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/update-course-item/' . $course->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="name">Course name</label>
                                <input type="text" class="form-control" name="name" value="{{ $course->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Course description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $course->description }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Course image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset($course->image) }}" alt="Image"
                                    width="70px" height="70px">
                            </div>
                            <div class="form-group mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $course->slug }}">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Update Course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
