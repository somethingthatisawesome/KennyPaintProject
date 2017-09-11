<?php
$PageTitle="KennyPaint | Nhận diện màu sắc";
include_once('header.php');
?>
<body cz-shortcut-listen="true">
<?php
include_once('menu.php');
?>
    <div class="banner style-2" data-ix="show-go-top-on-scroll" id="Top">
   <div>
      <div class="background w-background-video" >
         
         <div class="container-center w-container">
            <div class="video-liner" data-ix="scale-text-up-on-load" style="opacity: 1; transform: scaleX(1) scaleY(1) scaleZ(1); transition: opacity 300ms, transform 500ms;">
               <div>
                  <h1 class="banner-title smaller-title">Nhận diện màu sắc</h1>
                  <div class="banner-sub-text more-light">Tìm sắc màu sơn từ những bức hình yêu thích của bạn</div>
                  <div class="top-margin">
					<div class="tool">
						<form id="form-upload" action="./Services/FindImageColor/Upload.php" method="post" enctype="multipart/form-data">
							Chọn hình để upload:
							<input class="pop-up text-field-footer w-input"  type="file" name="fileToUpload" id="fileToUpload">
							<img id="imagepreview" width="80%" src="#" alt="" />
							<input id="abutton"class="other-color w-button" type="submit" value="Phân tích hình ảnh" name="submit" style="display: none;">
						</form>
						<div id="result">
							<ul id="colors">
							</ul>
						</div>
        </div>
				  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    
	<?php
	include_once('footer.php');
	?>
	<div class="contact-pop-up" data-ix="hide-popup-on-initial-apper" style="opacity: 0; transform: scaleX(1.1) scaleY(1.1) scaleZ(1); display: none;">
        <a class="logo-popup w-hidden-tiny w-inline-block" href="http://sangs-fresh-project.webflow.io/projects/project-style-1#"></a>
        <div class="container-center uper w-container">
            <div class="top-title w-hidden-small w-hidden-tiny">
                <div class="align-center">
                    <div class="sub-text-title white">work with us</div>
                    <h1 class="heading-white title-top">Let's work together</h1></div>
            </div>
            <div>
                <div class="w-form">
                    <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Name 3" id="name-3" maxlength="256" name="name" placeholder="Name" required="required" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Title" id="Title" maxlength="256" name="Title" placeholder="Title" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Company" id="Company" maxlength="256" name="Company" placeholder="Company" required="required" type="text">
                            </div>
                        </div>
                        <div class="top-margin">
                            <div class="w-row">
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Email" id="Email-3" maxlength="256" name="Email" placeholder="Email" required="required" type="email">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Phone Number" id="Phone-Number-2" maxlength="256" name="Phone-Number" placeholder="Phone Number" required="required" type="text">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Budget" id="Budget" maxlength="256" name="Budget" placeholder="Budget" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="top-margin">
                            <textarea class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Project Details" id="Project-Details" maxlength="5000" name="Project-Details" placeholder="Project Details" required="required"></textarea>
                        </div>
                        <div class="top-margin">
                            <div class="align-center">
                                <input class="button-icon form-button w-button" data-wait="Please wait..." type="submit" value="Submit Details">
                            </div>
                        </div>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="remove-button" data-ix="close-contact-popup-on-click" style="transition: all 0.3s ease 0s;"></div>
    </div>
	<?php
	include_once('GoTop.php');
	include_once('BottomScript.php');
	?>
	<script src="http://malsup.github.io/min/jquery.form.min.js" type="text/javascript" style=""></script>
	<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
		$('#imagepreview').attr("width","80%");
		$('#imagepreview').attr('src', e.target.result);
		$("#colors").html("");
		$('#abutton').show();
    }
    reader.readAsDataURL(input.files[0]);
	}
	}
	
	$('#fileToUpload').change(function(){
    readURL(this);
	});
	
	 $('#form-upload').ajaxForm({
    complete: function(xhr) {
      // Add response text to div #result
	  $('#abutton').hide();
	  $('#imagepreview').attr("width","30%");
	  $("#colors").html("");
     var string = xhr.responseText;
	 var jsonarray = jQuery.parseJSON(string);
	 jsonarray.forEach(function(key,index){
		var li = $("<li></li>");
		var color = $("<div></div>");
		color.addClass("color");
		color.css('background-color', key);
		li.append(color);
		$("#colors").append(li);
		}
		);
    }
	});
	</script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>