<?php
require_once 'core/init.php';
$user = new User();
if(!$user->isLoggedIn()){
   Redirect::to('index.php');
}

$data= $user->data();
$file = "uploads/users/" . $data->username . '/' . $_REQUEST['filename'];


if (!unlink($file))
  {

	Session::flash('dash', '<div class=" alert alert-warning" role="alert">Error deleting : '.$_REQUEST['filename'] .'</div>');
	Redirect::to('documents.php');
 // echo ("Error deleting $file");
  }
else
  {

	Session::flash('dash', '<div class=" alert alert-success" role="alert">Deleted : ' . $_REQUEST['filename'] . '</div>');
	Redirect::to('documents.php');
 // echo ("Deleted $file");
  }


?>
