<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>BUKSU COMELEC: Login to Student Voting System</title>
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
                <img class="rounded-2xl" src="{{asset('images/peaceOut.gif')}}">
            </div>

            <div class="md:w-1/2 px-8 md:px-13">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.jpg') }}" style="border-radius: 50%; width: 2cm; height: auto;">
                    <h2 class="font-bold text-2xl ml-2" style="color: #240A34;">Buk<span style="color: #FC9D22;">SU</span> COMELEC</h2>
                </div>
                
                <p class="font-bold text-gray-500" style="font-size: 25px; text-align:center;">Thank you for casting your vote! Please check your email inbox or <span style="color:red;">spam</span> for your Casted Vote receipt!</p>

                <div class="flex justify-center">
                    <button type="button" class="bg-[#240A34] rounded-xl text-white py-2 hover:scale-105 duration-300 mt-4" style="width: auto; padding: 10px;" onclick="window.location.href='/login'">Go back to Login</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function disableButton() {
            document.getElementById('submitButton1').disabled = true;
        }
    });
</script>