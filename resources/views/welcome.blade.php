<x-app-layout>
    <div class="h-screen flex flex-col items-center justify-center">
        <div class="text-center grid gap-4">
            <div class="text-6xl font-bold">
                Welcome to slide.
            </div>
            <div>
                <a href="/slides?slide=1">
                    <x-button>
                        <span class="flex-1" >Open Slide</span>
                        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                        </svg>
                    </x-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>