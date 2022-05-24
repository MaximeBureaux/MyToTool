<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                        fontFamily: {
                            'jost': ["'Jost'", "sans-serif;"],
                        },
                        boxShadow: {
                            'innerxl': 'inset 0 2px 4px 0 rgb(0 0 0 / 0.15)',
                            'innerxl2': 'inset 0px 0px 5px 1px rgb(0 0 0 / 0.15)',
                        },
                        colors: {
                            clifford: '#da373d',
                            white:{
                                soft: '#F9F6F8',
                                DEFAULT: '#FFFFFF',
                            },
                            yellow:{
                                scotch: '#fffeef',
                                DEFAULT: '#FFFF00',
                            }
                        },
                        cursor: {
                            'rond': 'url(/img/cursor.svg), pointer',
                        }
                }
            }
        }
    </script>
    <title>To do list</title>
</head>
<body id="swup" class="transition-fade overflow-hidden">
    <a href="{{ route('login') }}">
        <div class="w-full h-screen bg-white-soft flex justify-center items-center cursor-rond">
            <div class="text-md lg:text-7xl back flex items-center select-none peer " onclick="modalHandler(true)">
                <img src="{{ asset('/img/noun-pen-4549112.svg') }}" alt="" class="w-14 h-14 lg:w-40 lg:h-40">
                <span class="font-jost h-fit">M</span>
                <span class="font-jost h-fit">y</span>
                <span class="font-jost h-fit">T</span>
                <span class="font-jost h-fit">o</span>
                <span class="font-jost h-fit">T</span>
                <span class="font-jost h-fit">o</span>
                <span class="font-jost h-fit">o</span>
                <span class="font-jost h-fit">l</span>
            </div>
            <div id="cursor" class="hidden lg:block h-14 w-14 rounded-full top-0 border-black border-4 absolute box-border transition-transform ease-in-out duration-300 -translate-y-[40%] -translate-x-[40%] peer-hover:scale-[300%] peer-hover:border pointer-events-none"></div>
        </div>
    </a>
    {{-- <!-- MODAL CONNEXION-->
    <div>
        <div class="py-12 backdrop-blur transition-all duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded">
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Connexion</h1>
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nom</label>
                    <input id="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-gray-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <label for="password" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Mot de passe</label>
                    <input id="password" type="password" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-gray-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="*********" />
                    <div class="flex items-center justify-start w-full">
                        <a href="/Todolist.html">
                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black ml-3 bg-black transition duration-150 text-white ease-in-out hover:bg-gray-700  rounded px-8 py-2 text-sm" >Se connecter</button>
                        </a>
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black ml-3 bg-black transition duration-150 text-white ease-in-out hover:bg-gray-700  rounded px-8 py-2 text-sm" onclick="modalHandler()">S'inscrire</button>
                    </div>
                    <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                        <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                    <div class="absolute -right-10 -bottom-0">
                        <div class="relative bg-yellow-scotch opacity-[0.9] w-32 h-12 -rotate-[30deg]">
                            <div class="scotch absolute bg-yellow-scotch w-10 h-12 -right-9 rotate-180"></div>
                            <div class="scotch absolute bg-yellow-scotch w-10 h-12 -left-9 "></div>
                        </div>
                    </div>
                    <div class="absolute -left-10 -top-0">
                        <div class="relative bg-yellow-scotch opacity-[0.9] w-32 h-12 -rotate-[30deg]">
                            <div class="scotch absolute bg-yellow-scotch w-10 h-12 -right-9 rotate-180"></div>
                            <div class="scotch absolute bg-yellow-scotch w-10 h-12 -left-9 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <!-- MODAL CONNEXION--> --}}
    <script>
        let cursor = document.querySelector('#cursor');
        let cursor2 = document.querySelector('#cursor2');
        document.addEventListener('mousemove',function(e){
            let x = e.clientX;
            let y = e.clientY;
            cursor.style.left = x + "px";
            cursor.style.top = y + "px";
        })
        // let modal = document.getElementById("modal");
        // function modalHandler(val) {
        //     if (val) {
        //         fadeIn(modal);
        //     } else {
        //         fadeOut(modal);
        //     }
        // }
        // function fadeOut(el) {
        //     el.style.opacity = 1;
        //     (function fade() {
        //         if ((el.style.opacity -= 0.1) < 0) {
        //             el.style.display = "none";
        //         } else {
        //             requestAnimationFrame(fade);
        //         }
        //     })();
        // }
        // function fadeIn(el, display) {
        //     el.style.opacity = 0;
        //     el.style.display = display || "flex";
        //     (function fade() {
        //         let val = parseFloat(el.style.opacity);
        //         if (!((val += 0.2) > 1)) {
        //             el.style.opacity = val;
        //             requestAnimationFrame(fade);
        //         }
        //     })();
        // }
        // window.onload = modalHandler();
    </script>
</body>
</html>