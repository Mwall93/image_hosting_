<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body>
            
        @include('layout.nav')

        <form>
            <h1>Publish a Post</h1>

        <hr> 
        <form method="POST" action="/posts">

            {{ csrf_field() }}

                <div class="form-group">

                  <label for="title">Image title:</label>

                  <input type="text" class="form-control" id="title" name="title" >
               
                </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                  
                {{-- @include ('layout.errors') --}}

            </form>


        </form>


    </body>
</html>