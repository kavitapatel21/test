<?php
/*
Template Name: news
Template Post Type: post, page, my-post-type;
*/
get_header();
?>
<div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">News</li>
              </ul>
            </nav>
            <h1 class="text-center">News</h1>
          </div>
        </div>
      </div>
    </div>
<main>
    <div class="page-section">
      <div class="container">
        <div class="row">
            <?php
        $args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'ASC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
        <div class="col-md-6 col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author"><?php echo the_title();?></div>
                  <a href="#" class="post-date"><?php echo get_the_date(); ?></a>
                </div>
              </div>
              <div class="body">
                <div class="post-excerpt"><?php the_content(); ?></div>
              </div>
              <div class="footer">
                <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
        </div>
            <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
         

          <div class="col-12 mt-5">
            <nav aria-label="Page Navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
?>