<?php $site_open = $this->settings_lib->item('auth.allow_register'); ?>

    <div id="login">
        <h2><?php echo lang('us_login'); ?></h2>

        <?php echo Template::message(); ?>

        <?php if (validation_errors()) : ?>

        <div class="row-fluid">
            <div class="alert alert-warning fade in">
                <a data-dismiss="alert" class="close">&times;</a>
                <?php echo validation_errors(); ?>
            </div>
        </div>

        <?php endif; ?>

        <?php echo form_open( LOGIN_URL, array( 'autocomplete' => 'off' ) ); ?>

            <div class="control-group <?php echo iif( form_error('login') , 'error') ;?>">
                <div class="controls">
                    <input class="form-control" type="text" name="login" id="login_value" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
                </div>
            </div>
            <div class="control-group"><br /></div>
            <div class="control-group <?php echo iif( form_error('password') , 'error') ;?>">
                <div class="controls">
                    <input class="form-control" type="password" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
                </div>
            </div>
            <?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
                <div class="control-group"><br /></div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox" for="remember_me">
                            <input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3" checked />
                            <span class="inline-help"><?php echo lang('us_remember_note'); ?></span>
                        </label>
                    </div>
                </div>
            <?php endif; ?>
            <div class="control-group"><br /></div>
            <div class="control-group">
                <div class="controls">
                    <input class="btn btn-large btn-primary" type="submit" name="log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="5" />
                </div>
            </div>
        <?php echo form_close(); ?>

        <?php 
            // show for Email Activation (1) only
            if ( $this->settings_lib->item('auth.user_activation_method') == 1 ) : 
        ?>
            <!-- Activation Block -->
            <div class="control-group">
                <p class="well">
                    <?php   echo lang('bf_login_activate_title'); ?>
                    <br />
                    <?php
                            $activate_str = str_replace('[ACCOUNT_ACTIVATE_URL]',anchor('/activate', lang('bf_activate')),lang('bf_login_activate_email'));
                            $activate_str = str_replace('[ACTIVATE_RESEND_URL]',anchor('/resend_activation', lang('bf_activate_resend')),$activate_str);
                            echo $activate_str; 
                    ?>
                </p>
            </div>

        <?php endif; ?>

        <div class="control-group">
            <?php if ( $site_open ) : ?>
            <p><?php // echo anchor(REGISTER_URL, lang('us_sign_up')); ?></p>
            <?php endif; ?>
            <?php if ( 1 ) : ?>
            <p><?php echo anchor('/forgot_password', lang('us_forgot_your_password')); ?></p>
            <?php endif; ?>
        </div>
    </div>
