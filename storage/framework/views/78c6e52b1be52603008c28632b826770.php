<style>
.bodypanduan {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
}

.container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 40px 0;
}

.container .card {
    position: relative;
    width: 200px;
    height: 300px;
    margin: 20px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container .card .imgBx {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.container .card .imgBx img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.container .card .content {
    position: absolute;
    bottom: -160px;
    width: 100%;
    height: 160px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10;
    flex-direction: column;
    backdrop-filter: blur(15px);
    box-shadow: 0 -10px 10px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    transition: bottom 0.5s;
    transition-delay: 0.8s;
}

.container .card:hover .content {
    bottom: 0px;
    transition-delay: 0s;
}

.container .card .content .contentBx h3 {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 500;
    font-size: 12px;
    line-height: 1.1em;
    text-align: center;
    margin: 5px 0 15px;
    transition: 0.5s;
    opacity: 0;
    transform: translateY(-20px);
    transition-delay: 0.6s;
}

.container .card:hover .content .contentBx h3 {
    opacity: 1;
    transform: translateY(0px);
}

.container .card .content .contentBx h3 span {
    font-size: 9px;
    font-weight: 300;
    text-transform: initial;
}

.container .card .content .sci {
    position: relative;
    bottom: 10px;
    display: flex;
}

.container .card .content .sci li {
    list-style: none;
    margin: 10px;
    transform: translateY(40px);
    transition: 0.5s;
    opacity: 0;
    transition-delay: calc(0.2s * var(--i));
}

.container .card:hover .content .sci li {
    transform: translateY(0px);
    opacity: 1;
}

.container .card .content .sci li a {
    color: #fff;
}

</style><?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/home/css_panduan.blade.php ENDPATH**/ ?>