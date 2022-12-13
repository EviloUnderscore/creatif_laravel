@extends('template.index')
@section('title', 'Create')
@section('content')

<!-- Title -->
<h1>Add a project</h1>

<!-- Form Start -->
<form action="{{route('projets.store')}}" method='post' id='addProjet' enctype="multipart/form-data">

  <div class="form-group">
    <label for="titre">Title</label>
    <input
      type="text"
      name="titre"
      id="titre"
      class="form-control"
      placeholder="Enter your title here"
    />
  </div>

  <div class="form-group">
    <label for="texte">Text</label>
    <textarea
      id="texte"
      name="texte"
      class="form-control"
      rows="5"
      placeholder="Enter your text here"
    ></textarea>
  </div>

  <div class="form-group">
    <label for="image"> Image</label>
    <input
      type="file"
      class="form-control-file btn btn-primary"
      id="image"
      name='image'
    />
  </div>

  <div class="form-group">
    <label for="creatif">Creatif</label>
    <select id="creatif" name="creatif" class="form-control">
      <option disabled selected>Select your creatif</option>

      @foreach (\App\Models\Creatif::all() as $creatif)
          <option value="{{$creatif->id}}">{{$creatif->pseudo}}</option>
      @endforeach

    </select>
  </div>

  <div>
    <input class="btn btn-primary" type="submit" value="submit" />
    <input class="btn btn-secondary" type="reset" value="reset" />
  </div>

</form>
<!-- Form End -->

@endsection