// Define the URL of the PHP file and parameters
const phpFile = 'supportApi.php';
const cardholder = document.getElementById("card");
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
        data.forEach(element => {
            cardholder.innerHTML = element.description;
            // console.log(element);
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
