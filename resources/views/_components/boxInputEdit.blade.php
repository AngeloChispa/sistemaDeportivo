<div>
    @if ($type === "file")
    <label for="{{ $for }}" class="block text-sm font-semibold text-stone-200">{{ $content }}</label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
        @if ($currentfile)
        <div class="mt-2">
            <p class="text-sm text-stone-400">Imagen actual:</p>
            <img src="{{ asset('storage/' . $currentfile) }}" alt="{{ $alt ?? 'actual' }}" class="mt-2 h-16">
            <input type="hidden" name="currentfile" value="{{ $currentfile }}">
        </div>
    @endif
    @else
        <label for="{{ $for }}" class="block text-sm font-semibold text-stone-200">{{ $content }}</label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" id="{{ $id }}"
            class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
    @endif
</div>



