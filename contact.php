<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kontakt</title>
    <meta name='viewport' content='width=device-width, initial-scale=1 shrink-to-fit=no'>
    <link rel="icon" href="assets/websitelogo_7pD_icon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/contactPageStyles.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/fontello-2db13937/css/fontello.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">
</head>
<body>
    <div class="overlayLoader">

    </div>
    <main class="mainContainer">
        <div class="circleSelector">
            <div class="circle">
    
            </div>
            <div class="circle">
                
            </div>
            <div class="circle">
                
            </div>
            <div class="circle">
                
            </div>
            <div class="circle">
                
            </div>
            <div class="square">
                
            </div>
        </div>
        <header class="topHeader">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="work.html">Work</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section class="nameBox">
            <div class="nameHeader">
            </div>
        </section>
        <section class="contactBasic">
            <div class="contactBox">
                <div class="contactBlockOne">
                    <h1>Skontaktuj się ze mną!</h1>
                </div>
                <div class="contactFormBox">
                    <form method="POST" class="contactBasicForm">
                        <input type="text" name="emailTitle" placeholder="Tytuł">
                        <input type="text" id="email" name="emailContact" placeholder="Twój Email">
                        <textarea  name="emailText" contenteditable="true"></textarea>
                        <input type="submit" name="emailSubmit" id="formSubmit" value="Wyślij!">
                    </form>
                </div>
                <div class="emailSentPopUp">
                    <p>Wiadomość została wysłana</p>
                </div>
            </div>
        </section>
        <section class="ctaButtonBox">
            <div class="boxDivider">
            </div>
        </section>
        <footer class="footerSection">
            <div class="footerBox">
                <p class="footerCopyright">Kuba Czerepski | 2021 &copy;</p>
                <ul class="footerIcons">
                    <li><a target="_blank" href="https://github.com/kubaczerepski"><i class="icon-github-circled-alt2"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/in/jakub-czerepski-a9090b212/"><i class="icon-linkedin-circled"></i></a></li>
                </ul>
            </div>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script>
        let box = document.querySelector(".contactBasicForm");
        function addAnimation (){
            box.classList.add('contactBasicAnimation');
            box.classList.remove('contactBasicAnimationOver');
            setTimeout( function() {
                box.classList.add('contactBasicAnimationOver');
            },3000);
        }
        function deleteAnimation() {
            box.classList.remove('contactBasicAnimation');
            box.classList.add('contactBasicAnimationOver');
        }
        box.addEventListener("mouseleave",deleteAnimation);
        box.addEventListener("mouseover",addAnimation);
    </script> 
</body>
</html>