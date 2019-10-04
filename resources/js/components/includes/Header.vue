<template>

    <header>

<!--        <div class="top-header-content header-item">-->
<!--            <div class="header-wrapper">-->
<!--                <div class="header-top-left">-->
<!--                    <div class="logo">-->
<!--                        <router-link to="/" >-->
<!--                            <img class="logo-img" :src="logo_2">-->
<!--                        </router-link>-->

<!--                    </div>-->

<!--                    <div class="search-bl">-->
<!--                        <form action="">-->
<!--                            <input placeholder="Search" type="text" class="search-input">-->
<!--                            <button>-->
<!--&lt;!&ndash;                                <font-awesome-icon :icon="['fas', 'search']" />&ndash;&gt;-->
<!--                            </button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="header-top-right">-->
<!--                    <ul class="top-menu">-->

<!--                        <li class="favorites" @mouseover="favorites_hover = true" @mouseleave="favorites_hover = false">-->
<!--                            <router-link to="/favorites" >-->
<!--                                <span class="menu-item-icon">-->
<!--                                    <font-awesome-icon  :class="{ menu_hover: favorites_hover }" :icon="['fas', 'heart']" />-->
<!--                                </span>-->
<!--                                <span class="menu-item-text" :class="{ menu_hover: favorites_hover }">Избранные</span>-->
<!--                            </router-link>-->
<!--                        </li>-->




<!--                        &lt;!&ndash;                        <li class="my-cart" @mouseover="cart_hover = true" @mouseleave="cart_hover = false">&ndash;&gt;-->
<!--&lt;!&ndash;                            <router-link to="/cart" >&ndash;&gt;-->
<!--&lt;!&ndash;                                <span class="menu-item-icon">&ndash;&gt;-->
<!--&lt;!&ndash;                                    <font-awesome-icon  :class="{ menu_hover: cart_hover }" :icon="['fas', 'shopping-cart']" />&ndash;&gt;-->
<!--&lt;!&ndash;                                </span>&ndash;&gt;-->
<!--&lt;!&ndash;                                <span class="menu-item-text" :class="{ menu_hover: cart_hover }" >My cart</span>&ndash;&gt;-->
<!--&lt;!&ndash;                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                        </li>&ndash;&gt;-->


<!--                        <li v-if="!$auth.check()" class="sign-in" @mouseover="login_hover = true" @mouseleave="login_hover = false">-->
<!--                            <router-link to="/login" >-->
<!--                                <span class="menu-item-icon">-->
<!--                                    <font-awesome-icon  :class="{ menu_hover: login_hover }"  :icon="['fas', 'user']" />-->
<!--                                </span>-->
<!--                                <span class="menu-item-text" :class="{ menu_hover: login_hover }">Войти в систему</span>-->
<!--                            </router-link>-->
<!--                        </li>-->


<!--                        <li v-if="!$auth.check()" class="sign-up" @mouseover="register_hover = true" @mouseleave="register_hover = false">-->
<!--                            <router-link to="/register" >-->
<!--                                <span class="menu-item-icon">-->
<!--                                    <font-awesome-icon  :class="{ menu_hover: register_hover }"  :icon="['fas', 'user-plus']" />-->
<!--&lt;!&ndash;                                    <font-awesome-icon  :class="{ menu_hover: register_hover }"  :icon="s['fa', 'UserPlus']" />&ndash;&gt;-->
<!--                                </span>-->
<!--                                <span class="menu-item-text" :class="{ menu_hover: register_hover }">Регистрация</span>-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li v-if="$auth.check()" class="log-out">-->
<!--                            <span>{{user_data.name}}</span>-->
<!--                            <i class="fas fa-sign-out-alt"></i>-->
<!--                            <a @mouseover="login_hover = true" @mouseleave="login_hover = false" href="#" @click.prevent="logout_()">Logout</a>-->
<!--                        </li>-->

<!--                        <li class="add-product">-->
<!--                            <router-link to="/add-product" >-->
<!--                                Добавить объявление-->
<!--                            </router-link>-->

<!--                        </li>-->

<!--&lt;!&ndash;                        <li>&ndash;&gt;-->
<!--&lt;!&ndash;                            <div>&ndash;&gt;-->
<!--&lt;!&ndash;                                <b-dropdown size="lg"  variant="link" toggle-class="text-decoration-none" no-caret>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <template v-slot:button-content>&ndash;&gt;-->
<!--&lt;!&ndash;                                        &#x1f50d;<span class="sr-only">Search</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                    </template>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <b-dropdown-item href="#">Action</b-dropdown-item>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <b-dropdown-item href="#">Another action</b-dropdown-item>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <b-dropdown-item href="#">Something else here...</b-dropdown-item>&ndash;&gt;-->
<!--&lt;!&ndash;                                </b-dropdown>&ndash;&gt;-->
<!--&lt;!&ndash;                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                        </li>&ndash;&gt;-->

<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->



<!--        <div class="bottom-header-content header-item">-->
<!--            <div class="header-wrapper">-->

