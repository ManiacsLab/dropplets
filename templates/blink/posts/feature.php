<article class="<?php echo($post_status); ?>">
    <div class="row">
        <div class="one-quarter meta">
            <?php if (file_exists($image) ) { ?>
                <div class="thumbnail">
                    <img src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />
                </div>
            <?php } ?>

            <ul>
                <li><a href="<?php echo($post_author['url']); ?>"><?php echo($post_author['name']); ?></a></li>
                <li><?php echo($published_date); ?></li>
                <li><?php foreach($post_categories_links as $key => $post_category_link): ?><a href="<?php echo($post_category_link); ?>"><?php
echo($post_categories[$key]); ?></a>, <?php endforeach; ?></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <?php echo($post_intro); ?>

            <ul class="actions">
                <li><a class="button" href="<?php echo($post_link); ?>">Continue Reading &rarr;</a></li>
            </ul>
        </div>
    </div>
</article>