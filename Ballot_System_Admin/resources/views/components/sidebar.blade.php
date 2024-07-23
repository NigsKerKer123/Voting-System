<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{route('dashboard.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="dashboardBtn">
               <img src="{{asset('images/sidebar/dashboard.svg')}}" alt="dashboardlogo">
               <span class="ms-3">Dashboard</span>
            </a>
         </li>

         <li>
            <a href="{{route('college.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="collegeBtn">
               <img src="{{asset('images/sidebar/college.svg')}}" alt="collegeLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Colleges</span>
            </a>
         </li>

         <li>
            <a href="{{route('partylist.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="partylistBtn">
               <img src="{{asset('images/sidebar/partylist.svg')}}" alt="PartyListsLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">PartyLists</span>
            </a>
         </li>
         
         <li>
            <a href="{{route('organization.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="organizationBtn">
               <img src="{{asset('images/sidebar/organization.svg')}}" alt="organizationLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Organizations</span>
            </a>
         </li>

         <li>
            <a href="{{route('position.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="positionBtn">
               <img src="{{asset('images/sidebar/position.svg')}}" alt="positionlogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Positions</span>
            </a>
         </li>

         <li>
            <a href="{{route('candidates.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="candidateBtn">
               <img src="{{asset('images/sidebar/candidate.svg')}}" alt="CandidateLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Candidates</span>
            </a>
         </li>

         <li>
            <a href="{{route('voters.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="voterBtn">
               <img src="{{asset('images/sidebar/voter.svg')}}" alt="votersLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Voters</span>
            </a>
         </li>

         <div class="flex justify-center p-2">
            <hr style="width:95%; height: 1px; border: none; background-color: gray;">
         </div>
         
         <li>
            <a href="{{route('sboVotes.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="sboBtn">
               <img src="{{asset('images/sidebar/casted.svg')}}" alt="sbologo">
               <span class="flex-1 ms-3 whitespace-nowrap">SBO Votes (temporary)</span>
            </a>
         </li>

         <li>
            <a href="{{route('sscVotes.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="sscBtn">
               <img src="{{asset('images/sidebar/casted.svg')}}" alt="ssclogo">
               <span class="flex-1 ms-3 whitespace-nowrap">SSC Votes (temporary)</span>
            </a>
         </li>

         <li>
            <a href="{{route('castedVotes.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group" id="castBtn">
               <img src="{{asset('images/sidebar/casted.svg')}}" alt="CastedLogo">
               <span class="flex-1 ms-3 whitespace-nowrap">Casted Votes</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<script>
   document.addEventListener("DOMContentLoaded", function() {
      function hovered() {
         var dashboard = document.getElementById('dashboardBtn');
         var position = document.getElementById('positionBtn');
         var organization = document.getElementById('organizationBtn');
         var colleges = document.getElementById('collegeBtn');
         var partylist = document.getElementById('partylistBtn');
         var candidates = document.getElementById('candidateBtn');
         var voters = document.getElementById('voterBtn');
         var casted = document.getElementById('castBtn');
         var sbo = document.getElementById('sboBtn');
         var ssc = document.getElementById('sscBtn');

         if (window.location.pathname == "/dashboard") {
            dashboard.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/positions") {
            position.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/organizations") {
            organization.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/colleges") {
            colleges.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/partylists") {
            partylist.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/candidates") {
            candidates.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/voters") {
            voters.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }  else if (window.location.pathname == "/castedVotes") {
            casted.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         } else if (window.location.pathname == "/sboVotes") {
            sbo.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         } else if (window.location.pathname == "/sscVotes") {
            ssc.classList = 'flex items-center p-2 text-gray-900 bg-gray-300 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
         }
      }
      hovered();
   });
</script>