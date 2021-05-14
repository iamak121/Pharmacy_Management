<?php
    session_start();
    $sessionId = $_SESSION['id'] ?? '';
    $sessionRole = $_SESSION['role'] ?? '';
    if ( $sessionId && $sessionRole ) {
        header( "location:pharmacy.html" );
        die();
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="test.css">
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"> </script>

    <title></title>
  </head>
  <body>
    <section class="title">
    <div class="row main " style="height:100vh;">
      <div class="col-md-7 col-lg-7 left ak ">
        <h1 class=" ak ak1"> Welcome To PharmaCheck </h1>
      </div>
        <div class="col-md-5 col-lg-5 right animation a1">
          <div class="center  animation a2">
            <h1 class="center-h1  animation a8"> Login</h1>
             <form action="login_core.php" method="GET">
                 <div class="text_field  animation a3">

                      <label class="options">
                          <i id="left" class="fas fa-envelope left"></i>
                          <input type="text" name="email" placeholder="Email" required>
                          <span class="mid"> </span>

                      </label>

                 </div>
                 <div class="text_field  animation a4">

                      <label class="options">
                          <i id="left" class="fas fa-envelope left"></i>
                          <input type="password" name="password" placeholder="Password" required>

                      </label>
                 </div>
                 <div class="text_field  animation a5">
                  <label class="input options">
                      <i id="left" class="fas fa-male left"></i>
                      <select class="Select"name="role" id="Role">
                          <option value="admins">Admin</option>
                          <option value="managers">Manager</option>
                          <option value="pharmacists">Pharmacist</option>
                          <option value="salesmans">Salesman</option>
                      </select>
                  </label>
                 </div>

                 <input type="hidden" name="action" value="login">
                  <?php if ( isset( $_REQUEST['error'] ) ) {
                    echo "<h5 class='text-center' style='color:red;'>Email, Password & Role Doesn't match Or Something is Wrong</h5>";
                  }?>
                 <div class="  button  animation a6" >
                 <input class="btn btn-primary" type="submit" value="Submit">
                 </div>
             </form>
          </div>
        </div>
      </div>
    </section>






    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="./assets/js/app.js"></script>
</body>

</html>
