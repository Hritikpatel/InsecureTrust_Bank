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
            var userData = response;
            console.log(userData);
        },
        error: function() {
            console.error('Error fetching data from PHP');
        }
    });

}