<template>
  <div class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
      <div class="h-screen pb-14 bg-right bg-cover">
        <!--Nav-->
	      <div class="w-full container mx-auto p-6">
			
            <Mainheader />
           
            <!--Main-->
            <div class="container pt-24 md:pt-24 px-6 pb-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <h1 class="my-4 pb-4 md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">
                    Passenger seat monitoring
                </h1>
            </div>
                <div>
                    <div class="flex flex-row justify-between pb-20">
                        <div class="flex flex-row pb-15">
                            <h1 class="text-xl pl-6 pr-2">Vehicle type:</h1>
                            <div class="flex justify-center">
                                <div class="mb-3 xl:w-96">
                                    <select class="form-select
                                       
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                        <option selected>----Select vehicle----</option>
                                   
                                        <option v-for="l in props.vehicles" v-bind:value="l.VehicleTypeID" :key="l.VehicleTypeID">
                                            {{ l.vehicle_name }}
                                            
                                        </option>
                                        
                                     
                                       
                                    </select>
                                </div>
                                
                            </div>
                            
                            </div>
                        
                        
                      

                        <div>
                              <h1 class="text-xl">Available rides: 20</h1>
                            <div class="container pt-12">
                                 <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                                    
                                          <div class="bg-white pr-7 p-10 rounded-lg shadow-lg">
                                    <h1 class="text-xl"></h1>
                                    <div class="mt-4 mb-8">
                                        <div class="bg-gray-400 w-64 h-3 rounded-lg mt-2 overflow-hidden">
                                            <div class="bg-blue-300 w-4/4 h-full rounded-lg shadow-md"></div>
                                        </div>
                                    </div>
                                    <h2 class="flex text-xl justify-between">Operator: </h2>
                                    <h2 class="flex text-xl justify-between">Routes: Sitex/Angeles</h2>

                                     <div class="flex text-xl">
                            
                                        <h2 class="tracking-wide"> </h2>
                                        No passenger: 
                                        <h2 class="pl-2 text-red-400"> </h2>
                                    </div>
                                    <div class="flex text-xl">
                                        
                                        
                                        <h2 class="tracking-wide"> </h2>
                                        Available seats: 
                                        <h2 class="pl-2 text-red-400"> </h2>
                                    </div>
                                    <button class="bg-indigo-700 text-white py-3 px-8 mt-4 rounded text-sm font-semibold hover:bg-opacity-75">View</button>
                                </div>

                         
                                    
                                    </div>
                                    </div>
                         </div>
                     
                      
                        
                   
                    
                    


                   
                      
                     <!-- <div class="flex flex-row justify-between my-5"> --> 
                         
                        
                </div>
                
        
            
            </div>
        
      </div>
    </div>
  </div>
</template>

<script>
import { ref, reactive, onMounted, computed, toRef } from "vue";
import Mainheader from "./Components/Mainheader";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: { Link, Mainheader },
    props :{
        vehicles: Object,
        rides: Object
    },
    setup(props) {
      //  console.log(props);
   
     //  const list = toRef(props, 'vehicles');

       onMounted(() => {
           // console.log(JSON.parse(JSON.stringify(props.vehicles)));
           // list = JSON.parse(JSON.stringify(props.vehicles));
         //   console.log(props.vehicles);
           
       
       //    console.log(list);
        });

      return {
        props
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
