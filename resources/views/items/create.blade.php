<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー投稿作成フォーム</h1>
        <form action="/review/store" method="POST">
            @csrf
            <div class="name">
                <h2>商品名　{{$data->name}}</h2>
            </div>
            <div class="body">
                <h3>タイトル</h3>
                <p>※30文字以内で記入してください</p>
                <textarea name="review[title]" placeholder="(例)この食感がクセになる！"></textarea>
                <h3>コメント</h3>
                <p>※50文字以内で記入してください</p>
                <textarea name="review[body]" placeholder="(例)賞味期限が長めなので、配布用のおみやげとして定番です。コスパも◎、、、"></textarea>
                <h3>評価</h3>
                <input class="form-check-input" type="radio" id="radio01" name="review[review_score]" value="1"> 
                <label class="form-check-label" for="review">1</label>
                <input class="form-check-input" type="radio" id="radio02" name="review[review_score]" value="2"> 
                <label class="form-check-label" for="review">2</label>
                <input class="form-check-input" type="radio" id="radio03" name="review[review_score]" value="3"> 
                <label class="form-check-label" for="review">3</label>
                <input class="form-check-input" type="radio" id="radio04" name="review[review_score]" value="4"> 
                <label class="form-check-label" for="review">4</label>
                <input class="form-check-input" type="radio" id="radio05" name="review[review_score]" value="5"> 
                <label class="form-check-label" for="review">5</label>
                <input type="hidden" name="review[item_id]" value="{{$data->id}}">
            </div><br>
            <input type="submit" value="投稿"/>
        </form>
    </body>
</html>