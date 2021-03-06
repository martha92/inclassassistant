<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Load css Files -->
    <link href="./metro/css/metro-bootstrap.css" rel="stylesheet">
    <link href="./metro/css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="./metro/min/iconFont.min.css" rel="stylesheet">
    <link href="./metro/js/prettify/prettify.css" rel="stylesheet">
    <link href="./css/styleMenu.css" rel="stylesheet">

    <style type="text/css">
        .metro .example:before,
        .metro .example:after {
          content: "";
        }
    </style>

    <!-- Load JavaScript Libraries -->
    <script src="./metro/js/jquery/jquery.min.js"></script>
    <script src="./metro/js/jquery/jquery.widget.min.js"></script>
    <script src="./metro/js/jquery/jquery.mousewheel.js"></script>
    <script src="./metro/js/prettify/prettify.js"></script>

    <title>InClass Assistant</title>
    <script src="./metro/min/metro.min.js"></script>
    
</head>
<body class="metro" cz-shortcut-listen="true">
<? include 'header.php'; ?>

<div class="ic-main-container">
    <div class="row">
         <!--<div class="span7 offset2">-->
         <div class="span6 offset4">
            
            <div class="example">
                <form>
                    <fieldset>
                        <legend>Iniciar Sesi&oacute;n</legend>
                        <label>Usuario</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="A0*******/L0*******" required="required" autofocus>
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                        <label>Contrase&ntilde;a</label>
                        <div class="input-control password" data-role="input-control">
                            <input type="password" placeholder="······" required="required">
                            <button class="btn-reveal" tabindex="-1"></button>
                        </div>

                        <div align="right">
                            <input type="submit" value="Submit" style="padding: 8px 12px;margin-top: 10px;">
                        </div>
                    </fieldset>
                </form>
            </div>
         </div>
     </div>
</div>
</body>
</html>