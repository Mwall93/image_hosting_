<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

<h1>
    {{  $post->title  }}
</h1>
<?php $img = $post->image_name; ?>
<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img src="/uploadedimages/{{$post->image_name}}" alt="{{$post->title}}"> 
        <div class="card-body">
            <p class="card-text"></p>
            <div class="d-flex jus
            tify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              {{-- <small class="text-muted">9 mins</small> --}}
            </div>
          </div>
        </div>
      </div>

    </body>
</html>