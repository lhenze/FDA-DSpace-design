<!DOCTYPE html>
<html>

<head>
  <title>New FDA: Arts and Science</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="DSpace 5.0-rc3" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../../static/css/jquery-ui-1.10.3.custom/redmond/jquery-ui-1.10.3.custom.css" type="text/css" />
  <link rel="stylesheet" href="../../static/css/bootstrap/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="../../static/css/bootstrap/bootstrap-theme.min.css" type="text/css" />
  <link rel="stylesheet" href="../../static/css/bootstrap/nyu-fda.css" type="text/css" />
  <link rel="alternate" type="application/rdf+xml" title="Items in Community" href="http://msdlib.home.nyu.edu/ux/fda/feed/rss_1.0/2451/14814" />
  <link rel="alternate" type="application/rss+xml" title="Items in Community" href="http://msdlib.home.nyu.edu/ux/fda/feed/rss_2.0/2451/14814" />
  <link rel="alternate" type="application/rss+xml" title="Items in Community" href="http://msdlib.home.nyu.edu/ux/fda/feed/atom_1.0/2451/14814" />
  <link rel="search" type="application/opensearchdescription+xml" href="../../open-search/description.xml" title="DSpace" />
  <script type='text/javascript' src="../../static/js/jquery/jquery-1.10.2.min.js"></script>
  <script type='text/javascript' src='../../static/js/jquery/jquery-ui-1.10.3.custom.min.js'></script>
  <script type='text/javascript' src='../../static/js/bootstrap/bootstrap.min.js'></script>
  <script type='text/javascript' src='../../static/js/holder.js'></script>
  <script type="text/javascript" src="../../utils.js"></script>
  <script type="text/javascript" src="../../static/js/choice-support.js">
  </script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/ux/fda/static/js/html5shiv.js"></script>
  <script src="/ux/fda/static/js/respond.min.js"></script>
<![endif]-->
  <script type="text/javascript">
  var jQ = jQuery.noConflict();
  jQ(document).ready(function() {
    jQ(".fda-tree li").each(function(index) {
      if (jQ(this).find("ul").length) {
        jQ(this).addClass("has-sublist");
        jQ(this).find("ul").hide();
        var ArrowElement = jQ('<a class="arrow" href="#">+</a>');
        jQ(this).prepend(ArrowElement);
        ArrowElement.click(function(event) {
          event.preventDefault();
          openstate = jQ(this).siblings("ul").is(":visible");
          if (!openstate) {
            jQ(this).text("-");
            jQ(this).addClass("isOpen");
            jQ(this).siblings("ul").slideDown("fast", function() {});
          } else {
            jQ(this).removeClass("isOpen");
            jQ(this).siblings("ul").slideUp("fast");
            jQ(this).text("+");
          }
        });
      } else {
        jQ(this).addClass("has-no-sublist");
      }
    });
  });
  </script>
</head>

<body class="undernavigation">
  <a class="sr-only" href="14814.html#content">Skip navigation</a>
  <?php include "../../inc/header.php";  ?>
    <main id="content" role="main">
      <?php include "../../inc/containerbanner.php";  ?>
        <div class="container">
          <ol class="breadcrumb btn-success">
            <li><a href="../../index.php">Faculty Digital Archive</a></li>
            <li><a href="../../community-list.php">Communities and Collections</a></li>
            <li>Arts and Science</li>
          </ol>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="page-title-area">
                <h2>Arts and Science <small>Community home page</small>  </h2>
              </div>
              <?php include "../../inc/searchcommunity.php";  ?>
                <section class="collections-list">
                  <h3>Collections and sub-communities</h3>
                  <div class="fda-tree">
                    <?php include "../../inc/collectionsincommunity.php";  ?>
                  </div>
                </section>
            </div>
            <div class="col-md-4">
              &nbsp;
            </div>
          </div>
        </div>
    </main>
    <?php include "../../inc/footer.php";  ?>
</body>

</html>