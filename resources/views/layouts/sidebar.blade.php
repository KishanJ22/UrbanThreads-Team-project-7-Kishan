<div id="overlay" class="hidden md:hidden absolute w-full h-screen opacity-50 bg-default-black transition-all duration-150 ease-in-out"></div>
<div id="sideBar" class="absolute md:static z-10 h-screen bg-default-white w-3/4 md:w-[232px] bg-white shadow-sm border-r border-r-neutral-30 px-4 py-4 -translate-x-full md:translate-x-0 transition-all duration-150 ease-in-out rounded-r-lg md:rounded-[0px]">
    <div class="flex items-center justify-between md:justify-center py-4 px-2">
        <h6 class="text-lg  font-formula1">Views</h6>
        <img onclick="closeSideBar()" class="md:hidden hover:cursor-pointer" src="{{ asset('icons/admin-dashboard/cancel-icon.svg') }}" alt="" />
    </div>

    <x-sidebar-item title="Products" href="admin.products-view" />
    <x-sidebar-item title="Customer Enquiries" href="admin.customer-enquiries-view" />
    <x-sidebar-item title="Orders" href="admin.orders-view" />
</div>

<script>
    function closeSideBar() {
        let sideBar = document.getElementById("sideBar");
        let overlay = document.getElementById("overlay");

        overlay.classList.add("hidden");
        sideBar.classList.add("-translate-x-full");
    }

    function OpenSideBar() {
        let sideBar = document.getElementById("sideBar");
        let overlay = document.getElementById("overlay");

        overlay.classList.remove("hidden");
        sideBar.classList.remove("-translate-x-full");
    }
</script>
