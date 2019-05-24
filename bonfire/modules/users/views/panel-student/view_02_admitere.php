
<div id="tab-pane-02-ADMITERE" class="tab-pane">

	<h4>
		ADMITERE
	</h4>

	<table class='table table-striped table-responsive'>
		 <tbody>
			 <tr>
				 <td width="25%" class="text-right">Medie Ani de Studiu:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Medie_Ani_de_Studiu'] ) && ( $STUDENT['PhD_02_Admitere__Medie_Ani_de_Studiu'] = trim( $STUDENT['PhD_02_Admitere__Medie_Ani_de_Studiu'] ) ) ? $STUDENT['PhD_02_Admitere__Medie_Ani_de_Studiu'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Medie_Ani_de_Studiu'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Medie_Ani_de_Studiu'] 
									 ? '' 
									 : 'Eroare Medie Ani de Studiu' ) 
								 : '' ); ?> 
				 </td>
			</tr>
                        <tr>
				 <td width="25%" class="text-right">Medie Licenţă:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Medie_Licenta'] ) && ( $STUDENT['PhD_02_Admitere__Medie_Licenta'] = trim( $STUDENT['PhD_02_Admitere__Medie_Licenta'] ) ) ? $STUDENT['PhD_02_Admitere__Medie_Licenta'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Medie_Licenta'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Medie_Licenta'] 
									 ? '' 
									 : 'Eroare Medie Licenţă' ) 
								 : '' ); ?> 
				 </td>
			 </tr>
			<tr>
				 <td width="25%" class="text-right">Medie Master:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Medie_Master'] ) && ( $STUDENT['PhD_02_Admitere__Medie_Master'] = trim( $STUDENT['PhD_02_Admitere__Medie_Master'] ) ) ? $STUDENT['PhD_02_Admitere__Medie_Master'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Medie_Master'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Medie_Master'] 
									 ? '' 
									 : 'Eroare Medie Master' ) 
								 : '' ); ?> 
				 </td>
			 </tr>
			  <tr>
				 <td width="25%" class="text-right">Medie Colocviu:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Medie_Colocviu'] ) && ( $STUDENT['PhD_02_Admitere__Medie_Colocviu'] = trim( $STUDENT['PhD_02_Admitere__Medie_Colocviu'] ) ) ? $STUDENT['PhD_02_Admitere__Medie_Colocviu'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Medie_Colocviu'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Medie_Colocviu'] 
									 ? '' 
									 : 'Eroare Medie Colocviu' ) 
								 : '' ); ?> 
				 </td>
			 </tr>
			  <tr>
				 <td width="25%" class="text-right">Număr Legitimaţie:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Numar_Legitimatie'] ) && ( $STUDENT['PhD_02_Admitere__Numar_Legitimatie'] = trim( $STUDENT['PhD_02_Admitere__Numar_Legitimatie'] ) ) ? $STUDENT['PhD_02_Admitere__Numar_Legitimatie'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Numar_Legitimatie'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Numar_Legitimatie'] 
									 ? '' 
									 : 'Eroare Număr Legitimaţie' ) 
								 : '' ); ?> 
				 </td>
			 </tr>
<!--			  <tr>
				 <td width="25%" class="text-right">Loguri:</td>
				 <td width="55%" class="text-left">
					 <?php echo   ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ? ( isset( $STUDENT['PhD_02_Admitere__Loguri'] ) && ( $STUDENT['PhD_02_Admitere__Loguri'] = trim( $STUDENT['PhD_02_Admitere__Loguri'] ) ) ? $STUDENT['PhD_02_Admitere__Loguri'] : '' ) : ''); ?>
				 </td>
				 <td width="20%" colspan="2" class='small PhD_02_Admitere__Loguri'>
					 <?php echo  ( $STUDENT['PhD_02_Admitere__Boolean'] 
								 ?   ( $STUDENT['PhD_02_Admitere__Loguri'] 
									 ? '' 
									 : 'Eroare Loguri' ) 
								 : '' ); ?> 
				 </td>
			 </tr>-->
		 </tbody>
	</table>
   
</div>
