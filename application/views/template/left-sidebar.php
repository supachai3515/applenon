<div class="left-sidebar">
    <!-- category-menu-area start-->
    <div class="category-menu-area <?php if ($page == "product_detail"): ?> hidden-sm hidden-xs <?php endif ?>">
        <div class="category-title">
            <h2>ประเภทสินค้า</h2>
        </div>
        <div class="category-menu" id="cate-toggle">
            <ul>

                <?php foreach ($menu_type as $master): ?>
                <?php  

                    $count_sub = 0;
                    foreach ($menu_sub_type as $sub) {
                       if ($master['id'] == $sub['parenttype_id'] && $sub['name'] !=""){
                        $count_sub++;
                       }
                    }

                ?>
                <?php if ($count_sub == 0): ?>
                    <li>
                        <a href="<?php echo base_url('products/category/'.$master['slug']) ?>">
                            <?php echo $master['name']; ?>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="has-sub">
                        <a href="#">
                            <?php echo $master['name']; ?>
                        </a>
                        <ul class="category-sub">
                            <?php foreach ($menu_sub_type as $sub): ?>
                                <?php if ($master['id'] == $sub['parenttype_id'] && $sub['name'] !=""): ?>

                                    <?php  
                                        $sub_3_count = 0;
                                        foreach ($menu_sub_type as $sub_3) {
                                           if ($sub['id'] == $sub_3['parenttype_id'] && $sub_3['name'] !=""){
                                            $sub_3_count++;
                                           }
                                        }
                                    ?>
                                    <?php if ($sub_3_count == 0): ?>
                                        <li class="sub-category">
                                            <a href="<?php echo base_url('products/category/'.$sub['slug']) ?>">
                                                <?php echo  $sub['name']; ?> <span>(<?php echo $sub['count_product'] ?>)</span></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="has-sub"><a href="#"><?php echo $sub['name']; ?></a>
                                            <ul>
                                            <?php foreach ($menu_sub_type as $sub_3_item): ?>
                                                <?php if ($sub['id'] == $sub_3_item['parenttype_id']): ?>
                                                     
                                                <li><a href="<?php echo base_url('products/category/'.$sub_3_item['slug']) ?>">
                                                <?php echo  $sub_3_item['name']; ?> <span>(<?php echo $sub_3_item['count_product'] ?>)</span></a></li>
                                                        
                                                <?php endif ?>
                                              
                                            <?php endforeach ?>
                                                <li class="sub-category"><a href="<?php echo base_url('products/category/'.$sub['slug']) ?>">ทั้งหมด</a></li>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                <?php endif ?>
                            <?php endforeach ?>
                            <li class="sub-category"><a href="<?php echo base_url('products/category/'.$master['slug']) ?>">ทั้งหมด</a></li>
                        </ul>
                    </li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <!-- category-menu-area end-->
    <!-- category-menu-area start-->
    <div class="category-menu-area <?php if ($page == "product_detail"): ?> hidden-sm hidden-xs <?php endif ?>">
        <div class="category-title title-brand">
            <h2>ยี่ห้อสินค้า</h2>
        </div>
        <div class="category-menu" id="cate-toggle">
            <ul>
                <?php foreach ($menu_brands as $brand): ?>
                <?php if ($brand['name']!="" && $brand['type_id'] !="7"): ?>
                <li>
                    <a href="<?php echo base_url('products/brand/'.$brand['slug']) ?>">
                        <?php echo $brand['name'] ?>
                        <span>(<?php echo $brand['count_product'] ?>)</span>
                    </a>
                </li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <!-- category-menu-area end-->
    <!-- add-banner-slider start-->
    <div class="add-banner-slider-area hidden-sm hidden-xs">
        <div id="fb-root"></div>
        <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=615663091936505";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="add-banner-carsuol">
            <div class="fb-page" data-href="https://www.facebook.com/applehomefix/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/applehomefix/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/applehomefix/">จำหน่ายอะไหล่  ซ่อม MacBook iMac - Applenon.com</a></blockquote>
            </div>
        </div>
    </div>
    <!-- add-banner-slider start-->
</div>
