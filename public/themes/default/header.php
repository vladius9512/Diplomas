<?php
//print_r( $current_user );
Assets::add_css(    array( 
                            'bootstrap/bootstrap.min.css', 
                            'bootstrap/bootstrap-theme.min.css', 
                            'bootstrap/bootstrap-responsive.min.css', 
                            'bootstrap/bootstrap-chosen.css', 
                            'datatables/dataTables.bootstrap4.css',
                            'datatables/dataTables.tools.css',
                            'colorbox/colorbox.css', 
                            'jquery-ui/jquery-ui.min.css', 
                            'fontawesome/font-awesome.min.css',
                            'ckeditor/styles.css',
                         ) 
                );
Assets::add_js( 'jquery-3.1.1.min.js' );
Assets::add_js( 'jquery-ui.min.js' );
Assets::add_js( 'modernizr-2.5.3.js' );
Assets::add_js( 'bootstrap/bootstrap.3.3.7.min.js' );
Assets::add_js( 'bootstrap/bootstrap.chosen.js' );
Assets::add_js( 'colorbox/jquery.colorbox.min.js' );
Assets::add_js( 'datatables/jquery.dataTables.js' );
Assets::add_js( 'datatables/dataTables.bootstrap4.min.js' );
Assets::add_js( 'datatables/dataTables.tools.min.js' );
Assets::add_js( 'ckeditor/ckeditor.js' );

//$inline  = '$(".dropdown-toggle").dropdown();';
$inline  = '$( "ul.dropdown-menu [data-toggle=dropdown]" ).on( "click", function( event ) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass("open");
			$(this).parent().toggleClass("open");
		});';
$inline .= '$(".tooltips").tooltip();';
Assets::add_js($inline, 'inline');

