<?php
$categorias = [
    'Hamburguesas',
    'Hot Dogs',
    'Nachos',
    'Sandwiches',
    'Sodas'
];

$productos = [
    [
        'categoria' => 'Hamburguesas',
        'nombre' => 'Burger Clásica',
        'descripcion' => 'Carne de res, queso, lechuga, tomate, cebolla y salsa de la casa.',
        'precio' => 5.50,
        'imagen' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => 'Favorita'
    ],
    [
        'categoria' => 'Hamburguesas',
        'nombre' => 'Burger Doble',
        'descripcion' => 'Doble carne de res, doble queso, vegetales frescos y salsa especial.',
        'precio' => 7.50,
        'imagen' => 'https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => 'Especial'
    ],
    [
        'categoria' => 'Hamburguesas',
        'nombre' => 'Burger Bacon',
        'descripcion' => 'Carne de res, queso cheddar, tocino crujiente, lechuga y salsa BBQ.',
        'precio' => 7.25,
        'imagen' => 'https://images.unsplash.com/photo-1553979459-d2229ba7433b?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Hot Dogs',
        'nombre' => 'Hot Dog Clásico',
        'descripcion' => 'Salchicha, cebolla, mostaza, kétchup y salsa de la casa.',
        'precio' => 4.00,
        'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnSWupoFYUjoTO84eeYjpaT55MOFoSmENk-6S7U1rAJKnjr45FqLJApqyT&s=10',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Hot Dogs',
        'nombre' => 'Hot Dog Supremo',
        'descripcion' => 'Salchicha, queso, tocino, cebolla caramelizada y aderezo especial.',
        'precio' => 5.25,
        'imagen' => 'https://i.blogs.es/b40101/hotdog/650_1200.jpg',
        'etiqueta' => 'Nuevo'
    ],
    [
        'categoria' => 'Nachos',
        'nombre' => 'Nachos con Queso',
        'descripcion' => 'Totopos crujientes con queso fundido, jalapeño y salsa.',
        'precio' => 4.50,
        'imagen' => 'https://images.unsplash.com/photo-1513456852971-30c0b8199d4d?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Nachos',
        'nombre' => 'Nachos Supreme',
        'descripcion' => 'Totopos, carne sazonada, queso, frijoles, pico de gallo y crema.',
        'precio' => 6.25,
        'imagen' => 'https://images.unsplash.com/photo-1582169296194-e4d644c48063?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => 'Especial'
    ],
    [
        'categoria' => 'Sandwiches',
        'nombre' => 'Chicken Sandwich',
        'descripcion' => 'Pollo crujiente, lechuga, tomate, queso y aderezo cremoso.',
        'precio' => 5.75,
        'imagen' => 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Sandwiches',
        'nombre' => 'Club Sandwich',
        'descripcion' => 'Pollo, jamón, queso, lechuga, tomate y mayonesa.',
        'precio' => 6.00,
        'imagen' => 'https://images.unsplash.com/photo-1553909489-cd47e0907980?auto=format&fit=crop&w=900&q=85',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Sodas',
        'nombre' => 'Soda Grande',
        'descripcion' => 'Bebida fría de cola, limón-lima o naranja.',
        'precio' => 1.75,
        'imagen' => 'https://distribuidoraojodeagua.com/cdn/shop/files/download_2.jpg?v=1709244340',
        'etiqueta' => ''
    ],
    [
        'categoria' => 'Sodas',
        'nombre' => 'Soda Mediana',
        'descripcion' => 'Bebida fría en tamaño mediano.',
        'precio' => 1.35,
        'imagen' => 'https://walmartsv.vtexassets.com/arquivos/ids/372484/Gaseosa-Coca-Cola-Regular-Lata-354-ml-2-3689.jpg?v=638392773683200000',
        'etiqueta' => ''
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger City | Gestión de Pedidos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--
<header class="topbar">

    <div class="topbar-inner">

        <a href="#inicio" class="brand">
            <img src="image.png" alt="Burger City">
        </a>

        <nav class="main-nav">
            <a href="#menu">Menú</a>
            <a href="#pedido">Mi pedido</a>
            <a href="#historial">Historial</a>
        </nav>

    </div>

</header> -->


<main id="inicio">

<!--
<section class="hero">

    <div class="hero-copy">

        <p class="eyebrow">
            BURGER CITY · COMIDA RÁPIDA
        </p>

        <h1>
            Tu antojo,
            <span>hecho al momento.</span>
        </h1>

        <p class="hero-text">
            Elige tus favoritos, arma tu pedido y selecciona
            si lo consumirás en el local o quieres pedirlo para llevar.
        </p>

        <div class="hero-actions">

            <a href="#menu" class="btn btn-primary">
                Ver menú
            </a>

            <a href="#pedido" class="btn btn-secondary">
                Armar pedido
            </a>

        </div>

    </div>


    <div class="hero-image">

        <img
            src="https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?auto=format&fit=crop&w=1200&q=85"
            alt="Hamburguesa"
        >

    </div>

</section>

-->

<section class="menu-order-layout">

    <section class="menu-section" id="menu">

   <!-- <div class="section-heading">

        <div>

            <p class="eyebrow">
                NUESTRO MENÚ
            </p>

            <h2>
                Elige lo que se te antoje
            </h2>

        </div>

        <p class="menu-note">
            Precios en USD
        </p>

    </div> -->



    <div class="category-bar">

        <?php foreach ($categorias as $categoria): ?>

            <a href="#<?= strtolower(str_replace(' ', '-', $categoria)) ?>">

                <?= htmlspecialchars($categoria) ?>

            </a>

        <?php endforeach; ?>

    </div>



    <?php foreach ($categorias as $categoria): ?>

        <div
            class="menu-group"
            id="<?= strtolower(str_replace(' ', '-', $categoria)) ?>"
        >

            <div class="category-title">

                <h3>
                    <?= htmlspecialchars($categoria) ?>
                </h3>

                <span></span>

            </div>



            <div class="product-grid">

                <?php foreach ($productos as $producto): ?>

                    <?php if ($producto['categoria'] !== $categoria) continue; ?>

                    <article class="product-card">

                        <div class="product-image">

                            <?php if (!empty($producto['etiqueta'])): ?>

                                <span class="product-tag">
                                    <?= htmlspecialchars($producto['etiqueta']) ?>
                                </span>

                            <?php endif; ?>


                            <img
                                src="<?= htmlspecialchars($producto['imagen']) ?>"
                                alt="<?= htmlspecialchars($producto['nombre']) ?>"
                            >

                        </div>


                        <div class="product-body">

                            <div class="product-head">

                                <h4>
                                    <?= htmlspecialchars($producto['nombre']) ?>
                                </h4>

                                <strong>
                                    $<?= number_format($producto['precio'], 2) ?>
                                </strong>

                            </div>


                            <p>
                                <?= htmlspecialchars($producto['descripcion']) ?>
                            </p>


                            <form
                                class="add-form"
                                action="#"
                                method="post"
                            >

                                <input
                                    type="hidden"
                                    name="producto"
                                    value="<?= htmlspecialchars($producto['nombre']) ?>"
                                >

                                <label>

                                    Cant.

                                    <select name="cantidad">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                    </select>

                                </label>


                                <button
                                    type="submit"
                                    class="add-btn"
                                >
                                    Agregar
                                </button>

                            </form>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    <?php endforeach; ?>

</section>



<section class="order-panel">

    <div>

        <p class="eyebrow">
            TU PEDIDO
        </p>
    </div>


    <div class="summary-box">

        <div class="customer-box">
            <label for="cliente">
                Cliente
            </label>

            <input
                type="text"
                id="cliente"
                name="cliente"
                placeholder="Agregar cliente"
            >
        </div>

        <div class="order-type-options" aria-label="Tipo de pedido">
            <label>
                <input
                    type="radio"
                    name="tipo_pedido"
                    value="local"
                    checked
                >

                <span>
                    Local
                </span>
            </label>

            <label>
                <input
                    type="radio"
                    name="tipo_pedido"
                    value="llevar"
                >

                <span>
                    Llevar
                </span>
            </label>
        </div>

        <div class="order-items">
            <div class="order-item">
                <div>
                    <strong>
                        Burger Clasica
                    </strong>

                    <span>
                        Cant. 1
                    </span>
                </div>

                <strong class="order-item-price">
                    $5.50
                </strong>

                <div class="order-item-actions">
                    <button type="button">
                        Modificar
                    </button>

                    <button type="button" class="delete">
                        Eliminar
                    </button>
                </div>
            </div>

            <div class="order-item">
                <div>
                    <strong>
                        Hot Dog Supremo
                    </strong>

                    <span>
                        Cant. 2
                    </span>
                </div>

                <strong class="order-item-price">
                    $10.50
                </strong>

                <div class="order-item-actions">
                    <button type="button">
                        Modificar
                    </button>

                    <button type="button" class="delete">
                        Eliminar
                    </button>
                </div>
            </div>
        </div>

        <div class="summary-row">

            <span>
                Subtotal
            </span>

            <strong>
                $0.00
            </strong>

        </div>


        <div class="summary-row total">

            <span>
                Total
            </span>

            <strong>
                $0.00
            </strong>

        </div>


        <button
            class="btn btn-primary full-width"
            type="button"
        >
            Cobrar
        </button>

        <div class="summary-actions">
            <button
                class="btn btn-secondary"
                type="button"
            >
                Guardar
            </button>

            <button
                class="btn btn-secondary cancel"
                type="button"
            >
                Cancelar
            </button>
        </div>

    </div>

</section>



<section class="history-section" id="historial">

    <div class="section-heading compact">

        <p class="eyebrow">
            HISTORIAL
        </p>

        <h2>
            Pedidos recientes
        </h2>

        <p>
            Aquí aparecerán los pedidos realizados.
        </p>

    </div>


    <div class="history-table-wrap">

        <table class="history-table">

            <thead>

                <tr>

                    <th>
                        Pedido
                    </th>

                    <th>
                        Tipo
                    </th>

                    <th>
                        Fecha
                    </th>

                    <th>
                        Estado
                    </th>

                    <th>
                        Total
                    </th>

                </tr>

            </thead>


            <tbody>

                <tr>

                    <td
                        colspan="5"
                        class="table-empty"
                    >
                        No hay pedidos registrados todavía.
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</section>


</main>

</body>

</html>
