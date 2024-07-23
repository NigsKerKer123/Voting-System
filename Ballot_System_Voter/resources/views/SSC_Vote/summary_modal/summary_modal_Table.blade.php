<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
        <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center">
                Roles
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Name
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center">
                Party
            </th>
        </tr>
        </tr>
    </thead>

    <tbody id="sscTable">
        <!-- President -->
        <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
            President
            </th>

            <td class="px-6 py-4" id="selectedPresident">No Candidate Selected</td>
            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800" id="selectedPresidentList">No Party Selected</td>
        </tr>

        <!-- Vice President -->
        <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                Vice President
            </th>

            <td class="px-6 py-4" id="selectedVicePresident">No Candidate Selected</td>
            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800" id="selectedVicePresidentList">No Party Selected</td>
        </tr>

        <!-- Senators section -->
        <tr class="border-b border-gray-200 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800" colspan="3" style="text-align: center;">
                Senator list selected
            </th>
        </tr>

         <!-- senator list -->
        <tbody id="senatorSectionList">
            <!-- append here -->
        </tbody>
    </tbody>
</table>

