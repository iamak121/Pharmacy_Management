
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <!--  font awesome-->
    <script src="https://kit.fontawesome.com/1d96a7e5d4.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="addSalesman">
                                                <div class="main__form">
                                                        <div class="main__form--title text-center">Add New Medicine</div>
                                                        <form action="show1.php" method="post">
                                                                <div class="form-row">
                                                                        <div class="col col-12">
                                                                                <label class="input">
                                                                                        <i id="left" class="fas fa-user-circle"></i>
                                                                                        <input type="text" name="m_name" placeholder="Medicine Name" required>
                                                                                </label>
                                                                        </div>
                                                                        <div class="col col-12">
                                                                                <label class="input">
                                                                                        <i id="left" class="fas fa-envelope"></i>
                                                                                        <input type="number" name="m_price" placeholder="Price" required>
                                                                                </label>
                                                                        </div>
                                                                        <div class="col col-12">
                                                                                <label class="input">
                                                                                        <i id="left" class="fas fa-phone-alt"></i>
                                                                                        <input type="text" name="m_manufacturer" placeholder="Manufacturer" required>
                                                                                </label>
                                                                        </div>
                                                                        <div class="col col-12">
                                                                                <label class="input">
                                                                                        <i id="left" class="fas fa-capsules"></i>
                                                                                        <input type="date" name="m_expiry" placeholder="Exp-date" required>
                                                                                </label>
                                                                        </div>



                                                                        <div class="col col-12">
                                                                                <input type="submit" value="Submit">
                                                                        </div>
                                                                </div>
                                                        </form>
                                                </div>

                                        </div>

    </div>



</body>
</html>