
<div id="tab-pane-04-PID" class="tab-pane">

	<h4>
		PROGRAM INDIVIDUAL DE DOCTORAT
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
			<tr>
				<td width="25%" class="text-right">Profesor 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID_CI_1__Profesor_TEXT'] ) && ( $STUDENT['PhD_04_PID_CI_1__Profesor_TEXT'] = trim( $STUDENT['PhD_04_PID_CI_1__Profesor_TEXT'] ) ) ? $STUDENT['PhD_04_PID_CI_1__Profesor_TEXT'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID_CI_1__Profesor_TEXT'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID_CI_1__Profesor_TEXT'] 
									? '' 
									: 'Eroare Profesor 1' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Profesor 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] ) && ( $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] = trim( $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] ) ) ? $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID_CI_2__Profesor_TEXT'>
					<?php echo  ( $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] 
								?   ( $STUDENT['PhD_04_PID_CI_2__Profesor_TEXT'] 
									? '' 
									: 'Eroare Profesor 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Profesor 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID_CI_3__Profesor_TEXT'] ) && ( $STUDENT['PhD_04_PID_CI_3__Profesor_TEXT'] = trim( $STUDENT['PhD_04_PID_CI_3__Profesor_TEXT'] ) ) ? $STUDENT['PhD_04_PID_CI_3__Profesor_TEXT'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID_CI_3__Profesor_TEXT'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID_CI_3__Profesor_TEXT'] 
									? '' 
									: 'Eroare Profesor 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Semnarea Contractului:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID__SemnareContract'] ) && ( $STUDENT['PhD_04_PID__SemnareContract'] = trim( $STUDENT['PhD_04_PID__SemnareContract'] ) ) ? $STUDENT['PhD_04_PID__SemnareContract'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID__SemnareContract'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID__SemnareContract'] 
									? '' 
									: 'Eroare Semnarea Contractului1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Titlul Tezei de Doctorat:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID__Titlul_Tezei_de_Doctorat'] ) && ( $STUDENT['PhD_04_PID__Titlul_Tezei_de_Doctorat'] = trim( $STUDENT['PhD_04_PID__Titlul_Tezei_de_Doctorat'] ) ) ? $STUDENT['PhD_04_PID__Titlul_Tezei_de_Doctorat'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID__Titlul_Tezei_de_Doctorat'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID__Titlul_Tezei_de_Doctorat'] 
									? '' 
									: 'Eroare Titlul Tezei de Doctorat' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dovada Tezei de Doctorat:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID__Dovada_Teza_de_Doctorat'] ) && ( $STUDENT['PhD_04_PID__Dovada_Teza_de_Doctorat'] = trim( $STUDENT['PhD_04_PID__Dovada_Teza_de_Doctorat'] ) ) ? $STUDENT['PhD_04_PID__Dovada_Teza_de_Doctorat'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID__Dovada_Teza_de_Doctorat'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID__Dovada_Teza_de_Doctorat'] 
									? '' 
									: 'Eroare Dovada Tezei de Doctorat' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_04_PID__Boolean'] 
								? ( isset( $STUDENT['PhD_04_PID_CI_3__Loguri'] ) && ( $STUDENT['PhD_04_PID_CI_3__Loguri'] = trim( $STUDENT['PhD_04_PID_CI_3__Loguri'] ) ) ? $STUDENT['PhD_04_PID_CI_3__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_04_PID_CI_3__Loguri'>
					<?php echo  ( $STUDENT['PhD_04_PID__Boolean'] 
								?   ( $STUDENT['PhD_04_PID_CI_3__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
		</tbody>
	</table>

</div>
