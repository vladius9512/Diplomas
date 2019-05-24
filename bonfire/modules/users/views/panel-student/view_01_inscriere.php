
<div id="tab-pane-01-INSCRIERE" class="tab-pane">
	<h4>
		ÎNSCRIERE
	</h4>
	<table class='table table-striped table-responsive'>
		<tbody>
			<tr>
				<td width="25%" class="text-right">Anul Universitar:</td>
				<td width="55%" class="text-left">
					<?php echo  ( $STUDENT['PhD_01_Inscriere__Boolean'] 
                                                    ?   (   ( isset( $STUDENT['PhD_01_Inscriere__ID_AnUniv'] ) && ( $STUDENT['PhD_01_Inscriere__ID_AnUniv'] = intval( trim( $STUDENT['PhD_01_Inscriere__ID_AnUniv'] ) ) ) ) &&
                                                            ( isset( $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] ) && ( $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] = trim( $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] ) ) )
                                                        ?   $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] 
                                                        :   '' ) 
                                                    :   ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_01_Inscriere__Denumire_AnUniv'>
					<?php echo  ( $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] 
								?   ( $STUDENT['PhD_01_Inscriere__Denumire_AnUniv'] 
									? '' 
									: 'Eroare Anul Universitar' ) 
								: '' ); ?> 
				</td>
			</tr>
		</tbody>
	</table>
</div>
