<?php
$eyebrow = get_sub_field('eyebrow');
$title = get_sub_field('title');
$title_font = get_sub_field('title_font') ?: 'Mont';

$product_badge = get_sub_field('product_badge');
$tags = get_sub_field('tags');

$image = get_sub_field('left_image');

$right_content = get_sub_field('right_content');

$cta_text = get_sub_field('cta_text');
$cta_url = get_sub_field('cta_url');

$accent_color = get_sub_field('accent_color') ?: '#4a8fe8';
$accent_light_color = get_sub_field('accent_light_color') ?: '#cfe0f7';
$badge_text_color = get_sub_field('badge_text_color') ?: $accent_color;
$badge_bg_color = get_sub_field('badge_bg_color') ?: $accent_light_color;
$cta_bg_color = get_sub_field('cta_bg_color') ?: $accent_color;
$cta_text_color = get_sub_field('cta_text_color') ?: '#ffffff';
$section_bg_color = get_sub_field('section_bg_color') ?: '#f3f3f3';

$dog_icon_src = 'https://hawkcell.com/wp-content/uploads/2026/04/dog-transparent.png';
$horse_icon_src = 'https://hawkcell.com/wp-content/uploads/2026/04/horse-transparent.png';

$get_tag_icon = static function ($tag_text) use ($dog_icon_src, $horse_icon_src) {
	$tag_text = is_string($tag_text) ? trim(strtolower($tag_text)) : '';

	if (stripos($tag_text, 'small animal') !== false || stripos($tag_text, 'dog') !== false) {
		return '<span class="hc-value-tag-icon hc-value-tag-icon--dog" aria-hidden="true"><img src="' . esc_url($dog_icon_src) . '" alt="" loading="lazy"></span>';
	}

	if (stripos($tag_text, 'equine') !== false || stripos($tag_text, 'horse') !== false) {
		return '<span class="hc-value-tag-icon hc-value-tag-icon--horse" aria-hidden="true"><img src="' . esc_url($horse_icon_src) . '" alt="" loading="lazy"></span>';
	}

	return '';
};

$is_hawkai_block = is_string($product_badge) && strtolower(trim($product_badge)) === 'hawkai';
?>

