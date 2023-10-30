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
               <h1 class="text-4xl text-center font-semibold">登録商品一覧</h1>
        </div>
                  <div class="grid grid-cols-3 ml-20">
                    @foreach($items as $item)
                    <div class="p-10">
                      <h2 class='text-2xl'>{{$item->name}}</h2>
                            <img src="{{$item->item_image}}" alt="画像が読み込めません" class="w-1/2 h-1/2"/>
                        <h3 class="m-4 text-2xl">{{$item->market_name}}</h3>
                        <h3 class="m-4 text-2xl underline decoration-dashed-orange">{{$item->category->name}}</h3>
                        <button class=" text-2xl px-2 py-1 text-green-800 border border-green-800 font-semibold rounded hover:bg-green-100"><a href="/items/edit/{{$item->id}}">編集する</a></button>
                        <form action="/items/delete/{{$item->id}}" id="form_{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{$item->id}})" class="mt-2 text-2xl px-2 py-1 text-blue-800 border border-blue-800 font-semibold rounded hover:bg-blue-100">この商品を削除する</button>
                        </form>
                    </div>
                    @endforeach
                   
                 </div>
            </div>
                 <script>
                            function deletePost(id) {
                                'use strict'
                        
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                    document.getElementById(`form_${id}`).submit();
                                }
                            }
                 </script>
　　　　　　 
　　　　　　 <div class='paginate'>
            {{ $items->links() }}
             </div>
        </div>
    </body>
</html>
</x-app-layout>