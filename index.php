
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>

  <head>
    <meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.18.1), see www.w3.org">
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Welcome to E91</title>

    <!-- Google Analytics -->
    <script>
      window.ga = window.ga || function() {
        (ga.q = ga.q || []).push(arguments)
      };
      ga.l = +new Date;
      ga('create', 'UA-129315570-1', 'auto');

    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
  </head>

  <body>
    <header>
      <?php include 'navigation.html';?>
    </header>
    <main>
      <section>
        <article>
          <br />
          <br />

          <?php if (isset($_COOKIE['user'])) {
    ?>
            <h2 id="chart-title" class="center">Overall Progress</h2>
            <a href="detail.php"><img class="piechart" src="images/piechart.png"></a>
          <?php
} else {
        ?>
            <div id="user-not-logged-in" class="center">
              <h2>Welcome to Scribe</h2>
              <h3>Please <span id="login-link" onclick="document.getElementById('id01').style.display='block'">login</span> to view progress</h3>
              <img id="image_monk" src="images/scribe_monk.gif">
              <!-- image source https://medievaleurope.mrdonn.org/wh_scribe.gif -->
            </div>
          <?php
    } ?>
        </article>
      </section>
    </main>

    <footer>
      <?php include 'login.html';?>
      <?php include 'footer.html';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="events.js"></script>
    <script type="text/javascript" src="nav.js"></script>
  </body>

</html>
