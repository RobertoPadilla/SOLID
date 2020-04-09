
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
       $firstSegment = get_first_segment();
       echo $firstSegment ? $firstSegment : lang('titles.Home');
    ?>  
  </title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">

  <!-- ICON FONT -->
  <link rel="stylesheet" href="/css/font/fontello.css">

  <!-- GENERAL -->
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/codeStyle.css">


  
</head>
<body>


