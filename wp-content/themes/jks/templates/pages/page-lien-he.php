<?php get_header(); ?>

<main class="main hk-contact">
    <div class="container">
        <div class="homepage__title text-center">
            <h1>Liên hệ</h1>
            <div class="title-below">
                <div class="icon-box">
                    <i class="fad fa-rings-wedding"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hk-contact__adress d-flex flex-wrap">
                    <div class="address-item">
                        <h4>Trụ sở chính: Đà Nẵng</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-1">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                <?php the_field( 'office_1', 'option' ); ?>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-phone-alt me-2"></i>
                                <a class="text-dark" href="tel:<?php the_field( 'hotline_1', 'option' ); ?>"><?php the_field( 'hotline_1', 'option' ); ?></a>
                            </li>
                        </ul>
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0085011637825!2d108.20798201467896!3d16.065048643817537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184b32d0ffff%3A0x49d5fbbadb4125fa!2sHongkong%20Wedding!5e0!3m2!1svi!2s!4v1645755551123!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="address-item">
                        <h4>CN miền Nam: Hồ Chí Minh</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-1">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                <?php the_field( 'office_2', 'option' ); ?>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-phone-alt me-2"></i>
                                <a class="text-dark" href="tel:<?php the_field( 'hotline_2', 'option' ); ?>"><?php the_field( 'hotline_2', 'option' ); ?></a>
                            </li>
                        </ul>
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.88885649268815!2d106.6764947160641!3d10.80282120000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529306e7454cf%3A0xedb8086ea0a3069d!2sHongkong%20Wedding!5e0!3m2!1svi!2s!4v1645755593834!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>