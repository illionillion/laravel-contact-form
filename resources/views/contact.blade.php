<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ</h1>

    <form action="/" method="post">
        @csrf
        <div>
            <label for="name">名前</label>
            <input id="name" name="name" required>
        </div>

        <div>
            <label for="email">メール</label>
            <input id="email" name="email" type="email" required>
        </div>

        <div>
            <label for="body">お問い合わせ内容</label>
            <textarea id="body" name="body" required></textarea>
        </div>

        <button type="submit">送信</button>
    </form>
</body>
</html>