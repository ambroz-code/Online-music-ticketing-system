// Get modal and close button elements
const paymentModal = document.getElementById("paymentModal");
const closeButton = document.querySelector(".close-button");

// Open modal when Buy Ticket button is clicked
document.querySelectorAll(".buy-ticket-button").forEach(button => {
    button.addEventListener("click", function(event) {
        const eventId = this.getAttribute("data-event-id");
        console.log("Event ID:", eventId); // For debugging purposes
        paymentModal.style.display = "block";
    });
});

// Close modal when the close button is clicked
closeButton.onclick = function() {
    paymentModal.style.display = "none";
}

// Close modal when user clicks outside the modal
window.onclick = function(event) {
    if (event.target == paymentModal) {
        paymentModal.style.display = "none";
    }
}
