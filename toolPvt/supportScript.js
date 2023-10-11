// Define the URL of the PHP file and parameters
const phpFile = 'supportApi.php';

// Get the existing cardholder element by its id
var cardholder = document.getElementById("cardholder");

// Define a variable to store the currently clicked button
var currentClickedButton = null;

// Get the element with the id "getInfo"
var getInfoElement = document.getElementById("getInfo");

var tkt_no = document.getElementById("tkt_no");

var files = document.getElementById("userData");

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
            var newCard = createCard(cardInfo.full_name, cardInfo.tkt_no, cardInfo.category, cardInfo.email, cardInfo.phone, cardInfo.description, cardInfo.attachments.length);

            // Append the newly created card to the cardholder
            cardholder.appendChild(newCard);
        });
    })
    .catch(error => {
        // Handle errors here
        console.error('Fetch error:', error);
    });
}

function getInfo(get, number) {
    var parameters = {
        for: get,
        number: number
    };

    // Create a URLSearchParams object to encode the parameters
    const params = new URLSearchParams(parameters);

    // Combine the URL with the encoded parameters
    const url = `${phpFile}?${params.toString()}`;

    // Send a GET request and return the promise
    return fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json(); // If the response is JSON
        })
        .catch(error => {
            // Handle errors here
            console.error('Fetch error:', error);
            throw error; // Propagate the error further if needed
        });
}

function createCard(name, tktno, category, email, phone, description, attachmentCount) {
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

    // Create spans for different pieces of data with IDs
    var nameSpan = document.createElement("span");
    nameSpan.id = "name";
    nameSpan.textContent = "Name: " + name;

    var emailSpan = document.createElement("span");
    emailSpan.id = "email";
    emailSpan.textContent = "Email: " + email;

    var phoneSpan = document.createElement("span");
    phoneSpan.id = "phone";
    phoneSpan.textContent = "Phone: " + phone;

    var attachmentCountSpan = document.createElement("span");
    attachmentCountSpan.id = "attachmentCountSpan";
    attachmentCountSpan.textContent = "Attachment: " + attachmentCount + " Files attached";

    // Append the spans to the infoDiv
    infoDiv.appendChild(nameSpan);
    infoDiv.appendChild(document.createElement("br")); // Add line break
    infoDiv.appendChild(emailSpan);
    infoDiv.appendChild(document.createElement("br"));
    infoDiv.appendChild(phoneSpan);
    infoDiv.appendChild(document.createElement("br"));
    infoDiv.appendChild(attachmentCountSpan);

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
        phone: phone,
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
    userData.innerHTML = "";

    tkt_no.innerText = cardData.tktno;

    // Create spans for different pieces of data with IDs
    var nameSpan = document.createElement("span");
    nameSpan.id = "name";
    nameSpan.textContent = "Name: " + cardData.name;

    var emailSpan = document.createElement("span");
    emailSpan.id = "email";
    emailSpan.textContent = "Email: " + cardData.email;

    var phoneSpan = document.createElement("span");
    phoneSpan.id = "phone";
    phoneSpan.textContent = "Phone: " + cardData.phone;

    var descSpan = document.createElement("span");
    descSpan.id = "desc";
    // descSpan.textContent = "Description: ";
    descSpan.innerHTML = "Description: "+cardData.description;

    var attachmentCountSpan = document.createElement("span");
    attachmentCountSpan.id = "attachmentCountSpan";
    attachmentCountSpan.textContent = "Attachment: " + cardData.attachmentCount + " Files attached";

    // Append the spans to the infoDiv
    userData.appendChild(nameSpan);
    userData.appendChild(document.createElement("br")); // Add line break
    userData.appendChild(emailSpan);
    userData.appendChild(document.createElement("br"));
    userData.appendChild(phoneSpan);
    userData.appendChild(document.createElement("br"));
    userData.appendChild(descSpan);
    userData.appendChild(document.createElement("br"));
    userData.appendChild(attachmentCountSpan);



    // This function will be executed when the "getUser" element's value changes
    var selectedValue = getInfoElement.value; // Get the selected value
    
    console.log(selectedValue);

    var phone = document.getElementById(phone);

    if (selectedValue === "*") {
        getInfo(selectedValue, cardData.tktno)
        .then(data => {
            // Handle the response data here
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                // Create a new image element
                var img = document.createElement("a");
    
                // Set the src attribute to the image file's URL
                img.href = "../assets/uploads/"+element;
                var filename = element.split("/");
                img.innerText = filename[filename.length - 1]
    
                files.appendChild(img);
                console.log(element);
            }
        });
    } else if(selectedValue === "accountInfo"){
        console.log(phone)
        getInfo(selectedValue, phone.innerText)
        .then(data => {
            console.log(data);
        });
    }
}


getInfoElement.addEventListener("change", function() {

    // This function will be executed when the "getUser" element's value changes
    var selectedValue = getInfoElement.value; // Get the selected value

    getData(selectedValue);
});

function getData(selectedValue) {
    if (selectedValue === "*") {
        getInfo(selectedValue, tkt_no.innerText)
        .then(data => {
            // Handle the response data here
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                // Create a new image element
                var img = document.createElement("a");
    
                // Set the src attribute to the image file's URL
                img.href = "../assets/uploads/"+element;
                var filename = element.split("/");
                img.innerText = filename[filename.length - 1]
    
                files.appendChild(img);
                console.log(element);
            }
        });
    } else if(selectedValue === "accountInfo"){
        
        var phone = document.getElementById(phone );
        console.log(phone)
        getInfo(selectedValue, phone.innerText)
        .then(data => {
            console.log(data);
        });
    }
}