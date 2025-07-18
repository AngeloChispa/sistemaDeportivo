<style>
    .bg-rose-500 {
        background-color: #EA454C;
    }
</style>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-center rtl:text-right text-zinc-300">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900">
            {{ $title }}
            <div class="flex">
                <p class="mt-1 text-sm font-normal text-zinc-400 flex-auto">{{ $p_content }}</p>
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
