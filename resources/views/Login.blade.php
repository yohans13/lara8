<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
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

<body class="h-screen flex justify-center items-center">

<div class="shadow rounded to w-full md:w-1/4 border-solid border-t-4 border-purple p-6 my-2">
  <div class="flex justify-between items-center">
    <h4 class="uppercase text-grey text-xs text-wide tracking-wide font-thin ">Login With Laravel 8.3</h4>
    <span class="text-grey cursor-pointer" aria-hidden="true">×</span>
  </div>
  <h3 class="text-grey-400 text-sm font-medium font-sans leading-normal mt-5">Login Test with laravel framework</h3>
  <form method="POST" action="{{route('login.submit')}}">
@csrf
  
  <input type="email" id="email" name="email" class="border-solid border w-full rounded px-3 py-2 mt-5" placeholder="Email"/>
  @error('email')
      <span class="text-red-500 text-sm">{{$message}}</span>
  @enderror
  <input type="password" id="password" name="password" class="border-solid border w-full rounded px-3 py-2 mt-5" placeholder="Password"/>
  @error('password')
      <span class="text-red-500 text-sm">{{$message}}</span>
  @enderror

  <button type="submit" class="bg-yellow-600 text-white px-3 py-2 rounded-full w-full mt-4 Hover:bg-yellow-200">Log In!</button>
</div>

</form>
</body>

</html>