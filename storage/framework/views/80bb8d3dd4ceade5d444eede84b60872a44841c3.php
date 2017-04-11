<!DOCTYPE html>
<html>

<head>
    <meta charset=="UTF-8">
    <meta name="robots" content="noarchive">
    <title>Dumblr</title>
    <link rel="icon" type="image/png" href="<?php echo e(URL::asset('Resources/logodumblrv2.png')); ?>" />
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('Fonts.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('FrontStyle.css')); ?>" />
    <script src="<?php echo e(URL::asset('jquery-3.1.1.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
    <div class="logo">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12">
                    <img src="Resources/Dumblr2logo.png" class="center-block">
                </div>
                <div class="col-xs-12 text-center">
                    <label class="logofooter">Comparte tu muscia como quieras</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-center-vertically">
        <div class="flexdiv loginbody">
            <div class="filler"></div>
            <div>
                <div id="login" class="contenedor">
                    <form action="index" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <p class="whitefont">Iniciar Sessi&oacute;n</p>
                        <input type="text" class="form-control" placeholder="ejemplo@email.com" name="correol" maxlength="40" required>
                        <input type="password" class="form-control" placeholder="contrase&ntilde;a" name="passwordl" maxlength="40" required>
                        <button class="button" type="submit" name="loginbutton"><b>Entrar</b>
                        </button>
                        <a href="recuperarContra.php">
                            <p>&iquest;Olvidaste tu contrase&ntilde;a?</p>
                        </a>
                    </form>
                </div>
                <div class="crear">
                    <div class="filler">
                    </div>
                    <div>
                        <div class="flexdiv">
                            <hr>&nbsp;ó&nbsp;
                            <hr>
                        </div>
                        <div class="flexdiv">
                            <button class="button openmodal" type="submit" name="loginbutton"><b>   Crear nueva cuenta</b>
                            </button>
                        </div>
                    </div>
                    <div class="filler"></div>
                </div>
            </div>
            <div class="filler"></div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <form name="singup">
                <div class="paso1">
                    <label>Escribe tu nombre de usuario</label>
                    <input type="text">
                    <br>
                    <label>Ingresa tu correo</label>
                    <input type="text">
                    <br>
                    <label>Ingresa tu contrase&ntilde;a</label>
                    <input type="text">
                    <br>
                    <label>Confirma tu contrase&ntilde;a</label>
                    <input type="text">
                    <button type="button" id="salir" class="salir">Salir</button>
                    <button type="button" class="btnPaso1">Siguiente</button>
                </div>

                <div class="paso2">

                    <label>Fecha de nacimiento</label>
                    <br>
                    <select id="form_dob_month" class="mes" name="dob_month">
                        <option value="-">-</option>
                        <option value="1">January</option>
                        <option value="2">Febuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select id="form_dob_day" name="dob_day">
                        <option value="-">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="form_dob_year" name="dob_year">
                        <option value="-">-</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                    </select>
                    <label>Genero</label>
                    <br>
                    <input type="radio" name="gender">Masculino
                    <input type="radio" name="gender"> Femenino
                    <label>Subir foto de perfil</label>
                    <br>
                    <div style="display:flex">
                        <div class="uploadbutton">
                            <input type="button" id="my-button" value="Select Files">
                            <input type="file" name="my_file" id="my-file" accept="image/*">
                        </div>
                        <span class="uploadphoto"></span>
                    </div>
                    <br>
                    <button type="button" id="anterior" class="anterior">Anterior</button>
                    <button type="button" class="btnPaso1">Terminar</button>
                </div>
            </form>
        </div>
    </div>
    <div style="flex-grow: 1;">
        <center>
            <label class="companyname">Esteban &amp; Edgar 2017</label>
        </center>
    </div>
    <script>
        var modal = document.getElementById('myModal');

        var close = document.getElementById("close");

        $(document).on("click", ".openmodal", function() {
            $('body').css('overflow', 'hidden');
            modal.style.display = "block";
        });

        $(window).on('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                $('body').css('overflow', 'scroll');
                $(".paso2").hide();
                $(".paso1").show();
            }
        });

        $("#salir").on('click', function(event) {
            modal.style.display = "none";
            $('body').css('overflow', 'scroll');
            $(".paso2").hide();
            $(".paso1").show();

        });


        $(document).ready(function() {
            $(".btnPaso1").click(function() {
                $(".paso2").fadeIn("slow");
                $(".paso1").fadeOut();
            });

            $(".anterior").click(function() {
                $(".paso1").fadeIn("slow");
                $(".paso2").fadeOut();
            });
        });
        $('#my-button').click(function() {
            $('#my-file').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(".uploadphoto").css('background-image', 'url(' + e.target.result + ')');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $('#my-file').on("change", function() {
            readURL(this);

        });
    </script>
</body>

</html>