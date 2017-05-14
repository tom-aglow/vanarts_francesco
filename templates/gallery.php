<div class="img-container">
    <?foreach ($galleryList as $item) :?>
        <img class="gallery-img" src="img/gallery/<?=$item['name']?>" alt="<?=$item['alt']?>">
    <?endforeach;?>
</div>


<img class="controls-arrow-left" src="../img/elements/btn-arrow-left.png" alt="icon arrow left">
<img class="controls-arrow-right" src="../img/elements/btn-arrow-left.png" alt="icon arrow right">


<!--my script-->
<script src="../js/gallery.js"></script>