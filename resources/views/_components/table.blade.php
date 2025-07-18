<style>
    .bg-rose-500 {
        background-color: #EA454C;
    }
</style>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-6">
    <table class="w-full table-auto text-sm text-center rtl:text-right text-zinc-300">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-zinc-300 bg-stone-900">
            {{ $title }}
            <div class="flex">
                <p class="mt-1 text-sm font-normal text-zinc-400 flex-auto">{{ $p_content }}</p>
                @auth
                    @if (Auth::user()->rol_id === 1)
                        <div class="flex flex-col">
                            <a href='{{ route($reference) }}'
                                class="flex text-sm font-medium text-zinc-200 bg-rose-500 sm:rounded-lg p-2 hover:bg-red-700">
                                <img class="align-center pt-1.5 h-3.5 w-2" src="{{ asset('assets/img/add_img.png') }}"
                                    alt="" class="w-2.5 h-2.5">
                                {{ $create_something }}
                            </a>
                        </div>
                    @endif
                @endauth
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
