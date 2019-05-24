<div id="tab-pane-13-PLATFORMA-NATIONALA-REI" class="tab-pane">

	<h4>
		PLATFORMA NAŢIONALĂ REI
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if(isset($STUDENT['PhD_12_Confirmare_Titlu__Numar_Document']) || trim($STUDENT['PhD_12_Confirmare_Titlu__Numar_Document']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Data înregistrării:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								? ( isset( $STUDENT['PhD_13_Platforma_Nationala_REI__Data_Inregistrare'] ) && ( $STUDENT['PhD_13_Platforma_Nationala_REI__Data_Inregistrare'] = trim( $STUDENT['PhD_13_Platforma_Nationala_REI__Data_Inregistrare'] ) ) ? $STUDENT['PhD_13_Platforma_Nationala_REI__Data_Inregistrare'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_13_Platforma_Nationala_REI__Data_Inregistrare'>
					<?php echo  ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								?   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Data_Inregistrare'] 
									? '' 
									: 'Eroare Data înregistrării' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr confirmare:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								? ( isset( $STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare'] ) && ( $STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare'] = trim( $STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare'] ) ) ? $STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_13_Platforma_Nationala_REI__Numar_Confirmare'>
					<?php echo  ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								?   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Numar_Confirmare'] 
									? '' 
									: 'Eroare Număr confirmare' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								? ( isset( $STUDENT['PhD_13_Platforma_Nationala_REI__Loguri'] ) && ( $STUDENT['PhD_13_Platforma_Nationala_REI__Loguri'] = trim( $STUDENT['PhD_13_Platforma_Nationala_REI__Loguri'] ) ) ? $STUDENT['PhD_13_Platforma_Nationala_REI__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_13_Platforma_Nationala_REI__Loguri'>
					<?php echo  ( $STUDENT['PhD_13_Platforma_Nationala_REI__Boolean'] 
								?   ( $STUDENT['PhD_13_Platforma_Nationala_REI__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>

</div>
