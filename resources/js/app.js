// require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import store from './Pages/store';
import VueGoogleMaps from '@fawmi/vue-google-maps'
InertiaProgress.init()

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(store)
            .use(plugin)
            .use(VueGoogleMaps, {
                load: {
                    key: '',
                },
            })
            .mount(el)
    },
})
