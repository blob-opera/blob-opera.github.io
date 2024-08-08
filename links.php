<?php
  #файл links.php в корневой папке

  $dir = './';
  $files = scandir($dir);

  function filter_html($link) {
    if (stripos($link, '.html')) {
      return true;
    }
  }

  $html_links = array_filter($files, 'filter_html');

  echo '<ul>';
  foreach ($html_links as $elem) {
    echo "<li><a href=\"$elem\" target=\"_blank\">$elem</a></li>";
  }
  echo '</ul>';
?>