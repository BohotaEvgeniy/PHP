<?php include_once 'functions.php'?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Compiled materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container">
    <div class="row">
        <form class="col s6" method="post" action="">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon-password" type="text" name="pathUrl" required class="validate">
                    <label for="icon_password">Url</label>
                </div>
                <div class="input-field col s12">
                    <input class="waves-effect waves-light btn" type="submit" name="actionHttp">
                </div>

            </div>
        </form>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

</body>
</html>

