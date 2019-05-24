
<div id="tab-pane-07-PPUA-CERCETARE" class="tab-pane">

	<h4>
		PPUA CERCETARE
		
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if( isset($STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An']) || trim($STUDENT['PhD_06_PPUA_An1Sem2__Status_Sfarsit_An']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Status Intrare An 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_07_PPUA_An2Univ__Boolean'] 
								? ( isset( $STUDENT['PhD_07_PPUA_An2Univ__Status_Intrare_An'] ) && ( $STUDENT['PhD_07_PPUA_An2Univ__Status_Intrare_An'] = trim( $STUDENT['PhD_07_PPUA_An2Univ__Status_Intrare_An'] ) ) ? $STUDENT['PhD_07_PPUA_An2Univ__Status_Intrare_An'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An2Univ__Status_Intrare_An'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_An2Univ__Boolean'] 
								?   ( $STUDENT['PhD_07_PPUA_An2Univ__Status_Intrare_An'] 
									? '' 
									: 'Eroare Status Intrare An 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Status Sfârşit An 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_07_PPUA_An2Univ__Boolean'] 
								? ( isset( $STUDENT['PhD_07_PPUA_An2Univ__Status_Sfarsit_An'] ) && ( $STUDENT['PhD_07_PPUA_An2Univ__Status_Sfarsit_An'] = trim( $STUDENT['PhD_07_PPUA_An2Univ__Status_Sfarsit_An'] ) ) ? $STUDENT['PhD_07_PPUA_An2Univ__Status_Sfarsit_An'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An2Univ__Status_Sfarsit_An'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_An2Univ__Boolean'] 
								?   ( $STUDENT['PhD_07_PPUA_An2Univ__Status_Sfarsit_An'] 
									? '' 
									: 'Eroare Status Sfârşit An 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Status Intrare An 3:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_07_PPUA_An3Univ__Status_Intrare_An'] ) && ( $STUDENT['PhD_07_PPUA_An3Univ__Status_Intrare_An'] = trim( $STUDENT['PhD_07_PPUA_An3Univ__Status_Intrare_An'] ) ) ? $STUDENT['PhD_07_PPUA_An3Univ__Status_Intrare_An'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An3Univ__Status_Intrare_An'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_An3Univ__Status_Intrare_An'] 
									? '' 
									: 'Eroare Status Intrare An 3' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Status Sfârşit An 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_An3Univ__Status_Sfarsit_An'] ) && ( $STUDENT['PhD_07_PPUA_An3Univ__Status_Sfarsit_An'] = trim( $STUDENT['PhD_07_PPUA_An3Univ__Status_Sfarsit_An'] ) ) ? $STUDENT['PhD_07_PPUA_An3Univ__Status_Sfarsit_An'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An3Univ__Status_Sfarsit_An'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_An3Univ__Status_Sfarsit_An'] 
									? '' 
									: 'Eroare Status Sfârşit An 3' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Status Intrare An 4:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_07_PPUA_An4Univ__Status_Intrare_An'] ) && ( $STUDENT['PhD_07_PPUA_An4Univ__Status_Intrare_An'] = trim( $STUDENT['PhD_07_PPUA_An4Univ__Status_Intrare_An'] ) ) ? $STUDENT['PhD_07_PPUA_An4Univ__Status_Intrare_An'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An4Univ__Status_Intrare_An'>
					<?php echo ( $STUDENT['PhD_07_PPUA_An4Univ__Status_Intrare_An'] 
									? '' 
									: 'Eroare Status Intrare An 4' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Status Sfârşit An 4:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An'] ) && ( $STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An'] = trim( $STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An'] ) ) ? $STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_An4Univ__Status_Sfarsit_An'>
					<?php echo( $STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An'] 
									? '' 
									: 'Eroare Status Sfârşit An 4' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Denumire Referat 1:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Denumire'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Denumire'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Denumire'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Denumire'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_1_Denumire'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Denumire'] 
									? '' 
									: 'Eroare Denumire Referat 1' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Profesor Referat 1:</td>
				<td width="55%" class="text-left">
					<?php echo    ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Referat 1' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Dată susţinere Referat 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Data_Sustinere'] 
									? '' 
									: 'Eroare Dată susţinere Referat 1' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Calificativ Referat 1:</td>
				<td width="55%" class="text-left">
					<?php echo    ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Calificativ'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Calificativ'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Calificativ'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Calificativ'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_1_Calificativ'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Calificativ'] 
									? '' 
									: 'Eroare Calificativ Referat 1' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Referat 1:</td>
				<td width="55%" class="text-left">
					<?php echo  ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'>
					<?php echo   ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_1_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Referat 1' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Denumire Referat 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Denumire'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Denumire'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Denumire'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Denumire'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_2_Denumire'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Denumire'] 
									? '' 
									: 'Eroare Denumire Referat 2' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Profesor Referat 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Referat 2' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Dată susţinere Referat 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Data_Sustinere'] 
									? '' 
									: 'Eroare Dată susţinere Referat 2' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Calificativ Referat 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Calificativ'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Calificativ'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Calificativ'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Calificativ'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_2_Calificativ'>
					<?php echo     ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Calificativ'] 
									? '' 
									: 'Eroare Calificativ Referat 2' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Referat 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'>
					<?php echo   ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_2_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Referat 2' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Denumire Referat 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Denumire'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Denumire'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Denumire'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Denumire'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_3_Denumire'>
					<?php echo   ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Denumire'] 
									? '' 
									: 'Eroare Denumire Referat 3' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Profesor Referat 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'>
					<?php echo   ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Profesor_Text'] 
									? '' 
									: 'Eroare Profesor Referat 3' ) 
								; ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Dată susţinere Referat 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Data_Sustinere'] 
									? '' 
									: 'Eroare Dată susţinere Referat 3' ) 
							   ; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Calificativ Referat 3:</td>
				<td width="55%" class="text-left">
					<?php echo    ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Calificativ'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Calificativ'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Calificativ'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Calificativ'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_3_Calificativ'>
					<?php echo  ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Calificativ'] 
									? '' 
									: 'Eroare Calificativ Referat 3' ) 
								; ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Credite Referat 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( isset( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'] ) && ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'] = trim( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'] ) ) ? $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'] : '' ) ; ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'>
					<?php echo    ( $STUDENT['PhD_07_PPUA_Cercetare__Referat_3_Nr_de_Credite'] 
									? '' 
									: 'Eroare Număr Credite Referat 3' ) 
								; ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo  ( isset( $STUDENT['PhD_07_PPUA_Loguri'] ) && ( $STUDENT['PhD_07_PPUA_Loguri'] = trim( $STUDENT['PhD_07_PPUA_Loguri'] ) ) ? $STUDENT['PhD_07_PPUA_Loguri'] : '' ) ; ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_07_PPUA_Loguri'>
					<?php echo     ( $STUDENT['PhD_07_PPUA_Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								; ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>

</div>
