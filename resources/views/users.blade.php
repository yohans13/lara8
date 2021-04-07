
@extends('layouts.master')

@section('title','Home')
@section('content')

<div class=" ">
  <div class="m-10 p-10">
  <h1>Users</h1>


<p class="text-lg text-center font-bold m-5">Classic Table Design</p>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">

<p class="text-lg text-center font-bold m-5">Flat Color Table Design</p>
<table class="rounded-t-lg m-5 w-5/6 mx-auto text-pink-100 bg-pink-700">
  <tr class="text-left border-b-2 border-pink-200 font-bold">
    <th class="px-4 py-3">id</th>
    <th class="px-4 py-3">name</th>
    <th class="px-4 py-3">mail</th>
    
  </tr>
  @foreach($user as $users)

  <tr class="bg-pink-600 font-semibold">
    <td class="px-4 py-3 border-b border-pink-500">{{$users->id}}</td>
    <td class="px-4 py-3 border-b border-pink-500">{{$users->name}}</td>
    <td class="px-4 py-3 border-b border-pink-500">{{$users->email}}</td>
  
  </tr>     @endforeach
 
<!-- each row -->

</table>

{{$user->links()}}

<!-- flat color design -->



<div class="mb-20"></div>
<!-- fill for tailwind preview bottom overflow -->


  </div>

</div>

@endsection

