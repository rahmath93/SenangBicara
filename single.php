<?php get_header(); ?>

<main id="content" class="py-10 sm:py-16 bg-white">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
	?>
			<!-- Article Structured Data untuk GEO AI & Google -->
			<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "Article",
				"headline": <?php echo wp_json_encode( get_the_title() ); ?>,
				"datePublished": "<?php echo esc_attr( get_the_date( 'c' ) ); ?>",
				"dateModified": "<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>",
				"author": {
					"@type": "Organization",
					"name": "Senang Bicara"
				},
				"publisher": {
					"@type": "Organization",
					"name": "Senang Bicara",
					"logo": {
						"@type": "ImageObject",
						"url": "https://beta.senangbicara.com/wp-content/uploads/2026/11/1sb.png"
					}
				}
			}
			</script>

			<article <?php post_class( 'max-w-3xl mx-auto px-4 sm:px-6' ); ?>>
				<!-- Breadcrumb -->
				<nav aria-label="Breadcrumb" class="text-xs font-medium text-brand-muted mb-6 flex items-center gap-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-brand-purple">Beranda</a>
					<span>/</span>
					<span class="text-brand-purple font-semibold">Artikel</span>
				</nav>

				<header class="mb-8">
					<div class="flex items-center gap-3 text-xs font-semibold text-brand-red uppercase tracking-wider mb-3">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
							echo '<span>' . esc_html( $categories[0]->name ) . '</span><span>•</span>';
						}
						?>
						<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="text-brand-muted">
							<?php echo esc_html( get_the_date() ); ?>
						</time>
					</div>

					<h1 class="text-2xl sm:text-4xl font-extrabold text-brand-purple leading-tight mb-6">
						<?php the_title(); ?>
					</h1>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="rounded-3xl overflow-hidden border border-zinc-100 shadow-sm aspect-video">
							<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
						</div>
					<?php endif; ?>
				</header>

				<!-- Isi Artikel (Tipografi Nyaman Dibaca di HP) -->
				<div class="space-y-5 text-base sm:text-lg text-zinc-700 leading-relaxed [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:text-brand-purple [&_h2]:pt-4 [&_h3]:text-xl [&_h3]:font-bold [&_h3]:text-brand-purple [&_ul]:list-disc [&_ul]:pl-6 [&_ol]:list-decimal [&_ol]:pl-6 [&_a]:text-brand-red [&_a]:underline">
					<?php the_content(); ?>
				</div>

				<!-- CTA Bawah Artikel -->
				<div class="mt-12 p-7 sm:p-9 rounded-3xl bg-brand-purple text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
					<div>
						<h2 class="text-xl font-bold mb-1">Ingin Melatih Public Speaking Secara Langsung?</h2>
						<p class="text-sm text-white/80">Bergabung bersama komunitas dan program pelatihan SenangBicara.</p>
					</div>
					<a href="https://api.whatsapp.com/send?phone=62816870999&text=Hallo+SenangBicara+saya+ingin+tanya+Kursus+public+speaking" target="_blank" rel="noopener" class="shrink-0 px-6 py-3 rounded-full bg-brand-red hover:bg-brand-redHover text-white text-sm font-semibold transition">
						Konsultasi Gratis
					</a>
				</div>
			</article>
	<?php
		endwhile;
	endif;
	?>
</main>

<?php get_footer(); ?>
