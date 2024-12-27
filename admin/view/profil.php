<div class="graph">
        <div class="e-card playing">
            <div class="image"></div>
            
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            
        
            <div class="infotop">
                <div class="profil-image">
                    <img src="../asset/admin/<?=$dataA['image']?>" alt="" srcset="">
                </div>
                    <button class="byt">
                        <a href="./dashboard.php?page=<?=$page?>&drop=image_profil" style="color:black">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                </button>
                <div>
                    <div style="text-align: center;color: #fff;">
                        <?=$dataA['nom']?>
                    </div>
                    <div style="text-align: center;color: #fff;font-size: 12px;opacity: 80%;">
                        <?=$dataA['email']?>
                    </div>
                </div>
            </div>
        </div>
        <div class="gaxx">
            <div style="color: var(--blanc);letter-spacing: 2px;">
                Profil
            </div>
            <?php require 'view/form-profil.php';?>
        </div>
    </div>

    <div class="equi">
        
        <div class="e-r">
            <div class="social">
            <?php
                
                while ($data = $socials->fetch()) {
                    
                    ?>
                
                        <a href="<?=$data['url']?>" target="_blank">
                            <div class="cic">
                                <?=$data['svg']?>
                            </div>
                        </a>
                
                    <?php

                }
            
            ?>
                
                
                <a href="./dashboard.php?page=<?=$page?>&social=insertsocial">
                    <div class="cic">
                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9,17h6v6a1,1,0,0,0,2,0V17h6a1,1,0,0,0,0-2H17V9a1,1,0,0,0-2,0v6H9a1,1,0,0,0,0,2Z"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="scc">
                <div class="scsc">
                    <div>
                        <a href="../asset/fichier/Cv.pdf" target="_blank">
                            <div style="width: 200px;background: var(--grisxx);padding: 10px;border-radius: 1rem;border: 2px solid var(--gris);">
                                <?xml version="1.0" encoding="utf-8"?>

                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 56 64" enable-background="new 0 0 56 64" xml:space="preserve">
                                <g>
                                    <path fill="#8C181A" d="M5.1,0C2.3,0,0,2.3,0,5.1v53.8C0,61.7,2.3,64,5.1,64h45.8c2.8,0,5.1-2.3,5.1-5.1V20.3L37.1,0H5.1z"/>
                                    <path fill="#6B0D12" d="M56,20.4v1H43.2c0,0-6.3-1.3-6.1-6.7c0,0,0.2,5.7,6,5.7H56z"/>
                                    <path opacity="0.5" fill="#FFFFFF" enable-background="new    " d="M37.1,0v14.6c0,1.7,1.1,5.8,6.1,5.8H56L37.1,0z"/>
                                </g>
                                <path fill="#FFFFFF" d="M14.9,49h-3.3v4.1c0,0.4-0.3,0.7-0.8,0.7c-0.4,0-0.7-0.3-0.7-0.7V42.9c0-0.6,0.5-1.1,1.1-1.1h3.7
                                    c2.4,0,3.8,1.7,3.8,3.6C18.7,47.4,17.3,49,14.9,49z M14.8,43.1h-3.2v4.6h3.2c1.4,0,2.4-0.9,2.4-2.3C17.2,44,16.2,43.1,14.8,43.1z
                                    M25.2,53.8h-3c-0.6,0-1.1-0.5-1.1-1.1v-9.8c0-0.6,0.5-1.1,1.1-1.1h3c3.7,0,6.2,2.6,6.2,6C31.4,51.2,29,53.8,25.2,53.8z M25.2,43.1
                                    h-2.6v9.3h2.6c2.9,0,4.6-2.1,4.6-4.7C29.9,45.2,28.2,43.1,25.2,43.1z M41.5,43.1h-5.8V47h5.7c0.4,0,0.6,0.3,0.6,0.7
                                    s-0.3,0.6-0.6,0.6h-5.7v4.8c0,0.4-0.3,0.7-0.8,0.7c-0.4,0-0.7-0.3-0.7-0.7V42.9c0-0.6,0.5-1.1,1.1-1.1h6.2c0.4,0,0.6,0.3,0.6,0.7
                                    C42.2,42.8,41.9,43.1,41.5,43.1z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <a href="./dashboard.php?page=<?=$page?>&drop=cv" class="ibi">
                        Remplacer
                    </a>
                </div>
                <div class="scsc">
                    <div>
                        <div style="width: 200px;height: 220px;background: var(--grisxx);padding: 10px;border-radius: 1rem;border: 2px solid var(--gris);overflow: hidden;">
                            <img src="../asset/icon/logo.ico" style="width: 100%;height: 100%;" alt="">
                        </div>
                    </div>
                    <a href="./dashboard.php?page=<?=$page?>&drop=logo" class="ibi">
                        Remplacer
                    </a>
                </div>
                
            </div>
        </div>
        <div class="e-l">
            <?php require 'view/form-param.php';?>
        </div>
    </div>
        
        
    

</div>

<?php require 'view/social.php';?>
<?php require 'view/drop.php';?>

</div>




