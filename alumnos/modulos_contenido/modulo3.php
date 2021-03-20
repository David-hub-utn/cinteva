<?php

$contenido = [
        [
               'Tema' => '<p style="text-align:left">La vida cotidiana en nueva España',
               'Páginas' => '196-207',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/196" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El conocimiento histórico en un país colonizado',
               'Páginas' => '208-213',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/208" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">Panorama del periodo (siglo XVIII)',
               'Páginas' => '214-219',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/214" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">La minería en nueva España',
               'Páginas' => '220-225',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/220" target="_blank":>Click aquí',

        ],
        [
               'Tema' => '<p style="text-align:left">Ganadería y agricultura en nueva España',
               'Páginas' => '226-231',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/226" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">El auge y crecimiento de las ciudades',
               'Páginas' => '232-237',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/232" target="_blank":>Click aquí',
        ],
        [  
               'Tema' => '<p style="text-align:left">El patrimonio artístico virreinal',
               'Páginas' => '238-247',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/238" target="_blank":>Click aquí',
        ],
        [
               'Tema' => '<p style="text-align:left">La herencia cultural del virreinato',
               'Páginas' => '248-251',
               'Link' => '<a href="https://libros.conaliteg.gob.mx/S26043.htm#page/248" target="_blank":>Click aquí',
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