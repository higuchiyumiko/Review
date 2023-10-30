<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="p-20  bg-gradient-to-b from-orange-400 to-blue-200">
             <h1 class="m-20 text-5xl text-center font-semibold">商品登録</h1>
        </div>
        <form action="/items/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-50 text-center">
                <h2 class="mt-10 text-3xl">商品名</h2>
                <input type="text" name="items[name]" placeholder="商品名を記入してください" class="mt-10"/>
                <div class="mt-10 ml-20">
                    <input type="file" name="image">
                </div>
                <h2 class="mt-10 text-3xl">アレルギー</h2>
                <textarea name="items[allergy]" placeholder="卵やそばなど" class="mt-10"></textarea>
                <h2 class="mt-10 text-3xl">販売会社</h2>
                <input type="text" name="items[market_name]" placeholder="販売会社を記入してください" class="mt-10"/>
                <h2 class="mt-10 mb-10 text-3xl">カテゴリー</h2>
                <input class="form-check-input" type="radio" id="radio01" name="items[category_id]" value="1"> 
                <label class="form-check-label mr-5" for="category">お菓子</label>
                <input class="form-check-input" type="radio" id="radio02" name="items[category_id]" value="2"> 
                <label class="form-check-label mr-5" for="category">加工品</label>
                <input class="form-check-input" type="radio" id="radio03" name="items[category_id]" value="3"> 
                <label class="form-check-label mr-5" for="category">飲み物</label>
                <input class="form-check-input" type="radio" id="radio04" name="items[category_id]" value="4"> 
                <label class="form-check-label mr-5" for="category">パン</label>
                <input class="form-check-input" type="radio" id="radio05" name="items[category_id]" value="5"> 
                <label class="form-check-label mr-5" for="category">麺類</label>
                <input class="form-check-input" type="radio" id="radio06" name="items[category_id]" value="6"> 
                <label class="form-check-label mr-5" for="category">調味料</label>
                <input class="form-check-input" type="radio" id="radio07" name="items[category_id]" value="7"> 
                <label class="form-check-label mr-5" for="category">その他</label><br>
            <button type="submit" class="m-10 text-2xl px-2 py-1 text-rose-800 bg-white border border-rose-800 font-semibold rounded hover:bg-red-100">登録する</button>
        </div>
        </form>
    </body>
</html>
</x-app-layout>