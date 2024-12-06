<div>
    <label for='{{ $for }}' class="block text-sm font-semibold text-stone-200">{{ $content }}</label>
    <select  name='{{ $name }}' id={{ $id }} class="w-full mt-1 p-2 bg-stone-800 text-white rounded border border-stone-700 focus:outline-none focus:ring-2 focus:ring-red-500">
        <option value="">-</option>
        {{$more_options}}
    </select>

</div>
