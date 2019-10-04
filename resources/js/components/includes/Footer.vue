<template>
    <footer>


        <div class="footer-left">
            <p>© 2019 SIA AliMarket (Armenia)</p>
        </div>

        <div class="footer-right">
            <ul>
                <li><router-link to="/catalog" > Catalog </router-link></li>
                <li><router-link to="/privacy" > Privacy Policy </router-link></li>
                <li><router-link to="/terms" > Terms of Use </router-link></li>
                <li><router-link to="/cpr-protection" > Copyright Protection </router-link></li>
                <li><router-link to="/support" > Support </router-link></li>
                <li><router-link to="/about" >About AliMarket</router-link></li>
                <li><router-link to="/seller" > Become a seller </router-link></li>
            </ul>
        </div>

    </footer>
</template>

<script>
    export default {
        mounted() {
            console.log('Footer already.')
        }
    }
</script>


<style>

    footer{
        display:flex;
        color: #454545;
        background: #F1F5EC url(../../../images/bk-footer.png) repeat-x bottom;
        border-top: 1px dashed #abc68e;
    }
    .footer-right{
        max-width: 1280px;
        min-height: 52px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }


    .footer-left{
        max-width: 1280px;
        min-height: 52px;
        margin: auto;
    }

    .footer-right ul{
        display: flex;
        margin-bottom: 0;
    }

    .footer-right ul li{
        list-style: none;
        padding-right: 16px;
    }

    .footer-right ul li a{
        color:#206303;
    }

    .footer-left{
        display: flex;
        align-items: center;
    }

    .footer-left p{
        margin-bottom: 0!important;
        color:#206303;
    }

</style>
