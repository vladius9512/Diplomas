<div id="tab-pane-06-PPUA-AN1-SEM2" class="tab-pane">

	<h4>
		PPUA AN1 SEM2

	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if( isset($STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An']) != '') : ?>
                    <?php if(isset($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID']) || trim($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_ID'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_ID'] 
									? '' 
									: 'Eroare Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_1_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1']) || trim($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_ID1'] 
									? '' 
									: 'Eroare Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_2_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID']) || trim($STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_ID'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_ID'] 
									? '' 
									: 'Eroare Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Disciplina_3_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
			<tr>
				<td width="25%" class="text-right">Status Sfârşit An:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An'] 
									? '' 
									: 'Eroare Status Sfârşit An' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			 <tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								? ( isset( $STUDENT['PhD_06_PPUA_An1Sem2__Loguri'] ) && ( $STUDENT['PhD_06_PPUA_An1Sem2__Loguri'] = trim( $STUDENT['PhD_06_PPUA_An1Sem2__Loguri'] ) ) ? $STUDENT['PhD_06_PPUA_An1Sem2__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_06_PPUA_An1Sem2__Loguri'>
					<?php echo  ( $STUDENT['PhD_06_PPUA_An1Sem2__Boolean'] 
								?   ( $STUDENT['PhD_06_PPUA_An1Sem2__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>

</div>
