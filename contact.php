<!DOCTYPE html>
<html>
<head>

<title>Reality Solution | Contact </title>
<?php require_once 'include/header.php'; ?>
</head>

<body>
<?php require_once 'include/loadPopup.php'; ?>
	<?php require_once 'include/navBar.php'; ?>   
    <article class="bc" style="    margin-bottom: 0px;">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<ul class="bc-ul">
                	<li><a href="#">You Are Here  <i class="fa fa-caret-right" aria-hidden="true"></i> </a> </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="#" class="activebc">Contact</a></li>
                </ul>
            	
            </div>
        </div>
    </div>
</article>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.08483372461!2d77.03655131445423!3d28.446858982491413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1841f39ec35f%3A0x837e1686c5b3537b!2sKinship+Square!5e0!3m2!1sen!2sin!4v1563529068038!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     
    	
   
<div class=" container ">
<div class="col-lg-12 col-md-12 col-sm-12 t">
	<div class="col-lg-4 col-md-12 col-sm-12 ">
     	
    	<h4 class="head"><button class="sc glyphicon glyphicon-home"></button><span class="heads">ADRESSS</span></h4> 
       
        	                
            
          <p class="c">KinshipSquare,PremisesNo7(2Bays),Sector32,Gurgaon.<br>OppositeJetAirwaysTrainingCentre.</p> 
    	
    	
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 ">
   
    	 <h4 class="head"><button class="sc1 glyphicon glyphicon-earphone"></button>CALL US</h4> 
                               
            
            <p  class="c" >+91-9899891133, 9873092221, 8076952087</p>
    	
    	
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 ">
    	<h4 class="head"><button class="sc2 glyphicon glyphicon-pencil"></button>WRITE US</h4>  
                              
           
            <p class="c">gurgaon40@gmail.com</p>
     </div> 
  </div> 
 </div>
    <div class="container  ">    
    	<div class="col-lg-12 col-md-12 col-sm-12 gap  ">
        	<h3 class="heading-main">Something to say? Get in Touch!</h3>
            <p>Looking for business space or home? Simply provide some general requirements and we'll get right back to you. No risk, no obligation, just expert advice.</p>
        	<form class="forms" action="#" method="post" >
            	<input type="text" required="required" name="name" placeholder="Enter your name..." class="form-control input" id="name" />
                
                <input type="email" required="required" name="email" placeholder="Enter your email..." class="form-control input" id="email" />
                <input type="number" required="required" name="contact" placeholder="Enter your contact no..." class="form-control input" id="contact" />
                <input type="text" required="required" name="subject" placeholder="Enter your Subject..." class="form-control input" id="subject" />
                <textarea rows="5" placeholder="Enter your message..." name="message" required class="form-control" id="message"></textarea>
                <div id="msg"></div>
                <input type="submit" name="submit" value="Submit" class="b2" id="send"/> 
                
            </form>
    	</div>
    </div>
      
 <?php require_once 'include/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#send").click(function(){
			event.preventDefault();
			if ($("#name").val() == "" || $("#email").val() == "" || $("#contact").val() == "" || $("#subj").val() == "" || $("#message").val() == "") { 
			} else { 
				var ac = "name=" + $("#name").val() + "&email=" + $("#email").val() + "&contact=" + $("#contact").val()  + "&subject=" + $("#subject").val() + "&message=" + $("#message").val(); 
				$.ajax({
					type: "post",
					url: "sendMail.php",
					dataType: "text",
					data: ac,
					beforeSend: function() {
						$("#send").val("Please Wait...");
                        $("#send").attr("disabled", true);
					},
					success: function(data) {
						popUp();
                        $("#msg").html(data);
                        $("#send").val("Submit");
                        $("#send").attr("disabled", false);

					},
				});
			}
		});
	});
</script>
<script>
    function popUp(){
        swal("Contact Us", "Mail send successfuly!", "success")
        .then((value) => {
        $("form.forms").trigger("reset");
    });
}
</script>
</body>
</html>