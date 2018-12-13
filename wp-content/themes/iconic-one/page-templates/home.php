<?php
/**
 * Template Name: Home Page Template
 *
 * Description: Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress - Themonic Framework
 * @subpackage Iconic_One
 * @since Iconic One 1.0
 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
            <div class="cat-box-title">
                <?php
                    $id = 17;
                    $blade = get_post($id);
                    // echo '<pre>';
                    // print_r($blade);
                    // echo '</pre>';
                    foreach((get_the_category($id)) as $category) {
                        $category_parent=$category->category_parent ;
                        if($category_parent==0){ 
                            ?>
                                <h2>
                                    <?php echo $category->name; ?>
                                </h2>
                                <div class="stripe-line"></div>
                            <?php
                        }
                    }
                ?>
            </div>
               
        <div class="inner-content">
            <div class="post-thumbnail">
                <a rel="bookmark">
                <?php if (has_post_thumbnail( 17 ) ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail' );
                        $image = $image[0];
                        } 
                    ?>
                <img width="290" height="195" src="<?php echo $image ?>">									
                <span class="overlay-icon"></span>
                </a>
            </div>
            <!-- post-thumbnail /-->
            <div class="comment-text">
                <h2><a href="<?php echo $blade->guid; ?>" rel="bookmark"> <?php echo $blade->post_title ?></a></h2>
                <p class="post-meta">
                    <?php echo date('j F     Y', strtotime($blade->post_date)); ?>	<span>Commentaires fermés<span> sur Youth Power Space Action – ENTREPRENDRE EN 4 JOURS</span></span>						
                </p>
                <div class="entry">
                    <?php echo $blade->post_content ?><a class="more-link" href="http://www.ymcamada.org/youth-power-space-action-entreprendre-en-4-jours/">Lire la suite »</a>
                </div>
            </div>
        </div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>