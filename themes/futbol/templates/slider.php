<?php if(is_home() OR is_front_page()) : ?>
<div class="tm-top-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="akslider-module ">
                                <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    <ul class="uk-slideshow uk-overlay-active">
                                        <li aria-hidden="false" class="uk-height-viewport uk-active">
                                            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider-img.jpg);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Life is <span>about timing</span></h3>
                                                        <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-height-viewport">
                                            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider-img1.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img1.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Just play.<span>Have fun.</span></h3>
                                                        <div class="promo-sub">Life is <span>about timing</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-height-viewport">
                                            <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/main-slider-img2.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img2.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Life is <span>about timing</span></h3>
                                                        <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                    <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                        <li class="uk-active" data-uk-slideshow-item="0"><a href="/">0</a>
                                        </li>
                                        <li data-uk-slideshow-item="1"><a href="/">1</a>
                                        </li>
                                        <li data-uk-slideshow-item="2"><a href="/">2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
     </div>
<?php else: ?>
<?php endif; ?>