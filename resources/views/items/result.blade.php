<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>検索結果</h1>
        <p>「{{$name}}」 というキーワードが含まれている商品が{{$count}}件ヒットしました！</p>
        
        @forelse ($items as $item)
            <p>商品番号{{$item->id}}の「{{$item->name}}」</p>
            <a href='/items/create/{{$item->id}}'>「{{$item->name}}」のレビュー投稿する</a><br>
          @empty
            <p>該当する商品がありません!<br>
        @endforelse
        <p>新しく商品を登録してレビュー投稿する方はこちら</p>
            <a href='/items/register'>商品登録をする</a>
    </body>
</html>