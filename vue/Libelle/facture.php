<?php 
include __DIR__."/../navs/header.php";
include __DIR__."/../../sanitalizer/command.php";

global $item_total;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/../../public/assets/css/adminlte.min.css" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div id="myPrintable">
        <div class="row">
          <div class="col-5">



            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> The king
                    <small class="float-right">Date: <?= date("Y/m/d") ?><br><span class=" text-sm"><?= date("h:i:s") ?> </span></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                  <br>
                  <b>Table:</b> <?= $data[0]['tname'] ?>J<br>
               
                 <br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Quantité</th>
                      <th>produit</th>
                      <th>prix unitaire</th>
                      <th>sous-total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $data){ ?>
                    <tr>
                      <td><?= $data['qty'] ?></td>
                      <td><?= $data['nom'] ?> </td>
                      <td><?= $data['prix']?> fc</td>
                      <td><?= $data['qty'] * $data['prix']?> fc</td>
                    </tr>
                    <?php
                  $item_total += ($data["prix"] * $data["qty"]);
                  } ?> 
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">


                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;"><i>merci de repasser chez pour en profiter
                  du bon moment</i>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
               

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">total:</th>
                        <td><?= $item_total?> fc </td>
                      </tr>

                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
<div>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button id="basic" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
$('#basic').on("click", function () {
$("#myPrintable").printThis({
    debug: false,               // show the iframe for debugging
    importCSS: true,            // import parent page css
    importStyle: true,         // import style tags
    printContainer: true,       // print outer container/$.selector
    loadCSS: "",                // path to additional css file - use an array [] for multiple
    pageTitle: "",              // add title to print page
    removeInline: false,        // remove inline styles from print elements
    removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
    printDelay: 333,            // variable print delay
    header: null,               // prefix to html
    footer: null,               // postfix to html
    base: false,                // preserve the BASE tag or accept a string for the URL
    formValues: true,           // preserve input/form values
    canvas: false,              // copy canvas content
    doctypeString: '...',       // enter a different doctype for older markup
    removeScripts: false,       // remove script tags from print content
    copyTagClasses: false,      // copy classes from the html & body tag
    beforePrintEvent: null,     // function for printEvent in iframe
    beforePrint: null,          // function called before iframe is filled
    afterPrint: null            // function called before iframe is removed
});
});

</script>
</body>
</html>
