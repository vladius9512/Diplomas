
<div id="tab-pane-12-CONFIRMARE-TITLU" class="tab-pane">

	<h4>
		CONFIRMAREA TITLULUI DE DOCTOR
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
                    <?php if(isset($STUDENT['PhD_10_Finalizare_1__Rezultat']) || trim($STUDENT['PhD_10_Finalizare_1__Rezultat']) != '' || isset($STUDENT['PhD_11_Finalizare_2__Rezultat']) || trim($STUDENT['PhD_11_Finalizare_2__Rezultat']) != '' ) : ?>
			<tr>
				<td width="25%" class="text-right">Numărul Documentului:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								? ( isset( $STUDENT['PhD_12_Confirmare_Titlu__Numar_Document'] ) && ( $STUDENT['PhD_12_Confirmare_Titlu__Numar_Document'] = trim( $STUDENT['PhD_12_Confirmare_Titlu__Numar_Document'] ) ) ? $STUDENT['PhD_12_Confirmare_Titlu__Numar_Document'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_12_Confirmare_Titlu__Numar_Document'>
					<?php echo  ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								?   ( $STUDENT['PhD_12_Confirmare_Titlu__Numar_Document'] 
									? '' 
									: 'Eroare Numărul Documentului' ) 
								: '' ); ?> 
				</td>
			</tr>
			 <tr>
				<td width="25%" class="text-right">Data confirmării:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								? ( isset( $STUDENT['PhD_12_Confirmare_Titlu__Data_Confirmare'] ) && ( $STUDENT['PhD_12_Confirmare_Titlu__Data_Confirmare'] = trim( $STUDENT['PhD_12_Confirmare_Titlu__Data_Confirmare'] ) ) ? $STUDENT['PhD_12_Confirmare_Titlu__Data_Confirmare'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_12_Confirmare_Titlu__Data_Confirmare'>
					<?php echo  ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								?   ( $STUDENT['PhD_12_Confirmare_Titlu__Data_Confirmare'] 
									? '' 
									: 'Eroare Data confirmării' ) 
								: '' ); ?> 
				</td>
			</tr>
<!--			 <tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								? ( isset( $STUDENT['PhD_12_Confirmare_Titlu__Loguri'] ) && ( $STUDENT['PhD_12_Confirmare_Titlu__Loguri'] = trim( $STUDENT['PhD_12_Confirmare_Titlu__Loguri'] ) ) ? $STUDENT['PhD_12_Confirmare_Titlu__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_12_Confirmare_Titlu__Loguri'>
					<?php echo  ( $STUDENT['PhD_12_Confirmare_Titlu__Boolean'] 
								?   ( $STUDENT['PhD_12_Confirmare_Titlu__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
                    <?php endif; ?>
		</tbody>
	</table>
   
</div>
