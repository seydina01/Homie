<!--navbar-->
<div>
    <!-- logo, burger menu and onglets-->
    <nav class="bg-white/30 fixed top-0 z-10 w-full backdrop-blur-xl lg:h-20">
        <div class="flex flex-col justify-center items-center pt-4 pb-4 relative lg:block lg:ml-4 lg:static lg:pb-10 ">
            <div class="flex flex-row  justify-between gap-40 lg:flex lg:justify-between lg:items-center lg:gap-x-4  ">
                <div class="text-xl font-semibold cursor-pointer text-gray-700 lg:mb-0 lg:-mt-8 ">SAMA<span class="text-[#16a34a]">KEUR.</span></div>
                <div class="flex flex-row lg:relative  ">
                    <div class ="flex flex-row ">
                        <!--account-->
                        <div class="pt-1 hover:cursor-pointer lg:absolute lg:right-4 lg:pt-2  ">
                            <button class=""><i class="fa-sharp fa-solid fa-circle-user text-[#16a34a] fa-2x  cursor-pointer"></i></button>
                        </div>
                        <!--burgerMenu-->
                        <div class="lg:hidden" x-data="{ open: false }">
                            <button id="burgerBtn" class="text-slate-900 w-10 h-10 relative focus:outline-none " @click="open = !open">
                                <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!--onglets-->
                    <div id="burgerMenu" class="absolute z-10 top-0 left-0 mt-16 p-4  bg-gray-100 hidden w-full rounded-xl border-t-2 lg:border-none lg:block lg:bg-transparent lg:static  lg:w-full lg:ml-0 lg:-mt-8 lg:mr-10    ">
                        <ul class=" text-gray-700 lg:text-lg p-4 lg:flex lg:flex-row  lg:gap-4 lg:ml-0 lg:pb-6">
                            <li><a href="#" class="block py-2 lg:hover:border-b-4 lg:hover:border-[#16a34a]  ">Vendre</a></li>
                            <li><a href="#" class="block py-2 lg:hover:border-b-4 lg:hover:border-[#16a34a]">Acheter</a></li>
                            <li class="flex flex-row justify-between lg:hover:border-b-4 lg:hover:border-[#16a34a]">
                                <div><a href="#" class="block py-2">Louer</a></div>
                                <!-- <div class="cursor-pointer"><button><i class="fa-sharp fa-solid fa-angle-down text-[#16a34a] py-4"></i></button></div> -->
                            </li>
                            <li><a href="#" class="block py-2 lg:hover:border-b-4 lg:hover:border-[#16a34a]">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>
