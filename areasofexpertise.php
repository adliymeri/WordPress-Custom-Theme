<?php /* Template Name: Areas of Expertise */ ?>

<?php get_header();?>


<section class="section-2-1">
        <h1>
            Business & Management 
        </h1>
    </section>
    <section class="section-2-2">
        <div class="content-container">
            <h1>
                Adriatica RC offers a wide and diverse expertise for business and corporations operating in a wide range of sectors. Our core experts have an extensive experience in top management positions of large companies and have successfully managed to offer consultancy services to both foreign and national investors.
            </h1>
            <div class="container-row-1">
                <div class="wrapper"><div class="sq-1">Business plans</div></div>
                <div class="sq-2">Inner working procedures and workflows</div>
                <div class="wrapper-2"><div class="sq-3">Business evaluation</div></div>
            </div>
            <div class="container-row-2">
                <div class="wrapper-3"><div class="sq-1">Loan negotiation and re-structuring</div></div>
                <div class="sq-2">
                    <div class="title-1">Growing strategies</div>
                    <img src="<?php echo get_template_directory_uri();?>./Photos/Group 20.png" alt="background image">
                </div>
                <div class="wrapper-4"><div class="sq-3">Company re-structuring</div></div>
            </div>
        </div>
    </section>
    <section class="section-2-3">
        <div class="content-container-2-3">
            <div class="content-1">
                <div class="stick">
                    <h1>Case Studys</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                </div>
            </div>
            <div class="column-1">
            <?php 
            $args = array(
                'post_type'        => 'case-study',
                'post_status'      => 'publish',
                'search_title'     => $posts,
            );
            
            $the_query = new WP_Query( $args );
            
            if ($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="element-1">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="custom-image"><?php echo get_the_post_thumbnail()?></div>
                    <div class="paragraph"><?php the_content();?></div>
                </div>

            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
                <div class="element-1">
                    <div class="title">Case study name</div>
                    <div class="image-1"></div>
                    <div class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</div>
                </div>
                <div class="element-2">
                    <div class="title">Case study name</div>
                    <div class="image-2"></div>
                    <div class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</div>
                </div>
                <div class="element-3">
                    <div class="title">Case study name</div>
                    <div class="image-3"></div>
                    <div class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2-4">
        <div class="text">
            <h1>Agriculture</h1>
            <p>Go to the next service</p>
        </div>
        <div class="circle">
            <img src="<?php echo get_template_directory_uri();?>./Photos/circle.png" alt="circle picture">
        </div>
        <div class="photo"></div>
    </section>
    <section class="section-5">
        <div class="partners">
          <h3>Partners</h3>
          <div class="logo-container">
            <div class="logo-1">
              <a href="#"></a>
            </div>
            <div class="logo-2"></div>
            <div class="logo-3"></div>
            <div class="logo-4"></div>
          </div>
        </div>
      </section>

      <?php get_footer();?>