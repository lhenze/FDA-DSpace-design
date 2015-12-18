<!DOCTYPE html>
<html>

<head>
  <title>New FDA: Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="DSpace 5.0-rc3" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="static/css/jquery-ui-1.10.3.custom/redmond/jquery-ui-1.10.3.custom.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap-theme.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/dspace-theme.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/nyu-fda.css" type="text/css" />
  <link rel="alternate" type="application/rdf+xml" title="Items in FDA" href="feed/rss_1.0/site.rss" />
  <link rel="alternate" type="application/rss+xml" title="Items in FDA" href="feed/rss_2.0/site.rss" />
  <link rel="alternate" type="application/rss+xml" title="Items in FDA" href="feed/atom_1.0/site" />
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
  <script type="text/javascript">
  var jQ = jQuery.noConflict();
  jQ(document).ready(function() {
      jQ(".fda-tree li").each(function( index ) {
        if (jQ( this ).find( "ul" ).length ){
           jQ( this ).addClass("has-sublist");
          jQ( this ).find( "ul" ).hide();
          var ArrowElement = jQ( '<a class="arrow" href="#">+</a>');
          jQ( this ).prepend( ArrowElement );
          ArrowElement.click(function(event){
            event.preventDefault();
            openstate = jQ(this ).siblings( "ul" ).is(":visible");
            if (!openstate) {
              jQ( this ).text("-");
              jQ( this ).addClass("isOpen");
              jQ( this ).siblings( "ul" ).slideDown("fast", function(){});
            } else {
               jQ( this ).removeClass("isOpen");
              jQ( this ).siblings( "ul" ).slideUp("fast");
              jQ( this ).text("+");
            }
          });
        } else {
          jQ( this ).addClass("has-no-sublist");
        }
    });
  });
  </script>
</head>

<body class="undernavigation homepage">
  <a class="sr-only" href="index.php#content">Skip navigation</a>
  <?php include "inc/header.php";  ?>
    <main id="content" role="main">
      <?php include "inc/containerbanner.php";  ?>
        <div class="container banner">
          <div class="row">
            <div class="col-md-8 ">
              <div class="brand">
                <!-- <h3>Faculty Digital Archive</h3> -->
                <!--   <p><strong>What is the Faculty Digital Archive (FDA)?</strong><br />-->
                The Faculty Digital Archive (FDA) is a highly visible repository of NYU scholarship, allowing digital works—text, audio, video, data, and more—to be reliably shared and securely stored. Collections may be made freely available worldwide, offered to NYU only, or restricted to a specific group.</p>
                Full-time faculty may contribute their research—unpublished and, in many cases, published—in the FDA. Departments, centers, or institutes may use the FDA to distribute their working papers, technical reports, or other research material. <a href="http://www.nyu.edu/its/faculty/fda" class="readmore">Read more...</a></p>
              </div>
                <?php include "inc/carousel.php";  ?>
              <?php include "inc/simplesearchpanel.php";  ?>
                <div class="fda-tree">
                  <?php include "inc/communities.php";  ?>
                </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-primary homepagesearch">
                <div class="panel-heading">
                  <h1>Right hand nav</h1></div>
                <div class="panel-body">
                  sidebar content goes here
                </div>
              </div>
            </div> <!-- end col 4 -->
          </div> <!-- end col row  -->
        </div>
        
    </main>
    <?php include "inc/footer.php";  ?>
</body>

</html>