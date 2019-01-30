<?php

var_dump($_POST);
include_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  session_start();

  $postEmail= isset($_POST['email']) ? $_POST['email']: "";
  $postPassword= isset($_POST['password']) ? $_POST['password']: "";

  //Nooit zo effectief doen, nu wel omdat we geen database hebben
  //STAP1
  // $username="admin@site.be";
  // $password="password";

  //STAP2
  $user= array(
    array('admin@site.be','password'),
    array('hulshagen@msn.com','mijnwachtwoord')
  );

  //STAP1
  // if($postEmail===$username && $postPassword === $password){
  //   //relocator is een eigen functie zie functions.php
  //   relocator("welkom.php");
  // }elseif($postEmail===$username){
  //   $_SESSION['status'] = array("failed","Password incorrect!");
  //   relocator("index.php");
  // }elseif($postPassword === $password){
  //   $_SESSION['status'] = array("failed","Username incorrect!");
  //   relocator("index.php");
  // }else{
  //   relocator("index.php");
  // }

  //STAP2
  foreach($user as $key => $value){
    // foreach ($userNameContent as $userPassword => $userPasswordContent) {

      if($postEmail===$value[0] && $postPassword === $value[1]){
        //relocator is een eigen functie zie functions.php
        relocator("welkom.php");
        // echo 'Dit is volledig juist';
      }

      if($postEmail===$value[0]){
        $_SESSION['status'] = array("failed","Password incorrect!");
        relocator("index.php");
        // echo 'Deze gebruikersnaam is volledig juist';
      }

      if($postPassword === $value[1]){
        $_SESSION['status'] = array("failed","Username incorrect!");
        // echo 'Dit paswoord volledig juist';
        relocator("index.php");
      }

      // if($postEmail===$userNameFinal && $postPassword === $userPasswordFinal){
      //   //relocator is een eigen functie zie functions.php
      //   // relocator("welkom.php");
      //   echo 'Dit is volledig juist';
      // }elseif($postEmail===$userNameFinal){
      //   $_SESSION['status'] = array("failed","Password incorrect!");
      //   // relocator("index.php");
      //   echo 'Deze gebruikersnaam is volledig juist';
      // }elseif($postPassword === $userPasswordFinal){
      //   $_SESSION['status'] = array("failed","Username incorrect!");
      //   echo 'Dit paswoord volledig juist';
      //   // relocator("index.php");
      // }else{
      //   //relocator("index.php");
      // }

    // }
  }

}

/*
foreach($variable as $key => $value){

  #code
}*/


// header("Location: index.php");


// relocator("index.php");
