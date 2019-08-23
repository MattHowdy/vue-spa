import axios from "axios";

class Status{

    static find(){
        return axios.get('/statuses' + id)
    }

    static all(then){
        return axios.get('/statuses')
            .then(({data})=> then(data) )
    }
}


export default Status