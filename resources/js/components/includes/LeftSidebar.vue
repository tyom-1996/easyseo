

<template>
    <div class="content-block-left-sidebar">
        <span class="sbtitle">SEO sprint в цифрах</span>
        <div class="stattablo">
            <div id="user_count">173 576</div>
            <span>Активных пользователей</span>
        </div>
        <div class="stattablo">
            <div id="user_day">2353</div>
            <span>Новых за 24 часа</span>
        </div>
        <div class="stattablo">
            <div id="user_online">2361</div>
            <span>Сейчас online</span>
        </div>
        <span class="sbtitle" id="dwatch">У нас сейчас - 14:28</span>
        <div id="soc-icons-block">
            <a class="soc-fbook soc-icon" target="_blank" href="http://www.facebook.com/pages/SEO-sprint/185661371507529"></a>
            <a class="soc-google soc-icon" target="_blank" href="https://plus.google.com/110827978845892526337"></a>
            <a class="soc-twitter soc-icon" target="_blank" href="https://twitter.com/seo_sprint"></a>
            <a class="soc-tube soc-icon" target="_blank" href="https://www.youtube.com/channel/UCDmR9xsXypUir-QHsaZ2mqw"></a>
        </div>
    </div>

</template>
<script>
    export default {
        mounted() {
            console.log('Left Sidebar already.')
        }
    }
</script>

<style>
    .content-block-left-sidebar{
        width: 20%;
    }

    .content-block-left-sidebar .sbtitle {
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

    .content-block-left-sidebar .stattablo {
        color: #114C5B;
        text-align: center;
        font: 16px Tahoma, Arial, sans-serif;
        display: block;
        margin-bottom: 5px;
        white-space: nowrap;
        background: url(../../../images/skobkifull.png) no-repeat left top;
        background-size: contain;
        height: 45px;
        width: 100%;
    }

    .content-block-left-sidebar .stattablo span {
        color: #387021;
        font-size: 11px;
    }

    .soc-fbook {
        background: url(../../../images/facebook.png) no-repeat;
    }
    .soc-google {
        background: url(../../../images/google.png) no-repeat;
    }
    .soc-twitter {
        background: url(../../../images/twitter.png) no-repeat;
    }
    .soc-tube {
        background: url(../../../images/youtube.png) no-repeat;
    }

    .soc-icon{
        width: 50px;
        height: 50px;
        display: block;
    }

    #soc-icons-block{
        display:flex;
        justify-content: space-around;
        padding-top: 12px;
    }




</style>
