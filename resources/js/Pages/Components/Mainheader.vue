<template>
    <div class="w-full flex items-center justify-between">
        <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#"> 
             <svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg> Sitex
        </a>
          
        <div class="flex w-1/2 justify-end content-center">	
            <Link href="/" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">Home</h1>
            </Link>


            <Link href="/terminal" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">Terminal</h1>
            </Link>

         <Link href="/maps" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">Map</h1>
              </Link> 

            <Link href="/about-us" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">About</h1>
              </Link>

            <Link href="/contact-us" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">Contacts</h1>
            </Link>

            <Link href="/faq" class="
                  inline-block 
                  text-blue-300 
                  no-underline 
                  hover:text-indigo-800 
                  hover:text-underline 
                  text-center 
                  h-10 
                  p-2 
                  md:h-auto md:p-4"
                >  	     
                <h1 class="text-3xl font-bold">FAQ</h1>
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: { Link },
}
</script>

<style>
</style>
