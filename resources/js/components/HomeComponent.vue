// HomeComponent.vue

<template>
  <div>
      <h1>Product</h1>
        <div class="row">
          <div class="col-md-10"></div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.sku }}</td>
                    <td>{{ post.name }}</td>
                    <td>{{ post.description }}</td>
                    <td>{{ post.price }}</td>
                </tr>
            </tbody>
        </table>
  </div>
</template>

<script>
    export default {
        data() {
          return {
            posts: []
          }
      },
      created() {
        let uri = 'http://localhost:8000/api/posts';
        this.axios.get(uri).then(response => {
          this.posts = response.data.data;
        });
      },
    }
</script>