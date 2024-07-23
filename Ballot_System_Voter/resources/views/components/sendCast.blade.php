<!DOCTYPE html>
<html lang="en"">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buksu Comelec: Casted Vote</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    
    <body>
        <div class="p-4 md:p-5 space-y-4" style="width: auto; height: 15cm;">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
                <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400 p-5">
                    <li>
                        <span class="font-bold" style="font-size: 1.5rem; color: black;">Reference key: {{$refkey}}</span>
                    </li>

                    <li>
                        <span class="font-bold" style="font-size: 1.5rem; color: black;">Supreme Student Council</span>
                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                            <li class="p-1"><span>PRESIDENT: </span><span class="font-bold">{{$pres}}</span></li>
                            <li class="p-1"><span>VICE PRESIDENT: </span><span class="font-bold">{{$vice_pres}}</span></li>
                            <li class="p-1"><span>SENATORS: </span>
                                <ul>
                                    @foreach($senatorsArray as $senatorsData)
                                        <li class="font-bold ml-5">- {{$senatorsData}}</li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <span class="font-bold" style="font-size: 1.5rem; color: black;">Student Body Organization ({{$college}})</span>
                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                            <li class="p-1"><span>GOVERNOR: </span><span class="font-bold">{{$gov}}</span></li>
                            <li class="p-1"><span>VICE GOVERNOR: </span><span class="font-bold">{{$vice_gov}}</span></li>
                            <li class="p-1"><span>SECRETARY: </span><span class="font-bold">{{$sec}}</span></li>
                            <li class="p-1"><span>ASST. SECRETARY: </span><span class="font-bold">{{$ass_sec}}</span></li>
                            <li class="p-1"><span>TREASURER: </span><span class="font-bold">{{$tres}}</span></li>
                            <li class="p-1"><span>ASST. TREASURER: </span><span class="font-bold">{{$ass_tres}}</span></li>
                            <li class="p-1"><span>AUDITOR: </span><span class="font-bold">{{$audit}}</span></li>
                            <li class="p-1"><span>PUBLIC RELATION OFFICER: </span><span class="font-bold">{{$pub_rel}}</span></li>
                            <li class="p-1"><span>2ND YEAR REPRESENTATIVE: </span><span class="font-bold">{{$second}}</span></li>
                            <li class="p-1"><span>3RD YEAR REPRESENTATIVE: </span><span class="font-bold">{{$third}}</span></li>
                            <li class="p-1"><span>4TH YEAR REPRESENTATIVE: </span><span class="font-bold">{{$fourth}}</span></li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </body>
</html>