?>

    <meta charset="utf-8">

    <title>
        <?php
            echo isset( $page_title ) ? "{$page_title} : " : '';
            e( class_exists( 'Settings_lib' ) ? settings_item('site.title') : 'Bonfire' );
        ?>
    </title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php e ( isset( $meta_description ) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e ( isset( $meta_author ) ? $meta_author : ''); ?>">
    
    <?php echo Assets::css(); ?>

    <?php echo Assets::js(); ?>

    <style>
        body {
          margin: 1em 1%;
          overflow-x: hidden;
          width: 98%;
          height: auto;
        }
        .navbar {
          margin-bottom: 0.5em;
        }
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:30px;left:5%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

        span.error{
            color: red;
            font-size: small;
        }
        h3[required='required'],
        h4[required='required'],
        input[required='required'], 
        select[required='required'],
        textarea[required='required']
        {
            /* background-color: inherit !important; */
            background-image: url( '<?php echo base_url( 'themes/admin/images/required.png' ); ?>' ) !important;
            background-repeat: no-repeat !important;
            background-position: right center !important;
            min-height: 1em !important;
        }
        div#AjaxLoader,
        div#DialogLayer
        {
            position: fixed !important;
            z-index: 999999999999 !important;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px; 
            opacity: 0.8; 
            filter: alpha(opacity=80);
            background: #282828;
            display: none;
        }
        div#AjaxLoader div
        {
            display: block;
            width: 128px;
            height: 128px;
            margin: 256px auto;
            background: url( '<?php echo base_url( 'themes/default/images/ajax-loader.gif' ); ?>') transparent no-repeat !important;      
            z-index: -1; 
        }
        div#DialogLayer div.modal-content
        {
            margin-top: 10em !important;
            width: 64em; 
            margin-left: auto;  
            margin-right: auto;
            font-size: 1em; 
            opacity: 1; 
            filter: alpha( opacity=100 );
        }
        div#DialogLayer h4.modal-title span[role="icon"]
        {
            font-size: 1.75em;
            color: #000099;
        }
        div#DialogLayer h4.modal-title span[role="title"]
        {
            color: #000066;
        }
        #cboxLoadedContent{ overflow-x: hidden !important; }
        div.form-control{ height: auto !important; }
        span.form-control{ height: auto !important; min-height: 2.5em; }
        select option:disabled { color: #EEE !important; }

    </style>

    <script type="text/javascript">
        function is_set( object ) 
        {
            return ( ( typeof object != 'undefined' ) ? true : false );
        }
        function is_int( value ) 
        {
            return  !isNaN( value ) && ( parseInt( Number( value ) ) == value ) && !isNaN( parseInt( value, 10 ) );
        }
        function is_num( value ) 
        {
            return  !isNaN( value ) && $.isNumeric( value ) ? true : false;
        }
        function is_email( value ) 
        {
            var r   =   /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return r.test( value );
        }

        function is_image( file ) 
        {
            file = file.toLowerCase();
            var last4 = file.substr( file.length - 4 );
            var last3 = file.substr( file.length - 3 ); 
            return  (   ( last4 == "jpeg" || last3 == "jpg" || last3 == "png" || last3 == "gif"  || last3 == "tif" || last3 == "bmp" ) 
                    ?   true
                    :   false );
        }
        function is_url( value ) 
        {
            var r   =   new RegExp( 
                                    '^(https?:\\/\\/)?' +                                   // protocol
                                    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' +    // domain name
                                    '((\\d{1,3}\\.){3}\\d{1,3}))'+                          // OR ip (v4) address
                                    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+                      // port and path
                                    '(\\?[;&a-z\\d%_.~+=-]*)?'+                             // query string
                                    '(\\#[-a-z\\d_]*)?$','i'                                // fragment locator
                                  ); 
            return r.test( value );
        }
        function is_youtube( url ) 
        {
            return /^((http|https):\/\/)?(www\.)?(youtube\.com)(\/)?([a-zA-Z0-9\-\.]+)\/?/.test( url );
        }
        function is_vimeo( url ) 
        {
            return /^((http|https):\/\/)?(www\.)?vimeo\.com\/(clip\:)?(\d+).*$/.test( url );
        }
        function is_soundcloud( url ) 
        {
            return /^((http|https):\/\/)?(www\.)?(w.\soundcloud\.com)(\/)?([a-zA-Z0-9\-\.]+)\/?/.test( url );
        }
        function array_compare( a1, a2 ) 
        {
            if (a1.length != a2.length) return false;
            var length = a2.length;
            for (var i = 0; i < length; i++) {
                if (a1[i] !== a2[i]) return false;
            }
            return true;
        }
        function sort_array( obj )
        {
            var arr = [];

            for ( var key in obj ) 
            {
                if ( obj.hasOwnProperty( key ) ) 
                {
                    arr.push(obj[key]);
                }
            }
            return arr;
        }
        function overturn_array( obj )
        {
            var arr = [];
            if( obj.length )
            {
                for ( var i = obj.length; i > -1; --i ) 
                {
                    if( is_set( obj[i] ) ) 
                    { 
                        arr.push( obj[i] );
                    }
                }
            }
            return arr;
        }
        function in_array( needle, haystack ) 
        {
            var length = haystack.length;
            for( var i = 0; i < length; i++ ) 
            {
                if( typeof haystack[i] == 'object' ) 
                {
                    if( array_compare( haystack[i], needle ) ) return true;
                } 
                else 
                {
                    if( haystack[i] == needle ) return true;
                }
            }
            return false;
        }
        function romanize ( num ) {
            if (!+num)
                return false;
            var digits = String(+num).split(""),
                key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
                       "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
                       "","I","II","III","IV","V","VI","VII","VIII","IX"],
                roman = "",
                i = 3;
            while (i--)
                roman = (key[+digits.pop() + (i * 10)] || "") + roman;
            return Array(+digits.join("") + 1).join("M") + roman;
        }
        function scroll2Anchor( aName )
        {
            if( is_set( $( "a[name='"+ aName +"']" ) ) )
            {
                var aObject = $( "a[name='"+ aName +"']" );
                $('html,body').animate( { scrollTop: aObject.offset().top }, 'slow' );
            }
        }
        function dialogMessage( title, body )
        {
            if( is_set( $('div#DialogLayer') ) )
            {
                $( 'div#DialogLayer' ).find( 'span[role="title"]' ).empty().html( title );


                $( 'div#DialogLayer' ).modal( { backdrop: 'static', keyboard: false } );

            };
        }
        var DIALOG  =   (   function()
                            {
                                var method = {};
                                method.OPEN   =   function ( settings ) 
                                                    {
                                                        $( 'div#DialogLayer' ).find( 'span[role="title"]' ).empty().html( settings.title )
                                                        $( 'div#DialogLayer' ).find( 'div[role="body"]' ).empty().html( settings.body );
                                                        $( 'div#DialogLayer' ).modal( { backdrop: 'static', keyboard: false } );

                                                        if( typeof settings.close == 'function' )
                                                        {
                                                            $( 'div#DialogLayer' ).find( 'button[role="close_header"]' ).click( function(){
                                                                settings.close(); 
                                                            });
                                                            $( 'div#DialogLayer' ).find( 'button[role="close_footer"]' ).click( function(){
                                                                settings.close();
                                                            });
                                                        }
                                                    };
                                return method;
                            }() );

        $(".colorbox").colorbox( { width:"75%", height:"75%", overlayClose: false } );

        $( document ).ready( function() {

            $.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
            {
                if ( jQuery.fn.dataTable.versionCheck ) 
                {
                    var api = new jQuery.fn.dataTable.Api( oSettings );

                    if ( sNewSource ) 
                    {
                        api.ajax.url( sNewSource ).load( fnCallback, !bStandingRedraw );
                    }
                    else 
                    {
                        api.ajax.reload( fnCallback, !bStandingRedraw );
                    }
                    return;
                }

                if ( sNewSource !== undefined && sNewSource !== null ) 
                {
                    oSettings.sAjaxSource = sNewSource;
                }

                if ( oSettings.oFeatures.bServerSide ) 
                {
                    this.fnDraw();
                    return;
                }

                this.oApi._fnProcessingDisplay( oSettings, true );
                var that = this;
                var iStart = oSettings._iDisplayStart;
                var aData = [];

                this.oApi._fnServerParams( oSettings, aData );

                oSettings.fnServerData.call( oSettings.oInstance, oSettings.sAjaxSource, aData, function( json ) 
                {
                    that.oApi._fnClearTable( oSettings );

                    var aData =  (oSettings.sAjaxDataProp !== "") ?
                        that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;

                    for ( var i=0 ; i<aData.length ; i++ )
                    {
                        that.oApi._fnAddData( oSettings, aData[i] );
                    }

                    oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();

                    that.fnDraw();

                    if ( bStandingRedraw === true )
                    {
                        oSettings._iDisplayStart = iStart;
                        that.oApi._fnCalculateEnd( oSettings );
                        that.fnDraw( false );
                    }

                    that.oApi._fnProcessingDisplay( oSettings, false );

                    if ( typeof fnCallback == 'function' && fnCallback !== null )
                    {
                        fnCallback( oSettings );
                    }
                }, oSettings );
            };
        } );
    </script>

