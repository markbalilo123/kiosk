const RidesStore = {
    state: {
        ridesList: [],
        ridesMeta: {},
        ridesLinks: {},
        ridesErrors: null,
        rides: {}
    },
    mutations: {

        setRidesList: (state, ridesList) => state.ridesList = ridesList,

        setRidesMeta: (state,ridesMeta) => state.ridesMeta = ridesMeta,
        setRidesLinks: (state, ridesLinks) => state.ridesLinks = ridesLinks,
        setRidesErrors: (state, gridesErrors) => state.ridesErrors = ridesErrors,
        setRides: (state, rides) => state.rides = rides,
    },
    actions: {
        loadRidesList: ({ commit }, payload) => {
            commit("setRidesList", payload.data);
            commit("setRidesMeta", payload.meta);
            commit("setRidesLinks", payload.links);
        }
    },
    getters: {

        getRideList: (state) => state.ridesList,
        getRideMeta: (state) => state.ridesMeta,
        getRideLinks: (state) => state.ridesLinks,
        getRide: (state) => state.rides

    }
}

export default RidesStore;
