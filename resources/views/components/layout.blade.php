<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="font-['Playfair_Display']">
    <header class="w-full">
        <div class="fixed top-5 left-0 w-full h-16 bg-white">
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
                <div class="flex h-full text-4xl pl-24 py-4 mx-auto flex-nowrap">
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
                            <li class="h-8 ml-3 mt-4">
                                <a href="#"
                                    class="flex hover:bg-[#fbb3c1] hover:text-white items-center h-full px-1 border-black border rounded-lg"><i
                                        class="fa-regular fa-user mr-2"></i>Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Main --}}
    {{ $slot }}




</body>

</html>
