import Vue from 'vue';

var app = new Vue({
    el: '#root',
    data: {
        dischi: []
    },
    mounted(){
        axios.get('http://localhost/php-ajax-dischi/server.php').then(result => {
            this.dischi = result.data;
        });
    }
});