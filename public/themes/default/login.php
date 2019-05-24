<?php echo theme_view('header'); ?>
<style>body { background: #f5f5f5; }</style>
<body>
    <div class="container"><!-- Start of Main Container -->
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
                        <li>
                            <a href="<?php echo site_url(); ?>" title="&larr; <?php echo lang( 'us_back_to' ) . ': ' . $this->settings_lib->item('site.title'); ?>">
                                <i class="fa fa-home"></i>
                                <?php echo ( lang( 'bf_home' ) ); ?>
                            </a>
                        </li>
                        <li>
                            <a id="about" title="&bigstar; <?php echo lang( 'bf_about' ) . ': ' . $this->settings_lib->item('site.title'); ?>" href="<?php echo site_url( 'about' ); ?>">
                                <i class="fa fa-university"></i>
                                <?php echo ( lang( 'bf_about' ) ); ?>
                            </a>
                            <script type='text/javascript'>
                                $(document).ready(function(){
                                    $("a#about").colorbox( { width:"75%", height:"75%", overlayClose: false } );
                                });
                            </script>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            echo isset($content) ? $content : Template::content();

            echo theme_view( 'footer', array( 'show' => true ) );
        ?>
    </div>
</body>