<div id="tab-pane-08-PERIOADA-DE-PRELUNGIRE" class="tab-pane">

	<h4>
		PERIOADA DE PRELUNGIRE
		
	</h4>
	<table class='table table-striped table-responsive'>
		<tbody>
                        
                        <?php if(isset($STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada']) || trim($STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Documentul Dovadă Perioada 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__1_Document_Dovada'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Document_Dovada'] 
									? '' 
									: 'Eroare Documentul Dovadă Perioada 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de început a perioadei 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Inceput'] 
									? '' 
									: 'Eroare Data de început a perioadei 1' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de sfârşit a perioadei 1:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__1_Data_de_Sfarsit'] 
									? '' 
									: 'Eroare Data de sfârşit a perioadei 1' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada']) || trim($STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Documentul Dovadă Perioada 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__2_Document_Dovada'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Document_Dovada'] 
									? '' 
									: 'Eroare Documentul Dovadă Perioada 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de început a perioadei 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Inceput'] 
									? '' 
									: 'Eroare Data de început a perioadei 2' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de sfârşit a perioadei 2:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__2_Data_de_Sfarsit'] 
									? '' 
									: 'Eroare Data de sfârşit a perioadei 2' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada']) || trim($STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Documentul Dovadă Perioada 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__3_Document_Dovada'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Document_Dovada'] 
									? '' 
									: 'Eroare Documentul Dovadă Perioada 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de început a perioadei 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Inceput'] 
									? '' 
									: 'Eroare Data de început a perioadei 3' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de sfârşit a perioadei 3:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__3_Data_de_Sfarsit'] 
									? '' 
									: 'Eroare Data de sfârşit a perioadei 3' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada']) || trim($STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Documentul Dovadă Perioada 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__4_Document_Dovada'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Document_Dovada'] 
									? '' 
									: 'Eroare Documentul Dovadă Perioada 4' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de început a perioadei 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Inceput'] 
									? '' 
									: 'Eroare Data de început a perioadei 4' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de sfârşit a perioadei 4:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__4_Data_de_Sfarsit'] 
									? '' 
									: 'Eroare Data de sfârşit a perioadei 4' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
                        <?php if(isset($STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada']) || trim($STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada']) != '') : ?>
			<tr>
				<td width="25%" class="text-right">Documentul Dovadă Perioada 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__5_Document_Dovada'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Document_Dovada'] 
									? '' 
									: 'Eroare Documentul Dovadă Perioada 5' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de început a perioadei 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Inceput'] 
									? '' 
									: 'Eroare Data de început a perioadei 5' ) 
								: '' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data de sfârşit a perioadei 5:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__5_Data_de_Sfarsit'] 
									? '' 
									: 'Eroare Data de sfârşit a perioadei 5' ) 
								: '' ); ?> 
				</td>
			</tr>
                        <?php endif; ?>
<!--			<tr>
				<td width="25%" class="text-right">Loguri:</td>
				<td width="55%" class="text-left">
					<?php echo   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								? ( isset( $STUDENT['PhD_08_Perioada_de_Prelungire__Loguri'] ) && ( $STUDENT['PhD_08_Perioada_de_Prelungire__Loguri'] = trim( $STUDENT['PhD_08_Perioada_de_Prelungire__Loguri'] ) ) ? $STUDENT['PhD_08_Perioada_de_Prelungire__Loguri'] : '' ) : ''); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_08_Perioada_de_Prelungire__Loguri'>
					<?php echo  ( $STUDENT['PhD_08_Perioada_de_Prelungire__Boolean'] 
								?   ( $STUDENT['PhD_08_Perioada_de_Prelungire__Loguri'] 
									? '' 
									: 'Eroare Loguri' ) 
								: '' ); ?> 
				</td>
			</tr>-->
		</tbody>
	</table>

</div>
