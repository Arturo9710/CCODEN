<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento</title>

    <link rel="stylesheet" type="text/css" href="home.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" href="css/modalCss.css" rel="stylesheet">


</head>

<body style="font-size: 12pt;font-family: Arial;">

    <form action="{{ route('imprimir') }}" method="get">
        <div class="contenedorGeneral" style="width: 90%;padding: 0% 5%;">
            <div class="content 1">
                <div class="encabezado" style="display:flex;     border: 1.9px solid;     border-top: none;
    border-left: none;
    border-right: none;">
                    <div class="logo" style="width: 15%; background: pink;">
                        <image src="archivos/coden.jpeg" style="width: 100%;height: 100%;">

                    </div>
                    <div class="nombreEmpresa" style="width: 100%;background: #fff;text-align: center;">
                        <h3> CCODEN TOLUCA</h3>
                        <h5> CAPACITACIÓN Y COMERCIALIZADORA PARA EL DESARROLLO DE NEGOCIOS</h5>
                        <h2 style="font-weight: lighter;"> CONVENIO DE CONFORMIDAD</h5>
                    </div>

                </div>
                <div class="cuerpo1" style="line-height: 35px;">
                    <p style="font-weight: bolder;"> Que firman, por una parte:<input type="text" class="inputBorder"
                            id="p_inputnombre" name="p_inputnombre"> </p>

                    <p style="font-weight: bolder; text-transform:uppercase;"> En su calidad de:<input type="text"
                            class="inputBorder" id="p_calidad" name="p_calidad"> y por
                        otra la Empresa.</p>

                    <p style="font-weight: bolder;"> Se otorga el día: <input type="date" class="inputBorder"
                            id="p_dia" name="p_dia"> en
                        Toluca, Edo. de México.</p>

                    <div style="width: 100%;display: flex;">
                        <div style="    width: 23.33%;">
                            <p style="font-weight: bolder;"> CODIF: <input type="text" id="codif" name="codif"
                                    class="inputBorder">
                                AB009</p>
                        </div>
                        <div style="
                                    width: 23.33%;">
                            <p style="font-weight: bolder;">DESPACHO: <input type="text" id="des" name="des"
                                    class="inputBorder">202</p>
                        </div>
                        <div style="    width: 23.33%;">
                            <p style="font-weight: bolder;">CURSO: <input type="text" id="curso" name="curso"
                                    class="inputBorder">08 M</p>
                        </div>
                    </div>
                </div>
                <div class="cuerpo2" style="line-height:30px; margin:10px 0px">
                    <p style="font-weight: bolder;"> En el que manifiestan que se han enterado ambas partes de que:
                    <div class="contenido" style="text-align: justify; border-bottom: ridge;">
                        </p>1.- No se ofrece un empleo, la oportunidad está basada en una distribución de perfumería que
                        se
                        otorga previa compra inicial, cuyo monto otorga el derecho a un determinado descuento. La
                        función de
                        esta distribución es ocasionar un desplazamiento de mercancías y de recomendar a otros
                        potenciales
                        distribuidores para formar una organización de ventas.
                        <br>2.- La oportunidad de obtener ingresos se refiere a un negocio propiedad del cliente a
                        través de
                        la
                        venta de fragancias y dichos ingresos estarán determinados por la función realizada (recomendar
                        potenciales distribuidores), y por el trabajo de la organización de ventas del cliente en caso
                        de
                        que
                        llegue a coordinar un grupo de ventas.
                        <br>3.- Se deberá liquidar totalmente el importe de las compras al momento de realizar su
                        pedido.
                        <br>4.- No se pidió ninguna inversión o capital.
                        <br>5.- La actividad primordial del <input type="text" class="inputBorder"
                            id="p_inputnombres" name="p_inputnombres">
                        será la de reclutar a nuevos prospectos a: Socio
                        Junior, Socio Senior y Socio Master a través de los diferentes medios de publicidad.
                        <br>6.- La compraventa de perfumería no es obligatoria, sino a voluntad del nuevo <input
                            type="text" class="inputBorder" id="p_inputnombress" name="p_inputnombress">, por
                        medio de: Muestrarios y Representantes.
                        <br>7.- Queda entendido por ambas partes que: los ingresos dependerán únicamente de la venta
                        directa
                        que
                        el firmante realice y de las comisiones que generen los patrocinados.
                    </div>
                </div>
                <div class="cuerpo3" style="line-height:30px; margin:10px 0px ">
                    <p style="font-weight: 600;"> Causas por las que CCODEN TOLUCA, puede dar por terminado el presente
                        convenio:</p>
                    - Adjudicarse invitados o prospectos a clientes de otras personas.
                    <br>- Hacer mal uso de la credencial y/o los derechos que ésta le otorga.
                    <br>- Invite a seleccionar prospectos de clientes con ofrecimiento de empleo, sueldo fijo,
                    prestaciones
                    u ofertas diferentes a las especificadas en este convenio.
                    <br>- En caso de ser menor de edad, en el momento que mi tutor retire su consentimiento.
                    <br>- Proceda en contra de la ética, bienestar o moral, desacreditando al grupo en el que se
                    desarrolla,
                    o a la empresa. - Divulgue, publique, difunda, comercialice o revele secretos industriales amparado
                    por
                    el art. 82 de la Ley de Propiedad Industrial.
                    <br>Cualquier inconformidad deberá ser avisada por ambas partes, antes de proceder con la autoridad
                    correspondiente que es la Procuraduría Federal del Consumidor (PROFECO) exclusivamente.
                </div>
                <div class="footer">
                    SUSCRIBO EL PRESENTE CONVENIO Y CARTA DE ADHESIÓN POR ASÍ CONVENIR A MIS INTERESES, ASÍ MISMO
                    MANIFIESTO
                    QUEDAR ENTERADO DE LO AQUÍ ESTABLECIDO
                    <div class="firmas" style="display : flex; margin-top: 8%;">
                        <div style="    position: absolute; left: 17%; border-top: 1px solid; padding: 25px;">NOMBRE
                            COMPLETO</div>
                        <div style="position: absolute;
                                right: 33%;
                                border-top: 1px solid; padding: 26px;">CCODEN TOLUCA
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="p-2">
                <div class="image" style="width:62%; margin: 0 auto;">
                    <img src="{{ asset('archivos/coden.jpeg') }}" style="position: absolute;
                        opacity: 0.1;
                        margin-top: -103px;
                        margin-left: 40px;
                        z-index: -1;
                        display: block;
                        width: 45rem;
                        height: 45rem;" alt="imagen" srcset="">

                    <div style="font-weight: bold;
                    margin-top: 174px;
                    text-align: center;
                    "> TOLUCA, EDO. DE MÉXICO A <input type="date" class="inputBorder" id="p_dia2" name="p_dia2">
                    </div>
                    <br>
                    <br>
                    <div>A QUIEN CORRESPONDA:</div><br><br>


                    <div class="contenido2" style="text-align: justify;">

                        <div>Como distribuidor independiente, por mi cuenta y riesgo me permito manifestarle mi interés
                            por
                            adquirir los productos de su línea de distribución, debido a su calidad y amplia aceptación,
                            por
                            lo que solicito que incluyan mi nombre entre su lista de compradores, para que yo pueda
                            adquirirlos a precio de mayoreo; con el objeto de aprovechar mejor los descuentos y
                            bonificaciones que ustedes hacen por volúmenes de compra. </div>
                        <br>
                        <br>
                        <br>


                        <div>Me he integrado con otros distribuidores independientes a un grupo de compras, el cual es
                            promovido por la persona que también suscribe a esta. En caso de que me aceptaran entre sus
                            compradores, entiendo que podré adquirir sus productos a precio de mayoreo. </div>
                        <br>
                        <br>

                        <div>Estoy enterado de que ustedes tienen una política de descuentos y bonificaciones por
                            volumen
                            de
                            compras. Si de las compras efectuadas le correspondiera alguna bonificación a mi grupo de
                            compras, estoy también de acuerdo de que ésta aplique a favor del Socio Master de mi grupo.
                        </div>
                        <br>
                        <br>
                        <div>
                            Además, estoy de acuerdo de mi carácter de distribuidor independiente, que cuento con los
                            elementos necesarios para efectuar por mi cuenta y gastos, la distribución de los productos
                            que
                            adquiera en los términos y condiciones que yo lo determine, sin estar sujeto a horarios,
                            subordinación o supervisión por parte de ustedes.
                        </div>

                        <div>
                            En cualquier momento puedo dar por terminado el presente convenio sin estar sujeto a
                            obligaciones morales, legales y/o económicas con ustedes, renunciando a bonificaciones o
                            compensaciones económicas, ya que estoy consciente que no es un empleo y sólo los obtendré
                            si
                            ustedes lo creyeran conveniente.

                        </div>
                        <br>
                        <br>
                        <div>

                            En el caso de ser menor de edad, cuento con el permiso de mi tutor por escrito y presentado
                            ante
                            ustedes, y en el caso de no contar con el presente permiso o presentar un apócrifo, queda
                            automáticamente inválida la presente.

                        </div>
                    </div>
                </div>
                <div style=" position: absolute;
                    left: 39%;
                    border-top: 1px solid;
                    padding: 25px;

                    display: block;
                    margin-top: 57px;">Aqui va nombre
                </div>

            </div>
        </div>


        <input style=" cursor: pointer;
                    padding: 10px;
                    border: none;
                    box-shadow: 3px 4px 7px -2px;
                    backgound:#1ed760;     background: #1ed760;
                    font-weight: bold;     border-radius: 4px;   position: absolute;  left: 82%;
                    bottom: -240%;" type="submit" value="Imprimir">

    </form>

    <script src="{{ asset('js/event.js') }}"></script>
</body>

</html>
