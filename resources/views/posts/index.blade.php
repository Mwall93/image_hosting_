@extends('layout.master')
@section('content')
      <form>
            {{-- <h1>Home Page</h1> --}}
        <hr> 
        <? $posts = request($posts) ?>

        <div class="col-sm-8 blog-main">
            @foreach ($posts as $post)
              @include('posts.post')
            @endforeach
        </div>

      </form>

      {{-- <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Fusce lectus nisl, porta at condimentum id, volutpat id ligula.
        Duis ut consectetur augue. Praesent quis sapien nec purus feugiat auctor.
        Vivamus tempor sagittis augue, vitae commodo odio egestas pretium. 
        Quisque molestie enim ut nulla consequat efficitur. Nam vitae quam mi. 
        Proin vehicula, elit et mollis ultricies, sapien turpis pharetra mauris, eu dictum odio arcu in metus.
        Morbi vitae diam ullamcorper enim venenatis ornare. Nulla facilisi. Donec quis maximus nisi.
        Morbi dictum nulla arcu, sit amet convallis tortor dictum in.
        Nullam luctus lacinia tellus, ac laoreet risus cursus sed.
        Sed dapibus sit amet ante efficitur rhoncus. Cras non vulputate sapien. 
        Proin nisl risus, pellentesque sed massa sit amet, vulputate fermentum lacus. 
        In in libero nunc.

      </p> --}}
@endsection