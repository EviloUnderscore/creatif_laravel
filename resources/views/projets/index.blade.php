<?php use Illuminate\Support\Str; ?>
@extends('template.index')
@section('title', 'Projets')
@section('content')

    <!-- Page Heading -->
    <!-- Title -->
    <h1 class="mt-4">Les projets <small>Design capill'Hair</small></h1>
    <hr>

    @foreach ($projets as $projet)
        
    <div class="row">
        <div class="col-md-4">
            <a href="{{route('projets.show', ['id' => $projet->id, 'slug' => Str::slug($projet->titre)])}}">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('images/'.$projet->image)}}" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>
                {{$projet->titre}}
            </h3>
            <p class="lead">
                par
                <a href="{{route('projets.show', ['id' => $projet->id, 'slug' => Str::slug($projet->titre)])}}">
                    {{$projet->creatif->pseudo}}
                </a> le {{Carbon\Carbon::parse($projet->dateCreation)->format('d-m-Y')}}
            </p>
            <p>
                {{$projet->texte}}
            </p>
            <a class="btn btn-primary" href="{{route('projets.show', ['id' => $projet->id, 'slug' => Str::slug($projet->titre)])}}">View Project</a>
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

    @endforeach

@endsection