<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            Detalii Profesor</a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
            Profesor:
                <?php if (isset($LEADER) && !empty( $LEADER ) ) : ?>
                    <?php echo $LEADER->Nume_si_Prenume; ?>
                    <br>
                    Tip: <?php echo $LEADER->Tip_Profesor__Denumire; ?>
                    <br>
                    Domeniu: <?php echo $LEADER->PhD_Domeniu_Denumire; ?>
                <?php endif; ?>
            
          </div>
        </div>
     </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
              <?php if ( isset( $STUDENTS ) && !empty( $STUDENTS ) ) : ?>
              <span class="badge pull-right">
                  <?php echo count($STUDENTS); ?>
              </span>
              <?php endif; ?>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Lista Studenti
            </a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <table id="myStudents" class="table table-responsive table-striped table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th  style="width:70%;">Nume şi Prenume</th>
                            <th class = "small" style="width:15%;">An Inscriere</th>
                            <th  class = "small" style="width:15%;">Numar Matricol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ( isset( $STUDENTS ) && !empty( $STUDENTS ) ) : ?>
                            <?php foreach( $STUDENTS as $s => $S ) : ?>
                                <tr>
                                    <td><a class="colorbox" rel="student" title="[<?php echo $S->PhD_ID; ?>] <?php echo $S->PhD_00_Identitate__Nume; ?> <?php echo $S->PhD_00_Identitate__Prenume; ?>" href="<?php echo site_url("users/panel/".$S->PhD_ID); ?>"><?php echo $S->PhD_00_Identitate__Nume; ?> <?php echo $S->PhD_00_Identitate__Prenume; ?></a></td>
                                    <td><?php $Denumire_AnUniv = explode( " " , $S->PhD_01_Inscriere__Denumire_AnUniv ); echo end( $Denumire_AnUniv ); ?></td>
                                    <td><?php echo $S->PhD_03_Inmatriculare__Numar_Matricol; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
</div>

<script>
$(document).ready(function() {
    $('#myStudents').DataTable();
    $("a.colorbox").colorbox({rel:'student', width:"98%", height: "96%"});
} );
</script>