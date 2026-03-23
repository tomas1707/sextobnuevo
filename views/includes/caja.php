<?php
function mostrarCaja($tipo, $valor, $desc, $enlaceWeb, $icono) {
 $colorClases = [
        'verde'    => 'bg-success',
        'rojo'     => 'bg-danger',
        'amarillo' => 'bg-warning',
        'azul'     => 'bg-info'
    ];

$iconoClases=[
    'bolso'      => 'ion-bag',
    'barras'     => 'ion-stats-bars',
    'persona'    => 'ion-person-add',
    'pastel'     => 'ion-pie-graph'
];

$claseBg = $colorClases[$tipo] ?? 'bg-secondary';
$claseIcon=$iconoClases[$icono] ?? 'ion-person-add';

echo "
    <div class='small-box $claseBg'>
    <div class='inner'>
        <h3>$valor</h3>
        <p>$desc</p>
        </div>
        <div class='icon'>
        <i class='ion $claseIcon'></i>
        </div>
        <a href='$enlaceWeb' class='small-box-footer'>More info <i class='fas fa-arrow-circle-right'></i></a>
        </div>
        ";
}
?>