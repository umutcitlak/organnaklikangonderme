 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sepetim</title>
</head>
<body>
    <h1>Sepetim</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo $product->name; ?> - <?php echo $product->price; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>