<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="./logos/space_jam_mini.png">
<title>SpaceJam Portal</title>
<meta charset="utf-8"/>
<meta name="description" content="SpaceJam portal">

<style>

body {
    font-family: Avenir, Avenir, Avenir;
    background-color:white;
}


#HCALogo {
display:relative;
position:fixed;
padding-bottom: 50px;
left:50%;
margin-left: -10%;
z-index:10;
}

#main_div {
position:relative;
color: black;
padding: 0px;
text-align: center;
height: 100%;
}

.toppaddingelement{
display: block;
background-color:white;
position: absolute;
top:0%;
padding:0px;
left:0%;
width:100%;
height:12%;
z-index:1;
}

#Cat_selector {
display:block;
position:relative;
color: black;
padding: 1px;
text-align: left;
height: 100%;
padding-top:4.5%;
z-index:5;
width:12%;
}

.footer {
position: absolute;
right: 0;
left: 2em;
bottom: 0;
width: 100%;
color: gray;
padding-top: 5em;
vertical-align:bottom;
text-align: center;
}


.box{
display: none;
}

@-webkit-keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@-webkit-keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}
.boxelement{
display: block;
background-color:white;
position: fixed;
top:12%;
left:11%;
padding:10px;
padding-right:10px;
width:25%;
height:40%;
border:5px solid grey;
z-index:0;
}

a:hover + .box{
display: block;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
position: fixed;
top:12%;
left:11%;
padding:10px;
z-index: 100000000;
width:25%;
height:40%;
}

#iframeDisplay {
display: block;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
position: fixed;
width:25%;
top:12%;
left:11%;
right:2%;
padding:10px;
z-index: 1000000;
}

.iframeDisplay_class {
display: block;
position: fixed;
top:12%;
left:11%;
padding:10px;
width:25%;
height:40%;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;  
}


li:not(:last-child) {
    margin-bottom: 1em;
}

.wc-selector{
font-size:1vw;
text-align: center;
display:block;
cursor: pointer;
position:absolute;
padding-top:1em;
padding-bottom:1em;
left:0%;
width:10vw;
height:20px;
background-color: #eee;
transition: all ease-in-out 0.2s;
cursor: pointer;
list-style-position:inside;
border: 0.5px solid #545454;
}

.wc-selector:hover{
text-indent: 1vw;
position:absolute;
left:0%;
width: 10%;
height: 20px;
border: 1px solid #888;
background-color: #545454;
align-self:left;
}

.wc-selector:focus {
background-color:#545454;
text-align: right;
}

ul{
display:block;
position:relative;
top:12%;
padding:20px
list-style-type: none;
height: 25em;
}


#umap_widget {
display: block;
background-color:white;
resize: both;
position:fixed;
padding-top:1px;
top:12%;
left:38%;
z-index: 100000000;
}

.umap_widget_class{
display: block;
background-color:white;
resize: both;
height:20%;
width:60%;
position:fixed;
top:12%;
left:38%;
z-index:10;
border:5px solid grey;
z-index: 100000000;
overflow-y:scroll;
overflow-x:scroll;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}

.umap_widget_class:hover {
background-color:white;
height:60%;
z-index: 100000000;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}


.main_static_widget_class{
display: block;
resize: both;
height:62%;
width:60%;
position:fixed;
top:34%;
left:38%;
z-index:10;
border:5px solid grey;
}

#main_static_widget {
display: block;
resize: both;
position:fixed;
top:32%;
left:38%;
}


.meta_widget {
display: block;
resize: both;
height:40%;
width:26.2%;
position:fixed;
top:56%;
left:11%;
z-index:100;
border:5px solid grey;
overflow-y:scroll;
overflow-x:scroll;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}

.meta_widget:hover {
display: block;
position:fixed;
top:12%;
left:11%;
right:2%;
height:85%;
z-index: 10000000;
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}

