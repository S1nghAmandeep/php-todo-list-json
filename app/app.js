const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            todos: [],
        }
    },
    methods: {
        getData() {
            axios.get('server.php').then(res => {
                console.log(res.data);
                this.todos = res.data
            })
        }
    },

    mounted() {
        this.getData()
    }
}).mount('#app')
