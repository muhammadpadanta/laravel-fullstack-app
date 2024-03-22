<div class="navbar ">
    <div class="navbar-start text-white">
        <a class=" p-3 praise-regular text-3xl ">1st Symphony</a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 ">
            <li><a href="/"  class="text-white fugaz-one-regular">Home</a></li>
            <li><a href="/list"  class="text-white fugaz-one-regular">Tickets</a></li>
            <li>
                <details class="">
                    <summary class="text-white fugaz-one-regular">About us</summary>
                    <ul class="p-2 fugaz-one-regular">
                        <li><a>Contact us</a></li>
                        <li><a>Feedback</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>

    <div class="navbar-end">
        <ul class="menu menu-horizontal px-1">
            <div class="dropdown ">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3  z-[1]  shadow bg-base-100 rounded-box w-52 ">

                    <li><a href="/profile" class="fugaz-one-regular">Profile</a></li>


                    <li><a onclick="my_modal_1.showModal()" class="fugaz-one-regular">Login</a></li>
                    <li><a onclick="my_modal_2.showModal()" class="fugaz-one-regular">Register</a></li>

                </ul>
            </div>

            <li>
                <a href="/pembayaran"  class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </a>
            </li>

            @include('components.login')
            @include('components.register')


        </ul>