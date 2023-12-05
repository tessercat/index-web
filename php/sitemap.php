<?php $ini_array = parse_ini_file("index.ini"); ?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <url><loc>https://<?php echo $ini_array["hostname"] ?>/</loc></url>
  <url><loc>https://<?php echo $ini_array["hostname"] ?>/marquee</loc></url>
  <url><loc>https://<?php echo $ini_array["hostname"] ?>/quotes</loc></url>
  <url><loc>https://<?php echo $ini_array["hostname"] ?>/note-to-self</loc></url>
  <url><loc>https://<?php echo $ini_array["hostname"] ?>/contact</loc></url>
</urlset>