<style>
	.hc-value-block {
		padding: 128px 80px;
		background: var(--section-bg-color);
		letter-spacing: 0.01em;
	}

	@media (min-width: 992px) {
		#hc-value-block-1 {
			padding-bottom: 60px !important;
		}
	}

	@media (min-width: 992px) {
		#hc-value-block-2 {
			padding-top: 0 !important;
			padding-bottom: 0 !important;
		}
	}

	@media (min-width: 992px) {
		#hc-value-block-3 {
			padding-top: 60px !important;
		}
	}

	.hc-value-container {
		width: 100%;
		max-width: none;
		margin: 0;
		padding: 0;
	}

	.hc-value-header {
		margin-bottom: 22px;
		position: relative;
		left: 0;
		display: flex;
		flex-direction: column;
		gap: 4px;
	}

	.hc-value-block .hc-value-header .hc-value-eyebrow {
		display: block;
		font-size: 14px;
		line-height: 1;
		letter-spacing: 0.16em;
		text-transform: uppercase;
		color: #2b2b2b;
		margin: 0 !important;
		padding: 0 !important;
		font-family: 'Mont', sans-serif !important;
		font-weight: 300 !important;
	}

	.hc-value-block .hc-value-header .hc-value-title {
		margin: 0 !important;
		font-size: 50px;
		line-height: 1.25;
		font-weight: 300;
		color: #242424;
		font-family: 'Mont', sans-serif;
		letter-spacing: -0.02em;
	}

	.hc-value-meta {
		display: flex;
		align-items: center;
		gap: 14px;
		flex-wrap: wrap;
		margin-bottom: 28px;
	}

	.hc-value-badge {
		display: inline-flex;
		align-items: center;
		min-height: 36px;
		padding: 7px 16px;
		border-radius: 7px;
		background: var(--badge-bg-color);
		color: var(--badge-text-color);
		font-size: 15px;
		font-weight: 700;
		line-height: 1;
		letter-spacing: 0.01em;
	}

	.hc-value-tags {
		display: flex;
		align-items: center;
		gap: 18px;
		flex-wrap: wrap;
	}

	.hc-value-tag {
		display: inline-flex;
		align-items: center;
		gap: 10px;
		font-size: 14px;
		font-weight: 700;
		color: #2c2c2c;
		line-height: 1.2;
		letter-spacing: 0.01em;
	}

	.hc-value-tag-icon {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 26px;
		height: 26px;
		flex: 0 0 26px;
		line-height: 0;
	}

	.hc-value-tag-icon img {
		display: block;
		width: 26px;
		height: 26px;
		object-fit: contain;
	}

	.hc-value-tag-icon--dog {
		width: 40px;
		height: 40px;
		flex: 0 0 40px;
	}

	.hc-value-tag-icon--dog img {
		width: 40px;
		height: 40px;
	}

	.hc-value-tag-icon--horse {
		width: 26px;
		height: 26px;
		flex: 0 0 26px;
	}

	.hc-value-tag-icon--horse img {
		width: 26px;
		height: 26px;
	}

	.hc-value-grid {
		display: grid;
		grid-template-columns: minmax(0, 1.08fr) minmax(0, 0.92fr);
		gap: 56px;
		align-items: start;
	}

	.hc-value-left img {
		display: block;
		width: 100%;
		height: auto;
		opacity: 0;
		transform: translate3d(0, 52px, 0) scale(1.025);
		transform-origin: center center;
		will-change: transform, opacity;
		transition: opacity 1.9s ease, transform 2.4s cubic-bezier(0.22, 1, 0.36, 1);
	}

	.hc-value-block.is-visible .hc-value-left img {
		opacity: 1;
		transform: translate3d(0, 0, 0) scale(1);
	}

	.hc-value-right-content {
		display: block;
		color: #262626;
		font-family: 'Mont', sans-serif;
	}

	.hc-value-right-content h1,
	.hc-value-right-content h2,
	.hc-value-right-content h3 {
		margin: 0 0 20px;
		line-height: 1.25 !important;
		font-weight: 300 !important;
		font-family: 'Mont', sans-serif !important;
		letter-spacing: -0.02em !important;
		color: #242424;
		font-style: normal !important;
		text-transform: none !important;
	}

	.hc-value-right-content h1 {
		font-size: 42px;
	}

	.hc-value-right-content h2 {
		font-size: 35px;
	}

	.hc-value-block .hc-value-right .hc-value-right-content h3,
	.hc-value-block .hc-value-right .hc-value-right-content h3 strong,
	.hc-value-block .hc-value-right .hc-value-right-content h3 span,
	.hc-value-block .hc-value-right .hc-value-right-content h3 em,
	.hc-value-block .hc-value-right .hc-value-right-content h3 a {
		font-size: 27px !important;
		line-height: 1.25 !important;
		font-weight: 300 !important;
		font-family: 'Mont', sans-serif !important;
		letter-spacing: -0.02em !important;
		font-style: normal !important;
		text-transform: none !important;
	}

	.hc-value-right-content p {
		margin: 0 0 16px;
		font-size: 22px !important;
		line-height: 1.55;
		color: #262626;
		font-family: 'Mont', sans-serif;
		letter-spacing: -0.02em !important;
	}

	.hc-value-right-content p strong,
	.hc-value-right-content p span,
	.hc-value-right-content p em,
	.hc-value-right-content p a {
		font-size: inherit !important;
		line-height: inherit !important;
		color: inherit !important;
		font-family: inherit !important;
		letter-spacing: inherit !important;
	}

	.hc-value-right-content ul {
		list-style: disc !important;
		list-style-position: outside !important;
		margin: 0 0 16px 24px !important;
		padding-left: 0 !important;
	}

	.hc-value-right-content ol {
		list-style: decimal !important;
		list-style-position: outside !important;
		margin: 0 0 16px 24px !important;
		padding-left: 0 !important;
	}

	.hc-value-right-content li {
		margin: 0 0 8px !important;
		padding-left: 0 !important;
		font-size: 22px !important;
		line-height: 1.55;
		color: #262626;
		font-family: 'Mont', sans-serif;
		letter-spacing: -0.02em !important;
	}

	.hc-value-right-content li strong,
	.hc-value-right-content li span,
	.hc-value-right-content li em,
	.hc-value-right-content li a,
	.hc-value-right-content li b {
		font-size: inherit !important;
		line-height: inherit !important;
		color: inherit !important;
		font-family: inherit !important;
		letter-spacing: inherit !important;
	}

	.hc-value-right-content li p {
		margin: 0 !important;
	}

	.hc-value-right-content li p + p {
		margin-top: 12px !important;
	}

	.hc-value-right-content ul li::marker,
	.hc-value-right-content ol li::marker {
		color: #262626 !important;
	}

	.hc-value-right-content a {
		text-decoration: underline;
		letter-spacing: -0.02em;
		font-family: 'Mont', sans-serif;
	}

	.hc-value-right-content strong {
		font-weight: 700;
	}

	.hc-value-cta {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		margin-top: 20px;
		min-height: 48px;
		padding: 12px 20px;
		border-radius: 8px;
		background: var(--cta-bg-color);
		color: var(--cta-text-color);
		text-decoration: none;
		font-size: 15px;
		font-weight: 700;
		line-height: 1.1;
		letter-spacing: -0.02em;
		font-family: 'Mont', sans-serif;
		transition: transform 0.22s ease, box-shadow 0.22s ease, filter 0.22s ease, opacity 0.22s ease;
	    will-change: transform, box-shadow, filter;
	}

	.hc-value-cta:hover {
		color: var(--cta-text-color);
		opacity: 0.92;
        transform: translateY(-2px);
	    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
	    filter: brightness(1.04);
	}

	.hc-value-note {
		font-family: 'Mont', sans-serif;
		font-size: 12px;
		line-height: 1.4;
		color: #262626;
		margin-top: 20px !important;
	}

	@media (min-width: 992px) {
		.hc-value-block--hawkai .hc-value-note--hawkai {
			display: inline-block;
			transform: translate(var(--hc-note-x, 0px), var(--hc-note-y, 0px));
		}
	}

	@media (max-width: 991px) {
		.hc-value-block--hawkai .hc-value-note--hawkai {
			transform: none;
		}
	}

	@media (prefers-reduced-motion: reduce) {
		.hc-value-left img {
			opacity: 1;
			transform: none;
			transition: none;
		}
	}

	@media (max-width: 991px) {
		.hc-value-block {
			padding: 64px 24px;
		}

		.hc-value-container {
			padding: 0;
		}

		.hc-value-grid {
			grid-template-columns: 1fr;
			gap: 32px;
		}
	}

	@media (max-width: 767px) {
		.hc-value-block {
			padding: 64px 24px;
		}

		.hc-value-container {
			padding: 0;
		}

		.hc-value-header {
			left: 0;
		}

		.hc-value-title {
			font-size: 30px !important;
		}

		.hc-value-right-content h1 {
			font-size: 30px;
		}

		.hc-value-right-content h2 {
			font-size: clamp(22px, 6vw, 34px);
		}

		.hc-value-block .hc-value-right .hc-value-right-content h3,
		.hc-value-block .hc-value-right .hc-value-right-content h3 strong,
		.hc-value-block .hc-value-right .hc-value-right-content h3 span {
			font-size: 22px !important;
			line-height: 1.25 !important;
			font-weight: 500 !important;
			font-family: 'Mont', sans-serif !important;
			letter-spacing: -0.02em !important;
			font-style: normal !important;
			text-transform: none !important;
		}

		.hc-value-block .hc-value-right .hc-value-right-content p,
		.hc-value-block .hc-value-right .hc-value-right-content li,
		.hc-value-block .hc-value-right .hc-value-right-content li span,
		.hc-value-block .hc-value-right .hc-value-right-content li a {
			font-size: 16px !important;
			line-height: 1.25 !important;
			letter-spacing: -0.02em;
		}

		.hc-value-block .hc-value-right .hc-value-right-content li strong,
		.hc-value-block .hc-value-right .hc-value-right-content li b {
			font-size: 16px !important;
			line-height: 1.25 !important;
			letter-spacing: -0.02em;
		}

		.hc-value-right-content ul,
		.hc-value-right-content ol {
			margin: 0 0 16px 22px !important;
		}

		.hc-value-tag-icon {
			width: 24px;
			height: 24px;
			flex: 0 0 24px;
		}

		.hc-value-tag-icon img {
			width: 24px;
			height: 24px;
		}

		.hc-value-tag-icon--dog {
			width: 44px;
			height: 44px;
			flex: 0 0 28px;
		}

		.hc-value-tag-icon--dog img {
			width: 44px;
			height: 44px;
		}

		.hc-value-tag-icon--horse {
			width: 24px;
			height: 24px;
			flex: 0 0 24px;
		}

		.hc-value-tag-icon--horse img {
			width: 24px;
			height: 24px;
		}

		.hc-value-cta {
			width: 100%;
		}

		.hc-value-note {
			font-size: 11px;
			margin-top: 58px !important;
		}
	}

	@media (max-width: 767px) {
		#hc-value-block-2 {
			padding-top: 0 !important;
			padding-bottom: 0 !important;
		}

		#hc-value-block-1 {
			padding-bottom: 30px !important;
		}

		#hc-value-block-3 {
			padding-top: 30px !important;
		}

		.hc-value-block .hc-value-header .hc-value-eyebrow {
			font-size: 12px !important;
		}
	}
