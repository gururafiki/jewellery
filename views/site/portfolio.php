<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Portfolio';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- top bar -->
    <div class="top-bar">
        <h1>portfolio</h1>
        <p><a href="#">Home</a> / Portfolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".photography">Photography</a></li>
                            <li><a href="" data-filter=".logo">Logo</a></li>
                            <li><a href="" data-filter=".graphics">Graphics</a></li>
                            <li><a href="" data-filter=".ads">Advertising</a></li>
                            <li><a href="" data-filter=".fashion">Fashion</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    <!-- single work -->
                    <div class="col-md-4 col-sm-6  fashion logo">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/01.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mockups in seconds</span>
                                        <em>Fashion / Logo</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 ads graphics">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/03.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Floating mockups</span>
                                        <em>Ads / Graphics</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/02.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 fashion ads">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/04.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Held by hands</span>
                                        <em>Fashion / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/05.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/010.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/06.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/07.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="product" class="portfolio_item">
                            <img src="/images/portfolio/08.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->