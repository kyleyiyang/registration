In theme editor, DirectoryEngine: modal-authenticate.php (template-js/modal-authenticate.php)
Line 47, change style = “display:none;” to <form class="signup_form form_modal_style" id="signup_form" style=""> to show the registration part.
  
  Line 56, added: <div class="form-field">
		        	      <label><?php _e("City", ET_DOMAIN) ?></label>
		        	      <input type="text" class="text-field city_user" name="user_city" id="user_city" />
				          </div>
				          <div class="form-field">
		        	         <label><?php _e("State", ET_DOMAIN) ?></label>
                      <input type="text" class="text-field stae_user" name="user_state" id="user_state" />
				          </div>


