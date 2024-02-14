const { createApp } = Vue;
createApp({
    data() {
        return {
        }
    },
    created() {
        axios
            .get('http://localhost/class114/php-todo-list-json/todos.php')
            .then(res => {
                console.log(res);
            });
    }
}).mount('#app');