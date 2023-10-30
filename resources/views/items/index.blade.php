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
        <div class="p-40  bg-gradient-to-b from-orange-400 to-blue-200">
             <h1 class="m-20 text-5xl text-center font-semibold"> お気に入りのお土産品を見つけよう</h1>
             <div class="flex flex-row">
                <button class="m-20 text-2xl px-3 py-2 text-rose-500 bg-white border border-rose-500 font-semibold rounded hover:bg-red-200"><a href='/items/show'>登録されている商品を見る</a></button>
                
                <button class="m-20 text-2xl px-3 py-2 text-rose-800 bg-white border border-rose-800 font-semibold rounded hover:bg-red-100"><a href="/items">口コミを投稿したいお土産品を探す</a></button>
                
            </div>
        </div>
        
        <div class='mt-10'>
            
            <div class='mt-20'>
               <h1 class="mb-20 text-4xl text-center font-semibold">最新投稿されたレビューはこちら</h1>
                  <div class="grid grid-cols-3 ml-20">
                    @foreach($reviews as $review)
                    <div class="p-10">
                      <h2 class='text-2xl'><a href="/items/detail/{{$review->item->id}}">{{$review->item->name}}</a></h2>
                        @if($review->item->item_image!=null)
                            <img src="{{$review->item->item_image}}" alt="画像が読み込めません" class="w-1/2 h-1/2 "/>
                        @endif
                        <h2 class='mt-10 mb-10 text-2xl'><a href="/review/show/{{$review->id}}">{{$review->title}}</a></h2>
                        <span>
                            	<a href="{{ route('likes', $review) }}" class="btn btn-secondary btn-sm">
                            		<button class="bg-red-500 hover:bg-red-400 text-white rounded px-4 py-2">いいね</button>
                            	    <span class="text-xl">{{ $review->likes->count() }}</span>
                            	</a>
                        </span>
                    </div>
                    @endforeach
                   
                 </div>
            </div>
                    <div class='paginate'>
                        {{$reviews->links()}}
                    </div>
            </div>
        </div>
    </body>
</html>
</x-app-layout>