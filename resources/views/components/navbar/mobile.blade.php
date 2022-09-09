<nav>
    <div id="nav-menu" x-show='show' style="display: none;" @click="show=false" @click.away="show=false"
        class="fixed w-screen md:hidden text-center text-lg">
        <ul class="p-3  mx-3 rounded-lg bg-blue-100 box-border mt-2 ">
            <a class="cursor-pointer font-bold p-2 hover:bg-blue-200 rounded-lg block">
                {{ ucwords(auth()->user()->username) }}
            </a>
            <a href="{{ route('logout') }}" class="font-medium p-2 hover:bg-blue-200 rounded-lg block">
                {{ __('texts.log_out') }}
            </a>
        </ul>
    </div>
</nav>
