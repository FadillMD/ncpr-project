    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <x-nav-link :active="request()->routeIs('home')" href="/" icon="bi bi-house">Home</x-nav-link>
            <x-nav-link :active="request()->routeIs('about')" href="/about" icon="bi bi-info-circle">About</x-nav-link>
            <x-nav-link :active="request()->routeIs('contact')" href="/contact" icon="bi bi-envelope">Contact</x-nav-link>
            <x-nav-link :active="request()->routeIs('posts')" href="/posts" icon="bi bi-file-post">Post</x-nav-link>

            <x-nav-link-dropdown :active="request()->routeIs('orders*')" id="orders-nav">
                Orders
                @slot('dropdownItems')
                    <li>
                        <a wire:navigate class="{{ request()->routeIs('orders') ? 'active' : '' }}" href="/orders">
                            <i class="bi bi-circle"></i><span>List Orders</span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate class="{{ request()->routeIs('orders.create') ? 'active' : '' }}" href="/orders/create">
                            <i class="bi bi-circle"></i><span>Create Orders</span>
                        </a>
                    </li>
                @endslot
            </x-nav-link-dropdown>
        
        </ul>

    </aside>
    <!-- End Sidebar-->