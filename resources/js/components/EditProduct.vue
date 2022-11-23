<template>
    <div>
        <h3 class="text-center">Editar Producto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateProduct">
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
                    <button type="submit" class="btn btn-primary">Actualizar</button>
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

    created() {
        axios
            .get(`http://localhost/api/product/${this.$route.params.id}`)
            .then((res) => {
                this.product = res.data;
            });
    },

    methods: {
        updateProduct() {
            axios
                .patch(`http://localhost/api/product/${this.$route.params.id}`, this.product)
                .then((res) => {
                    this.$router.push({ name: 'home' });
                });
        },
    }


}
</script>