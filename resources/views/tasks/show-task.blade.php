@extends('layouts/dashboard-layout')

@section('title', 'Task Manager - Show Task')


@section('content')
<h1 class="mb-6 text-7xl font-bold font-heading leading-normal">Throw Garbage Out</h1>

<p>Description</p>
<div class="my-7">
  <a href="#"
    class="mr-3 mb-8 py-2 px-5 w-full text-white font-semibold border border-green-700 rounded-xl shadow-4xl focus:ring focus:ring-green-300 bg-green-600 hover:bg-green-700 transition ease-in-out duration-200">
    Edit
  </a>
  <a href="#"
    class="mr-3
        mb-8 py-2 px-5 w-full text-white font-semibold border border-red-700 rounded-xl shadow-4xl focus:ring focus:ring-red-300 bg-red-600 hover:bg-red-700 transition ease-in-out duration-200">
    Delete
  </a>
</div>
@endsection