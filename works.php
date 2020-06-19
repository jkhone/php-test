<?php foreach( $works as $id => $work ) : ?>

    <article class="col-6 col-12-xsmall work-item">
        <a href="<?php echo $work["full"] ?>" class="image fit thumb"><img src="<?php echo $work["thumb"] ?>" alt="" /></a>
        <h3><?php echo $work["name"] ?></h3>
        <p><?php echo $work["description"] ?></p>
    </article>

<?php endforeach ?>