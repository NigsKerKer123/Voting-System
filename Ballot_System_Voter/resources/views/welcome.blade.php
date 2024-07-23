<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>BUKSU COMELEC: Welcome to bukSU COMELEC</title>
    <link rel="icon" href="{{ asset('images/tab_Icon.png') }}" type="image/x-icon" style="border-radius: 50%;">

</head>

<style>
    body {
        background-image: url("{{ asset('images/background.jpg') }}");
        background-size: cover;
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="mystyle">
        <section class="min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <!-- image -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="{{asset('images/welcome.jpg')}}">
            </div>
            
            <div class="md:w-1/2 px-8 md:px-13" style="height: 12cm;">
                <div class="flex items-center" style="margin-bottom: 1cm;">
                    <img src="{{ asset('images/logo.jpg') }}" style="border-radius: 50%; width: 2cm; height: auto;">
                    <h2 class="font-bold text-2xl ml-2" style="color: #240A34;">Buk<span style="color: #FC9D22;">SU</span> COMELEC</h2>
                </div>

                <div class="mb-3">
                    <p class="tracking-tight text-gray-500 md:text-lg dark:text-gray-400"><span style="font-size: 24px; font-weight: bold;">Hello there!</span> <span class="font-semibold">{{$user->name}}</span> from <span class="font-semibold">{{$user->course}}</span> program within the <span class="font-semibold">{{$user->college}}</span>, <span style="font-size: 21px; font-weight: bold;">Welcome</span> to the BukSU COMELEC voting platform.</p>

                    <br>

                    <p class="tracking-tight text-gray-500 md:text-lg dark:text-gray-400"><span style="font-size: 24px; font-weight: bold;">Once</span> you press "Vote" you are not allowed to close the program.</p>

                    <br>

                    <p class="tracking-tight text-gray-500 md:text-lg dark:text-gray-400"><span style="font-size: 24px; font-weight: bold;">Remember,</span>  your vote shapes our future, so choose wisely for the greater good.</p>
                </div>
                
                <div class="flex justify-center">
                    <button class="bg-[#240A34] rounded-xl text-white py-2 hover:scale-105 duration-300 mt-2" style="width: 4cm;" onclick="window.location.href='/sbo'">VOTE!</button>
                </div>
                
            </div>
        </div>
        </section>
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