<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB CRUD Operation</title>

     <!-- Font Awesome if you need it-->
     <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"/>
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
      rel="stylesheet"
    />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->


</head>
<body>
@if(Session::has('post updated'))


 <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{Session::get('post updated')}}</p>
</div>

@endif

<div class="flex justify-center items-center">
<form class="w-full max-w-lg" method="POST" action="{{route('post.update')}}">
@csrf
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

    <input type="hidden" value="{{$post->id}}" name="id"/>
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Title">Title</label>


      <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title" name="title" type="text" placeholder="title" value="{{$post->title}}">


      @error('title')
      <span class="text-red-500 text-sm">{{$message}}</span>
  @enderror
      
    </div>
     
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="body">Body</label>


      <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="body" name="body" type="text" placeholder="Jane" value="{{$post->body}}">
      @error('body')
      <span class="text-red-500 text-sm">{{$message}}</span>
  @enderror

     
      <button class="flex-shrink-0 bg-green-500 hover:bg-teal-700 border-green-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded-full" type="submit">
      Update
    </button>

    <a href="/posts" class="flex-shrink-0 bg-gray-500 hover:bg-teal-700 border-gray-200  rounded-full text-sm border-4 text-white py-1 px-2 " >
      Back
    </a>

    </div>
    
  </div>
 
  </div>
</form>
</div>
</body>
</html>