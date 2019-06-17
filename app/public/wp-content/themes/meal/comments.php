<div class="comment">
	<div class="container">
		<div class="row">
            <div class="col-lg-12">

            	<ul>
            		<?php
            			wp_list_comments();
            		?>
            	</ul>


            	<div class="section-title text-center">
            		<h2>Leave Your Comment</h2>
            	</div>

            	<?php
            	$meal_comment_fields = array();
            	$flowapp_name_field_placeholder =__('Your Name ','meal');
            	$flowapp_email_field_placeholder =__('Your Email ','meal');
            	$flowapp_url_field_placeholder =__('Your Website ','meal');
            	$flowapp_message_field_placeholder =__('Your Message','meal');
            	$flowapp_send_message_field_placeholder =__('Send Message','meal');
            	$meal_comment_fields['author']=<<<EOD
<div class="col-md-12">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="{$flowapp_name_field_placeholder}*" id="author" name="author" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
        <p class="help-block text-danger"></p>
    </div>

EOD;

				$meal_comment_fields['email']=<<<EOD
	<div class="form-group">
        <input type="email" class="form-control" placeholder="{$flowapp_email_field_placeholder}*" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
        <p class="help-block text-danger"></p>
    </div>
EOD;
				$meal_comment_fields['url']=<<<EOD
	<div class="form-group">
        <input type="tel" class="form-control" placeholder="{$flowapp_url_field_placeholder} *" id="url" name="url" required="" data-validation-required-message="Please enter your website address.">
        <p class="help-block text-danger"></p>
    </div>
</div>
EOD;

				$meal_comment_field = <<<EOD
<div class="col-md-12">
    <div class="form-group">
        <textarea class="form-control" placeholder="{$flowapp_message_field_placeholder}*" id="comment" name="comment" required="" data-validation-required-message="Please enter a message."></textarea>
        <p class="help-block text-danger"></p>
    </div>
</div>
EOD;

				$meal_comment_submit_button = <<<EOD
<div class="col-lg-12 text-center">
        <div id="success"></div>
        <button type="submit" class="btn btn-primary">{$flowapp_send_message_field_placeholder}</button>
    </div>
</div>
EOD;


				$meal_comment_form_arguments = array(
					'fields' => $meal_comment_fields,
					'comment_field' => $meal_comment_field,
					'submit_button' => $meal_comment_submit_button,
					'id_form' => 'contactForm',
					'comment_notes_before' => '<p></p>',
					'comment_notes_after' => '<p>Your email no will not be published</p>'
				);
            	comment_form( $meal_comment_form_arguments );
            	?>


            </div>
        </div>
	</div>
</div>