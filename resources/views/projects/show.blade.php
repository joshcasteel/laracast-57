@extends('projects.layout')
@section('content')
    <div class="row">
        <div class="col s6 m4">
            <h4>{{$project->title}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s6 m4">
            <h5>{{$project->description}}</h5>
        </div>
    </div>
    
        @foreach ($project->tasks as $task)
            <div class="row">
                <form action="tasks/{{$task->id}}">
                    <div class="col s6 m4">
                        <label for="{{$task->id}}">
                            <input type="checkbox" name="{{$task->id}}" id="{{$task->id}}" class="filled-in">
                            <span>{{$task->description}}</span>
                        </label>
                    </div>
                </form>
            </div>
        @endforeach
        </div>
    <div class="row">
        <div class="col s6 m4">
                <form action="/projects/{{$project->id}}/edit" method="get">
        
                    <button type="submit" class="btn">Edit</button>
                </form>
        </div>
    </div>

        
@endsection