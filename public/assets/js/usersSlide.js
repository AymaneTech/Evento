let organiserButton = document.querySelector("#organiserBtn")
let participantButton = document.querySelector("#participantBtn")

let organisersTable = document.querySelector("#organisersTable")
let participantsTable = document.querySelector("#participantsTable")

organiserButton.addEventListener("click", (event) => {
    organisersTable.classList.remove("hidden");
    participantsTable.classList.add("hidden");
})
participantButton.addEventListener("click", (event) => {
    organisersTable.classList.add("hidden");
    participantsTable.classList.remove("hidden");
})
