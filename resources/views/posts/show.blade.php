@extends('layout.master')
@section('content')
<h1>
    {{  $post->title  }}
</h1>
<?php $img = $post->image_name; ?>
<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img src="/uploadedimages/{{$post->image_name}}" alt="{{$post->title}}" height="200" width="200"> 
        <div class="card-body">
            <p class="card-text"></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                <p> {{$post->views}} Views </p>
              </div>
              {{-- <small class="text-muted">9 mins</small> --}}
            </div>
          </div>
        </div>
      </div>

@endsection