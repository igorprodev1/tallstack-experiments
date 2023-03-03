<div x-data="{ count: 0, inputValue: 'opa' }">
    <input
        class="focus:outline-none rounded-full "
        type="text"
        x-model="inputValue"
    >
    <button
        class="text-3xl bg-purple-700 hover:bg-purple-500 text-white rounded-full px-10 py-2"
        @click="count++"
    >
        +
    </button>
    <span
        class="text-3xl font-bold px-10 py-2 bg-slate-500 rounded-full"
        x-text="count"
    ></span>
    <button
        class="text-3xl bg-purple-700 hover:bg-purple-500 text-white rounded-full px-10 py-2"
        @click="count--"
    >
        -
    </button>
    <span x-text="inputValue"></span>
</div>
