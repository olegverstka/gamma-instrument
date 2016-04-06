<?php get_header(); ?>
				<div class="row">
					<?php get_sidebar(); ?>
					<div class="col-md-8">
						<center>
							<p class="panel panel-default upup">
								Звоните! Мы поможем подобрать именно то, что вам нужно.<br> Консультации БЕСПЛАТНО! до 22-00 <a class="phoneup" href="tel:+79275246021"><i class="fa fa-phone"></i> +7(927)524-6021</a><br />Пишите нам: info@gamma-instrument.ru
							</p>
						</center>
					</div>
					<div class="col-md-8">
						<!--widgets/breadcrumbs not found-->
						<div>
							<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<br style="clear:both;"/>
						</div>

						<center> 
							<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
							<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div>
						</center>
					</div>
				</div>
<?php get_footer(); ?>