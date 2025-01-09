<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body style="background-color: #F93827;">
    <nav class="navbar navbar-expand-lg bg-warning">
    <?php
      include_once "navbar.php";
    ?>
    </nav>

    <div class="container px-4 text-center mt-5">
      <?php
        include_once "menu.php"; 
      ?>
    </div>

    <div class="container mb-2 mt-5" id="about">
        <?php
          include_once "about.php";
        ?> 
    </div>
        <div class="container mb-4 mt-5" id="tim_kami">
         <?php
            include_once "tim.php";
         ?>
        </div>
    </div>

    <div class="container mb-2 mt-5" id="testimoni">
    <?php
      include_once "testimoni.php";
    ?>
</div>
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php include_once "footer.php"; ?>
            </div>
        </div>
    </div>
</footer>
    <script
      src="js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
