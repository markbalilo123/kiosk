<template>
  <div class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
      <div class="h-screen pb-14 bg-right bg-cover">
         <!--Nav-->
	      <div class="w-full container mx-auto p-6">
			
          <Mainheader />

          <!--Main-->
          <div>
            <section class="text-gray-700">
              <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-20">
                  <h1 class="my-4 text-1xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-center slide-in-bottom-h1">Frequently Asked Question</h1>
                  <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
                    The most common questions about how our business works and what
                    can do for you.
                  </p>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                  <div class="w-full lg:w-1/2 px-4 py-2">
                    <template v-for="item in FAQ" :key="item.questions">  
                      <details class="mb-4">
                        <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                          {{item.questions}}
                        </summary>
                        <span>
                          {{item.answers}}
                        </span>
                      </details>
                    </template>
                  </div>
                </div>
              </div>
            </section>

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
import Config from './faqConfig.json';

export default {
    components: { Mainheader },
    props: {},
    setup() {
      return {};
    },

    data(){
      return {
        FAQ: Config,
      };
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
