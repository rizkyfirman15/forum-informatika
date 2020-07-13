<div class="forum-sidebar hidden lg:block flex-none border-r border-solid pr-10" style="border-color: rgb(239, 239, 239);">
    <div class="sticky">
        <a href="{{ route('discussion.create') }}" class="btn btn-blue rounded">
            Diskusi Baru
        </a>
        <ul class="pt-2 mt-10 mobile:hidden">
            @auth
                <li class="mt-4 block">
                    <a href="{{ route('discussion.index') . '?filter=me' }}" class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ (request()->get('filter', null) == 'me') ? 'text-indigo-600 font-bold ' : '' }}">
                        <i class="far fa-user"></i>
                        Utas Saya
                    </a>
                </li>
            @endauth
            <li class="mt-4 block">
                <a href="{{ route('discussion.index') }}" class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ (request()->get('filter', null) == null) && (url()->current() == route('discussion.index')) ? 'text-indigo-600 font-bold ' : '' }}">
                    <i class="far fa-comments"></i>
                    Semua Utas
                </a>
            </li>
            <li class="mt-4 block">
                <a href="{{ route('discussion.index') . '?filter=popular_this_week' }}" class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ request()->get('filter', null) == 'popular_this_week' ? 'text-indigo-600 font-bold ' : '' }}">
                    <i class="far fa-star"></i>
                    Populer Minggu Ini
                </a>
            </li>
            <li class="mt-4 block">
                <a href="{{ route('discussion.index') . '?filter=popular' }}" class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ request()->get('filter', null) == 'popular' ? 'text-indigo-600 font-bold ' : '' }}">
                    <i class="far fa-star"></i>
                    Populer Sepanjang Masa
                </a>
            </li>
            <li class="mt-4 block">
                <a href={{ route('discussion.index') . '?filter=solved' }} class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ request()->get('filter', null) == 'solved' ? 'text-indigo-600 font-bold ' : '' }}">
                    <i class="far fa-check-circle"></i>
                    Terpecahkan
                </a>
            </li>
            <li class="mt-4 block">
                <a href={{ route('discussion.index') . '?filter=unsolved' }} class="text-grey-dark text-sm mb-1 hover:text-indigo-600 hover:bg-gray-100 rounded py-2 px-3 {{ request()->get('filter', null) == 'unsolved' ? 'text-indigo-600 font-bold ' : '' }}">
                    <i class="far fa-times-circle"></i>
                    Belum terpecahkan
                </a>
            </li>
        </ul>
    </div>
</div>