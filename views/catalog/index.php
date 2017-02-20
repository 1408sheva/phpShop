<?php require_once ('/views/layout/header.php');?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">

                            <div class="panel panel-default">
                                <?php foreach ($categories as $categoryItems):?>
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?=$categoryItems['id'];?>">
                                                <?php echo $categoryItems['name'];?>
                                            </a>
                                        </h4>
                                    </div>
                                <?php endforeach;?>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Последние товары</h2>

                        <?php foreach ($latestProducts as $product):?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/template/images/home/product2.jpg" alt="" />
                                            <h2>$<?=$product['price'];?></h2>
                                            <a href="/product/<?=$product['id'];?>" alt="photo product">
                                                <p><?=$product['name'];?></p>
                                            </a>
                                            <a href="#" data-id="<?=$product["id"]?>" class="btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </a>
                                        </div>
                                        <?php if ($product['is_new'] == 1):?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>


                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>

<?php require_once ('/views/layout/footer.php');?>