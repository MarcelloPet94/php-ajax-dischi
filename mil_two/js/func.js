var appVue = new Vue 
({
    el : '#root',        
    data : {
        dischidata: []
    },
    
    mounted()
        {
            
            axios.get('http://localhost/backend/php-ajax-dischi/mil_two/data/data.php')
            .then((dischi) => {
                console.log(dischi.data)
                this.dischidata = dischi.data
    
            })

            .catch(function (error) {
            // handle error
            console.log(error)
            })
        }

});

