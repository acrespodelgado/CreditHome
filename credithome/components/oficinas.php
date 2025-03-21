<?php

global $oficinas;

$oficinas = [
    [
        'titulo' => 'Sevilla',
        'direccion' => 'Av. San Francisco Javier, 9 Edificio Sevilla 2, planta 4, módulo 16 de Sevilla',
        'enlace' => 'https://maps.app.goo.gl/gtv47xrss3tU14Sc6'
    ],
    [
        'titulo' => 'Puerto Banús, Marbella',
        'direccion' => 'Av. de las Naciones Unidas C.C. Cristamar 29660 Puerto Banús (Marbella)',
        'enlace' => 'https://maps.app.goo.gl/Nif6LsQMARmUZsQo7'
    ],
    [
        'titulo' => 'Madrid',
        'direccion' => 'Calle Ayala 4, 28001. Madrid',
        'enlace' => 'https://maps.app.goo.gl/nsJNTtoDDdNE2yi59'
    ],
    [
        'titulo' => 'Bormujos',
        'direccion' => 'Calle Perú, 49 Edif. Corona Center, planta baja mod. 11 de Bormujos (Sevilla)',
        'enlace' => 'https://maps.app.goo.gl/gmcwyzF4bTuwMSZa6'
    ],
    [
        'titulo' => 'Dos Hermanas',
        'direccion' => 'Av. Gabriel Miró, 3 Edif. Wertice, planta 5ª mod. 8B de Dos Hermanas (Sevilla)',
        'enlace' => 'https://maps.app.goo.gl/7YAGqBG8FjB4Lwk28'
    ]
];

if (!function_exists('mostrar_oficina')) {
    function mostrar_oficina($oficina) {
        if (!isset($oficina['enlace']) || !isset($oficina['titulo']) || !isset($oficina['direccion'])) {
            return;
        }
        ?>
        <li>
            <a href="<?php echo htmlspecialchars($oficina['enlace']); ?>" target="_blank" rel="noopener noreferrer">
                <h4><?php echo htmlspecialchars($oficina['titulo']); ?></h4>
                <p><?php echo htmlspecialchars($oficina['direccion']); ?></p>
            </a>
        </li>
        <?php
    }
}

if (!function_exists('get_oficinas')) {
    function get_oficinas() {
        global $oficinas;
        return $oficinas;
    }
}