</style>

<section
	id="hc-value-block-<?php echo get_row_index(); ?>"
	class="hc-value-block<?php echo $is_hawkai_block ? ' hc-value-block--hawkai' : ''; ?>"
	style="
		--title-font: <?php echo esc_attr($title_font); ?>;
		--accent-color: <?php echo esc_attr($accent_color); ?>;
		--accent-light-color: <?php echo esc_attr($accent_light_color); ?>;
		--badge-text-color: <?php echo esc_attr($badge_text_color); ?>;
		--badge-bg-color: <?php echo esc_attr($badge_bg_color); ?>;
		--cta-bg-color: <?php echo esc_attr($cta_bg_color); ?>;
		--cta-text-color: <?php echo esc_attr($cta_text_color); ?>;
		--section-bg-color: <?php echo esc_attr($section_bg_color); ?>;
		<?php if ($is_hawkai_block) : ?>
			--hc-note-x: 120px;
			--hc-note-y: 210px;
		<?php endif; ?>
	"
>
	<div class="hc-value-container">
		<div class="hc-value-header">
			<?php if ($eyebrow) : ?>
				<div class="hc-value-eyebrow"><?php echo esc_html($eyebrow); ?></div>
			<?php endif; ?>

			<?php if ($title) : ?>
				<h2 class="hc-value-title"><?php echo esc_html($title); ?></h2>
			<?php endif; ?>
		</div>

		<div class="hc-value-meta">
			<?php if ($product_badge) : ?>
				<div class="hc-value-badge"><?php echo esc_html($product_badge); ?></div>
			<?php endif; ?>

			<?php if ($tags) : ?>
				<div class="hc-value-tags">
					<?php foreach ($tags as $tag) : ?>
						<?php if (!empty($tag['tag_text'])) : ?>
							<span class="hc-value-tag">
								<?php echo $get_tag_icon($tag['tag_text']); ?>
								<span class="hc-value-tag-label"><?php echo esc_html($tag['tag_text']); ?></span>
							</span>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="hc-value-grid">
			<div class="hc-value-left">
				<?php if ($image) : ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
				<?php endif; ?>
			</div>

			<div class="hc-value-right">
				<?php if ($right_content) : ?>
					<div class="hc-value-right-content">
						<?php echo wp_kses_post($right_content); ?>
					</div>
				<?php endif; ?>

				<?php if ($cta_text && $cta_url) : ?>
					<a class="hc-value-cta" href="<?php echo esc_url($cta_url); ?>">
						<?php echo esc_html($cta_text); ?>
					</a>
				<?php endif; ?>

				<?php if ($is_hawkai_block) : ?>
					<div class="hc-value-note hc-value-note--hawkai">* These results have been validated by veterinary specialists</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<script>
	(function (script) {
		var block = script.previousElementSibling;
		if (!block || !block.classList.contains('hc-value-block')) return;

		if (!('IntersectionObserver' in window)) {
			block.classList.add('is-visible');
			return;
		}

		if (!window.hcValueBlockImageObserver) {
			window.hcValueBlockImageObserver = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
					} else {
						entry.target.classList.remove('is-visible');
					}
				});
			}, {
				threshold: 0.18,
				rootMargin: '0px 0px -6% 0px'
			});
		}

		window.hcValueBlockImageObserver.observe(block);
	})(document.currentScript);
</script>
