<style>
    .about {
  position: fixed;
  z-index: 10;
  bottom: 10px;
  right: 10px;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  transition: all 0.2s ease;
}

.about .bg_links {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(5px);
  position: absolute;
}

.about .logo {
  width: 40px;
  height: 40px;
  z-index: 9;
  background-image: url(https://rafaelavlucas.github.io/assets/codepen/logo_white.svg);
  background-size: 50%;
  background-repeat: no-repeat;
  background-position: 10px 7px;
  opacity: 0.9;
  transition: all 1s 0.2s ease;
  bottom: 0;
  right: 0;
}

.about .social {
  opacity: 0;
  right: 0;
  bottom: 0;
}

.about .social .icon {
  width: 100%;
  height: 100%;
  background-size: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-color: transparent;
  display: flex;
  transition: all 0.2s ease, background-color 0.4s ease;
  opacity: 0;
  border-radius: 100%;
}

.about .social.portfolio {
  transition: all 0.8s ease;
}

.about .social.portfolio .icon {
  background-image: url(https://rafaelavlucas.github.io/assets/codepen/link.svg);
}

.about .social.dribbble {
  transition: all 0.3s ease;
}

.about .social.dribbble .icon {
  background-image: url(https://rafaelavlucas.github.io/assets/codepen/dribbble.svg);
}

.about .social.linkedin {
  transition: all 0.8s ease;
}

.about .social.linkedin .icon {
  background-image: url(https://rafaelavlucas.github.io/assets/codepen/linkedin.svg);
}

.about:hover {
  width: 105px;
  height: 105px;
  transition: all 0.6s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}

.about:hover .logo {
  opacity: 1;
  transition: all 0.6s ease;
}

.about:hover .social {
  opacity: 1;
}

.about:hover .social .icon {
  opacity: 0.9;
}

.about:hover .social:hover {
  background-size: 28px;
}

.about:hover .social:hover .icon {
  background-size: 65%;
  opacity: 1;
}

.about:hover .social.portfolio {
  right: 0;
  bottom: calc(100% - 40px);
  transition: all 0.3s 0s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}

.about:hover .social.portfolio .icon:hover {
  background-color: #698fb7;
}

.about:hover .social.dribbble {
  bottom: 45%;
  right: 45%;
  transition: all 0.3s 0.15s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}

.about:hover .social.dribbble .icon:hover {
  background-color: #ea4c89;
}

.about:hover .social.linkedin {
  bottom: 0;
  right: calc(100% - 40px);
  transition: all 0.3s 0.25s cubic-bezier(0.64, 0.01, 0.07, 1.65);
}

.about:hover .social.linkedin .icon:hover {
  background-color: #0077b5;
}

* {
  margin: 0;
  padding: 0;
  list-style: none;
  border: 0;
  outline: 0;
  -webkit-tap-highlight-color: transparent;
  text-decoration: none;
  color: inherit;
  box-sizing: border-box;
}

* :focus {
  outline: 0;
}

body {
  font-family: "Raleway", sans-serif;
}

.mainNav {
  width: 100%;
  height: 80px;
  position: absolute;
  z-index: 1;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #9197ae;
  text-transform: uppercase;
  padding: 0 40px;
}

@media screen and (max-width: 799px) {
  .mainNav {
    padding: 0 20px;
  }
}

.mainNav__logo {
  font-weight: 800;
  letter-spacing: 1px;
  font-size: 18px;
}

.mainNav__links {
  display: flex;
}

@media screen and (max-width: 799px) {
  .mainNav__links {
    display: none;
  }
}

.mainNav__link {
  letter-spacing: 1px;
  font-size: 14px;
  margin-left: 20px;
  font-weight: 600;
  box-shadow: inset 0px -10px 0px rgba(255, 255, 255, 0.5);
  transition: all 0.4s ease, transform 0.2s ease;
  padding: 2px 4px;
  transform: translateY(0px);
}

.mainNav__link:hover {
  transform: translateY(-5px);
  box-shadow: inset 0px -20px 0px white;
}

.mainNav__icon {
  background-image: url(https://rafaelalucas91.github.io/assets/icons/black/icon-141.svg);
  width: 32px;
  height: 32px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  display: none;
}

@media screen and (max-width: 799px) {
  .mainNav__icon {
    display: block;
  }
}

.mainHeading {
  width: 100%;
  height: 100%;
  position: relative;
  padding: 0 40px;
  background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
}

@media screen and (max-width: 799px) {
  .mainHeading {
    padding: 0 20px;
  }
}

.mainHeading__content {
  max-width: 1110px;
  min-height: 600px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}

@media screen and (max-width: 799px) {
  .mainHeading__content {
    min-height: 500px;
  }
}

.mainHeading__text {
  z-index: 1;
  color: #637498;
  background-color: rgba(255, 255, 255, 0.2);
  padding: 40px;
  max-width: 620px;
  margin-top: 100px;
  width: 70%;
  backdrop-filter: blur(8px);
  animation: text 0.8s 0.6s ease backwards;
  position: relative;
}

@media screen and (max-width: 799px) {
  .mainHeading__text {
    padding: 20px;
    margin: 90px 0 40px 0;
  }
}

.mainHeading__text:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.5);
  top: 0;
  left: 0;
  animation: line 0.8s 0.6s ease backwards;
}

@keyframes line {
  0% {
    right: 0;
    width: 100%;
    opacity: 0;
  }
}

@keyframes text {
  0% {
    opacity: 0;
    transform: translateX(200px);
  }
}

.mainHeading__preTitle {
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  margin-bottom: 16px;
  color: #637498;
}

.mainHeading__title {
  text-transform: uppercase;
  font-weight: 200;
  letter-spacing: 2px;
  margin-bottom: 24px;
  font-size: 40px;
  color: #637498;
}

@media screen and (max-width: 799px) {
  .mainHeading__title {
    margin-bottom: 16px;
    font-size: 28px;
  }
}

.mainHeading__description {
  letter-spacing: 0.5px;
  font-size: 16px;
  line-height: 26px;
}

@media screen and (max-width: 799px) {
  .mainHeading__description {
    font-size: 14px;
  }
}

.mainHeading__image {
  right: 0;
  max-width: 600px;
  width: 60%;
  height: 600px;
  transform: translatey(100px);
  position: absolute;
  overflow: hidden;
  animation: image 0.6s 0.2s ease backwards;
}

@media screen and (max-width: 799px) {
  .mainHeading__image {
    height: 480px;
    width: 70%;
    transform: translatey(80px);
    right: -6%;
  }
}

@keyframes image {
  0% {
    opacity: 0;
    transform: translatey(200px);
  }
}

.mainHeading__image:before,
.mainHeading__image:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 0%;
  top: 100%;
  background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
  opacity: 1;
  left: 0;
}

.mainHeading__image:before {
  animation: imageBefore 1s 0.2s ease backwards;
}

@keyframes imageBefore {
  0% {
    height: 100%;
    top: 0;
  }
}

.mainHeading__image:after {
  background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
  height: 100%;
  top: 0;
  opacity: 0.2;
}

.mainHeading__image img {
  width: 100%;
  height: 100%;
}

.cta {
  padding: 16px 32px;
  color: #637498;
  background-color: transparent;
  border: 1px solid rgba(99, 116, 152, 0.4);
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600;
  margin-top: 32px;
  cursor: pointer;
  box-shadow: inset 0px 0px 0px rgba(99, 116, 152, 0.2);
  transition: all 0.4s ease;
}

.cta:hover {
  border: 1px solid rgba(99, 116, 152, 0.1);
  box-shadow: inset 0px -80px 0px rgba(99, 116, 152, 0.1);
  transform: translateY(-5px);
}

@media screen and (max-width: 799px) {
  .cta {
    margin-top: 16px;
  }
}

@import url("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap");

</style><?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/home/css_home.blade.php ENDPATH**/ ?>