<h1 class="text-center"><b><?php echo $current_user->role_name; ?></b></h1>
<div class="text-center" style="width: 96%; background-color: #EEE; padding: 2em; margin: 0 auto; clear: both; overflow: hidden; margin-bottom: 4em;">
    <h2 class="text-center">Panou de Control</h2>
    <br>
    <?php if ( isset( $current_user->email ) ) : ?>
        <?php if ( isset( $current_user->role_id ) && in_array( $current_user->role_id, array( 1, 2 ) ) ) : // Admministrator si Editor ?>
            <p class="text-center"><a class="btn btn-large btn-info" style="width: 96%; margin: 0 auto;" href="<?php echo site_url("admin/settings/series_and_numbers"); ?>" title="Manage Series and Numbers">Settings: <b>Series and Numbers</b></a></p><br>
            <p class="text-center"><a class="btn btn-large btn-info" style="width: 96%; margin: 0 auto;"  href="<?php echo site_url("admin/content/editor_of_diplomas"); ?>" title="Manage Diploma Templates">Content: <b>Editor of Diplomas</b></a></p><br>
            <p class="text-center"><a class="btn btn-large btn-info" style="width: 96%; margin: 0 auto;"  href="<?php echo site_url("admin/content/university_graduates"); ?>" title="Manage University Graduates">Content: <b>Graduates Index</b></a></p><br>
        <?php else :?>
            <p class="text-center"><a class="btn btn-large btn-info" style="width: 96%; margin: 0 auto;"  href="<?php echo site_url("admin/content/editor_of_diplomas"); ?>" title="Manage Diploma Templates">Content: <b>Editor of Diplomas</b></a></p><br>
            <p class="text-center"><a class="btn btn-large btn-info" style="width: 96%; margin: 0 auto;"  href="<?php echo site_url("admin/content/university_graduates"); ?>" title="Manage University Graduates">Content: <b>Graduates Index</b></a></p><br>
        <?php endif;?>

            <br>
            <p class="text-center"><a class="btn btn-large btn-warning" style="width: 96%; margin: 0 auto;" href="<?php echo site_url('logout'); ?>"><?php echo lang('bf_action_logout'); ?></a></p><br>

    <?php endif;?>
</div>