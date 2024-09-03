<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'bg-white relative items-center inline-flex text-sm font-medium text-center align-bottom justify-center leading-[normal] px-3 py-2 gap-2 rounded-md text-primary-contrast bg-primary border border-primary focus:outline-none focus:outline-offset-0 focus:ring-1 hover:bg-primary-emphasis hover:border-primary-emphasis focus:ring-primary transition duration-200 ease-in-out cursor-pointer overflow-hidden select-none']) }}
>
    {{ $slot }}
</button>