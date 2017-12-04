<?php snippet('header') ?>

<main class="article">
    <div class="banner" style="background-image: url('<?php echo $page->photo()->toFile()->url(); ?>')"></div>
    <div class="container">
    	<h1 class="heading article-heading"><?php echo $page->title()->upper(); ?></h1>
        <?php
        $author = $page->author();
        if ($author != '') {
        ?>
        <div class="article-published">
            <div class="article-author">
                <b>By:</b>
                <?php echo $author; ?>
            </div>
            <?php echo $page->date(); ?>
        </div>
        <?php } ?>
        <?php
        $tags = $page->tags()->split();
        if (!empty($tags)) {
        ?>
        <div class="article-tags-container">
                <b>Tags:</b>
                <ul class="article-tags">
                <?php foreach ($tags as $tag) { ?>
                    <li class="article-tags_item">
                    	<a class="article-tags_link" href="<?php echo $page->parent()->url() . '/tag:' . urlencode($tag); ?>"><?php echo $tag; ?></a>
                    </li>
                <?php } ?>
                </ul>
        </div>
        <?php
        }
        ?>
    	<div class="article-description">
    		<?php echo $page->text()->kirbytext(); ?>
    	</div>
        <?php if ($related_articles = $page->related()->yaml()) { ?>
        <div class="article-related-pages">
            <h1 class="heading article-heading">RELATED ARTICLES</h1>
            <div class="row">
            <?php
            foreach ($related_articles as $related_article) {
                $article = $pages->find($page->parent()->slug() . '/' . $related_article['slug']);
            ?>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <a class="digest-post digest-post--related" style="background-image: url('<?php echo $article->photo()->toFile()->url(); ?>');" href="<?php echo $article->url(); ?>"></a>
                    <div class="digest-post-holder">
                        <h2 class="heading digest-post-heading"><?php echo $article->title(); ?></h2>
                        <div class="digest-post-description"><?php echo $article->description(); ?></div>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
        <?php } ?>
    </div>
</main>

<?php snippet('footer') ?>