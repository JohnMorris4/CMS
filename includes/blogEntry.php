 <div class="col-md-8">
                <?php
                    $query = "SELECT * FROM posts";
                    $select_all_posts = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_assoc($select_all_posts))
                    {
                        $post_title     = $row['post_title'];
                        $post_author    = $row['post_author'];
                        $post_date      = $row['post_date'];
                        $post_img       = $row['post_img'];
                        $post_content   = $row['post_content'];
                        //break out of php here to loop thru blog post
                        ?>
                        <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="assets/img/<?php echo $post_img; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <?php } ?>


            </div>
