<template>
    <div >
        <div class="search-left-sidebar">
            <ul>

                <li @mouseover="car_hover = true" @mouseleave="car_hover = false" >
                    <a :class="{ menu_hover: car_hover }" >
                        <img class="sidebar_icon icon-auto" :src="sidebar_icon_auto">
                        Search Auto
                    </a>
                </li>

                <ul>
                    <li v-for="cat in categories">
                        {{cat.title}}
                    </li>
                </ul>
            </ul>
        </div>
        <div class="searchall-right-content">
            <!--            <router-view ></router-view>-->
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                sidebar_icon_auto: require('../../../images/sidebar_logo/auto_icon.png'),
                sidebar_icon_all: require('../../../images/sidebar_logo/all_icon.png'),
                all_hover: false,
                car_hover: false,
                categories : {},
                'category_id': ''
            }
        },
        mounted() {
            this.category_id = this.$route.params.id

            console.log( 'Auto Categories' );

            // axios.post('auth/getCategory')
            //
            //     .then(response => {
            //         console.log(response.data)
            //         this.categories = response.data.category[0]
            //         // var sub_categoryes = response.data.category[0]
            //         console.log(this.categories)
            //     })
            //     .catch(error => {
            //         console.log(error)
            //
            //     });
        }
    }
</script>

<style>
    .search-left-sidebar{
        width: 26%;
        background: white;
        padding: 9px 27px 9px 12px
    }

    .searchall-right-content{
        width: 72.5%;
        background: white;
    }

    .search-left-sidebar ul li a{
        color:#2d2f43;
        text-decoration:none;
        font-size: 13px;
    }
    .search-left-sidebar ul{
        list-style: none;
    }
    .search-left-sidebar ul li{
        padding: 4px 0;
    }

    .sidebar_icon{
        width:20px;
        margin-right: 5px;
    }

    .menu_hover {
        color: #fc6767!important;
    }
</style>
