<?php
  function featured_news($category_name) {
    $post_count = 1;

 $my_query = new WP_Query( array( '
  category_name' => $category_name,
  'orderby' => 'publish_date',
    'order' => 'ASC' ) ); ?>
 <section id="featured">
   <div class="container">
     <div class="row justify-content-center">

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


<?php if ($post_count == "1")
{ ?>


       <div class="col-xs-12 col-lg-8">
         <a href="<?php the_permalink(); ?>">
         <div class="card card-inverse lead mb-3 mt-0">
           <img class="news" src="<?php the_post_thumbnail_url(); ?>" style="" alt="Card image">

           <div class="card-img-overlay news featured-lead">
             <h2 class="featured"><?php the_title(); ?></h2>
             <p class="news pt-3"><small class="news"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date('jS F Y');?>   </small>
               <small class="news">   <i class="fa fa-user-o" aria-hidden="true"></i><?php the_author(); ?></small>
               <small class="news">   <i class="fa fa-comment-o" aria-hidden="true"></i> <?php comments_number( '0', '1', '%' ); ?>  </small>
               <small class="news">   <i class="fa fa-eye" aria-hidden="true"></i> 91333</small></p>
         </div></a>
       </div>
     </div>
       <div class="col-xs-12 col-lg-4">

       <?php }
        if ($post_count == "2")
       { ?>

        <div class="card card-inverse featured mt-0 mb-3">
          <a href="<?php the_permalink(); ?>">
          <img class="news" src="<?php the_post_thumbnail_url(); ?>" style="" alt="Card image">
          <div class="card-img-overlay news featured">
            <h2 class="featured hidden-lg-up"><?php the_title(); ?></h2>
            <h3 class="featured hidden-md-down"><?php the_title(); ?></h3>
            <p class="news"><small class="news"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small></p>
          </div>
          </a>
        </div>

        <?php }

       if ($post_count == "3")
       { ?>

        <div class="card card-inverse featured mt-3 mb-0">
          <a href="<?php the_permalink(); ?>">
          <img class="news" src="<?php the_post_thumbnail_url(); ?>" style="" alt="Card image">
          <div class="card-img-overlay news featured">
            <h2 class="featured hidden-lg-up"><?php the_title(); ?></h2>
            <h3 class="featured hidden-md-down"><?php the_title(); ?></h3>
            <p class="news"><small class="news"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small></p>
          </div>
          </a>
        </div>

        <?php }
         else if ($post_count == "4")
        {  ?>



<?php
}
$post_count++;
endwhile; ?>
</div>
</div>
</div>
</section>

<?php }

function section_news($category_name,$offset) {
  $post_count = 1;

$my_query_news1 = new WP_Query( array( 'category_name',
'orderby' => 'publish_date',
  'order' => 'ASC' ) ); ?>
<section id="cutting-edge">
  <div class="container">
    <div class="row mx-1">
      <div class="col-xs-12 col-lg-8 px-0">
        <h2 class="title-1">Cutting edge Science Stuff!</h2>
      </div>

      <div class="col-xs-12 col-lg-8 card-group ">

<?php while ($my_query_news1->have_posts()) : $my_query_news1->the_post(); ?>


<?php if ($post_count == "1")
{ ?>

  <div class="col-xs-12 col-lg-6 px-0 hidden-lg-up">
    <a href="<?php the_permalink(); ?>">
    <div class="card border-0" style="">
      <img class="card-img-top img-fluid rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
      <div class="card-block px-1">
        <h3 class=""><?php the_title(); ?></h3>
        </a>
        <p class="news text-muted">
          <small class="news text-muted">  <i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small>
          <small class="news text-muted">   <i class="fa fa-user-o" aria-hidden="true"> </i><?php the_author(); ?></small>
          <small class="news text-muted">   <i class="fa fa-comment-o" aria-hidden="true"> </i><?php comments_number( '0', '1', '%' ); ?></small>
          <small class="news text-muted">   <i class="fa fa-eye" aria-hidden="true"></i> 9142</small></p>
        <p class="card-text"><?php the_excerpt(); ?></p>
      </div>
    </div></a>
  </div>

  <div class="col-xs-12 col-lg-6 pl-0 hidden-md-down">
    <a href="<?php the_permalink(); ?>">
    <div class="card border-0" style="">
      <img class="card-img-top img-fluid rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
      <div class="card-block px-1">
        <h3 class=""><?php the_title(); ?></h3>
        </a>
        <p class="news text-muted">
          <small class="news text-muted">  <i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small>
          <small class="news text-muted">   <i class="fa fa-user-o" aria-hidden="true"> </i><?php the_author(); ?></small>
          <small class="news text-muted">   <i class="fa fa-comment-o" aria-hidden="true"> </i><?php comments_number( '0', '1', '%' ); ?></small>
          <small class="news text-muted">   <i class="fa fa-eye" aria-hidden="true"></i> 9142</small></p>
        <p class="card-text"><?php the_excerpt(); ?></p>
      </div>
    </div></a>
  </div>




     <?php }
      else if ($post_count == "2")
     { ?>

       <div class="col-xs-12 col-lg-6 px-0 hidden-lg-up">
         <a href="<?php the_permalink(); ?>">
         <div class="card border-0" style="">
           <img class="card-img-top img-fluid rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
           <div class="card-block px-1 ">
             <h3 class=""><?php the_title(); ?></h3>
             </a>
             <p class="news text-muted">
               <small class="news text-muted">  <i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small>
               <small class="news text-muted">   <i class="fa fa-user-o" aria-hidden="true"> </i><?php the_author(); ?></small>
               <small class="news text-muted">   <i class="fa fa-comment-o" aria-hidden="true"> </i><?php comments_number( '0', '1', '%' ); ?></small>
               <small class="news text-muted">   <i class="fa fa-eye" aria-hidden="true"></i> 9142</small></p>
             <p class="card-text"><?php the_excerpt(); ?></p>
           </div>
         </div></a>
       </div>

       <div class="col-xs-12 col-lg-6 pr-0 hidden-md-down">
         <a href="<?php the_permalink(); ?>">
         <div class="card border-0" style="">
           <img class="card-img-top img-fluid rounded-0"  src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
           <div class="card-block px-1">
             <h3 class=""><?php the_title(); ?></h3>
             </a>
             <p class="news text-muted">
               <small class="news text-muted">  <i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date('jS F Y');?></small>
               <small class="news text-muted">   <i class="fa fa-user-o" aria-hidden="true"> </i><?php the_author(); ?></small>
               <small class="news text-muted">   <i class="fa fa-comment-o" aria-hidden="true"> </i><?php comments_number( '0', '1', '%' ); ?></small>
               <small class="news text-muted">   <i class="fa fa-eye" aria-hidden="true"></i> 9142</small></p>
             <p class="card-text"><?php the_excerpt(); ?></p>
           </div>
         </div></a>
       </div>


<?php
}
$post_count++;
endwhile; ?>
</div>
  <?php get_sidebar( 'right' ); ?>

</div>
</div>
</section>

<?php }

 ?>
