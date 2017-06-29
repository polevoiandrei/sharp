import axios from 'axios';

export default {
    data() {
        return {
            data:null,
            layout:null,

            ready:false,
        }
    },
    methods: {
        get() {
            if(this.test) return;
            return axios.get(this.apiPath).then(response=>{
                    this.mount(response.data);
                    this.ready = true;
                this.glasspane.$emit('hide');
                    return Promise.resolve(response);
                })
                .catch(error=>{
                    this.glasspane.$emit('hide');
                    return Promise.reject(error);
                });
        },
        post() {
            this.glasspane.$emit('show');
            return axios.post(this.apiPath, this.data).then(response=>{
                this.glasspane.$emit('hide');
                    return Promise.resolve(response);
                })
                .catch(error=>{
                    this.glasspane.$emit('hide');
                    return Promise.reject(error);
                });
        }
    },
    created() {
        this.glasspane.$emit('show');
    }
}