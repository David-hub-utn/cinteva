<?php

$contenido = [
        [
               'Tema' => '<p style="text-align:left"><font size=5px>Para ver el contenido del módulo 2 solicita a tu profesor tu registro</font>',
        ]
];

?>
<table style='text-align:center;margin-top:10px;' border='1'>
        <tr>
                </tr>
        <?php
        $iterador=1;

        foreach ( $contenido as $r ) {
                ?>
                <tr>
  

                <?php
                foreach ( $r as $tabla ) {
                ?>
                        
                        <td color="white"><?php echo $tabla;?></td>
                <?php
                }
                $iterador++;
                ?>
                </tr>
                
        <?php
        }
        ?>
</table>