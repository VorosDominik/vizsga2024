import axios from "axios";

const httpClient= axios.create[{
    baseURL:'http://localhost:8000/api'
}]

const szavakT=()=>httpClient.get('/szavak/téma');

export const useFeladatokApi=()=>({
    szavakT,



});