<?php foreach( $posts as $id => $post ) : ?>

    <section id="one">
        <header class="major">
            <h2><?php echo $post["title"] ?></h2>
        </header>
        <p><?php echo get_excerpt( $post["content"] ) ?></p>
        <ul class="actions">
            <li><a href="single-post.php?post_id=<?php echo $id ?>" class="button">Learn More</a></li>
        </ul>
    </section>

<?php endforeach ?>