<x-Core.layout :data="$data">

    <!-- menu main -->
    <x-MainMenu></x-MainMenu>
    <div class="backdrop"></div>


    <!-- Begin page content -->

    {{--    <main class="flex-shrink-0 main ">--}}
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <x-header :back="true"></x-header>

        <!-- page content start -->
        <x-ProfileHeader></x-ProfileHeader>

        <div class="main-container">

            <x-ProfileInfo></x-ProfileInfo>

            {{--WALLET AMOUNT--}}
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col ">
                                        <h6 class="mb-1 text-center">Wallet Amount: 1 KWD</h6>
                                        {{--                                        <p class="text-secondary">Curreny monthly usage: <span class="text-success">$ 10.0</span>--}}
                                        {{--                                        </p>--}}

                                    </div>
                                </div>
                                {{--                                <div class="progress h-5 mt-3">--}}
                                {{--                                    <div class="progress-bar bg-default" role="progressbar" style="width:35%"--}}
                                {{--                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--            Recent Transactions--}}
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">Teacher notes</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/user.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Ms. Shivani Dilux</h6>
                                        <p class="small text-secondary">15-1-2020, 8:00 am</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">Replied</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/user.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Mrs. Magon Strudio</h6>
                                        <p class="small text-secondary">15-1-2020, 8:00 am</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">Replied</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/user.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Mr. Jack Strudio</h6>
                                        <p class="small text-secondary">15-1-2020, 8:00 am</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-danger">Reply</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{--app services--}}
            {{--            <div class="container">--}}
            {{--                <div class="card">--}}
            {{--                    <div class="card-header">--}}
            {{--                        <h6 class="mb-0">Medical History</h6>--}}
            {{--                    </div>--}}
            {{--                    <div class="card-body px-0 pt-0">--}}
            {{--                        <div class="list-group list-group-flush border-top border-color">--}}

            {{--                            <a class="list-group-item list-group-item-action border-color">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-auto">--}}
            {{--                                        <div class="avatar avatar-50 bg-default-light text-default rounded">--}}
            {{--                                            <span class="material-icons">language</span>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="col align-self-center pl-0">--}}
            {{--                                        <h6 class="mb-1">Asthma</h6>--}}
            {{--                                        <p class="text-secondary">Choose preffered language</p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}

            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <x-Parents></x-Parents>

            <x-MedicalHistory></x-MedicalHistory>

        </div>

    </main>

    <!-- footer-->
    {{--    <x-BottomBar></x-BottomBar>--}}


    <!-- color settings style switcher -->
    <x-ColorPicker></x-ColorPicker>

</x-Core.layout>
