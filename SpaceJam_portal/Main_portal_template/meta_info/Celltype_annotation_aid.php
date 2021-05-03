<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>


#meta_table {
position:absolute;
top:6%;
z-index: 100
}



/* Dr selector menu */
.DRbtn {
background-color: #4CAF50;
color: white;
text-align: center;
font-size: 15px;
left:0%;
text-align: center;
width:100%;
border: 5px black;
height:20px;
z-index: 10000;
border-radius: 50px;
}

/* The container <div> - needed to position the dropdown content */
.DRdropdown {
position: fixed;
left:1%;
width:40%;
top:0%;
display:block;
z-index: 100000;
border: 5px black;
}

/* Dropdown Content (Hidden by Default) */
.DRdropdown-content {
display: none;
position: absolute;
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
    /* Change the background color of the dropdown button when the dropdown content is shown */
.DRdropdown:hover .DRbtn {background-color: #3e8e41;}

.searchbar_class {
top:0%;
height:20px;
position: fixed;
right:14%;
width:35%;
display: block;
z-index: 100000;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
font-size: 15px;
background: #f1f1f1;
}
#search_bar{
width:100%;
height:20px;
    }

    
.searchblock {
display: block;
height:20px;
top:0%;
position: fixed;
width: 13%;
right:1%;
text-align: center;
color: white;
font-size: 15px;
background: #2196F3;
color: white;
border: 1px solid grey;
border-left: none;
cursor: pointer;
    z-index: 100000;
    }
    
.searchblock:hover {
background: #0b7dda;
}

</style>

<body>
    <div class="DRdropdown">
    <button class="DRbtn">Metadata_viewer</button>
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
        if (($DR !== '.') && ($DR !=='..') && ($DR !=='categories') && ($DR !=='metadata')) {
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
    

<c>
<div class="table-responsive">
</div>
<br />
<div id="meta_table" class="meta_table_class">
</div>
</div>
</div>

    <?php
    if (isset($_GET['csv'])){
    $csv_id = $_GET['csv'];
    }else{
    $csv_id = "/Predicted_celltype_abundance.csv";
    ?>
    <script>
    window.location.search += "?csv="+"<?php echo $csv_id;?>";
    </script>
    <?php
    }
    ?>
<script>
$(document).ready(function(){

                                        $.ajax({
                                               url:"./metadata/<?php echo $csv_id; ?>" ,
                                               dataType:"text",
                                               success:function(data)
                                               {
                                               var data_data = data.split(/\r?\n|\r/);
                                               var table_data = '<table class="table table-bordered table-striped">';
                                               for(var count = 0; count<data_data.length; count++)
                                               {
                                               var cell_data = data_data[count].split(",");
                                               table_data += '<thead>';
                                               for(var cell_count=0; cell_count<cell_data.length; cell_count++)
                                               {
                                               if(count === 0)
                                               {
                                               table_data += '<th>'+cell_data[cell_count]+'</th>';
                                               }
                                               }
                                               table_data += '</head>';
                                               table_data += '<tbody>';
                                               table_data += '<tr>';
                                               for(var cell_count=0; cell_count<cell_data.length; cell_count++)
                                               {
                                               if(count !== 0)
                                               {
                                               table_data += '<td>'+cell_data[cell_count]+'</td>';
                                               }
                                               }
                                               table_data += '</tbody>';
                                               table_data += '</tr>';
                                               }
                                               table_data += '</table>';
                                               $('#meta_table').html(table_data);
                                               }
                                               });
                                        });

</script>

    <div class="searchbar_class">
    <input type="text" id="search_bar"  placeholder="Enter search term.." title="Type in a name">
    </div>
<button type="button" class="searchblock" id="searchbutton" onclick="search_bar_()">Search</button>


    <script>
    <!--"enter" event listener -->
    // Execute a function when the user releases a key on the keyboard
    var input = document.getElementById("search_bar");
    input.addEventListener("keyup", function(event) {
                           // Number 13 is the "Enter" key on the keyboard
                           if (event.keyCode === 13) {
                           // Cancel the default action, if needed
                           event.preventDefault();
                           // Trigger the button element with a click
                           document.getElementById("searchbutton").click();
                           }
                           });
    <!--modified matching module-->
    $.extend($.expr[":"], {
             "containsIN": function(elem, i, match, array) {
             return (elem.textContent || elem.innerText || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
             }
             });
    
    <!--qeury module-->
    function search_bar_(){
        var rows = $("#meta_table").find("tbody").hide();
        input = document.getElementById("search_bar");
        filter = input.value.toUpperCase();
        rows.filter(":containsIN('"+filter+"')").show();
        
        $('td').css("background-color",'');
        if (filter.length > 0) {
        $('td:containsIN("'+filter+'")').css("background-color",'green');
        }else{
        $('td').css("background-color",'');
        }
        };
    </script>

    
    </body>
    </html>
