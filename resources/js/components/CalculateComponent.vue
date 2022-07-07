<template>

</template>

<script>
export default{
    name: 'calculate-component',
    data(){
        return{
            success: false,
            error: false,
            formData: {
                number1: null,
                number2: null,
                operator: null
            }
        }
    },
    // methods:{
    //     calculateNumbers(){
    //         axios.post('/doCalculate', this.formData)
    //             .then((res) => {
    //                 this.onSuccess(res.data.message);
    //             })
    //             .catch((error) => {
    //                 this.onFailure(error.response.data.message);
    //             })
    //     },
    //     onSuccess(message){
    //         this.success = true;
    //     },
    //     onFailure(message){
    //         this.error = true;
    //     }
    // }

    methods:{
        calculateNumbers(){
            axios.post('/doCalculate', this.formData);
        }
    }
}
</script>