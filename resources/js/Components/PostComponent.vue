<template>
    <div class="bg-white max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl rounded overflow-hidden shadow-none mb-10 sm:rounded-lg max-w-2xl border border-gray-300">
        <header class="flex flex-start">
            <div>
                <a href="#" class="cursor-pointer m-4 flex items-center text-sm outline-none focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img src="https://images.pexels.com/photos/3460478/pexels-photo-3460478.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="h-9 w-9 rounded-full object-cover"
                    alt="usuario" />
                    <div>
                        <p class="block ml-2 font-bold">Clark J</p>
                        <span class="block ml-2 text-xs text-gray-600">5 minutes</span>
                    </div>
                </a>
            </div>
        </header>
        <img class="w-full max-w-full min-w-full"
        src="https://images.pexels.com/photos/5797991/pexels-photo-5797991.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
            alt="post">

        <div class="px-6 pt-4">
            <div class="mb-2">
                <div class="flex items-center">
                    <span class="mr-3 inline-flex items-center cursor-pointer">
                        <svg class="text-gray-700 inline-block h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </span>
                    <span class="mr-3 inline-flex items-center cursor-pointer">
                        <svg class="text-gray-700 inline-block h-7 w-7 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </span>
                </div>
                <span class="text-gray-600 text-sm font-bold">1,300 Likes</span>
            </div>
            <div class="">
                <div class="text-sm mb-2 flex flex-start items-center">
                    <a href="#" class="cursor-pointer flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                        <img class="h-8 w-8 rounded-full object-cover"
                        src="https://images.pexels.com/photos/3460478/pexels-photo-3460478.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="usuario" />
                    </a>
                    <p class="font-bold ml-2">
                        <a class="cursor-pointer">Carlos:</a>
                        <span class="text-gray-700 font-medium ml-1">
                            New post, I like plants
                        </span>
                    </p>
                </div>
                <a class="text-gray-400 text-sm cursor-pointer font-semibold">23 comments</a>
            </div>

        </div>

        <div class="px-6 pt-4 pb-3">
            <div class="flex items-start">
                <input class="w-full resize-none outline-none appearance-none" aria-label="Agrega un comentario..." placeholder="Agrega un comentario..."  autocomplete="off" autocorrect="off" style="height: 36px;" />
                <button class="mb-2 focus:outline-none border-none bg-transparent text-blue-600">Publicar</button>
            </div>
        </div>
    </div>
    
</template>

<script>
export default {
    data() {
        return{

        }
    },
}
</script>