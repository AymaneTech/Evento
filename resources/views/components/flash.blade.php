<div id="flash-message" class="fixed right-0 bottom-0 w-[350px] z-50 transition-opacity duration-300 ease-in-out opacity-0">
    @if(session()->has("success"))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session("success") }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M18.293 5.293a1 1 0 00-1.414 0L10 12.586 5.707 8.293a1 1 0 00-1.414 1.414l4.293 4.293a1 1 0 001.414 0L18 6.707a1 1 0 000-1.414h.001z"
                          clip-rule="evenodd"/>
                </svg>
            </span>
        </div>
    @elseif(session()->has("error"))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session("error") }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M6.707 14.293a1 1 0 011.414 0L10 15.586l2.293-2.293a1 1 0 111.414 1.414L11.414 17l-3.707-3.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </span>
        </div>
    @endif
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.opacity = '1';
            setTimeout(function () {
                flashMessage.style.opacity = '0';
            }, 4000);
        }
    });
</script>
