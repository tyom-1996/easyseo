<template>
    <div class="wrapp" v-if="$auth.ready()">
        <Header></Header>
        <div class="content-block">
            <LeftSidebar></LeftSidebar>
                <router-view class="main-router-view"></router-view>
            <RightSidebar></RightSidebar>
        </div>

        <Footer></Footer>

        <div v-if="!$auth.ready()">
            Loading...
        </div>
    </div>
</template>


<script>
    import axios from 'axios';
    import Header from './components/includes/Header'
    import Footer from './components/includes/Footer'
    import LeftSidebar from './components/includes/LeftSidebar'
    import RightSidebar from './components/includes/RightSidebar'

    export default {
        components: {
            Header,
            Footer,
            LeftSidebar,
            RightSidebar
        },
        data(){
            return {
                body_bg: require('../images/bk-header.png'),
            }
        },
        methods: {
            test(){
                axios.post('/auth/test')
                .then(response => {
                    console.log(response)
                }).catch(error => {
                    console.log(error)
                });
            }
        }
    }
</script>
<style>
    .content-block{
        max-width: 1100px;
        width:100%;
        margin:20px auto;
        display:flex;
        justify-content: space-between;
        min-height: 600px;
    }
    .main-router-view{
        display: flex;
        justify-content: space-between;
        min-height: 100%;
        height: auto;
        width:60%;
    }
    body{
        background: #fff url(../images/bk-header.png) repeat-x left top!important;
        font: 12px tahoma, arial, sans-serif;
        color: #545454;
        line-height: 1.3;
        margin: 0;
        padding: 0;
        height: 99.9%;
    }


</style>
