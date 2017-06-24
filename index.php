<?php
$page=$_GET["page"];
?>
<?=$page?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A minimal Markdown editor">
    <meta name="author" content="Amit Merchant">
    <link rel="icon" href="../../favicon.ico">

    <meta property="og:title" content="Markdownify" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.amitmerchant.com/electron-markdownify/" />
    <meta property="og:description" content="A minimal Markdown editor" />
    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Markdownify" />
    <meta name="twitter:description" content="A minimal Markdown editor" />
    <meta name="theme-color" content="#4CAF50">
    <title>Markdownify</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/gg.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/background.js"></script>
  <body>


<?php include("pages/".$page.".php");?>



  </body>
</html>
