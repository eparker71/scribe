<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>

  <head>
    <meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.18.1), see www.w3.org">
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Help Page</title>

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
          <a href="lic-detail.php"><div id="piechart" class="piechart"></div></a>
          <div id="piechart-admin" class="piechart"></div>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      // Load google charts
      google.charts.load('current', {
        'packages': ['corechart']
      });

      google.charts.setOnLoadCallback(drawChart);

      // Draw the chart and set the chart values
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Curent PDP\'s'],
          ['Completed', 7],
          ['Remaining', 3],
        ]);

        var admindata = google.visualization.arrayToDataTable([
          ['Task', 'Curent PDP\'s'],
          ['Completed', 2],
          ['Remaining', 8],
          // ['ESL', 8],
          // ['Effective schooling for students with disabilities', 2],
          // ['Electives', 4]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
          'title': 'Early Childhood Special Ed. License',
          'width': 400,
          'height': 288
        };
        var adminoptions = {
          'title': 'Administration License',
          'width': 400,
          'height': 288
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var adminchart = new google.visualization.PieChart(document.getElementById('piechart-admin'));

        chart.draw(data, options);
        adminchart.draw(admindata, adminoptions);

      }

    </script>
  </body>

</html>
