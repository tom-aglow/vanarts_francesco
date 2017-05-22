<!--START:: copy for salads section-->
<article id="salads-copy" class="col-1 block hide scroll-pane">
    <h2>Salads</h2>

    <section>
    <?foreach ($menuList['salads'] as $item) :?>
        <div class="menu-item">
            <div class="menu-dish">
                <div class="menu-dish-name"><?=$item['name']?></div>
                <div class="menu-dish-desc"><?=$item['desc']?></div>
            </div>
            <div class="menu-price"><?=$item['price']?></div>
        </div>
    <?endforeach;?>
    </section>

    <img class="controls-close" src="/img/elements/btn-close.png" alt="icon close">
</article>
<!--END:: copy for salads section-->

<!--START:: copy for main courses section-->
<article id="main-courses-copy" class="col-1 block hide scroll-pane">

    <h2>Main courses</h2>
    <section>
        <h3>Pasta & Risotto</h3>

        <?foreach ($menuList['pasta & risotto'] as $item) :?>
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
        <h3 class="menu-item__offset">Meat</h3>

        <?foreach ($menuList['meat'] as $item) :?>
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
        <h3 class="menu-item__offset">Fish</h3>

        <?foreach ($menuList['fish'] as $item) :?>
            <div class="menu-item">
                <div class="menu-dish">
                    <div class="menu-dish-name"><?=$item['name']?></div>
                    <div class="menu-dish-desc"><?=$item['desc']?></div>
                </div>
                <div class="menu-price"><?=$item['price']?></div>
            </div>
        <?endforeach;?>

    </section>
    <img class="controls-close" src="/img/elements/btn-close.png" alt="icon close">

</article>
<!--END:: copy for main courses section-->

<!--START:: copy for desserts section-->
<article id="desserts-copy" class="col-1 block hide scroll-pane">
    <h2>Desserts</h2>

    <section>
    <?foreach ($menuList['desserts'] as $item) :?>
        <div class="menu-item">
            <div class="menu-dish">
                <div class="menu-dish-name"><?=$item['name']?></div>
                <div class="menu-dish-desc"><?=$item['desc']?></div>
            </div>
            <div class="menu-price"><?=$item['price']?></div>
        </div>
    <?endforeach;?>
    </section>

    <img class="controls-close" src="/img/elements/btn-close.png" alt="icon close">
</article>
<!--END:: copy for desserts section-->

<!--containers for bg images-->
<div id="salads-img" class="salads--img col-1 pointer"><h1>Salads</h1></div>
<div id="main-courses-img" class="main-courses--img col-1 pointer"><h1>Main courses</h1></div>
<div id="desserts-img" class="desserts--img col-1 pointer"><h1>Desserts</h1></div>
