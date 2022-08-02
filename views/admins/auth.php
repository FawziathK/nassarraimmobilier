<? #layout::themes/admin-interface; ?> 


<center>
    <div class="mform pt-3" id="centrage" >
    <i class="fas fa-user-shield display-1"></i><br><br><br>
        <form class="needs-validation" method="post" id="cform">
            <div class="floating-label">      
                <input class="floating-input " type="email" placeholder=" " id="username" name="username">
                <span class="highlight"></span>
                <div class="invalid-feedback" id="in">Email invalide</div>
                <label>Nom d'utilisateur </label>
            </div>
            <div class="floating-label">      
                <input class="floating-input" type="password" placeholder=" " id="password" name="password">
                <span class="highlight"></span>
                <div class="invalid-feedback" id="in">8 caractères minimum</div>
                <label>Mot de passe </label>
            </div>
            <div id="ctrl"></div>
            <button type="button" class="btn btn-dark" id="btn-log">Se connecter</button><br><br>
            <em>
                <small style="font-size: 1em; cursor: pointer;"> 
                    <a style="text-decoration: none;" class="text-dark" href="/nadmin/mot-de-passe-oublier"> Mot de passe oublier <i class="far fa-frown"></i> ? </a>  
                </small>
            </em>
        </form>
    </div>
</center>