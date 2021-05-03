<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPS Metadata</title>
    <meta name="author" content="Issac Goh">
    <meta content="Data collated for the publication Prenatal development and function of human mononuclear phagocytes" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<style>
#headLogo {
	text-align: center;
	padding-top: 1em;
}
#main_div {
    color: black;
    padding: 0px;
    text-align: center;
    height: 100%;
}


/* Dr selector menu */
.DRbtn {
background-color: #4CAF50;
color: white;
text-align: center;
font-size: 15px;
right:90%;
text-align: center;
width:100%;
border: 5px black;
height:20px;
z-index: 10000;
border-radius: 50px;
}

/* The container <div> - needed to position the dropdown content */
.DRdropdown {
position: dynamic;
right:90%;
width:20%;
top:15%;
display:block;
z-index: 100000;
border: 5px black;
}

/* Dropdown Content (Hidden by Default) */
.DRdropdown-content {
display: none;
position: dynamic;
    background-color: #f1f1f1;
    min-width: 100%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 10000;
}

/* Links inside the dropdown */
.DRdropdown-content a {
color: black;
padding: 12px 16px;
    text-decoration: none;
display: block;
    z-index: 10000;
}

/* Change color of dropdown links on hover */
.DRdropdown-content a:hover {background-color: #ddd;}                            
    /* Show the dropdown menu on hover */
.DRdropdown:hover .DRdropdown-content {display: block;}
.DRdropdown:hover  span {padding-right: 25px; width:60%;}                          
    /* Change the background color of the dropdown button when the dropdown content is shown */
.DRdropdown:hover .DRbtn {background-color: #3e8e41;}
                                                     
</style>
   
  <body>
    

<div id='main_div'>
<div id = "content">

</div>
    
    
    
    <div class="DRdropdown">
    <button class="DRbtn">Metadata</button>
    <div class="DRdropdown-content">
<?php
    $DRs = scandir('./metadata');
    foreach($DRs as $DR){
        if (is_numeric($DR)){
            sort($categories,1);
        }else{
            sort($categories,0);
        }
        
    }
    $DRs = (array)$DRs;
    foreach($DRs as $DR){
        $DR_file = $DR;
        $DR = str_replace(".html","",$DR);
        $DR = str_replace(".php","",$DR);
        $DR = str_replace(".csv","",$DR);
        if (($DR !== '.') && ($DR !=='..') && ($DR !=='categories') && ($DR !=='main')&& ($DR !=='.ipynb_checkpoints')) {
    ?>
      
<!--refresh page with new query string js -->
<script>
            function RefreshPage(queryString) {
                var newUrl = window.location.origin + window.location.pathname + "?csv=" + queryString;
                window.location.href = newUrl;
                return false;
            }
</script>
<a button type="button" name="sb" value="<?=$DR?>" onclick="RefreshPage('<?php echo $DR_file;?>')" target="csv_widget" ><?=$DR?></a></button>
<?php
    }
    }
    ?>
</div>
</div>   
        
<?php
    if (isset($_GET['csv'])){
    $csv_id = $_GET['csv'];
    }else{
    $csv_id = scandir("./metadata")[3];
    ?>
    <script>
    window.location.search += "?csv="+"<?php echo $csv_id;?>";
    </script>
    <?php
    }
    ?>
        
    <div class="container-fluid">

     <!-- // <h2>CSV to HTML Table</h2> -->

      
      <div id='table-container'></div>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.csv.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="js/csv_to_html_table.js"></script>


    <script type="text/javascript">
     function RefreshPage_celltype(queryString) {
             window.location.href = newUrl;
             var newUrl = window.location.origin + window.location.pathname + "?celltype=" + queryString;
             window.location.href = newUrl;
             return false;
      }
      function format_link(link){
        if (link)
          return "<a href='" + link + "' target='_blank'>" + link + "</a>";
        else
          return "";
      }
                          
      function process_link(link){
        if (link)
          return '<a href="" onclick="RefreshPage_celltype('+ link +')" class="buttons edit-button"><span class="fa fa-times-circle"></span>'+ link +'</a>';
        else
          return "";
      }

      CsvToHtmlTable.init({
        csv_path: "./metadata/<?php echo $csv_id; ?>",
        element: 'table-container', 
        allow_download: true,
        csv_options: {separator: ',', delimiter: '"'},
        datatables_options: {"paging": true},
        custom_formatting: [[6, format_link],[4, process_link]],
      });
    </script>

        
        
        
<!-- Bootstrap cytoscape -->
<div class="resizable" style="width: 100%; height: 1000px;">
  <iframe src="./network.php" style="width:100%; height:100%; border: 0;"></iframe>
</div>

<script>        
$(function() {
  $(".resizable").resizable({
    start: function(event, ui) {
      ui.element.append($("<div/>", {
        id: "iframe-barrier",
        css: {
          position: "absolute",
          top: 0,
          right: 0,
          bottom: 0,
          left: 0,
          "z-index": 10
        }
      }));
    },
    stop: function(event, ui) {
      $("#iframe-barrier", ui.element).remove();
    },
    resize: function(event, ui) {
      $("iframe", ui.element).width(ui.size.width).height(ui.size.height);
    }
  });
});
</script>                         
        
        
        
        
        
        
        
        
        
  </body>
</html>
     
        