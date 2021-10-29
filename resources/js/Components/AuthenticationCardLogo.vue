<template>
    <inertia-link :href="'/'">
        <img class="w-60" :src="image" alt="Logo Anstagram">
    </inertia-link>
</template>

<script>
    import image from '../../image/anstagram.png'
    export default {
        data() {
            return{
                image:image
            }
        }
    }
</script>
