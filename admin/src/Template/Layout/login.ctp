<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        
        echo $this->Html->meta(array(
            'viewport'  => 'width=device-width, initial-scale=1.0'
        ));
        
        echo $this->Html->css(array(
            'bootstrap.min',
            'bootstrap-reset',
            'font-awesome',
            'style',
            'style-responsive'
        ));
        
        echo $this->Html->script(array(
            'jquery',
            'bootstrap.min',
        ));
        
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
    <div class="container">
    <?php
        echo $this->fetch('content'); 
    ?> 
    </div>
</body>
</html>
