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
               <h1 class="text-4xl text-center font-semibold">レビュー作成</h1>
        </div>
        <div class="mt-10 flex justify-center">
        <form action="/review/store" method="POST">
            @csrf
            <div class="name">
                <h2 class="mt-10 mb-5 text-3xl">{{$item->name}}</h2>
                <img src="{{$item->item_image}}" alt="画像が読み込めません" class="w-1/3 h-1/3"/>
            </div>
            <div class="body">
                <h3 class="mt-10 text-3xl">タイトル</h3>
                <p class="mt-10 mb-10">※30文字以内で記入してください</p>
                <textarea name="review[title]" placeholder="(例)この食感がクセになる！"></textarea>
                <h3 class="mt-10 text-3xl">コメント</h3>
                <p class="mt-10 mb-10">※50文字以内で記入してください</p>
                <textarea name="review[body]" placeholder="(例)賞味期限が長めなので、配布用のおみやげとして定番です。コスパも◎、、、"></textarea>
                <h3 class="mt-10  mb-10 text-3xl">評価</h3>
                <input class="form-check-input" type="radio" id="radio01" name="review[review_score]" value="1"> 
                <label class="form-check-label mr-10" for="review">1</label>
                <input class="form-check-input" type="radio" id="radio02" name="review[review_score]" value="2"> 
                <label class="form-check-label mr-10" for="review">2</label>
                <input class="form-check-input" type="radio" id="radio03" name="review[review_score]" value="3"> 
                <label class="form-check-label mr-10" for="review">3</label>
                <input class="form-check-input" type="radio" id="radio04" name="review[review_score]" value="4"> 
                <label class="form-check-label mr-10" for="review">4</label>
                <input class="form-check-input" type="radio" id="radio05" name="review[review_score]" value="5"> 
                <label class="form-check-label mr-10" for="review">5</label>
                <input type="hidden" name="review[item_id]" value="{{$item->id}}">
                <input type="hidden" name="review[user_id]" value="{{Auth::user()->id}}">
            </div><br>
            <button type="submit" class="m-10 text-2xl px-2 py-1 text-rose-800 bg-white border border-rose-800 font-semibold rounded hover:bg-red-100">作成する</button>
        </form>
        </div>
    </body>
</html>
</x-app-layout>