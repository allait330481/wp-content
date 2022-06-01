<?php get_header(); ?>

	<main>

		<?php if(have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'dough' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

        <?php endif; ?>

	</main>

<?php get_footer(); ?>
