document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="category-update"]');
    const modal = document.querySelector("#category-edit");
    const category = {
        name: modal.querySelector("#name"),
        description: modal.querySelector("#description"),
    };
    editBtn.forEach((button) =>{
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");
            category.name.value = this.getAttribute("data-name");
            category.description.value = this.getAttribute("data-description");
            modal.action = `http://localhost/organiser/events/${slug}`;
            console.log(modal)
        });
    });
});

