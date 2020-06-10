<main role="main" class="container">
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
                                                          <a class="offerUnit_imgWrap_sdPlusInc_rel" href="/products/<?= $product['slug']?>">
                                                              <div class="offerUnit_sdPlusWrap_abs"></div>
                                                              <img class="offerUnit_img OfferImg b-lazy b-loaded"
                                                                  src="<?= $product['url']?>"
                                                                  alt="">
                                                          </a>
                                                          <div class="offerUnit_nonImgContWrap">
                                                              <div class="offerUnit_title twoLine_TitleX99">
                                                                  <?= $product['title']?>
                                                                  </div>
                                                              <div class="offerUnit_priceTaglineWrap_rel">
                                                                  <div class="offerUnit_priceWrap"><span class="offerUnit_priceWrapAll"><span
                                                                              class="offerUnit_price">USD <?= $product['price']?></span>
                                                                              <span class="offerUnit_displayPrice">USD <?= $product['sale_price']?></span></span></div>
                                                                  <div class="offerUnit_discountWrap">
                                                                      <div class="offerUnit_discount"><?= $product['discount']?>% Off
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="offerUnit_ratingWrap">
                                                                  <div class="offerUnit_rating_rel">
                                                                      <div class="ratingBG_disabled"></div>
                                                                      <div class="ratingBG_active" style="width: 54.6px;"></div>
                                                                  </div><span class="numberRevsX">(6)</span>
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
</main>
