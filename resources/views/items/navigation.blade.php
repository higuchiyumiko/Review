<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='p-20 bg-gradient-to-b from-orange-400 to-blue-200'>
               <h1 class="text-4xl text-center font-semibold">検索してみよう</h1>
        </div>
        
         @csrf
         <form action="/items/search" method="GET" class="m-20 flex justify-center">
            <input type="text" name="name" value="" class="ml-30">
            
            <button type="submit" class="ml-20 text-2xl px-2 py-1 text-rose-800 bg-white border border-rose-800 font-semibold rounded hover:bg-red-100">検索する</button>
         </form>
    </body>
</html>
</x-app-layout>