/* Cat selector menu */
.dropbtn {
background-color: #4CAF50;
color: white;
text-align: center;
font-size: 15px;
width:100%;
border: 5px black;
height:20px;
z-index: 10000;
border-radius: 50px;
z-index:1000000;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
padding-left:0%;
width:10%;
padding-bottom:2px;
padding-top:12px;
display:block;
z-index:1000000;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: relative;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 10000;
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
z-index: 10000;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}
    /* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
    /* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

                          
/* Dr selector menu -- this may change depending on incarnation of DR selection type*/
.DRbtn {
background-color: #4CAF50;
color: white;
text-align: center;
font-size: 15px;
left:0%;
text-align: center;
width:12%;
border: 5px black;
height:20px;
z-index: 10000;
border-radius: 50px;
}

/* The container <div> - needed to position the dropdown content */
.DRdropdown {
position: fixed;
left:38.3%;
padding-left:0%;
width:100%;
top:35%;
display:block;
z-index: 100000;
border: 5px black;
}

/* Dropdown Content (Hidden by Default) */
.DRdropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
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
                          
                          
/* ROI selector menu -- this may change depending on incarnation of DR selection type*/
.DRbtn2 {
background-color: #4CAF50;
color: white;
text-align: center;
font-size: 15px;
left:0%;
text-align: center;
width:12.5%;
border: 5px black;
height:20px;
z-index: 10000000000000000;
border-radius: 50px;
}

/* The container <div> - needed to position the dropdown content */
.DRdropdown2 {
position: fixed;
left:38.3%;
padding-left:0%;
width:100%;
top:12.5%;
display:block;
z-index: 10000000000000000;
border: 5px black;
}

/* Dropdown Content (Hidden by Default) */
.DRdropdown-content2 {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 10000000000000000;
}

/* Links inside the dropdown */
.DRdropdown-content2 a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
z-index: 10000000000000000;
}                 

