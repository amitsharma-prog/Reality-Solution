<!DOCTYPE html>
<php>
<head>
  <title>Realty Solutions | Site maps</title>
<?php require_once 'include/header.php'; ?>
<style>
    .row {
        margin: 0 60px;
    }
    .col-lg-3 {
        width: 23%;
        margin-bottom: 50px;
        overflow: hidden;
    }
    .g-heading {
        padding: 0 14px;
    }
    .g-heading h1 {
        margin-bottom: 40px;
        color: #8cc600;
    }
    .g-heading h3 {
        margin-bottom: 20px;
        border-bottom: 1px solid lightgray;
        width: 92%;
        color: #5a4b42;
    }
</style>
</head>
<body>
<?php require_once 'include/loadPopup.php'; ?>
	<?php require_once 'include/navBar.php'; ?> 
    
<style>
#map-canvas { width:100%; float:left;     }
</style>
<article class="bc">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<ul class="bc-ul">
                	<li><a href="#">You Are Here  <i class="fa fa-caret-right" aria-hidden="true"></i> </a> </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#" class="activebc">Site maps</a></li>
                </ul>
            	
            </div>
        </div>
    </div>
</article>
<!--<div class="banner">
	<div class="map-container">
    	<div id="map-canvas" style="width: 100%; height: 350px; margin-bottom: 30px; position:relative; border:1px solid #ccc;">
    </div>
    <img src="images/banner-commercial1400x321.jpg" class="bottom-line"  alt=""  /> 
	</div>
</div>-->
<div class="container">
	<div class="row">  
        <div class="g-heading">
            <div id="mapsloc">
                <h1><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<strong>GURGAON SECTOR MAPS</strong></h1>
            </div>
            <div id="dlfcity">
                <h3>DLF CITY MASTER PLAN</h3> 
            </div>
        </div> 
	   <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf-1.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF PHASE I</h2>
              </div>
            </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf-2.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF PHASE II</h2>
              </div>
            </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf-3.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF PHASE III</h2>
              </div>
            </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf-4.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF PHASE IV</h2>
              </div>
            </div>
       </div>
	</div>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf-5.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF PHASE V</h2>
              </div>
            </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf alameda.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF ALAMEDA</h2>
              </div>
            </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <div class="title-images">
                  <img src="images/site_map/dlf garden city.jpg" alt="Denim Jeans" style="width:100%">
                  <h2>DLF GARDEN CITY</h2>
              </div>
            </div>
       </div>
    </div>
</div>
 <?php require_once 'include/footer.php'; ?>
<!-- /WhatsHelp.io widget -->  
</body>
</html>