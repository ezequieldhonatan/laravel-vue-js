<template>
    <div>
        
        <h1>{{ product.name }}</h1>

        <div v-if="product.image">
            <img :src="[`/storage/products/${product.image}`]" :alt="product.name" class="img-list">
        </div>

        <div v-else="">
            <img src="/images/no-image.jpg" :alt="product.name" class="img-list">
        </div>

        <div>
            {{ product.description }}
        </div>

    </div>
</template>

<script>
export default {
    props: ["id"],

    created() {
        this.loadProduct();
    },

    data() {
        return {
            product: {}
        }
    },
    
    methods: {
        loadProduct() {
            this.$store.dispatch("loadProduct", this.id)
                        .then(product => this.product = product)
            }
        }
}
</script>

<style scoped>
</style>
