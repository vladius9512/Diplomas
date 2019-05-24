
<div id="tab-pane-05-PPUA-AN1-SEM1" class="tab-pane">

	<h4>
		PPUA AN1 SEM1
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
			<tr>
				<td width="25%" class="text-right">Status Intrare An 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Status_Intrare_An'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Status_Intrare_An'] 
									? '' 
									: 'Eroare Status Intrare An 1' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_ID'] 
									? '' 
									: 'Eroare Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_1_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 1' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_ID'] 
									? '' 
									: 'Eroare Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_2_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 2' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_ID'] 
									? '' 
									: 'Eroare Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_3_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 3' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_ID'] 
									? '' 
									: 'Eroare Disciplina 4' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 4' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 4' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 4' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_4_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 4' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_ID'] 
									? '' 
									: 'Eroare Disciplina 5' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 5' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 5' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 5' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_5_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 5' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID']) || trim($STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Disciplina 6:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_ID'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_ID'] 
									? '' 
									: 'Eroare Disciplina 6' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Denumire:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Denumire'] 
									? '' 
									: 'Eroare Denumire' ) 
								: '' ); ?> 
				</td>
			</tr>-->
			<tr>
				<td width="25%" class="text-right">Profesor Disciplina 6:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Disciplina 6' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Dată Examen Disciplina 6:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Data_Examen'] 
									? '' 
									: 'Eroare Dată Examen Disciplina 6' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Notă Examen Disciplina 6:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nota_Examen'] 
									? '' 
									: 'Eroare Notă Examen Disciplina 6' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Disciplina 6:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Disciplina_6_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Disciplina 6' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
<!--			 <tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								? ( isset( $STUDENT['PhD_05_PPUA_An1Sem1__Loguri'] ) && ( $STUDENT['PhD_05_PPUA_An1Sem1__Loguri'] = trim( $STUDENT['PhD_05_PPUA_An1Sem1__Loguri'] ) ) ? $STUDENT['PhD_05_PPUA_An1Sem1__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_05_PPUA_An1Sem1__Loguri'>
					<?php echo  ( $STUDENT['PhD_05_PPUA_An1Sem1__Boolean'] 
								?   ( $STUDENT['PhD_05_PPUA_An1Sem1__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
		</tbody>
	</table>

</div>
