<x-Core.layout :data="$data">
    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
        <!-- Fixed navbar -->
        <x-header></x-header>

        <div class="main-container">

            <div class="container mb-4">
                <p class="text-center text-secondary mb-1">Enter Amount to send</p>
                <div class="form-group mb-1">
                    <input type="text" class="form-control large-gift-card" value="100.00" placeholder="00.00">
                </div>

                <x-SwiperPeople></x-SwiperPeople>

            </div>

            <x-ViaWallet></x-ViaWallet>

            <x-ViaCard></x-ViaCard>

            <div class="container text-center pt-2">
                <a href="thank_you.html" class="btn btn-default mb-2 mx-auto rounded">Pay Now</a>
            </div>
        </div>
    </main>

</x-Core.layout>
