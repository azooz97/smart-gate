<x-Core.layout>
    <x-ScreenLoader></x-ScreenLoader>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
        <!-- Fixed navbar -->
        <x-header></x-header>

{{--        <div class="container mb-4 text-center">--}}
{{--            <div class="row mb-4 justify-content-center">--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="icon icon-40 bg-default-light text-default mb-2 rounded-circle"><span--}}
{{--                            class="material-icons">account_circle</span></div>--}}
{{--                    <p class="small text-white">Contact</p>--}}
{{--                </div>--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="icon icon-40 bg-default-light text-default mb-2 rounded-circle"><span--}}
{{--                            class="material-icons">qr_code_scanner</span></div>--}}
{{--                    <p class="small text-white">QR Code</p>--}}
{{--                </div>--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="icon icon-40 bg-default-light text-default mb-2 rounded-circle"><span--}}
{{--                            class="material-icons">account_balance</span></div>--}}
{{--                    <p class="small text-white">Bank</p>--}}
{{--                </div>--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="icon icon-40 bg-default-light text-default mb-2 rounded-circle"><span--}}
{{--                            class="material-icons">account_balance_wallet</span></div>--}}
{{--                    <p class="small text-white">Wallet</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="main-container">
            <div class="container mb-4">
                <p class="text-center text-secondary mb-1">Enter Amount to send</p>
                <div class="form-group mb-1">
                    <input type="text" class="form-control large-gift-card" value="100.00" placeholder="00.00">
                </div>
                <p class="text-center text-secondary mb-4">Available: $ 1,050.00 </p>

                <div class="swiper-container swiper-users text-center mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user2.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Alisia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user3.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Maxsmith</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user4.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Jenelia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user2.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Alisia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user3.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Maxsmith</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user4.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Jenelia</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="img/user1.png" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small>Errica</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email addres or User id">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Your Message"></textarea>
                </div>
            </div>

            <div class="container mb-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="radio" name="paynow" class="custom-control-input" id="pay1" checked="">
                                    <label class="custom-control-label" for="pay1"></label>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <h6 class="subtitle mb-0">Pay from wallet</h6>
                            </div>
                            <div class="col-auto pl-0">
                                <p class="text-secondary text-center"><a href="addfund.html">Add</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="radio" name="paynow" class="custom-control-input" id="pay2" checked="">
                                    <label class="custom-control-label" for="pay2"></label>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <h6 class="subtitle mb-0">Pay via card</h6>
                            </div>
                            <div class="col-auto pl-0">
                                <p class="text-secondary text-center"><a href="addcard.html">Add </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="swiper-container swipercards">
                            <div class="swiper-wrapper pb-4">

                                <div class="swiper-slide pr-2">
                                    <div class="card border-0 bg-default text-white">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <i class="material-icons vm text-template">credit_card</i>
                                                </div>
                                                <div class="col pl-0">
                                                    <h6 class="mb-1">Visa</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-0 mt-3">4444 5264 2541 26651</h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0">26/21</p>
                                                    <p class="small ">Expiry date</p>
                                                </div>
                                                <div class="col-auto align-self-center text-right">
                                                    <p class="mb-0">Agnish Carvan</p>
                                                    <p class="small">Card Holder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card border-0 bg-warning text-white">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <i class="material-icons vm text-template">credit_card</i>
                                                </div>
                                                <div class="col pl-0">
                                                    <h6 class="mb-1">Maestro</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-0 mt-3">4444 5264 2541 26651</h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0">26/21</p>
                                                    <p class="small ">Expiry date</p>
                                                </div>
                                                <div class="col-auto align-self-center text-right">
                                                    <p class="mb-0">Agnish Carvan</p>
                                                    <p class="small">Card Holder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card border-0 bg-danger text-white">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <i class="material-icons vm text-template">credit_card</i>
                                                </div>
                                                <div class="col pl-0">
                                                    <h6 class="mb-1">Payme</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-0 mt-3">4444 5264 2541 26651</h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0">26/21</p>
                                                    <p class="small ">Expiry date</p>
                                                </div>
                                                <div class="col-auto align-self-center text-right">
                                                    <p class="mb-0">Agnish Carvan</p>
                                                    <p class="small">Card Holder</p>
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

{{--            <div class="container mb-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-switch">--}}
{{--                                    <input type="radio" name="paynow" class="custom-control-input" id="pay3" checked="">--}}
{{--                                    <label class="custom-control-label" for="pay3"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col pl-0">--}}
{{--                                <h6 class="subtitle mb-0">Pay via NetBannking</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="container text-center">
                <a href="thank_you.html" class="btn btn-default mb-2 mx-auto rounded">Pay Now</a>
            </div>
        </div>
    </main>
</x-Core.layout>
