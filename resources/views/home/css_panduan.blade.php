<style>
    

.lead {
  color: #aaa;
}

.wrapper {
  margin: 10vh;
}

/* post card styles */

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
  .card {
    min-height: 350px;
  }
}

@media (max-width: 420px) {
  .card {
    min-height: 300px;
  }
}

.card.card-has-bg {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size: 120%;
  background-repeat: no-repeat;
  background-position: center center;
}

.card.card-has-bg::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);
}

.card.card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
  background-size: 130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card.card-has-bg:hover .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: rgb(255, 186, 33);
  background: linear-gradient(0deg, rgba(255, 186, 33, 0.5) 0%, rgba(255, 186, 33, 1) 100%);
}

.card-footer {
  background: none;
  border-top: none;
}

.card-footer .media img {
  border: solid 3px rgba(255, 255, 255, 0.3);
}

.card-title {
  font-weight: 800;
}

.card-meta {
  color: rgba(0, 0, 0, 0.3);
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 2px;
}

.card-body {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card:hover .card-body {
  margin-top: 30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: rgb(255, 186, 33);
  background: linear-gradient(0deg, rgba(255, 186, 33, 0.3785889355742297) 0%, rgba(255, 186, 33, 1) 100%);
}

@media (max-width: 767px) {
}

</style>