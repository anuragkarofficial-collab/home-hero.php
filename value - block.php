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
?>

<style>
  .hc-value-block {
    padding: 80px 0;
    background: var(--section-bg-color);
  }

  .hc-value-container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 40px;
  }

  .hc-value-header {
    margin-bottom: 28px;
  }

  .hc-value-eyebrow {
    font-size: 14px;
    line-height: 1.1;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: #2b2b2b;
    margin-bottom: 8px;
  }

  .hc-value-title {
    margin: 0;
    font-size: clamp(38px, 4vw, 62px);
    line-height: 0.98;
    font-weight: 800;
    color: #242424;
    font-family: var(--title-font), sans-serif;
  }

  .hc-value-meta {
    display: flex;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
    margin-bottom: 34px;
  }

  .hc-value-badge {
    display: inline-flex;
    align-items: center;
    min-height: 42px;
    padding: 8px 18px;
    border-radius: 12px;
    background: var(--badge-bg-color);
    color: var(--badge-text-color);
    font-size: 18px;
    font-weight: 700;
    line-height: 1;
  }

  .hc-value-tags {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-wrap: wrap;
  }

  .hc-value-tag {
    font-size: 15px;
    font-weight: 700;
    color: #2c2c2c;
    line-height: 1.2;
  }

  .hc-value-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.08fr) minmax(0, 0.92fr);
    gap: 70px;
    align-items: start;
  }

  .hc-value-left img {
    display: block;
    width: 100%;
    height: auto;
  }

  .hc-value-right-content {
    display: block;
    color: #262626;
  }

  .hc-value-right-content h1,
  .hc-value-right-content h2,
  .hc-value-right-content h3 {
    margin: 0 0 24px;
    line-height: 1.02;
    font-weight: 800;
    font-family: 'Mont', sans-serif;
  }

  .hc-value-right-content h1 {
    font-size: clamp(36px, 3.2vw, 58px);
  }

  .hc-value-right-content h2 {
    font-size: clamp(32px, 3vw, 54px);
  }

  .hc-value-right-content h3 {
    font-size: clamp(24px, 2.2vw, 34px);
  }

  .hc-value-right-content p {
    margin: 0 0 18px;
    font-size: 18px;
    line-height: 1.55;
    color: #262626;
    font-family: 'Rubik', sans-serif;
  }

  .hc-value-right-content ul,
  .hc-value-right-content ol {
    margin: 0 0 18px 22px;
    padding: 0;
  }

  .hc-value-right-content li {
    margin: 0 0 10px;
    font-size: 18px;
    line-height: 1.55;
    color: #262626;
  }

  .hc-value-right-content a {
    text-decoration: underline;
  }

  .hc-value-right-content strong {
    font-weight: 700;
  }

  .hc-value-cta {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px;
    min-height: 56px;
    padding: 14px 22px;
    border-radius: 8px;
    background: var(--cta-bg-color);
    color: var(--cta-text-color);
    text-decoration: none;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.1;
  }

  .hc-value-cta:hover {
    color: var(--cta-text-color);
    opacity: 0.92;
  }

  @media (max-width: 991px) {
    .hc-value-block {
      padding: 60px 0;
    }

    .hc-value-container {
      padding: 0 24px;
    }

    .hc-value-grid {
      grid-template-columns: 1fr;
      gap: 36px;
    }
  }

  @media (max-width: 767px) {
    .hc-value-container {
      padding: 0 18px;
    }

    .hc-value-title {
      font-size: 42px;
    }

    .hc-value-right-content h1 {
      font-size: 38px;
    }

    .hc-value-right-content h2 {
      font-size: 34px;
    }

    .hc-value-right-content h3 {
      font-size: 26px;
    }

    .hc-value-right-content p,
    .hc-value-right-content li {
      font-size: 17px;
    }

    .hc-value-cta {
      width: 100%;
    }
  }
</style>

<section class="hc-value-block" style="
  --title-font: <?php echo esc_attr($title_font); ?>;
  --accent-color: <?php echo esc_attr($accent_color); ?>;
  --accent-light-color: <?php echo esc_attr($accent_light_color); ?>;
  --badge-text-color: <?php echo esc_attr($badge_text_color); ?>;
  --badge-bg-color: <?php echo esc_attr($badge_bg_color); ?>;
  --cta-bg-color: <?php echo esc_attr($cta_bg_color); ?>;
  --cta-text-color: <?php echo esc_attr($cta_text_color); ?>;
  --section-bg-color: <?php echo esc_attr($section_bg_color); ?>;
">
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
              <span class="hc-value-tag"><?php echo esc_html($tag['tag_text']); ?></span>
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
      </div>
    </div>

  </div>
</section>
