@extends('projects.layout')
@section('content')
    <div class="row">
        <form class="col s12" action="/projects/{{$project->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s6">
                    <input name="title" type="text" value="{{$project->title}}">
                    <label for="title">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <textarea name="description" class="materialize-textarea" data-length="255">{{$project->description}}</textarea>
                    <label for="description">Description</label>
                </div>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
        <form action="/projects/{{$project->id}}" method="POST" class="col s12">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn red">Delete</button>
        </form>
    </div>
@endsection