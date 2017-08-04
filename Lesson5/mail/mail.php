<?php
header('content-type:text/html;charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>OkaY</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">


</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header>
    <div class="container">
        <div class="row">
           <h1>Send email</h1>
        </div>
    </div>
</header>
<mail>
    <div class="container">
        <div class="row">
            <form action="function.php" method="post">
                <div class="row">
                    <div class="six columns">
                        <label for="exampleEmailInput">Your email</label>
                        <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                    </div>
                    <div class="six columns">
                        <label for="exampleRecipientInput">Reason for contacting</label>
                        <input class="u-full-width" type="text" name="subject" placeholder="Subject" id="exampleEmailInput">
                    </div>
                </div>
                <label for="exampleMessage">Message</label>
                <textarea class="u-full-width" name="text" placeholder="Hi Alex …" id="exampleMessage"></textarea>
                <label class="example-send-yourself-copy">
                    <input type="checkbox">
                    <span class="label-body">Send a copy to yourself</span>
                </label>
                <input class="button-primary" type="submit" name="submit" value="Submit">
        </div>
    </div>
</mail>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
