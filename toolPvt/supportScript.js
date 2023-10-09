// Define the URL of the PHP file and parameters
const phpFile = 'supportApi.php';

// Get the existing cardholder element by its id
var cardholder = document.getElementById("cardholder");

// Define a variable to store the currently clicked button
var currentClickedButton = null;

// Get the element with the id "getInfo"
var getInfoElement = document.getElementById("getInfo");


function getAll() {
    var parameters = {
    for: 'allData'
    };

    // Create a URLSearchParams object to encode the parameters
    const params = new URLSearchParams(parameters);

    // Combine the URL with the encoded parameters
    const url = `${phpFile}?${params.toString()}`;

    // Send a GET request
    fetch(url)
    .then(response => {
        if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json(); // If the response is JSON
    })
    .then(data => {
        data.forEach(cardInfo => {
            // cardholder.innerHTML = element.description;
            console.log(cardInfo);
            var newCard = createCard(cardInfo.full_name, cardInfo.tkt_no, cardInfo.category, cardInfo.email, cardInfo.description, cardInfo.attachment);

            // Append the newly created card to the cardholder
            cardholder.appendChild(newCard);
        });
    })
    .catch(error => {
        // Handle errors here
        console.error('Fetch error:', error);
    });
}

function getUser(number) {

    var parameters = {
        for: 'accData',
        number: number
    };

    // Create a URLSearchParams object to encode the parameters
    const params = new URLSearchParams(parameters);

    // Combine the URL with the encoded parameters
    const url = `${phpFile}?${params.toString()}`;

    // Send a GET request
    fetch(url)
    .then(response => {
        if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json(); // If the response is JSON
    })
    .then(data => {
        // Handle the response data here
        console.log(data);
    })
    .catch(error => {
        // Handle errors here
        console.error('Fetch error:', error);
    });
}

function createCard(name, tktno, category, email, description, attachmentCount) {
    // Create a new card element
    var card = document.createElement("div");
    card.className = "card";

    // Create the category element and its child elements
    var categoryDiv = document.createElement("div");
    categoryDiv.className = "category";
    var tagDiv = document.createElement("div");
    if (category === "Account Issues") {
        tagDiv.className = "tag orange";
    } else if(category === "Billing Inquiries") {
        tagDiv.className = "tag blue";
    }else if(category === "Technical Support") {
        tagDiv.className = "tag green";
    }
    tagDiv.textContent = category;
    categoryDiv.appendChild(tagDiv);

    // Create other elements
    var tktnoDiv = document.createElement("div");
    tktnoDiv.className = "tktno";
    tktnoDiv.textContent = tktno;

    var infoDiv = document.createElement("div");
    infoDiv.className = "info";
    infoDiv.innerHTML = "Name: " + name + "<br>Email: " + email + "<br>Description: " + description + "<br>Attachment: " + attachmentCount + " Files attached<br>";

    var openDiv = document.createElement("div");
    openDiv.className = "open";
    var button = document.createElement("button");
    button.className = "btn click";
    button.textContent = "View";
    openDiv.appendChild(button);

    // Create a data object to store card information
    var cardData = {
        name: name,
        tktno: tktno,
        category: category,
        email: email,
        description: description,
        attachmentCount: attachmentCount
    };

    // Add a click event listener to the button and pass the data object
    button.addEventListener("click", function() {
        // Check if there is a previously clicked button
        if (currentClickedButton) {
            // Restore attributes to default for the previously clicked button
            currentClickedButton.innerText = "View";
            currentClickedButton.removeAttribute("disabled");
            currentClickedButton.className = "btn click";
        }

        // Set the currentClickedButton to the currently clicked button
        currentClickedButton = button;

        // Update attributes for the currently clicked button
        button.innerText = "Opened";
        button.disabled = true;
        button.className = "disabled click";

        displayCardData(cardData);
    });

    // Append all the elements to the card
    card.appendChild(categoryDiv);
    card.appendChild(tktnoDiv);
    card.appendChild(infoDiv);
    card.appendChild(openDiv);

    return card;
}


// Function to display the card data in an alert
function displayCardData(cardData) {
    var detail = document.getElementById("detail");

    detail.innerHTML = detail.innerHTML+
    "\nName: " + cardData.name + "\n" +
    "Ticket Number: " + cardData.tktno + "\n" +
    "Category: " + cardData.category + "\n" +
    "Email: " + cardData.email + "\n" +
    "Description: " + cardData.description + "\n" +
    "Attachment Count: " + cardData.attachmentCount
}


getInfoElement.addEventListener("change", function() {
    // This function will be executed when the "getUser" element's value changes
    var selectedValue = getInfoElement.value; // Get the selected value

    // You can perform actions based on the selected value here
    console.log("Selected Value: " + selectedValue);
    
});

