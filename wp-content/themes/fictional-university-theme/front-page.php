<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
         style="background-image: url(<?php echo get_theme_file_uri( '/images/library-hero.jpg' ); ?>);"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re
            interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
			
			<?php
				$today          = date( 'Ymd' );
				$homepageEvents = new WP_Query( array(
					'posts_per_page' => - 1,
					'post_type'      => 'event',
					'meta_key'       => 'event_date',
					'orderby'        => 'meta_value',
					'order'          => 'ASC',
					'meta_query'     => array(
						array(
							'key'     => 'event_date',
							'compare' => '>=', // greater or equal
							'value'   => $today,
							'type'    => 'numeric'
						)
					)
				) );
				if ( $homepageEvents->have_posts() ):
					while ( $homepageEvents->have_posts() ):
						$homepageEvents->the_post(); ?>
                        <!--the content-->
                        <div class="event-summary">
                            <a class="event-summary__date t-center" href="#">
                                <span class="event-summary__month">
                                    <?php
	                                    $releaseEvent = get_field( "event_date" );
	
	                                    $eventDate = new DateTime( $releaseEvent );
	                                    echo $eventDate->format( 'M' );
	                                    //the_field( 'event_date' );
                                    ?>
                                </span>
                                <span class="event-summary__day">
                                    <?php
	                                    echo $eventDate->format( 'd' );
                                    ?>
                                    
                                </span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                                    <br> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                                </p>
                            </div>
                        </div>
					
					<?php endwhile; else:endif; ?>
			
			<?php
				/*echo '<pre>';
				var_dump($homepageEvents);
				echo '</pre>';*/
			?>
            <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link( 'event' ) ?>"
                                             class="btn btn--blue">View All Events</a></p>
            <br>


            <!--            <div class="event-summary">-->
            <!--                <a class="event-summary__date t-center" href="#">-->
            <!--                    <span class="event-summary__month">Apr</span>-->
            <!--                    <span class="event-summary__day">02</span>-->
            <!--                </a>-->
            <!--                <div class="event-summary__content">-->
            <!--                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>-->
            <!--                    <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#"-->
            <!--                                                                                                           class="nu gray">Learn-->
            <!--                            more</a></p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--            <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>-->

        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
			<?php
				// задаем нужные нам критерии выборки данных из БД
				$args = array(
					'posts_per_page' => 2,
					'category_name'  => 'uncategorized'
				);
				
				$homepagePosts = new WP_Query( $args );
				
				// Цикл
				if ( $homepagePosts->have_posts() ) {
					while ( $homepagePosts->have_posts() ) {
						$homepagePosts->the_post(); ?>
                        <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center"
                               href="<?php the_permalink(); ?>">
                                <span class="event-summary__month"><?php the_time( 'M' ); ?></span>
                                <span class="event-summary__day"><?php the_time( 'd' ); ?></span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a
                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p><?php echo wp_trim_words( get_the_content(), 18 ); ?> <a
                                            href="<?php the_permalink(); ?>" class="nu gray">Read
                                        more</a></p>
                            </div>
                        </div>
					<?php }
				} else {
					// Постов не найдено
				}
				// Возвращаем оригинальные данные поста. Сбрасываем $post.
				wp_reset_postdata();
			
			
			?>


            <p class="t-center no-margin"><a href="<?php echo site_url( '/blog' ); ?>" class="btn btn--yellow">View All
                    Blog Posts</a></p>
        </div>
    </div>
</div>

<div class="hero-slider">
    <div class="hero-slider__slide"
         style="background-image:  url(<?php echo get_theme_file_uri( '/images/bus.jpg' ); ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide"
         style="background-image: url(<?php echo get_theme_file_uri( '/images/apples.jpg' ); ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide"
         style="background-image:url(<?php echo get_theme_file_uri( '/images/bread.jpg' ); ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
</div>

<?php ;
	get_footer(); ?>
