<script setup></script>

<template>
    <!-- Hero Section Start -->
    <div class="container mx-auto px-5 overflow-x-hidden lg:overflow-x-visible" id="home" >
        <section class="grid grid-cols-none lg:grid-cols-2 pb-16 pt-8 items-center">
            <div class="lg:w-5/6 order-2 lg:order-none">
                <h1 class="text-4xl xl:text-5xl font-bold font-theme-heading text-center lg:text-left">A Simple Bookmark Manager</h1>
                <p class="lg:text-xl mt-10 font-theme-content text-theme-grayish-blue text-center lg:text-left">A clean and simple interface to organize your favourite websites. Open a new browser tab and see your sites load instantly. Try it for free.</p>
                <div class="flex justify-center lg:justify-start mt-10">
                    <LinkButton btn-type="primary" link="#download-section">Contact us</LinkButton>
                
                </div>
            </div>
            <!--div class="relative order-1 lg:order-none mb-20 lg:mt-0 lg:mb-0 lg:-mr-10">
                <img class="z-10 w-full" src="/images/1.jpeg" />
                <div class="-z-10 bg-theme-primary h-52 w-full sm:h-80 sm:w-full rounded-l-full absolute -right-28 md:-right-48 -bottom-8"></div>
            </div-->
            <div class="container2">
                <input class="radio-btn" type="radio" name="slider" id="btn1">
                <input class="radio-btn" type="radio" name="slider" id="btn2">
                <input class="radio-btn" type="radio" name="slider" id="btn3">
                
                <div class="images-container">
                <div class="image"><img src="/images/1.jpeg" alt=""></div>
                <div class="image"><img src="/images/6.jpg" alt=""></div> 
                <div class="image"><img src="/images/7.jpg" alt=""></div>
                </div>
        
                <div class="btn-container">
                <label class="btn" for="btn1"></label>
                <label class="btn" for="btn2"></label>
                <label class="btn" for="btn3"></label>
                </div>
            </div>
        </section>
    </div>
    <!-- Hero Section End -->
</template>
<style scoped>
body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;

}
.container{
    margin-right: 15px;
    padding: 25px;
}
.container2 {
    position: relative;
    width: 360px;
    height: 200px;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 10px 10px 10px #485460;
}
.radio-btn {
    display: none;
}
.images-container {
    display: flex;
    width: 300%;
    animation: slide-animation 10s infinite;
}
.image {
    width: 130%;
    border: none;
    border-radius: 12px;
}
.image img {
    max-width: 100%;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: none;
}
.btn-container {
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
}
.btn {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #ccc;
    margin: 5px;
    cursor: pointer;
    transition: .3s ease;
 }
.btn:hover {
    background-color: #f6b93b;
}
.radio-btn:checked + 
.images-container {
    animation-play-state: paused;
}
.radio-btn:nth-child(1):checked ~ 
.images-container{
    transform: translateX(-33.33%);
}
.radio-btn:nth-child(2):checked ~ 
.images-container{
    transform: translateX(-66.66%);
}

</style>