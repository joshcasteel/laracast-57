@extends('projects.layout')
@section('content')
<div class="row">
        <form class="col s12" action="/projects" method="POST">
            @csrf
          <div class="row">
            <div class="input-field col s6">
              <input name="title" type="text">
              <label for="title">Title</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <textarea name="description" class="materialize-textarea" data-length="255"></textarea>
              <label for="description">Description</label>
            </div>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
        
      </div>
      <div class="row">
        <ul class="col s6">
            @foreach ($errors->all() as $error)
                <li class="card-panel center red">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endsection