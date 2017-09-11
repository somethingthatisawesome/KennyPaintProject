<?php
$PageTitle="Tuyển dụng | KennyPaint";
include_once('header.php');
?>
<body cz-shortcut-listen="true">
    <div class="style-3 sub-banner" data-ix="show-go-top-on-scroll" id="Top">
	<?php
	include_once('menu.php');
	?>
		<div class="contact-style-2 sub-banner" id="Top">
    <div class="container-center less uper w-container">
        <div class="w-row">
            <div class="w-col w-col-5">
                <div>
                    <div class="less-margin top-title">
                        <div class="more top-margin">
                            <div class="sub-text-title" data-ix="show-go-top-on-scroll">Stay in touch</div>
                            <h1 class="title-top">Hãy để lại thông tin của bạn</h1></div>
                    </div>
                <?php
					include_once('ContactForm.php')
					?>
				</div>
            </div>
            <div class="w-col w-col-7"></div>
        </div>
    </div>
</div>
	<?php
	include_once('GreylessSection.php');
	?>
    <?php
	include_once('footer.php');
	?>
   <div class="contact-pop-up" data-ix="hide-popup-on-initial-apper" style="opacity: 0; transform: scaleX(1.1) scaleY(1.1) scaleZ(1); display: none;">
        <a class="logo-popup w-hidden-tiny w-inline-block" href="#"></a>
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