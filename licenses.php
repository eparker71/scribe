<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

  <head>
    <meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.18.1), see www.w3.org">
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="w3.css">
    <title>License Page</title>

    <!-- Google Analytics -->
    <script>
      window.ga = window.ga || function() {
        (ga.q = ga.q || []).push(arguments)
      };
      ga.l = +new Date;
      ga('create', 'UA-129315570-1', 'auto');
      ga('send', 'pageview');

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
          <h3>Manage your licenses</h3>
          <div id="license-container">

            <div class="card license-card">
              <p class="lic-name">
                <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
                Early Childhood Special Ed.</p>
              <div class="container">
                <p>Valid until Sept. 28th, 2020 </p>
              </div>
            </div>

            <!--  start add card -->
            <div class="card license-card add-card">
              <p class="lic-name">
                <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
                Add New License</p>
              <br />
              <div class="container">
                <span onclick="console.log('hello');document.getElementById('addlic').style.display='block'"><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></i>
                </span>
              </div>
            </div>
            <!--  end add card -->

          </div>
        </article>
      </section>
    </main>
    <footer>
      <?php include 'footer.html';?>
      <?php include 'modal_form.html';?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="events.js"></script>
    <script type="text/javascript" src="nav.js"></script>
    <?php include 'login.php';?>
  </body>

</html>
