<template>
    <div>
        <div class="alert alert-danger" v-if="error_credentials">
            <p>There was an error, unable to sign in with those credentials.</p>
        </div>

        <div class="alert alert-danger" v-if="error_verified">
            <p>You have not verified your email address</p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
        </form>


    </div>

</template>


<script>
    export default {
        data(){
            return {
                email: null,
                password: null,
                error_credentials: false,
                error_verified: false,
                errors:[]
            }
        },
        methods: {
            login(){
                this.$auth.login({
                    params: {
                        email: this.email,
                        password: this.password
                    },
                    success: function (resp) {

                        this.$root.$emit('user_data',resp.data.data)
                    },
                    error: function (resp) {

                        if ( resp.response.data.error == 'invalid.credentials' ){
                            this.error_credentials = true;
                            this.errors = resp.response.data.msg
                        }

                    },
                    rememberMe: true,
                    // redirect: '/search',
                    fetchUser: true,
                });
            },
        },
        destroyed(){
            if( this.$auth.check() ) {
                console.log('destroy')

            }
        }
    }
</script>
