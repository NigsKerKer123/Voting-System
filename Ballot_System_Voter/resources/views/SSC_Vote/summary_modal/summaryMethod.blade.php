<script>
    //* President
    function displayPresident() {
        var Candidates = document.getElementsByName("president");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".president");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedPresident");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedPresidentList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    function displayVicePresident() {
        var Candidates = document.getElementsByName("vicePresident");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".vicePresident");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedVicePresident");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedVicePresidentList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    function checkSelectedSenator() {
            var checkboxes = document.getElementsByClassName("senator");
            var countElement = document.getElementById("countSenator");
            var senatorList = document.getElementById("senatorSectionList");
            var selectedCandidate;
            var selectedParty;
            var CheckedCount = 0;

            senatorList.innerHTML = '';
            for(var i= 0; i < checkboxes.length; i++){
                if(checkboxes[i].checked){
                    CheckedCount++;

                    if(CheckedCount > 12){
                        alert("You already selected senators Maximum of 12");
                        checkboxes[i].checked = false;
                        return;
                    }

                    var nameElement =
                    checkboxes[i].parentElement.querySelector(".senatorName");
                    selectedCandidate = nameElement.textContent;

                    var partyElement =
                    checkboxes[i].parentElement.nextElementSibling;
                    selectedParty = partyElement.textContent;
                    
                    // Create a new table row
                    var newRow = document.createElement("tr");
                    newRow.className = "senatorList border-b border-gray-200 dark:border-gray-700";

                    // Create table cells for senator information
                    var thCell = document.createElement("th");
                    thCell.scope = "row";
                    thCell.className = "px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800";
                    thCell.textContent = CheckedCount;

                    var tdCandidateCell = document.createElement("td");
                    tdCandidateCell.className = "px-6 py-4";
                    tdCandidateCell.textContent = selectedCandidate;

                    var tdPartyCell = document.createElement("td");
                    tdPartyCell.className = "px-6 py-4 bg-gray-50 dark:bg-gray-800";
                    tdPartyCell.textContent = selectedParty;

                    // Append cells to the new row
                    newRow.appendChild(thCell);
                    newRow.appendChild(tdCandidateCell);
                    newRow.appendChild(tdPartyCell);

                    // Append the new row to the table body
                    senatorList.appendChild(newRow);

                    countElement.textContent = "(" + CheckedCount + ")";

                    console.log(selectedCandidate + " + " + selectedParty + " " + CheckedCount);
                    console.log();
                }
            }
        }
</script>