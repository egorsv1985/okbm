<?php get_header(); ?>
<main class="page-product">
			<section class="page-product__card card">
				<div class="card__container">
					<h1 class="card__title title"><?php the_field( 'position' ); ?> <?php the_title() ?> <?php the_field( 'card_middle-name' ); ?></h1>
					<div class="page-product-container">
						<div class="card__body body-card">
							<div class="body-card__body">
								<div class="body-card__image-wrapper">
									<div class="body-card__image-ibg">
										<img src="<?php the_field( 'avatar' ); ?>" alt="<?php the_title() ?>">
									</div>
								</div>
								<div class="body-card__content">
									<div class="body-card__header">
										<div class="body-card__info">
											<div class="body-card__info-item"><span>Возраст:</span><?php the_field( 'age' ); ?></div>
											<div class="body-card__info-item"><span>Стаж:</span><?php the_field( 'experience' ); ?></div>
											<div class="body-card__info-item"><span>Помог:</span><?php the_field( 'number' ); ?></div>
										</div>
										<div data-da=".body-card,720,last" class="body-card__location">
											<div class="_icon-location"><?php the_field( 'city' ); ?> <?php the_field( 'address' ); ?>
											</div>
										</div>

									</div>
									<div data-da=".body-card,479.98,first" class="body-card__rating">
										<img src="<?php echo IMG_DIR; ?>rating.svg" alt="Rating">
										
									</div>
									<div class="body-card__actions">
										<div data-da=".body-card,720,last" class="body-card__dates">
											<p><?php the_field( 'admission-date' ); ?></p>
											<p><?php the_field( 'verification-date' ); ?></p>
											<p><?php the_field( 'exam-date' ); ?></p>
										</div>
										<div class="body-card__buttons">
											<a href="tel:<?php the_field( 'phone' ); ?>" class="body-card__button button button_s">Позвонить</a>
											<a href="https://wa.me/<?php the_field( 'whatsapp' ); ?>" class="body-card__button button button_s button_no-bg">Написать</a>
										</div>
									</div>
									<div data-da=".body-card,720,last" class="body-card__footer">
										<p><?php the_field( 'format-work' ); ?></p>
										<p><?php the_field( 'confirmation' ); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page-product__courses courses">
				<div class="courses__container">
					<h2 class="courses__title prod-title">Прошел курсы:</h2>

                    <?php
                        $courses = get_field('courses');
                        if( $courses ): ?>
                        <ul class="courses__list">
                            <?php foreach( $courses as $course ): ?>
                                <li class="courses__item"><?php echo $course; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

				</div>
			</section>
			<section class="page-product__about about">
				<div class="about__container">
					<div class="page-product-container">
						<div class="about__body">
							<div class="about__content content-about">
								<div class="content-about__item">
									<h2 class="content-about__title prod-title">О себе</h2>
									<p class="content-about__text">
                                        <?php the_field( 'about' ); ?>
									</p>
								</div>
								<div class="content-about__item">
									<h2 class="content-about__title prod-title">Характеристика психосомата от главного куратора Академии:</h2>
									<p class="content-about__text">
                                        <?php the_field( 'characteristics' ); ?>
									</p>
								</div>
							</div>
							<div class="about__image-wrapper">
								<div class="about__image-ibg">
									<img src="<?php the_field( 'image' ); ?>" alt="Диплом">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="page-product__working working">
				<div class="working__container">
					<div class="page-product-container">
						<div class="working__mode mode-working">
                            <?php
                                $scheduleDays = get_field('schedule-days');
                                if( $scheduleDays ): ?>
                                <div class="mode-working__days">
                                    <?php foreach( $scheduleDays as $scheduleDay ): ?>
                                        <div class="mode-working__item">
                                            <?php echo $scheduleDay; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

							<div class="mode-working__time"><?php the_field( 'schedule-time' ); ?></div>
						</div>
                        
                        <?php if( get_field("schedule-days_2") ): ?>

                                    <div class="working__mode mode-working">
                                    <?php
                                        $scheduleDays2 = get_field('schedule-days_2');
                                        if( $scheduleDays2 ): ?>
                                        <div class="mode-working__days">
                                            <?php foreach( $scheduleDays2 as $scheduleDay2 ): ?>
                                                <div class="mode-working__item">
                                                    <?php echo $scheduleDay2; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                            
							<div class="mode-working__time"><?php the_field( 'schedule-time_2' ); ?></div>
						</div>
                        <?php endif; ?>

                        <!-- <div class="working__mode mode-working">
                            <?php
                                $scheduleDays2 = get_field('schedule-days_2');
                                if( $scheduleDays2 ): ?>
                                <div class="mode-working__days">
                                    <?php foreach( $scheduleDays2 as $scheduleDay2 ): ?>
                                        <div class="mode-working__item">
                                            <?php echo $scheduleDay2; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
							<div class="mode-working__time"><?php the_field( 'schedule-time_2' ); ?></div>
						</div> -->


						<div class="working__price price-working">
							<div class="price-working__item">
								<div class="price-working__header">
									<div class="price-working__icon">
										<picture><source srcset="<?php echo IMG_DIR; ?>icons/car.webp" type="image/webp"><img src="<?php echo IMG_DIR; ?>/icons/car.png" alt="Выезд"></picture>
									</div>
									<span>Выезд</span>
								</div>
								<div class="price-working__value"><?php the_field( 'departure-cost' ); ?></div>
							</div>
							<div class="price-working__item">
								<div class="price-working__header">
									<div class="price-working__icon">
										<picture><source srcset="<?php echo IMG_DIR; ?>icons/home.webp" type="image/webp"><img src="<?php echo IMG_DIR; ?>icons/home.png" alt="У себя"></picture>
									</div>
									<span>У себя</span>
								</div>
								<div class="price-working__value"><?php the_field( 'home-cost' ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="page-product__reviews reviews">
				<div class="reviews__container">
					<div class="page-product-container">
						<h2 class="reviews__title prod-title">Отзывы</h2>
                        <?php comments_template(); ?>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>