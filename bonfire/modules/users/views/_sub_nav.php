<?php $segment = $this->uri->segment(2); ?>
<?php if ( $this->auth->has_permission( 'Curriculum.Content.View' ) ) : ?>
    <ul class='list-inline pull-right'>
        <li>
            <a class="btn <?php echo in_array( $segment, array( 'profile' ) ) ? 'btn-primary' : 'btn-default'; ?>" href="<?php echo site_url( '/users/profile' ); ?>" id='btn_edit_profile' title="<?php echo lang( 'us_edit_profile' ); ?>">
                <span class='fa fa-edit'></span>
            </a>
        </li>
        <li>
            <a class="btn <?php echo $segment == 'view_help' ? 'btn-primary' : 'btn-default'; ?>" href="<?php echo site_url( 'users/help' ); ?>" id='btn_user_help' title="<?php echo lang( 'us_help_title' ); ?>">
                <span class='fa fa-question-circle'></span>
            </a>
            <script type='text/javascript'>
                $(document).ready(function(){
                    $("a#btn_user_help").colorbox( { width:"75%", height:"75%", overlayClose: false } );
                });
            </script>
        </li>
    </ul>
<?php endif; ?>
