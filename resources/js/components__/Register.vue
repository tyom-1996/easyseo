<template>
    <div class="register-block">
<!--        <div class="alert alert-danger" v-if="error && !success">-->
<!--            <p>There was an error, unable to complete registration.</p>-->
<!--        </div>-->


        <div class="alert alert-success" v-if="success">
            <p>Please verify your email address</p>
        </div>


        <div class="register-left-block" >

            <div class="fb">
                <div class="t" style="width: 100%;margin-bottom:17px;">Используйте cоц сети для быстрой регистрации</div>
                <div class="btn">
                    <a href="#" class="fb_btn">
                        Facebook
                    </a>
                </div>
            </div>

            <p>
                Или используйте адрес электронной почты
            </p>

            <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">

                <div class="form-group" v-bind:class="{ 'has-error': error && errors.name }">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" v-model="name" required>
                    <span class="help-block" v-if="error && errors.name">{{ errors.name[0] }}</span>
                </div>

                <div class="form-group" v-bind:class="{ 'has-error': error && errors.email }">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" placeholder="Вашa эл. почта" v-model="email" required>
                    <span class="help-block" v-if="error && errors.email">{{ errors.email[0] }}</span>
                </div>

                <div class="form-group" v-bind:class="{ 'has-error': error && errors.password }">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" v-model="password" required>
                    <span class="help-block" v-if="error && errors.password">{{ errors.password[0] }}</span>
                </div>

                <div class="form-group" v-bind:class="{ 'has-error': error && errors.password_confirm }">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" id="password-confirm" class="form-control" v-model="password_confirm" required>
                    <span class="help-block" v-if="error && errors.password_confirm">{{ errors.password_confirm}}</span>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

        <div class="register-right-block">

        </div>

    </div>
</template>


<script>
    export default {
        data(){
            return {
                name: '',
                email: '',
                password: '',
                password_confirm: '',
                error: false,
                errors: {},
                success: false,
            };
        },
        methods: {
            register(){
                var app = this;

                if (app.password_confirm == app.password) {
                    console.log(app.password_confirm,app.password)

                    this.$auth.register({
                        data: {
                            name: app.name,
                            email: app.email,
                            password: app.password
                        },
                        success: function () {
                            app.success = true
                        },
                        error: function (resp) {
                            app.error = true;
                            app.errors = resp.response.data.errors;
                        },
                        redirect: '/login'
                    });

                } else {
                    app.error = true;
                    app.errors.password_confirm  = 'Your password and confirmation password do not match.';
                }

            }
        }
    }
</script>

<style>
    .register-block{
        background:white;
    }

    .register-left-block{
        width: 55%;
        border-right: 1px solid #e2e2e2;
        padding: 30px 80px 40px 60px;
    }

    .register-right-block{
        width: 45%;
    }

    .fb{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
         margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #e2e2e2;
    }

    .fb > .btn{
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
        text-decoration: none;
        display: block;
        width: 140px;
        height: 47px;
        font-size: 20px;
        font-weight: 700;
        text-align: center;
        background-color: #4c66a4;
        transition: background-color .2s;
        padding: 9px 15px 1px 15px;
    }

    .fb_btn{
        color: white;
    }
</style>
