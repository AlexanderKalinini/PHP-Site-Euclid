<?php

$search = isset($_POST['search']) ? htmlspecialchars(trim($_POST['search'])) : '';

if (strlen($search) >= 3) {

  function highlight(string $search, string $path)
  {
    $site = file_get_contents($path);

    return preg_replace_callback(
      "/>(.{3,})</Uusm",
      function (array $matches) use ($search) {


        $matches[0] = preg_replace(
          "/$search/um",
          "<span style='background-color:#ADFF2F'>$search</span>",
          $matches[0]
        );
        return $matches[0];
      },
      $site
    );
  }
  echo highlight($search, 'php/site.php');
  header('Location: index.php');
} else {
  include_once 'php/site.php';
}
