<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>お土産品口コミサイト</h1>
        <div class='main'>
                <a href='/items/show'>登録されている商品を見る</a>
            <div class='body'>
                <h2><a href="/items">口コミを投稿したいお土産品を探す</a></h2>
               
                @foreach($reviews as $review)
                  <h2 class='title'>商品名:{{$review->item->name}}</h2>
                    @if($review->item->item_image!=null)
                    <img src="{{$review->item->item_image}}" alt="画像が読み込みません"/>
                    @else
                    <p>画像はアップロードされていません</p>
                    @endif
                    <h3>タイトル:{{$review->title}}</h3>
                @endforeach
            </div>
                
                    <div class='paginate'>
                        {{$reviews->links()}}
                    </div>
                
            </div>
        </div>
    </body>
</html>