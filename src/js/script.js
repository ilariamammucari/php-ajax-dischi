import Vue from 'vue';

var app = new Vue({
    el: '#root',
    data: {
        dischi: '',
        generi: [],
        valoreSelect: ''
    },
    mounted(){
        axios.get('server.php').then(result => {
            this.dischi = result.data;
            this.dischi.forEach(element => {
                if ( !this.generi.includes(element.genere) ){
                    this.generi.push(element.genere);
                }
            });
        }).catch((error) => alert('errore'));
    }
});