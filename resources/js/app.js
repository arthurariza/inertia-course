import {createApp, h} from 'vue'
import {createInertiaApp, Link} from '@inertiajs/vue3'
import Layout from "./Shared/Layout.vue";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: false})
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('Link', Link)
            .mount(el)
    },
    progress: {
        showSpinner: true,
        color: '#38bdf8'
    }
})
