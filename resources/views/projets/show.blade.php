@extends('template.index')
@section('title')
{{$projet->titre}}
@endsection
@section('content')

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Page Heading -->

    <!-- Title -->
    <h1 class="mt-4">{{$projet->titre}}</h1>
    <p class="lead">
      par
      <a href="artiste_details.html">{{$projet->creatif->pseudo}}</a> le {{$projet->dateCreation}}
    </p>

    <hr>




    <!-- Project -->
    <div class="row">
      <div class="col-md-6">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('images/'.$projet->image)}}" alt="">
        </a>
      </div>
      <div class="col-md-6">
        <p class="lead">
            {{$projet->texte}}
        </p>
        <hr/>
        <ul class="list-inline tags">
            @foreach ($projet->tags as $tag)
            <li>
                <a href="#" class="btn btn-default btn-xs">{{$tag->nom}}</a>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
    <!-- /.row -->
    <hr>
  </div>

@endsection