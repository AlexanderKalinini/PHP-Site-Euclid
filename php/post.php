<?php
// session_start();
if (isset($_POST['search'])) echo $_POST['search'];
if (isset($_POST['alex'])) {
  $a = $_POST['search'] ?? null;
  // $_SESSION['alex'] = $_POST['alex'];

  header("Content-Type': 'application/json");
  // $site = file_get_contents('php/site.php');
  // $search = htmlspecialchars($_POST['search']);
  echo json_encode($a);

  // file_put_contents(
  // 'php/site.php',
  // str_replace($search, "<span style='background-color:#ADFF2F'>$search</span>", $site)
  // );

}
