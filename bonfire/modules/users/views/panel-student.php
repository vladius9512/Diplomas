
        <fieldset>
            <div id="DivALERT" class="spanoffset-2 span10 alert alert-danger" style="display: none;">
                <span></span>
                <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
            </div>
            <legend>
                <span class="icon icon-file-o">&nbsp;</span>
                STUDENT DOCTORAL
            </legend>
            <div id="DivAJAX"  class="row row-fluid" style="width: 100%; display: none;">

            </div>
            <a id="anchor" name="anchor"></a>
            <?php echo form_open( '#', array( 'class' => 'form-horizontal', 'autocomplete' => 'off' ) ); // deschide form ?>
                <div id="DivACRD" class="row row-fluid" style="width: 100%; display: block;">
                    <div id="contact__view___tab" class="tabbable container-fluid">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#tab-pane-00-IDENTITATE">
                                    Identitate
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-pane-01-INSCRIERE">
                                    Înscriere
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-pane-02-ADMITERE">
                                    Admitere
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-pane-03-INMATRICULARE">
                                    Înmatriculare
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-pane-04-PID">
                                    Program Individual de Doctorat
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Program de Pregătire Universitar Academic
                                    <span class="caret light-caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a data-toggle="tab" href="#tab-pane-05-PPUA-AN1-SEM1">Anul I - Semestrul 1</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-06-PPUA-AN1-SEM2">Anul I - Semestrul 2</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-07-PPUA-CERCETARE">Anii II + III (+ IV)</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-08-PERIOADA-DE-PRELUNGIRE">Perioada de Prelungire</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-09-PERIOADA-DE-GRATIE">Perioada de Grație</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Finalizare Doctorat
                                    <span class="caret light-caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a data-toggle="tab" href="#tab-pane-10-FINALIZARE-1">Prima Sesiune</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-11-FINALIZARE-2">A doua Sesiune</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-12-CONFIRMARE-TITLU">Confirmare Titlu</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-13-PLATFORMA-NATIONALA-REI">Platforma Natională</a></li>
                                    <li><a data-toggle="tab" href="#tab-pane-14-DIPLOMA-DOCTORAT">Diploma de Doctorat</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <?php $this->load->view( 'panel-student/view_00_identitate' ); ?>
                            <?php $this->load->view( 'panel-student/view_01_inscriere' ); ?>
                            <?php $this->load->view( 'panel-student/view_02_admitere' ); ?>
                            <?php $this->load->view( 'panel-student/view_03_inmatriculare' ); ?>
                            <?php $this->load->view( 'panel-student/view_04_pid' ); ?>
                            <?php $this->load->view( 'panel-student/view_05_ppua_an1_sem1' ); ?>
                            <?php $this->load->view( 'panel-student/view_06_ppua_an1_sem2' ); ?>
                            <?php $this->load->view( 'panel-student/view_07_ppua' ); ?>
                            <?php $this->load->view( 'panel-student/view_08_perioada_de_prelungire' ); ?>
                            <?php $this->load->view( 'panel-student/view_09_perioada_de_gratie' ); ?>
                            <?php $this->load->view( 'panel-student/view_10_finalizare_1' ); ?>
                            <?php $this->load->view( 'panel-student/view_11_finalizare_2' ); ?>
                            <?php $this->load->view( 'panel-student/view_12_confirmare_titlu' ); ?>
                            <?php $this->load->view( 'panel-student/view_13_platforma_nationala_rei' ); ?>
                            <?php $this->load->view( 'panel-student/view_14_diploma_doctorat' ); ?>

                        </div>
                    
                    </div>
                </div>
            <?php echo form_close(); // inchide form ?>
        </fieldset>

