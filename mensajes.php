<?php
// Mensaje: Producto registrado correctamente
if(isset($_REQUEST['a'])){ ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="imgs/logo.png" class="rounded me-2 logo" alt="Imagen">
            <strong class="me-auto">SupermercadoElPoliVeci</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>

        <div class="toast-body">
            <h6 class="text-center msjexito">Producto registrado correctamente.</h6>
        </div>
    </div>
</div>
<?php } ?>

<?php
//Mensaje: Producto actualizado correctamente
if(isset($_REQUEST['update'])){ ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="imgs/logo.png" class="rounded me-2 logo" alt="Imagen">
            <strong class="me-auto">SupermercadoElPoliVeci</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>

        <div class="toast-body">
            <h6 class="text-center msjexito">Producto actualizado correctamente.</h6>
        </div>
    </div>
</div>
<?php } ?>

<?php
//Mensaje: Formato de imagen invalido o sobre pasa el tamaño establecido
if(isset($_REQUEST['errorimg'])){ ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="imgs/logo.png" class="rounded me-2 logo" alt="Imagen">
            <strong class="me-auto">SupermercadoElPoliVeci</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>

        <div class="toast-body">
            <h6 class="text-center msjexito">Recuerde, la imagen debe estar en formato PNG o JPEG no mayor a 1MB.</h6>
        </div>
    </div>
</div>
<?php } ?>

<?php
//Mensaje: Producto eliminado correctamente
if(isset($_REQUEST['deletProducto'])){ ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="imgs/logo.png" class="rounded me-2 logo" alt="Imagen">
            <strong class="me-auto">SupermercadoElPoliVeci</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        
        <div class="toast-body">
            <h6 class="text-center msjDanger">
                <?php echo $_REQUEST['mensaje']; ?>
            </h6>
        </div>
    </div>
</div>
<?php } ?>