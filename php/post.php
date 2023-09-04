<?php
include_once 'Database.php';


$message = $_POST['message'] ?? null;



if ($_SERVER['REQUEST_METHOD']  === "POST" && isset($_POST['user'])) {
  $db = new Database();
  $success = $db->insert(['user' => $_POST['user'], 'email' => $_POST['email'], 'message' => $_POST['message']]);
  if ($success) {

    header('Location: ?success=true');
  }
}
