<?php
/**
 * sitelead dashboard
 *
 * @package KeepingItReal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( get_field('show_page_header')) {
		// don't show title - already shown above

	} else { ?>
	<header class="entry-header">

		<h1 class="toolkit-title">School Site Lead Toolkit</h1>

	</header><!-- .entry-header -->

	<? } ?>

	<div class="entry-content">

		<div class="row">
			<div class="start-panel col-md-8 col-lg-8 clearfix">
				<a class="toolkit-button start-button" href="/sitelead-toolkit/000-pre-implementation/"><img class="swing animated" src="<?php echo get_stylesheet_directory_uri(); ?>/images/dash-button.png" alt="Get Started" /></a>
				<span class="start-text">Begin on <br>Pre-Implementation Step #1</span>
			</div>

			<div class="button-box col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top:30px;">
				<a type="button" target="blank" class="btn btn-lg blue-button" aria-label="Access Curriculum Logs (ETR)" href="http://psweb.etr.org/redwood/index.cfm?id=d08RpsVP">
					<span class="glyphicon glyphicon-list" aria-hidden="true"></span> Access Curriculum Logs (ETR)
				</a>
				<p style="font-size:12px;"><strong>Note:</strong> You must complete your Toolkit Profile in order for your ETR classroom to be created. Your Curriculum Logs Username and Password will appear in your profile once your ETR classroom is ready.</p>
			</div>


		</div> <!-- /row -->

		<div class="row">

			<div class="toolkit-panel col-md-6 col-lg-6 clearfix">

				<ul class="nav nav-tabs dash-tabs">

				      <li><a data-toggle="tab" href="#implementation">Implementation</a></li>
				      <li class="active"><a data-toggle="tab" href="#preimplementation">Pre-Implementation</a></li>
				  </ul>
				  <div class="tab-content">
				      <div id="implementation" class="tab-pane panel">

				          <?php
				          $args = array(
				            'post_type'=>'sitelead_toolkit',
				            'exclude_tree' => 176,
				            'title_li'=> __('<h3>Implementation</h3>')
				          );
				          wp_list_pages( $args );
				          ?>

				      </div>
				      <div id="preimplementation" class="tab-pane active panel">

				      <?php
				      $args = array(
				        'post_type'=>'sitelead_toolkit',
				        'exclude_tree' => 178,
				        'title_li'=> __('<h3>Pre-Implementation</h3>')
				      );
				      wp_list_pages( $args );
				      ?>

				      </div>
				  </div><!-- /tab-content -->

				<div class="observation-lesson sitelead col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Request an Observation Lesson</h3>

					<?php $sitelead_user = wp_get_current_user();

						$user_ID = get_current_user_id();
						$obs7th = $sitelead_user->observation_lesson_number_7;
						$obs8th = $sitelead_user->observation_lesson_number_8;
						?>

					<?php if ($obs7th != '') { ?>
					<p><strong>Your 7th grade observation lesson number is: <span class="blue-text" style="font-size:24px;padding-left:10px;"><?php echo $obs7th; ?></span></strong></p>
					<?php } ?>

					<?php if ($obs8th != '') { ?>
					<p><strong>Your 8th grade observation lesson number is: <span class="blue-text" style="font-size:24px;padding-left:10px;"><?php echo $obs8th; ?></span></strong></p>
					<?php } ?>

					<hr>

					<?php if (!empty($obs7th) || !empty($obs8th)) { ?>
						<a class="observation-button btn btn-default btn-lg toolkit-button">Request Observation Date</a>
						<a class="missed-button btn btn-default btn-lg toolkit-button">Missed Observation Lesson</a>

						<p class="request-msg">Please submit your request 2-3 business days prior to your requested observation date.</p>


					<?php } else { ?>
						<p>Please check back here prior to your start date to see your assigned observation lesson(s). Once they are assigned you will be able to request your observation.</p>
					<?php } ?>

					<div id="observation-form" class="panel">
						<span class="close">x</span>
						<h4>Request an Observation Date</h4>
						<?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]') ?>
					</div>

					<div id="missed-form" class="panel">
						<span class="close">x</span>
						<h4>Missed Observation Lesson</h4>
						<?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]') ?>
					</div>

					<div class="form-submissions">
						<h4>Your Requested Dates and Times</h4>
						<?php echo do_shortcode( "[stickylist id='6' user='" . $user_ID . "']"); ?>
					<?php
						$reschedule_lesson = $sitelead_user->request_reschedule;
						if (!empty($reschedule_lesson)): ?>
							<h4>Your Requested Rescheduled Dates and Times</h4>
							<?php echo do_shortcode( "[stickylist id='8' user='" . $user_ID . "']"); ?>
						<?php endif; ?>
					</div>



				</div><!-- /observation-lesson -->

			</div><!-- /toolkit-panel -->

			<div id="profile-panel" class="profile-panel col-md-6 col-lg-6 clearfix">
				<h2 class="hello-text">HELLO</h2>
				<h4 class="hello-text">my name is</h4>

				<?php echo do_shortcode('[wp-members page=user-profile]'); ?>
				<?php echo do_shortcode('[avatar_upload]'); ?>

			</div><!-- /profile-panel -->


		</div> <!-- /row -->

		<div class="row">
			<div class="panel curriculum-panel clearfix">
				<div class="col-left col-xs-6 col-sm-6 col-md-8 col-lg-8">
					<h3>Access Curriculum</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/iyg-logo-dash.png" alt="It's Your Game Logo" />
				</div>
				<div class="col-right col-xs-6 col-sm-6 col-md-4 col-lg-4 clearfix">
					<a class="toolkit-button curriculum-button" href="/curriculum/level-1/lesson-1-its-your-gamepre-game-show/">Level 1 <small>(7th Grade)</small></a>
					<a class="toolkit-button curriculum-button" href="/curriculum/level-2/lesson-1-its-your-game-pre-game-show-level-2/">Level 2 <small>(8th Grade)</small></a>
				</div>
			</div> <!-- /curriculum-panel -->
		</div><!-- /row -->

		<div class="row">
			<div class="sitelead-panel col-md-6 col-lg-6">
				<div class="inner-panel clearfix">
				<?php

				$schoolVal = $sitelead_user->school_name;

				?>
				<?php echo '<h3>'.$schoolVal.' Teachers:</h3>'; ?>

					<div class="panel-group teacher-list" id="accordion" role="tablist" aria-multiselectable="true">

					<?php

						if ($schoolVal) {

							$args = array(
									 'role' => 'teacher',
									 'meta_key'    => 'school_name',
									 'meta_value'  => $schoolVal
								);

							// The Query
							$user_query = new WP_User_Query($args);
							$teachers = $user_query->get_results();
							// User Loop
							if ( ! empty( $teachers ) ) {
								$count = 0;
								foreach ( $teachers as $teacher ) {


									$count++;
									echo '<div class="panel panel-default">';
									echo '<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count.'" aria-expanded="true" aria-controls="collapse'.$count.'"><div class="panel-heading" role="tab" id="heading-'.$count.'"><h4 class="panel-title">' . $teacher->display_name . '</h4></div></a>';
									echo '<div id="collapse'.$count.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$count.'">';
									echo '<div class="panel-body">';
									echo '<li class="memberavatar">'. get_wp_user_avatar( $teacher->ID, 'thumbnail') . '</li>';
									echo '<li><span>Email:</span> <a href="mailto:'. $teacher->user_email .'" target="blank">'. $teacher->user_email .'</a></li>';
									echo '<li><span>Room:</span> ' . $teacher->room_number . '</li>';

									echo '<li><span>Free Period:</span> ' . $teacher->free_period . '</li>';

									echo '<li><span>Semester of Implementation (7th):</span> ' . $teacher->semester_kir_7 . '</li>';
									echo '<li><span>Projected Start Date (7th):</span> ' . $teacher->startdate_kir_7 . '</li>';
									echo '<li><span>Observation Lesson Number (7th):</span> ' . $teacher->observation_lesson_number_7 . '</li>';

									echo '<li><span>Semester of Implementation (8th):</span> ' . $teacher->semester_kir_8 . '</li>';
									echo '<li><span>Projected Start Date (8th):</span> ' . $teacher->startdate_kir_8 . '</li>';
									echo '<li><span>Observation Lesson Number (8th):</span> ' . $teacher->observation_lesson_number_8 . '</li>';

									echo '</div></div></div>';
								}
							} else {
								echo '<p>No teachers found.</p>';
							}

						}	else {
							echo '<p class="dash-error">Sorry, you aren\'t associated with a current school. Please contact the KIR support staff. </p>';
						}
						?>
					</div><!-- /panel-group -->
				</div> <!-- /inner-panel -->
			</div>	<!-- /sitelead-panel-->

			<div class="updates-panel col-md-6 col-lg-6">
				<div class="inner-panel">
				<?php $query = New WP_Query('cat=4 & posts_per_page=1');

					if ( $query->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

								<?php if ( 'post' == get_post_type() ) : ?>
								<div class="entry-meta">
									<?php keepingitreal_posted_on(); ?>
								</div><!-- .entry-meta -->
								<?php endif; ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php
									/* translators: %s: Name of current post */
									the_excerpt( sprintf(
										__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'keepingitreal' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									) );
								?>

								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'keepingitreal' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->

							<a href="<?php the_permalink(); ?>#respond">Leave a comment</a>

						</article><!-- #post-## -->


					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; wp_reset_query(); ?>
				</div><!-- /inner-panel -->
			</div> <!-- /updates-panel -->
		</div><!-- /row -->

		<div class="row">
			<div class="buttons-panel">
				<div class="button-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a type="button" class="btn btn-lg toolkit-button" aria-label="Order Materials" href="/sitelead-toolkit-resources/#order-materials">
					  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Order Materials
					</a>
				</div><!-- /button-box -->
				<div class="button-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a type="button" class="btn btn-lg toolkit-button" aria-label="FAQs" href="/sitelead-toolkit-resources/#faqs">
					  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> FAQs
					</a>
				</div><!-- /button-box -->
				<div class="button-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a type="button" class="btn btn-lg toolkit-button" aria-label="Computer Support" href="/sitelead-toolkit-resources/#computer-support">
					  <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> Computer Support
					</a>
				</div><!-- /button-box -->
				<div class="button-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a type="button" class="btn btn-lg toolkit-button" aria-label="Get Help" href="/sitelead-toolkit-resources/#contact-kir-staff">
					  <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Get Help
					</a>
				</div><!-- /button-box -->
			</div><!-- /buttons-panel -->
		</div><!-- /row -->


	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
