<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pairs calculator</div>
                    <div class="card-body">                        
                        <form @submit.prevent="submitForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Insert your numbers separated by a comma, i.e. 1,2,3,4" v-model="form.numbers">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Insert the difference" v-model="form.difference">
                            </div>                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="col-12 mt-3">
                            <label class="form-label">Results:</label>
                            <textarea class="form-control" v-model="results"></textarea>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                response: null,
                form: {
                    numbers: '',
                    difference: ''
                },
                results: ''
            }
        },
        mounted() {
            console.log('Component mounted');
            axios.get('/api/v1/hello')
                .then(response => {
                    this.response = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        methods: {
            submitForm() {
                axios.post('/api/v1/form', this.form)
                    .then(response => {
                        // Handle successful form submission here
                        this.results += response.data.message + "\n";
                    })
                    .catch(error => {
                        // Handle form submission error here
                    });
            }
        }
    }
</script>
