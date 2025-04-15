document.addEventListener("DOMContentLoaded", function () {
    let logoutLinks = document.querySelectorAll(".logout-link");

    logoutLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default logout link action
            let confirmAction = confirm("Are you sure you want to logout?");
            if (confirmAction) {
                alert("Successfully logged out. See you again at Secangkir Coopitiam!");
                window.location.href = this.href; // Redirect to logout.php
            }
        });
    });
});
