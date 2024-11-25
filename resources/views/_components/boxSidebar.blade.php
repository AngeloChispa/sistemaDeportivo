<<<<<<< HEAD
<div class="p-2 hover:bg-red-700 font-medium m-0 duration-200">
    <div class="icon-container">
        <div class="icon">{{$icon}}</div>
    </div>
    <div class="appbar-text"><a href='{{route($reference)}}'>{{$name}}</a></div>
</div>
=======
<a href='{{ route($reference) }}' class="flex items-center p-2 text-zinc-100 rounded-lg hover:bg-red-500 group">
    {{ $icon }}
    <!-- <div class="appbar-text"><a href='{{ route($reference) }}'>{{ $name }}</a></div>-->
    <span class="appbar-text">{{ $name }}</span>
</a>
>>>>>>> origin/Julissa
