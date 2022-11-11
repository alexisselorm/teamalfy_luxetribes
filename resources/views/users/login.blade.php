<x-layout>
    <main class="flex flex-col h-screen">
        <section class="flex flex-col pt-40 pb-20">
            <div class="grid grid-cols-12">
                <div class="col-span-1 col-start-1"></div>
                <div class="items-center col-span-5 col-start-2 text-start">
                    <div class="mt-10 sm:mt-0">
                        <div class="px-4">
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <h4 class="pl-5 font-bold tracking-tighter text-[32px] mb-3">
                                    Welcome Back!
                                </h4>
                                <form action="/users/authenticate" method="POST">
                                    @csrf
                                    <div class="overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-12">
                                                    <x-input placeholder="Username" type="text" name="username"
                                                        id="username" />
                                                    @error('username')
                                                        <p class="text-sm text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-12">
                                                    <x-input placeholder="Password" type="password" name="password"
                                                        id="password" />
                                                    @error('password')
                                                        <p class="text-sm text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
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
                                        class="text-black hover:text-[#fbb3c1]"><a href="/register">Sign Up</a></span>
                                </p>


                                <p class="text-gray-500">Forgot password? <span
                                        class="text-black hover:text-[#fbb3c1]">Reset Password</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- End of form --}}
                </div>
                <div class="relative h-[800px] bg-gray-50 col-span-5  col-start-7 text-start">
                    <div class="absolute top-[10%] left-[10%] h-[640px] w-[640px] items-center align-middle">
                        <img src="https://booking.luxetribes.com/images/background/back-8.jpeg"
                            class="absolute border rounded-xl h-[600px] w-[400px]" alt="">
                    </div>
                    <div class="absolute  top-[8%] left-[65%] h-124 w-64 items-center align-middle">
                        <img src="https://booking.luxetribes.com/images/background/back-7.png"
                            class="absolute border rounded-xl w-[151px] h-[252px]" alt="">
                    </div>
                    <div class="absolute top-[330px] left-[65%] h-64 w-64 items-center align-middle">
                        <img src="https://booking.luxetribes.com/images/background/back-6.jpeg"
                            class="absolute border rounded-xl w-[151px] h-[252px]" alt="">
                    </div>

                </div>

                <div class="col-span-1 col-start-12"></div>
            </div>
        </section>
    </main>
</x-layout>
