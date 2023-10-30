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
               <h1 class="text-4xl text-center font-semibold">検索結果</h1>
        </div>
        <div class="m-10">
            <h2 class="mb-10 text-2xl text-center font-semibold">「{{$name}}」 というキーワードが含まれている商品が{{$count}}件ヒットしました！</h2>
            <div class="m-10 text-center">
                @forelse ($items as $item)
                    <p class="p-10 text-2xl text-center font-semibold">商品番号{{$item->id}}の「{{$item->name}}」</p>
                    <button class="p-10 text-2xl px-2 py-1 text-rose-500 bg-white border border-rose-500 font-semibold rounded hover:bg-red-200"><a href='/items/create/{{$item->id}}'>「{{$item->name}}」のレビュー投稿する</a></button>
                  @empty
                    <p class="p-10 text-2xl text-center font-semibold">該当する商品がありません!<br>
                @endforelse
                <p class="p-10 text-2xl text-center font-semibold">新しく商品を登録してレビュー投稿する方はこちら</p>
                <button class="p-10 text-2xl px-2 py-1 text-green-800 border border-green-800 font-semibold rounded hover:bg-green-100"><a href='/items/register'>商品登録をする</a></button>
            </div>
        </div>
    </body>
</html>
</x-app-layout>