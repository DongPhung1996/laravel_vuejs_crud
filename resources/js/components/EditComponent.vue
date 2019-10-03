// EditComponent.vue

<template>
  <div>
    <h1>Edit A Product</h1>
    <form @submit.prevent="updatePost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>SKU:</label>
            <input type="text" class="form-control" v-model="post.sku"  maxlength="12">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Name:</label>
              <input class="form-control" v-model="post.name"  maxlength="50"/>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Description:</label>
              <textarea class="form-control" v-model="post.description" rows="3"></textarea>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Price:</label>
              <input type="number" class="form-control" v-model="post.price" min="0" max="100"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-primary">Create</button>
        </div>
    </form>
  </div>
</template>

<script>
        export default {

      data() {
        return {
          post: {}
        }
      },
      created() {
        let uri = `http://localhost:8000/api/post/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
      },
      methods: {
        updatePost() {
          let uri = `http://localhost:8000/api/post/update/${this.$route.params.id}`;
          this.axios.post(uri, this.post).then((response) => {
            this.$router.push({name: 'posts'});
          });
        }
      }
    }
</script>