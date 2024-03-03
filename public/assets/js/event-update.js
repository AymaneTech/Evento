document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="event-update"]');
    const modal = document.querySelector("#event-edit");
    const event = {
        title: modal.querySelector("#title"),
        description: modal.querySelector("#description"),
        date: modal.querySelector("#date"),
        numberOfSeats: modal.querySelector("#numberOfSeats"),
        price: modal.querySelector("#price"),
        categoryId: modal.querySelector("#category_id"),
        bookingType: modal.querySelector("#bookingType"),
        location: modal.querySelector("#location"),

    };
    editBtn.forEach((button) =>{
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");
            event.title.value = this.getAttribute("data-title");
            event.description.value = this.getAttribute("data-description");
            event.date.value = this.getAttribute("data-date");
            event.numberOfSeats.value = this.getAttribute("data-numberOfSeats");
            event.price.value = this.getAttribute("data-price");
            event.categoryId.value = this.getAttribute("data-categoryId");
            event.bookingType.value = this.getAttribute("data-bookingType");
            event.location.value = this.getAttribute("data-location");
            modal.action = `http://localhost/organiser/events/${slug}`;
        });
    });
});

