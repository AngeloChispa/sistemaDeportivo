<div>
    @if ($type == "file")<!--PARA IMAGENES-->
    <label for="{{for}}" class="block text-sm font-semibold text-stone-200">{{$content}}</label>
    <input type="{{$type}}" id={{$id}} name="{{$name}}"
        class="mt-2 w-full p-2 bg-stone-800 text-white rounded border border-stone-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
    @if ({{}})
        <div class="mt-2">
            <p class="text-sm text-stone-400">Logo Actual:</p>
            <img src="{{ asset('storage/' . $tournament->icon) }}" alt="{{$alt}}" class="mt-2 h-16">
        </div>
    @endif
    @else
    <label for='{{$for}}' class="block text-sm font-semibold text-stone-200">{{$content}}</label>
    <input type='{{$type}}' name='{{$name}}' value="{{$value}}" id={{$id}}  value="{{ old($name, $value) }}".
        class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
    @endif
    </div>


