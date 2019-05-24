
<div id="tab-pane-03-INMATRICULARE" class="tab-pane">

	<h4>
		ÎNMATRICULARE
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
			<tr>
				<td width="25%" class="text-right">Domeniu de Doctorat:</td>
				<td width="55%" class="text-left">
					<?php   echo    ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
                                                        ? ( ( ( isset( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__ID'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__ID'] = trim( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__ID'] ) ) ) &&
                                                        ( isset( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'] = trim( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'] ) ) ) )
                                                
                                                ? $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Domeniu_de_Doctorat__Denumire'] 
									? '' 
									: 'Eroare Domeniu de Doctorat' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Profesor Conducător de Doctorat:</td>
				<td width="55%" class="text-left">
					<?php   echo    ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
                                                        ? ( ( ( isset( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_ID'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_ID'] = trim( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_ID'] ) ) ) &&
                                                        ( isset( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'] = trim( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'] ) ) ) )
                                                
                                                ? $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Conducator_Doctorat__Profesor_Nume_si_Prenume'] 
									? '' 
									: 'Eroare Profesor Conducător de Doctorat' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Cod Formă de Pregătire:</td>
				<td width="55%" class="text-left">
					<?php   echo    ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
                                                        ? ( ( ( isset( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Cod'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Cod'] = trim( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Cod'] ) ) ) &&
                                                        ( isset( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'] ) && 
                                                        ( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'] = trim( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'] ) ) ) )
                                                
                                                ? $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Forma_de_Pregatire__Denumire'] 
									? '' 
									: 'Eroare Cod Formă de Pregătire' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Număr Matricol:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								? ( isset( $STUDENT['PhD_03_Inmatriculare__Numar_Matricol'] ) && ( $STUDENT['PhD_03_Inmatriculare__Numar_Matricol'] = trim( $STUDENT['PhD_03_Inmatriculare__Numar_Matricol'] ) ) ? $STUDENT['PhD_03_Inmatriculare__Numar_Matricol'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Numar_Matricol'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Numar_Matricol'] 
									? '' 
									: 'Eroare Număr Matricol' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Cazare Cămin:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								? ( isset( $STUDENT['PhD_03_Inmatriculare__Cazare__Camin'] ) && ( $STUDENT['PhD_03_Inmatriculare__Cazare__Camin'] = trim( $STUDENT['PhD_03_Inmatriculare__Cazare__Camin'] ) ) ? $STUDENT['PhD_03_Inmatriculare__Cazare__Camin'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Cazare__Camin'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Cazare__Camin'] 
									? '' 
									: 'Eroare Cazare Cămin' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Cazare Cameră:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								? ( isset( $STUDENT['PhD_03_Inmatriculare__Cazare__Camera'] ) && ( $STUDENT['PhD_03_Inmatriculare__Cazare__Camera'] = trim( $STUDENT['PhD_03_Inmatriculare__Cazare__Camera'] ) ) ? $STUDENT['PhD_03_Inmatriculare__Cazare__Camera'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Cazare__Camera'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Cazare__Camera'] 
									? '' 
									: 'Eroare Cazare Cameră' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Cazare Nr. Studenţi pe Cameră</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								? ( isset( $STUDENT['PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'] ) && ( $STUDENT['PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'] = trim( $STUDENT['PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'] ) ) ? $STUDENT['PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Cazare__Nr_Studenti_pe_Camera'] 
									? '' 
									: 'Eroare Cazare Nr. Studenţi pe Cameră' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <tr>
				<td width="25%" class="text-right">Cazare taxă pe lună:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								? ( isset( $STUDENT['PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'] ) && ( $STUDENT['PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'] = trim( $STUDENT['PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'] ) ) ? $STUDENT['PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'>
					<?php echo  ( $STUDENT['PhD_03_Inmatriculare__Boolean'] 
								?   ( $STUDENT['PhD_03_Inmatriculare__Cazare__Taxa_pe_Luna'] 
									? '' 
									: 'Eroare Cazare taxă pe lună' ) 
								: '' ); ?> 
				</td>
			</tr>
                        
		</tbody>
        </table>

</div>
