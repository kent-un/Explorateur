<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <title>DCL Explorer</title>

</head>
<body>
    <header>
        <div id="title"><h1>DCL Explorer</h1></div>
    </header>
    <main>
        <div id="container">
            <?php 
                $dossier= 'phpExplorer/Images';
                $iterator= new DirectoryIterator($dossier);
             ?>
            <div id="boutons">  
                <i class="fas fa-minus-circle"></i> 
                <i class="fas fa-plus-circle"></i>
                <i class="fas fa-times-circle"></i> 
            </div>
            <div id="chemin">
                <?php include('chemin.php'); ?>
            </div>
            <div id="contenu">
                <ul>
                    <?php include ('display.php'); ?>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>