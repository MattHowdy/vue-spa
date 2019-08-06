import VueRouter from 'vue-router'

let routes = [
    {
        path : '/',
        components: require('./views/Home')
    },
    {
        path : '/about',
        components: require('./views/About')
    },
    {
        path : '/contact',
        components: require('./views/Contact')
    }
]

export default new VueRouter({
    routes,
    linkActiveClass : 'is-active'
})