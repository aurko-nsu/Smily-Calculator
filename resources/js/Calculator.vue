<template>
<p id="text" style="color:green; margin-left:100px;"></p>

<form action="#" class="form newtopic" @submit.prevent="calculate">
    <input type="text" v-model="form.number1" name="number1" placeholder="Number One">
    <select v-model="form.operator" name="operator" id="operator">
        <option value="" selected></option>
        <option value="+">&#128125;</option>
        <option value="-">&#128128;</option>
        <option value="*">&#128123;</option>
        <option value="/">&#128561;</option>
    </select>
    <input type="text" v-model="form.number2" name="number2" placeholder="Number Two">
    <br>
    <button type="submit">Calculate</button>
</form>
</template>

<script>
export default {
    data () {
        return {
            form: new Form({
                number1: '',
                number2: '',
                operator: ''
            })
        }
    },

    methods: {
        calculate () {
        this.form.post('/')
            .then(( response ) => { 
                var attr = document.getElementById("text");
                attr.innerHTML = response.data.message;  
                this.form.reset();
            })
        },
    }       
}
</script> 