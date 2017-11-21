<nav class="wt-breadcrumbs" aria-label="breadcrumb" role="navigation">
	<ol class="breadcrumb">
		<?php foreach ($links as $url => $label): ?>
			<?php if (is_int($url)): ?>
				<li class="breadcrumb-item active">
					<?= $label ?>
				</li>
			<?php else: ?>
				<li class="breadcrumb-item">
					<a href="<?= e($url) ?>">
						<?= $label ?>
					</a>
				</li>
			<?php endif ?>
		<?php endforeach ?>
	</ol>
</nav>
