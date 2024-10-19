document.getElementById("alertButton").addEventListener("click", function () {
    sendDangerAlert();
});

/*function sendDangerAlert() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position){
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            let message = `My location is https://www.google.com/maps?q=${latitude},${longitude}`;

            //Send the message to the server (backend PHP)
            fetch('process.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({message: message})
            }).then(response => response.json())
                .then(data => alert("Alert sent successfully!"))
                .catch(error => console.error("Error sending alert:", error));
        }, function (error) {
            alert("Error fetching location: " + error.message);
        });
    } else {
        alert("Geolocation is not supported by this browser");
    }
}*/
function sendDangerAlert() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position){
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            let message = `My location is https://www.google.com/maps?q=${latitude},${longitude}`;

            //Send the message to the server (backend PHP)
            fetch('process.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({message: message})
            }).then(response => response.json())
                .then(data => {
                    if(data.status === 'success') {
                        //Display success message
                        showSuccessMessage("Alert sent successfully! Please stay safe.")
                    } else {
                        showSuccessMessage("Failed to send alert. Please try again")
                    }
                })
                .catch(error => {
                    console.error("Error sending alert:", error);
                    showSuccessMessage("An error occurred. Please try again.");
                });

        }, function (error) {
            alert("Error fetching location: " + error.message);
        });
    } else {
        alert("Geolocation is not supported by this browser");
    }
}

function showSuccessMessage(message) {
    const successDiv = document.createElement('div') //Create a new div for the element
    successDiv.className = 'success-message'; //Add a class for styling
    successDiv.innerText = message; //Set the message text

    document.body.appendChild(successDiv) //Append the message to the body

    //Optionally, remove the message after a few seconds
    setTimeout(()=> {
        successDiv.remove();
    }, 5000);
}


