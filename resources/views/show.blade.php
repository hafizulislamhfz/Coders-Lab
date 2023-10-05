<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>userId</th>
                <th>title</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $p)
            <tr>
                <td>{{ $p->userId }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->body }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
