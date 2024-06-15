<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');

.bodynav {
  background: #eaeef6;
  font-family: 'Open Sans', sans-serif;
}

.navbar {
  position: fixed;
  top: 1rem;
  left: 1rem;
  background: #fff;
  border-radius: 10px;
  padding: 1rem 0;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.25);
  height: calc(100vh - 4rem);
  z-index: 9999; /* Pastikan nilai z-index tinggi */
}

.navbar__link {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 5.5rem;
  width: 4rem;
  color: #6a778e;
  transition: 250ms ease all;
}

.navbar__link span {
  position: absolute;
  left: 100%;
  transform: translate(-3rem);
  margin-left: 1rem;
  opacity: 0;
  pointer-events: none;
  color: #fff;
  background: #667eac;
  padding: 0.75rem;
  transition: 250ms ease all;
  border-radius: 17.5px;
}

.navbar__link:hover {
  color: #fff;
}

.navbar:not(:hover) .navbar__link:focus,
.navbar__link:hover span {
  opacity: 1;
  transform: translate(0);
}

.navbar__menu {
  position: relative;
}

.navbar__item:last-child:before {
  content: '';
  position: absolute;
  opacity: 0;
  z-index: -1;
  top: 0;
  left: 1rem;
  width: 3.5rem;
  height: 3.5rem;
  background: #406ff3;
  border-radius: 17.5px;
  transition: 250ms cubic-bezier(1, 0.2, 0.1, 1.2) all;
}

@keyframes gooeyEffect-1 {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}

@keyframes gooeyEffect-2 {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}

/* Add additional keyframes as needed for gooeyEffect-3 to gooeyEffect-11 */

.navbar__item:first-child:nth-last-child(1),
.navbar__item:first-child:nth-last-child(1) ~ li {
  &:hover ~ li:last-child:before {
    opacity: 1;
  }
  &:last-child:hover:before {
    opacity: 1;
  }
  &:nth-child(1):hover ~ li:last-child:before {
    animation: gooeyEffect-1 250ms 1;
  }
  &:last-child:hover:before {
    animation: gooeyEffect-1 250ms 1;
  }
}

.navbar__item:first-child:nth-last-child(2),
.navbar__item:first-child:nth-last-child(2) ~ li {
  &:hover ~ li:last-child:before {
    opacity: 1;
  }
  &:last-child:hover:before {
    opacity: 1;
  }
  &:nth-child(1):hover ~ li:last-child:before {
    animation: gooeyEffect-2 250ms 1;
  }
  &:nth-child(2):hover ~ li:last-child:before {
    animation: gooeyEffect-2 250ms 1;
  }
  &:last-child:hover:before {
    animation: gooeyEffect-2 250ms 1;
  }
}

/* Add additional styles as needed for nth-last-child(3) to nth-last-child(11) */

</style><?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/layout/css_nav.blade.php ENDPATH**/ ?>