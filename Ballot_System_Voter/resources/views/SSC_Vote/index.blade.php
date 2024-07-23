<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>BUKSU COMELEC: please vote your SBO officer</title>
    <link rel="icon" href="{{ asset('images/tab_Icon.png') }}" type="image/x-icon" style="border-radius: 50%;">
</head>

<style>
    .background {
        background-image: url("{{ asset('images/header.jpg') }}");
        background-size: cover;
    }

    body {
        background-color: #EAE2EC;
    }
</style>

<!-- this is the index of SBO form -->

<body>
    <div class="flex justify-center h-screen">
        <div class="justify-center"> 

            <!-- header -->
            <div class="background p-6 rounded-lg mt-3 text-center justify-center items-center flex flex-col" style="height: 3cm; width: 20cm;">
                <p class="font-bold text-2xl" style="font-size: 30px;">Supreme Student Council</p>
            </div>

            <!-- form here -->
            <form action="{{route('ssc.vote')}}" method="POST" onsubmit="disableButton()">
            @csrf
            <!-- president container -->
            @include('SSC_Vote.containers.president')
            
            <!-- vice president -->
            @include('SSC_Vote.containers.vicePresident')

            <!-- senators -->
            @include('SSC_Vote.containers.senators')

            <!-- Footer -->
            <div class="background p-6 rounded-lg mt-3 text-center justify-center items-center flex flex-col" style="height: 3cm; width: 20cm; justify-content: flex-end;">
            <div style="width: 100%; display: flex; justify-content: flex-end;">
                @include('SSC_Vote.summary_modal.summary_modal')
            </div>
            </form>
            </div>
            <div style="height: 15px"></div> <!-- para naay space sa ubos -->
        </div>
    </div>
</body>

@if(Session::has('success'))
    <script>
        alert("{{ Session::get('success') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        alert("{{ Session::get('error') }}");
    </script>
@endif