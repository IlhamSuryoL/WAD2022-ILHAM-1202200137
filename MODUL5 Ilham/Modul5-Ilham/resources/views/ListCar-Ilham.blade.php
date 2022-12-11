<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
  @include('partials.navbar')
  <div class="container mt-5">
    <div class="row header">
      <div class="col">
        <h1 class="display-4"><b>My Show Room</b> </h1>
        <p class="lead">List Show Room Ilham - 1202200137 </p>

        
        <div class="container containerCard">
          @foreach($showrooms as $data)
              <div class='card'>
                  <img src='{{"asset/$data->image"}}' alt='' class='card__img'>
                  <h1 class='card__title'>{{$data->name}}</h1>
                  <p class='card__desc'>{{strlen($data->description) > 120 ? substr($data->description, 0, 100).'...' : $data->description}}</p>
                  <div class="bg-light btn-container"><a href='/detail/{{$data->id}}' class="btn btn-primary rounded-pill">Detail</a>
                    <a href='/delete/{{$data->id}}' class="btn btn-danger rounded-pill">Delete</a>
                    </div>
              </div>
          @endforeach
      </div>

      

       
</body>

</html>