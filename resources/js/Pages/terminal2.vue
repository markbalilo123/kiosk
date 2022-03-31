<template>
  <div class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
      <div class="h-screen pb-14 bg-right bg-cover">
        <!--Nav-->
	      <div class="w-full container mx-auto p-6">
			
          <Mainheader />

          <!--Main-->
          <div class="container pt-24 md:pt-2 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      
            <!--Left Col-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
              <h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Passenger Monitoring
              </h1>
              <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Choose your ride at the bottom</p>
            
            
            </div>
      
          <!--Right Col-->
          <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
            <img class="w-4/6 mx-auto lg:mr-0 slide-in-bottom" src="images/server.svg">
          </div>

          <div class="pt-24">
            <div class="flex flex-row">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
               <p class="pl-1 pr-2 pb-4 leading-normal text-base md:text-2xl text-center md:text-left slide-in-bottom-subtitle">More information</p>
                </div>
                   <h1 class="text-xl pl-6 pr-2">Vehicle type:    <b>{{data.vehicle_name}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">Terminal name:   <b>{{data.vehicle_name}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">Routes:          <b>{{data.start_point}}/{{data.destination}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">Operator:       <b> {{data.name}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">Plate no:        <b>{{data.plate_no}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">No of passenger: <b>{{data.no_passenger}}</b></h1>
                   <h1 class="text-xl pl-6 pr-2">Available seats: <b>{{data.available_seat}}</b></h1>


              <div class="pt-14 flex flex-row pb-15">

                  
                            <!-- <h1 class="text-xl pl-6 pr-2">Vehicle type:</h1>
                            
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
                                
                            </div> -->
                            
                            </div>
                          
            
       <div class="py-9 grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                          <template v-for="ride in list" :key="ride.ServerID">

                   
                                <div class="bg-white pr-7 p-10 rounded-lg shadow-lg">
                               
                                    <h1 class="text-xl">{{ride.vehicle_name}}</h1>
                                  
                                 
                                    <div class="mt-4 mb-8">
                                        <div class="bg-gray-400 w-64 h-3 rounded-lg mt-2 overflow-hidden">
                                            <div class="bg-blue-300 w-4/4 h-full rounded-lg shadow-md"></div>
                                        </div>
                                    </div>
                                    <!-- <h2 class="flex text-xl justify-between">Operator: {{ride.name}}</h2> -->
                                    <div class="flex space-x-1">
                                    <h2 class="flex text-xl justify-between">Destination: {{ride.destination}}</h2>
                                      <a :href="`https://www.google.com/maps/dir/sitex%20sorsogon/${ride.destination}`" target="_blank">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                      </a>
                                    </div>
                                     <div class="flex text-xl">
                            
                                        <h2 class="tracking-wide"> </h2>
                                        No passenger: 
                                        <h2 class="pl-2 text-red-400"> {{ride.no_passenger}}</h2>
                                    </div>
                                    <div class="flex text-xl">
                                        
                                        
                                        <h1 class="tracking-wide"> </h1>
                                        Available seats: 
                                        <h1 class="pl-2 text-red-400"> {{ride.available_seat}}</h1>
                                    </div>
                                   
                                    <button @click="testClick(ride)" class="bg-indigo-700 text-white py-3 px-8 mt-4 rounded text-sm font-semibold hover:bg-opacity-75">View</button>
                                </div>

                         
                     
                                
                        
                        
                   
                    
  </template>



                </div>
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
import { ref, reactive, onMounted, computed } from "vue";
import { useStore } from "vuex";
import Mainheader from "./Components/Mainheader";
import { Link } from "@inertiajs/inertia-vue3";

import { apiHttp } from './API/httpService.js';

export default { 
    components: { Link, Mainheader },
    props :{
        vehicles: Object
    },
    setup(props) {
        const store = useStore();
        let list = ref([]);
        let dataToShow = ref("");
        let data = computed(() => dataToShow.value);
      //  console.log(props);
   
     //  const list = toRef(props, 'vehicles');

       onMounted(() => {
           getList();
           // console.log(JSON.parse(JSON.stringify(props.vehicles)));
           // list = JSON.parse(JSON.stringify(props.vehicles));
         //   console.log(props.vehicles);
           
       
       //    console.log(list);
        });
      
        function getList() {
            apiHttp.get('api/terminalServer')
                .then((response) => {
                    list.value = response.data;
                
              //      console.log("rides", response.data);
         
                })
                .catch((errors) => {
                    console.log(errors)
                });
        }

  

        function testClick(ride) {
          dataToShow.value = ride;
          console.log(list.value);
          console.log(dataToShow.value.ServerID)
        }

        // setInterval(function() {
          
        //     getList();
               //isExists = list.value.some(code => code.ServerID === dataToShow.value.ServerID;
        //     if(isExists) {
        //           list.value.some(code => dataToShow.value = code);      
        //     } else {
        //           dataToShow.value  = "";
        //     }
        // }, 2000);
        

      return {
        props, list, testClick, data
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
