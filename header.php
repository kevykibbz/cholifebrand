<?php include('php/user.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $user['site_name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="<?php echo $user['key_words'];?>" />
    <meta name="author" content="Devme" />
    <meta charset="utf-8">
    <meta name="theme-color" content="#FC427B">
    <meta name="msapplication-navbutton-color" content="#FC427B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FC427B">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="<?php echo $user['site_name'];?>">
    <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'] ?>/index.php">  
    <meta property="og:type" content="website"> 
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $user['site_name'];?> home">
    <meta property="og:description" content="<?php echo $user['site_name'];?> <?php echo $user['description'];?>.">
    <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME'] ?>/images/<?php echo $user['site_image'] ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <style type="text/css">
        #subscribeBtn:hover
        {
            background:#fff !important;
            color:#000;
            border:1px solid #000 !important;
            transition: 0.2s ease-in-out;
            cursor:pointer;
        }
        #loginBtn:hover
        {
            background:#fff !important;
            color:#e01656 !important;
            border:1px solid #ff;
            transition: 0.2s ease-in-out;
            cursor:pointer;
        }
    </style>
</head>
<body>
