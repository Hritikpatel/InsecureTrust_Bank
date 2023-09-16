// JavaScript
var userID = document.cookie.split('; ').find(cookie => cookie.startsWith('loggedUser:'));
if (userID) {
    userID = userID.split('=')[1];
    console.log(userID);
    // JavaScript (using jQuery for simplicity)
    $.ajax({
        url: '../assets/php_process/api.php', // PHP script URL
        method: 'GET',
        success: function(response) {
            var userData = response;
            // Now you can use 'userData' in your JavaScript code
            console.log(userData);
        },
        error: function() {
            console.error('Error fetching data from PHP');
        }
    });

}