<template>
  <div class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
      <div class="h-screen pb-25 bg-right bg-cover">
          <!--Nav-->
	      <div class="w-full container mx-auto p-6">
			
          <Mainheader />

          <!--Main-->
          <div class="container pt-24 pb-7 md:pt-2 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      
            <!--Left Col-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
             
              <div class="w-full md:w-96 md:max-w-full mx-auto">
                <div class="p-6 py-6 sm:rounded-md">
                  <form class="
                    px-8 
                    pt-6 
                    pb-8 
                    mb-4 
                    bg-white 
                    rounded"
                    @submit.prevent="submit">
                    <div class="mb-4">
                      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                        Email
                      </label>
                      <input class="
                        w-full
                        px-3
                        py-2 
                        text-sm 
                        leading-tight 
                        text-gray-700 
                        border 
                        rounded shadow 
                        appearance-none 
                        focus:outline-none 
                        focus:shadow-outline"
                        id="email"
                        placeholder="Enter your email address"
                        v-model="credential.email"
                        type="text"
                      />
                    </div>

                    <div class="mb-4">
                      <label class="block mb-2 text-sm font-bold text-gray-700" for="subject">
                          Subject
                      </label>
                      <input class="
                        w-full
                        px-3
                        py-2 
                        text-sm 
                        leading-tight 
                        text-gray-700 
                        border 
                        rounded shadow 
                        appearance-none 
                        focus:outline-none 
                        focus:shadow-outline"
                        id="subject"
                        placeholder="Enter subject"
                        v-model="credential.subject"
                        type="text"
                      />
                    </div>
                    <div class="mb-4">
                      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                         Message
                      </label>
                      <textarea
                        name="message"
                        class="
                          w-full
                          px-3
                          py-2 
                          text-sm 
                          leading-tight 
                          text-gray-700 
                          border 
                          rounded shadow 
                          appearance-none 
                          focus:outline-none 
                          focus:shadow-outline"
                          id = "message"
                          rows="3"
                          v-model="credential.message"
                          placeholder="Tell us what you're thinking about...">
                      </textarea>
                    </div>
                    <div class="mb-6">
                      <button
                        type="submit"
                        class="
                          h-10
                          px-5
                          text-indigo-100
                          bg-indigo-700
                          rounded-lg
                          transition-colors
                          duration-150
                          focus:shadow-outline
                          hover:bg-indigo-800
                        "
                      >
                        Contact Us
                      </button>
                    </div>
                   <div>
                 </div>
               </form>
            </div>
          </div>
        </div>
      
        <!--Right Col-->
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
          <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="images/contact_us.svg">
        </div>

        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
           <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; App 2022</a>
        </div>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
import Mainheader from "./Components/Mainheader";
import { Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";

export default {
    components: { Link, Mainheader },
    props: {},
    setup() {
      const credential = reactive({
        email: "",
        subject: "",
        message: "",
      });

      const submit = () => {
    
      };

      return { credential, submit };
    },
};
</script>

<style scoped>

    /* ----------------------------------------------
    * Generated by Animista
    * w: http://animista.net, t: @cssanimista
    * ---------------------------------------------- */
      
    .slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
    .slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
    .slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
    .fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
    .bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}
    
    @-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
    @-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
    @-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}
        
</style>
