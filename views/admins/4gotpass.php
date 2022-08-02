<? #layout::themes/admin-interface; ?> 


<center>
    <div class="mform pt-3" id="centrage" >
    <i class="fas fa-key display-1"></i><br><br><br>
        <form class="needs-validation" method="post" id="cform">
            <div class="floating-label">      
                <input class="floating-input " type="email" placeholder=" " id="fgemail" name="fgemail">
                <span class="highlight"></span>
                <div class="invalid-feedback" id="in">Email invalide</div>
                <label>Adresse Mail</label>
            </div>
            <div id="ctrl"></div>
            <button type="button" class="btn btn-dark" id="forgpass">Rechercher</button><br><br>
            <em>
                <small style="font-size: 1em; cursor: pointer;"> 
                    <a style="text-decoration: none;" class="text-dark" href="/nadmin"> Se connecter <i class="fas fa-user-shield"></i> ? </a>  
                </small>
            </em>
        </form>
    </div>
</center>