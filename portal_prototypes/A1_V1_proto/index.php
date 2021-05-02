<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="./logos/space_jam_mini.png">
<title>Annot-aid Development Cell Atlas</title>
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
position: relative;
right: 0;
bottom: 0;
width: 100%;
color: gray;
    padding-top: 3em;
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
background-color:black;
position: fixed;
top:12%;
left:11%;
padding:10px;
padding-right:10px;
width:25%;
height:40%;
border:5px solid grey;
z-index:50;
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

.iframeDisplay_class:hover {
transform: scale(1.5);
-webkit-animation: fadeIn 1s;
animation: fadeIn 1s;
margin-right:50px !important;
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}

.wc-selector{
font-size:1vw;
text-align: center;
display:block;
cursor: pointer;
position:absolute;
padding-top:1px;
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

.umap_widget_class{
display: block;
resize: both;
height:85%;
width:60%;
position:fixed;
top:12%;
left:38%;
z-index:10;
border:5px solid grey;
}

#umap_widget {
display: block;
resize: both;
position:fixed;
top:12%;
left:38%;
}


.meta_widget {
display: block;
resize: both;
height:41%;
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
font-size: 1vw;left:0%;
width:100%;
border: none;
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

/* Dr selector menu */
.DRbtn {
background-color: #4CAF50;
color: white;
font-size: 1vw;left:0%;
width:12%;
border: 5px black;
height:20px;
z-index: 10000;
}

/* The container <div> - needed to position the dropdown content */
.DRdropdown {
position: fixed;
left:38.3%;
padding-left:0%;
width:100%;
top:12.5%;
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
    
</style>
</head>
<div id = "HCALogo"><img id="HCALogo" src = "./logos/spacejam.png" height="100"></div>
    
<div class="toppaddingelement"></div>
    
<!-- <div id='main_div'><h2>Enchanced Annotaid prototype</h2></div>-->
    
<div class="boxelement"></div>
    
<div id='Cat_selector'>
<font size="+1">Category Selection</font>
</div>
    
<!-- DR selector utility -->
<div class="DRdropdown">
<button class="DRbtn">Visualisation_selection</button>
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
<a button type="button" name="sb" value="<?=$DR?>" href="./DR_plots/<?= $DR_file ?>" target="reset"><?=$DR?></a></button>
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
    

<!-- WC selector loop (requires AJAX variable input into cluster varibale) -->
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
    <!-- Reset DR utility -->
    <li style="list-type:none;"><a button type="button" class ="wc-selector" id="auto_click"
    onclick="displayIframe()" href="./DR_plots/landing_map"
    style="color:black;text-decoration:none;font-weight:bold" target="reset">Reset
    Map</button></a></li>


<!-- WC button and hoveplot loop -->
    
    <?php
    $cat=$cat_id;
    $files = (array)$files;
    foreach($files as $file){
        $str = str_replace(".html","",$file);
        if (($str !== '.') && ($str !=='..')&& ($str !=='container_files')) {
                ?>
            <li style="list-type:none;"><a button type="button" class ="wc-selector" onclick="displayIframe()" href="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" style="color:black;text-decoration:none;font-weight:bold;font-size:70%;" target="wc_java"><?=$str?></button></a><object  class = "box" data="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" content="width=1400" width="25%" height="100%"><embed src="./wc_selector/categories/<?= $cat ?>/<?= $file ?>" width="25%" height="50%"> </embed></object></div></li>
            
            
                <div id ="iframeDisplay"></div>
               <div id ="umap_widget"></div>

                <script type = "text/javascript">
                
                function displayIframe() {
                    document.getElementById("iframeDisplay").innerHTML = "<iframe onload =\"load()\" class = \"iframeDisplay_class\" id=\"wc\" name=\"wc_java\"  frameborder=\"0\"></iframe>";
                }
            
                function load(){
                load1();
                
               }
            
                function load1() {
                var url =  document.getElementById("wc").contentWindow.location.href;
                var url = url.replace("wc_selector", "DR_plots");
                document.getElementById("umap_widget").innerHTML = "<iframe name=\"reset\" class=\"umap_widget_class\" src=\""+url+"\" height=\"700px\" width=\"1000px\" frameborder=\"0\"></iframe>";
                }

            

            
            document.getElementById("auto_click").click();

                </script>
                <?php
    }
    }
    ?>
    </ul>

<!-- CSV reader javascript -->

<iframe class= "meta_widget" name= "csv_widget" src= "./meta_info/Celltype_annotation_aid"height="700px" width="1000px" frameborder="0"></iframe>
<!--"./csv_reader_test.php?data=lol" -->
    </body>
    </html>
    
    
    

  




