<template>
    <div class="row justify-content-center">
        <div class="col">
            <ol class="list-group list-group-numbered mb-4" v-if="vulnerabilities.length > 0">
                <vulnerability v-for="v in vulnerabilities" :key="v.id" :data="v"></vulnerability>
            </ol>
            <div v-else>
                <h1 class="fw-bold text-muted text-center">Looks empty {{'(>_<)'}}</h1>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue'
import Vulnerability from './Vulnerability.vue';

const vulnerabilities = ref({})

onMounted(() => {
    fetchVulnerabilities()
})

const fetchVulnerabilities = () => {
    axios.get('http://localhost:8000/api/vulnerability')
    .then(res => { vulnerabilities.value = res.data.data })
    .catch(e => { console.error(e) })
}
</script>
