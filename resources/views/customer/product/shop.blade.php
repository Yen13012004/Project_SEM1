@extends('layouts.customer')

@section('title', 'Shop Page')

@section('main')
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <div class="container kaycee-categories style-02">
            <div class="categories-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:6,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;50&quot;}}]">
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="-1">
                                <img src="assets/images/cat1.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="-1">
                                Earrings </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="-1">
                                <img src="assets/images/cat2.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="-1"> Pendants </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="0">
                                <img src="assets/images/cat3.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="0">
                                Bangles </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="0">
                                <img src="assets/images/cat4.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="0">
                                Finger Rings </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="0">
                                <img src="assets/images/cat5.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="0">
                                Chains </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="0">
                                <img src="assets/images/cat6.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="0">
                                Bracelets </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="#" tabindex="0">
                                <img src="assets/images/cat7.png"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="0">
                                Pendant Set </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h1 class="page-title">Shop</h1>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        <form>
                            <a href="shop.html" data-toggle="tooltip" data-placement="top"
                               class="modes-mode mode-grid display-mode active" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="shop-list.html" data-toggle="tooltip" data-placement="top"
                               class="modes-mode mode-list display-mode " value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>

                    {{-- <form action="" method="get">
                        <input type="text" placeholder="Search..">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form> --}}

                    <form class="kaycee-ordering" method="get">
                        <select title="product_cat" name="sort" class="orderby">
                            <option value="none" selected="selected">Default sorting</option>
                            <option value="name-asc">Name a->z</option>
                            <option value="name-desc">Name z->a</option>
                            <option value="price-asc">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form class="per-page-form" method="get">
                        <input type="text" name="search" placeholder="Search..">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class=" auto-clear kaycee-products">
                    <ul class="row products columns-3">
                        @foreach ($allProducts as $item)
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                                <div class="product-inner tooltip-left">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="{{route('shop.detail', $item->id)}}">
                                            <img class="img-responsive"
                                                 src="/uploads/product/{{$item->image}}"
                                                 alt="Gold Chain" width="600" height="778">
                                        </a>
                                        <div class="flash">
                                            <span class="onnew"><span class="text">New</span></span></div>
                                        <form class="variations_form cart">
                                            <table class="variations">
                                                <tbody>
                                                <tr>
                                                    <td class="value">
                                                        <select title="box_style" data-attributetype="box_style"
                                                                data-id="pa_color"
                                                                class="attribute-select " name="attribute_pa_color"
                                                                data-attribute_name="attribute_pa_color"
                                                                data-show_option_none="yes">
                                                            <option data-type="" data-pa_color="" value="">Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color"
                                                                    data-pa_color="#3155e2" value="blue"
                                                                    class="attached enabled">Blue
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color"
                                                                    data-pa_color="#52b745" value="green"
                                                                    class="attached enabled">Green
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color"
                                                                    data-pa_color="#ffe59e" value="pink"
                                                                    class="attached enabled">Pink
                                                            </option>
                                                        </select>
                                                        <div class="data-val attribute-pa_color"
                                                             data-attributetype="box_style">
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                      style="background: #3155e2;" data-value="blue">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                      style="background: #52b745;" data-value="green">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                      style="background: #ffe59e;" data-value="pink">
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                        <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                        <div class="group-button">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <div class="kaycee product compare-button">
                                                <a href="#" class="compare button">Compare</a>
                                            </div>
                                            <a href="#" class="button yith-wcqv-button">Quick View</a>
                                            <div class="add-to-cart">
                                                <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                    options</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                            <a href="#">{{$item->name}}</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span></div>
                                        <span class="price"><span class="kaycee-Price-amount amount"><span
                                                class="kaycee-Price-currencySymbol">$</span>{{$item->discount}}</span> – <span
                                                class="kaycee-Price-amount amount"><span
                                                class="kaycee-Price-currencySymbol">$</span>{{$item->price}}</span></span>
                                        <div class="kaycee-product-details__short-description">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                tempor sit amet, ante.</p>
                                            <ul>
                                                <li>Water-resistant fabric with soft lycra detailing inside</li>
                                                <li>CLean zip-front, and three piece hood</li>
                                                <li>Subtle branding and diagonal panel detail</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="group-button">
                                        <div class="group-button-inner">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <div class="kaycee product compare-button">
                                                <a href="#" class="compare button">Compare</a>
                                            </div>
                                            <a href="#" class="button yith-wcqv-button">Quick View</a>
                                            <div class="add-to-cart">
                                                <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                    options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        {{-- <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro1211-2-600x778.jpg"
                                             alt="Gold Bracelet" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-14%</span></span>
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Gold Bracelet</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span></div>
                                    <span class="price"><del><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                            class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>119.00</span></ins></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro101-1-600x778.jpg"
                                             alt="Smooth Sleek" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Smooth Sleek</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>60.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro171-1-600x778.jpg"
                                             alt="Splendid Diamond" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <form class="variations_form cart">
                                        <table class="variations">
                                            <tbody>
                                            <tr>
                                                <td class="value">
                                                    <select title="box_style" data-attributetype="box_style"
                                                            data-id="pa_color"
                                                            class="attribute-select " name="attribute_pa_color"
                                                            data-attribute_name="attribute_pa_color"
                                                            data-show_option_none="yes">
                                                        <option data-type="" data-pa_color="" value="">Choose an
                                                            option
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color"
                                                                data-pa_color="#ffe59e" value="pink"
                                                                class="attached enabled">Pink
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color"
                                                                data-pa_color="#a825ea" value="purple"
                                                                class="attached enabled">Purple
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color"
                                                                data-pa_color="#b6b8ba" value="red"
                                                                class="attached enabled">Red
                                                        </option>
                                                    </select>
                                                    <div class="data-val attribute-pa_color"
                                                         data-attributetype="box_style">
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #3155e2;" data-value="blue">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #52b745;" data-value="green">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #ffe59e;" data-value="pink">
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Splendid Diamond</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>105.00</span> – <span
                                            class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>110.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro41-1-600x778.jpg"
                                             alt="Stylised Studs" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Stylised Studs</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>134.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro181-2-600x778.jpg"
                                             alt="Mesmerising Gold" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Mesmerising Gold</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>98.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro83-1-600x778.jpg"
                                             alt="Glasses" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <form class="variations_form cart">
                                        <table class="variations">
                                            <tbody>
                                            <tr>
                                                <td class="value">
                                                    <select title="box_style" data-attributetype="box_style"
                                                            data-id="pa_color"
                                                            class="attribute-select " name="attribute_pa_color"
                                                            data-attribute_name="attribute_pa_color"
                                                            data-show_option_none="yes">
                                                        <option data-type="" data-pa_color="" value="">Choose an
                                                            option
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color"
                                                                data-pa_color="#000000" value="black"
                                                                class="attached enabled">Black
                                                        </option>
                                                        <option data-width="30" data-height="30" data-type="color"
                                                                data-pa_color="#b6b8ba" value="red"
                                                                class="attached enabled">Red
                                                        </option>
                                                    </select>
                                                    <div class="data-val attribute-pa_color"
                                                         data-attributetype="box_style">
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #3155e2;" data-value="blue">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #52b745;" data-value="green">
                                                            </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="color">
                                                            <span class="change-value color"
                                                                  style="background: #ffe59e;" data-value="pink">
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Mango Fragrance</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>56.00</span> – <span
                                            class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>60.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat  instock featured shipping-taxable product-type-external"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro141-1-600x778.jpg"
                                             alt="Riona Pearl" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_external add_to_cart_button">Buy it
                                                on Amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Riona Pearl</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>207.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro61-1-600x778.jpg"
                                             alt="Graceful Diamond" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_grouped add_to_cart_button">View
                                                products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Graceful Diamond</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>79.00</span> – <span
                                            class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>139.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro71-1-600x778.jpg"
                                             alt="Gold Chain" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-18%</span></span>
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Gold Chain</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                            class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>89.00</span></ins></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-21 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-lamp product_tag-light product_tag-sock  outofstock featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro191-1-600x778.jpg"
                                             alt="Slender Earrings" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="sold-out"><span>Sold out</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Slender Earrings</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>35.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive"
                                             src="assets/images/apro13-1-600x778.jpg"
                                             alt="Stud Earrings" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Stud Earrings</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kaycee-Price-amount amount"><span
                                            class="kaycee-Price-currencySymbol">$</span>109.00</span></span>
                                    <div class="kaycee-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kaycee product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="shop-control shop-after-control">
                    <nav class="kaycee-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    <p class="kaycee-result-count">Showing 1–12 of 20 results</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
