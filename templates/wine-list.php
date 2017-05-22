<article class="col-1 block scroll-pane">
    <h1>Wine list</h1>

    <section>
        <h3>VINO SPUMANTE</h3>

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
        <h3>Vino bianco</h3>

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

    <section>
        <h3>Vino rosso</h3>

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