<div class="jumbotron" style="min-height: 380px; background-color: #f8f8f8; background-image: url('<?php echo base_url( 'themes/default/images/bkg-welcome.png' ); ?>'); background-repeat: no-repeat; background-position: top center; background-size: contain; padding: 2em;">
    <div class="row row-fluid text-center">

            <h2 class="text-center" style="color: navy; margin: 0 auto; min-width: 40%; width: auto; text-wrap: none; white-space: nowrap;">
                APLICAȚIE DE MANAGEMENT AL DIPLOMELOR
            </h2>
            <p><br /></p>
            <p>
                <a class="btn btn-primary text-center" style="color: white; margin: 1em auto; min-width: 40%; width: auto; text-wrap: none; white-space: nowrap;" target="_blank" href="http://www.unitbv.ro/">
                    Universitatea <b>Transilvania</b> din Braşov
                </a>
            </p>
    </div>
    <p>&nbsp;</p>
    <div class="row row-fluid text-center">
    <?php if ( isset( $current_user->email ) ) : ?>
        <?php if ( isset( $current_user->role_id ) && in_array( $current_user->role_id, array( 1, 2 ) ) ) : // Admministrator si Editor ?>
        <p class="text-center"><a class="btn btn-info" style="color: white; margin: 0.25em auto; min-width: 32em; width: 40%; text-wrap: none; white-space: nowrap;" href="<?php echo site_url("admin/settings/series_and_numbers"); ?>" title="Manage Series and Numbers"><span class="col-sm-5 text-right">Settings:</span><span class="col-sm-1 text-center"><i class="fa fa-th-list"></i></span><span class="col-sm-6 text-left"><b>Series and Numbers</b></span></a></p>
        <?php endif;?>
        <p class="text-center"><a class="btn btn-info" style="color: white; margin: 0.25em auto; min-width: 32em; width: 40%; text-wrap: none; white-space: nowrap;" href="<?php echo site_url("admin/content/editor_of_diplomas"); ?>" title="Manage Diploma Templates"><span class="col-sm-5 text-right">Content:</span><span class="col-sm-1 text-center"><i class="fa fa-arrows"></i></span><span class="col-sm-6 text-left"><b>Editor of Diplomas</b></span></a></p>
        <p class="text-center"><a class="btn btn-info" style="color: white; margin: 0.25em auto; min-width: 32em; width: 40%; text-wrap: none; white-space: nowrap;" href="<?php echo site_url("admin/content/university_graduates"); ?>" title="Manage University Graduates"><span class="col-sm-5 text-right">Content:</span><span class="col-sm-1 text-center"><i class="fa fa-graduation-cap"></i></span><span class="col-sm-6 text-left"><b>Graduates Index</b></span></a></p>
        <br><br><br><p><a href="<?php echo site_url('logout'); ?>" class="btn btn-large btn-warning" style="margin: 0 auto; min-width: 40%; width: auto; text-wrap: none; white-space: nowrap;"><?php echo lang('bf_action_logout'); ?></a></p><br><br><br>
    <?php else :?>
        <a href="<?php echo site_url(LOGIN_URL); ?>" class="btn btn-large btn-info" style="margin: 0 auto; min-width: 40%; width: auto; text-wrap: none; white-space: nowrap;"><?php echo lang('bf_action_login'); ?></a>
    <?php endif;?>
    </div>
</div>
