        <!-- Begin Footer -->
        <footer class="footer">
            <div class="footer__main">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-5 col-lg-12 col-md-12">
                            <div class="footer__main-col">
                                <h4 class="text-white mb-3">Hong Kong Wedding</h4>
                                <p class="text-white">
                                    HongKong wedding là một trong những thương hiệu chụp ảnh cưới uy tín hàng đầu tại Đà
                                    Nẵng nói riêng và Việt Nam nói chung. Trong hành trình 15 năm của mình, HongKong
                                    wedding đã xây dựng được một đội ngũ ekip trẻ giàu kinh nghiệm, năng động phục vụ
                                    hơn 100.000 khách hàng.
                                </p>
                                <p class="text-white">*Thương hiệu váy cưới độc quyền ELLE
                                    Bridal có mặt tại
                                    tất cả
                                    chi nhánh HongKong Wedding - "Hạnh Phúc Trọn Vẹn
                                </p>
                                <!-- <div class="sub_menu">
                                    <ul class="list-unstyled d-flex justify-content-start">
                                        <li class="me-3">
                                            <a class="text-white" href="#">
                                                Giới thiệu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-white" href="#">
                                                Liên hệ
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-xl-3 col-lg-6 col-md-6">
                            <div class="footer__main--servive">
                                <h4 class="text-white mb-3">Liên kết nhanh</h4>
                                <ul class="list-unstyled ">
                                    <li class="mb-2">
                                        <a href="/gioi-thieu" class="d-inline-block">
                                            Giới thiệu
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/album" class="d-inline-block">
                                            Album
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/bao-gia" class="d-inline-block">
                                            Báo giá
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/khoa-hoc-makeup" class="d-inline-block">
                                            Khoá học Makeup
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/uu-dai" class="d-inline-block">
                                            <span>Ưu đãi</span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/tin-tuc" class="d-inline-block">
                                            Tin tức
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="/lien-he" class="d-inline-block">
                                            Liên hệ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-6 col-md-6">
                            <div class="footer__main--contact">
                                <h4 class="text-white mb-3">Liên Hệ</h4>
                                <ul class="list-unstyled text-white">
                                    <li class="d-flex flex-start mb-2">
                                        <i class="text-white mt-1 fas fa-map-marker-alt"></i>
                                        &nbsp;&nbsp;
                                        <span class="d-inline-block">
                                            Trụ sở chính: <?php the_field( 'office_1', 'option' ); ?>
                                        </span>
                                    </li>
                                    <li class="d-flex flex-start mb-2">
                                        <i class=" text-white mt-1 fas fa-map-marker-alt"></i>
                                        &nbsp;&nbsp;
                                        <span class="d-inline-block">
                                            CN Miền Nam: <?php the_field( 'office_2', 'option' ); ?>
                                        </span>
                                    </li>
                                    <li class="d-flex flex-start mb-2">
                                        <i class="text-white mt-1 fas fa-phone-alt"></i>
                                        &nbsp;&nbsp;
                                        <span class="d-inline-block">
                                            Hotline Miền Trung: <a href="tel:<?php the_field( 'hotline_1', 'option' ); ?>"><?php the_field( 'hotline_1', 'option' ); ?></a>
                                        </span>
                                    </li>
                                    <li class="d-flex flex-start mb-2">
                                        <i class="text-white mt-1 fas fa-phone-alt"></i>
                                        &nbsp;&nbsp;
                                        <span class="d-inline-block">
                                            Hotline Miền Nam: <a href="tel:<?php the_field( 'hotline_2', 'option' ); ?>"><?php the_field( 'hotline_2', 'option' ); ?></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer__copyrighter text-center pt-3 pb-2">
                <div class="container">
                    <div class="footer__copyrighter--hr">
                        <em class="text-white d-inline-block mt-2">
                            © 2022 by HongKong Wedding - Studio chụp ảnh cưới đẹp tại Đà Nẵng
                        </em>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Begin Search popup -->
        <div class="popup-wrapper position-fixed top-50 start-50 translate-middle w-100 h-100">
            <div style="display:none;"
                class="search-popup bg-white shadow text-center position-absolute top-50 start-50 translate-middle">
                <form action="<?php echo get_home_url(); ?>" class="form-search">
                    <input type="search" name="s" class="form-control mb-3" placeholder="Tìm kiếm...">
                    <button type="submit" class="btn">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <!-- End Search popup -->

        <!-- Begin Contact Fixed -->
        <div class="contact-fix">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="http://zalo.me/<?php the_field( 'zalo', 'option' ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="jks jks-zalo"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="jks jks-face"></i>
                    </a>
                </li>
                <li>
                    <a href="tel:<?php the_field( 'hotline_1', 'option' ); ?>">
                        <i class="jks jks-hotline"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Contact Fixed -->

        <?php wp_footer(); ?>
    </div>
</body>

</html>