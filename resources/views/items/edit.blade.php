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
               <h1 class="text-4xl text-center font-semibold">商品編集画面</h1>
        </div>
            <div class="ml-30">
            <form action="/items/update/{{ $item->id }}" method="POST"　enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <h2 class="m-10 text-3xl">商品名  {{ $item->name }}</h2>
                    <img src="{{$item->item_image}}" alt="画像が読み込めません" class="w-1/3 h-1/3 ml-40"/>
                    <input type='hidden' name='item[name]' value="{{$item->name}}">
                    <h3 class="ml-20 text-2xl">販売会社名</h3>
                     <input type='text' name='item[market_name]' value="{{ $item->market_name }}" class="ml-40">
                    <h3 class="ml-20 text-2xl">アレルギー</h3>
                     <input type='text' name='item[allergy]' value="{{ $item->allergy }}" class="ml-40">
                    
                    <h3 class="ml-20 text-2xl">カテゴリー</h3>
                    <div class="ml-40">
                        <input class="form-check-input" type="radio" id="radio01" name="item[category_id]" value="1" {{ old('item[category_id]') === '1' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">お菓子</label>
                        <input class="form-check-input" type="radio" id="radio02" name="item[category_id]" value="2" {{ old('item[category_id]') === '2' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">加工品</label>
                        <input class="form-check-input" type="radio" id="radio03" name="item[category_id]" value="3" {{ old('item[category_id]') === '3' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">飲み物</label>
                        <input class="form-check-input" type="radio" id="radio04" name="item[category_id]" value="4" {{ old('item[category_id]') === '4' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">パン</label>
                        <input class="form-check-input" type="radio" id="radio05" name="item[category_id]" value="5" {{ old('item[category_id]') === '5' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">麺類</label>
                        <input class="form-check-input" type="radio" id="radio06" name="item[category_id]" value="6" {{ old('item[category_id]') === '6' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">調味料</label>
                        <input class="form-check-input" type="radio" id="radio07" name="item[category_id]" value="7" {{ old('item[category_id]') === '7' ? 'checked' : '' }}> 
                        <label class="form-check-label" for="category">その他</label><br>
                    </div>
                <button type="submit" class="mt-10 ml-40 text-2xl px-2 py-1 text-rose-800 bg-white border border-rose-800 font-semibold rounded hover:bg-red-100">保存する</button>
            </form>

        　　</div>
        　　
    </body>
</html>
</x-app-layout>