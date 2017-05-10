<article class="col-1 block">
    <h1>Wine list</h1>

    <section>
        <h2>VINO SPUMANTE</h2>

        <?foreach ($menuList['vino spumante'] as $item) :?>
            <div class="menu-item">
                <div class="menu-dish">
                    <div class="menu-dish-name"><?=$item['name']?></div>
                    <div class="menu-dish-desc"><?=$item['desc']?></div>
                </div>
                <div class="menu-price"><?=$item['price']?></div>
            </div>
        <?endforeach;?>

    </section>

    <section>
        <h2 class="menu-item__offset">Vino bianco</h2>

        <?foreach ($menuList['vino bianco'] as $item) :?>
            <div class="menu-item">
                <div class="menu-dish">
                    <div class="menu-dish-name"><?=$item['name']?></div>
                    <div class="menu-dish-desc"><?=$item['desc']?></div>
                </div>
                <div class="menu-price"><?=$item['price']?></div>
            </div>
        <?endforeach;?>

    </section>

</article>

<article class="col-1 block">
    <section>
        <h2>Vino rosso</h2>

        <?foreach ($menuList['vino rosso'] as $item) :?>
            <div class="menu-item">
                <div class="menu-dish">
                    <div class="menu-dish-name"><?=$item['name']?></div>
                    <div class="menu-dish-desc"><?=$item['desc']?></div>
                </div>
                <div class="menu-price"><?=$item['price']?></div>
            </div>
        <?endforeach;?>

        <a class="btn btn-primary btn-md" href="#">See full wine list</a>
    </section>

</article>