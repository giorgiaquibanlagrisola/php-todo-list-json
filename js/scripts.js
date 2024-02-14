const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: []
        }
    },
    created() {
        axios
            .get('http://localhost/class114/php-todo-list-json/todos.php')
            .then(res => {
                console.log(res.data);
                this.todos = res.data;
            });
    }
}).mount('#app');