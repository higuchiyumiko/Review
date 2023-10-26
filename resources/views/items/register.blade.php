<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>商品登録フォーム</h1>
        <form action="/items/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <h2>Item Name</h2>
                <input type="text" name="items[name]" placeholder="商品名を記入してください"/><br>
                <br>
            </div>
            <div class="body">
             
                <div class="image">
                <input type="file" name="image">
                </div>
              
                <p>Allergy</p>
                <textarea name="items[allergy]" placeholder="卵やそばなど"></textarea>
                <p>Market_name</p>
                <input type="text" name="items[market_name]" placeholder="販売会社を記入してください"/>
                <p>category</p>
                <input class="form-check-input" type="radio" id="radio01" name="items[category_id]" value="1"> 
                <label class="form-check-label" for="category">お菓子</label>
                <input class="form-check-input" type="radio" id="radio02" name="items[category_id]" value="2"> 
                <label class="form-check-label" for="category">加工品</label>
                <input class="form-check-input" type="radio" id="radio03" name="items[category_id]" value="3"> 
                <label class="form-check-label" for="category">飲み物</label>
                <input class="form-check-input" type="radio" id="radio04" name="items[category_id]" value="4"> 
                <label class="form-check-label" for="category">パン</label>
                <input class="form-check-input" type="radio" id="radio05" name="items[category_id]" value="5"> 
                <label class="form-check-label" for="category">麺類</label>
                <input class="form-check-input" type="radio" id="radio06" name="items[category_id]" value="6"> 
                <label class="form-check-label" for="category">調味料</label>
                <input class="form-check-input" type="radio" id="radio07" name="items[category_id]" value="7"> 
                <label class="form-check-label" for="category">その他</label>
            </div><br>
            <input type="submit" value="投稿"/>
        </form>
        <br>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>