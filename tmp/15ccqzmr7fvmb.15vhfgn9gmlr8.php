<!DOCTYPE html>
<html>
   <head>
      <title><?= ($html_title) ?></title>
      <meta charset='utf8' />
      <?php echo $this->render('head.html',NULL,get_defined_vars(),0); ?>
   </head>
   <body>

      <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
   </body>
   <style>
      body {
         background-color: lightblue;
      }

      h1 {
         color: white;
         text-align: center;
      }

      p {
         font-family: verdana;
         font-size: 20px;
      }
   </style>
</html>
