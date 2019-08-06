require('./bootstrap');

import router from './routes'


const App = new Vue({
    el: '#app',
    router
})

export default App

