<div id="tab-pane-00-IDENTITATE" class="tab-pane active">
	<h4>
		IDENTITATE
	</h4>

	<table class='table table-striped table-responsive'>
		<tbody>
			<tr>
				<td width="25%" class="text-right">Nume și Prenume:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__Nume'] ) && ( $STUDENT['PhD_00_Identitate__Nume'] = trim( $STUDENT['PhD_00_Identitate__Nume'] ) ) ? $STUDENT['PhD_00_Identitate__Nume'] : '' ); ?>
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__Prenume'] ) && ( $STUDENT['PhD_00_Identitate__Prenume'] = trim( $STUDENT['PhD_00_Identitate__Prenume'] ) ) ? ' ' . $STUDENT['PhD_00_Identitate__Prenume'] : '' ); ?>
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__NumeCasatorie'] ) && ( $STUDENT['PhD_00_Identitate__NumeCasatorie'] = trim( $STUDENT['PhD_00_Identitate__NumeCasatorie'] ) ) ? ' (' . $STUDENT['PhD_00_Identitate__NumeCasatorie'] . ')' : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate_Denumire'>
					<?php echo ( $STUDENT['PhD_00_Identitate__Nume'] && $STUDENT['PhD_00_Identitate__Prenume'] ? '' : 'Eroare Nume / Prenume Student' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Nume Căsătorie:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__NumeCasatorie'] ) && ( $STUDENT['PhD_00_Identitate__NumeCasatorie'] = trim( substr( $STUDENT['PhD_00_Identitate__NumeCasatorie'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__NumeCasatorie'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__NumeCasatorie'>
					<?php echo ( $STUDENT['PhD_00_Identitate__NumeCasatorie'] ? '' : 'Eroare Nume Căsătorie' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Data Naşterii:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__DataNastere'] ) && ( $STUDENT['PhD_00_Identitate__DataNastere'] = trim( substr( $STUDENT['PhD_00_Identitate__DataNastere'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__DataNastere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__DataNastere'>
					<?php echo ( $STUDENT['PhD_00_Identitate__DataNastere'] ? '' : 'Eroare Data Naşterii' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Locul Naşterii:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__LocNastere'] ) && ( $STUDENT['PhD_00_Identitate__LocNastere'] = trim( substr( $STUDENT['PhD_00_Identitate__LocNastere'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__LocNastere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__LocNastere'>
					<?php echo ( $STUDENT['PhD_00_Identitate__LocNastere'] ? '' : 'Eroare Locul Naşterii' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Judeţul Naşterii:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__JudetNastere'] ) && ( $STUDENT['PhD_00_Identitate__JudetNastere'] = trim( substr( $STUDENT['PhD_00_Identitate__JudetNastere'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__JudetNastere'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__JudetNastere'>
					<?php echo ( $STUDENT['PhD_00_Identitate__JudetNastere'] ? '' : 'Eroare Judeţul Naşterii' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">CNP:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__CNP'] ) && ( $STUDENT['PhD_00_Identitate__CNP'] = trim( substr( $STUDENT['PhD_00_Identitate__CNP'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__CNP'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__CNP'>
					<?php echo ( $STUDENT['PhD_00_Identitate__CNP'] ? '' : 'Eroare CNP' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Sex:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__Sex'] ) && ( $STUDENT['PhD_00_Identitate__Sex'] = trim( substr( $STUDENT['PhD_00_Identitate__Sex'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__Sex'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__Sex'>
					<?php echo ( $STUDENT['PhD_00_Identitate__Sex'] ? '' : 'Eroare Sex' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Iniţiala Tatălui:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__InitialaTata'] ) && ( $STUDENT['PhD_00_Identitate__InitialaTata'] = trim( substr( $STUDENT['PhD_00_Identitate__InitialaTata'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__InitialaTata'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__InitialaTata'>
					<?php echo ( $STUDENT['PhD_00_Identitate__InitialaTata'] ? '' : 'Eroare Iniţiala Tatălui' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Numele Tatălui:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__NumeTata'] ) && ( $STUDENT['PhD_00_Identitate__NumeTata'] = trim( substr( $STUDENT['PhD_00_Identitate__NumeTata'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__NumeTata'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__NumeTata'>
					<?php echo ( $STUDENT['PhD_00_Identitate__NumeTata'] ? '' : 'Eroare Numele Tatălui' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Numele Mamei:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__NumeMama'] ) && ( $STUDENT['PhD_00_Identitate__NumeMama'] = trim( substr( $STUDENT['PhD_00_Identitate__NumeMama'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__NumeMama'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__NumeMama'>
					<?php echo ( $STUDENT['PhD_00_Identitate__NumeMama'] ? '' : 'Eroare Numele Mamei' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Localitatea de Domiciliu:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__LocalitateDomiciliu'] ) && ( $STUDENT['PhD_00_Identitate__LocalitateDomiciliu'] = trim( substr( $STUDENT['PhD_00_Identitate__LocalitateDomiciliu'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__LocalitateDomiciliu'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__LocalitateDomiciliu'>
					<?php echo ( $STUDENT['PhD_00_Identitate__LocalitateDomiciliu'] ? '' : 'Eroare Localitatea de Domiciliu' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Judeţul de Domiciliu:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__JudetDomiciliu'] ) && ( $STUDENT['PhD_00_Identitate__JudetDomiciliu'] = trim( substr( $STUDENT['PhD_00_Identitate__JudetDomiciliu'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__JudetDomiciliu'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__JudetDomiciliu'>
					<?php echo ( $STUDENT['PhD_00_Identitate__JudetDomiciliu'] ? '' : 'Eroare Judeţul de Domiciliu' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Codul poştal al Domiciliului:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__CodPostalDomiciliu'] ) && ( $STUDENT['PhD_00_Identitate__CodPostalDomiciliu'] = trim( substr( $STUDENT['PhD_00_Identitate__CodPostalDomiciliu'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__CodPostalDomiciliu'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__CodPostalDomiciliu'>
					<?php echo ( $STUDENT['PhD_00_Identitate__CodPostalDomiciliu'] ? '' : 'Eroare Codul poştal al Domiciliului' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Naţionalitatea:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__Nationalitatea'] ) && ( $STUDENT['PhD_00_Identitate__Nationalitatea'] = trim( substr( $STUDENT['PhD_00_Identitate__Nationalitatea'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__Nationalitatea'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__Nationalitatea'>
					<?php echo ( $STUDENT['PhD_00_Identitate__Nationalitatea'] ? '' : 'Eroare Naţionalitate' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Cetăţenia:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__Cetatenia'] ) && ( $STUDENT['PhD_00_Identitate__Cetatenia'] = trim( substr( $STUDENT['PhD_00_Identitate__Cetatenia'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__Cetatenia'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__Cetatenia'>
					<?php echo ( $STUDENT['PhD_00_Identitate__Cetatenia'] ? '' : 'Eroare Cetăţenia' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Starea Civilă:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__StareCivila'] ) && ( $STUDENT['PhD_00_Identitate__StareCivila'] = trim( substr( $STUDENT['PhD_00_Identitate__StareCivila'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__StareCivila'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__StareCivila'>
					<?php echo ( $STUDENT['PhD_00_Identitate__StareCivila'] ? '' : 'Eroare Starea Civilă' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">Stagiul Militar:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__StagiuMilitar'] ) && ( $STUDENT['PhD_00_Identitate__StagiuMilitar'] = trim( substr( $STUDENT['PhD_00_Identitate__StagiuMilitar'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__StagiuMilitar'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__StagiuMilitar'>
					<?php echo ( $STUDENT['PhD_00_Identitate__StagiuMilitar'] ? '' : 'Eroare Stagiul Militar' ); ?> 
				</td>
			</tr>
			<tr>
				<td width="25%" class="text-right">SeriaNrDiplomă:</td>
				<td width="55%" class="text-left">
					<?php echo ( isset( $STUDENT['PhD_00_Identitate__SerieNrDiploma'] ) && ( $STUDENT['PhD_00_Identitate__SerieNrDiploma'] = trim( substr( $STUDENT['PhD_00_Identitate__SerieNrDiploma'], 0, 10 ) ) ) ? $STUDENT['PhD_00_Identitate__SerieNrDiploma'] : '' ); ?>
				</td>
				<td width="20%" colspan="2" class='small PhD_00_Identitate__SerieNrDiploma'>
					<?php echo ( $STUDENT['PhD_00_Identitate__SerieNrDiploma'] ? '' : 'Eroare SeriaNrDiplomă' ); ?> 
				</td>
			</tr>
		</tbody>
	</table>
</div>
<script>
    $('#edit-00-IDENTITATE').click(function(){
  $('#spinner').show(); //<----here
  $.ajax({
    
   success:function(result){
       $('#spinner').hide();  //<--- hide again
   }
}
</script>