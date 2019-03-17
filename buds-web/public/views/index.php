<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ****** favicons starts****** -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon//favicon-16x16.png">
    <link rel="manifest" href="assets/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  -->
    <!-- ****** favicons ends****** -->

    <title>Buds</title>
    <!-- jquery should be loaded first ele chart or ng view wont work -->
    
    <script src="js/libraries/jquery-3.3.1.min.js"></script>

    <!-- angular starts -->
    <script src="js/libraries/angular.min.js"></script>
    <script src="js/libraries/angular-route.min.js"></script>
    <script type="text/javascript" src="js/libraries/angular-cookies.js"></script>
    <!-- angular ends -->

    <!-- bootstrap starts -->
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="./../../js/libraries/bootstrap3.1.1.min.css" />
	<script data-require="ui-bootstrap@0.13.3" data-semver="0.13.3" src="./../../js/libraries/ui-bootstrap-tpls.min.js"></script>
    
    <script src="./../../js/libraries/angular-ui-grid/ui-grid.min.js"></script>
    
    <link rel="stylesheet" href="js/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="js/libraries/bootstrap.min.css">
    
    <!-- bootstarp ends -->
  
    <script src="js/index.js"></script>

    <!-- main controller -->
     <script src="js/controllers/appController.js"></script>
    <script src="js/services/appService.js"></script>


     <!-- aicte starts -->
     <script src="js/controllers/aicteController.js"></script>
     <script src="js/services/aicteService.js"></script>
     <!-- aicte ends -->

     <!-- student starts -->
     <script src="js/controllers/studentController.js"></script>
    <script src="js/services/studentService.js"></script>
     <!-- student ends -->

      <!-- committee starts -->
     <script src="js/controllers/committeeController.js"></script>
    <script src="js/services/committeeService.js"></script>
     <!-- committee ends -->

      <!-- principal starts -->
     <script src="js/controllers/principalController.js"></script>
    <script src="js/services/principalService.js"></script>
     <!-- principal ends -->

      <!-- ombudsman starts -->
     <script src="js/controllers/ombudsmanController.js"></script>
    <script src="js/services/ombudsmanService.js"></script>
     <!-- ombudsman ends -->

      <!-- vendor starts -->
     <script src="js/controllers/vendorController.js"></script>
    <script src="js/services/vendorService.js"></script>
     <!-- vendor ends -->
    

      
<script src="./../../js/libraries/highcharts.js"></script>
<script src="./../../js/libraries/exporting.js"></script>
<script src="./../../js/libraries/export-data.js"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/response.css">
    

    <!-- library section js -->
    
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>

    <!-- library section js ends -->
</head>
<body ng-app="grievancesystem">
    <div id="google_translate_element"></div>
      <script type="text/javascript">
         function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
         }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div ng-controller='appController'>
        <div ng-view></div>

        </div>
     </div>
    </div>
   
</body>

<div class="modal"><!-- Place at bottom of page --></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/questions.js"></script>
    <script src="js/scriptquiz.js"></script>
</html>


