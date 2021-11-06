<template>
    <div class="max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl w-full">
        <button @click="changeStateShowCreatePost" class="w-full mb-5 text-center bg-blue-500 rounded text-white py-2 outline-none focus:outline-none hover:bg-blue-600">Incluir Publicação</button>

        <div v-if="posts.length > 0">
            <post-component v-for="(post, index) in posts" :key="index"
            :post="post"></post-component>
        </div>

        <div v-if="posts.length == 0" class="tex-3x1">Não existem publicações</div>
        <modal :show="showModal" @close="changeStateShowCreatePost">
            <div class="p-5">
                <div class="">
                    <input v-model="text" type="text" class="w-full outline-none focus:outline-none p-2 rounded appearance-none border-none" placeholder="Em que você está pensando ?">
                    <div class="my-5">
                        <img v-if="url" :src="url" style="max-width: 100%; max-height: 400px; margin: 0 auto;">
                    </div>
                    <div class="flex justify-end">
                        <button @click="selectImage" class="outline-none focus:outline-none inline-flex items-center rounded-full cursor-pointer bg-blue-500 p-2">
                            <svg class="text-white h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </button>
                        <input @change="filechange" id="image" type="file" name="image" accept="image/gif,image/jpeg,image/png,image/jpg" style="display:none">
                    </div>
                    <div class="text-red-500 p-2 mt-5">
                        {{ this.error }}
                    </div>
                </div>
                <button @click="createPost" v-if="text.length > 0 && image != null" class="w-full my-3 mb-5 text-center bg-blue-500 rounded text-white py-2 outline-none focus:outline-none hover:bg-blue-600">
                    Publicar</button>
            </div>
        </modal>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import PostComponent from '@/Components/PostComponent'
    import Modal from '@/Jetstream/Modal'
    export default {
        data() {
            return {
                showModal: false,
                url: null,
                image: null,
                text: '',
                posts: [],
                error: null
            }
        },
        components:{
            PostComponent,
            Modal
        },
        methods: {
            async getPosts() {
                await axios.get('/list-posts')
                .then(response => {
                    this.posts = response.data
                })
            },

            changeStateShowCreatePost(){
                this.showModal = !this.showModal
            },
            filechange(e){
                let file= e.target.files[0]
                this.image = file
                this.url = URL.createObjectURL(file)
            },
            selectImage(){
                document.getElementById('image').click()
            },
            async createPost(){
                const formData = new FormData()
                formData.append('image', this.image)
                formData.append('text', this.text)
                await axios.post('/create-post', formData, {
                    headers: {
                        'Content-Type':'multipart/form-data'
                    }
                }).then((response) => {
                    this.posts.unshift(response.data)
                    this.resetData()
                }).catch(error => {
                    if(error.response.status === 422){
                        this.error = error.response.data.errors.image[0]

                        setTimeout(()=> {
                            this.error = null
                        }, 5000)
                    }
                })
            },
            resetData(){
                this.showModal = false,
                this.url = null,
                this.image = null,
                this.text = ''
            }
        },
        created(){
            this.getPosts()
        }
    }
</script>

