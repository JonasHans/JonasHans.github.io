<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Alaska Unlimited</title>

    <link rel="stylesheet" href="main.css">
  </head>

  <body>

  <?php 
    $page = "home.html";
  ?>

    <nav>
      <ul>
        <li>
            <a href="#">Home</a>
            <?php 
              $page = "home.html";
            ?>
        </li>
        <li>
            <a href="#">Inf0</a>
        </li>
        <li>
            <a href="#">Info2</a>
        </li>
        <li>
            <a href="#">info3</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
      </ul>
    </nav>

    <?php include $page; ?>

    <footer id="grad">
        <!-- First part of the footer -->
      <div id="list_footer">
        <!-- Left part of the footer; contains the link to about-->
        <div id="foot_about">
          <a class="nodec" href="/about.php">About
          </a>
        </div>

        <!-- Right part of the footer; contains the link to contact -->
        <div id="foot_contact">
          <a class="nodec" href="/contact/contact.php">Contact us</a>
        </div>        
      </div>
      <!-- Second part of footer -->
      <div id="list_under">
        <!-- div contains names -->
        <div id="foot_names">
          <p class="fmiddle">Henry Kalb & Flip Jan van Oenen</p>
        </div>
        <!-- div contains year -->
        <div id="foot_year">
          <p class="fmiddle">2014</p>
        </div>
      </div>
    </footer>    

  </body>

</html>
