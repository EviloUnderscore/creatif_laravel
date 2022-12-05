@extends('template.index')
@section('title')
{{$projet->titre}}
@endsection
@section('content')

<div class="container">

    <div class="row">

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




        <!-- Project One -->
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Newsletter</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Votre mail">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>


        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tags</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">

                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Couleur</a> | <a href="">Modifier</a>
                  </li>
                  <li>
                    <a href="#">Géométrie</a> | <a href="">Modifier</a>
                  </li>
                  <li>
                    <a href="#">Football</a> | <a href="">Modifier</a>
                  </li>
                  <li>
                    <a href="#">Vintage</a> | <a href="">Modifier</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>


      </div>

    </div>
    <!-- /.row -->

  </div>

@endsection