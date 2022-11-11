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
                                <form method="POST" action="/users" enctype="multipart/form-data">
                                    @csrf
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
                                                            <label for="image"
                                                                class="relative cursor-pointer rounded-md bg-white font-medium ">
                                                                <span><i class="fas fa-upload"></i>Click here to
                                                                    upload</span>
                                                                <input id="image" name="image" type="file"
                                                                    class="sr-only">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <hr class="m-3">
                                                </div>


                                                {{-- End of Image Input --}}

                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="Full Name" type="text"
                                                        name="name" id="name" />
                                                    @error('name')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="Username" type="text"
                                                        name="username" id="username" />
                                                    @error('username')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="DOB" type="text" name="dob"
                                                        id="dob" />
                                                    @error('dob')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="Email" type="text" name="email"
                                                        id="email" />
                                                    @error('email')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <select
                                                        class="mt-1 py-2 block w-full rounded-md bg-white border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                        required type="text" name="nationality" id="nationality">
                                                        <option>Select a nationality</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('nationality')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="Phone name" type="text"
                                                        name="phone" id="phone" />
                                                    @error('phone')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <x-input required placeholder="Password" type="password"
                                                        name="password" id="password" />
                                                    @error('password')
                                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                                    @enderror
                                                </div>


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
                                        class="text-black hover:text-[#fbb3c1]"><a href="login"> Log in</a></span></p>
                            </div>
                        </div>
                    </div>

                    {{-- End of form --}}
                </div>
                <div class="relative col-span-5 bg-[#e3e3ec] col-start-7 text-start">
                    <div class="absolute top-[25%] left-[10%] h-[640px] w-[640px] items-center align-middle">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hWOwNrx-L0ACCRxAAD6AhwHaE9%26pid%3DApi&f=1&ipt=d77da4a3e8670db1de7c2052d07571c0faa0bcd2068de9010853f9537ef4b051&ipo=images"
                            class="absolute border rounded-xl h-[400px] w-[400px]" alt="">
                    </div>
                    <div class="absolute top-[15%] left-[70%] h-124 w-64 items-center align-middle">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hWOwNrx-L0ACCRxAAD6AhwHaE9%26pid%3DApi&f=1&ipt=d77da4a3e8670db1de7c2052d07571c0faa0bcd2068de9010853f9537ef4b051&ipo=images"
                            class="absolute border rounded-xl w-48 h-48" alt="">
                    </div>
                    <div class="absolute  top-[350px] left-[70%] h-64 w-64 items-center align-middle">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hWOwNrx-L0ACCRxAAD6AhwHaE9%26pid%3DApi&f=1&ipt=d77da4a3e8670db1de7c2052d07571c0faa0bcd2068de9010853f9537ef4b051&ipo=images"
                            class="absolute border rounded-xl w-48 h-48" alt="">
                    </div>

                </div>

                <div class="col-span-1 col-start-12"></div>
            </div>
        </section>
    </main>
</x-layout>
