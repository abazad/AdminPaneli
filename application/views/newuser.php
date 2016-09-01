<div class="account-container register">
  <div class="content clearfix">
  <div class="message" id="message"></div>
    <form action="" method="post" onSubmit="return false">
      <h1>Yönetici Kayıt Formu</h1>
      <div class="login-fields">
        <p>Yeni üyenin bilgilerini giriniz:</p>
        <div class="field">
          <label for="firstname">İsim:</label>
          <input type="text" id="firstname" name="firstname" value="" placeholder="Adı" class="login" />
        </div>
        <!-- /field -->
        <div class="field">
          <label for="lastname">Soyisim:</label>
          <input type="text" id="lastname" name="lastname" value="" placeholder="Last Name" class="login" />
        </div>
        <!-- /field -->
        <div class="field">
          <label for="email">Nick:</label>
          <input type="text" id="nickname" name="nickname" value="" placeholder="Nick" class="login"/>
        </div>
        <!-- /field -->
        <div class="field">
          <label for="email">EMail Adresi:</label>
          <input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
        </div>
        <!-- /field -->
        <div class="field">
          <label for="password">Parola:</label>
          <input type="password" id="password" name="password" value="" placeholder="Parola" class="login"/>
        </div>
        <!-- /field -->
        <div class="field">
          <label for="confirm_password">Parola(Tekrar):</label>
          <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Parola (Tekrar)" class="login"/>
        </div>
        <!-- /field -->
      </div>
      <!-- /login-fields -->
      <div class="login-actions"> <span class="login-checkbox">
        <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
        <label class="choice" for="Field">Üyeliği onaylıyorum</label>
        </span>
        <button class="button btn btn-primary btn-large" onClick="newUser();">Kaydet</button>
      </div>
      <!-- .actions -->
    </form>
  </div>
  <!-- /content -->
</div>