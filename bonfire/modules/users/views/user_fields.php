<?php /* /users/views/user_fields.php */

$currentMethod = $this->router->fetch_method();

$errorClass     = empty($errorClass) ? ' error' : $errorClass;
$controlClass   = empty($controlClass) ? 'span4' : $controlClass;
$registerClass  = $currentMethod == 'register' ? ' required' : '';
$editSettings   = $currentMethod == 'edit';

$defaultLanguage = isset($user->language) ? $user->language : strtolower(settings_item('language'));
$defaultTimezone = isset($user->timezone) ? $user->timezone : strtoupper(settings_item('site.default_user_timezone'));

?>
<div class="form-group control-group<?php echo form_error('email') ? $errorClass : ''; ?>">
    <label class="col-xs-2 control-label required" for="email"><?php echo lang('bf_email'); ?></label>
    <div class="col-xs-10 controls">
        <input class="form-control <?php echo $controlClass; ?>" type="text" id="email" name="email" value="<?php echo set_value('email', isset($user) ? $user->email : ''); ?>" <?php echo ( $editSettings || in_array( $current_user->role_id, array( 1, 2 ) ) ? '' : 'readonly' ); ?> />
        <span class="help-inline"><?php echo form_error('email'); ?></span>
    </div>
</div>
<div class="form-group control-group<?php echo form_error('display_name') ? $errorClass : ''; ?>">
    <label class="col-xs-2 control-label" for="display_name"><?php echo lang('bf_display_name'); ?></label>
    <div class="col-xs-10 controls">
        <input class="form-control <?php echo $controlClass; ?>" type="text" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" <?php echo ( in_array( $current_user->role_name, array( 'Administrator', 'Editor', 'Developer' ) ) ? '' : ' readonly' ); ?> />
        <span class="help-inline"><?php echo form_error('display_name'); ?></span>
    </div>
</div>
<?php if (settings_item('auth.login_type') !== 'email' || settings_item('auth.use_usernames')) : ?>
<div class="form-group control-group<?php echo form_error('username') ? $errorClass : ''; ?>">
    <label class="col-xs-2 control-label required" for="username"><img id="ajax-loader-username" src="<?php echo base_url( 'themes/admin/images/ajax-loader.gif' ); ?>" style="display: none; float: left;" /><?php echo lang('bf_username'); ?></label>
    <div class="col-xs-10 controls">
        <input class="form-control <?php echo $controlClass; ?>" type="text" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->username : ''); ?>" <?php echo ( in_array( $current_user->role_name, array( 'Administrator', 'Editor', 'Developer' ) ) ? '' : ' readonly' ); ?>/>
        <span class="help-inline"><?php echo form_error('username'); ?></span>
    </div>
</div>
<?php endif; ?>
<div class="form-group control-group<?php echo form_error('password') ? $errorClass : ''; ?>" style="display: none;">
    <label class="col-xs-2 control-label<?php echo $registerClass; ?>" for="password"><?php echo lang('bf_password'); ?></label>
    <div class="col-xs-10 controls">
        <input class="form-control <?php echo $controlClass; ?>" type="password" id="password" name="password" value="<?php echo $ConfigUniTBv['LDAP']['PassBF']; ?>" />
        <span class="help-inline"><?php echo form_error('password'); ?></span>
        <p class="help-block"><?php echo isset($password_hints) ? $password_hints : ''; ?></p>
    </div>
</div>
<div class="form-group control-group<?php echo form_error('pass_confirm') ? $errorClass : ''; ?>" style="display: none;">
    <label class="col-xs-2 control-label<?php echo $registerClass; ?>" for="pass_confirm"><?php echo lang('bf_password_confirm'); ?></label>
    <div class="col-xs-10 controls">
        <input class="form-control <?php echo $controlClass; ?>" type="password" id="pass_confirm" name="pass_confirm" value="<?php echo $ConfigUniTBv['LDAP']['PassBF']; ?>" />
        <span class="help-inline"><?php echo form_error('pass_confirm'); ?></span>
    </div>
</div>
<?php if ( $editSettings ) : ?>
    <div class="form-group control-group<?php echo form_error('force_password_reset') ? $errorClass : ''; ?>">
        <div class="col-xs-10 controls">
            <label class="checkbox" for="force_password_reset">
                <input type="checkbox" id="force_password_reset" name="force_password_reset" value="1" <?php echo set_checkbox('force_password_reset', empty($user->force_password_reset)); ?> />
                <?php echo lang('us_force_password_reset'); ?>
            </label>
        </div>
    </div>
<?php endif; ?>
<!--
<?php 
    if (! empty($languages) && is_array($languages)) :
        if ( count( $languages ) < 0 ) :
?>
        <input type="hidden" id="language" name="language" value="<?php echo $languages[0]; ?>" />
<?php
    else :
?>
<div class="form-group control-group<?php echo form_error('language') ? $errorClass : ''; ?>">
    <label class="col-xs-2 control-label required" for="language"><?php echo lang('bf_language'); ?></label>
    <div class="col-xs-10 controls">
        <select name="language" id="language" class="chzn-select form-control <?php echo $controlClass; ?>">
            <?php foreach ($languages as $language) : ?>
            <option value="<?php e($language); ?>" <?php echo set_select('language', $language, $defaultLanguage == $language); ?>>
                <?php e(ucfirst($language)); ?>
            </option>
            <?php endforeach; ?>
        </select>
        <span class="help-inline"><?php echo form_error('language'); ?></span>
    </div>
</div>
<?php
    endif;
endif;
?>
<div class="form-group control-group<?php echo form_error('timezones') ? $errorClass : ''; ?>">
    <label class="col-xs-2 control-label required" for="timezones"><?php echo lang('bf_timezone'); ?></label>
    <div class="col-xs-10 controls">
        <?php
        echo    timezone_menu(
                            set_value('timezones', isset($user) ? $user->timezone : $defaultTimezone),
                            'form-control '.$controlClass.' chzn-select',
                            'timezones',
                            array( 'id' => 'timezones' )
                );
        ?>
        <span class="help-inline"><?php echo form_error('timezones'); ?></span>
    </div>
</div>
-->