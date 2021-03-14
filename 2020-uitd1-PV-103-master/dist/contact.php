<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="/css/creative.min.css">
    <link rel="stylesheet" href="/css/contact.css">

    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <title>Bedankt</title>
</head>

<body>

    <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12">
            <h3>Bedankt!</h3>
            <h4>U verzond de volgende info</h4>
            <p class='font-weight-bold'>Uw naam:</p>
            <?php
                echo "<p>" . $_POST["naam"] . "</p>\n";
            ?> 
            <p class='font-weight-bold'>Uw mailadres:</p>
            <?php
                echo "<p>" . $_POST["email"] . "</p>\n";
            ?> 
            <p class='font-weight-bold'>Uw vraag:</p>
            <?php
                echo "<p>" . $_POST["vraag"] . "</p>\n";
            ?> 
            <p class='font-weight-bold'>Bent u al klant?</p>
            <?php
                if (isset($_POST["known"])) {
                    echo "<p>Ja</p>\n";
                } else {
                    echo "<p>Nee</p>\n";
                }
            ?> 

            <a href="http://webstring.sinners.be" class="btn btn-primary">Terug naar home</a>
        </div>
    </div>
</div>
</body>

</html>
