<template>
    <section class="container faqArea">
        <h1 class="text-center font-weight-bold">Frequently Asked Questions</h1>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="What can we help you with?" aria-label="What can we help you with?" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#128269;</button>
        </div>
        <div v-if="currBlock===1" class="questionsBlock">
            <h1>Block №1</h1>
        </div>
        <div v-if="currBlock===2" class="questionsBlock">
            <h1>Block №2</h1>
        </div>
        <div v-if="currBlock===3" class="questionsBlock">
            <h1>Block №3</h1>
        </div>
        <div v-if="currBlock===4" class="questionsBlock">
            <h1>Block №4</h1>
        </div>
        <div v-if="currBlock===5" class="questionsBlock">
            <h1>Block №5</h1>
        </div>
        <div v-if="currBlock===6" class="questionsBlock">
            <h1>Block №6</h1>
        </div>
        <div class="faqBtnsDesk">
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(1)">
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 58 51" style="enable-background:new 0 0 58 51; width: 50px;" xml:space="preserve" >
                            <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M8.7,25.4c-0.6,0-1,0.4-1,1v4.9H2.8c-0.6,0-1,0.4-1,1v1.6c0,0.6,0.4,1,1,1h4.9v4.9c0,0.6,0.4,1,1,1h1.6  c0.6,0,1-0.4,1-1v-4.9h4.9c0.6,0,1-0.4,1-1v-1.6c0-0.6-0.4-1-1-1h-4.9v-4.9c0-0.6-0.4-1-1-1H8.7z"/>
                            <path style="fill:#46A748;" d="M13.6,0c-0.1,0-0.1,0-0.2,0C7.2,0.3,0.1,5.8,0,14.9c0,2.7,0.5,5.6,1.9,8.8C2.1,24.3,3,24.4,3.4,24l1.2-1.2  C4.9,22.5,5,22,4.9,21.6c-1-2.5-1.4-4.7-1.3-6.7C3.7,7.7,9.3,3.6,13.8,3.6c5.4,0,8.8,2.4,10.8,4.8c1,1.2,1.7,2.4,2.2,3.3  c0.2,0.4,0.4,0.8,0.5,1c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0,0,0,0l0,0l0,0c0.2,0.7,0.9,1.3,1.7,1.3s1.5-0.5,1.7-1.3l0,0l0,0  l0,0c0,0,0,0,0-0.1c0-0.1,0.1-0.1,0.1-0.3c0.1-0.2,0.2-0.6,0.5-1c0.4-0.9,1.1-2.1,2.2-3.3c2-2.3,5.4-4.7,10.8-4.8  c4.5,0.1,10.1,4.2,10.2,11.4C54.5,22.2,49,33.4,29,47c0,0,0,0,0,0s0,0,0,0c-3.4-2.3-6.4-4.6-9-6.8c-0.4-0.3-1-0.3-1.4,0.1l-1.1,1.1  c-0.4,0.4-0.4,1.1,0.1,1.5c2.8,2.3,5.9,4.7,9.4,7.1c1.2,0.8,2.8,0.8,4,0c20.2-13.8,27.1-25.9,27-35C57.9,5.8,50.8,0.3,44.6,0  c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-6.5,0.1-10.7,3-13.2,6C30,6.8,29.5,7.6,29,8.3  c-0.5-0.7-1-1.6-1.7-2.4C24.7,3,20.5,0.1,14,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0C13.7,0,13.7,0,13.6,0z"/>
                        </svg>
                    </div>
                    <h2>Food Safety and Covid-19 Updates</h2>
                </div>
            </div>
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(2)"> 
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 61 60" style="enable-background:new 0 0 61 60; width: 60px;" xml:space="preserve">
                            <g>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#46A748;" d="M31.1,19.9L31.1,19.9L31.1,19.9l0.1,0c0,0,0,0,0,0l18,2c0.4,0,0.7,0.3,0.8,0.6l4,10c0.2,0.5,0,1.1-0.6,1.3   c-0.1,0-0.2,0.1-0.4,0.1h-3v14.5c0,0.5-0.3,0.9-0.8,1l-18,3.5l0,0c0,0-0.1,0-0.1,0l0.1,0c-0.1,0-0.3,0-0.4,0l0.1,0c0,0-0.1,0-0.1,0   l0,0l-18-3.5c-0.5-0.1-0.8-0.5-0.8-1V33.9h-3c-0.6,0-1-0.4-1-1c0-0.1,0-0.3,0.1-0.4l4-10c0.1-0.1,0.1-0.3,0.2-0.4   c0.2-0.2,0.4-0.3,0.6-0.3l18-2c0,0,0,0,0,0l0,0C31,19.9,31.1,19.9,31.1,19.9L31.1,19.9L31.1,19.9z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M30.1,26l0,24.8l-16-3.1V33.9h12c0.4,0,0.8-0.2,0.9-0.6L30.1,26L30.1,26z M32.1,26l3,7.4   c0.1,0.3,0.4,0.6,0.8,0.6l0.1,0h12v13.7l-16,3.1L32.1,26L32.1,26z M32.7,22.1l15.7,1.7l3.2,8.1H36.7L32.7,22.1L32.7,22.1z    M29.5,22.1l-4.1,9.8H10.6l3.2-8.1C13.8,23.9,29.5,22.1,29.5,22.1z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M46.1,23.9c-4.4,0-8-3.6-8-8s3.6-8,8-8s8,3.6,8,8S50.5,23.9,46.1,23.9z"/>
                                <path style="fill:#FFFFFF;" d="M46.1,5.9c5.5,0,10,4.5,10,10c0,5.5-4.5,10-10,10s-10-4.5-10-10C36.1,10.4,40.6,5.9,46.1,5.9z M46.1,7.9   c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S50.5,7.9,46.1,7.9z M46.1,13.9c0.6,0,1,0.4,1,1v5c0,0.6-0.4,1-1,1s-1-0.4-1-1v-5   C45.1,14.4,45.6,13.9,46.1,13.9z M46.1,10.9c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S45.6,10.9,46.1,10.9z"/>
                            </g>
                        </svg>
                    </div>
                    <h2>About Brisk Meal</h2>
                </div>
            </div>
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(3)">
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 61 60" style="enable-background:new 0 0 61 60; width: 60px;" xml:space="preserve">
                            <g>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#46A748;" d="M49.9,21.1c0.3-0.5,0.9-0.6,1.4-0.3c0.5,0.3,0.6,0.9,0.3,1.4l-6.5,9.4h2.4c1.2,0,2.2,1,2.2,2.2   c0,0.2,0,0.3,0,0.5l-1.3,6.3c-1.1,5.2-5.7,9-11.1,9h-12c-5.4,0-10-3.8-11.1-9l-1.3-6.3c-0.3-1.2,0.5-2.4,1.7-2.6c0.1,0,0.3,0,0.5,0   h27.8L49.9,21.1z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M14.9,33.7c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0l1.3,6.3c0.9,4.3,4.7,7.4,9.1,7.4h12c4.4,0,8.2-3.1,9.1-7.4   l1.3-6.3c0-0.1,0-0.2-0.2-0.2c0,0,0,0,0,0H14.9z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M20.9,11.4c0.4,0.4,0.4,0.9,0.1,1.3l-0.1,0.1L19.7,14c-0.7,0.7-0.7,1.7,0,2.4c0.1,0.1,0.2,0.2,0.4,0.3   c1.8,1,2.4,3.3,1.4,5c-0.1,0.2-0.3,0.4-0.5,0.6l-0.2,0.2l-1.2,1.2c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-0.9-0.1-1.3l0.1-0.1l1.2-1.2   c0.7-0.7,0.7-1.7,0-2.4c-0.1-0.1-0.2-0.2-0.4-0.3c-1.8-1-2.4-3.3-1.4-5c0.1-0.2,0.3-0.5,0.5-0.7l0.1-0.1l1.2-1.2   C19.9,11,20.5,11,20.9,11.4C20.9,11.4,20.9,11.4,20.9,11.4z M43.8,11.4c0.4,0.4,0.4,0.9,0.1,1.3l-0.1,0.1L42.6,14   c-0.7,0.7-0.7,1.7,0,2.4c0.1,0.1,0.2,0.2,0.4,0.3c1.8,1,2.4,3.3,1.4,5c-0.1,0.2-0.3,0.4-0.5,0.6l-0.2,0.2l-1.2,1.2   c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-0.9-0.1-1.3l0.1-0.1l1.2-1.2c0.7-0.7,0.7-1.7,0-2.4c-0.1-0.1-0.2-0.2-0.4-0.3   c-1.8-1-2.4-3.3-1.4-5c0.1-0.2,0.3-0.5,0.5-0.7l0.1-0.1l1.2-1.2C42.8,11,43.4,11,43.8,11.4C43.8,11.4,43.8,11.4,43.8,11.4z    M31.4,11.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L31.6,14c-0.7,0.7-0.7,1.7,0,2.4c0.1,0.1,0.2,0.2,0.4,0.3c1.8,1,2.4,3.3,1.4,5   c-0.2,0.3-0.4,0.6-0.6,0.8l-1.2,1.2c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4l1.2-1.2c0.7-0.7,0.7-1.7,0-2.4   c-0.1-0.1-0.2-0.2-0.4-0.3c-1.8-1-2.4-3.3-1.4-5c0.2-0.3,0.4-0.6,0.6-0.8L31.4,11.4z"/>
                            </g>
                        </svg>
                    </div>
                    <h2>Recipes & Ingredients</h2>
                </div>
            </div>
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(4)"> 
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 61 60" style="enable-background:new 0 0 61 60; width:70px;" xml:space="preserve">
                            <g>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M22.5,22.5c2.5,0,5,0.6,7.5,1.9v12.2L15.8,24.1C18,23,20.3,22.5,22.5,22.5 M46.2,24.1L32,36.6V24.4   c2.5-1.3,5-1.9,7.5-1.9C41.7,22.5,44,23,46.2,24.1 M49,23.9C49,23.9,49,23.9,49,23.9c0-0.1,0-0.1,0-0.1c0-9.9-8.1-18-18-18   s-18,8.1-18,18c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0.1c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0,0,0,0l17,15   c0,0,0.1,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1l0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0s0,0,0,0c0.1,0,0.1,0,0.2,0   c0.1,0,0.1,0,0.2,0l0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0.1,0,0.1-0.1l17-15c0,0,0,0,0,0c0.1-0.1,0.2-0.2,0.2-0.3c0,0,0,0,0-0.1   C49,24.1,49,24,49,23.9"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M22.5,20.5c2.8,0,5.7,0.7,8.5,2.2c2.8-1.5,5.7-2.2,8.5-2.2c2.5,0,5,0.6,7.4,1.7C46.1,14.1,39.3,7.8,31,7.8   s-15.1,6.3-15.9,14.3C17.5,21.1,20,20.5,22.5,20.5"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#46A748;" d="M25.4,38.8h11.1c1.7,0,3,1.3,3,3v6c0,1.7-1.3,3-3,3H25.4c-1.7,0-3-1.3-3-3v-6C22.4,40.2,23.8,38.8,25.4,38.8"/>
                            </g>
                        </svg>
                    </div>
                    <h2>Shipping & Delivery</h2>
                </div>
            </div>
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(5)"> 
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 61 60" style="enable-background:new 0 0 61 60;" xml:space="preserve">
                            <g>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M20.7,12h23c1.7,0,3,1.3,3,3v35c0,1.7-1.3,3-3,3h-23c-1.7,0-3-1.3-3-3V15C17.7,13.3,19,12,20.7,12z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#46A748;" d="M43.7,12c1.7,0,3,1.3,3,3v35c0,1.7-1.3,3-3,3h-23c-1.7,0-3-1.3-3-3V15c0-1.7,1.3-3,3-3H43.7z M43.7,14h-23   c-0.6,0-1,0.4-1,1v35c0,0.6,0.4,1,1,1h23c0.6,0,1-0.4,1-1V15C44.7,14.4,44.2,14,43.7,14z M38.7,39.5c0.6,0,1,0.4,1,1s-0.4,1-1,1   h-13c-0.6,0-1-0.4-1-1s0.4-1,1-1H38.7z M38.7,31.5c0.6,0,1,0.4,1,1c0,0.5-0.4,0.9-0.9,1l-0.1,0h-13c-0.6,0-1-0.4-1-1   c0-0.5,0.4-0.9,0.9-1l0.1,0H38.7z M25.7,23.5h13c0.6,0,1,0.4,1,1c0,0.5-0.4,0.9-0.9,1l-0.1,0h-13c-0.6,0-1-0.4-1-1   c0-0.5,0.4-0.9,0.9-1L25.7,23.5h13H25.7z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M18.7,25c-4.4,0-8-3.6-8-8s3.6-8,8-8s8,3.6,8,8S23.1,25,18.7,25z"/>
                                <path style="fill:#FFFFFF;" d="M18.7,7c5.5,0,10,4.5,10,10s-4.5,10-10,10s-10-4.5-10-10S13.1,7,18.7,7z M18.7,9c-4.4,0-8,3.6-8,8s3.6,8,8,8   s8-3.6,8-8S23.1,9,18.7,9z M18.7,12c0.6,0,1,0.4,1,1v3.5l2.6,1.7c0.5,0.3,0.6,0.9,0.3,1.4c-0.3,0.5-0.9,0.6-1.4,0.3c0,0,0,0,0,0   l-3-2c-0.3-0.2-0.4-0.5-0.4-0.8v-4C17.7,12.4,18.1,12,18.7,12z"/>
                            </g>
                        </svg>
                    </div>
                    <h2>Billing</h2>
                </div>
            </div>
            <div class="faqBtnsCard" v-on:click="changeCurrBlock(6)"> 
                <div>
                    <div class="web-ukuwzk">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 61 60" style="enable-background:new 0 0 61 60; width: 70px;" xml:space="preserve">
                            <g>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#46A748;" d="M24,18.1c1.7,0,3,1.3,3,3v1.7c0.5,0.2,1,0.4,1.5,0.6l1.2-1.2c1.2-1.2,3.1-1.2,4.2,0l1.4,1.4   c1.2,1.2,1.2,3.1,0,4.2c0,0,0,0,0,0L34.2,29c0.2,0.5,0.5,1,0.6,1.5h1.7c1.7,0,3,1.3,3,3v2c0,1.7-1.3,3-3,3h-1.7   c-0.2,0.5-0.4,1-0.6,1.5l1.2,1.2c1.2,1.2,1.2,3.1,0,4.2c0,0,0,0,0,0L34,46.9c-1.2,1.2-3.1,1.2-4.2,0l-1.2-1.2   c-0.5,0.2-1,0.5-1.5,0.6v1.7c0,1.7-1.3,3-3,3h-2c-1.7,0-3-1.3-3-3v-1.7c-0.5-0.2-1-0.4-1.5-0.6l-1.2,1.2c-1.2,1.2-3.1,1.2-4.2,0   l-1.4-1.4c-1.2-1.2-1.2-3.1,0-4.2c0,0,0,0,0,0l1.2-1.2c-0.2-0.5-0.5-1-0.6-1.5H9.5c-1.7,0-3-1.3-3-3v-2c0-1.7,1.3-3,3-3h1.7   c0.2-0.5,0.4-1,0.6-1.5l-1.2-1.2c-1.2-1.2-1.2-3.1,0-4.2c0,0,0,0,0,0l1.4-1.4c1.2-1.2,3.1-1.2,4.2,0l1.2,1.2c0.5-0.2,1-0.5,1.5-0.6   v-1.7c0-1.7,1.3-3,3-3C22,18.1,24,18.1,24,18.1z M23,30.6c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S25.2,30.6,23,30.6z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M24,20.1c0.6,0,1,0.4,1,1v2.4c0,0.5,0.3,0.8,0.7,1c0.9,0.2,1.7,0.6,2.5,1c0.4,0.2,0.9,0.2,1.2-0.2l1.7-1.7   c0.4-0.4,1-0.4,1.4,0L34,25c0.4,0.4,0.4,1,0,1.4l-1.7,1.7c-0.3,0.3-0.4,0.8-0.2,1.2c0.5,0.8,0.8,1.6,1,2.5c0.1,0.4,0.5,0.7,1,0.7   h2.4c0.6,0,1,0.4,1,1v2c0,0.6-0.4,1-1,1h-2.4c-0.5,0-0.8,0.3-1,0.7c-0.2,0.9-0.6,1.7-1,2.5c-0.2,0.4-0.2,0.9,0.2,1.2l1.7,1.7   c0.4,0.4,0.4,1,0,1.4l-1.4,1.4c-0.4,0.4-1,0.4-1.4,0l-1.7-1.7c-0.3-0.3-0.8-0.4-1.2-0.2c-0.8,0.5-1.6,0.8-2.5,1   c-0.4,0.1-0.7,0.5-0.7,1v2.4c0,0.6-0.4,1-1,1h-2c-0.6,0-1-0.4-1-1v-2.4c0-0.5-0.3-0.8-0.7-1c-0.9-0.2-1.7-0.6-2.5-1   c-0.4-0.2-0.9-0.2-1.2,0.2l-1.7,1.7c-0.4,0.4-1,0.4-1.4,0L12,44.1c-0.4-0.4-0.4-1,0-1.4l1.7-1.7c0.3-0.3,0.4-0.8,0.2-1.2   c-0.5-0.8-0.8-1.6-1-2.5c-0.1-0.4-0.5-0.7-1-0.7H9.5c-0.6,0-1-0.4-1-1v-2c0-0.6,0.4-1,1-1h2.4c0.5,0,0.8-0.3,1-0.7   c0.2-0.9,0.6-1.7,1-2.5c0.2-0.4,0.2-0.9-0.2-1.2L12,26.4c-0.4-0.4-0.4-1,0-1.4l1.4-1.4c0.4-0.4,1-0.4,1.4,0l1.7,1.7   c0.3,0.3,0.8,0.4,1.2,0.2c0.8-0.5,1.6-0.8,2.5-1c0.4-0.1,0.7-0.5,0.7-1v-2.4c0-0.6,0.4-1,1-1L24,20.1z M23,28.6c-3.3,0-6,2.7-6,6   s2.7,6,6,6s6-2.7,6-6S26.3,28.6,23,28.6z"/>
                                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#D0438F;" d="M46,10.1c0.6,0,1,0.4,1,1v1.3c0.7,0.2,1.4,0.5,2.1,0.9l0.9-0.9c0.4-0.4,1-0.4,1.4,0l1.4,1.4   c0.4,0.4,0.4,1,0,1.4L51.9,16c0.4,0.6,0.7,1.3,0.9,2.1H54c0.6,0,1,0.4,1,1v2c0,0.6-0.4,1-1,1h-1.3c-0.2,0.7-0.5,1.4-0.9,2.1   l0.9,0.9c0.4,0.4,0.4,1,0,1.4c0,0,0,0,0,0l-1.4,1.4c-0.4,0.4-1,0.4-1.4,0l-0.9-0.9c-0.6,0.4-1.3,0.7-2.1,0.9v1.3c0,0.6-0.4,1-1,1   h-2c-0.6,0-1-0.4-1-1v-1.3c-0.7-0.2-1.4-0.5-2.1-0.9L40,27.8c-0.4,0.4-1,0.4-1.4,0l-1.4-1.4c-0.4-0.4-0.4-1,0-1.4c0,0,0,0,0,0   l0.9-0.9c-0.4-0.6-0.7-1.3-0.9-2.1H36c-0.6,0-1-0.4-1-1v-2c0-0.6,0.4-1,1-1h1.3c0.2-0.7,0.5-1.4,0.9-2.1l-0.9-0.9   c-0.4-0.4-0.4-1,0-1.4l1.4-1.4c0.4-0.4,1-0.4,1.4,0l0.9,0.9c0.6-0.4,1.3-0.7,2.1-0.9l0-1.3c0-0.6,0.4-1,1-1H46z M45,17.1   c-1.7,0-3,1.3-3,3s1.3,3,3,3s3-1.3,3-3S46.7,17.1,45,17.1z"/>
                            </g>
                        </svg>
                    </div>
                    <h2>Managing My Subscription</h2>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    props: [ ],
    data() {
        return {
            currBlock: 0
        };
    },
    methods: {
        changeCurrBlock(newBlock) {
           if(newBlock === this.currBlock){
                this.currBlock = 0;
           }else{
                this.currBlock = newBlock;
           };
        }
    },
    mounted() {
        
    }  
}
</script>

