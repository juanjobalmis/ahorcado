<?php
function MuestraDefinicion($definicion, $imagen)
{
?>    
    <div class="row"> 
        <div class="col-md-12"> 
            <img src ="<?php echo $imagen ?>" />
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12"> 
            <?php echo $definicion ?>                
        </div>
    </div>
<?php
}
?>