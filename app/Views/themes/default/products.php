<main role="main" class="container mt-5">
    <div class="d-flex align-items-center p-3 mb-4 text-white-50 bg-purple rounded shadow-xs bg-primary">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48"
            height="48">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
            <small>Since 2011</small>
        </div>
    </div>
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
                                        <ul data-reactroot="" class="offers_WrapperX99 relFontSize_util">
                                            <?php foreach ($products as $key => $value) {
                                              include 'product.php';
                                            }?>
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
