<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>商品編集画面</h1>
            <div class="content">
            <form action="/items/update/{{ $item->id }}" method="POST"　enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>商品名  {{ $item->name }}</h2>
                </div>
                <div class='content__body'>
                    <input type='hidden' name='item[name]' value="{{$item->name}}">
                    <h3>販売会社名</h3>
                     <input type='text' name='item[market_name]' value="{{ $item->market_name }}">
                    <h3>アレルギー</h3>
                     <input type='text' name='item[allergy]' value="{{ $item->allergy }}">
                    
                    <h3>カテゴリー</h3>
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
                        <label class="form-check-label" for="category">その他</label>
                </div><br>
                <input type="submit" value="保存">
            </form>

        　　</div>
        　　
    </body>
</html>