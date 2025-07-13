<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Article List</h1>
    <ul>
        <li>Article </li>
        <ul>
            <?php /*
            <?php foreach($articles as $article):?>
                <li><?php echo $article['title']?></li>
            <?php endforeach?> normal php way
            */ ?>
            @foreach ( $articles as $article )
                <li>{{$article['title']}}</li>
            @endforeach
        </ul>
    </ul>
</body>
</html>