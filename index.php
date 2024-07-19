<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="./assest/files/css/style.css">
    <link rel="stylesheet" href="./assest/files/css/style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header class="w-[100%] h-[80px] bg-[#fffafa]">
        <nav class="md:w-[1260px] md:m-auto h-[100%] md:flex">
            <div class="logo md:w-[15%] md:flex md:items-center md:justify-center">
                <a href=""> <img src="./assest/images/logo-big-1.png" alt="main logo"></a>
            </div>
            <div class="search md:w-[20%] leading-[40px] flex items-center">
                <div class="search-box w-[100%] h-[40px] m-auto border flex justify-evenley items-center ">
                    <input type="search" name="" id="" class="w-[100%] h-[100%] " placeholder="Where do you want to go?">

                </div>
            </div>
            <div class="menu md:w-[65%] leading-[65px] ml-5 mr-2" id="main-menu">
                <ul class="flex gap-1 items-center  ">
                    <li><a href="#" class="">Group Tours</a>



                    </li>



                    <li><a href="#" class="">Speciality Tours</a></li>
                    <li><a href="#" class="">Experiences</a></li>
                    <li><a href="#" class="">Tailormade Holidays</a></li>
                    <li><a href="#" class="">Deals</a></li>
                    <li><a href="#" class="">More</a></li>
                    <li><a href="#" class="">More</a></li>
                </ul>


            </div>
        </nav>
    </header>

    <div class="mainsection w-full m-auto mb-56">

        <section class="slider_section relative">




            <div class="slider m-auto ">




                <div class="item relative">
                    <div class="contentOnherosection absolute left-[50%] z-10  translate-x-[-50%] top-[40%] translate-y-[-50%] object-cover">
                        <h2 class="text-[70px] font-serif text-green-700">Rajasthan</h2>
                    </div>
                    <img src="assest/images/pexels-sbsoneji-3581369.jpg" alt="">

                </div>
                <div class="item">
                    <img src="https://dummyimage.com/1300x600/5D77c/146246" alt="">
                </div>
                <div class="item">
                    <img src="https://dummyimage.com/1300x600/Acc77c/d16246" alt="">
                </div>



            </div>

            <div class="sliderContent w-[1200px] m-auto">
                <p class="w-[89%] m-auto spacialpara text-[17px]">Rajasthan, the land of Kings and India’s largest
                    desert
                    land, is an incredible northern Indian state that
                    never ceases to
                    enchant us. This state is a beautiful symphony of vibrant cities, friendly people, delectable
                    cuisine,
                    magnificent
                    palaces, and massive forts. Rajasthan is a northern Indian state which is an ideal travel
                    destination
                    because it
                    combines old-world charm with a contemporary twist.</p>
            </div>







        </section>



        <section class="border border-red-500 min-h-[650px] mt-28 w-[1300px] m-auto">
            <div class="cityheadline ml-20">
                <h2 class="text-[30px] font-bold">TOUR IN <span class="underline underline-offset-[6px] decoration-[5px] decoration-yellow-300">RAJASTHAN</span>
                </h2>
            </div>



            <div class="allSection w-full h-full mt-10 flex items-center">
                <div class="filterSection w-[20%] h-auto ">

                    <div class="filterAndReset w-[80%] m-auto flex justify-between items-center h-auto px-3 py-4 ">
                        <a href=""> <span class="text-black font-medium text-[22px]">Filters</span></a>
                        <a href=""><span class="text-gray-600 font-normal text-[20px]">Reset</span></a>

                    </div>
                    <div class="filterSection  w-[90%] m-auto  h-auto px-2 mt-4">
                        <div class="categorySection relative">
                            <div class="categories flex items-center justify-between">
                                <h3 class="text-black-500 font-normal text-[22px] underline underline-offset-[6px] decoration-yellow-500 decoration-[3px]">Categories</h3>
                            </div>
                            <div class="checkboxes flex flex-col min-h-[160px] mt-5">
                                <label for="Honeymoon" class="flex justify-start items-center py-[4px] text-[18px] font-normal w-[100%] ">
                                    <input type="checkbox" name="Honeymoon" id="Honeymoon" class="mr-5 checkbox_items">
                                    Honeymoon
                                </label>


                                <label for="family" class="flex justify-start items-center py-[4px] text-[18px] font-normal w-[100%]">
                                    <input type="checkbox" name="family" id="family" class="mr-5 checkbox_items">
                                    Family
                                </label>


                                <label for="friend" class="flex justify-start items-center py-[4px] text-[18px] font-normal w-[100%] ">
                                    <input type="checkbox" name="friend" id="friend" class="mr-5 checkbox_items">
                                    Friends / Group
                                </label>

                                <span class="clear">CLEAR</span>

                            </div>
                        </div>
                        <div class="categorySection relative">
                            <div class="categories flex items-center justify-between">
                                <h3 class="text-black-500 font-normal text-[22px] underline underline-offset-[6px] decoration-yellow-500 decoration-[3px]">Duration (In Days)</h3>
                            </div>
                            <div class="checkboxes flex flex-col min-h-[160px] mt-5">
                                <label for="onetothree" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%] ">
                                    <input type="checkbox" name="onetothree" id="onetothree" class="mr-5 checkbox_items">
                                    1 To 3
                                </label>


                                <label for="fourtosix" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%]">
                                    <input type="checkbox" name="fourtosix" id="fourtosix" class="mr-5 checkbox_items">
                                    4 To 6
                                </label>


                                <label for="seventonine" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%] ">
                                    <input type="checkbox" name="seventonine" id="seventonine" class="mr-5 checkbox_items">
                                    7 To 9
                                </label>

                                <span class="clear">CLEAR</span>

                            </div>
                        </div>
                        <div class="categorySection relative">
                            <div class="categories flex items-center justify-between">
                                <h3 class="text-black-500 font-normal text-[22px] underline underline-offset-[6px] decoration-yellow-500 decoration-[3px]">Budget (In INR)</h3>
                            </div>
                            <div class="checkboxes flex flex-col min-h-[160px] mt-5">
                                <label for="firstBudget" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%] ">
                                    <input type="checkbox" name="firstBudget" id="firstBudget" class="mr-5 checkbox_items">
                                    0 To 999
                                </label>


                                <label for="secondBudget" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%]">
                                    <input type="checkbox" name="secondBudget" id="secondBudget" class="mr-5 checkbox_items">
                                    1000 To 2499
                                </label>


                                <label for="thirdBudget" class="flex justify-start items-center py-[3px] text-[18px] font-normal w-[90%] ">
                                    <input type="checkbox" name="thirdBudget" id="thirdBudget" class="mr-5 checkbox_items">
                                    2500 To 4999
                                </label>



                                <span class="clear">CLEAR</span>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="outputSection w-[65%] px-4">


                    <div class="destinationLocationAndPrice w-full h-full flex flex-col justify-start items-center">
                        <div class="dest_items">
                            <div class="ns_dest_item relative">
                                <div class="imgSection rounded-xl overflow-hidden">
                                    <img src="./assest/images/touriestPlace1.jpg" class="w-[100%] h-[100%] object-cover " alt="">
                                </div>
                                <div class="contentSection">
                                    <div class="tourDays mt-[-3px]">
                                        <span class="text-xs pl-1 text-gray-600">6 days & 5 nights</span>
                                    </div>
                                    <div class="tourlocation text-sm  leading-[17px] mt-[-2px]">
                                        <span class=" font-light">Jaipur Jodhpur Jaisalmer | FREE
                                        Desert Safari</span>
                                    </div>

                                    <div class="tourPrice mt-1">
                                        <p class=" bg-gray-300 px-2 py-0 text-sm font-medium " >INR 15,199</p>
                                    </div>


                                    <div class="btnSection flex absolute bottom-3 w-[94%] left-[50%] translate-x-[-50%]  justify-between">
                                        <button class="px-6 py-0 border border-yellow-500  hover:bg-yellow-500 bg-transparent rounded-sm">Call now</button>
                                        <button class="px-6 py-0 hover:border hover:border-yellow-500 bg-yellow-500 hover:bg-transparent rounded-sm">Get quote</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ns_dest_item">
                                <div class="imgSection rounded-xl overflow-hidden">
                                <img src="./assest/images/touriestPlace2.jpg" class="w-[100%] h-[100%] object-cover" alt="">
                                </div>
                                <div class="contentSection"></div>
                            </div>
                            <div class="ns_dest_item">
                                <div class="imgSection rounded-xl overflow-hidden">
                                <img src="./assest/images/touriestPlace3.jpg" class="w-[100%] h-[100%] object-cover" alt="">
                                </div>
                                <div class="contentSection"></div>
                            </div>
                        </div>

                        <div class="dest_items">
                            <div class="ns_dest_item">
                                <div class="imgSection rounded-xl overflow-hidden">
                                <img src="./assest/images/touriestPlace4.jpg" class="w-[100%] h-[100%] object-cover" alt="">
                                </div>
                                <div class="contentSection"></div>
                            </div>
                            <div class="ns_dest_item">
                                <div class="imgSection rounded-xl overflow-hidden">
                                <img src="./assest/images/touriestPlace5.jpg" class="w-[100%] h-[100%] object-cover" alt="">
                                </div>
                                <div class="contentSection"></div>
                            </div>
                            <div class="ns_dest_item">
                                <div class="imgSection rounded-xl overflow-hidden">
                                <img src="./assest/images/touriestPlace6.jpg" class="w-[100%] h-[100%] object-cover" alt="">
                                </div>
                                <div class="contentSection"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="suggestionSection w-[15%] border border-red-400"></div>
            </div>
        </section>
    </div>








    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,

        });
    </script>
</body>

</html>