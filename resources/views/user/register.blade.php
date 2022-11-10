<x-layout>
    <main class="flex flex-col h-screen">
        <section class="flex flex-col pt-40 pb-20">
            <div class="grid grid-cols-12">
                <div class="col-span-1 col-start-1"></div>
                <div class="col-span-5 col-start-2 items-center text-start">
                    <div class="mt-10 sm:mt-0">
                        <div class="px-4">
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <h4 class="pl-5 font-bold tracking-tighter text-[32px] mb-3">
                                    <span class="">Become a part of the</span>
                                    <br />
                                    Luxe Tribes
                                </h4>
                                <form action="#" method="POST">
                                    <div class="overflow-hidden sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                {{-- Image  Input  --}}

                                                <div class="col-span-12 sm:col-span-6">
                                                    <div class="flex">
                                                        <div class="border mr-2 rounded-full bg-gray-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-16 h-16">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                            </svg>

                                                        </div>
                                                        <div class="">
                                                            <p>Add your photo(optional)</p>
                                                            <p class="text-gray-300 font-extralight text-xs">Supported
                                                                formats:jpg,jpeg,png</p>
                                                            <label for="file-upload"
                                                                class="relative cursor-pointer rounded-md bg-white font-medium ">
                                                                <span><i class="fas fa-upload"></i>Click here to
                                                                    upload</span>
                                                                <input id="file-upload" name="file-upload"
                                                                    type="file" class="sr-only">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <hr class="m-3">
                                                </div>


                                                {{-- End of Image Input --}}
                                                <x-input placeholder="Full Name" type="text" name="fullname"
                                                    id="fullname" />

                                                <x-input placeholder="Username" type="text" name="username"
                                                    id="username" />

                                                <x-input placeholder="DOB" type="text" name="dob"
                                                    id="dob" />


                                                <x-input placeholder="Email" type="text" name="email"
                                                    id="email" />

                                                <x-input placeholder="Phone name" type="text" name="phone"
                                                    id="phone" />

                                                <x-input placeholder="Password" type="password" name="password"
                                                    id="password" />


                                                <div class="col-span-12 sm:col-span-6">
                                                    <textarea type="text" rows="4" placeholder="Tell us about you" name="about" id="about"
                                                        class="mt-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                                    <p class="float-right">200</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="w-full mb-12">
                                            <button type="submit"
                                                class="py-2 text-black bg-[#FBB3C1] w-full rounded-lg font-extralight hover:bg-[#ec617d]">
                                                Create my account</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="text-gray-500">Already have an account? <span
                                        class="text-black hover:text-[#fbb3c1]">Log in</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- End of form --}}
                </div>
                <div class="relative col-span-5 bg-[#F7F7FA] col-start-7 text-start">
                    <div class="absolute border rounded-xl top-[45%] left-[40%] h-64 w-64 items-center align-middle">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hWOwNrx-L0ACCRxAAD6AhwHaE9%26pid%3DApi&f=1&ipt=d77da4a3e8670db1de7c2052d07571c0faa0bcd2068de9010853f9537ef4b051&ipo=images"
                            class="absolute w-64 h-64" alt="">
                    </div>
                </div>

                <div class="col-span-1 col-start-12"></div>
            </div>
        </section>
    </main>
</x-layout>
