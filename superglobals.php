<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super globals</title>
</head>
<body>
    <ul>
        <li>HOST: <?php echo $_SERVER ['HTTP_HOST']; ?></li>
        <li>Document Root:<?php echo $_SERVER ['DOCUMENT_ROOT'];?></li>  
        <LI>Server Name:<?php echo $_SERVER ['SERVER_NAME'];?></LI>
        <LI>Server computer:<?php echo $_SERVER ['SERVER_PORT'];?></LI>
        <li>Current File:<?php echo $_SERVER ['PHP_SELF'];?></li>
        <LI>Request URI:<?php echo $_SERVER ['REQUEST_URI'];?></LI>
        <LI>Server Software:<?php echo $_SERVER ['SERVER_SOFTWARE'];?></LI>
        <li>Client Information:<?php echo $_SERVER ['HTTP_USER_AGENT'];?></li>
        <LI>Remote Address:<?php echo $_SERVER ['REMOTE_ADDR'];?></LI>
        <li>Remote Port:<?php echo $_SERVER ['REMOTE_PORT'];?></li>

    </ul>
</body>
</html> 