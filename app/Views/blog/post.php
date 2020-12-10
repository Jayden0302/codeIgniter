<section>
	<div class="container">
		<article class="blog-post">
			<h1><?= $post['title']?></h1>
			<div class="details">
				Posted: <?= date('d M Y', strtotime($post['create_at']))?> by <a href="">Jai Sing</a>
			</div>
			<?= $post['body']?>
		</article>
	</div>
</section>