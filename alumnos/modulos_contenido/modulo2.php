<?php

$contenido = [
        [
               'Tema' => '<p style="text-align:left">Hechos, procesos y explicación histórica',
               'Páginas' => '110-115',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/110" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Panorama del periodo (siglos XVI y XVII)',
               'Páginas' => '116-121',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/116" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Primeras expediciones',
               'Páginas' => '122-127',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/122" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">La conquista de México-Tenochtitlan',
               'Páginas' => '128-133',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/128" target="_blank":>Click aquí',

        ],
        [
               'Tema' => '<p style="text-align:left">El nacimiento de la nueva España',
               'Páginas' => '134-139',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/134" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El virreinato de nueva España',
               'Páginas' => '140-145',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/140" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">La conquista de Michoacán y occidente',
               'Páginas' => '146-151',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/146" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">La conquista de los pueblos mayas',
               'Páginas' => '152-157',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/152" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Los gobiernos locales de nueva España',
               'Páginas' => '158-163',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/158" target="_blank":>Click aquí',

        ],
        [  
               'Tema' => '<p style="text-align:left">Las corporaciones en nueva España',
               'Páginas' => '164-169',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/164" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">La expansión de nueva España en el siglo XVII',
               'Páginas' => '170-175',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/170" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">Diversidad cultural en México',
               'Páginas' => '176-179',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/176" target="_blank":>Click aquí',
        ]
];

?>
<table style='text-align:center;margin-top:10px;' border='1'>
        <tr>
                <td style='text-align:center'>No.</td>
                <td style='text-align:center'>Tema</td>
                <td style='text-align:center'>Páginas a consultar</td>
                <td style='text-align:center'>Link a guía de estudio <br></td>
                </tr>
        <?php
        $iterador=1;

        foreach ( $contenido as $r ) {
                ?>
                <tr>
                <td><?php echo $iterador;?></td>

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