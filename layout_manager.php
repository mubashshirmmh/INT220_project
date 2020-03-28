<?php
  function loginform(){
    echo "<form action='/project_php/validatelogin.php' method='POST'>
    <p>Username:</p>
    <input type='text' id='usernameinput' name='usernameinput' />
    <p>Password:</p>
    <input type='password' id='passwordinput' name='passwordinput' />
    <input type='submit' value='Login' />
    <button type='button' onclick='location.href=\"/project_php/register.html\";'>Register</button>
    </form>";
  }

  function logout(){
    echo nl2br("<p>Welcome ".$_SESSION['username']."\nLooking great today!</p>
        <form action='/project_php/logout.php' method='GET'>
        <input type='submit' value='logout' /></form>");
  }
?>