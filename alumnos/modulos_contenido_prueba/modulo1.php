<?php

$contenido = [
        [
               'Tema' => '<p style="text-align:left">La vida urbana en Mesoamérica',
               'Páginas' => '16-27',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/16" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Pasado y presente',
               'Páginas' => '28-33',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/28" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Las fuentes históricase',
               'Páginas' => '34-39',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/34" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">Los indígenas en el México actual',
               'Páginas' => '40-45',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/40" target="_blank":>Click aquí',

        ],
        [
               'Tema' => '<p style="text-align:left">Panorama del periodo (prehistoria a siglo XVI)',
               'Páginas' => '46-51',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/46" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El poblamiento de América y el preclásico mesoamericano',
               'Páginas' => '52-57',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/52" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">El periodo clásico',
               'Páginas' => '58-63',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/58" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Aridoamérica y Oasisamérica',
               'Páginas' => '64-69',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/64" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El periodo posclásico',
               'Páginas' => '70-75',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/70" target="_blank":>Click aquí',

        ],
        [  
               'Tema' => '<p style="text-align:left">Cultura maya',
               'Páginas' => '76-81',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/76" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El imperio purépecha',
               'Páginas' => '82-87',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/82" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">El imperio mexica y la triple alianza',
               'Páginas' => '88-93',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/88" target="_blank":>Click aquí',
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
