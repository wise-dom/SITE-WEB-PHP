<?php include 'header.php' ?>

<div class="content">
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">creer un nouveau compte?</span>
              <form id="stripe-login">
                <div class="field padding-bottom--24">
                    <label for="name">Nom</label>
                    <input type="name" name="nom">
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                </div>
                
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">mot de passe </label>
                  </div>
                  <input type="password" name="mot de passe">
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="valider">
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="footer-link padding-top--24">
            <span><strong>j'ai deja un compte? <a href="form.html" style="color: beige;">login</a></strong> </span>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  </div>












