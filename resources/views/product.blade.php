@extends('templade')
@section('title')
    گوشی اپل | محمد شاپ
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active"></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/ihpone1/1.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/ihpone1/2.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/ihpone1/3.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/ihpone1/4.jpg" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>گوشی موبایل اپل مدل iPhone 13 Pro Max A2644 </h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <div class="d-flex md-3">
                        <small class="pt-1">نطر شما:</small>
                        <div class="text-primary ml-2" dir="ltr">
                            <i class="far fa-star rate" onmouseover="draw_rating(1)" onmouseleave="clear_rate()" onclick="add_rate(1)"></i>
                            <i class="far fa-star rate" onmouseover="draw_rating(2)" onmouseleave="clear_rate()" onclick="add_rate(2)"></i>
                            <i class="far fa-star rate" onmouseover="draw_rating(3)" onmouseleave="clear_rate()" onclick="add_rate(3)"></i>
                            <i class="far fa-star rate" onmouseover="draw_rating(4)" onmouseleave="clear_rate()" onclick="add_rate(4)"></i>
                            <i class="far fa-star rate" onmouseover="draw_rating(5)" onmouseleave="clear_rate()" onclick="add_rate(5)"></i>
                        </div>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">
                        56,500,000 هزار تومان
                    </h3>
                    <p class="mb-4">هشدار سامانه همتا: در صورت انجام معامله، از فروشنده کد فعالسازی را گرفته و حتما در حضور ایشان، دستگاه را از طریق #7777*، برای سیمکارت خود فعالسازی نمایید. آموزش تصویری در آدرس اینترنتی hmti.ir/06 امکان برگشت کالا در گروه موبایل با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب کالا باز نشده باشد. تمام گوشی‌های دیجی‌کالا ضمانت رجیستری دارند. در صورت وجود مشکل رجیستری، می‌توانید بعد از مهلت قانونی ۳۰ روزه، گوشی خریداری‌شده را مرجوع کنید.</p>
                    <div class="d-flex mb-3">

                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">رنگ</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">سفید</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">سبز</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">خاکسری</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">طلای</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">آبی روشن</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> اصافه کردن به سبد خرید</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
                <div class="nav nav-tabs mb-4">
                    <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">معرفی
                    </a>
                    <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">مشخصات

                    </a>
                    <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">ثبت نظرات(1)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">معرفی
                        </h4>
                        <p>گوشی‌های هوشمند خانواده آیفون 13 در قالب چهار گوشی هوشمند آیفون 13 پرو مکس، آیفون 13 پرو، آیفون 13‌ و آیفون 13 مینی معرفی شدند. پرچمداران جدید اپل این بار قدرتمند‌تر از همیشه پا به عرصه رقابت گذاشته اند تا در رقابتی بسیار جذاب، عملکردی بهتر به نسبت پرچمداران اندرویدی به نمایش بگذارد. از جمله اصلی‌ترین تغییرات در نظر گرفته شده برای این گوشی های هوشمند در مقایسه با پرچمداران خانواده آیفون 12 می‌توانیم به سنسور‌های دوربین قدرتمند‌تر، پردازنده فوق العاده با عملکرد بهتر و خیره کننده به نسبت نسل قبلی، تنوع رنگی بالا، صفحه نمایش به‌مراتب با‌کیفیت‌تراشاره کنیم. در این بررسی به‌سراغ آیفون 13 پرو مکس به عنوان گل سرسبد گوشی های هوشمند این خانواده رفته ایم تا ببینیم چه مشخصاتی را با خودش به همراه داشته و به نسبت آیفون 12 پرو مکس چه تغییرات در مشخصات فنی در نظر گرفته شده دارد.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">مشخصات

                        </h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        ابعاد

                                    </li>
                                    <li class="list-group-item px-0">
                                        وزن


                                    </li>
                                    <li class="list-group-item px-0">
                                        فناوری صفحه‌نمایش

                                    </li>
                                    <li class="list-group-item px-0">
                                        بازه‌ی اندازه صفحه نمایش

                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        ۱۶۰.۸x۷۸.۱x۷.۷

                                    </li>
                                    <li class="list-group-item px-0">
                                        ۲۴۰ گرم

                                    </li>
                                    <li class="list-group-item px-0">
                                        Super Retina XDR OLED

                                    </li>
                                    <li class="list-group-item px-0">
                                        ۶.۰ اینچ و بزرگتر

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">ثبت نظر</h4>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">امتیاز بدهید:</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form method="post" id="form-comment-">
                                    <div class="form-group">
                                        <label for="message">نطر خودرا تایپ کنید</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="hidden" name="product_id" value="">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                        <input type="button"  onclick='send_comment()' value="ثبت نظر" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">کالاهای مشابه</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                @foreach($Products as $product)

                    <div class="owl-carousel related-carousel">
                        <div class="product-item bg-light">

                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h6>{{ $product->price}}</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>


    <script>
        var stars = document.getElementsByClassName("rate");
        function add_rate(x){

            var json_data = {
                product_id : "{{$product->id}}",
                score : x
            };
            console.log('json_data', json_data);
            var my_data = new FormData;
            my_data.append('json', JSON.stringify(json_data));
            fetch("/Star_product", {
                method: "post",
                data: my_data
            })

                .then(result =>result.text())
                .then(result => {
                    alert(".امتیاز شما ثبت شد")
                });
        }
        function draw_rating(x) {
            for(var i = 0; i < x; i++ ){
                stars[i].classList.add("fas");
                stars[i].classList.remove("far");
            }
            for(var i = x; i < 5; i++ ){
                stars[i].classList.add("far");
                stars[i].classList.remove("fas");
            }
        }
        function clear_rate() {
            for(var i = 0; i < 5; i++ ){
                stars[i].classList.add("far");
                stars[i].classList.remove("fas");
            }
        }
    </script>
@endsection
