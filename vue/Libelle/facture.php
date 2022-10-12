<?php 
include __DIR__."/../navs/head.php";
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
<div class="offset-xl-2 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 padding mt-4">
<div class="card">
<div class="card-header p-4">
<a class="pt-2 d-inline-block" href="index.html" data-abc="true">The king</a>
<div class="float-right"> <h3 class="mb-0"></h3>
Date: <?= date("Y/m/d") ?></div>
</div>
<div class="card-body">
<div class="row mb-4">
</div>
<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>

<th>produit</th>
<th class="right">quantité</th>
<th class="right">sous-total</th>
</tr>
</thead>
<tbody>
<?php foreach($data as $commande) : ?>
<tr>

<td class="left strong text-uppercase"><?= $commande['nom'] ?></td>
<td class="right"><?= $commande['qty'] ?></td>
 <td class="right"> <?= $commande['qty'] * $commande['prix']?> fc</td>
 <?php $item_total += ($commande['prix']  * $commande['qty'] ); ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
<div class="card-footer bg-white">
<p class="mb-0"><span class="text-uppercase font-weight-bold">Total : <?= $item_total ?> fc</span></p>
</div>
</div>
</div>
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
