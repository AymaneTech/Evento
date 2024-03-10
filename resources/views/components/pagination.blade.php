@props(["model"])

<div class="flex items-center justify-center bg">
    <div class="flex items-center my-4  ">
        <div class="flex items-center space-x-2 fill-gray-500  ">
            <nav role="navigation" aria-label="Pagination Navigation"
                 class="flex items-center ">
                @if ($model->onFirstPage())
                    <span aria-disabled="true" aria-label="@lang('pagination.previous')"
                          class="relative inline-flex items-center px-2  text-sm font-medium ">
                                   <svg
                                       class="h-7 w-7 rounded-full bg-yellow-50"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                                   </svg>
                                </span>
                @else
                    <a href="{{ $model->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')"
                       class="relative inline-flex items-center text-sm font-medium ">
                                                 <span aria-disabled="true" aria-label="@lang('pagination.previous')"
                                                       class="relative inline-flex items-center px-2  text-sm font-medium ">
                                                <svg
                                                    class=" h-7 w-7 rounded-full bg-yellow-500   fill-current text-white hover:text-yellow   "
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                                                    </svg>
                                                 </span>
                    </a>
                @endif

                {{-- Next Page Link --}}
                @if ($model->hasMorePages())
                    <a href="{{ $model->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')"
                       class="relative inline-flex items-center text-sm font-medium ">

                        <svg
                            class="h-7 w-7 rounded-full bg-yellow-500 fill-current text-white hover:text-yellow  "
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="@lang('pagination.next')"
                          class="relative inline-flex items-center px-2 py-2 text-sm font-medium ">
                                   <svg
                                       class="h-7 w-7 rounded-full"
                                       xmlns="http:white dark:border-gray.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                                    </svg>
                @endif
            </nav>
        </div>

    </div>
</div>
