<template>
    <div>
        <h3 class="text-center">Crear Producto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" v-model="product.description">
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control" v-model="product.price">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>

import axios from 'axios';

export default {
    data() {
        return {
            product: {}
        }
    },


    methods: {
        addProduct() {
            axios
                .post('http://localhost/api/product', this.product)
                .then(response => (
                    this.$router.push({ name: 'home' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        },
    }
};
</script>