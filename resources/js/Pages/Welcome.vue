<template>
    <div class="max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl w-full">
        <post-component></post-component>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import PostComponent from '@/Components/PostComponent'
    export default {
        data() {
            return {

            }
        },
        components:{
            PostComponent
        }
    }
</script>

