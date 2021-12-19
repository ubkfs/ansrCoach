<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    html{
        min-height:100%;
    }
    body{
        background: linear-gradient(rgb(15, 138, 175),rgb(81, 124, 81),rgb(115, 165, 36)) fixed;
    }

    .button {
        position: absolute;
        float: right;
        margin-left: 1450px;
        background-color: burlywood;
        margin-top: 10px;
        height: 30px;
        padding: 5px;
    }

    .button:hover {
        background-color: cadetblue;
    }

    .head {
        margin: auto;
        text-align: center;

    }

    .main{
       margin: 10px;
       margin-right:19px;
    }
    .main .section{
        width: 100%;
        padding:15px;
        background-color: aqua;
        overflow: auto;
        border-radius: 20px;
    }
    .para {
        background-color: chocolate;
    }
    section{
        margin:10px;
        overflow: auto;
    }
    .foot{
        margin-bottom: 0em;
    }
    footer{
        padding-left: 40px;
         padding-right: 40px;
    }
    footer p{
        border-radius: 15px;
    }
    @media screen and (max-width:719px){
        .main{
          margin: 0px;
        }
      .main .section{
        flex-direction: column;
        width: fit-content;
      }
      footer{
          flex-direction: column;
          text-align: center;
          padding-left: 10px;
         padding-right: 10px;
      } 
      footer p{
          border-radius: 15px;
      }
    }
    @media screen and (max-width:600px) {
        .main{
            width: 100%;
        }
        h1{
            font-size: 48px;
        }
    }
    @media screen and (min-width:720px){
        .main{
            width: 95%;
        }
    }
    @media screen and (min-width:1200px){
        .main{
            width:85%;
        }
    }
</style>

<body>

    <?php require "/ansrCoach/nav.php"  ?>
    <br><br><br><br><br>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/ansrCoach/2.jpg" id="iimg" class="d-block w-100" width="100" height="300" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="main">
        <section class="section">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod delectus consequatur tempora nam ex
                deserunt recusandae! Dolorum repudiandae eos vero recusandae, minus impedit, praesentium quod nihil aut
                autem maiores. Omnis?</p>
        </section>
        <hr>
        <section class="section">
            <h3>Why should you donate us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod delectus consequatur tempora nam ex
                deserunt recusandae! Dolorum repudiandae eos vero recusandae, minus impedit, praesentium quod nihil aut
                autem maiores. Omnis?</p>
        </section>
        <hr>
        <section class="section">
            <h3>Our Work</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod delectus consequatur tempora nam ex
                deserunt recusandae! Dolorum repudiandae eos vero recusandae, minus impedit, praesentium quod nihil aut
                autem maiores. Omnis?</p>
        </section>
    </div>
        <footer class="bg-success">
            <h3 class="mb-2 ms-3 text-light d-flex justify-content-center">Contact</h3>
            <ul class="d-flex d-inline-block justify-content-center" style="list-style:none;">
                <li style="padding: 4px 4px;">
                    <a href="https://www.facebook.com/new/" title="Facebook" target="_blank" xtm-t="E"
                        xtm-n="Social-footer::">
                        <img src="/ansrCoach/fb.png" style="width: 30px;height: 30px;" alt=""></a>
                </li>
                <li>
                    <a href="https://wa.me/c/91" title="Whatsapp" target="_blank" xtm-t="E"
                        xtm-n="Social-footer::">
                        <img src="/ansrCoach/whatsapp.png" class="my-1" style="width: 30px;height: 30px;"
                            alt=""></a>
                </li>
            </ul>
            <p class="d-flex justify-content-center bg-light mb-2"><a href="/ansrCoach/tnc.html">Terms and Condition</a>
            </p>
            <p class="d-flex justify-content-center bg-light my-2"><a href="/ansrCoach/privacy.html">Privacy Policy</a>
            </p>
            <p class="d-flex justify-content-center bg-light my-2"><a href="/ansrCoach/refund.html">Refund Policy</a></p>
            <p class="d-flex justify-content-center text-danger bg-dark my-2 foot">Copyright @AnsrCoachsocietyupliftment2021 </p>
        </footer>
    
</body>

</html>