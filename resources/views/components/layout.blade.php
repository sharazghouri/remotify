<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white pb-10"> 
  <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div> <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo"> </a> </div>
      <div class="flex space-x-6 font-bold"> 
        <a href="">Jobs</a>
        <a href="">Careers</a>
        <a href="">Salaries</a>
        <a href="">Companies</a>
      </div>
      @auth
      <div>
        <a href="/jobs/create">Post a Job</a>
        <x-forms.form method="post" action="/login" class="inline-flex ml-2">
        @method('DELETE')
        <x-forms.button>Logout</x-forms.button> 
        </x-forms.form>
        
      </div>
      @endauth

      @guest
      <div class="space-x-6 font-bold">         
        <a href="/register">Register</a>
        <a href="/login">Login</a>
      </div>
      @endguest
    </nav>
  </div>
    <main class="mt-10 max-w-[986px] mx-auto"> 
      {{ $slot }}
    </main>
</body>
</html>
