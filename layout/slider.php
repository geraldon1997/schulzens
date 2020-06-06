<!-- slider Area Start-->
<div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>
                                <?php
                                    $path = $_SERVER['REQUEST_URI'];
                                    $query = $_SERVER['QUERY_STRING'];

                                    $header1 = str_replace('/', '', $path);
                                    $header2 = str_replace('.php', '', $header1);
                                    $header3 = str_replace("?$query", '', $header2);
                                    $header = str_replace('_', ' ', $header3);

                                    echo $header;
                                ?>
                            </h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#"><?php echo $header; ?></a></li> 
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->