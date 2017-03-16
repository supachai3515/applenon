<!-- footer-area-start -->
    <footer>
        <section class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="static-book">
                                <div class="footer-title">
                                    <h2>APPLENON</h2>
                                </div>
                                <div class="footer-content">
                                    <p>"รับซ่อม  Macbook iMac  iphone ipad ขายอะไหล่แท้ มือหนึ่ง และมือสอง ซ่อมด่วนรอรับได้เลย เปลี่ยนชิพการ์ดจอ ลง OSX -ซ่อมหน้าจอ LED LCD เมนบอร์ดทุกอาการ"</p>
                                    <span class="author">- Applenon.com -</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-2 col-md-2">
                            <div class="my-account">
                                <div class="footer-title">
                                    <h2>APPLENON</h2>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url('howtobuy')?>">วิธีการสั่งซื้อ</a></li>
                                        <li><a href="<?php echo base_url('payment')?>">วีธีแจ้งชำระเงิน</a></li>
                                        <li><a href="<?php echo base_url('dealer')?>">Dealer</a></li>
                                         <li><a href="<?php echo base_url('content')?>">บทความ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 hidden-sm">
                            <div class="information-area">
                                <div class="footer-title">
                                    <h2>หวดหมู่สินค้า</h2>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <?php  $i== 1 ;foreach ($menu_type as $master): ?>
                                        <?php if ($i < 6): ?>
                                            <li><a href="<?php echo base_url('products/category/'.$master['slug']) ?>">
                                            <?php echo $master['name'] ?>
                                        </a></li>
                                            
                                        <?php endif ?>
                                        
                                        <?php $i++; endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-2 col-md-2">
                            <div class="footer-menu-area">
                                <div class="footer-title">
                                    <h2>หวดหมู่สินค้า</h2>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <?php $i=0; $i== 1 ;foreach ($menu_type as $master): ?>
                                        <?php if ($i > 5): ?>
                                            <li><a href="<?php echo base_url('products/category/'.$master['slug']) ?>">
                                            <?php echo $master['name'] ?>
                                        </a></li>
                                            
                                        <?php endif ?>
                                        
                                        <?php $i++; endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="store-information-area">
                                <div class="footer-title">
                                    <h2>ข้อมูลของร้าน</h2>
                                </div>
                                <div class="store-content">
                                    <ul>
                                        <li>384/241 หมู่ 2 หมู่บ้านเดอะทรัสต์ซิตี้ ถนนงามวงศ์วาน ตำบลบางเขน อำเภอเมืองนนทบุรี จังหวัด นนทบุรี 11000</li>
                                        <li><a href="https://www.facebook.com/applehomefix/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="footer-payment">
                                    <img alt="" src="<?php echo base_url('theme');?>/img/payment-new.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="copyright">
                            <p>Copyright &copy; 2016 <a href="<?php echo $this->config->item('weburl') ?>"><?php echo $this->config->item('sitename') ?></a>. All rights reserved. Design By <a href="http://www.wisadev.com" target="_blank">wisadev.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS -->
    <!-- jquery-1.11.3.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/bootstrap.min.js"></script>
    <!-- owl.carousel.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/owl.carousel.min.js"></script>
    <!-- jquery.meanmenu js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery.meanmenu.js"></script>
    <!-- jquery-ui.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery-ui.min.js"></script>
    <!-- fancybox js -->
     <!-- Add fancyBox Js -->
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
     <script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox-thumb").fancybox({
            prevEffect  : "none",
            nextEffect  : "none",
            helpers : {
                title   : {
                    type: "outside"
                },
                thumbs  : {
                    width   : 50,
                    height  : 50
                }
            }
        });
    });
    </script>
    <!-- jquery.scrollUp.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery.scrollUp.min.js"></script>
    <!-- wow js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- Nivo slider js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url('theme');?>/custom-slider/home.js" type="text/javascript"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- plugins js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/plugins.js"></script>
    <!-- main js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/main.js"></script>
    <script type='text/javascript' src='<?php echo base_url('theme');?>/js/angular.min.js'></script>

    <?php echo $this->load->view("template/app");?>
    <?php if(isset($script)){echo $script;}?>
    <?php if(isset($script_file)){echo $this->load->view($script_file); }?>

    <script type="text/javascript">
    (function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/3/e/3e0922aab37edb5c8ccd30738b56f73c/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
    </script>
</body>

</html>
