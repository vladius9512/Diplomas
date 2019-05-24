    <table id="Table_Notifications" class="table table-striped dataTable" style="width: 100% !important;">
        <thead>
            <th style="width: 15% !important; text-align: center;">
                <?php echo lang( 'us_page__notifications__label__created_on' ); ?>
            </th>
            <th style="width: 85% !important; text-align: left;">
                <?php echo lang( 'us_page__notifications__label__title' ); ?>
            </th>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script type="text/javascript">
        $( document ).ready( function() {
                   
            var $Table_Notifications =   
                $( 'table#Table_Notifications' )
                    .dataTable
                    ( 
                        {
                            "destroy":          true,
                            "responsive":       true,
                            "bFilter":          true,
                            "bProcessing":      true,
                            "bServerSide":      true,
                            "sDom":             'T<"clear">lfrtip',
                            "bSort":            true, 
                            "ajax":             {
                                                    "url": "<?php echo site_url( 'users/notifications/true' ); ?>"
                                                },
                            "searching":        true,
                            "sPaginationType":  'full_numbers',
                            "iDisplayLength":   100,
                            "lengthMenu":       [
                                                    [ 
                                                        100, 
                                                        250, 
                                                        500,
                                                        2147483647
                                                    ],
                                                    [ 
                                                        100, 
                                                        250, 
                                                        500,
                                                        'All'
                                                    ]
                                                ],
                            "oTableTools": {
                                                "aButtons": [
                                                                {
                                                                    "sExtends":    "copy_to_div",
                                                                    "sButtonText": "Copy to div",
                                                                    "sDiv":        "copy",
                                                                }
                                                            ]
                                            },
                            "tableTools":   {
                                                "sSwfPath": "<?php echo base_url( 'themes/default/js/datatables/copy_csv_xls_pdf.swf' ); ?>"
                                            },
                            "columnDefs":   [ 
                                                {
                                                    "targets": 0,
                                                    "visible" : true,
                                                    "searchable": true,
                                                    "orderable": true,
                                                    "render":   function ( data, type, row ) 
                                                                {
                                                                    return  data;
                                                                }
                                                },
                                                {
                                                    "targets": 1,
                                                    "visible" : true,
                                                    "searchable": true,
                                                    "orderable": false,
                                                    "render":   function ( data, type, row ) 
                                                                {
                                                                    return  data;
                                                                }
                                                }
                                            ],
                            "fnDrawCallback":   function()  
                                                {

                                                }
                        } 
                    );
            $( 'button#Refresh_Notificari' ).click( function() {
                $Table_Notifications.fnReloadAjax();
            });
        });
    </script>