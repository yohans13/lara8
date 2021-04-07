
@extends('layouts.master')

@section('title','Home')
@section('content')

<div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full">
            <form method="POST" action="{{route('upload.file')}}" enctype="multipart/form-data">
            @csrf
                <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Upload Form</span> </div>
                <div class="p-3">
                    <div class="mb-2"> <span class="text-sm">Choose File</span> <input type="file" name="file" class="h-12 px-3 w-full border-gray-200 border rounded focus:outline-none focus:border-gray-300"> </div>
                    
                    <div class="mt-3 text-center pb-3"> <button type="submit" class="w-full h-12 text-lg w-32 bg-blue-600 rounded text-white hover:bg-blue-700">upload</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

