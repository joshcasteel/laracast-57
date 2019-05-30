@extends('projects.layout');
@section('content')
    <div class="row">
        <div class="col s12 m4"></div>
        <div class="col s12 m4">
            <ul>
                <li class="card-panel center">{{$project->title}}</li>
                <li class="card-panel center">{{$project->description}}</li>
            </ul>
            <form action="/projects/{{$project->id}}/edit" method="get" class="center">
                @csrf
                <button class="btn">Edit</button>
            </form>
        </div>
    </div>
@endsection