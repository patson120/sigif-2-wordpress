<div class="d-none"><?php  get_header(); ?></div>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="Index">
        <div class="drapeau-cameroun">
            <img src="<?= get_template_directory_uri() . '/img/cameroon-flag-anim.gif' ?>" alt="Drapeau du Cameroun">
        </div>
        <div class="logo-minfof">
            <img src="<?= get_template_directory_uri() . '/img/logo-minfof.png' ?>" alt="Logo minfof">
        </div>
        <div class="container-fluid rounded-pill" style="padding: 8px; background: green">
            <div class="rounded-pill" style="padding: 8px; background: red">
                <div class="rounded-pill" style="padding: 8px; background: yellow">
                    <div class="block-accueil bg-success rounded-pill container-fluid position-relative d-md-flex justify-content-between">
                        <h2 class="h4 text-white mx-5 align-text-center w-25 h-100">SYSTEME INFORMATIQUE DE GESTION DES INFORMATIONS FORESTIERES</h2>
                        <h2 class="h4 text-white mx-5 align-text-center w-25 h-100">FOREST INFORMATION MANAGEMENT COMPUTER SYSTEM</h2>
                        <div class="block-cercle rounded-circle position-absolute">
                            <a href=" <?= home_url('/actualite')?>" class="nav-link btn startnow text-white d-flex justify-content-center rounded-pill px-5">Start now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="http://sigif2.cm/sigif/faces/login.jspx" class="nav-link btn accederapp text-white d-flex justify-content-center rounded-pill px-5">Accéder à l'application</a>
        <a href="http://sigif2.cm/sigif/faces/login.jspx" class="nav-link btn accesapp text-white d-flex justify-content-center rounded-pill px-5">Access to the application</a>
                    
        <div class="followers">
            <a target="_blank" href="https://ne-np.facebook.com/abkradioofficiel/posts/958223354981986/">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.875" height="34.664" viewBox="0 0 34.875 34.664">
                    <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook" d="M35.438,18A17.438,17.438,0,1,0,15.275,35.227V23.041h-4.43V18h4.43V14.158c0-4.37,2.6-6.784,6.586-6.784a26.836,26.836,0,0,1,3.9.34V12h-2.2a2.52,2.52,0,0,0-2.841,2.723V18h4.836l-.773,5.041H20.725V35.227A17.444,17.444,0,0,0,35.438,18Z" transform="translate(-0.563 -0.563)" fill="#F1F1F1"/>
                </svg>
            </a>

        </div>
    </div>
<?php endwhile; endif; ?>

