// Define the URL of the PHP file and parameters
const phpFile = 'supportApi.php';
const parameters = {
  param1: 'value2',
  param2: 'value1',
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
