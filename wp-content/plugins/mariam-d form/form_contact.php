<?php
/*
Plugin Name: mariamd Contact Form Plugin
Author: Mansoura D
*/

function mariam_form_plugin(){
     $content = '';
   
     $content .= '<form method="post" action="http://localhost/CFP_GETECH/contactez-nous/211-2/" >';

    
    $content .= '<section class="mb-4">';

    
    $content .= '<h2 class="h1-responsive font-weight-bold text-center my-4">Dites-nous tout! </h2>';
    
    $content .= '<p class="text-center w-responsive mx-auto mb-5">
    Avez-vous des questions? N\'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans quelques heures pour vous aider.</p>';

    $content .= ' <div class="row">';

        
    $content .= '<div class="col-md-9 mb-md-0 mb-5">';
    $content .= '<form id="contact-form" name="contact-form" action="mail.php" method="POST">';

                
    $content .= '<div class="row">';

                    
    $content .= '<div class="col-md-6">';
    $content .= '<div class="md-form mb-0">';
    $content .= ' <input type="text" id="name" name="name" class="form-control">';
    $content .= ' <label for="name" class="">Votre nom</label>';
    $content .= ' </div>';
    $content .= '  </div>';
                    

                    
    $content .= ' <div class="col-md-6">';
    $content .= ' <div class="md-form mb-0">';
    $content .= ' <input type="text" id="email" name="email" class="form-control">';
    $content .= ' <label for="email" class="">Votre email</label>';
    $content .= ' </div>';
    $content .= '  </div>';
                    

    $content .= '   </div>';
                

                
    $content .= '<div class="row">';
    $content .= ' <div class="col-md-12">';
    $content .= ' <div class="md-form mb-0">';
    $content .= '<input type="text" id="subject" name="subject" class="form-control">';
    $content .= '  <label for="subject" class="">Sujet</label>';
    $content .= '  </div>';
    $content .= ' </div>';
    $content .= '</div>';
             
                
    $content .= ' <div class="row">';

                    
    $content .= '<div class="col-md-12">';

    $content .= '  <div class="md-form">';
    $content .= '<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>';
    $content .= '<label for="message">Your message</label>';
    $content .= '</div>';

    $content .= '</div>';
    $content .= ' </div>';
               

    $content .= ' </form>';

    $content .= ' <div class="text-center text-md-left">';
    $content .= '<input type="submit" name="envoyer" class="form-control">';
    $content .= '</div>';
    $content .= ' <div class="status"></div>';
    $content .= ' </div>';
        

        
    $content .= '<div class="col-md-3 text-center">';
    $content .= '<ul class="list-unstyled mb-0">';
    $content .= '<li><i class="fas fa-map-marker-alt fa-2x"></i>';
    $content .= ' <p>Tattaguine Escale</p>';
    $content .= ' </li>';

    $content .= ' <li><i class="fas fa-phone mt-4 fa-2x"></i>';
    $content .= ' <p>(+221) 77 433 97 16
    </p>';
    $content .= ' </li>';

    $content .= ' <li><i class="fas fa-envelope mt-4 fa-2x"></i>';
    $content .= ' <p>cfp.getech@gmail.com</p>';
    $content .= '  </li>';
    $content .= ' </ul>';
    $content .= ' </div>';
        

    $content .= '  </div>';

    $content .= '</section>';

    return $content;
    
}

//     $content .= ' <div>';
//         $content .= '<label>Nom: </label>';
//         $content .= '<input type="text" name="your_name" class="form-control">';
//     $content .= ' </div>';

//     $content .= ' <div>';
//         $content .= '<label>Email: </label>';
//         $content .= '<input type="email" name="your_email" class="form-control">';
//     $content .= ' </div>';
    
//     $content .= ' <div>';
//         $content .= '<label>Dites-nous tout! </label>';
//         $content .= '<textarea name"your_comment" placeholder"Votre commentaire ici..." class="form-control">';
//     $content .= ' </div>';

//     $content .= ' <div>';
//         $content .= '<input type="submit" name="envoyer" class="form-control">';
//     $content .= ' </div>';

//     $content .= '</form>';

    
//     
// 
add_shortcode('form_plugin','mariam_form_plugin');

function mariam_form_capture(){

    

    if(isset($_POST['envoyer'])){

        $nom = sanitize_text_field($_POST['your_name']);
        $email = sanitize_text_field($_POST['your_email']);
        $commentaire = sanitize_text_field($_POST['your_comment']);
        
        $to = 'mariama1.diouf@gmail.com';
        $subject = 'from mariam form plugin';
        $message =''.$nom.' - '.$email.' - '.$commentaire;
        wp_mail($to,$subject,$message);
    }

}

add_action('wp_head','mariam_form_capture');




?>