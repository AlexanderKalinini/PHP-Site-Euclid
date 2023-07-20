<?php

$search = isset($_POST['search']) ? htmlspecialchars(trim($_POST['search'])) : '';

if (strlen($search) > 2) {
  echo highlight($search, 'php/site.php');
} else {
  include_once 'php/site.php';
}

function highlight(string $search, string $path)
{
  $site = file_get_contents($path);
  $site = preg_replace_callback(
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

  return str_replace("placeholder='Что будем искать?'", "value='$search'", $site);
}
