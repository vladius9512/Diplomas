
<div id="tab-pane-10-FINALIZARE-1" class="tab-pane">

	<h4>
		FINALIZARE - SESIUNEA NR. 1

	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if(isset($STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An']) || trim($STUDENT['PhD_07_PPUA_An4Univ__Status_Sfarsit_An']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Titlul Tezei de Doctorat:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'] ) && ( $STUDENT['PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'] = trim( $STUDENT['PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Titlul_Tezei_de_Doctorat'] 
									? '' 
									: 'Eroare Titlul Tezei de Doctorat' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data Susţinerii:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Data_de_Sustinerii'] ) && ( $STUDENT['PhD_10_Finalizare_1__Data_de_Sustinerii'] = trim( $STUDENT['PhD_10_Finalizare_1__Data_de_Sustinerii'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Data_de_Sustinerii'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Data_de_Sustinerii'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Data_de_Sustinerii'] 
									? '' 
									: 'Eroare Data Susţinerii' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Locaţia Susţinerii:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Locatia_Sustinerii'] ) && ( $STUDENT['PhD_10_Finalizare_1__Locatia_Sustinerii'] = trim( $STUDENT['PhD_10_Finalizare_1__Locatia_Sustinerii'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Locatia_Sustinerii'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Locatia_Sustinerii'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Locatia_Sustinerii'] 
									? '' 
									: 'Eroare Locaţia Susţinerii' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Document Rector:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_0_Document_Rector'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_0_Document_Rector'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_0_Document_Rector'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_0_Document_Rector'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_0_Document_Rector'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_0_Document_Rector'] 
									? '' 
									: 'Eroare Document Rector' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume şi Prenume Profesor Preşedinte:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_1_Presedinte__Nume_si_Prenume'] 
									? '' 
									: 'Eroare Nume şi Prenume Profesor Preşedinte' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume şi Prenume Profesor Conducător Teză:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_2_Conducator_Teza__Nume_si_Prenume'] 
									? '' 
									: 'Eroare Nume şi Prenume Profesor Conducător Teză' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume şi Prenume Profesor Referent Oficial 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_1__Profesor_Nume şi Prenume'] 
									? '' 
									: 'Eroare Nume şi Prenume Profesor Referent Oficial 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume şi Prenume Profesor Referent Oficial 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_2__Profesor_Nume şi Prenume'] 
									? '' 
									: 'Eroare Nume şi Prenume Profesor Referent Oficial 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume şi Prenume Profesor Referent Oficial 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'] ) && ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'] = trim( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Comisie_3_Referent_Oficial_3__Profesor_Nume şi Prenume'] 
									? '' 
									: 'Eroare Nume şi Prenume Profesor Referent Oficial 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Rezultat:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Rezultat'] ) && ( $STUDENT['PhD_10_Finalizare_1__Rezultat'] = trim( $STUDENT['PhD_10_Finalizare_1__Rezultat'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Rezultat'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Rezultat'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Rezultat'] 
									? '' 
									: 'Eroare Rezultat' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								? ( isset( $STUDENT['PhD_10_Finalizare_1__Loguri'] ) && ( $STUDENT['PhD_10_Finalizare_1__Loguri'] = trim( $STUDENT['PhD_10_Finalizare_1__Loguri'] ) ) ? $STUDENT['PhD_10_Finalizare_1__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_10_Finalizare_1__Loguri'>
					<?php echo  ( $STUDENT['PhD_10_Finalizare_1__Boolean'] 
								?   ( $STUDENT['PhD_10_Finalizare_1__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>

</div>
