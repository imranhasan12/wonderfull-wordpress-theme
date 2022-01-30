  <!-- sidebar widget -->
                <div class="col-lg-4">
                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget search-widget">
                        <form action="#">
                            <input type="text" placeholder="search" required>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget sidebar-list">
                        <h3>Categotis</h3>
                        <ul>
                       <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true,
        'exclude'    => array( 10 )
    ) ); ?> 
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget popular-posts">
                        <?php dynamic_sidebar('sidebar-2');?>
                       
                    </div>
                    <!-- // Single sidebar widget -->



                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget tags">
                        <h3>Tags</h3>
                        <ul>
							<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
							
                          
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                </div>