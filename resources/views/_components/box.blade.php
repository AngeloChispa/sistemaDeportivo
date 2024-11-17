<div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold">@yield('title')</h1>
</div>

<div class="mt-9 space-y-6">
    <div class="p-12 rounded-lg flex justify-between items-center">
        <div>
            <h2 class="text-xl font-bold">@yield('name')</h2>
            <p class="text-gray-400">@yield('description')</p>
        </div>
        <a href="@yield('href')" class="text-white bg-red-500 px-11 py-2 rounded hover:bg-red-600">@yield('name_ref')</a>
    </div>
</div>