<?php

$tz  = new DateTimeZone('Europe/Rome');
$age = DateTime::createFromFormat('d/m/Y', '26/09/1997', $tz)
    ->diff(new DateTime('now', $tz))
    ->y;

$languages = array(
    'it' => array(
        'flag_file' => "img/it.png",
        'bio' => "
            <h3>Su di me</h3>\n
            <p>Sono Stefano e ho $age anni. Vengo da Orzinuovi, Brescia e attualmente vivo a Milano, dove studio.</p>\n
            <p>Sono laureato in Ingegneria Informatica al Politecnico di Milano e sto studiando 
            per un Master con specializzazione in Intelligenza Artificiale e Machine Learning.</p>\n
            
            <p>Ho esperienze in diversi linguaggi di programmazione tra cui:\n
            <ul>\n
                <li>Python</li>\n
                <li>PHP</li>\n
                <li>Java</li>\n
                <li>C</li>\n
            </ul>\n
            e una buona conoscenza di macOS e dei sistemi operativi Linux.</p>",
        'profiles' => "
            <h3>I miei profili</h3>\n
            <p>Puoi trovarmi su questi siti:\n
            <ul class='fa-ul'>\n
                <li><i class='fa-li fab fa-github' aria-hidden='true'></i><a href='https://github.com/stefanominotti' target='_blank'>GitHub</a></li>\n
                <li><i class='fa-li fab fa-linkedin' aria-hidden='true'></i><a href='https://www.linkedin.com/in/stefano-minotti' target='_blank'>LinkedIn</a></li>\n
                <li><i class='fa-li fab fa-instagram' aria-hidden='true'></i><a href='https://www.instagram.com/stefano_minotti' target='_blank'>Instagram</a></li>\n
                <li><i class='fa-li fab fa-twitter' aria-hidden='true'></i><a href='https://twitter.com/stefano_minotti' target='_blank'>Twitter</a></li>\n
            </ul></p>",
        'contacts' => "
            <h3>Contatti</h3>
            <p>Puoi contattarmi tramite:
            <ul class='fa-ul'>\n
                <li><i class='fa-li fab fa-telegram' aria-hidden='true'></i><a href='https://telegram.me/stefanominotti' target='_blank'>Telegram</a></li>\n
                <li><i class='fa-li fa fa-envelope' aria-hidden='true'></i><a href='#' id='mailto-link'>Mail</a></li>\n
            </ul>"
    ),
    'en' => array(
        'flag_file' => "img/us.png",
        'bio' => "
            <h3>About me</h3>\n
            <p>I'm Stefano and I'm $age. I'm from Orzinuovi, Brescia but I'm currently based in Milan where I study.</p>\n 
            <p>I have a Bachelor's Degree in Computer Science and Engineering at Politecnico di Milano and I'm studying 
            for a Master's Degree with specialization in Artificial Intelligence and Machine Learning.</p>\n
            
            <p>I have some experience in multiple programming languages such as:\n
            <ul>\n
                <li>Python</li>\n
                <li>PHP</li>\n
                <li>Java</li>\n
                <li>C</li>\n
            </ul>\n
            and a good knowledge of macOS and Linux OSs.</p>",
        'profiles' => "
            <h3>Me on the Internet</h3>\n
            <p>You can find me on these websites:\n
            <ul class='fa-ul'>\n
                <li><i class='fa-li fab fa-github' aria-hidden='true'></i><a href='https://github.com/stefanominotti' target='_blank'>GitHub</a></li>\n
                <li><i class='fa-li fab fa-linkedin' aria-hidden='true'></i><a href='https://www.linkedin.com/in/stefano-minotti' target='_blank'>LinkedIn</a></li>\n
                <li><i class='fa-li fab fa-instagram' aria-hidden='true'></i><a href='https://www.instagram.com/stefano_minotti' target='_blank'>Instagram</a></li>\n
                <li><i class='fa-li fab fa-twitter' aria-hidden='true'></i><a href='https://twitter.com/stefano_minotti' target='_blank'>Twitter</a></li>\n
            </ul></p>",
        'contacts' => "
            <h3>Contacts</h3>
            <p>You can contact me through:
            <ul class='fa-ul'>\n
                <li><i class='fa-li fab fa-telegram' aria-hidden='true'></i><a href='https://telegram.me/stefanominotti' target='_blank'>Telegram</a></li>\n
                <li><i class='fa-li fa fa-envelope' aria-hidden='true'></i><a href='#' id='mailto-link'>Mail</a></li>\n
            </ul>"
    )
);