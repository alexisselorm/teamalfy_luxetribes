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
                                    <span class="">Welcome</span>
                                    <br />
                                    Back!
                                </h4>
                                <form action="#" method="POST">
                                    <div class="overflow-hidden sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <x-input placeholder="Username" type="text" name="username"
                                                    id="username" />

                                                <x-input placeholder="Password" type="password" name="password"
                                                    id="password" />

                                            </div>
                                        </div>
                                        <div class="w-full mb-12">
                                            <button type="submit"
                                                class="py-2 text-black bg-[#FBB3C1] w-full rounded-lg font-extralight hover:bg-[#ec617d]">
                                                Log in</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="text-gray-500">Don't have an account? <span
                                        class="text-black hover:text-[#fbb3c1]">Sign Up</span></p>


                                <p class="text-gray-500">Forgot password? <span
                                        class="text-black hover:text-[#fbb3c1]">Reset Password</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- End of form --}}
                </div>
                <div class="relative col-span-5 bg-[#F7F7FA] col-start-7 text-start">
                    <div
                        class="absolute border rounded-xl  mx-auto top-11 left-[40%] h-64 w-64 items-center align-middle">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hWOwNrx-L0ACCRxAAD6AhwHaE9%26pid%3DApi&f=1&ipt=d77da4a3e8670db1de7c2052d07571c0faa0bcd2068de9010853f9537ef4b051&ipo=images"
                            class="absolute w-64 h-64" alt="">
                    </div>
                </div>

                <div class="col-span-1 col-start-12"></div>
            </div>
        </section>
    </main>
</x-layout>
