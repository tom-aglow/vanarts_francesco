
<!--START:: copy for salads section-->
<article id="salads-copy" class="salads--copy col-1 block">
    <h2>Salads</h2>

    <?foreach ($menuList['salads'] as $item) :?>
        <div class="menu-item">
            <div class="menu-dish">
                <div class="menu-dish-name"><?=$item['name']?></div>
                <div class="menu-dish-desc"><?=$item['desc']?></div>
            </div>
            <div class="menu-price"><?=$item['price']?></div>
        </div>
    <?endforeach;?>
</article>
<!--END:: copy for salads section-->

<!--START:: copy for main courses section-->
<article id="main-courses-copy">
    <div class="col-1 block">
        <h2>Main courses</h2>

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

        <h3 class="menu-item__offset">Meat</h3>

        <div class="menu-item">
            <div class="menu-dish">
                <div class="menu-dish-name"><?=$menuList['meat'][0]['name']?></div>
                <div class="menu-dish-desc"><?=$menuList['meat'][0]['desc']?></div>
            </div>
            <div class="menu-price"><?=$menuList['meat'][0]['price']?></div>
        </div>
    </div>

    <div class="col-1 block">
        <?for ($i = 1; $i < count($menuList['meat']); $i++) :?>
            <div class="menu-item">
                <div class="menu-dish">
                    <div class="menu-dish-name"><?=$menuList['meat'][$i]['name']?></div>
                    <div class="menu-dish-desc"><?=$menuList['meat'][$i]['desc']?></div>
                </div>
                <div class="menu-price"><?=$menuList['meat'][$i]['price']?></div>
            </div>
        <?endfor;?>

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
    </div>

</article>
<!--END:: copy for main courses section-->

<!--START:: copy for desserts section-->
<article id="desserts-copy" class="desserts--copy col-1 block">
    <h2>Desserts</h2>

    <?foreach ($menuList['desserts'] as $item) :?>
        <div class="menu-item">
            <div class="menu-dish">
                <div class="menu-dish-name"><?=$item['name']?></div>
                <div class="menu-dish-desc"><?=$item['desc']?></div>
            </div>
            <div class="menu-price"><?=$item['price']?></div>
        </div>
    <?endforeach;?>
</article>
<!--END:: copy for desserts section-->


<!--containers for bg images-->
<div id="salads-img" class="salads--img col-1"><h1>Salads</h1></div>
<div id="main-courses-img" class="main-courses--img col-1"><h1>Main courses</h1></div>
<div id="desserts-img" class="desserts--img col-1"><h1>Desserts</h1></div>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="../js/menu.js"></script>