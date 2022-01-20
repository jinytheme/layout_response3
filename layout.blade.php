<style>
    body {background-color: #e3f2fd;}
        #wrap {width: 1200px; margin: 0 auto;}
        .header {width: 100%; height: 100px; background: #81d4fa;}
        .aside {float: left; width: 30%; height: 900px; background: #4fc3f7}
        .article1 {float: left; width: 70%; height: 300px; background: #29b6f6;}
        .article2 {float: left; width: 70%; height: 300px; background: #03a9f4;}
        .article3 {float: left; width: 70%; height: 300px; background: #039be5;}
        .footer {clear: both; width: 100%; height: 100px; background: #0288d1;}

        /* 화면 너비 0 ~ 1200px */
        @media (max-width: 1240px){
            #wrap {width: 100%;}
            .article1 {height: 450px;}
            .article2 {height: 450px;}
            .article3 {width: 100%;}
        }
        /* 화면 너비 0 ~ 768px */
        @media (max-width: 768px){
            .aside {width: 100%; height: 300px;}
            .article1 {width: 50%;}
            .article2 {width: 50%;}
        }
        /* 화면 너비 0 ~ 480px */
        @media (max-width: 480px){
            .article1 {width: 100%;}
            .article2 {width: 100%;}
        }
</style>
<div id="wrap">
    <header class="header"></header>
    <aside class="aside"></aside>
    <section class="article1">{{$slot}}</section>
    <section class="article2"></section>
    <section class="article3"></section>
    <footer class="footer"></footer>
</div>


