@extends('layouts/dashboard-layout')

@section('title', 'Task Manager - Create Task')


@section('content')
<h1 class="mb-6 text-7xl font-bold font-heading leading-normal">Create New Task</h1>
<form>
  <label class="block mb-5">
    <input
      class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
      id="signInInput2-1" type="text" placeholder="Task Title" autocomplete="off">
  </label>
  <label class="relative block mb-5">

    <textarea
      class="px-4 pr-36 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
      id="signInInput2-2" placeholder="Description" autocomplete="off"></textarea>
  </label>
  <button
    class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
    type="button">Save</button>

</form>
  
  @endsection