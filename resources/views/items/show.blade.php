<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>商品一覧</h1>
        <div class='items'>
            @foreach ($items as $item)
                    <div class='body'>
                        <p>商品名：{{ $item->name }}</p>
                        <div class="image">
                           <img src="{{ $item->item_image }}" alt="画像が読み込めません。"/>
                        </div>
                        <p>販売会社：{{$item->market_name}}</p>
                        <div class="edit"><a href="/items/edit/{{$item->id}}">この商品を編集する</a></div><br>
                    </div>
                </div>
                <form action="/items/delete/{{$item->id}}" id="form_{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{$item->id}})">この商品を削除する</button>
                </form>
                 <script>
                            function deletePost(id) {
                                'use strict'
                        
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                    document.getElementById(`form_${id}`).submit();
                                }
                            }
                 </script>
　　　　　　 @endforeach   
　　　　　　 <div class='paginate'>
            {{ $items->links() }}
        </div>
        </div>
    </body>
</html