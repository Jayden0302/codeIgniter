<section>
	<div class="jumbotron">
		<div class ="container">
			<h1 class="display-4">Jay Blog!</h1>
			<p class="lead">Codeigniter is awesome framework for creating fast web apps</p>
			<hr class="my-4">
			<p>Hey, checkout my first web app build with Codeigniter 4.</p>
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
	</div>
</section>
<section class="blog-section">
	<div class="container">
		<?php if($news):?>
			<?php foreach ($news as $newsItem): ?>
				<h3><?= $newsItem['title']?></h3>
			<?php endforeach; ?>
		<?php else: ?>
			<p class="text-center">
				No posts have been found
			</p>
		<?php endif; ?>

		</div>

	</section>