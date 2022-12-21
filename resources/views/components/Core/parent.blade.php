<x-Core.layout :data="$data">
    <!-- screen loader -->
    {{--<x-ScreenLoader></x-ScreenLoader>--}}

    <!-- menu main -->
    <x-MainMenu></x-MainMenu>

    <div class="backdrop"></div>
    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <x-header :back="false"></x-header>

        {{-- wallet amount --}}
        <x-Wallet></x-Wallet>
        <div class="main-container">
            <!-- page content start -->
{{--            <x-IconSwiper></x-IconSwiper>--}}

            <!-- Swiper people -->
{{--            <x-SwiperPeople></x-SwiperPeople>--}}

            {{-- status --}}
            <x-Status></x-Status>

            {{-- Actions --}}
            <x-Actions></x-Actions>



            <!-- PWA add to home display -->
            {{--            <x-PWA></x-PWA>--}}

            <!-- Gift cards -->
{{--                        <x-GiftCard></x-GiftCard>--}}

            {{-- upcoming payments --}}
            <x-UpcomingPayments></x-UpcomingPayments>

            {{-- select menu type --}}
{{--                        <x-SelectMenu></x-SelectMenu>--}}

            {{-- Most exciting feature --}}
{{--            <x-MostExciting></x-MostExciting>--}}

            {{--About us--}}
{{--                        <x-AboutUs></x-AboutUs>--}}
        </div>
    </main>

</x-Core.layout>
