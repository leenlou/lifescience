<?php snippet('header') ?>

<main class="digest">
	<div class="container">
		<form class="form form--search">
			<h1 class="heading digest-heading"><?php echo $page->title()->upper(); ?></h1>
			<input type="text" class="form-control article-search" id="q" name="q" placeholder="Search for an article" value="<?php echo esc($q); ?>">
		</form>
		<div class="digest-content">
			<div class="row">
				<?php
				if (!isset($q) || $q == '') {
					$first = $page->children()->visible()->sortBy('date', 'desc')->first();
					$posts = $page->children()->visible()->not($first->slug());
				?>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="digest-latest" style="background-image: url('<?php echo $first->photo()->toFile()->url(); ?>');">
						<div class="digest-latest-holder">
							<h2 class="heading"><?php echo $first->title(); ?></h2>
							<div class="digest-latest-description"><?php echo $first->description(); ?></div>
							<a class="btn" href="<?php echo $first->url(); ?>">READ MORE</a>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				<?php
				if (!empty($posts->data)) {
					foreach ($posts as $post) { ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a class="digest-post <?php echo isset($q) ? 'digest-post--search' : ''; ?>" style="background-image: url('<?php echo $post->photo()->toFile()->url(); ?>');" href="<?php echo $post->url(); ?>"></a>
						<div class="digest-post-holder">
							<h2 class="heading digest-post-heading"><?php echo $post->title(); ?></h2>
							<div class="digest-post-description"><?php echo $post->description(); ?></div>
						</div>
					</div>
				<?php
					}
				} else {
					if (empty($first)) {
				?>
				<div class="col-xs-12 col-sm-12 col-md-12">No post found.</div>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>