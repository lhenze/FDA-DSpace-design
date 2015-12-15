<!DOCTYPE html>
<html>

<head>
  <title>FDA: Search</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="Generator" content="DSpace 5.0-rc3" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="static/css/jquery-ui-1.10.3.custom/redmond/jquery-ui-1.10.3.custom.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/bootstrap-theme.min.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/dspace-theme.css" type="text/css" />
  <link rel="stylesheet" href="static/css/bootstrap/nyu-fda.css" type="text/css" />
  <link rel="search" type="application/opensearchdescription+xml" href="open-search/description.xml" title="DSpace" />
  <script type='text/javascript' src="static/js/jquery/jquery-1.10.2.min.js"></script>
  <script type='text/javascript' src='static/js/jquery/jquery-ui-1.10.3.custom.min.js'></script>
  <script type='text/javascript' src='static/js/bootstrap/bootstrap.min.js'></script>
  <script type='text/javascript' src='static/js/holder.js'></script>
  <script type="text/javascript" src="utils.js"></script>
  <script type="text/javascript" src="static/js/choice-support.js"></script>

  <script type="text/javascript">
  var jQ = jQuery.noConflict();
  jQ(document).ready(function() {

    jQ("#addafilter-link").click(function(e) {
      console.log("clicked");
      e.preventDefault();
      openstate = jQ(".discovery-search-filters").is(":visible");
      if (!openstate) {
        jQ(".discovery-query").addClass("open");
        jQ(".discovery-search-filters").slideDown("fast", function() {
          console.log("1 animation done");
          
        });
      } else {
        jQ(".discovery-query").removeClass("open");
        jQ(".discovery-search-filters").slideUp("fast", function() {
          console.log("2 animation done");
        
        });
      }


    });


    jQ("#spellCheckQuery").click(function() {
      jQ("#query").val(jQ(this).attr('data-spell'));
      jQ("#main-query-submit").click();
    });
    jQ("#filterquery")
      .autocomplete({
        source: function(request, response) {
          jQ.ajax({
            url: "/jspui/json/discovery/autocomplete?query=&filter_field_1=author&filter_type_1=equals&filter_value_1=Collins%2C+Chris",
            dataType: "json",
            cache: false,
            data: {
              auto_idx: jQ("#filtername").val(),
              auto_query: request.term,
              auto_sort: 'count',
              auto_type: jQ("#filtertype").val(),
              location: ''
            },
            success: function(data) {
              response(jQ.map(data.autocomplete, function(item) {
                var tmp_val = item.authorityKey;
                if (tmp_val == null || tmp_val == '') {
                  tmp_val = item.displayedValue;
                }
                return {
                  label: item.displayedValue + " (" + item.count + ")",
                  value: tmp_val
                };
              }))
            }
          })
        }
      });
  });

  function validateFilters() {
    return document.getElementById("filterquery").value.length > 0;
  }
  </script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/jspui/static/js/html5shiv.js"></script>
  <script src="/jspui/static/js/respond.min.js"></script>
<![endif]-->
</head>

