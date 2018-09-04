<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body>
            
        @include('layout.nav')
            <h1>Upload an image</h1>
        <hr> 
        <form method="POST" action="/posts" enctype="multipart/form-data">

            {{ csrf_field() }}

                <div class="form-group">

                  <label for="title">Image title:</label>

                  <input type="text" class="form-control" id="title" name="title" >
               
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
    </body>
</html>