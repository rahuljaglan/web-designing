<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DOM</title>
    <script type="text/javascript">
      document.write("Rolling the dice 30 times <br><br>");
      for(var i=0;i<30;i++)
      {
        val=Math.floor(1+Math.random()*6);
        document.write(val+ " ");
      }
    </script>
  </head>
  <body>

  </body>
</html>