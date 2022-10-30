<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "gdj.marianne@gmail.com";
    $subject = "Mail From website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message = " . $message;
    $headers = "From: noreply@yoursite.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    //header("Location: ../thankyou.html");
    echo'
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>GODLike</title>
                <!-- Boostrap CSS File -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <!-- CSS File -->
                <link rel="stylesheet" href="asset/css/style.css">
                <!-- Fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            </head>
        
            <body>
                <div class="container text-center">
                    <h1>Merci de m\'avoir contacter. Je reviens vers vous le plus rapidement possible !</h1>
                    <p class="back">Revenir à l\'<a href="../index.html">accueil</a>.</p>
                </div>
            </body>
        </html>
    ';
?>