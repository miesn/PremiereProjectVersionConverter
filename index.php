<?php
  //By : FuHuayang 2019



?>



<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Adobe Premiere Project Version Converter</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <style>
            /*
      * Globals
      */

      /* Links */
      a,
      a:focus,
      a:hover {
        color: #fff;
      }

      /* Custom default button */
      .btn-default,
      .btn-default:hover,
      .btn-default:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: 1px solid #fff;
      }


      /*
      * Base structure
      */

      html,
      body {
        height: 100%;
        background-color: #333;
      }
      body {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
      }

      /* Extra markup and styles for table-esque vertical and horizontal centering */
      .site-wrapper {
        display: table;
        width: 100%;
        height: 100%; /* For at least Firefox */
        min-height: 100%;
        -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                box-shadow: inset 0 0 100px rgba(0,0,0,.5);
      }
      .site-wrapper-inner {
        display: table-cell;
        vertical-align: top;
      }
      .cover-container {
        margin-right: auto;
        margin-left: auto;
      }

      /* Padding for spacing */
      .inner {
        padding: 30px;
      }


      /*
      * Header
      */
      .masthead-brand {
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .masthead-nav > li {
        display: inline-block;
      }
      .masthead-nav > li + li {
        margin-left: 20px;
      }
      .masthead-nav > li > a {
        padding-right: 0;
        padding-left: 0;
        font-size: 16px;
        font-weight: bold;
        color: #fff; /* IE8 proofing */
        color: rgba(255,255,255,.75);
        border-bottom: 2px solid transparent;
      }
      .masthead-nav > li > a:hover,
      .masthead-nav > li > a:focus {
        background-color: transparent;
        border-bottom-color: #a9a9a9;
        border-bottom-color: rgba(255,255,255,.25);
      }
      .masthead-nav > .active > a,
      .masthead-nav > .active > a:hover,
      .masthead-nav > .active > a:focus {
        color: #fff;
        border-bottom-color: #fff;
      }

      @media (min-width: 768px) {
        .masthead-brand {
          float: left;
        }
        .masthead-nav {
          float: right;
        }
      }


      /*
      * Cover
      */

      .cover {
        padding: 0 20px;
      }
      .cover .btn-lg {
        padding: 10px 20px;
        font-weight: bold;
      }


      /*
      * Footer
      */

      .mastfoot {
        color: #999; /* IE8 proofing */
        color: rgba(255,255,255,.5);
      }


      /*
      * Affix and center
      */

      @media (min-width: 768px) {
        /* Pull out the header and footer */
        .masthead {
          position: fixed;
          top: 0;
        }
        .mastfoot {
          position: fixed;
          bottom: 0;
        }
        /* Start the vertical centering */
        .site-wrapper-inner {
          vertical-align: middle;
        }
        /* Handle the widths */
        .masthead,
        .mastfoot,
        .cover-container {
          width: 100%; /* Must be percentage or pixels for horizontal alignment */
        }
      }

      @media (min-width: 992px) {
        .masthead,
        .mastfoot,
        .cover-container {
          width: 700px;
        }
      }

    </style>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Adobe Premiere Project Version Converter</h3>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Upload and Download!</h1>
            <br/>
            <form>
              <p class="lead">
                <a href="#" class="btn btn-lg btn-default" onclick="uploadfile()">Upload</a>
              </p>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>. </p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<script>
  function uploadfile(){
    
  }
</script>
