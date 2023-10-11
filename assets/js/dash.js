// JavaScript
var userID = document.cookie.split('; ').find(cookie => cookie.startsWith('loggedUser='));
// console.log(userID);
if (userID) {
    userID = userID.split('=')[1];
    console.log(userID);

    // JavaScript (using jQuery for simplicity)
    $.ajax({
        url: '../assets/php_process/api.php', // PHP script URL
        method: 'GET',
        data: {
            userID: userID
        },
        success: function(response) {
            console.log(response["response"]);
            // Decode the base64 response
            var decodedResponse = atob(response["response"]);

            // Now you have the decoded data as a string
            console.log(decodedResponse);

            // You can parse the JSON if needed
            var userData = JSON.parse(decodedResponse);

            // Call the function to add data to the HTML
            addDataToHTML(userData);
        },
        error: function() {
            console.error('Error fetching data from PHP');
        }
    });
}



// Function to create and populate a table row
function createTableRow(label, value) {
    const row = document.createElement("tr");
    const th = document.createElement("th");
    th.textContent = label;
    const td = document.createElement("td");
    td.textContent = value;
    row.appendChild(th);
    row.appendChild(td);
    return row;
}

// Function to add data to the HTML structure
function addDataToHTML(data) {
    const pvt = document.querySelector(".pvt table");
    const bankInfo = document.querySelector(".bankInfo table");

    data.forEach(item => {
        // Personal Info
        pvt.appendChild(createTableRow("Name", ": "+item.Name));
        pvt.appendChild(createTableRow("D.O.B", ": "+item.DOB));
        pvt.appendChild(createTableRow("Email", ": "+item.Email));
        pvt.appendChild(createTableRow("Phone", ": "+item.Phone));
        pvt.appendChild(createTableRow("Adhaar", ": "+item.Adhaar));
        pvt.appendChild(createTableRow("Address", ": "+item.Address));

        // Banking Info
        bankInfo.appendChild(createTableRow("Account No.", ": "+item.AccountNumber));
        bankInfo.appendChild(createTableRow("IFSC Code", ": "+item.IFSCCode));
        bankInfo.appendChild(createTableRow("HomeBranch", ": "+item.HomeBranch));
        bankInfo.appendChild(createTableRow("Acc. Type", ": "+item.AccountType));
        bankInfo.appendChild(createTableRow("CIBIL Score", ": "+item.CIBILScore));
        bankInfo.appendChild(createTableRow("Acc. Status", ": "+item.AccountStatus));
        bankInfo.appendChild(createTableRow("Nominee", ": "+item.NomineeName));
        bankInfo.appendChild(createTableRow("Phone", ": "+item.NomineePhone));
        bankInfo.appendChild(createTableRow("Email", ": "+item.NomineeEmail));
        bankInfo.appendChild(createTableRow("RM", ": "+item.RelationshipManagerName));
        bankInfo.appendChild(createTableRow("Phone", ": "+item.RelationshipManagerPhone));
        bankInfo.appendChild(createTableRow("Email", ": "+item.RelationshipManagerEmail));
    });
}

