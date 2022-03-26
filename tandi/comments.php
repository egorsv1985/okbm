

<?php if ( is_user_logged_in() ) { ?>
	<!-- если авторизован и отзывы включены -->
	<?php if( comments_open() ){
				add_filter('comment_form_fields', 'theme_slug_new_comment_fields' );
				if(!function_exists('theme_slug_new_comment_fields')){
				function theme_slug_new_comment_fields( $fields ){
					$new_fields = array(); 
					$new_order = array('comment'); // нужный порядок

					foreach( $new_order as $key ){
					$new_fields[ $key ] = $fields[ $key ];
					unset( $fields[ $key ] );
					}
					if( $fields )
					foreach( $fields as $key => $val ){
						$new_fields[ $key ] = $val;
						}
					return $new_fields;
				}
				}
					
				$args = array(
				'logged_in_as' => '',
				'class_form' => 'form-reviews',
				// изменяем текст кнопки отправки 
				'label_submit'=>'Отправить',
				// удаляем сообщение со списком разрешенных HTML-тегов из-под формы комментирования
				'comment_notes_after' => '',
				'comment_notes_before' => '',
				//текст перед формой комментариев
				'title_reply' => __( '' ),
				//Меняем разметку полей author и email
				'fields' => array (
					'author' => '',
					'email' => ''
					),
				//Меняем разметку поля комментария textarea
				'comment_field' => '<textarea id="comment" name="comment"  data-required maxlength="1000" autocomplete="off" placeholder="Напишите отзыв" data-error="" class="form-reviews__textarea"></textarea>',
				//Меняем разметку кнопки submit
				'submit_field' => '<div class="form-reviews__actions">
					<button class="form-reviews__button button button_s">%1$s %2$s</button></div>'
				);	
				comment_form($args);
			}else{?> 
				<!-- если авторизован и отзывы отключены -->
				Отзывы у этой публикации отключены.
			<?php }?>
	<?php } else { ?>
		Отзывы могут оставлять только зарегистрированные пользователи.
<?php } ?>

<?php if( get_comments_number() ){ ?>
	<ul class="reviews__list">
	<?php        
	wp_list_comments( [
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ul',
		'callback'          => 'tandi_comment',
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => '',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => '140',
		'reverse_top_level' => null,
		'reverse_children'  => true,
		'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
		'short_ping'        => false,    // С версии 3.6,
		'echo'              => true,     // true или false
		'login_text'        => 'Отзывы могут оставлять только зарегистрированные пользователи',
	] ); 
	?>
</ul>

      <!-- // навигация по комментариям
         previous_comments_link( '&larr; Предыдущие комментарии' );
         next_comments_link( 'Следующие комментарии &rarr;' ); -->

   <?php }else{?> 
      У специалиста пока нет отзывов.
   <?php }?> 















<!-- 
<li class="reviews__item item-reviews">
<div class="item-reviews__body">
									<div class="item-reviews__image-ibg">
										<picture><source srcset="img/user.webp" type="image/webp"><img src="img/user.jpg" alt="User"></picture>
									</div>
									<div class="item-reviews__header">
										<span>Евгений</span>
										<time>21.01.2022 16:11</time>
									</div>
									<div class="item-reviews__content">
										<p class="item-reviews__text">
										</p>
										<div class="item-reviews__rating rating-reviews">
											<div class="rating-reviews__line">
												<div class="rating-reviews__tilte">Сервис:</div>
												<div class="rating-reviews__rating">
													<img src="img/rating.svg" alt="rating">
												</div>
											</div>
											<div class="rating-reviews__line">
												<div class="rating-reviews__tilte">Экспертность:</div>
												<div class="rating-reviews__rating">
													<img src="img/rating.svg" alt="rating">
												</div>
											</div>
											<div class="rating-reviews__line">
												<div class="rating-reviews__tilte">Сервис:</div>
												<div class="rating-reviews__rating">
													<img src="img/rating.svg" alt="rating">
												</div>
											</div>
										</div>
									</div>
								</div>
							</li> -->