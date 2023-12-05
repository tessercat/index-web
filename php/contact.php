<?php $ini_array = parse_ini_file("index.ini"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="/static/css/index.css">
  </head>
  <body>
    <main>
      <section>
        <p>Contact <i>postmaster</i> at <i><?php echo $ini_array["hostname"] ?></i> by email.</p>
      </section>
   </main>
   <footer>
     <nav>
       <ul>
         <li><a href="/" title="Go to the index page">Home</a></li>
       </ul>
     </nav>
   </footer>
  </body>
</html>
