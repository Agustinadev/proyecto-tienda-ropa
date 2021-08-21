
<div class="container_productos">
    <h1 class="h1_productos">Productos</h1>
    <?php 

$products = Utils::mostrarProductos();
while ($product = $products->fetch_object()) : ?>
    

    <div class="caja_productos">
        <div class="container_relative_productos">
            <img class="img_productos" src="uploads/images/<?=$product->imagen?>" alt="">
            <div class="texto_productos">
                <a href=""><?=$product->nombre?></a>
                <span><?=$product->precio?></span>
            </div>
             
            
            <div class="page_productos">
                <a href="" class="container_carrito_productos circulo boton_modal_productos">
                    <img class="carrito_productos" src="assets/img/bolsa-de-la-compra.png" alt="">
                </a>
            </div>
            
            
            
            
            <div class="container_vista_productos circulo">
                <img class="vista_productos" src="assets/img/testigo (1).png" alt="">
            </div>
        </div>
    </div>

    
    
    
    
    <?php endwhile; ?>


<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblancoconflores.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco con Flores</a>
        <span>$6500</span>
    </div>
</div>


<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidonegro.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Negro</a>
        <span>$6500</span>
    </div>
</div>

<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblanco.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco</a>
        <span>$6500</span>
    </div>
</div>


<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblanco.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco</a>
        <span>$6500</span>
    </div>
</div>


<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblanco.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco</a>
        <span>$6500</span>
    </div>
</div>


<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblanco.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco</a>
        <span>$6500</span>
    </div>
</div>



<div class="caja_productos">
    <img class="img_productos" src="assets/img/vestidoblanco.webp" alt="">
    <div class="texto_productos">
        <a href="">Vestido Blanco</a>
        <span>$6500</span>
    </div>
</div>

</div>

<div class="fondo_transparente_productos">
                <div class="modal_productos">
                        <button" class="modal_cerrar_productos">Cerrar modal</button>

                        <div class="modal_titulo_productos">Agregar producto</div>

                        <div class="modal_mensaje_productos"><p>Lorem ipsum</p></div>

                        <div class="modal_botones_productos">
                            <a href="" class="boton_modal_productos">aceptar</a>
                            <a href="" class="boton_modal_productos">cancelar</a>
                        </div>
                </div>
    </div>   



