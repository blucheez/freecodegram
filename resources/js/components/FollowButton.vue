<template>
  <div>
    <button
      class="btn btn-primary text-white ms-3"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
import Axios from 'axios'

export default {
  props: ['userId', 'follows'],

  mounted() {
    console.log('Component mounted.')
  },

  data: function () {
    return {
      status: this.follows,
    }
  },

  methods: {
    followUser() {
      Axios.post('/follow/' + this.userId)
        .then((response) => {
          this.status = !this.status
        })
        .catch((error) => {
          if(error.response.status === 401) {
            window.location='/login'
          }
        })
    },
  },

  computed: {
    buttonText() {
      return this.status ? 'Unfollow' : 'Follow'
    },
  },
}
</script>
