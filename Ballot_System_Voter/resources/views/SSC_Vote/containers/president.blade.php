<div class="p-6 rounded-lg mt-3 text-center justify-center flex flex-col" style="width: 20cm; height: auto; background-color: white;">
    <p class="font-bold text-2xl" style="font-size: 20px;">President</p>

    <div style="text-align: center; margin-bottom: -3cm;">
        <hr style="width: 80%; border-bottom: 1px solid black; margin: 0 auto;">
    </div>
    
    <!-- SBO candidate list -->
    <div class="p-6 rounded-lg items-center flex flex-wrap">
        @foreach($candidate as $candidateData)
            @if($candidateData->position_id == "POS50723")
            <div style="width: 150px; height: 150px; margin-left: 50px; margin-top: 3.5cm;">
                <img src="{{asset('images/' . $candidateData->picture_id . '.jpg')}}" alt="person" style="width: 100%; height: 100%;">
                <div class="flex items-center justify-center" style="align-items: flex-start;">
                    <input class="mr-1" type="radio" name="president" value="{{$candidateData->student_id}}" onchange="displayPresident()" style="margin-top: 5px;">
                    <p class="president">{{$candidateData->name}}</p>
                </div>
                <p style="display: none;">{{$candidateData->partylist}}</p>
            </div>
            @endif
        @endforeach
    </div>

    <!-- pang add ranig space sa ubos -->
    <div style="height: 80px; background-color: none;"></div>
</div>