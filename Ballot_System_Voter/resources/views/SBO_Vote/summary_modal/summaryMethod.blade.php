<script>
    //* governor
    function displayGovernor() {
        var Candidates = document.getElementsByName("governor");
        var selectedCandidate;
        var selectedParty;

        console.log(Candidates)

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".governor");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedGovernor");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedGovernorList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* vice_governor
    function displayViceGovernor() {
        var Candidates = document.getElementsByName("vice_governor");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".vice_governor");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedViceGovernor");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedViceGovernorList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* secretary
    function displaySecretary() {
        var Candidates = document.getElementsByName("secretary");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".secretary");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedSecretary");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedSecretaryList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* associate_secretary
    function displayAssociate_secretary() {
        var Candidates = document.getElementsByName("associate_secretary");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".associate_secretary");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedAssociateSecretary");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedAssociateSecretaryList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* treasurer
    function displayTreasurer() {
        var Candidates = document.getElementsByName("treasurer");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".treasurer");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedTreasurer");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedTreasurerList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* associate_treasurer
    function displayAssociate_treasurer() {
        var Candidates = document.getElementsByName("associate_treasurer");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".associate_treasurer");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedAssociateTreasurer");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedAssociateTreasurerList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* auditor
    function displayAuditor() {
        var Candidates = document.getElementsByName("auditor");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".auditor");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedAuditor");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedAuditorList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* public_relation_officer
    function displayPublic_relation_officer() {
        var Candidates = document.getElementsByName("public_relation_officer");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".public_relation_officer");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedPublicRelationOfficer");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedPublicRelationOfficerList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* 2nd_rep
    function display2nd_rep() {
        var Candidates = document.getElementsByName("second_rep");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".second_rep");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedSecondRepresentative");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedSecondRepresentativeList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* 3rd_rep
    function display3rd_rep() {
        var Candidates = document.getElementsByName("third_rep");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".third_rep");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedThirdRepresentative");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedThirdRepresentativeList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }

    //* 4th_rep
    function display4th_rep() {
        var Candidates = document.getElementsByName("fourth_rep");
        var selectedCandidate;
        var selectedParty;

        for (var i = 0; i < Candidates.length; i++) {
            if (Candidates[i].checked) {
                var nameElement =
                Candidates[i].parentElement.querySelector(".fourth_rep");
                selectedCandidate = nameElement.textContent;

                var partyElement =
                Candidates[i].parentElement.nextElementSibling;
                selectedParty = partyElement.textContent;

                break;
            }
        }

        var selectedCandidateCell = document.getElementById("selectedFourthRepresentative");
        selectedCandidateCell.textContent =
            selectedCandidate || "No candidate selected";

        var selectedPartyCell = document.getElementById("selectedFourthRepresentativeList");
        selectedPartyCell.textContent = selectedParty || "No party selected";

        console.log(
            selectedCandidateCell.textContent +
                " + " +
                selectedPartyCell.textContent
        );
    }
</script>