<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
      <?php include 'navigation.php';?>
    </header>
    <main>
      <section>
        <article>
          <br />
          <br />
          <h2 id="chart-title">Overall Progress</h2>
          <img id="piechart" src="images/piechart.png" />
        </article>
      </section>
    </main>
    <footer>
      <?php include 'footer.php';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="events.js"></script>
    <script type="text/javascript" src="nav.js"></script>
    <?php include 'login.php';?>
  </body>

</html>
