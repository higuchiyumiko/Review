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
               <h1 class="text-4xl text-center font-semibold">レビュー詳細ページ</h1>
        </div>
        <div class='mt-10 flex justify-center'>
            <div class="p-10">
                        <h2 class="mb-10 text-3xl">タイトル：{{ $reviews->title }}</h2>
                        <img src="{{ $reviews->item->item_image }}" alt="画像が読み込めません。" class="w-1/2 h-1/2"/>
                        <h2 class="mt-10 text-3xl">コメント：{{$reviews->body}}</h2>
                        <h2 class="mt-10 text-3xl text-amber-500">★:{{$reviews->review_score}}</h2>
            </div>
        </div>
    </body>
</html>
</x-app-layout>