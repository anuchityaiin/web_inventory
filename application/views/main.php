<!DOCTYPE html>
<html lang="en">
  <head>
    <? echo $header;?>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
                <samp><b><?=$username ?></b></samp>    <a href="submit/logout" class="navbar-link"><b class="label"><i class="icon-off"></i> Logout</b></a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                  <a  href="#about" id="drop1" role="button" class="dropdown-toggle" data-toggle="dropdown">Warehouse<b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop1" >
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                      <li role="presentation" ><a role="presentation" tabindex="-1">dd</a></li>
                  </ul>
              </li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid ">
      <div class="row-fluid">
        <div class="span2">
            <? echo $sidebar?>
        </div>
        <div class="span8">
          <? echo $container?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
          <p style="text-align: center;">&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
