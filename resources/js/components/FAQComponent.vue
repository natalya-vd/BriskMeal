<template>
    <section class="container faqArea">
        <h1 class="text-center font-weight-bold">Frequently Asked Questions</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="What can we help you with?" aria-label="What can we help you with?" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#128269;</button>
        </div>
        <questions-block  v-for="item in questions"  :key="item.id" :currBlock="currBlock" :faqs="item.faqs" :item="item"></questions-block>
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
            currBlock: 0,
            questions: [
                {id: 1,
                title: "Food Safety and Covid-19 Updates",
                faqs:[
                    {id: 1,
                    question: "What is a safe internal temperature for cooking meat and poultry?",
                    answer: "Cook all raw beef, pork, lamb and veal steaks, chops, and roasts to a minimum internal temperature of 145 °F as measured with a food thermometer before removing meat from the heat source. For safety and quality, allow meat to rest for at least three-minutes before carving or consuming. Cook all raw ground beef, pork, lamb, and veal to an internal temperature of 160 °F. Cook all poultry (whole, pieces &amp; ground) to an internal temperature of 165 °F as measured with a food thermometer. (ask.usda.gov)"},
                    {id: 2,
                    question: "How do I know when my food is “done”?",
                    answer: "The best way to know if your food is done cooking is to use a food thermometer. When your food reaches a safe internal temperature as measured by a food thermometer, it is done and ready to eat. (Partnership for Food Safety Education)"},
                    {id: 3,
                    question: "When and how should I wash my hands during the cooking process?",
                    answer: "Handwashing is important to the overall cooking process and will help keep you healthy. Wash your hands with soap and water before you start cooking and after each time you touch uncooked or raw meats, poultry, seafood, flour or eggs during cooking."},
                    {id: 4,
                    question: "Do I need to wash any of the produce? How should fresh produce be washed before eating?",
                    answer: "To ensure food safety, we recommend that you wash all fresh produce prior to consumption, including: fruits, vegetables, and herbs. Fresh produce typically comes straight from the farm, so rinsing or scrubbing your produce is advised. Gently rub produce 'skin', such as tomatoes, under cold running water. Scrub firm produce, such as carrots or onions, with a clean produce brush under running water."},
                    {id: 5,
                    question: "Should I wash meat or poultry before cooking?",
                    answer: "Do not wash or rinse raw meat or poultry before you cook it. Washing can cause bacteria found on the surface of meat or poultry to be spread to ready-to-eat foods, kitchen utensils, and counter surfaces. This is called cross-contamination. Failure to clean these contaminated areas can lead to foodborne illness. Cooking (baking, broiling, boiling, and grilling) to the right temperature kills the bacteria, so washing food is not necessary. Using a food thermometer is the only sure way of knowing if your food has reached a high enough temperature to destroy foodborne bacteria."},
                    {id: 6,
                    question: "If I experienced a food safety issue with my box, ingredient(s), and/or specific meal-kit, what should I do?",
                    answer: "At EveryPlate, the safety and quality of our ingredients is our highest priority. In the event that you experience a food safety issue or concern with your order, please reach out to our Customer Care team. You will be directed to a specialized team of food safety agents who provide dedicated support and assistance. To better aid our investigation process, we may ask for additional information regarding your order (i.e. recipe names, pictures, delivery and packaging information)."},
                    {id: 7,
                    question: "Will COVID-19 impact your food supply?",
                    answer: "Our teams have prepared for a variety of scenarios and are working closely with our vast network of suppliers to minimize any disruptions to your service. Our food supply has not been impacted and we’re working hard to maintain safe and dependable service. If we anticipate any delays or changes to your upcoming order, we will notify you immediately through email."},
                    {id: 8,
                    question: "Are Green Chef employees offered paid sick leave?",
                    answer: "Yes. The health and wellbeing of our employees and customers is our highest priority. As such, all of our employees are given paid sick leave. We’ve also enhanced our sick leave and attendance policies to support our hourly employees who may have been directly impacted, are feeling symptomatic and/or those who are mandated to self-quarantine. In addition, we’re providing added flexibility to working parents who are navigating school and daycare closures."},
                    {id: 9,
                    question: "Can COVID-19 be transmitted through food?",
                    answer: "According to the Centers for Disease Control (CDC) “there is no evidence to support the spread of COVID-19 through food.” Additionally, “there is likely very low risk of spread from food products or packaging that are shipped over a period of days or weeks at ambient, refrigerated, or frozen temperatures.” Maintaining the safety and quality of our product and ensuring our customers’ well being is our highest priority. Rest assured that we would never do anything to put either of those at risk."},
                    {id: 10,
                    question: "What precautions are your delivery partners taking?",
                    answer: "We are working very closely with our delivery partners to ensure the quality and safety of our product while in transit. According to the CDC, “there is likely very low risk of spread from food products or packaging that are shipped over a period of days or weeks at ambient, refrigerated, or frozen temperatures,” and there is no evidence to support the spread of COVID-19 through food. In addition, our delivery partners have been directed to follow strict hygiene protocols which include frequent hand washing and regularly disinfecting steering wheels and areas of the truck which are often touched. Drivers have also been advised to stay home if they are feeling sick or exhibit any symptoms of acute respiratory illness."},
                    {id: 11,
                    question: "Will my Green Chef service be disrupted?",
                    answer: "Along with other food suppliers, we have been classified as “critical infrastructure” by the Department of Homeland Security and as an “essential business” by a number of state and local governments, so we are not impacted by the same closures as other businesses. We have a responsibility to provide fresh, healthy meals through no-contact deliveries, and we take that very seriously. Rest assured, we are working closely with our network of suppliers and partners to minimize any disruptions to your service."},
                    {id: 12,
                    question: "What would you do if an employee tests positive for COVID-19?",
                    answer: "In the event that an employee tests positive for COVID-19, we immediately activate our response protocol, which includes an intensified cleaning of impacted areas and notification to employees. We take direct guidance from the FDA, CDC and local health department to ensure no contamination and always maintain the safety of our meal kits and employees. In addition, any employee who displays any symptoms of acute respiratory illness or has been exposed to validated cases of COVID-19 is not permitted on the premises for at least 14 days."}
                    ]},
                {id: 2,
                title: "About Brisk Meal",
                faqs:[
                    {id: 1,
                    question: "How does Green Chef work?",
                    answer: "A Green Chef subscription can work for anyone! Here's how: "},
                    {id: 2,
                    question: "What's in the box?",
                    answer: "Each carefully packed Green Chef box contains premium pre-measured ingredients and easy-to-follow recipes for balanced dishes. Many of the ingredients, from chopped veggies to homemade sauces, have been prepped for you, allowing you to save time without sacrificing flavor. Each recipe card and kit bag are color-coded, so when you’re ready to cook, you can easily find what you need. All of our packaging is made from recycled, reusable, and/or compostable materials."},
                    {id: 3,
                    question: "Are the packaging materials eco-friendly?",
                    answer: "Yes! We’re constantly innovating to provide the most eco-friendly packaging available. All of our packaging is made from recyclable, reusable, and/or compostable materials - except where we can’t get around it for food safety reasons.  For example, our tofu is sent in vacuum-sealed plastic wrapping to ensure you get the freshest experience possible with the outstanding flavor that our chefs intended."}
                ]},
                {id: 3,
                title: "Recipes & Ingredients",
                faqs:[
                    {id: 1,
                    question: "Are all of your ingredients certified organic?",
                    answer: "We are committed to delivering the best quality ingredients. We source organic fresh produce and eggs and our proteins are raised with high animal welfare standards. We also offer organic beef, chicken, and wild-caught seafood options. In the event that we cannot source an organic ingredient that meets our quality standards, we will let you know through labeling and in-box communications. In these cases, we focus on sourcing conventional options of the highest quality. All of our ingredients go through extensive screening to meet our high-integrity-ingredient standards."},
                    {id: 2,
                    question: "What does it mean to be certified organic?",
                    answer: "Being a certified organic handler of fresh produce and eggs means that our ingredients come from certified suppliers that undergo annual compliance inspections, and we maintain a strict list of approved ingredients that meet organic guidelines . For consumers concerned about this level of traceability in their food, 'certified organic' offers that important assurance. Green Chef is the first certified organic handler in the Meal Kit category; ensuring the highest standards of food quality for select organic ingredients in our boxes, from the farm to your doorstep."},
                    {id: 3,
                    question: "Why choose organic?",
                    answer: "We firmly believe that organic is better for our health and for the ecosystem. It’s important to us to help preserve bee populations, rebuild soil, not eat synthetic chemicals, and be stewards of animal welfare. We don't think certified organic is the only worthwhile system in the food industry, but we have sincere belief in its origins and rules."},
                    {id: 4,
                    question: "Do you support local, sustainable, and artisanal suppliers?",
                    answer: "We absolutely do! At the heart of Green Chef is supporting local farmland, family farms, and craft economies. With each box you receive, you are helping dozens of suppliers that are benefitting from your choice. We work hard to partner with regional purveyors of high-integrity foods and are excited to help our suppliers thrive."},
                    {id: 5,
                    question: "How much will I be prepping? What cooking skills do I need?",
                    answer: "You can expect many ingredients to be pre-prepped in your Green Chef box including all of our unique, chef-curated sauces, dressings, and spice blends, ready for you to use. There is some prep work involved in our recipes. Cooking skills that will come in handy include dicing, chopping, peeling, and grating. Detailed step-by-step instructions are included in each of our recipe cards with timing and visual cues to help you along the way! Also, our culinary team creates helpful chef’s tips for techniques that may require a little more cooking experience. Chef’s tips will help explain and guide your cooking experience to make it as easy as possible. If you're new to cooking, rest assured that our recipes have been tested by trained chefs and new chefs alike!"},
                    {id: 6,
                    question: "How long will the food stay fresh?",
                    answer: "We work with our suppliers to source in-season ingredients just for you. Our produce does not spend much time on a shelf—we generally get our ingredients into your home in less time than a grocery store could. Since organic ingredients have no artificial preservatives they can sometimes have a shorter shelf life. However, with our insulated packaging used during transit and your standard refrigerator at home, ingredients will typically stay fresh for five days after arrival."},
                    {id: 7,
                    question: "How long will it take to make dinner?",
                    answer: "Most recipes in our plans are ready in about 30 minutes. Each family recipe is designed with prep and hands-on cooking at the start. This frees up time while dinner finishes cooking in the oven or on the stove so you can help the kids with homework, sort the mail, teach the dog how to sit, whatever!"},
                    {id: 8,
                    question: "whWhat cooking equipment and ingredients do I need to have at home?",
                    answer: "Here are some basic items we recommend that you have on hand for the best cooking experience: Pantry items: Salt, pepper, olive oil, high temperature cooking oil (such as vegetable, safflower, canola, avocado, or coconut) or ghee. Read more about which cooking oils to keep in your pantry. Tools and equipment frequently used: Pots and pans, ideally in a range of sizes and types such as non-stick and oven safe, chef’s knife, cooking spoon, spatula, strainer, peeler, measuring cup, tablespoon measure, sheet pan and aluminum foil. Tools and equipment occasionally used: Grill or grill pan, ladle, tongs, microplane zester, box grater, teaspoon measure, tablespoon and thermometer."},
                    {id: 9,
                    question: "What if my delivery is missing an ingredient?",
                    answer: "Oh no! All of our boxes are packed by hand, and we're very sorry to hear we left something out. Please, contact  our Customer Care team and let us know what you’re missing."},
                    {id: 10,
                    question: "How can I change my menu?",
                    answer: "We offer 3 different menus: Balanced Living, Keto + Paleo, Plant-Powered. Each menu has different recipes available every week. If you want to change your menu, you can do it very easily in "},
                    {id: 11,
                    question: "How can I check allergen information?",
                    answer: "As of now, we do not have an option to customize your box for allergies. Depending on what your allergies are, we may have some options that will work for you. We offer meal choice on our Balanced Living, Plant-Powered, and Keto meal preferences, which allows you to choose from the recipe offerings each week. You can make changes to your plan overall or to a single order on the Your Plan section of your Green Chef account."}
                ]},
                {id: 4,
                title: "Shipping & Delivery",
                faqs:[
                    {id: 1,
                    question: "Where do you deliver?",
                    answer: "Green Chef delivers almost everywhere in the continental United States. We are currently unable to deliver to Alaska and Hawaii. If we’re not yet in your neighborhood, you can begin the sign up process and we'll send you an email when we are able to join you in the kitchen."},
                    {id: 2,
                    question: "When will my box arrive?",
                    answer: "Your box will arrive between 8 am and 8 pm local time on your scheduled delivery day. Boxes are delivered Monday through Saturday. You can choose which weekday you want your boxes delivered, depending on where you live."},
                    {id: 3,
                    question: "Do I need to be home to receive my box?",
                    answer: "We do not require a signature for our boxes, so your Green Chef box will be waiting for you when you get home. Our insulated and refrigerated packaging will ensure your ingredients remain fresh until the end of the day it is delivered. Your box will be waiting for you at your front door, mailroom, or wherever you usually receive your packages. Want to track your package? You'll receive an email with tracking information when your box ships."},
                    {id: 4,
                    question: "What if my box is late?",
                    answer: "Sometimes delivery delays beyond our control happen, like when a truck unexpectedly breaks down or gets stuck due to traffic or weather. Our packaging is designed to handle unexpected delays, and your ingredients should all arrive in great condition. However, if your box does not arrive cool to the touch and at a safe temperature of 40 degrees or below, please "}
                ]},
                {id: 5,
                title: "Billing",
                faqs:[
                    {id: 1,
                    question: "What payment methods are accepted?",
                    answer: "At Green Chef we accept all major credit and debit cards including Visa, MasterCard, American Express, JCB, Discover, and Diners Club. We also accept PayPal. At this time we do not accept prepaid cards."},
                    {id: 2,
                    question: "How do I change payment method?",
                    answer: "You can just click here. Then, update your payment information and select 'Save Changes'."},
                    {id: 3,
                    question: "When do I get charged?",
                    answer: "You will always be charged 5 days prior to scheduled delivery. Please keep in mind that completion of the checkout confirms that you are entering into a weekly auto-renewing subscription service with Green Chef. However, you can always modify, pause, or cancel your delivery any time before 11:59 PM PST 5 days prior to your scheduled order."},
                    {id: 4,
                    question: "whWhat do I do if my card was declined for my next order?",
                    answer: "If a recurring payment fails, you will receive an email alerting you of the error. To resolve this, simply update the payment method in your account by clicking here"},
                    {id: 5,
                    question: "I’m redeeming a free box. Why do I need to enter a payment method?",
                    answer: "wWhile we offer flexible plans with no long term commitment, when signing up for Green Chef, you are enrolling in a weekly, auto-renewing service. You can pause and cancel deliveries at anytime."},
                    {id: 6,
                    question: "Why is my discount code not working?",
                    answer: "First, make sure you have selected the right plan and your voucher has a valid date of expiry. If the issue persists, please reach out to our Customer Care team via the Contact Us link on the bottom of this page."},
                    {id: 7,
                    question: "How do I apply credit?",
                    answer: "If you have an Green Chef credit on your account, it will automatically apply to your next scheduled delivery, excluding the shipping fee. Credits don't expire, so if you need to take a break, they'll be on your Green Chef account when you return."},
                    {id: 8,
                    question: "How much does the shipping cost?",
                    answer: "At Green Chef we charge a flat fee of $9.99 per box for all shipping and handling. You'll see this fee added into the total cost of your box."},
                    {id: 9,
                    question: "How much do premium meals cost?",
                    answer: "Each week, we like to come out with one premium meal for our customers to enjoy. By selecting this option, dinner gets upgraded with premium proteins and ingredients. Ranging between $6.99 and $9.99 more per serving, this elevated meal is so worth it!"},
                    {id: 10,
                    question: "Where can I see a summary of my billings?",
                    answer: "You can find a summary of all billings in your Order Summary. To find it, On Web, just log into your account, open the menu in the top right corner and select 'Settings', then click on here"}
                ]},
                {id: 6,
                title: "Managing My Subscription",
                faqs:[
                    {id: 1,
                    question: "How do I choose / swap my meals?",
                    answer: "With Green Chef, you can always change your meals! Every week, there are many different recipes you can choose from.  Please make sure to make your changes 5 days prior to delivery at 11:59 pm PST."},
                    {id: 2,
                    question: "Is there a minimum duration required for a subscription?",
                    answer: "No. You can skip weeks, swap recipes, and cancel anytime before your weekly deadline - 5 days prior to delivery at 11:59 pm PST.  - only order what and when you want. No commitments."},
                    {id: 3,
                    question: "What is the deadline to modify my order or skip a week?",
                    answer: "To change your number of servings, delivery day, address, email address, payment information, or password, visit our “Settings” page. You may skip and unskip weeks as you’d like without being charged for skipped weeks. All changes must be made 5 days prior to delivery at 11:59 pm PST."},
                    {id: 4,
                    question: "How do I pause / skip?",
                    answer: "Orders can be skipped up to 5 days before your delivery is scheduled.  On Web, To skip a week navigate to 'My Menu' and select “Edit Delivery” below the menu options.  On app, navigate to the week you want to skip and click on the three dots at the top right corner. Then click on 'Skip Week' at the top right corner."},
                    {id: 5,
                    question: "Can I switch plan size?",
                    answer: "Of course! You can change the Servings size or the number of Dinners per week. The deadline to change your plan is 5 days prior to your next scheduled delivery. "},
                    {id: 6,
                    question: "How do I cancel my plan?",
                    answer: "You can skip as many as 4 weeks by selecting the “Skip Week” option on the specific week intended. This could be found under “My Menu,” and you are able to successfully make that change by the deadline of: 5 days prior to the delivery date at 11:59PM PST. "},
                    {id: 7,
                    question: "I cancelled my plan, but still was charged. Why?",
                    answer: "Your first order is charged and created as soon as the order is placed. However, if you would like to cancel this, please call us at 888-236-7295. One of our expert Customer Care agents will be happy to assist you."},
                    {id: 8,
                    question: "wWhat if I don’t cook for 2 or 4 people?",
                    answer: "If you cook for one, the Dinner for 2 Plan is an easy lunch solution. You’ll get dinner and lunch."},
                    {id: 9,
                    question: "How many meals are included in each delivery?",
                    answer: "Green Chef has plans for 2, 4, or 6 servings. On a 2 servings plan, you can decide on receiving 3 or 4 meals per week. On a 4 servings plan, you can receive 2, 3 or 4 meals per week. On a 6 servings plan, you can receive 3 or 4 meals per week."},
                    {id: 10,
                    question: "How do I unsubscribe from Green Chef emails?",
                    answer: "Just click "}
                ]},
            ]
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
        background-color: white;
        border-radius: 10px;
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
