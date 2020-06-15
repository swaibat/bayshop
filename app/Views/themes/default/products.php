<main role="main" class="container">
    <div class="row">
        <div class="col-2 pr-0">
            <div class="bg-white rounded shadow-xs">
                <article class="filter-group">
                    <div class="border-bottom p-2">
                        <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true"
                            aria-expanded="false" class="collapsed d-flex w-100">
                            <h6 class="title">Categories </h6>
                            <span class='ml-auto'><i class="icon-control fa fa-chevron-down"></i></span>
                        </a>
                    </div>
                    <div class="filter-content collapse show" id="collapse_aside1" style="">
                        <div class="card-body">
                            <ul class="list-menu">
                                <li><a href="#" data-abc="true">Electronics </a></li>
                                <li><a href="#" data-abc="true">Watches </a></li>
                                <li><a href="#" data-abc="true">Laptops </a></li>
                                <li><a href="#" data-abc="true">Clothes </a></li>
                                <li><a href="#" data-abc="true">Accessories </a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <div class="border-bottom p-2 "> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                            data-abc="true" aria-expanded="false" class="collapsed d-flex w-100">
                            <h6 class="title">Price </h6>
                            <span class='ml-auto'><i class="icon-control fa fa-chevron-down"></i></span>
                        </a> </div>
                    <div class="filter-content collapse show" id="collapse_aside2" style="">
                        <div class="card-body">
                            <input type="range" class="custom-range" min="0" max="100" name="">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Min</label>
                                    <input class="form-control" placeholder="$0" type="number">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <label>Max</label>
                                    <input class="form-control" placeholder="$1,0000" type="number">
                                </div>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm m-auto">Apply Now</a>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <div class="border-bottom p-2 "> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                            data-abc="true" aria-expanded="false" class="collapsed d-flex w-100"> <i
                                class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Size </h6>
                        </a> </div>
                    <div class="filter-content collapse show" id="collapse_aside3" style="">
                        <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span
                                    class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input
                                    type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label
                                class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG </span>
                            </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light">
                                    XXL </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span
                                    class="btn btn-light"> XXXL </span> </label> </div>
                    </div>
                </article>
                <article class="filter-group">
                    <div class="border-bottom p-2 "> <a href="#" data-toggle="collapse" data-target="#collapse_aside4"
                            data-abc="true" class="collapsed d-flex w-100" aria-expanded="false">
                            <h6 class="title">Rating </h6>
                            <span class='ml-auto'><i class="icon-control fa fa-chevron-down"></i></span>
                        </a> </div>
                    <div class="filter-content collapse show" id="collapse_aside4" style="">
                        <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked=""
                                    class="custom-control-input">
                                <div class="custom-control-label">Better </div>
                            </label> <label class="custom-control"> <input type="checkbox" checked=""
                                    class="custom-control-input">
                                <div class="custom-control-label">Best </div>
                            </label> <label class="custom-control"> <input type="checkbox" checked=""
                                    class="custom-control-input">
                                <div class="custom-control-label">Good</div>
                            </label> <label class="custom-control"> <input type="checkbox" checked=""
                                    class="custom-control-input">
                                <div class="custom-control-label">Not good</div>
                            </label> </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-md-10">
            <div class="bg-white">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <span>12323 Items</span>
                    <div class="d-flex">
                        <span class="ml-2 px-2">sort direction: min </span>
                        <span class="ml-2 border-left pl-3">sort by: Date created</span>
                    </div>
                </div>
                <hr class='m-0 px-3'>
                <div class="Btc_container">
                    <!--DealofDayOffers-->
                    <div class="sectionX " id="onClickFilter_ScrollTo" style="margin-bottom: 0;">
                        <div class="innerCard_sectionXWrap whiteBgX99 borderRounded4px ">
                            <!--offerCont_wrap-->
                            <div class="offerCont_wrap whiteCard_bg setBottomOffset">
                                <div class="offerUnit_Wrapper">
                                    <div class="offerUnit">
                                        <div class="width_ContstraX relFontX resp_LiX dummyHeight_bg innerSection">
                                            <div class="contentX99_Wrapper">
                                                <!--width_ContstraX-->
                                                <ul class="offers_WrapperX99 relFontSize_util">
                                                    <ul class="offers_WrapperX99 relFontSize_util">
                                                        <?php foreach ($products as $product):?>
                                                        <li class="OfferUnitX99 OffersContentBoxLi">
                                                            <div class="offerUnit_innerContWrap">
                                                                <span class="offerUnit_href">
                                                                    <div class="offerUnit_href_afterWrap">
                                                                        <a class="offerUnit_imgWrap_sdPlusInc_rel"
                                                                            href="/products/<?= $product['slug']?>">
                                                                            <div class="offerUnit_sdPlusWrap_abs"></div>
                                                                            <img class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                                src="<?= $product['url']?>" alt="">
                                                                        </a>
                                                                        <div class="offerUnit_nonImgContWrap">
                                                                            <div
                                                                                class="offerUnit_title twoLine_TitleX99">
                                                                                <?= $product['title']?>
                                                                            </div>
                                                                            <div class="offerUnit_priceTaglineWrap_rel">
                                                                                <div class="offerUnit_priceWrap"><span
                                                                                        class="offerUnit_priceWrapAll"><span
                                                                                            class="offerUnit_price">USD
                                                                                            <?= $product['price']?></span>
                                                                                        <span
                                                                                            class="offerUnit_displayPrice">USD
                                                                                            <?= $product['sale_price']?></span></span>
                                                                                </div>
                                                                                <div class="offerUnit_discountWrap">
                                                                                    <div class="offerUnit_discount">
                                                                                        <?= $product['discount']?>% Off
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="offerUnit_ratingWrap">
                                                                                <div class="offerUnit_rating_rel">
                                                                                    <div class="ratingBG_disabled">
                                                                                    </div>
                                                                                    <div class="ratingBG_active"
                                                                                        style="width: 54.6px;"></div>
                                                                                </div><span
                                                                                    class="numberRevsX">(6)</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </ul>
                                            </div>
                                            <!--/width_ContstraX-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
