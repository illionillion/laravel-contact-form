<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ一覧</title>
</head>
<body>
    <h1>お問い合わせ一覧</h1>

    @foreach ($contacts as $contact)
        <div>
            <p>名前: {{ $contact->name }}</p>
            <p>メール: {{ $contact->email }}</p>
            <p>内容: {{ $contact->body }}</p>
        </div>
    @endforeach
</body>
</html>