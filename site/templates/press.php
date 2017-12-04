<?php snippet('header') ?>

<main class="press">
	<div class="container">
		<form class="form form--search">
			<h1 class="heading press-heading"><?php echo $page->title()->upper(); ?></h1>
			<input type="text" class="form-control article-search" id="q" name="q" placeholder="Search for an article" value="<?php echo esc($q); ?>">
		</form>
		<div class="press-content">
			<div class="row">
				<?php
				$posts = !isset($q) || $q == '' ? $page->children() : $posts;
				if (!empty($posts->data)) {
					foreach ($posts as $post) {
						$tweet = 'text=' . $post->title() . '&url=' . $post->url() . '&hashtags=' . $post->tags() . '&via=LifeSciencePhil';
				?>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<a class="press-post" style="background-image: url('<?php echo $post->photo()->toFile()->url(); ?>');" href="<?php echo $post->url(); ?>"></a>
						<div class="press-post-holder">
							<h2 class="heading press-post-heading"><?php echo $post->title()->upper(); ?></h2>
							<div class="press-post-description"><?php echo $post->description(); ?></div>
							<div class="press-share">
								<a class="press-share-link fb-share" href="<?php echo $post->url(); ?>"><i class="share-icon share-icon--facebook"></i></a>
								<a class="press-share-link" href="https://twitter.com/intent/tweet?<?php echo $tweet; ?>"  target="_blank"><i class="share-icon share-icon--twitter"></i></a>
								<a class="press-share-link" href="mailto:?Subject=<?php echo $post->title(); ?>&body=<?php echo $post->url(); ?>"><i class="share-icon share-icon--email"></i></a>
							</div>
						</div>
					</div>
				<?php
					}
				} else {
				?>
				<div class="col-xs-12 col-sm-12 col-md-12">No post found.</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>