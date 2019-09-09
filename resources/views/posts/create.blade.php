@extends('layout.master')
@section('content')

    <div class="col-sm-8">
    <h1>Upload an image</h1>
        
    <form method="POST" action="/posts" enctype="multipart/form-data">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Image title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">

            </div>

            <div class="form-group">

                    <label for="image">Select image to upload:</label>
                    <input type="file" name="fileToUpload" id="fileToUpload"> 
                    {{-- <input type="submit" value="Upload Image" name="submit"> --}}
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
                
            @include ('layout.errors')

        </form>
    </div>
@endsection