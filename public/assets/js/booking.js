const bookingBtn = document.querySelector("#bookingButton");
const eventSlug = document.querySelector("#eventSlug").value
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

bookingBtn.addEventListener("click", (event) => {
    const url = `http://localhost/bookings/${eventSlug}`;

    const options = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'POST',
    };

    fetch(url, options)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            displayData(data);
        })
        .catch(function (error) {
            console.log(error);
        });
})
