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
            <a href="/projects/{{$project->id}}/edit">Edit</a>
        </div>
    </div>
    <div class="card-panel">
        <h6>Tasks</h6>
        @foreach ($project->tasks as $task)
            <div class="row">
                <form action="/tasks/{{$task->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col s6 m4">
                        <label for="completed{{$task->id}}">
                            <input type="checkbox"
                            name="completed" id="completed{{$task->id}}" class="filled-in"
                            onChange="this.form.submit()" {{ $task->completed ? "checked" : ''}}>
                            <span>{{$task->description}}</span>
                        </label>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
    <div class="row card-panel">
        <div class="col s6">
            <form action="/projects/{{$project->id}}/tasks" method="post">
                @csrf
                <label for="description">New Task</label>
                <input type="text" name="description" id="description">
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <ul class="col s6">
            @foreach ($errors->all() as $error)
                <li class="card-panel center red">{{$error}}</li>
            @endforeach
        </ul>
    </div>               
    
        
@endsection