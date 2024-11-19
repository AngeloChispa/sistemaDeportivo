<style>
    .bg-rose-500 {
        background-color: #EA454C;
    }
</style>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-6">
    <table class="w-full text-sm text-left rtl:text-right text-zinc-300">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900">
            {{ $title }}
            <div class="flex">
                <p class="mt-1 text-sm font-normal text-zinc-400 flex-auto">{{ $p_content }}</p>
                <a href='{{ route($reference) }}'
                    class="flex-none text-sm font-medium text-zinc-200 bg-rose-500 sm:rounded-lg p-2 hover:bg-red-700">{{ $create_something }}</a>
            </div>
        </caption>
        <thead class="text-center text-xs text-zinc-100 bg-rose-500 uppercase h-10">
            {{ $content_head }}
        </thead>
        <tbody class="pt-5">
            {{ $content_body }}
        </tbody>
    </table>
</div>
