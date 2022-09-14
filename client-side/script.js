var app = new Vue({
    el: '#app',
    data: {
        albumArray : [],
    },
    created: function(){
            axios.get('http://localhost/php-ajax-dischi/client-side/server.php')
            .then(response => (this.albumArray = response.data))
    }
  })