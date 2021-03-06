<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Age - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="dependency/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="dependency/js/jfu/css/jquery.fileupload.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="dependency/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dependency/vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dependency/vendor/device-mockups/device-mockups.min.css">
    <link href="dependency/css/dropzone.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="dependency/css/new-age.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top">
     <!-- jQuery -->
    <script src="dependency/vendor/jquery/jquery.min.js"></script>

    <?php echo $this->render($loadjavascript,$this->mime,get_defined_vars(),0); ?>

    <?php echo $this->render($content,$this->mime,get_defined_vars(),0); ?>
  

    <!-- Bootstrap Core JavaScript -->
    <script src="dependency/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="dependency/js/new-age.min.js"></script>

    
    

</body>

</html>
