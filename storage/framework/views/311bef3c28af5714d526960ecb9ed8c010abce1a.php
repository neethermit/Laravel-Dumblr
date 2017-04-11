<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Dumblr</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('Resources/logodumblrv2.png')); ?>"/>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Fonts.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('MainStyle.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('MenuModals.css')); ?>"/>
    <script src="<?php echo e(asset('jquery-3.1.1.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</head>

<body>
    <div class="searchbar container">
        <div class="row">
            <a href="Main.html">
                <div class="logodiv col-xs-2 col-sm-1 col-lg-2">
                    <div class="row">
                        <span class="logo col-xs-8"></span>
                    </div>
                </div>
            </a>
            <div class="col-xs-10 col-sm-4 col-lg-4">
                <div class="row">
                    <form class="col-xs-12" id="buscador" name="busqueda">
                        <div class="row">
                            <input type="text" class="transparente col-xs-10 col-sm-10" placeholder="Buscar caciones...">

                            <a href="Busqueda.html"><span class="glyphicon glyphicon-search col-xs-2 col-sm-2"></span></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-3">
                <div class="row">
                    <a href="Listas.html"><span class= "menu col-xs-3 col-sm-2 ">Listas</span></a>
                    <a href="Subscripciones.html"><span class= "menu col-xs-3 col-sm-4 col-lg-4">Subscripciones</span></a>
                    <span class="subir col-xs-3 col-sm-4 col-lg-3 openmodalSubir">Subir audio</span>
                    <a href="Configuracion.html"><span class="glyphicon glyphicon-cog subir col-xs-2 col-sm-1 col-md-2 col-lg-2"></span></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-lg-3">
                <div class="row">
                    <a href="Perfil.html"><span class= "username subir col-sm-8 col-lg-9  visible-sm-block  visible-md-block visible-lg-block "><?php echo e(session('user')->name); ?></span>
                 <span class="col-sm-4  userpic  visible-sm-block  visible-md-block visible-lg-block "></span></a>
                </div>
            </div>
        </div>
    </div>

    <div id="modalSubir" class="modal">
        <div class="modal-content">
            <form name="newSong">
                <div class="modalBlock">
                    <label>Nombre de la Canci&oacute;n:</label>
                    <br>
                    <input type="text" class="inputmodal">
                    <br>
                    <label>Autor o Grupo:</label>
                    <br>
                    <input type="text" class="inputmodal">
                    <br>

                    <label>Selecionar Archivo</label>
                    <br>
                    <input type="file" name="song_path" id="song-archive" accept=".mp3,audio/*">
                    <br>
                    <div class="flexdiv">
                        <label style="margin-right:10px;margin-top:10px">Duracion:</label>
                        <br>
                        <input type="text" id="uploadmin" class="inputmodal duracionmodal" disabled>
                        <label style="font-size:25px">:</label>
                        <input type="text" id="uploadsec" class="inputmodal duracionmodal" disabled>
                    </div>
                    <label>Portda de canci&oacute;n:</label>
                    <br>
                    <div style="display:flex">
                        <div class="uploadbutton">
                            <input type="button" id="my-button1" class="subirImagen" value="Select Files">
                            <input type="file" name="my_file" id="my-file1" accept="image/*">
                        </div>
                        <span class="uploadphoto"></span>
                    </div>
                    <br>
                    <div class="flexdiv">
                        <button type="button" id="Salir" class="salir">Cancelar</button>
                        <button type="button" class="terminar">Subir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="modalEdit" class="modal">
        <div class="modal-content">
            <form name="editSong">
                <div class="modalBlock">
                    <label>Nombre de la Canci&oacute;n:</label>
                    <br>
                    <input type="text" class="inputmodal">
                    <br>
                    <label>Autor o Grupo:</label>
                    <br>
                    <input type="text" class="inputmodal">
                    <br>
                    <label>Portda de canci&oacute;n:</label>
                    <br>
                    <div style="display:flex">
                        <div class="uploadbutton">
                            <input type="button" id="my-button1" class="subirImagen" value="Select Files">
                            <input type="file" name="my_file" id="my-file1" accept="image/*">
                        </div>
                        <span class="uploadphoto"></span>
                    </div>
                    <br>
                    <div class="divflex">
                        <button type="button" id="Salir2" class="salir">Cancelar</button>
                        <button type="button" class="terminar">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="modalList" class="modal">

        <div class="modal-content">
            <form name="addList">
                <div class="modalBlock">
                    <div class="flexdiv">
                        <div>
                            <br>
                            <br>
                            <label>Lone Digger</label>
                            <br>
                            <label>Caravan Palace</label>
                        </div>
                        <div class="filler"></div>
                        <span class="uploadphoto" style="background-image:url(Resources/caravan.jpg);"></span>
                    </div>
                    <br>
                    <hr>
                    <form>
                        <label>A&ntilde;adir a:</label>
                        <br>
                        <br>
                        <input type="radio" name="listoption" value="1" checked>
                        <label>Nueva Lista</label>
                        <br>
                        <input type="text" class="inputmodal">
                        <br>
                        <input type="radio" name="listoption" value="2">
                        <label>Lista Existente:</label>
                        <br>
                        <select class="listascanciones">
                            <option value="Caravan">Caravan Palace</option>
                            <option value="Rebeca">Rebecca Sugar</option>
                        </select>
                        <br>
                        <br>
                        <div class="divflex">
                            <button type="button" id="Salir3" class="salir">Cancelar</button>
                            <button type="button" class="terminar">Confirmar</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
    <div id="modalEliminar" class="modal">
        <div class="modal-content">
            <div class="modalBlock">
                <label>Estas Seguro?</label>
                <br>
                <br>
                <div class="divflex">
                    <button type="button" id="Salir4" class="salir">Cancelar</button>
                    <button type="button" class="terminar">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="subscriptions visible-md-block visible-lg-block">
        <label>Subscripciones</label>
        <hr>
        <ul class="sublist">
            <li class="subelement">
                <div class="subscribedto">
                    <div class="subfotodiv"><span class="subfoto" style="background-image:url(Resources/eyes.jpg);"></span>
                    </div>
                    <div class="subname">
                        <label>Edgar</label>
                    </div>
                </div>
            </li>
            <li class="subelement">
                <div class="subscribedto">
                    <div class="subfotodiv"><span class="subfoto" style="background-image:url(Resources/bearoso.jpg);"></span>
                    </div>
                    <div class="subname">
                        <label>Karen</label>
                    </div>
                </div>
            </li>
            <li class="subelement">
                <div class="subscribedto">
                    <div class="subfotodiv"><span class="subfoto" style="background-image:url(Resources/peachy1.jpg);"></span>
                    </div>
                    <div class="subname">
                        <label>Walter</label>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="songfeed" style="display:flex">
        <div class="filler"></div>
        <ul>
            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground ">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label><span class="glyphicon glyphicon-remove cross openmodalEliminar"></span>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="01" data-songid="Resources/01.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">Lone Digger</label>
                                <br>
                                <label class="trackartist">Caravan Palace</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment "></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist openmodalEdit">
                                        <span class="glyphicon glyphicon-cog "></span>
                                        <span class="actions hidden-xs">Editar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <span class="trackart" style="background-image:url(Resources/caravan.jpg);"></span>
                    </div>
                </div>
            </li>
            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="02" data-songid="Resources/whatstheuse.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">What's the use of feeling blue</label>
                                <br>
                                <label class="trackartist">Rebecca Sugar</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist  openmodalAdd">
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <span class="actions hidden-xs">Add list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="trackart" style="background-image:url(Resources/blue.png);"></span>
                    </div>
                </div>
            </li>
            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground ">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="01" data-songid="Resources/VARSITY - Cult of Personality.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">Cult of personality</label>
                                <br>
                                <label class="trackartist">Varsity</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist openmodalAdd">
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <span class="actions hidden-xs">Add list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="trackart" style="background-image:url(Resources/a1169671718_10.jpg);"></span>
                    </div>
                </div>
            </li>
            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="02" data-songid="Resources/Comme des Enfants -  Coeur de Pirate.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">Comme des enfants</label>
                                <br>
                                <label class="trackartist">Coeur de Pirate</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist openmodalAdd">
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <span class="actions hidden-xs">Add list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="trackart" style="background-image:url(Resources/Coeur-de-pirate-album.jpg);"></span>
                    </div>
                </div>
            </li>
            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground ">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="01" data-songid="Resources/in love with a ghost - healing.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">Healing</label>
                                <br>
                                <label class="trackartist">In love with a ghost</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist openmodalAdd">
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <span class="actions hidden-xs">Add list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="trackart" style="background-image:url(Resources/healing.jpg);"></span>
                    </div>
                </div>
            </li>

            <li class="playlistsong">
                <div class="playlisttrack">
                    <div class="bar colorwhite"></div>
                    <div class="trackbackground ">
                        <div style="display:flex">
                            <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>
                            <div class="filler"></div>
                            <label class="postdate">17/02/2017</label>
                        </div>
                        <div style="display:flex">
                            <div class="playbutton" id="01" data-songid="Resources/Here comes a thought.mp3">
                                <span class="trackicon glyphicon glyphicon-play"></span>
                            </div>
                            <div class="trackblock">
                                <label class="trackname">Here comes a thought</label>
                                <br>
                                <label class="trackartist">Rebecca Sugar</label>
                                <div class="trackbarcontrols">
                                    <div class="trackbarview hidden-xs">

                                        <div class="trackbar-remaining"></div>

                                        <div class="trackbar-progress"></div>
                                        <div class="diamond"></div>
                                    </div>
                                    <div class="tracktimeblock hidden-xs">
                                        <label>23:03</label>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <a class="comment" href="Comentarios.html">
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <span class="actions hidden-xs">Comment</span>
                                    </a>
                                    <a class="addlist openmodalAdd">
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <span class="actions hidden-xs">Add list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="trackart" style="background-image:url(Resources/mindful.jpg);"></span>
                    </div>
                </div>
            </li>

        </ul>
        <div class="filler"></div>
    </div>

    <div class="songplayer">
        <div class="iconbox">
            <span class="glyphicon glyphicon-step-backward playericon" id="playerbutton1"></span>
            <span class="glyphicon glyphicon-pause playericon" id="playerbutton2"></span>
            <span class="glyphicon glyphicon-step-forward playericon" id="playerbutton3"></span>
            <span class="glyphicon glyphicon-repeat playericon fontwhite" id="playerbutton4"></span>
        </div>
        <div class="trackbarcontrols playerbarcontrols" style="margin-top:15px">
            <div class="playerbarview">

                <div class="player-track-remaining"></div>

                <div class="player-track-progress"></div>
                <div class="diamond" id="diamondthumb"></div>
            </div>
        </div>

        <span class="songcurtime">30:20</span>
        <span class="slash">/</span>
        <span class="songduration">20:34</span>

        <span class="songartist hidden-xs">Lone Digger</span>

        <span class="slash2 hidden-xs">&nbsp;-&nbsp;</span>
        <span class="songname hidden-xs">Caravan Palace</span>
        <div class="filler"></div>
        <div>
            <span class="playerart"></span>
        </div>
        <div class="filler2"></div>

    </div>
    <script src="dumblrplayer.js"></script>
    <script src="modaljs.js"></script>
</body>

</html>