<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>
      nursery |
   </title>
   <? include 'assets/assets.php'; ?>
</head>
<div id="overlay">
   <div class="spinner"></div>
</div>
<!-- Top Button -->
<i id="topButton" class="icon icon-up3 over-top-i" style="opacity:0;"></i>
<!-- Top Button End -->

<body class="main">
   <? include 'modules/layouts/header.php'; ?>
   <main>
      <content class="content">
         <? include 'modules/headline.php'; ?>
         <? include 'modules/programs.php'; ?>
         <? include 'modules/values.php'; ?>
         <? include 'modules/events.php'; ?>
         <? include 'modules/classes.php'; ?>
         <? include 'modules/news.php'; ?>
         <? include 'modules/comments.php'; ?>
      </content>
   </main>
   <? include 'modules/layouts/footer.php';
   ?>
   <div id="closeToggle" style="display: none;"></div>
</body>

</html>