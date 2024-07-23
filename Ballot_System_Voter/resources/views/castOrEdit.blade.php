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
        <div class="bg-gray-100 flex rounded-2xl shadow-lg w-[50rem] h-[50rem] p-5 items-center">
            <div class="px-8 md:px-13 w-full h-full">
                <div class="flex items-center" style="margin-bottom: 20px;">
                    <img src="{{ asset('images/logo.jpg') }}" style="border-radius: 50%; width: 2cm; height: auto;">
                    <h2 class="font-bold text-2xl ml-2" style="color: #240A34;">Buk<span style="color: #FC9D22;">SU</span> COMELEC</h2>
                </div>
                
                <p class="font-bold flex justify-center">Overall Summary</p>

                <div class="p-4 md:p-5 space-y-4" style="width: auto; height: 15cm;">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
                        <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400 p-5">
                            <li>
                                <span class="font-bold" style="font-size: 1.5rem; color: black;">Student Body Organization ({{$user->college}})</span>
                                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                    <li class="p-1"><span>GOVERNOR: </span><span class="font-bold">{{ optional($governor)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>VICE GOVERNOR: </span><span class="font-bold">{{ optional($vice_governor)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>SECRETARY: </span><span class="font-bold">{{ optional($secretary)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>ASST. SECRETARY: </span><span class="font-bold">{{ optional($associate_secretary)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>TREASURER: </span><span class="font-bold">{{ optional($treasurer)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>ASST. TREASURER: </span><span class="font-bold">{{ optional($associate_treasurer)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>AUDITOR: </span><span class="font-bold">{{ optional($auditor)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>PUBLIC RELATION OFFICER: </span><span class="font-bold">{{ optional($public_relation_officer)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>2ND YEAR REPRESENTATIVE: </span><span class="font-bold">{{ optional($second_rep)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>3RD YEAR REPRESENTATIVE: </span><span class="font-bold">{{ optional($third_rep)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>4TH YEAR REPRESENTATIVE: </span><span class="font-bold">{{ optional($fourth_rep)->name ?? 'No candidate selected' }}</span></li>
                                </ul>
                            </li>

                            <li>
                                <span class="font-bold" style="font-size: 1.5rem; color: black;">Supreme Student Council</span>
                                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                    <li class="p-1"><span>PRESIDENT: </span><span class="font-bold">{{ optional($pres)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>VICE PRESIDENT: </span><span class="font-bold">{{ optional($vice_pres)->name ?? 'No candidate selected' }}</span></li>
                                    <li class="p-1"><span>SECRETARY: </span>
                                        <ul>
                                            @foreach($senators as $senatorsData)
                                                <li class="font-bold ml-5">- {{$senatorsData->name}}</li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="flex justify-end mt-3">
                    
                <form id="voteForm" action="{{route('castOrEdit.cast')}}" method="POST" onsubmit="disableButton()">
                        @csrf
                        <button type="submit" id="submitButton1" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Cast your vote Now!</button>
                </form>
                </div>
            </div>
        </div>
        </section>
    </div>

    @include("editModal")
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
    function disableButton() {
        document.getElementById('submitButton1').disabled = true;
    }
</script>