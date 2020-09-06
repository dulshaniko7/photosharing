<template>
    <div>
        <div class="container">
            <h2>Create An Album</h2>
            <form enctype="multipart/form-data" @submit.prevent="createAlbum" v-if="!success">
                <div class="form-group">
                    <label for="name">Name of the Album</label>
                    <input type="text" class="form-control" id="name" name="name" v-model="name">
                </div>
                <div class="form-group">
                    <label for="image">Image of the album</label>
                    <input type="file" class="form-control" name="tumImage" id="image" v-on:change="onImageChange">
                </div>

                <div class="form-group">
                    <label for="Category">Image Category</label>
                    <select class="form-control" name="category_id" id="Category" v-model="category_id">
                        <option v-for="(cat, index) in categories" :key="index" :value="cat.id">
                            {{cat.name}}
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Album</button>
            </form>
            <div v-if="success">
                <a href=""> Your album is created</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Albums",
        data() {
            return {
                name: '',
                tumImage: '',
                category_id: '',
                albumId: '',
                categories: [],
                success: false
            }
        },
        methods: {
            getCategories() {
                axios.get('/api/Categories').then((response) => {
                    this.categories = response.data
                }).catch((error) => {
                    alert('unable to get')
                })
            },
            onImageChange(e) {
                console.log(e)
                this.tumImage = e.target.files[0]
            },
            createAlbum() {
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                let formData = new FormData();
                formData.append('tumImage', this.tumImage)
                formData.append('name', this.name)
                formData.append('category_id', this.category_id)
                axios.post('/api/albums', formData, config).then(response => {
                    this.tumImage = ''
                    this.name = ''
                    this.category_id = ''
                    console.log(response.data.id)
                    this.albumId = response.data.id
                    this.success = true
                }).catch(error => {
                    console.log('error')
                })


            }
        },
        mounted() {
            this.getCategories()
        }
    }
</script>

<style scoped>

</style>
