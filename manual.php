<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exsilium AO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metamorphous&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="background">
    <div class="header" id="mainmenu">
        <div class="container-fluid text-center bg-dark p-1">
            Espacio propicio para publicidad o sistema de login o lo que sea!
        </div>
        <div>
            <div>
                <a class="logo" href="index.php">
                    <div class="llama">
                        <div class="red flame"></div>
                        <div class="orange flame"></div>
                        <div class="yellow flame"></div>
                        <div class="white flame"></div>
                        <div class="blue circle"></div>
                        <div class="black circle"></div>
                      </div>
                      <div class="llama2">
                        <div class="red flame"></div>
                        <div class="orange flame"></div>
                        <div class="yellow flame"></div>
                        <div class="white flame"></div>
                        <div class="blue circle"></div>
                        <div class="black circle"></div>
                      </div>
                    <img src="imgs/logo.png" width="538">
                </a>

                <ul>
                    <li class="b1">
                        <a class="menu1" href="index.php">Inicio</a>
                    </li>
                    <li class="b2">
                        <a class="menu2" href="reglamento.html">Reglamento</a>
                    </li>
                    <li class="b3 selected">
                        <a class="menu3" href="manual.php">Manual</a>
                    </li>
                    <li class="b4">
                        <a class="menu4" href="descargas.html">descargas</a>
                    </li>
                    <li class="b5">
                        <a class="menu5" href="staff.html">staff</a>
                    </li>
                    <li class="b6">
                        <a class="menu6" href="soporte.html">soporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="columnaIndice">
                <div class="nav nav-pills my-3" style="margin-left: 200px;" id="v-pills-tab" role="tablist" role="tablist">
                     <!--Comienzo-->
                    <div class="tituloSec">Comienzo</div>
                    <div class="btn btn-dark btn-sm active" id="pills-prologo-tab" data-toggle="pill" href="#pills-prologo" role="tab" aria-controls="pills-prologo" aria-selected="true">Prologo</div>
                    <div class="btn btn-dark btn-sm" id="pills-iniciando-tab" data-toggle="pill" href="#pills-iniciando" role="tab" aria-controls="pills-iniciando" aria-selected="false">Iniciando</div>
                    <div class="btn btn-dark btn-sm" id="pills-clasesyrazas-tab" data-toggle="pill" href="#pills-clasesyrazas" role="tab" aria-controls="pills-clasesyrazas" aria-selected="false">Clases y Razas</div>
                    <div class="btn btn-dark btn-sm" id="pills-skills-tab" data-toggle="pill" href="#pills-skills" role="tab" aria-controls="pills-skills" aria-selected="false">Skills</div>
                    <div class="btn btn-dark btn-sm" id="pills-reglamento-tab" data-toggle="pill" href="#pills-reglamento" role="tab" aria-controls="pills-reglamento" aria-selected="false">Reglamento</div>
                    <div class="col-12"></div>
                                <!--Info General-->
                    <div class="tituloSec">Info General</div>
                    <div class="btn btn-dark btn-sm" id="pills-hechizos-tab" data-toggle="pill" href="#pills-hechizos" role="tab" aria-controls="pills-hechizos" aria-selected="false">Hechizos</div>
                    <div class="btn btn-dark btn-sm" id="pills-mapa-tab" data-toggle="pill" href="#pills-mapa" role="tab" aria-controls="pills-mapa" aria-selected="false">Mapa</div>
                    <div class="btn btn-dark btn-sm" id="pills-navegacion-tab" data-toggle="pill" href="#pills-navegacion" role="tab" aria-controls="pills-navegacion" aria-selected="false">Navegación</div>
                    <div class="btn btn-dark btn-sm" id="pills-niveles-tab" data-toggle="pill" href="#pills-niveles" role="tab" aria-controls="pills-niveles" aria-selected="false">Niveles</div>
                    <div class="btn btn-dark btn-sm" id="pills-trabajo-tab" data-toggle="pill" href="#pills-trabajo" role="tab" aria-controls="pills-trabajo" aria-selected="false">Trabajo</div>            
                    <div class="col-12"></div>
                                <!--Eventos-->
                    <div class="tituloSec">Eventos</div>
                    <div class="btn btn-dark btn-sm" id="pills-eventosgms-tab" data-toggle="pill" href="#pills-eventosgms" role="tab" aria-controls="pills-eventosgms" aria-selected="false">Eventos de Role Masters y Game Masters</div>
                    <div class="btn btn-dark btn-sm" id="pills-quest-tab" data-toggle="pill" href="#pills-quests" role="tab" aria-controls="pills-quests" aria-selected="false">Quests</div>
                    <div class="btn btn-dark btn-sm" id="pills-retos-tab" data-toggle="pill" href="#pills-retos" role="tab" aria-controls="pills-retos" aria-selected="false">Retos</div>
                    <div class="col-12"></div>
                    <!--Npcs-->
                    <div class="tituloSec">NPCs</div>
                    <div class="btn btn-dark btn-sm" id="pills-domables-tab" data-toggle="pill" href="#pills-domables" role="tab" aria-controls="pills-domables" aria-selected="false">Domables</div>
                    <div class="btn btn-dark btn-sm" id="pills-hostiles-tab" data-toggle="pill" href="#pills-hostiles" role="tab" aria-controls="pills-hostiles" aria-selected="false">Hostiles</div>
                    <div class="btn btn-dark btn-sm" id="pills-faccionarios-tab" data-toggle="pill" href="#pills-faccionarios" role="tab" aria-controls="pills-faccionarios" aria-selected="false">Faccionarios</div>
                    
                    <div class="col-12"></div>                  
                                <!--Agrupaciones-->
                    <div class="tituloSec">Agrupaciones</div>
                    <div class="btn btn-dark btn-sm" id="pills-armadareal-tab" data-toggle="pill" href="#pills-armadareal" role="tab" aria-controls="pills-armadareal" aria-selected="false">La Armada Real</div>
                    <div class="btn btn-dark btn-sm" id="pills-legion-tab" data-toggle="pill" href="#pills-legion" role="tab" aria-controls="pills-legion" aria-selected="false">Legión Oscura</div>
                    <div class="btn btn-dark btn-sm" id="pills-pretorianos-tab" data-toggle="pill" href="#pills-pretorianos" role="tab" aria-controls="pills-pretorianos" aria-selected="false">Pretorianos</div>
                    <div class="btn btn-dark btn-sm" id="pills-party-tab" data-toggle="pill" href="#pills-party" role="tab" aria-controls="pills-party" aria-selected="false">Clanes y Party</div>
                    <div class="col-12"></div>
                                <!--Objetos-->
                    <div class="tituloSec">Objetos</div>
                    <div class="btn btn-dark btn-sm" id="pills-armas-tab" data-toggle="pill" href="#pills-armas" role="tab" aria-controls="pills-armas" aria-selected="false">Armas</div>
                    <div class="btn btn-dark btn-sm" id="pills-pociones-tab" data-toggle="pill" href="#pills-pociones" role="tab" aria-controls="pills-pociones" aria-selected="false">Pociones</div>
                    <div class="btn btn-dark btn-sm" id="pills-cascos-tab" data-toggle="pill" href="#pills-cascos" role="tab" aria-controls="pills-cascos" aria-selected="false">Cascos</div>
                    <div class="btn btn-dark btn-sm" id="pills-anillos-tab" data-toggle="pill" href="#pills-anillos" role="tab" aria-controls="pills-anillos" aria-selected="false">Anillos</div>
                    <div class="btn btn-dark btn-sm" id="pills-vestimentas-tab" data-toggle="pill" href="#pills-vestimentas" role="tab" aria-controls="pills-vestimentas" aria-selected="false">Vestimentas</div>
                    <div class="btn btn-dark btn-sm" id="pills-faccionarias-tab" data-toggle="pill" href="#pills-faccionarias" role="tab" aria-controls="pills-faccionarias" aria-selected="false">Faccionarias</div>
                    <div class="btn btn-dark btn-sm" id="pills-cofres-tab" data-toggle="pill" href="#pills-cofres" role="tab" aria-controls="pills-cofres" aria-selected="false">Cofres</div>
                    <div class="btn btn-dark btn-sm" id="pills-trabajo-tab" data-toggle="pill" href="#pills-trabajo" role="tab" aria-controls="pills-trabajo" aria-selected="false">Trabajo</div>
                                <div class="col-12"></div>
                                <!--Soporte-->
                    <div class="tituloSec">Soporte</div>
                    <div class="btn btn-dark btn-sm" id="pills-comandos-tab" data-toggle="pill" href="#pills-comandos" role="tab" aria-controls="pills-comandos" aria-selected="false">Comandos</div>
                    <div class="btn btn-dark btn-sm" id="pills-staffdesoporte-tab" data-toggle="pill" href="#pills-staffdesoporte" role="tab" aria-controls="pills-staffdesoporte" aria-selected="false">Soporte</div>
                    <div class="btn btn-dark btn-sm" id="pills-staffgms-tab" data-toggle="pill" href="#pills-staffgms" role="tab" aria-controls="pills-staffgms" aria-selected="false">Staff de GMs</div>
                    <div class="btn btn-dark btn-sm" id="pills-logs-tab" data-toggle="pill" href="#pills-logs" role="tab" aria-controls="pills-logs" aria-selected="false">Logs</div>
                </div>
            </div>
        </div>
                        <div class="tab-content manual" id="v-pills-tabContent">
                            <!--comienzo-->
                            <div class="tab-pane fade show active" id="pills-prologo" role="tabpanel" aria-labelledby="pills-prologo-tab">
                                <code>Comienzo/Prólogo</code>
                                <?php include ('manual/1comienzo/1a-prologo.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-iniciando" role="tabpanel" aria-labelledby="pills-iniciando-tab">
                                <code>Comienzo/Iniciando</code>
                                <?php include ('manual/1comienzo/1b-iniciando.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-clasesyrazas" role="tabpanel" aria-labelledby="pills-clasesyrazas-tab">
                                <code>Comienzo/Clases y Razas</code>
                                <?php include ('manual/1comienzo/1c-clasesyrazas.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-skills" role="tabpanel" aria-labelledby="pills-skills-tab">
                                <code>Comienzo/Skills</code>
                                <?php include ('manual/1comienzo/1d-skills.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-reglamento" role="tabpanel" aria-labelledby="pills-reglamento-tab">
                                <code>Comienzo/Reglamento</code>
                                <?php include ('manual/1comienzo/1e-reglamento.html'); ?>
                            </div>
                            <!--info general-->
                            <div class="tab-pane fade" id="pills-hechizos" role="tabpanel" aria-labelledby="pills-hechizos-tab">
                                <code>Informacion General/Hechizos</code>
                                <?php include ('manual/2infogeneral/2a-hechizos.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-mapa" role="tabpanel" aria-labelledby="pills-mapa-tab">
                                <code>Informacion General/Mapa</code>
                                <?php include ('manual/2infogeneral/2b-mapa.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-navegacion" role="tabpanel" aria-labelledby="pills-navegacion-tab">
                                <code>Informacion General/Navegación</code>
                                <?php include ('manual/2infogeneral/2c-navegacion.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-niveles" role="tabpanel" aria-labelledby="pills-niveles-tab">
                                <code>Informacion General/Niveles</code>
                                <?php include ('manual/2infogeneral/2d-niveles.html'); ?>
                            </div>
                            <!-- Eventos -->
                            <div class="tab-pane fade" id="pills-eventosgms" role="tabpanel" aria-labelledby="pills-eventosgms-tab">
                                <code>Eventos/Eventos de Role Masters y Game Masters</code>
                                <?php include ('manual/3eventos/3a-eventosgms.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-quests" role="tabpanel" aria-labelledby="pills-quests-tab">
                                <code>Eventos/Quests</code>
                                <?php include ('manual/3eventos/3b-quests.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-retos" role="tabpanel" aria-labelledby="pills-retos-tab">
                                <code>Eventos/Retos</code>
                                <?php include ('manual/3eventos/3c-retos.html'); ?>
                            </div>
                            <!-- Agrupaciones -->
                            <div class="tab-pane fade" id="pills-armadareal" role="tabpanel" aria-labelledby="pills-armadareal-tab">
                                <code>Facciones/La Armada Real</code>
                                <?php include ('manual/4agrupaciones/4a-armadareal.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-legion" role="tabpanel" aria-labelledby="pills-legion-tab">
                                <code>Facciones/Legión Oscura</code>
                                <?php include ('manual/4agrupaciones/4b-legion.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-pretorianos" role="tabpanel" aria-labelledby="pills-pretorianos-tab">
                                <code>Facciones/Pretorianos</code>
                                <?php include ('manual/4agrupaciones/4c-pretorianos.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-party" role="tabpanel" aria-labelledby="pills-party-tab">
                                <code>Facciones/Clanes y Party</code>
                                <?php include ('manual/4agrupaciones/4d-party.html'); ?>
                            </div>
                             <!-- Npcs -->
                             <div class="tab-pane fade" id="pills-domables" role="tabpanel" aria-labelledby="pills-domables-tab">
                                <code>NPCs/Domables</code>
                                <?php include ('manual/7npcs/7a-domables.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-hostiles" role="tabpanel" aria-labelledby="pills-hostiles-tab">
                                <code>NPCs/Hostiles</code>
                                <?php include ('manual/7npcs/7b-hostiles.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-faccionarios" role="tabpanel" aria-labelledby="pills-faccionarios-tab">
                                <code>NPCs/Faccionarios</code>
                                <?php include ('manual/7npcs/7c-faccionarios.html'); ?>
                            </div>

                            <!-- Objetos -->
                            <div class="tab-pane fade" id="pills-armas" role="tabpanel" aria-labelledby="pills-armas-tab">
                                <code>Objetos/Armas</code>
                                <?php include ('manual/5objetos/5a-armas.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-pociones" role="tabpanel" aria-labelledby="pills-pociones-tab">
                                <code>Objetos/Pociones</code>
                                <?php include ('manual/5objetos/5b-pociones.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-cascos" role="tabpanel" aria-labelledby="pills-cascos-tab">
                                <code>Objetos/Cascos</code>
                                <?php include ('manual/5objetos/5c-cascos.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-anillos" role="tabpanel" aria-labelledby="pills-anillos-tab">
                                <code>Objetos/Anillos</code>
                                <?php include ('manual/5objetos/5d-anillos.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-vestimentas" role="tabpanel" aria-labelledby="pills-vestimentas-tab">
                                <code>Objetos/Vestimentas</code>
                                <?php include ('manual/5objetos/5e-vestimentas.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-faccionarias" role="tabpanel" aria-labelledby="pills-faccionarias-tab">
                                <code>Objetos/Vestimentas Faccionarias</code>
                                <?php include ('manual/5objetos/5f-faccionarias.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-cofres" role="tabpanel" aria-labelledby="pills-cofres-tab">
                                <code>Objetos/Cofres</code>
                                <?php include ('manual/5objetos/5g-cofres.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-trabajo" role="tabpanel" aria-labelledby="pills-trabajo-tab">
                                <code>Objetos/Trabajo</code>
                                <?php include ('manual/5objetos/5h-trabajo.html'); ?>
                            </div>
                            <!-- soporte -->
                            <div class="tab-pane fade" id="pills-comandos" role="tabpanel" aria-labelledby="pills-comandos-tab">
                                <code>Juego/Comandos</code>
                                <?php include ('manual/6soporte/6a-comandos.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-staffdesoporte" role="tabpanel" aria-labelledby="pills-staffdesoporte-tab">
                                <code>Juego/Staff de Soporte</code>
                                <?php include ('manual/6soporte/6b-soporte.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-staffgms" role="tabpanel" aria-labelledby="pills-staffgms-tab">
                                <code>Juego/Staff de Game Masters</code>
                                <?php include ('manual/6soporte/6c-staffgms.html'); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-logs" role="tabpanel" aria-labelledby="pills-logs-tab">
                                <code>Juego/Logs</code>
                                <?php include ('manual/6soporte/6z-logs.html'); ?>
                            </div>
                            <div class="mt-5 container text-center">
                                <a class="btn btn-small btn-info" href="#mainmenu">subir</a>
                            </div>
                           
                            
                        </div>
                    
    <div class="footer"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>