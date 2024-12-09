<style>
    .bg-rose-500 {
        background-color: #EA454C;
    }
</style>
<div class="pb-6">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-6">
        <table class="w-full text-sm text-center rtl:text-right text-zinc-300">
            <caption class="p-5 text-xl font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900">
                {{ $title }}
            </caption>
            <thead class="text-center text-lg text-zinc-100 bg-rose-500 h-8">
                {{ $content_head }}
            </thead>
            <tbody class="pt-5">
                {{ $content_body }}
            </tbody>
        </table>
    </div>
</div>
