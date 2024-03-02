document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="event-update"]');
    const modal = document.querySelector("#event-edit");
    const category = {
        title: modal.querySelector("#title"),
        description: modal.querySelector("#description"),
        date: modal.querySelector("#date"),
        numberOfSeats: modal.querySelector("#numberOfSeats"),
        price: modal.querySelector("#price"),
        categoryId: modal.querySelector("#category_id"),
        bookingType: modal.querySelector("#bookingType"),

    };
    editBtn.forEach((button) =>{
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");
            category.title.value = this.getAttribute("data-title");
            category.description.value = this.getAttribute("data-description");
            category.date.value = this.getAttribute("data-date");
            category.numberOfSeats.value = this.getAttribute("data-numberOfSeats");
            category.price.value = this.getAttribute("data-price");
            category.categoryId.value = this.getAttribute("data-categoryId");
            category.bookingType.value = this.getAttribute("data-bookingType");
            modal.action = `http://localhost/organiser/events/${slug}`;
        });
    });
});

