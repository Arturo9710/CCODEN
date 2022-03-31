<!DOCTYPE html>
<html lang="es">

<head id="id_head">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>REPORTE CCODEN</title>

    <link rel="stylesheet" type="text/css" href="home.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <!-- <link rel="stylesheet" href="css/modalCss.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/pdfCss.css" rel="stylesheet">

</head>

<body style="font-family: Arial;">

    <form action="{{ route('imprimir') }}" method="get">
        <div class="contenedorGeneral" style="width: 90%;padding: 0% 5%;position:relative;">
            <div class="encabezado" style="display:flex;">
                <div class="logo">
                    {{-- <image src="" style="" class="img"> --}}
                    <img src="archivos/coden.jpeg" style="width: 150px; height: 70px; display:block; margin-top:0px">
                </div>
                <div class="nombreEmpresa" style="">
                    <h3> CCODEN TOLUCA</h3>
                    <h5> CAPACITACIÓN Y COMERCIALIZADORA PARA EL DESARROLLO DE NEGOCIOS</h5>
                    <h2 style="font-weight: lighter; font-size:12px;"> CONVENIO DE CONFORMIDAD</h5>
                </div>

            </div>


            <div class="cuerpo1"
                style="display:flex; border-top:2px solid #000;  margin-top:10px; padding:11.5px">
                <p style="font-weight: bolder;"> Que firman, por una parte:
                    <span style="font-weight: bold"> <?php echo $_GET['p_inputnombre']; ?> </span>

                </p>

                <p style="font-weight: bolder;"> En su calidad de: <span
                        style="font-weight: bold; text-transform:uppercase;"> <?php echo $_GET['p_calidad']; ?>
                    </span> y por
                    otra la Empresa.</p>
                <p style="font-weight: bolder;">Se otorga el día :
                    <?php
                    
                    setlocale(LC_TIME, 'spanish');
                    $fecha = $_GET['p_dia'];
                    $fecha = str_replace('/', '-', $fecha);
                    // echo $_GET['p_dia'];s
                    // echo '<br>';
                    $newDate = date('d-m-Y', strtotime($fecha));
                    // echo "Variable newDate. $newDate";
                    // echo '<br>';
                    $mesDesc = gmstrftime(' %A, %d de %B de %Y');
                    // echo " variable final. $mesDesc";
                    
                    // dd();
                    ?>
                    <span style="font-weight: bold"> <?php echo $mesDesc; ?> en
                        Toluca, Edo. de México.
                </p>
                <div style="width: 100%;">
                    <div style="    width: 23.33%;float:left">
                        <p style="font-weight: bolder;"> CODIF: <span style="font-weight: bold"> <?php echo $_GET['codif']; ?>
                            </span></p>
                    </div>
                    <div style="    width: 23.33%;float:left">
                        <p style="font-weight: bolder;"> DESPACHO: <span style="font-weight: bold"> <?php echo $_GET['des']; ?>
                        </p>
                    </div>
                    <div style="width: 23.33%;float:left">
                        <p style="font-weight: bolder;">CURSO: <span style="font-weight: bold"> <?php echo $_GET['curso']; ?></p>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="cuerpo2" style="line-height:30px;  float: left; border-bottom:1px solid #000">
                <p style="font-weight: bolder;"> En el que manifiestan que se han enterado ambas partes de que:</p>
                <br>
                <div class="contenido" style="text-align: justify; ">
                    <p class="p-1"> 1.- No se ofrece un empleo, la oportunidad está basada en una distribución
                        de perfumería que se
                        otorga previa compra inicial, cuyo monto otorga el derecho a un determinado descuento. La
                        función de
                        esta distribución es ocasionar un desplazamiento de mercancías y de recomendar a otros
                        potenciales
                        distribuidores para formar una organización de ventas.
                    </p>

                    <p class="p-1"> 2.- La oportunidad de obtener ingresos se refiere a un negocio propiedad
                        del cliente a través de
                        la
                        venta de fragancias y dichos ingresos estarán determinados por la función realizada (recomendar
                        potenciales distribuidores), y por el trabajo de la organización de ventas del cliente en caso
                        de
                        que
                        llegue a coordinar un grupo de ventas.
                    </p>

                    <p class="p-1">
                        3.- Se deberá liquidar totalmente el importe de las compras al momento de realizar su pedido.
                    </p>


                    <p class="p-1">

                        4.- No se pidió ninguna inversión o capital.
                    </p>

                    <div>
                        <p class="p-1">
                            5.- La actividad primordial del <span style="font-weight: bold; text-transform:uppercase;">
                                <?php echo $_GET['p_calidad']; ?> </span>
                            será la de
                            reclutar a nuevos prospectos a: Socio
                            Junior, Socio Senior y Socio Master a través de los diferentes medios de publicidad.
                        </p>
                    </div>
                    <p class="p-1">
                        6.- La compraventa de perfumería no es obligatoria, sino a voluntad del nuevo <span
                            style="font-weight: bold; text-transform:uppercase;"> <?php echo $_GET['p_calidad']; ?> </span>, por
                        medio de: Muestrarios y Representantes.
                    </p>
                    <p class="p-1">
                        7.- Queda entendido por ambas partes que: los ingresos dependerán únicamente de la venta directa
                        que
                        el firmante realice y de las comisiones que generen los patrocinados.
                    </p>

                </div>
            </div>
            <div class="cuerpo3" style="line-height:30px;">
                <p style=" font-weight: bolder;"> Causas por las que CCODEN
                    TOLUCA, puede dar por
                    terminado el presente
                    convenio:</p>
                <br>
                <p class="p-1">- Adjudicarse invitados o prospectos a clientes de otras personas.</p>
                <p class="p-1">- Hacer mal uso de la credencial y/o los derechos que ésta le otorga.</p>
                <p class="p-1">- Invite a seleccionar prospectos de clientes con ofrecimiento de empleo,
                    sueldo fijo,
                    prestaciones
                    u ofertas diferentes a las especificadas en este convenio.</p>
                <p class="p-1">- En caso de ser menor de edad, en el momento que mi tutor retire su
                    consentimiento.</p>
                <p class="p-1">- Proceda en contra de la ética, bienestar o moral, desacreditando al grupo en
                    el que se
                    desarrolla,
                    o a la empresa. Divulgue, publique, difunda, comercialice o revele secretos industriales amparado
                    por
                    el art. 82 de la Ley de Propiedad Industrial.</p>
                <p class="p-1">Cualquier inconformidad deberá ser avisada por ambas partes, antes de proceder
                    con la autoridad
                    correspondiente que es la Procuraduría Federal del Consumidor (PROFECO) exclusivamente.</p>


            </div>
            <div class="  footer" style="width:100%">
                SUSCRIBO EL PRESENTE CONVENIO Y CARTA DE ADHESIÓN POR ASÍ CONVENIR A MIS INTERESES, ASÍ MISMO
                MANIFIESTO
                QUEDAR ENTERADO DE LO AQUÍ ESTABLECIDO
                <br>

                <div class="firmas" style="display : flex; margin-top: 5%;">
                    <div style="position: absolute;left: 10%;border-top: 1px solid;padding: 25px;">
                        <input type="text" style="border: none; text-transform:uppercase" value="<?php echo $_GET['p_inputnombre']; ?>">
                    </div>
                    <div style="position: absolute;right: 10%;border-top: 1px solid;padding: 26px;">CCODEN TOLUCA</div>

                </div>

            </div>
            <div class="espacio"></div>
            <div class="p-2">
                <div class="image" style=" margin: 0 auto;">

                    <img class="ccodenimg" src="archivos/coden.jpeg" alt="imagen">

                    <div style="font-weight: bold;
                    
                    text-align: center;
                    "><?php
                    setlocale(LC_TIME, 'spanish');
                    $fecha = $_GET['p_dia2'];
                    $fecha = str_replace('/', '-', $fecha);
                    $newDate = date('d-m-Y', strtotime($fecha));
                    $mesDesc = strftime(' %d de %B del %Y');
                    
                    ?>
                        TOLUCA, EDO. DE MÉXICO A<?php echo $mesDesc; ?></div>

                    <br>
                    <div>A QUIEN CORRESPONDA:</div><br><br>


                    <div class="contenido2" style="text-align: justify;">

                        <div>Como distribuidor independiente, por mi cuenta y riesgo me permito manifestarle mi
                            interés
                            por
                            adquirir los productos de su línea de distribución, debido a su calidad y amplia
                            aceptación,
                            por
                            lo que solicito que incluyan mi nombre entre su lista de compradores, para que yo pueda
                            adquirirlos a precio de mayoreo; con el objeto de aprovechar mejor los descuentos y
                            bonificaciones que ustedes hacen por volúmenes de compra. </div>
                        <br>
                        <br>
                        <br>


                        <div>Me he integrado con otros distribuidores independientes a un grupo de compras, el cual
                            es
                            promovido por la persona que también suscribe a esta. En caso de que me aceptaran entre
                            sus
                            compradores, entiendo que podré adquirir sus productos a precio de mayoreo. </div>
                        <br>
                        <br>

                        <div>Estoy enterado de que ustedes tienen una política de descuentos y bonificaciones por
                            volumen
                            de
                            compras. Si de las compras efectuadas le correspondiera alguna bonificación a mi grupo
                            de
                            compras, estoy también de acuerdo de que ésta aplique a favor del Socio Master de mi
                            grupo.
                        </div>
                        <br>
                        <br>
                        <div>
                            Además, estoy de acuerdo de mi carácter de distribuidor independiente, que cuento con
                            los
                            elementos necesarios para efectuar por mi cuenta y gastos, la distribución de los
                            productos
                            que
                            adquiera en los términos y condiciones que yo lo determine, sin estar sujeto a horarios,
                            subordinación o supervisión por parte de ustedes.
                        </div>
                        <br>
                        <div>
                            En cualquier momento puedo dar por terminado el presente convenio sin estar sujeto a
                            obligaciones morales, legales y/o económicas con ustedes, renunciando a bonificaciones o
                            compensaciones económicas, ya que estoy consciente que no es un empleo y sólo los
                            obtendré
                            si
                            ustedes lo creyeran conveniente.

                        </div>
                        <br>
                        <br>
                        <div>

                            En el caso de ser menor de edad, cuento con el permiso de mi tutor por escrito y
                            presentado
                            ante
                            ustedes, y en el caso de no contar con el presente permiso o presentar un apócrifo,
                            queda
                            automáticamente inválida la presente.

                        </div>
                    </div>
                </div>
                <div style=" position: absolute;
                    left: 35%;
                    border-top: 1px solid;
                    
                    display: block;
                    margin-top: 57px;
                    ">
                    <input type="text" style="border: none; text-transform:uppercase" value="<?php echo $_GET['p_inputnombre']; ?>">
                </div>

            </div>

        </div>


    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    function pdf() {
        $("#id_head").append("<link rel='stylesheet' href='css/pdfCss.css' rel='stylesheet'>")

    }
</script>

</html>