<style scoped>
    .faqArea{
        background-color: rgb(247, 247, 247);
    }
    h1{
        width: 100%;
        font-size: 32px;
        line-height: 40px;
        margin-top: 20px;
        margin-bottom: 32px;
        text-align: center;
        font-weight: 600;
    }
    h2{
        font-size: 18px;
        line-height: 24px;
        color: #333333;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
     
    }
    .questionsBlock{
        width: 100%;
        min-height: 100px;
        background-color: silver;
    }
    .web-ukuwzk{
        width: 98%;
        height: 60%;
        margin-bottom: 10px;
    }
    .web-1qm0795{
        height:50%;
        width: auto;
        margin-top: 50px;
    }
    .mb-3{
        width: 60%;
        margin-left: 15%;
    }
    .faqBtnsDesk{
        width: 98%;
        padding: 0 1% 0 1%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 60px;
    }
    .faqBtnsCard{
        width: 32%;
        min-height: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        background-color: white;
        border-radius: 9px;
        box-shadow: rgb(212 217 216) 0px 2px 0px;
        text-align: center;
        user-select: none;
        color: rgb(51, 51, 51);
        transition: color 0.15s ease 0s, box-shadow 0.15s ease 0s, transform 0;
        padding: 16px 16px 32px 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        -webkit-text-size-adjust: 100%;
    }
@media only screen and (max-width: 1100px) {
    .faqBtnsCard{
        width: 48%;
        min-height: 180px;
    }
}
@media only screen and (max-width: 700px) {
    .faqBtnsCard{
        width: 98%;
        min-height: 180px;
    }
}
</style>
