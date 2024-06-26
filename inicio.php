<?php

session_start();
if (!empty($_SESSION["ID"])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>   
    <title>Inicio - Wipii</title>
    <style>
        #fechaYHora{
            background-color: #f4c869;
            padding: 5px 3px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #31578f;
            font-weight: 700;
        }
        header{
            height: 64px;
        }
        #logo{
            height: 25px;
        }
        #logOut{
            color: #f4c869;
            font-weight: 700;
            text-decoration: none;
            outline: none;
        }
    </style>
</head>
    <header>
        <span id="closeMen" class="material-symbols-outlined">close</span>
        <span id="openMen" class="material-symbols-outlined">menu</span>

        <div id="fechaYHora"></div>
        <?php 
            echo "<h2 class='username'>Hola!". " ". $_SESSION["nombre"]."</h2>";
        ?>
        <!-- <img id="logo" src="./logo/wip¡¡Logo.png" alt=""> -->
        <a id="logOut" href="./controlador/controlador_cerrarSession.php">        <span class="material-symbols-outlined">logout</span></a>
    </header>
         <img id="openImg" src="./assets/logo/wip¡¡Logo.png" alt="logo">   <!-- Imagen de carga inicial --> 
        <h2 class="comentOppening">Compra seguro con wipii</h2> <!-- texto1 de carga inicial --> 
        <h2 class="comentOppening">Nosotros estaremos cuidando tu seguridad economica</h2><!-- texto2 de carga inicial --> 
        <h2 class="comentOppening">con WIPII el es precio justo</h2><!-- texto3 de carga inicial --> 
        <div id="SectionSelect">
    
                <div id="nuevaVenta" class="itemSelect">
                    <img class="imgMENU" src="./icons/factura-punto-de-venta.png" alt="">
                    <h4>Nueva Venta</h4>
                </div>
                <div class="itemSelect">
                    <img class="imgMENU" src="./icons/alt-de-inventario (1).png" alt="">
                    <h4>Historial de ventas</h4>
                </div>

        
                <div class="itemSelect">
                    <img class="imgMENU" src="./icons/venta.png" alt="">
                    <h4>Mis Productos</h4>
                </div>
                <div class="itemSelect">
                    <img class="imgMENU" src="./icons/servicio-al-cliente.png" alt="">
                    <h4>Soporte</h4>
                </div>

        </div>
        <section id="servAyS">
            <h2>Servicios AyS</h2>
            <div id="contenedorServicesAyS">
                <div>
                    Mantenimiento de computadores
                </div>
                <div>
                    PBX
                </div>
                <div>
                    Mantenimiento de aires
                </div>
                <div>
                    Servicios tecnicos y matenimientos
                </div>
            </div>
            <div id="contenedor-publicidad">
                publicidad
            </div>
        </section>
        <div id="cuadro_de_venta">
            <h2>Nueva Venta</h2>
            <form id="ventaForm" action="" method="post">
                <input class="inputs" type="text" placeholder="cliente" name="clientName">
                <input class="inputs" list="platos"  placeholder="Elige el producto"  name="producto" id="productSelect">
                <datalist id="platos">
                    <option value="Hamburguesa">HAM7071  <strong>$15.500 pesos</strong></option>
                    <option value="Perro Caliente">PER1603 <strong>$7.000 pesos</strong></option>
                    <option value="Picada Normal">PIC7642  <strong>$14.000 pesos</strong></option>
                    <option value="Picada Familiar">PIC3488  <strong>$29.900 pesos</strong></option>
                    <option value="Especial">ESP2447  <strong>$45.000 pesos</strong></option>
                </datalist>
                <input list="cant" class="inputs" type="number" minlength="1" maxlength="2"  name="cant"  max="100" placeholder="1" min="1" id="cantidad">
                <datalist id="cant">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                    <option value="7"></option>
                    <option value="8"></option>
                    <option value="9"></option>
                    <option value="10"></option>
                </datalist>
                <input class="btnGropuPayment" type="button"  value="Añadir Producto" id="añadirP"><br>
                <input  class="inputs" type="number"  id="clientePaga" placeholder="Se recibe" min="7000">
                <input class="inputs"  type="number" placeholder="Propina" min="1">
            </form>
            <div>
                <table id="productos_comprados">
                    <thead>
                        <tr>
                            <th scope="col">PRODUCTO</th>
                            <th scope="col">CODIGO</th>
                            <th scope="col">CANT</th>
                            <th scope="col">VALOR</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpoTabla">
                    </tbody>
                </table>
            </div>
                <div id="infoPayment">
                    <div>
                        <h2>Recibido:</h2>
                        <p>$<span name="recibido" id="recibidoDiner">0</span> COP</p>
                    </div>
                    <div>
                        <h2>Vuelto:</h2>
                        <p>$<span name="vuelto" id="Dar">0</span> COP</p>
                    </div>
                    <div>
                        <h2>Total:</h2>
                        <p>$<span name="valorTotal" id="dinero">0</span> COP</p>
                    </div>
                </div>
            <div class="Btns_abajo">
                <input class="btnGropuPayment" type="button" value="Cerrar" id="cerrarVentana" >
                <input class="btnGropuPayment" type="button" value="Facturar" name="facturar" id="facturarBtn">
            </div>
        </div>
        <section id="recibo">
            <h2>Factura</h2>
            <div id="contenedor_tabla" >

            </div>
            <div id="informacion_pago">

            </div>
        </section>
    </main>
    <footer></footer>
    <script src="./js/inicio.js"></script>
    <script src="./js/fecha-hora.js"></script>
</body>
</html>