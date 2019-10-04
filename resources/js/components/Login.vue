<template>
<div>
    <div class="login-form">
        <h1 class="login-title" >Добро пожаловать на SEO sprint!</h1>
        Для входа в свой аккаунт на
        <span style="font-weight: bold; text-shadow:1px 1px 1px #ABBAB0;">
            <span style="color: #008C2C;">SEO</span>
            sprint
        </span>
        , введите ваш регистрационный e-mail, пароль и ответ на проверочный вопрос. Если вы забыли свой пароль, нажмите
        <b>
            <a href="/" target="_blank" style="color: #387021;text-decoration: none;border-bottom: 1px dotted #99BA77;">здесь</a>
        </b>
        <div class="login-block">
            <form class="auth" autocomplete="off" @submit.prevent="login" method="post">
                <div class="auth-note">
                    <label for="email" class="note">E-mail</label>
                    <input type="email" id="email"  placeholder="user@example.com" v-model="email" required>
                </div>
                <div class="auth-note">
                    <label for="password" class="note">Пароль</label>
                    <input type="password" id="password"  v-model="password" required>
                </div>
                <div class="auth-note">
<!--                    <button type="submit" class="btn btn-default submit-form">Sign in</button>-->
                    <input type="submit" class="submit-form" value="ВОЙТИ">
                    <div class="reset-password-block">
                        <a href="/recover" target="_blank">Забыли пароль?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
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

<style>
    .login-title{
        font: 16px Tahoma, Arial, sans-serif;
        color: #AF0032;
        text-shadow: 1px 1px 1px #fff;
        margin: 0 0 10px;
        padding: 0;
    }

    .login-block {
        margin: 34px auto;
        background: url(../../images/key.png)  no-repeat 16px 18px;
        background-size: 90px;
        display: block;
        width: 100%;

    }

    .auth-note {
        display: block;
        margin: 4px 0 4px -10px;
    }

    .auth-note .note {
        font-weight: bold;
        display: inline-block;
        background-color: #CBDCBA;
        padding: 6px 10px;
        color: #3B6610;
        text-shadow: 1px 1px 1px #fff;
        width: 80px;
        margin-right: 2px;
    }

    .auth-note input {
        border: 2px solid #CBDCBA;
        padding: 4px 6px;
        width: 60%;
        max-width: 300px;
    }

    .login-block .auth {
        margin-left: 141px;
        padding: 10px;
        display: block;
        border-left: 2px solid #CBDCBA;
    }

    .login-form{
        padding: 0 30px;
    }

    .submit-form{
        text-align: center;
        font-weight: bold;
        background-color: #98BA76;
        padding: 6px 10px!important;
        color: #fff;
        text-shadow: 1px 1px 1px #6B8F47;
        width: 80px!important;
        cursor: pointer;
        border: none!important;
        display: inline-block;
    }

    .reset-password-block{
        display: inline-block;
        text-align: right;
        width: 60%;
        max-width: 300px;
    }
</style>
