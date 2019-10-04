<template>
    <div class="content-block-right-sidebar">
        <router-link class="btnreg" to="/register" >
            Регистрация
        </router-link>

        <router-link class="btnlogin" to="/login" >
            Вход
        </router-link>


        <span class="sbtitle">Это может быть интересно</span>

        <div class="contextlink">
            <a rel="nofollow" href="" target="_blank">
                От создателей Carnage!<span>Играй на рынке и побеждай на арене!<br><span class="urlcontext">c.cpl1.ru</span></span>
            </a>
        </div>
        <div class="contextlink">
            <a rel="nofollow" href="" target="_blank">
                Денежный Локатор<span>от 5000 руб в день<br><span class="urlcontext">glopages.ru</span></span>
            </a>
        </div>
        <div class="contextlink">
            <a rel="nofollow" href="" target="_blank">
                Игрун - игры на деньги!<span>Игрун - игры на деньги!<br><span class="urlcontext">igrun.com</span></span>
            </a>
        </div>

    </div>

</template>
<script>
    export default {
        mounted() {
            console.log('Right Sidebar already.')
        }
    }
</script>


<style>
    .content-block-right-sidebar{
        width: 20%;
    }

    .btnreg {
        background: url(../../../images/btn-reg.png) no-repeat;
        text-shadow: 1px 1px 1px #125702;
    }

    .btnlogin {
        background: url(../../../images/btn-login.png) no-repeat;
        text-shadow: 1px 1px 1px #024263;
        margin-bottom: 18px!important;
    }
    .btnreg, .btnlogin {

        font-size: 16px;
        margin-bottom: 5px;
        padding-left: 67px;
        line-height: 2.5em;
        background-position: left top;
        display: block;
        height: 41px;
        width: 100%;
        color: #fff;
        outline: none;
        border: none;
        cursor: pointer;
        /*background-position-x: center;*/
        text-decoration: none!important;
    }

    .content-block-right-sidebar .sbtitle {
        text-shadow: 1px 1px 1px #fff;
        color: #355f2a;
        font: 12px Tahoma, Arial, sans-serif;
        text-align: center;
        margin-top: 0;
        margin-bottom: 5px;
        display: block;
        padding-top: 4px;
        padding-bottom: 5px;
        background: url(../../../images/bk-mnu-title.png) repeat-y center;
        background-size: contain;
        border-bottom: 1px solid #c3d6af;
        border-top: 1px solid #e8efe0;
    }

    div.contextlink {
        font-size: 12px;
        color: #114C5B;
        display: block;
        margin-bottom: 15px;
        text-align: center;
    }

    div.contextlink a {
        color: #5B9F00;
        text-decoration: none;
        border-bottom: 1px dotted #5B9F00;
        outline: none;
    }

    div.contextlink span {
        text-decoration: none;
        font-size: 11px;
        color: #114C5B;
        display: block;
        line-height: 1.3;
        margin-top: 2px;
    }
    div.contextlink span.urlcontext {
        color: #4988AB;
    }

    .btnreg:hover, .btnlogin:hover {
        color: #fff;
        background-position: left bottom;
        border: none;
    }
</style>
