<?php $base="../"; ?>
<?php require($base."/inc/doctype.php"); ?>
<title>Layout A</title>
<?php require($base."/inc/meta.php"); ?>
<!--[if lt IE 9]><script src="/a/j/html5shiv.js"></script><![endif]-->
<link href="../a/c/screen.css" rel="stylesheet" media="screen, projection" type="text/css" />
<link href="../a/c/print.css" rel="stylesheet" media="print" type="text/css" />
<style>
  .main { outline: 1px dotted rgba(126, 62, 104, 1); position: relative; }
  .main:after { position: absolute; top: -1em; left: -1em; padding: 10px; color: #fff; content: ".layout-a .main"; background: rgba(126, 62, 104, 0.7);}
</style>
</head>

<body class="layout-a">

  <?php require($base."/inc/skip.php"); ?>

  <?php require($base."/inc/header.php"); ?>


  <div class="content">
    <div class="wrap">

      <section class="main" role="main" id="skip">

        <h2><a href="">Layout A</a></h2>

        <p>Layout A has one .main container and spans the full width of the page</p>     

      </section>

    </div>
  </div>

  <?php require($base."/inc/footer.php"); ?>

  <?php require($base."/inc/jsReference.php"); ?>
  <script type="text/javascript" src="../a/j/plugins/detect.js"></script>
  <script type="text/javascript" src="../a/j/functions.js"></script>

</body>
</html>