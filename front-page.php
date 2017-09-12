<?php

get_header();
$featured_course_id = 8;
$teachers = new WP_Query( [ 'post_type' => 'teacher', 'posts_per_page' => 4 ] );
$courses = new WP_Query( [ 'post_type' => 'download', 'posts_per_page' => 2 ] );
$posts = new WP_Query( [ 'post_type' => 'post', 'posts_per_page' => 4 ] );

?>

<div id="home-hero">
    <div class="home-hero-cta">
        <p>
            Find teachers & courses to learn quickly
        </p>
        <a class="btn btn-primary" href="#">
            Find A Course
        </a>
    </div>
</div>

<div class="container-fluid courses-teachers">
    <div class="row">
        <?php while( $courses->have_posts() ) : $courses->the_post(); ?>
        <?php $post_thumb = get_post_thumbnail_id( $post->ID ); ?>
        <?php $img = wp_get_attachment_image_src( $post_thumb, 'full' ); ?>
            <div class="col-sm-6 course" style="background-image:url(<?php echo $img[0]; ?>);">
                <a href="<?php the_permalink(); ?>">
                    <span class="course-title">
                        <?php the_title(); ?>
                        <span class="btn btn-primary">
                            Start Course
                        </span>
                    </span>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="container">
        <h3 class="teacher-title">
            Learn From WordPress Experts
        </h3>
        <div class="row">
            <?php while( $teachers->have_posts() ) : $teachers->the_post(); ?>
            <?php $teacher = get_field( 'cl_teacher_user' ); ?>
            <?php $avatar_url = get_avatar_url( $teacher['ID'] ); ?>
                <div class="col-sm-3 teacher">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $teacher['user_avatar']; ?>
                        <span class="teacher-title">
                            <?php the_title(); ?>
                        </span>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="row">
        <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
            <?php $post_thumb = get_post_thumbnail_id( $post->ID ); ?>
            <?php $img = wp_get_attachment_image_src( $post_thumb, 'full' ); ?>
            <div class="col-sm-6 blog-post" style="background-image:url(<?php echo $img[0]; ?>);">
                <a href="<?php the_permalink(); ?>">
                    <span class="course-title">
                        <?php the_title(); ?>
                        <span class="btn btn-primary">
                            Read More
                        </span>
                    </span>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
