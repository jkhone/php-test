<?php include("header.php") ?>

<?php 
$post = $posts[$_GET["post_id"]]
?>

<?php if( !empty($post) && in_array( $post, $posts ) ) : ?>

    <div id="main">

        <section id="one">
            <header class="major">
                <h2><?php echo $post["title"] ?></h2>
            </header>
            <p><?php echo $post["content"] ?></p>
        </section>

    </div>

<?php else : ?>

    <div id="main">

        <section id="one">
            <header class="major">
                <h2>No post found</h2>
            </header>
            <p>Sorry, this page has no posts. Try <a href="index.php" > going back </a>to the main page.</p>
        </section>

    </div>

<?php endif ?>

<?php include("footer.php") ?>