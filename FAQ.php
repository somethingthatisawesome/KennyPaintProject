<?php
$PageTitle="Dịch vụ | KennyPaint";
include_once('header.php');
?>
<body cz-shortcut-listen="true">
<?php
include_once('menu.php');
?>
   <div class="faq sub-banner" data-ix="show-go-top-on-scroll" id="Top">
   <div class="container-center w-container">
      <div class="align-center">
         <div class="sub-text-title white">Frequently Asked Questions</div>
         <h1 class="heading-white title-top">F.A.Q Page</h1>
         <div class="top-margin"><a class="button-icon envelope w-button" data-ix="show-contact-wrapper-on-click" href="#" style="transition: all 0.4s ease 0s;">Send Us A Message</a></div>
      </div>
   </div>
</div>
     <div class="section triangle-blue">
   <div class="w-container">
      <div class="w-row">
         <div class="w-col w-col-6">
            <div>
               <h3 class="faq-title">Aenean viverra rhoncus?</h3>
               <div>
                  <p>Dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.</p>
               </div>
            </div>
            <div class="more top-margin">
               <h3 class="faq-title">Pellentesque habitant morbi tristique?</h3>
               <div>
                  <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
               </div>
            </div>
            <div class="more top-margin">
               <h3 class="faq-title">Phasellus gravida semper?</h3>
               <div>
                  <p>Consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra orna interdum nulla.Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
               </div>
            </div>
         </div>
         <div class="w-col w-col-6">
            <div>
               <div>
                  <h3 class="faq-title">Pellentesque dapibus hendrerit tortor?</h3>
                  <div>
                     <p>Ut leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Praesent nonummy mi in odio. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
                  </div>
               </div>
               <div class="more top-margin">
                  <h3 class="faq-title">Aenean commodo ligula eget dolor?</h3>
                  <div>
                     <p>Sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                  </div>
               </div>
               <div class="more top-margin">
                  <h3 class="faq-title">Vestibulum purus quam scelerisque?</h3>
                  <div>
                     <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
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
        <a class="logo-popup w-hidden-tiny w-inline-block" href="http://sangs-fresh-project.webflow.io/service/service-style-3#"></a>
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
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>