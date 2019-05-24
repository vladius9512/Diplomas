<div id="tab-pane-14-DIPLOMA-DOCTORAT" class="tab-pane">

	<h4>
		DIPLOMĂ DOCTORAT
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if(isset($STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare']) || trim($STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Serie:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								? ( isset( $STUDENT['PhD_14_Diploma_Doctorat__Serie'] ) && ( $STUDENT['PhD_14_Diploma_Doctorat__Serie'] = trim( $STUDENT['PhD_14_Diploma_Doctorat__Serie'] ) ) ? $STUDENT['PhD_14_Diploma_Doctorat__Serie'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_14_Diploma_Doctorat__Serie'>
					<?php echo  ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								?   ( $STUDENT['PhD_14_Diploma_Doctorat__Serie'] 
									? '' 
									: 'Eroare Serie' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								? ( isset( $STUDENT['PhD_14_Diploma_Doctorat__Numar'] ) && ( $STUDENT['PhD_14_Diploma_Doctorat__Numar'] = trim( $STUDENT['PhD_14_Diploma_Doctorat__Numar'] ) ) ? $STUDENT['PhD_14_Diploma_Doctorat__Numar'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_14_Diploma_Doctorat__Numar'>
					<?php echo  ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								?   ( $STUDENT['PhD_14_Diploma_Doctorat__Numar'] 
									? '' 
									: 'Eroare Număr' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								? ( isset( $STUDENT['PhD_14_Diploma_Doctorat__Loguri'] ) && ( $STUDENT['PhD_14_Diploma_Doctorat__Loguri'] = trim( $STUDENT['PhD_14_Diploma_Doctorat__Loguri'] ) ) ? $STUDENT['PhD_14_Diploma_Doctorat__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_14_Diploma_Doctorat__Loguri'>
					<?php echo  ( $STUDENT['PhD_14_Diploma_Doctorat__Boolean'] 
								?   ( $STUDENT['PhD_14_Diploma_Doctorat__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>

</div>
