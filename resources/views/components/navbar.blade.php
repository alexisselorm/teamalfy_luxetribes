<header class="w-full">
    <div class="left-0 w-full h-16 bg-white top-5">
        <div class="flex justify-between h-full pr-8 mx-auto flex-nowrap">

            <nav class="h-full ml-12 text-base">
                <ul class="flex h-full p-0 m-0 list-none">
                    <li class="h-full ml-3 first:ml-0">
                        <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">Group
                            Trips</a>
                    </li>
                    <li class="h-full ml-3 first:ml-0">
                        <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">Private
                            trips</a>
                    </li>
                    <li class="h-full ml-3 fist:ml-0">
                        <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">Past trips &
                            reviews</a>
                    </li>
                </ul>
            </nav>
            <div class="flex h-full py-4 pl-24 mx-auto text-4xl flex-nowrap">
                Luxe Tribes
            </div>
            <div class="flex items-center h-full ml-auto">
                <nav class="h-full ml-12">
                    <ul class="flex h-full p-0 m-0 list-none">
                        <li class="h-full ml-9 first:ml-0">
                            <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">About
                                us</a>
                        </li>
                        <li class="h-full ml-3 ">
                            <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">FAQS</a>
                        </li>
                        <li class="h-full ml-3">
                            <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">Blogs</a>
                        </li>
                        <li class="h-full ml-3">
                            <a href="#" class="flex hover:text-[#fbb3c1] items-center h-full py-2.5">Contact
                                us</a>
                        </li>
                        <li class="h-8 mt-4 ml-3">
                            <a href="#"
                                class="flex hover:bg-[#fbb3c1] hover:text-white items-center h-full border border-black rounded-lg py-4 px-4"><i
                                    class="fas fa-search"></i></a>
                        </li>
                        @auth
                            <li class="h-8 mt-4 ml-3">
                                <form action="/logout" method="post" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="flex hover:bg-[#fbb3c1] hover:text-white items-center h-full px-1 border-black border rounded-lg>
                                        <i class="text-sm fa-solid fa-door-closed">Logout</i>
                                    </button>
                                </form>
                            </li>
                        @else
                            <li class="h-8 mt-4 ml-3">
                                <a href="/login"
                                    class="flex hover:bg-[#fbb3c1] hover:text-white items-center h-full px-1 border-black border rounded-lg"><i
                                        class="mr-2 fa-regular fa-user"></i>Login</a>
                            </li>
                        @endauth
                        < </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
