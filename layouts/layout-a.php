<?php require($_SERVER["DOCUMENT_ROOT"]."/inc/doctype.php"); ?>
<title>Layout A</title>
<?php require($_SERVER["DOCUMENT_ROOT"]."/inc/meta.php"); ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/inc/cssReference.php"); ?>
<style>
  .main { outline: 1px dotted rgba(126, 62, 104, 1); position: relative; }
  .main:after { position: absolute; top: -1em; left: -1em; padding: 10px; color: #fff; content: ".layout-a .main"; background: rgba(126, 62, 104, 0.7);}
</style>
</head>

<body class="layout-a">

  <?php require($_SERVER["DOCUMENT_ROOT"]."/inc/skip.php"); ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>


  <div class="content">
    <div class="wrap">

      <section class="main" role="main" id="skip">

        <h2><a href="">Layout A</a></h2>

        <p>Layout A has one .main container and spans the full width of the page</p>     

      </section>

    </div>
  </div>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>

</body>
</html>