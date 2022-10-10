<?php
use \models\structure;
$structure = new structure;
if(!isset($_SESSION['role'])){
   header("location:".$structure->redirect['domaine']."/login");  
}
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>king pro</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />


  <link rel="stylesheet" href="/../../public/vendors/feather/feather.css">
  <link rel="stylesheet" href="/../../public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/../../public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/../../public/css/vertical-layout-light/style.css">

  <script>
    // jQuery(document).ready(function($){
    //     $("a").click(function(event){
    //         link = $(this).attr("href");
    //         $.ajax({
    //           url : link,
    //         }).done(function(html){
    //           $("#page").empty().append(html);
    //         }).fail(function(){
    //           console.log('erreur de traitement');
    //         }).always(function(){
    //           console.log("completed");
    //         });
    //         return false;
    //     });
    // });
  </script>

  </head>
