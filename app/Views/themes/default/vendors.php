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
            <div class="bg-white px-2">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <span>12323 Items</span>
                    <div class="d-flex">
                        <span class="ml-2 px-2">sort direction: min </span>
                        <span class="ml-2 border-left pl-3">sort by: Date created</span>
                    </div>
                </div>
                <hr class='m-0 px-3'>
                <div class="px-2 m-sm-0">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($vendors as $vendor):?>
                        <li class="list-group-item d-flex">
                            <div class="w-100">
                                <div class="row justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-light mr-2">
                                            2 YRS
                                        </span>
                                        <h5 class="mt-0 mb-1"><?=$vendor['company']?></h5>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <button class='btn fav'><input type="checkbox" id="checkbox" />
                                            love
                                        </button>
                                        <button class='btn'>Plus</button>
                                    </div>
                                </div>
                                <div class="w-100 row justify-content-start pt-2 pb-4" id="vendor-badges">
                                    <span class="d-flex align-items-center pr-2">
                                        <img width='16' height='16' class='mr-1'
                                            src="https://img.alicdn.com/tfs/TB12YuyAuOSBuNjy0FdXXbDnVXa-32-32.png"
                                            alt="">
                                        Gold Vendor
                                    </span>
                                    <span class="d-flex align-items-center px-2">
                                        <img width='16' height='16' class='mr-1'
                                            src="https://img.alicdn.com/tfs/TB12YuyAuOSBuNjy0FdXXbDnVXa-32-32.png"
                                            alt="">
                                        verified vendor
                                    </span>
                                    <span class="d-flex align-items-center px-2">
                                        <img width='16' height='16' class='mr-1'
                                            src="https://img.alicdn.com/tfs/TB12YuyAuOSBuNjy0FdXXbDnVXa-32-32.png"
                                            alt="">
                                        Contact Details
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-4 p-xs-0">
                                                <div class="border p-2">
                                                    <img class="w-100 border" height='75'
                                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126.875' height='84.875' viewBox='0 0 126.875 84.875'%3E%3Cg id='Group_8' data-name='Group 8' transform='translate(-882 -522)'%3E%3Cg id='Group_7' data-name='Group 7'%3E%3Cg id='Group_6' data-name='Group 6'%3E%3Cg id='Group_5' data-name='Group 5'%3E%3Cg id='Group_4' data-name='Group 4'%3E%3Cg id='Rectangle_3' data-name='Rectangle 3' transform='translate(882 537)' fill='none' stroke='%23e3e3e3' stroke-width='1' stroke-dasharray='1 2'%3E%3Crect width='86' height='60' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='85' height='59' fill='none'/%3E%3C/g%3E%3Crect id='Rectangle_1' data-name='Rectangle 1' width='97' height='62' transform='translate(894 522)' fill='%23f7f7f7'/%3E%3Cellipse id='Ellipse_1' data-name='Ellipse 1' cx='12.5' cy='12' rx='12.5' ry='12' transform='translate(918 527)' fill='%23e3e3e3'/%3E%3Crect id='Rectangle_2' data-name='Rectangle 2' width='25' height='29' transform='matrix(1, -0.017, 0.017, 1, 929.749, 540.229)' fill='%23fff'/%3E%3Cpath id='Polygon_1' data-name='Polygon 1' d='M11,0,22,16H0Z' transform='translate(946 553)' fill='%23e3e3e3'/%3E%3Cpath id='Icon_awesome-arrow-circle-up' data-name='Icon awesome-arrow-circle-up' d='M.563,18A17.438,17.438,0,1,1,18,35.438,17.434,17.434,0,0,1,.563,18Zm10.1,2.032,5.091-5.309V27.563a1.683,1.683,0,0,0,1.688,1.688h1.125a1.683,1.683,0,0,0,1.688-1.687V14.723l5.091,5.309a1.689,1.689,0,0,0,2.412.028l.766-.773a1.681,1.681,0,0,0,0-2.384L19.2,7.573a1.681,1.681,0,0,0-2.384,0L7.474,16.9a1.681,1.681,0,0,0,0,2.384l.766.773A1.7,1.7,0,0,0,10.659,20.032Z' transform='translate(973.438 571.438)' fill='%23e3e3e3'/%3E%3Cg id='Group_3' data-name='Group 3' transform='translate(-0.009)'%3E%3Cg id='Group_2' data-name='Group 2' transform='translate(905.5 574.5)'%3E%3Cg id='Group_1' data-name='Group 1'%3E%3Cline id='Line_1' data-name='Line 1' x2='55' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_3' data-name='Line 3' x2='12' transform='translate(58.009)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_4' data-name='Line 4' x2='44' transform='translate(0 3)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_5' data-name='Line 5' x2='17' transform='translate(49.009 4)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A"
                                                        alt="Generic placeholder image">
                                                    <small class='line-clamp'>Laborum exercitation et cillum in nulla
                                                        culpa laborum excepteur enim.</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="border p-2">
                                                    <img class="w-100 border" height='75'
                                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126.875' height='84.875' viewBox='0 0 126.875 84.875'%3E%3Cg id='Group_8' data-name='Group 8' transform='translate(-882 -522)'%3E%3Cg id='Group_7' data-name='Group 7'%3E%3Cg id='Group_6' data-name='Group 6'%3E%3Cg id='Group_5' data-name='Group 5'%3E%3Cg id='Group_4' data-name='Group 4'%3E%3Cg id='Rectangle_3' data-name='Rectangle 3' transform='translate(882 537)' fill='none' stroke='%23e3e3e3' stroke-width='1' stroke-dasharray='1 2'%3E%3Crect width='86' height='60' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='85' height='59' fill='none'/%3E%3C/g%3E%3Crect id='Rectangle_1' data-name='Rectangle 1' width='97' height='62' transform='translate(894 522)' fill='%23f7f7f7'/%3E%3Cellipse id='Ellipse_1' data-name='Ellipse 1' cx='12.5' cy='12' rx='12.5' ry='12' transform='translate(918 527)' fill='%23e3e3e3'/%3E%3Crect id='Rectangle_2' data-name='Rectangle 2' width='25' height='29' transform='matrix(1, -0.017, 0.017, 1, 929.749, 540.229)' fill='%23fff'/%3E%3Cpath id='Polygon_1' data-name='Polygon 1' d='M11,0,22,16H0Z' transform='translate(946 553)' fill='%23e3e3e3'/%3E%3Cpath id='Icon_awesome-arrow-circle-up' data-name='Icon awesome-arrow-circle-up' d='M.563,18A17.438,17.438,0,1,1,18,35.438,17.434,17.434,0,0,1,.563,18Zm10.1,2.032,5.091-5.309V27.563a1.683,1.683,0,0,0,1.688,1.688h1.125a1.683,1.683,0,0,0,1.688-1.687V14.723l5.091,5.309a1.689,1.689,0,0,0,2.412.028l.766-.773a1.681,1.681,0,0,0,0-2.384L19.2,7.573a1.681,1.681,0,0,0-2.384,0L7.474,16.9a1.681,1.681,0,0,0,0,2.384l.766.773A1.7,1.7,0,0,0,10.659,20.032Z' transform='translate(973.438 571.438)' fill='%23e3e3e3'/%3E%3Cg id='Group_3' data-name='Group 3' transform='translate(-0.009)'%3E%3Cg id='Group_2' data-name='Group 2' transform='translate(905.5 574.5)'%3E%3Cg id='Group_1' data-name='Group 1'%3E%3Cline id='Line_1' data-name='Line 1' x2='55' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_3' data-name='Line 3' x2='12' transform='translate(58.009)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_4' data-name='Line 4' x2='44' transform='translate(0 3)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_5' data-name='Line 5' x2='17' transform='translate(49.009 4)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A"
                                                        alt="Generic placeholder image">
                                                    <small class='line-clamp'>Amet laborum exercitation.</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="border p-2">
                                                    <img class="w-100 border" height='75'
                                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126.875' height='84.875' viewBox='0 0 126.875 84.875'%3E%3Cg id='Group_8' data-name='Group 8' transform='translate(-882 -522)'%3E%3Cg id='Group_7' data-name='Group 7'%3E%3Cg id='Group_6' data-name='Group 6'%3E%3Cg id='Group_5' data-name='Group 5'%3E%3Cg id='Group_4' data-name='Group 4'%3E%3Cg id='Rectangle_3' data-name='Rectangle 3' transform='translate(882 537)' fill='none' stroke='%23e3e3e3' stroke-width='1' stroke-dasharray='1 2'%3E%3Crect width='86' height='60' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='85' height='59' fill='none'/%3E%3C/g%3E%3Crect id='Rectangle_1' data-name='Rectangle 1' width='97' height='62' transform='translate(894 522)' fill='%23f7f7f7'/%3E%3Cellipse id='Ellipse_1' data-name='Ellipse 1' cx='12.5' cy='12' rx='12.5' ry='12' transform='translate(918 527)' fill='%23e3e3e3'/%3E%3Crect id='Rectangle_2' data-name='Rectangle 2' width='25' height='29' transform='matrix(1, -0.017, 0.017, 1, 929.749, 540.229)' fill='%23fff'/%3E%3Cpath id='Polygon_1' data-name='Polygon 1' d='M11,0,22,16H0Z' transform='translate(946 553)' fill='%23e3e3e3'/%3E%3Cpath id='Icon_awesome-arrow-circle-up' data-name='Icon awesome-arrow-circle-up' d='M.563,18A17.438,17.438,0,1,1,18,35.438,17.434,17.434,0,0,1,.563,18Zm10.1,2.032,5.091-5.309V27.563a1.683,1.683,0,0,0,1.688,1.688h1.125a1.683,1.683,0,0,0,1.688-1.687V14.723l5.091,5.309a1.689,1.689,0,0,0,2.412.028l.766-.773a1.681,1.681,0,0,0,0-2.384L19.2,7.573a1.681,1.681,0,0,0-2.384,0L7.474,16.9a1.681,1.681,0,0,0,0,2.384l.766.773A1.7,1.7,0,0,0,10.659,20.032Z' transform='translate(973.438 571.438)' fill='%23e3e3e3'/%3E%3Cg id='Group_3' data-name='Group 3' transform='translate(-0.009)'%3E%3Cg id='Group_2' data-name='Group 2' transform='translate(905.5 574.5)'%3E%3Cg id='Group_1' data-name='Group 1'%3E%3Cline id='Line_1' data-name='Line 1' x2='55' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_3' data-name='Line 3' x2='12' transform='translate(58.009)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_4' data-name='Line 4' x2='44' transform='translate(0 3)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_5' data-name='Line 5' x2='17' transform='translate(49.009 4)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A"
                                                        alt="Generic placeholder image">
                                                    <small class='line-clamp'>Amet laborum exercitation.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <p>So how was the movie?</p>
                                            <form class='stars'>
                                                <input type="radio" name='stars' value='5' id='five'
                                                    class='star star-input'>
                                                <label for="five"><i class='fa fa-star'></i></label>
                                                <input type="radio" name='stars' value='4' id='four'
                                                    class='star star star-input'>
                                                <label for="four"><i class='fa fa-star'></i></label>
                                                <input type="radio" name='stars' value='3' id='three'
                                                    class='star star star-input'>
                                                <label for="three"><i class='fa fa-star'></i></label>
                                                <input type="radio" name='stars' value='2' id='two'
                                                    class='star star star-input'>
                                                <label for="two"><i class='fa fa-star'></i></label>
                                                <input type="radio" name='stars' value='1' id='one'
                                                    class='star star star-input' checked>
                                                <label for="one"><i class='fa fa-star '></i></label>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul>
                                            <li class="py-1"><b>Main Products</b> : shoes,clothes,belts,jwellery</li>
                                            <li class="py-1"><b>country/Region</b> : Uganda</li>
                                            <li class="py-1"><b>Company size</b> : 50 - 300 Employees</li>
                                            <li class="py-1"><b>Total Revenue</b> : Below $1 Million dollars</li>
                                            <li class="py-1"><b>response Rate</b> : 50%</li>
                                        </ul>
                                        <div class="d-flex mt-2 justify-content-between">
                                            <div class="btn btn-outline-primary btn-sm">
                                                contact Vendor
                                            </div>
                                            <div class="btn btn-primary btn-sm ml-4">
                                                Leave a message
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
