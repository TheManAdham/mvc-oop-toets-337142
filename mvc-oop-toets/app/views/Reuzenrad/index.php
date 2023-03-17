<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://mvc-oop-toets.com/public/css/style.css">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $data['title']; ?></h3>

    <table border= "1">
        <thead>
        <th>Naam reuzenrad</th>
        <th>Hoogte (m)</th>
        <th>Land</th>
        <th>Kosten (miljoen)</th>
        <th>Aantal passagiers</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
</body> 
</html>