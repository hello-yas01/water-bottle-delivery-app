document.addEventListener("DOMContentLoaded", function() {
    var loginIcon = document.getElementById("loginIcon");
    var loginDropdown = document.getElementById("loginDropdown");

    loginIcon.addEventListener("click", function() {
        loginDropdown.classList.toggle("hidden");
    });

    // Close the dropdown menu when clicking outside
    document.addEventListener("click", function(event) {
        if (!loginDropdown.contains(event.target) && !loginIcon.contains(event.target)) {
            loginDropdown.classList.add("hidden");
        }
    });
});
