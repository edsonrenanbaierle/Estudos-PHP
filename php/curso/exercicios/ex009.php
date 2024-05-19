<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    <h1>For no HTML</h1>

    <ul>
        <?php for($ind = 0; $ind <= 20; $ind++): ?>
            <li><?php echo $ind ?> * 30 = <?php echo $ind * 30?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>