<!--                <div class="header-bottom-left">-->
<!--                    <span v-on:click="toggle_cat_modal" @mouseover="all_categories_hover = true" @mouseleave="all_categories_hover = false" :class="{ menu_hover: all_categories_hover }" >-->
<!--                        Все разделы-->
<!--                        <svg   height="7px" viewBox="0 0 11 7" width="11px" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path :class="{ menu_hover: all_categories_hover }"  fill="#3d3f56" d="M5.4 7L0 1.6 1.4.2l4 4 4-4 1.4 1.4z"></path>-->
<!--                        </svg>-->
<!--                    </span>-->

<!--                </div>-->





<!--                <div class="header-bottom-right">-->
<!--                    <ul class="all-categories-menu-list">-->
<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Недвижимость-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="/category/auto/1" >-->
<!--                                Транспорт-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Электроника-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Услуги-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Работа-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Мода и стиль-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Все для дома-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                        <li>-->
<!--                            <router-link to="" >-->
<!--                                Инструменты и материалы-->
<!--                            </router-link>-->
<!--                        </li>-->

<!--                    </ul>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
















<!--        <ul v-if="open_all_cat" class="all-categories-modal">-->
<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_home">-->
<!--                    Недвижимость-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="/category/auto/1" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_auto">-->
<!--                    Транспорт-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_electronic">-->
<!--                    Электроника-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_from_appliances" >-->
<!--                    Бытовая техника-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_from_home">-->
<!--                    Все для дома-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_shoes">-->
<!--                    Мода и стиль-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_child">-->
<!--                    Детский мир-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_hobbie" >-->
<!--                    Культура и хобби-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_animal" >-->
<!--                    Животные и растения-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_from_tools" >-->
<!--                    Инструменты и материалы-->
<!--                </router-link>-->
<!--            </li>-->

<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_service" >-->
<!--                    Услуги-->
<!--                </router-link>-->
<!--            </li>-->
<!--            <li>-->
<!--                <router-link to="" >-->
<!--                    <img class="sidebar_icon icon-auto" :src="sidebar_icon_working" style="width: 26px;">-->
<!--                    Работа-->
<!--                </router-link>-->
<!--            </li>-->
<!--        </ul>-->

        <div id="header-wrapp">
            <div class="logo-block">

            </div>
            <div id="mainmenu">
                <router-link to="/" class="active"> Главная </router-link>
                <router-link to="" > Новости </router-link>
                <router-link to=""> Правила </router-link>
                <router-link to="" > Выплаты </router-link>
            </div>
        </div>

    </header>

</template>

<script>
    import axios from 'axios';
    export default {
        data(){
            return{
                logo_1: require('../../../images/logo.png'),
                favorites_hover: false,
                login_hover: false,
                cart_hover: false,
                register_hover: false,
                all_categories_hover: false,
                open_all_cat:false,
                user_data: {},
            }
        },
        methods: {
            logout_(evt) {
                axios.post('auth/logout')

                    .then(response => {
                        localStorage.removeItem('default_auth_token');
                        delete axios.defaults.headers.common['Authorization'];
                        this.$router.push('/login');
                    })
                    .catch(error => {
                        localStorage.removeItem('default_auth_token');
                        delete axios.defaults.headers.common['Authorization'];
                        // this.$router.go('/login');
                        this.$router.push('/login');
                    });
            },
            toggle_cat_modal(){
                this.open_all_cat = !this.open_all_cat;
            }
        },
        mounted() {

            // console.log(this.$store) // -> 1
            this.$root.$on('user_data',(data) => {
                this.user_data = data
                console.log(this.user_data)
            })



            if( this.$auth.check() ) {
                axios.get('auth/user')

                .then(response => {

                    if ( response.data.data === undefined ) {
                        localStorage.removeItem('default_auth_token');
                        delete axios.defaults.headers.common['Authorization'];
                        // this.$router.go('/login');
                    }else{
                        this.user_data = response.data.data;
                    }
                    console.log(this.user_data,'user')
                })
                .catch(error => {

                });
            }

            console.log('Header already.')

        }
    }
</script>

<style>

    @media (min-width: 768px) and (max-width: 979px) {
        header{
            background-color: #f00!important;
        }
    }

    #header-wrapp{
        max-width: 1100px;
        margin: 15px auto;
    }

    #mainmenu span, #mainmenu a, #mainmenu span.active {
        font-size: 12px;
        text-transform: uppercase;
        text-shadow: 1px 1px 1px #D5E6C3;
        color: #5e803a;
        text-decoration: none;
        outline: none;
        cursor: pointer;
        border: none;
        padding-top: 4px;
        margin: 0 -3px 0 0;
        text-align: center;
        display: inline-block;
        height: 30px;
        width: 87px;
    }

    #mainmenu a:hover {
        color: #AF0032;
    }
    #mainmenu a.active {
        background: url(../../../images/btn-mnu.png) no-repeat left top;
        color: #fff;
        text-shadow: 1px 1px 1px #304f12;
        height: 30px;
        width: 87px;
    }
    header{
        width: 100%;
    }

    .logo-block{
        min-height: 100px;
    }

</style>
