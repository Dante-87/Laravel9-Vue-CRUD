<template>
    <div>
        <h2 class="text-center">Products List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Creado</th>
                    <th>Actualizado</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.created_at }}</td>
                    <td>{{ product.updated_at }}</td>
                    <td>
                        <div class="btn" >
                            <router-link :to="{ name: 'edit', params: { id: product.id } }" class="btn">Editar
                            </router-link>
                            <button class="btn btn-danger" @click="deleteProduct(product.id)">Borrar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>

import axios from 'axios';

export default {
    data() {
        return {
            products: []
        }
    },
    created() {
            axios
            .get('http://localhost/api/product')
            .then(response => {
                console.log(response);
                this.products = response.data;
            });
    },
    methods: {
        deleteProduct(id) {
                axios
                .delete(`http://localhost/api/product/${id}`)
                .then(response => {
                    let i = this.products.map(data => data.id).indexOf(id);
                    this.products.splice(i, 1)
                });
        }
    }
}
</script>