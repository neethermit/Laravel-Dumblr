@extends('main')
@section('TODO')

<link rel="stylesheet" type="text/css" href="{{ asset('ProfileStyle.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('confstyle.css') }}">

<div class="blog">
    <p style="display:inline-block;margin-bottom:15px">Configuraciones</p>
    <form action="{{ route('listener.destroy', session('user')->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="buttonCerrarS" name="CerrarS">Dar de baja</button>
    </form>
    <form action="/close/this/session" method="get">
        {{ csrf_field() }}
        <button type="submit" class="buttonCerrarS">Cerrar Sesión</button>
    </form>
    <form action="{{ route('listener.update', session('user')->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <hr>
        <p>&nbsp;Correo</p>
        <input type="email" name="email" class="campo" placeholder="correo@correo.com" value="{{ session('user')->email }}">

        <p>&nbsp;Contraseña</p>
        <input type="password" class="campo" placeholder="Nueva contraseña" id="pass" name="password">
        <input type="password" class="campo" name="passwordV" placeholder="Confirma la contrase&ntilde;a" id="passV" oninput="verifyPass()" >

        <p>&nbsp;Nombre de Pantalla</p>
        <input type="text" class="campo" name="name" placeholder="Nombre actual" value="{{ session('user')->name }}">

        <p><i class="fa fa-gift" aria-hidden="true"></i>&nbsp;Fecha de Nacimiento</p>
        <div class="flexdiv">
            <select id="form_dob_month" class="mes" name="dob_month">
                <option value="-">-</option>
                <option value="01">January</option>
                <option value="02">Febuary</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select id="form_dob_day" name="dob_day">
                <option value="-">-</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
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
        </div>

        <p>&nbsp;Género</p>
        <select name="gender" id="genero">
            <option value="1">Masculino</option>
            <option value="0">Femenino</option>
        </select>
        <hr>
        <p>&nbsp;Foto de perfil</p>
        
        <div class="uploadbutton" onclick="$('#upd8-photo1').">
            <input type="button" id="conf-photo1" class="subirImagen" value="Select Files">
            <input type="file" name="image" id="upd8-photo1" accept="image/*"> 
        </div>
        
        
        <p><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;Foto de portada</p>

        <div class="uploadbutton">
            <input type="button" id="conf-photo2" class="subirImagen" value="Select Files">
            <input type="file" name="profile_image" id="upd8-photo2" accept="image/*">
        </div>

        <div class="profilehead">
            <div class="headerphoto" style="background-image:url({{ session('user')->image_profile_url }})"></div>
            <div class="profilepic" style="background-image:url({{ session('user')->image_url }})"></div>
        </div>

        <!--<p style="margin-top:80px;">&nbsp;Descripción</p>
        <textarea rows="4" cols="50" name="descripcion" maxlength="300"></textarea>-->
        <button type="submit" class="buttonCerrarS">Guardar</button>
    </form>
</div>

<script type="text/javascript">
        $('#conf-photo1').click(function() {
            $('#upd8-photo1').click();
        });

        $('#conf-photo2').click(function() {
            $('#upd8-photo2').click();
        });

        function readURLphoto1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(".profilepic").css('background-image', 'url(' + e.target.result + ')');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLphoto2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(".headerphoto").css('background-image', 'url(' + e.target.result + ')');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $('#upd8-photo1').on("change", function() {
            readURLphoto1(this);
        });

        $('#upd8-photo2').on("change", function() {
            readURLphoto2(this);
        });



        $("#genero").val("");


        $("#privacidad").val("");

        $("#countries").val("");

        $("#pass").keydown(function() {
            $("#passV").val("");
        });
        $(document).ready(function() {
            verifyPass = function() {
                //console.log("salgo en la consola");

                var pass = $("#pass").val();
                var passV = $("#passV").val();

                var input = document.getElementById('passV');
                if (input.value.length == 0) {
                    $("#passV").removeClass("error");
                } else {
                    if (pass != passV) {
                        //console.log(passV + "\nmal >:c");
                        $("#errorPass").show();
                        $("#passV").removeClass("good");
                        $("#passV").addClass("error");
                    } else {
                        //console.log("\nbien");
                        $("#errorPass").hide();
                        $("#passV").removeClass("error");
                        $("#passV").addClass("good");
                    }
                }
            }
        });
        var verifyPass;
    </script>

@endsection