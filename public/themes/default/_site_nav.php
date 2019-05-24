<div class="row-fluid">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="btn btn-default navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url(); ?>" id="logo" class="navbar-brand" title="<?php e( class_exists( 'Settings_lib' ) ? settings_item('site.title') : 'Univ.Transilvania.BV'); ?>">
                    <img src="<?php echo base_url( 'themes/default/images/logo.png' ); ?>" class="img-responsive img-fluid" style="height: 40px; width: 102px; margin: 0.125em 0.25em; padding: 0;" />
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collaps">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo check_class('home'); ?>>
                        <a href="<?php echo site_url(); ?>">
                            <i class="fa fa-home"></i>
                            <?php echo ( lang( 'bf_home' ) ); ?>
                        </a>
                    </li>
                    <li>
                        <a id="about" title="&bigstar; <?php echo lang( 'bf_about' ) . ': ' . $this->settings_lib->item('site.title'); ?>" href="<?php echo site_url( 'home/about' ); ?>">
                            <i class="fa fa-university"></i>
                            <?php echo ( lang( 'bf_about' ) ); ?>
                        </a>
                        <script type='text/javascript'>
                            $(document).ready(function(){
                                $("a#about").colorbox( { width:"80%", height:"80%", overlayClose: false } );
                            });
                        </script>
                    </li>
                    <?php if (empty($current_user)) : ?>
                    <li>
                        <a href="<?php echo site_url(LOGIN_URL); ?>">
                            <i class="fa fa-sign-in"></i>
                            Sign In
                        </a>
                    </li>
                    <?php else : ?>
                    <li>
                        <a href="<?php echo site_url( '/users/panel' ); ?>">
                            <i class="fa fa-tachometer"></i>
                            <?php echo( lang( 'bf_user_workpage' ) ); ?>
                        </a>
                    </li>
                    

                    <li class="dropdown">
                        <a href="#" id="dropdownMenuUserPage" class='dropdown-toggle' data-toggle='dropdown' title="<?php e(lang('bf_user_settings')); ?>">
                            <i class="fa fa-user"></i>
                            <?php echo $current_user->username; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuUserPage">
                            <li>
                                <a href="mailto:<?php echo $current_user->email; ?>">
                                    <span class="pull-right"><?php echo $current_user->user_img; ?></span>
                                    <span>
                                        <i class="fa fa-envelope-o"></i>
                                        <?php echo $current_user->email; ?>
                                    </span>
                                </a>
                            </li>
                            
                            <?php if( ( isset( $current_user->role_id ) && $current_user->role_id ) && ( isset( $current_user->role_name ) && $current_user->role_name ) ) : ?>

                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#" title="<?php echo $current_user->role_name; ?>">
                                    <i class="fa fa-user-secret"></i>
                                    <b><?php echo $current_user->role_name; ?></b>
                                </a>
                            </li>

                            <?php endif; ?>

                            <!--
                            <li role="separator" class="divider"></li>
                            <li <?php echo check_method('profile'); ?>>
                                <a href="<?php echo site_url( 'users/profile' ); ?>">
                                    <i class="fa fa-edit"></i>
                                    <?php e(lang('us_edit_profile')); ?>
                                </a>
                            </li>
                            -->

                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo site_url('logout'); ?>">
                                    <i class="fa fa-power-off"></i>
                                    <?php e( lang( 'bf_action_logout' ) ); ?>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li><a class="btn" role="FontMinus" style="font-size: 0.85em;">A-</a></li>
                    <li><a class="btn" role="FontReset" style="font-size: 1.00em;">A</a></li>
                    <li><a class="btn" role="FontPlus" style="font-size: 1.15em;">A+</a></li>
                    <script type="text/javascript">
                        $( document ).ready( function() {
                            var $ThePageBody = $( 'body' );
                            var $IniFontSize = $ThePageBody.css( "font-size" );
                            $( 'a[role="FontPlus"]' ).click( function() {
                                $ThePageBody.css( "font-size", ( parseInt( ( $ThePageBody.css( "font-size" ) ).replace( /px/, "" ) ) + 1 ) + "px" );	
                            });
                            $( 'a[role="FontReset"]' ).click( function () {
                                $ThePageBody.css( "font-size", $IniFontSize );
                            });
                            $( 'a[role="FontMinus"]' ).click( function() {
                                $ThePageBody.css( "font-size", ( parseInt( ( $ThePageBody.css( "font-size" ) ).replace( /px/, "" ) ) - 1 ) + "px" );
                            });
                        });
                    </script>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php if ( isset( $toolbar_title ) ) : ?>
    <div id="nav-bar" class="container-fluid">
        <div class="pull-left">
            <?php echo $toolbar_title; ?>
        </div>
        <div class="pull-right">
            <?php Template::block( 'sub_nav', '' ); ?>
        </div>
    </div>
<?php endif; ?>