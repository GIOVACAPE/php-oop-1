<?php 
include __DIR__ . '/data/data.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP movie GC</title>
</head>
<body>
    <div>
        <h1>FILM</h1>
        <h3>Pirati dei caraibi:</h3>

        <?php foreach ($movies as $movie) : ?>
            
            <h4 class="mt-3">
                <?= $movie->title ?>
            </h4>
            <ul class="list-group">
                <li>ANNO: <?= $movie->year ?> </li>
                <li>LINGUA: <?=$movie->language ?> </li>
                <li>GENERE: <?=$movie->genre->name ?> </li>
                <li>REGISTA: <?=$movie->director ?> </li>
            </ul>
        <?php endforeach; ?>    
        
    </div>
    
</body>
</html>