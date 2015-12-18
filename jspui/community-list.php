<!DOCTYPE html>
<html>

<head>
  <title>New FDA: Communities and Collections</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="DSpace 5.0-rc3" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="static/css/jquery-ui-1.10.3.custom/redmond/jquery-ui-1.10.3.custom.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap-theme.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/nyu-fda.css" type="text/css" />
  <link rel="search" type="application/opensearchdescription+xml" href="open-search/description.xml" title="DSpace" />
  <script type='text/javascript' src="static/js/jquery/jquery-1.10.2.min.js"></script>
  <script type='text/javascript' src='static/js/jquery/jquery-ui-1.10.3.custom.min.js'></script>
  <script type='text/javascript' src='static/js/bootstrap/bootstrap.min.js'></script>
  <script type='text/javascript' src='static/js/holder.js'></script>
  <script type="text/javascript" src="utils.js"></script>
  <script type="text/javascript" src="static/js/choice-support.js">
  </script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/jspui/static/js/html5shiv.js"></script>
  <script src="/jspui/static/js/respond.min.js"></script>
<![endif]-->
</head>

<body class="undernavigation">
  <a class="sr-only" href="community-list.php#content">Skip navigation</a>
  <?php include "inc/header.php";  ?>
    <main id="content" role="main">
      <?php include "inc/containerbanner.php";  ?>
        <div class="container">
          <ol class="breadcrumb btn-success">
            <li><a href="index.php">FDA home</a></li>
            <li>Communities and Collections</li>
          </ol>
        </div>
        <div class="container">
          <h1>Communities and Collections</h1>
          <p>Shown below is a list of communities and the collections and sub-communities within them. Click on a name to view that community or collection home page.</p>
          <div class="fda-tree">
            <?php include "inc/communities.php";  ?>
          </div>
        </div>
    </main>
    <?php include "inc/footer.php";  ?>
</body>

</html>