/* Change color of dropdown links on hover */
.DRdropdown-content2 a:hover {background-color: #ddd;}
/* Show the dropdown menu on hover */
.DRdropdown2:hover .DRdropdown-content2 {display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
.DRdropdown2:hover .DRbtn2 {background-color: #3e8e41;}

                            
/* Instructions dropdown button */
.menu_dropbtn {
border: none;
text-decoration: none;
cursor: pointer;
background-color: #00bfff;
color: white;
text-align: center;
font-size: 15px;
width:20%;
border: 5px black;
height:20px;
z-index:100000000000000;
}

/* The container <div> - needed to position the dropdown content */
.menu_dropdown {
position: relative;
padding-left:0%;
width:40%;
padding-bottom:2px;
padding-top:12px;
display:block;
z-index:100000000000000;
}

/* Dropdown Content (Hidden by Default) */
.menu_dropdown-content {
display: none;
position: relative;
background-color: #f1f1f1;
min-width: 160px;
    
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 10000;
}

/* Links inside the dropdown */
.menu_dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
z-index: 10000;
}

/* Change color of dropdown links on hover */
.menu_dropdown-content a:hover {background-color:#00bfff;}
    /* Show the dropdown menu on hover */
.menu_dropdown:hover .menu_dropdown-content {display: block;}
    /* Change the background color of the dropdown button when the dropdown content is shown */
.menu_dropdown:hover .menu_dropbtn {background-color: #00bfff;}                            
                            
                            
</style>
</head>
<body onload="load_frames()">   
    
 
<div id = "HCALogo"><img id="HCALogo" src = "./logos/spacejam.png" height="100"></div>
 
<!--Padding which prevents overflow into logo space -->
<div class="toppaddingelement"></div>
    
<!--Instructions element-->        
<div class="menu_dropdown">
<button class="menu_dropbtn">Instructions</button>
<div class="menu_dropdown-content">
<b>Instructions: </b>
    <li>The "Category selection menu" To start, hoever over the "category" to view different categorical splits of the data, select a categorical of interest to begin!.</li>
				<li>"Categorical list" Once a category is selected, a list of buttons is displayed containing each sub category, click on one of these to refresh the Microscopy and ROI browsers to their associated categories!</li>
				<li>The "Histology Viewer" Features an embedded image as an overall map a user can use to reference, this feature allows users to pan, zoom, annotate and save the resulting the image. Future updates will feature the ability to overlay an ROI map on the histology image for direct retrieval of correct ROI</li>
				<li> The "ROI viewer" tool automatically updates to the correct categorical upon selection in the "categorical list". This tool auto pans upon a mouse over event and allows users to select ROIs of interest. Once selected, a user can zoom and pan an image by double clicking the selected image.</li>
                 <li> The "Visulisation" tool contains static elements which a user can browse through by hovering over the "Visulaisation selection" button. By deafult, the page lands on an interactive predicted celltype abundance comparison. Other tools include an interactive heatmap/dotplot of celltype abundances and gene expression information as well as a viewer for enriched pathways</li>
                 <li> The "Metadata" tool contains static elements which a user can browse through by hovering over the "metadata viewer" button. By deafult, the page lands on an predicted celltype abundance metadata. Users can choose to search an ROI_id to get relevant celltype abundance information</li>    
<li>The Spacejam portal was created using tools available from (<a href="https://github.com/vitkl/SpaceJam" target="_blank" >github link</a>) developed by The Spacejam team: Issac Goh ...add names </li>
</div>
</div>
 
<!--Gets messy for here: still in development-->
    
    

<!-- box element which sits behind the overall image viewer-->
<div class="boxelement"></div>

    
<!-- category selector utility --useful for picking descrete category classes -->
    

<!--Get cat id from url-->
 <?php
    if (isset($_GET['cat'])){
        $roi_id = $_GET['cat'];
    }else{
        $roi_id = "Disease";
        $ROI_file = scandir("./DR_plots/categories/Disease/")[2];
    }
 ?>        

<div id='Cat_selector'>
<font size="+1">Category Selection</font>
</div>

<!-- ROI selector utility -->
<div class="DRdropdown2">
<button class="DRbtn2">ROI_selection</button>
<div class="DRdropdown-content2">    
<?php
 
$ROIs = scandir('./DR_plots/categories/'.$roi_id);
foreach($ROIs as $ROI){
if (is_numeric($ROI)){
sort($categories,1);
}else{
sort($categories,0);
}
    
}
$ROIs = (array)$ROIs;
foreach($ROIs as $ROI){
$ROI_file = $ROI;
$ROI = str_replace(".html","",$ROI);
$ROI = str_replace(".php","",$ROI);
if (($ROI !== '.') && ($ROI !=='..') && ($ROI !=='categories') && ($ROI !=='DR_container_files')&& ($ROI !=='3D_DR_container_files')) {
?>
<a button type="button" name="sb" value="<?=$ROI?>" href="./DR_plots/categories/<?= $roi_id ?>/<?= $ROI_file ?>" target="reset"><?=$ROI?></a></button>
<?php
}
}
?>
</div>
</div>    
<!-- End of ROI selector utility -->

<!-- DR selector utility -->
<div class="DRdropdown">
<button class="DRbtn">Visualisation_App_selection</button>
<div class="DRdropdown-content">
    
<?php
$DRs = scandir('./DR_plots/');
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
if (($DR !== '.') && ($DR !=='..') && ($DR !=='categories') && ($DR !=='DR_container_files')&& ($DR !=='3D_DR_container_files')) {
?>
<a button type="button" name="sb" value="<?=$DR?>" href="./DR_plots/<?= $DR_file ?>" target="main"><?=$DR?></a></button>
<?php
}
}
?>
</div>
</div>
    
<!--requires input of AJAX script for onchange element-->
<!-- First selector loop -->
    <div class="dropdown">
    <button class="dropbtn">Category</button>
    <div class="dropdown-content">
    <form method="post">
    
    <?php
    $categories = scandir('./wc_selector/categories/');
    foreach($categories as $category){
        if (is_numeric($category)){
            sort($categories,1);
        }else{
            sort($categories,0);
        }
    }
    $categories = (array)$categories;
    foreach($categories as $category){
        $cat = str_replace(".html","",$category);
        if (($cat !== '.') && ($cat !=='..')&& ($cat !=='container_files')) {

                ?>
            <a input type="submit" name="sb" href="./index.php?cat=<?php echo $category; ?>"><?=$cat?></a>
<?php
        }
    }
?>
    </div>
    </div>
    </form>
    

<!-- category selector loop (requires AJAX variable input into cluster varibale) -->
<ul>
    
    <!--Get cat id from url-->
    <?php
    if (isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
    }else{
        $cat_id = scandir("./wc_selector/categories/")[2];
    }
    ?>

<?php
$cat_selection=$_POST['sb'];
$files = scandir('./wc_selector/categories/'.$cat_id);
    
foreach($files as $file){
if (is_numeric($file)){
sort($files,1);
}else{
sort($files,0);
}
}
?>

    
<!--main static widget resizable element>    
<!-- WC button and hoveplot loop -->
    <!-- Frame source setting utility-->    
    
    <?php
    $cat=$cat_id;
    $files = (array)$files;
    foreach($files as $file){
        $str = str_replace(".html","",$file);
        if (($str !== '.') && ($str !=='..')&& ($str !=='container_files')) {
                ?>
            <li style="list-type:none;"><a button type="button" class ="wc-selector" onclick="displayIframe()" href="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" style="color:black;text-decoration:none;font-weight:bold;font-size:60%;" target="wc_java"><?=$str?></button></a><object  class = "box" data="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" content="width=1400" width="25%" height="100%"><embed src="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" width="25%" height="60%"> </embed></object></div></li>
            
            
               <div id ="iframeDisplay"></div>
               <div id ="umap_widget"></div>
               <div id ="main_static_widget"></div>

                <script type = "text/javascript">
                function load_frames() {
                displayIframe()
                displayIframe2()
                }    
                    
                function displayIframe() {
                 var url = "./wc_selector/categories/Disease/disease1B_scan.html"
                 document.getElementById("iframeDisplay").innerHTML = "<iframe onload =\"load1()\" class = \"iframeDisplay_class\" src=\""+url+"\" id=\"wc\" name=\"wc_java\"  frameborder=\"0\" target=\"_self\" ></iframe>";
                }
            
                function load1() {
                var url =  document.getElementById("wc").contentWindow.location.href;
                var url = url.replace("wc_selector", "DR_plots");
                var url = url.replace(".html", "");
                document.getElementById("umap_widget").innerHTML = "<iframe onload name=\"reset\" class=\"umap_widget_class\" src=\""+url+"\" height=\"700px\" width=\"1000px\" frameborder=\"0\" target=\"_self\"></iframe>";
                }
             

                function displayIframe2() {
                document.getElementById("main_static_widget").innerHTML = "<iframe onload =\"load2()\" class = \"main_static_widget_class\" id=\"wc\" name=\"main_static\"  frameborder=\"0\" target=\"_self\" ></iframe>";
                }
            
            
                function load2() {
                var url = "./DR_plots/01_Celltype_abundances_across_conditions_boxplot"
                document.getElementById("main_static_widget").innerHTML = "<iframe onload name=\"main\" class=\"main_static_widget_class\" src=\""+url+"\" height=\"700px\" width=\"2000px\" frameborder=\"0\" target=\"_self\"></iframe>";
                }
            
            
            




                </script>
                <?php
    }
    }
    ?>
    </ul>
        
<!-- CSV reader javascript -->

<iframe class= "meta_widget" name= "csv_widget" src= "./meta_info/Celltype_annotation_aid"height="700px" width="1000px" frameborder="0"></iframe>
<!--"./csv_reader_test.php?data=lol" -->
                
        
        

 <div class="footer">
 <span style="font-size:0.8em;">The Spacejam portal was created using tools available from (<a href="https://github.com/vitkl/SpaceJam" target="_blank" >github link</a>) developed by The Spacejam team: Issac Goh ...add names </span><hr></div>
   
        
    </body>
    </html>
    
    
    

  




