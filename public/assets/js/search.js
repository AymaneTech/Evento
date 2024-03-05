
let categoriesButtons = document.querySelectorAll("#category");
let searchInput = document.querySelector("#searchInput");
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
let oldContent = document.querySelector("#events-section");
let resultSection = document.querySelector("#filterResult");

categoriesButtons.forEach((element) => {
    element.addEventListener("click", (event) => {
        if (element.textContent !== "All") {
            sendRequest(element.textContent, null);
        } else {
            oldContent.classList.remove("hidden")
        }
    });
})

searchInput.addEventListener("keyup", (event) => {
    sendRequest(null ,searchInput.value);
});


function sendRequest(category, search) {
    const url = "http://localhost/filter";

    const options = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'POST',
        credentials: "same-origin",
        body: JSON.stringify({
            search: search,
            category: category
        })
    };

    fetch(url, options)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data);
            displayData(data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

function displayData(events) {
    if (events.length === 0) {
        resultSection.innerHTML = '<p>No results found</p>';
        return;
    }
    oldContent.classList.add("hidden");
    resultSection.innerHTML = "";
    events.forEach(event => {
        const eventDiv = document.createElement('div');
        eventDiv.classList.add('w-[400px]', 'shadow-xl', 'p-4', 'rounded-2xl');

        eventDiv.innerHTML = `
            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                <img class="object-cover w-full h-72 rounded-2xl" src="http://localhost/storage/images/${event.images[0].path}" alt=""/>
            </a>
            <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">${event.category.name}</span>
            <p class="mt-6 ml-2 text-xl font-semibold">
                <a href="#" title="" class="text-black">${event.title}</a>
            </p>
            <div class="flex gap-4 items-center font-semibold">
                <x-icon name="location"/>
                <p class="mt-4 text-gray-600">${event.location}</p>
            </div>
            <div class="flex gap-4 items-center font-bold text-red-500">
                <x-icon name="price"/>
                <p class="mt-4">${event.price} MAD</p>
            </div>
            <div class="flex gap-4 items-center font-bold">
                <x-icon name="price"/>
                <p>${event.date}</p>
            </div>
            <div class="my-2">
                <a href="http://localhost/events/${event.slug}" class="flex justify-center items-center px-3 py-2 gap-2 h-10 w-52 bg-red-500 rounded-full cursor-pointer hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none" class="svg-icon animate-slope">
                        <g stroke-width="2" stroke-linecap="round" stroke="#fff">
                            <rect y="5" x="4" width="16" rx="2" height="16"></rect>
                            <path d="m8 3v4"></path>
                            <path d="m16 3v4"></path>
                            <path d="m4 11h16"></path>
                        </g>
                    </svg>
                    <span class="text-white text-base font-sans font-medium tracking-wide">Buy a ticket</span>
                </a>
            </div>
            <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
            <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase">${event.organiser.name}</span>
        `;
        resultSection.appendChild(eventDiv);
    });
}
