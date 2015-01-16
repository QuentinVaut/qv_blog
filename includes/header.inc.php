<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
        <meta name="description" content="Petit blog pour m'initier à PHP">
        <meta name="author" content="Votre Nom">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        
    </head>

    <body>

        <div class="container">

            <div class="content">

                <div class="page-header well">
                    <h1><a href ='#'>Mon Blog</a> <small>Pour m'initier à PHP</small></h1>
                    <?php
                    if (isset($connect) && $connect == 1) {
                        echo "<small style='float:center'>
                              <p align='right'>
                               Bienvenue : " . $nom . " " . $prenom . "
                        </p>
                        </small>";
                    } else {
                        echo "<small style='float:center'>
                              <p align='right'>
                              Deconnecté
                        </p>
                        </small>";
                    }
                    ?>

                </div>

                <div class="row">