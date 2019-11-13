<template>
    <div>
        <div v-show="!success" class="flex-wrap">
            <div v-show="empty" class="alert alert-danger" role="alert">
                Firstly, fill all required fields!
            </div>
            <div v-if="errors" class="alert alert-danger" role="alert">
                {{errors}}
            </div>
            <div class="form-group">
                <div class="col-10">

                    <input v-model="name" class="form-control" type="text" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-10">
                    <input v-model="phone" class="form-control" type="number" placeholder="phone number">
                </div>
            </div>

            <div class="form-group">
                <div class="col-10">
                    <textarea v-model="text" class="form-control" id="exampleFormControlTextarea1" rows="3">Please, call me back!</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-10">
                    <button @click="sendForm" type="button" class="btn btn-primary btn-lg">Send</button>
                </div>
            </div>
        </div>

        <div v-show="success" class="alert alert-success" role="alert">
            Your requisition was sent!
            <div class="col-10">
                <button @click="success = !success" type="button" class="btn btn-primary btn-lg">Send another one</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "custom-form",

        data() {
            return {
                name: null,
                phone: null,
                text: null,
                empty: false,
                errors: null,
                success: false,
            }
        },

        methods: {
          sendForm() {
              if (!this.name || !this.phone || !this.text) {
                  this.empty = true;
              } else {
                  this.empty = false;
                  this.errors = null;
                  axios.post('/send', {name: this.name, phone: this.phone, text: this.text}).then((response) => {
                      this.success = true;
                  }).catch(error => {
                      this.errors = error.response.data.errors;
                  });
              }
          }
        },
    }
</script>

<style scoped>

</style>
