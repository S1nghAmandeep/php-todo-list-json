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
                // console.log(res.data);
                this.todos = res.data
            })
        },

        addTodos() {
            // console.log(this.newTodos);

            const data = {
                text: this.newTodos,
                done: false
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
        },

        todoStatus(index) {
            // console.log(index);
            const data = {
                i: index
            }

            axios.post('taskStatus.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            })
                .then(res => {
                    this.todos = res.data
                })
        },

        deleteTodo(index) {
            console.log(index);

            const data = {
                i: index
            }

            axios.post('remove.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            }).then(res => {
                this.todos = res.data
            })
        }
    },

    created() {
        this.getData()
    }
}).mount('#app')
