@extends('projects.layout')

@section('content')
    @foreach ($projects as $project)
        <ul>
            <div class="row">
                 <div class="col s12 m4"></div>
                 <div class="col s12 m4">
                     <a href="/projects/{{$project->id}}/edit">
                        <li class="card-panel center">{{$project->title}}</li>
                     </a>
                </div>
            </div>
        </ul>
    @endforeach
@endsection
