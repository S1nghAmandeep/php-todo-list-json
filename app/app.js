const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            todos: [],
            newTodos: '',
        }
    },
    methods: {
        getData() {
            axios.get('server.php').then(res => {
                console.log(res.data);
                this.todos = res.data
            })
        },

        addTodos() {
            // console.log(this.newTodos);

            const data = {
                text: this.newTodos,
                done: true
            }
            axios.post('store.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            }).then(res => {
                console.log(res.data);
                this.todos = res.data
                this.newTodos = ''
            })
        }
    },

    mounted() {
        this.getData()
    }
}).mount('#app')
