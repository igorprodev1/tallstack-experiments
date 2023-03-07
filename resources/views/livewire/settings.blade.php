<div class="flex items-center justify-center w-full h-screen">
<div class="w-1/2 p-4 border border-gray-200">
    <div class="mb-4">
        @if (session()->has('message'))
            <div class="p-2 text-white bg-green-600 rounded-lg">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="submit">
        {{-- Second Email--}}
        <div class="relative z-0 w-full mb-6 group">
            <input
                type="text"
                name="second_email"
                id="second_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                wire:model.lazy="sEmail"
            />
            <label for="second_email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                {{ __('Email address') }}
            </label>
            <x-field-error field="sEmail" />
        </div>
        
        <div class="grid md:grid-cols-2 md:gap-6">
            {{-- Country--}}
            <div class="relative z-0 w-full mb-6 group">
                <input
                    type="text"
                    name="country"
                    id="country"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    wire:model.lazy="country"
                />
                <label for="country"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('Country') }}
                </label>
                <x-field-error field="country" />
            </div>
            {{-- Zip --}}
            <div class="relative z-0 w-full mb-6 group">
                <input
                    type="text"
                    name="zip"
                    id="zip"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    wire:model.lazy="zip"
                />
                <label for="zip"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('Zip code') }}
                </label>
                <x-field-error field="zip" />
            </div>
            
        </div>
        {{-- Currency --}}
        <div class="relative z-0 w-full mb-6 group">
            <input
                type="text"
                name="currency"
                id="currency"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                wire:model.lazy="currency"
            />
            <label for="currency"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                {{ __('Currency') }}
            </label>
            <x-field-error field="currency" />
        </div>
        {{-- Gender --}}
        <div class="relative z-0 w-full mb-6 group">
            <fieldset>
                <legend class="sr-only">Gender</legend>
                <div class="flex items-center mb-4">
                    <input
                        id="g-male"
                        type="radio"
                        name="gender"
                        value="male"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                        wire:model.lazy="gender"
                    >
                    <label
                        for="g-male"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >
                        {{ __('Male') }}
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input
                        id="g-female"
                        type="radio"
                        name="gender"
                        value="female"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                        checked
                        wire:model.lazy="gender"
                    >
                    <label
                        for="g-female"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >
                        {{ __('Female') }}
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input
                        id="g-other"
                        type="radio"
                        name="gender"
                        value="other"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                        wire:model.lazy="gender"
                    >
                    <label
                        for="g-other"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >
                        {{ __('Other') }}
                    </label>
                </div>
            </fieldset>
            <x-field-error field="gender" />
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input
                type="date"
                name="birthday"
                id="birthday"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                wire:model.lazy="birthday"
            />
            <label for="birthday"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                {{ __('Birthday') }}
            </label>
            <x-field-error field="birthday" />
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input
                type="text"
                name="website"
                id="website"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                wire:model.lazy="website"
            />
            <label for="website"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                {{ __('Website') }}
            </label>
            <x-field-error field="website" />
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input
                checked 
                id="agreement"
                type="checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                wire:model.lazy="agreement">
            <label
                for="agreement"
                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                {{ __('I agree to the terms and conditions.') }}
            </label>
            <x-field-error field="agreement" />
        </div>
        <button
            type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            {{ __('Submit') }}
        </button>
    </form>
</div>
</div>
