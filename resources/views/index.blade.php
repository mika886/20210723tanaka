<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせフォーム</title>
</head>
<body>
    @foreach ($inputs as $input)
        <form action="/thanks" method="get">
            @csrf
        <label>氏名</label><br>
        <input type="text" name='name' value='{{$input->name}}'><br>
        <label>メールアドレス</label><br>
        <input type="email" name='email' value='{{$input->email}}'><br>
        <button>送信する</button>
        </form>
    @endforeach

</body>
</html>
