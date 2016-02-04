<?php if(count($gallery_meta) == 1): ?>
    DO SINGLE IMG STUFF
<?php else : ?>

    <div class="sync-carousel--head__wrapper">
        <ul id="sync-carousel--head" class="owl-carousel sync-carousel sync-carousel--head">
            <?php foreach($gallery_meta as $img_id => $url): ?>
                <?php $gallery_interchange_string = grid_interchange_string($img_id); ?>
                <li class="item">
                    <img data-interchange="<?php echo $gallery_interchange_string; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="sync-carousel--nav__wrapper">
        <ul id="sync-carousel--nav" class="owl-carousel sync-carousel sync-carousel--nav">
            <?php foreach($gallery_meta as $img_id => $url): ?>
                <?php $gallery_interchange_string = grid_interchange_string($img_id); ?>
                <li class="item">
                    <img data-interchange="<?php echo $gallery_interchange_string; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
