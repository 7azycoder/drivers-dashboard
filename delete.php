<?php
require_once 'core/init.php';
$user = new User();
if(!$user->isLoggedIn()){
   Redirect::to('index.php');
}

$data= $user->data();
$file = "uploads/" . $data->username . '/' . $_REQUEST['filename'];

if (!unlink($file))
  {

	Session::flash('home', '<div class=" alert alert-success" role="alert">Error deleting : '.$_REQUEST['filename'] .'</div>');
	Redirect::to('documents.php');
 // echo ("Error deleting $file");
  }
else
  {

	Session::flash('home', '<div class=" alert alert-success" role="alert">Deleted : ' . $_REQUEST['filename'] . '</div>');
	Redirect::to('documents.php');
 // echo ("Deleted $file");
  }
?>
