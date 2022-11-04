@extends('layouts/dashboard-layout')

@section('title', 'Task Manager - All Tasks')


@section('content')


<h1 class="mb-6 text-4xl font-bold font-heading leading-normal">All Tasks</h1>
<ul class="list-disc">
@foreach ($userTasks as $task)
    <li><a href="/tasks/{{$task->id}}" >{{$task->title}}</a></li>
@endforeach
</ul>
@endsection