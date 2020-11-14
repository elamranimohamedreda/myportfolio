<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-language" content="fr" />
        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/jquery-3.3.1.slim.min.js"></script>
        <script src="./js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="./css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./css/mybootstrap.css"/>
        <link rel="stylesheet" href="./css/glyphicones.css"/>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/brands.css"/>
        <link rel="stylesheet" href="fontawesome/css/brands.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/fontawesome.css"/>
        <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/regular.css"/>
        <link rel="stylesheet" href="fontawesome/css/regular.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/solid.css"/>
        <link rel="stylesheet" href="fontawesome/css/solid.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/svg-with-js.css"/>
        <link rel="stylesheet" href="fontawesome/css/svg-with-js.min.css"/>
        <link rel="stylesheet" href="fontawesome/css/v4-shims.css"/>
        <link rel="stylesheet" href="fontawesome/css/v4-shims.min.css"/>
        <script src="fontawesome/js/all.js"/></script>
        <script src="fontawesome/js/all.min.js"/></script>
        <script src="fontawesome/js/brands.js"/></script>
        <script src="fontawesome/js/brands.min.js"/></script>
        <script src="fontawesome/js/conflict-detection.js"/></script>
        <script src="fontawesome/js/conflict-detection.min.js"/></script>
        <script src="fontawesome/js/fontawesome.js"/></script>
        <script src="fontawesome/js/fontawesome.min.js"/></script>
        <script src="fontawesome/js/regular.js"/></script>
        <script src="fontawesome/js/regular.min.js"/></script>
        <script src="fontawesome/js/solid.js"/></script>
        <script src="fontawesome/js/solid.min.js"/></script>
        <script src="fontawesome/js/v4-shims.js"/></script>
        <script src="fontawesome/js/v4-shims.min.js"/></script>
        <link rel="stylesheet" href="css/styles-inscription.css"/>
        <link rel='icon' href='icon/bestchoicev2.ico.png'/>
        <style>
            #warning{
                display:none;
            }
            body{
                margin-top:6.6%;
            }
            @font-face{
                font-family:my5font;
                src:url(font-family/AstroSpace-0Wl3o.otf);
            }
        </style>
        <title>Admin 4.0</title>
    </head>
    <body class="bg-dark">        
        <div class="container text-center bg-warning shadow-lg px-5 pt-1 mt-5 text-dark w-75 rounded" id="login-body">
            <h1 class="h1 m-3">Se Connectez</h1>
            <hr class="bg-dark w-50 mt-0 mb-5"/>
            <section class="d-flex justify-content-center mx-3">
                <form action="verifier.php" method="POST" class="text-left col-lg-12">
                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-group-prepend" id="lema">
                                <span class="input-group-text px-lg-5 px-xl-5 px-md-5 px-sm-4"><i class="fas fa-user"></i></span>
                            </div>
                <input id="ema" type="email" class="form-control" value='<?php if(isset($_COOKIE['logadm'])){ echo $_COOKIE['logadm']; }?>' aria-label="Amount (to the nearest dollar)" name="ema" placeholder="Email">
              </div>
                        
                        </div>
                    <div class="form-row mt-2 mb-2">
                        <div class="input-group">
                <div class="input-group-prepend" id="lpas">
                    <span class="input-group-text px-lg-5 px-xl-5 px-md-5 px-sm-4"><i class="fas fa-lock "></i></span>
                </div>
                <input id="pas" type="password" class="form-control" value='<?php if(isset($_COOKIE['passadm'])){ echo $_COOKIE['passadm']; }?>' aria-label="Amount (to the nearest dollar)" name="pasc" placeholder="mot de pass">
              </div>
                </div>
                    
                    <div class="form-row ml-1">
                            <label class="text-dark"><input type="checkbox" name="sou" class="custom-checkbox mr-1"/>Se souvenir de moi</label>
                        </div>
                    <div class="form-row bg-warning">
                        <div class="form-group col-lg-12 bg-warning btn-group">
                            <input type="button" value="Inscrir" name="ins" class="btn btn-outline-success active offset-lg-0 col-lg-9 offset-xl-0 col-xl-9 offset-md-0 col-md-9 offset-sm-0 col-sm-7 mt-1 mb-1" id="sub"/>
                            <input type="button" id="reset" value="Annulez" class="btn btn-dark active text-white col-lg-3 col-xl-3 col-md-3 col-sm-5 mt-1 mb-1"/>
                        </div>
                    </div>
                    
                    <div class="form-row position-relative">
                        <div id="warning" class="alert alert-danger col-lg-12 position-absolute mt-3">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-3 offset-lg-2 text-right"><strong>Attention :&nbsp;</strong></div><div class="col-lg-7"><span id="content">- Le mot de pass sans confirmer !</span></div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        
<!--Footer--> 
<footer class="page-footer font-small bg-dark fixed-bottom"> 
 <div class="footer-copyright text-center pb-2 pt-3 bg-warning text-dark">
      <h6>Copyright © 2020</h6>
  </div>
</footer>
        <script>
            $("#sub").click(()=>{
                if($("input[name='ema']").val()==""){$("#lema span").addClass("text-danger")}else{$("#lema span").removeClass("text-danger")}
                if($("input[name='pasc']").val()==""){$("#lpas span").addClass("text-danger")}else{$("#lpas span").removeClass("text-danger")}
                if($("input[name='ema']").val()&&$("input[name='pasc']").val()&&document.getElementsByName("ema")[0].value.includes("@")&&document.getElementsByName("ema")[0].value.includes(".")){
                    var sou=document.getElementsByName("sou")[0].checked;
                    var ema=$("input[name='ema']").val();
                    var pasc=$("input[name='pasc']").val();
//                    console.log(sou);
//                    console.log(ema);
//                    console.log(pasc);
                    $.ajax({
                        url:"reply.php",type:"POST",data:"log="+ema+"&pasc="+pasc+"&sou="+sou+"&mesadmin=Connection"
                    }).done((res)=>{
                        console.log(res);
                        if(res.includes("location")){window.location='index.php';}
                        else{
                            $("#content").html(res);
                            $("#warning").css("display","block")
                            let i=0;
                            let a=setInterval(frame,1000);
                            function frame(){if(i==3){clearInterval(a);i=0;$("#warning").fadeOut(1000);}else{i++}}
                        }
                    });
                }else{
                    $("#lpas2 span").css("color","red");
                    $("#warning").css("display","block");
                    $("#content").html("Le login ou le mot de pass est incorrect !");
                    $("#warning").addClass("alert-danger");
                    let i=0;
                    let a=setInterval(frame,1000);
                    function frame(){
                        if(i==5){
                            i=0;
                            clearInterval(a);
                            $("#warning").fadeOut(1000);
                        }else{
                            i++;
                        }
                    }
                }
            })
            $("#reset").click(()=>{
                $("#ema").val("");
                $("#pas").val("");
            })
        </script>
        <?php
        // put your code here
        if(isset($_COOKIE['pasc'])&&isset($_COOKIE['log'])){
            ?> <script>$("input[name='pasc']").val(<?=$_COOKIE['pasc']?>);$("input[name='ema']").val('<?=$_COOKIE['log']?>');console.log($("input[name='ema']").val('<?=$_COOKIE['log']?>'))</script> <?php
        }
        if(isset($_GET['dec'])){
            
            session_destroy();
        }
        ?>
    </body>
</html>
