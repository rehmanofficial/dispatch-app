<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
                <img src="assets/img/medatron/logo.png" width="40">
            </span> --}}
            <span class="app-brand-text demo menu-text ms-2">Dispatch App</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        {{-- seperator --}}

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Main</span>
        </li>

        <x-menu-item :href="route('dashboard')" :active="request()->routeIs('dashboard')" iconClass="bx bx-home-circle">Dashboard</x-menu-item>
        <x-menu-items-group :routesArray="[
                'all-loads',
                'add-new-load',
            ]" iconClass="bx bx-package" menuGroupName="Loads">
            <x-menu-item :href="route('all-loads')" :active="request()->routeIs('all-loads')">All Loads</x-menu-item>
            <x-menu-item :href="route('add-new-load')" :active="request()->routeIs('add-new-load')">Add New Load</x-menu-item>
        </x-menu-items-group>
        <x-menu-items-group :routesArray="[
                'all-carriers',
                'add-new-carrier',
            ]" iconClass="bx bxs-truck" menuGroupName="Carrier Packets">
            <x-menu-item :href="route('all-carriers')" :active="request()->routeIs('all-carriers')">All Carriers</x-menu-item>
            <x-menu-item :href="route('add-new-carrier')" :active="request()->routeIs('add-new-carrier')">Add New Carrier</x-menu-item>
        </x-menu-items-group>

        {{-- seperator --}}

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Contacts</span>
        </li>

        <x-menu-item :href="route('users')" :active="request()->routeIs('users')" iconClass="bx bx-user">Users</x-menu-item>
        <x-menu-items-group :routesArray="[
                'all-brokers',
                'add-new-broker',
            ]" iconClass="bx bx-support" menuGroupName="Brokers">
            <x-menu-item :href="route('all-brokers')" :active="request()->routeIs('all-brokers')">All Brokers</x-menu-item>
            <x-menu-item :href="route('add-new-broker')" :active="request()->routeIs('add-new-broker')">Add New Broker</x-menu-item>
        </x-menu-items-group>
        <x-menu-items-group :routesArray="[
                'all-drivers',
                'add-new-driver',
                'assign-drivers',
            ]" iconClass="bx bx-car" menuGroupName="Drivers">
            <x-menu-item :href="route('all-drivers')" :active="request()->routeIs('all-drivers')">All Drivers</x-menu-item>
            <x-menu-item :href="route('add-new-driver')" :active="request()->routeIs('add-new-driver')">Add New Driver</x-menu-item>
            <x-menu-item :href="route('assign-drivers')" :active="request()->routeIs('assign-drivers')">Assign Drivers</x-menu-item>
        </x-menu-items-group>

        {{-- seperator --}}

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Management</span>
        </li>
        <x-menu-item :href="route('dispatchers')" :active="request()->routeIs('dispatchers')" iconClass="bx bx-extension">Dispatchers</x-menu-item>
        {{-- <x-menu-item :href="route('niko-integration')" :active="request()->routeIs('niko-integration')">Niko Integration</x-menu-item> --}}
        <x-menu-items-group :routesArray="[
                'all-invoices',
                'add-new-invoice',
                'add-old-invoice',
            ]" iconClass="bx bxs-report" menuGroupName="Invoices">
            <x-menu-item :href="route('all-invoices')" :active="request()->routeIs('all-invoices')">All Invoices</x-menu-item>
            <x-menu-item :href="route('add-new-invoice')" :active="request()->routeIs('add-new-invoice')">Add New Invoice</x-menu-item>
            <x-menu-item :href="route('add-old-invoice')" :active="request()->routeIs('add-old-invoice')">Add Old Invoice</x-menu-item>
        </x-menu-items-group>
        {{-- seperator --}}

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Tools</span>
        </li>
        <x-menu-item :href="route('google-map')" :active="request()->routeIs('google-map')" iconClass="bx bx-map">Google Map</x-menu-item>
        <x-menu-item :href="route('weather-map')" :active="request()->routeIs('weather-map')" iconClass="bx bx-sun">Weather Map</x-menu-item>
        <x-menu-item :href="route('timezone-map')" :active="request()->routeIs('timezone-map')" iconClass="bx bx-time">Timezone Map</x-menu-item>


        <!--<x-menu-items-group :routesArray="['dashboard']" iconClass="bx bx-git-pull-request" menuGroupName="Synchronization">
            <x-menu-item :href="route('dashboard')" :active="request()->routeIs('dashboard')">Niko</x-menu-item>
            <x-menu-item :href="route('dashboard')" :active="request()->routeIs('dashboard')">Bitrix</x-menu-item>
        </x-menu-items-group>!-->

    </ul>
</aside>
