<!doctype html>
<html>
    <head>
        <?php echo theme_view('header'); ?>
    </head>
    <body>
        <div id="AjaxLoader" style="display: none;">
            <div></div>
        </div>

        <div id="DialogLayer" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <button role="close_header" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        <span role="icon" class="fa fa-exclamation-circle"></span>
                        <span role="title" style="position: absolute; margin-top:3px; padding-left: 15px; font-weight: 700;"></span>
                    </h4>
                </div>
                <div role="body" class="modal-body">

                </div>
                <div class="modal-footer">
                    <button role="close_footer" type="button" class="btn btn-sm btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>

        <?php echo theme_view('_site_nav'); ?>

        <div class="row-fluid">

            <?php echo Template::message(); ?>

            <?php echo isset( $content ) ? $content : Template::content(); ?>

        </div>

        <?php echo theme_view('footer'); ?>

    </body>
</html>