<body class="undernavigation">
  <a class="sr-only" href="simple-search-filterquery=Collins,+Chris&amp;filtername=author&amp;filtertype=equals.html#content">Skip navigation</a>
  <?php include "inc/header.php";  ?>
    <main id="content" role="main">
      <?php include "inc/containerbanner.php";  ?>
        <div class="container">
          <ol class="breadcrumb btn-success">
            <li><a href="index.php">Faculty Digital Archive</a></li>
          </ol>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2>Search</h2>
              <div class="discovery-search-form panel panel-default">
                <div class="discovery-query panel-heading-xx panel-body">
                  <form action="simple-search" method="get">
                    <div class="form-group-flex">
                      <div class="form-flex-item item-label">
                        <label for="tlocation">
                          Find in:
                        </label>
                      </div>
                      <div class="form-flex-item">
                        <select name="location" id="tlocation">
                          <option selected="selected" value="/">All of Faculty Digital Archive</option>
                          <option value="2451/14814">
                            Arts and Science</option>
                          <option value="2451/14855">
                            College of Dentistry</option>
                          <option value="2451/31735">
                            College of Nursing</option>
                          <option value="2451/14821">
                            Division of Libraries</option>
                          <option value="2451/28471">
                            Gallatin School of Individualized Study</option>
                          <option value="2451/31536">
                            Global Technology Services</option>
                          <option value="2451/25880">
                            Institute for the Study of the Ancient World</option>
                          <option value="2451/29899">
                            Institute of Fine Arts</option>
                          <option value="2451/14950">
                            Law School</option>
                          <option value="2451/28333">
                            NET Institute</option>
                          <option value="2451/28044">
                            NYU School of Medicine</option>
                          <option value="2451/23576">
                            School of Continuing and Professional Studies</option>
                          <option value="2451/23572">
                            School of Social Work</option>
                          <option value="2451/15029">
                            Steinhardt School of Culture, Education, and Human Development</option>
                          <option value="2451/14088">
                            Stern School of Business</option>
                          <option value="2451/14850">
                            Tisch School of the Arts</option>
                        </select>
                        <input type="hidden" value="10" name="rpp" />
                        <input type="hidden" value="score" name="sort_by" />
                        <input type="hidden" value="desc" name="order" />
                      </div>
                    </div>
                    <div class="form-group-flex">
                      <!--     <div class="discovery-search-appliedFilters-xx"> -->
                      <div class="form-flex-item item-label">
                        <label>Items where</label>
                      </div>
                      <div class="form-flex-item">
                        <select id="filter_field_1" name="filter_field_1">
                          <option value="title">Title</option>
                          <option value="author" selected="selected">Author</option>
                          <option value="subject">Subject</option>
                          <option value="dateIssued">Date Issued</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <select id="filter_type_1" name="filter_type_1">
                          <option value="equals" selected="selected">Equals</option>
                          <option value="contains">Contains</option>
                          <option value="authority">ID</option>
                          <option value="notequals">Not Equals</option>
                          <option value="notcontains">Not Contains</option>
                          <option value="notauthority">Not ID</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <input type="text" id="filter_value_1" name="filter_value_1" value="Collins, Chris" />
                      </div>
                      <!--  <div class="form-flex-item small-button">
                        <input class="btn btn-default" type="submit" id="submit_filter_remove_1" name="submit_filter_remove_1" value="X" />
                      </div> -->
                      <div class="form-flex-item">
                        <!-- <a class="btn btn-default" href="http://msdlib.home.nyu.edu/jspui/simple-search">Start a new search</a> -->
                        <input type="submit" id="main-query-submit" class="btn btn-primary" value="Go" />
                      </div>
                      <!-- </div> -->
                    </div>
                  </form>
                  <a id="addafilter-link" class="interface-link" href="#">+ Add a filter</a>
                </div>
                <div class="discovery-search-filters panel-body">
                  <form action="simple-search" method="get">
                    <div class="form-group-flex">
                      <div class="form-flex-item">
                        <label>And:</label>
                        <!--  <p class="discovery-search-filters-hint">Use filters to refine the search results.</p> -->
                      </div>
                      <div class="form-flex-item">
                        <input type="hidden" value="" name="location" />
                        <input type="hidden" value="" name="query" />
                        <input type="hidden" id="filter_field_1" name="filter_field_1" value="author" />
                        <input type="hidden" id="filter_type_1" name="filter_type_1" value="equals" />
                        <input type="hidden" id="filter_value_1" name="filter_value_1" value="Collins, Chris" />
                        <select id="filtername" name="filtername">
                          <option value="title">Title</option>
                          <option value="author">Author</option>
                          <option value="subject">Subject</option>
                          <option value="dateIssued">Date Issued</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <select id="filtertype" name="filtertype">
                          <option value="equals">Equals</option>
                          <option value="contains">Contains</option>
                          <option value="authority">ID</option>
                          <option value="notequals">Not Equals</option>
                          <option value="notcontains">Not Contains</option>
                          <option value="notauthority">Not ID</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <input type="text" id="filterquery" name="filterquery" required="required" />
                        <input type="hidden" value="10" name="rpp" />
                        <input type="hidden" value="score" name="sort_by" />
                        <input type="hidden" value="desc" name="order" />
                        <input class="btn btn-default" type="submit" value="Add Filters" onclick="return validateFilters()" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="discovery-result-pagination row container">
                <h2>Results 1-10 of 73</h2>
                <!-- give a content to the div -->
                <div class="discovery-pagination-controls panel-footer-xx">
                  <form action="simple-search" method="get">
                    <div class="form-group-flex">
                      <div class="form-flex-item">
                        <input type="hidden" value="" name="location" />
                        <input type="hidden" value="" name="query" />
                        <input type="hidden" id="filter_field_1" name="filter_field_1" value="author" />
                        <input type="hidden" id="filter_type_1" name="filter_type_1" value="equals" />
                        <input type="hidden" id="filter_value_1" name="filter_value_1" value="Collins, Chris" />
                        <label for="rpp">Results/Page</label>
                        <select name="rpp">
                          <option value="5">5</option>
                          <option value="10" selected="selected">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="35">35</option>
                          <option value="40">40</option>
                          <option value="45">45</option>
                          <option value="50">50</option>
                          <option value="55">55</option>
                          <option value="60">60</option>
                          <option value="65">65</option>
                          <option value="70">70</option>
                          <option value="75">75</option>
                          <option value="80">80</option>
                          <option value="85">85</option>
                          <option value="90">90</option>
                          <option value="95">95</option>
                          <option value="100">100</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <label for="sort_by">Sort items by</label>
                        <select name="sort_by">
                          <option value="score">Relevance</option>
                          <option value="dc.title_sort">Title</option>
                          <option value="dc.date.issued_dt">Issue Date</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <label for="order">In order</label>
                        <select name="order">
                          <option value="ASC">Ascending</option>
                          <option value="DESC" selected="selected">Descending</option>
                        </select>
                      </div>
                      <div class="form-flex-item">
                        <label for="etal">Authors/record</label>
                        <select name="etal">
                          <option value="0" selected="selected">All</option>
                          <option value="1">1</option>
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="35">35</option>
                          <option value="40">40</option>
                          <option value="45">45</option>
                          <option value="50">50</option>
                        </select>
                      </div>
                      <div class="form-flex-item small-button">
                        <input class="btn btn-default" type="submit" name="submit_search" value="Update" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="discovery-result-results">
                <div class="panel panel-info">
                  <!--    <div class="panel-heading">Item hits:</div> -->
                  <table align="center" class="table" summary="This table browses all dspace content">
                    <colgroup>
                      <col width="130" />
                      <col width="60%" />
                      <col width="40%" />
                    </colgroup>
                    <tr>
                      <th id="t1" class="oddRowEvenCol">Issue Date</th>
                      <th id="t2" class="oddRowOddCol">Title</th>
                      <th id="t3" class="oddRowEvenCol">Author(s)</th>
                    </tr>
                    <tr>
                      <td headers="t1" class="evenRowEvenCol" nowrap="nowrap" align="right">20-Aug-2010</td>
                      <td headers="t2" class="evenRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29761">2007-06-27</a></td>
                      <td headers="t3" class="evenRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="oddRowEvenCol" nowrap="nowrap" align="right">20-Aug-2010</td>
                      <td headers="t2" class="oddRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29762">2007-06-28</a></td>
                      <td headers="t3" class="oddRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="evenRowEvenCol" nowrap="nowrap" align="right">10-Nov-2010</td>
                      <td headers="t2" class="evenRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29857">N|uu&#x20;Stories</a></td>
                      <td headers="t3" class="evenRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="oddRowEvenCol" nowrap="nowrap" align="right">20-Aug-2010</td>
                      <td headers="t2" class="oddRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29763">2007-06-29</a></td>
                      <td headers="t3" class="oddRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="evenRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="evenRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29692">2004-05-18</a></td>
                      <td headers="t3" class="evenRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="oddRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="oddRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29695">2004-05-21</a></td>
                      <td headers="t3" class="oddRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="evenRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="evenRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29693">2004-05-19</a></td>
                      <td headers="t3" class="evenRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="oddRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="oddRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29694">2004-05-20</a></td>
                      <td headers="t3" class="oddRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="evenRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="evenRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29696">2004-05-24</a></td>
                      <td headers="t3" class="evenRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                    <tr>
                      <td headers="t1" class="oddRowEvenCol" nowrap="nowrap" align="right">19-Aug-2010</td>
                      <td headers="t2" class="oddRowOddCol"><a href="http://msdlib.home.nyu.edu/jspui/handle/2451/29708">2004-06-07</a></td>
                      <td headers="t3" class="oddRowEvenCol"><em><a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Collins%2C+Chris">Collins,&#x20;Chris</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=Namaseb%2C+Levi">Namaseb,&#x20;Levi</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a>; <a href="http://msdlib.home.nyu.edu/jspui/browse?type=author&amp;value=x">x</a></em></td>
                    </tr>
                  </table>
                  <ul class="pagination pull-right">
                    <li class="disabled"><span>previous</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;etal=0&amp;start=10">2</a></li>
                    <li><a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;etal=0&amp;start=20">3</a></li>
                    <li><a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;etal=0&amp;start=30">4</a></li>
                    <li class="disabled"><span>...</span></li>
                    <li><a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;etal=0&amp;start=70">8</a></li>
                    <li><a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;etal=0&amp;start=10">next</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h3 class="facets">Discover</h3>
              <div id="facets" class="facetsBox">
                <div id="facet_author" class="panel panel-success-xx panel-default">
                  <div class="panel-heading">Author</div>
                  <ul class="list-group">
                    <li class="list-group-item"><span class="badge">72</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=author&amp;filterquery=Namaseb%2C+Levi&amp;filtertype=equals" title="Filter by Namaseb, Levi">
                Namaseb, Levi</a></li>
                    <li class="list-group-item"><span class="badge">1</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=author&amp;filterquery=Schechner%2C+Richard&amp;filtertype=equals" title="Filter by Schechner, Richard">
                Schechner, Richard</a></li>
                  </ul>
                </div>
                <div id="facet_subject" class="panel panel-default">
                  <div class="panel-heading">Subject</div>
                  <ul class="list-group">
                    <li class="list-group-item"><span class="badge">70</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=subject&amp;filterquery=x&amp;filtertype=equals" title="Filter by x">
                x</a></li>
                    <li class="list-group-item"><span class="badge">1</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=subject&amp;filterquery=Compounds&amp;filtertype=equals" title="Filter by Compounds">
                Compounds</a></li>
                    <li class="list-group-item"><span class="badge">1</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=subject&amp;filterquery=Stories&amp;filtertype=equals" title="Filter by Stories">
                Stories</a></li>
                  </ul>
                </div>
                <div id="facet_dateIssued" class="panel panel-default">
                  <div class="panel-heading">Date issued</div>
                  <ul class="list-group">
                    <li class="list-group-item"><span class="badge">73</span> <a href="http://msdlib.home.nyu.edu/jspui/simple-search?query=&amp;sort_by=score&amp;order=desc&amp;rpp=10&amp;filter_field_1=author&amp;filter_type_1=equals&amp;filter_value_1=Collins%2C+Chris&amp;etal=0&amp;filtername=dateIssued&amp;filterquery=2010&amp;filtertype=equals" title="Filter by 2010">
                2010</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <?php include "inc/footer.php";  ?>
</body>

</html>