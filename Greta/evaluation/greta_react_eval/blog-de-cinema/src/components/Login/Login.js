import React, { useState } from "react";
import ReCAPTCHA from "react-google-recaptcha";
import "./Login.css";

const Login = () => {
  const [recaptchaValue, setRecaptchaValue] = useState("");

  const handleRecaptchaChange = (value) => {
    setRecaptchaValue(value);
  };

  const handleSubmitLogin = (event) => {
    event.preventDefault();
    if (!recaptchaValue) {
      alert("Veuillez compléter le reCAPTCHA.");
      return;
    }
    console.log("Login:", event.target.login.value);
    console.log("Mot de passe:", event.target.password.value);
    console.log("Captcha:", recaptchaValue);
  };

  const handleSubmitSignup = (event) => {
    event.preventDefault();
    if (!recaptchaValue) {
      alert("Veuillez compléter le reCAPTCHA.");
      return;
    }
    console.log("Nom:", event.target.firstName.value);
    console.log("Prénom:", event.target.lastName.value);
    console.log("Email:", event.target.email.value);
    console.log("Confirmer Email:", event.target.confirmEmail.value);
    console.log("Mot de passe:", event.target.signupPassword.value);
    console.log("Confirmer Mot de passe:", event.target.confirmPassword.value);
    console.log("Captcha:", recaptchaValue);
  };

  return (
    <div className="login-container">
      <div className="form-section">
        <form onSubmit={handleSubmitLogin} className="login-form">
          <h3>Identification</h3>
          <label htmlFor="login">Login:</label>
          <input type="text" id="login" required />
          <label htmlFor="password">Mot de passe:</label>
          <input type="password" id="password" required />
          <a href="#forgot-password">Mot de passe oublié ?</a>
          <div className="captcha-container">
            <ReCAPTCHA
              sitekey="YOUR_RECAPTCHA_SITE_KEY"
              onChange={handleRecaptchaChange}
            />
          </div>
          <button type="submit">Se connecter</button>
        </form>
      </div>
      <div className="divider"></div>
      <div className="form-section">
        <form onSubmit={handleSubmitSignup} className="signup-form">
          <h3>Inscription</h3>
          <label htmlFor="firstName">Prénom:</label>
          <input type="text" id="firstName" required />
          <label htmlFor="lastName">Nom:</label>
          <input type="text" id="lastName" required />
          <label htmlFor="email">Adresse mail:</label>
          <input type="email" id="email" required />
          <label htmlFor="confirmEmail">Confirmer l'adresse mail:</label>
          <input type="email" id="confirmEmail" required />
          <label htmlFor="signupPassword">Mot de passe:</label>
          <input type="password" id="signupPassword" required />
          <label htmlFor="confirmPassword">Confirmer le mot de passe:</label>
          <input type="password" id="confirmPassword" required />
          <div className="captcha-container">
            <ReCAPTCHA
              sitekey="YOUR_RECAPTCHA_SITE_KEY"
              onChange={handleRecaptchaChange}
            />
          </div>
          <button type="submit">S'inscrire</button>
        </form>
      </div>
    </div>
  );
};

export default Login;
