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
                    <input type="search" name="" id="" class="w-[100%] h-[100%] "
                        placeholder="Where do you want to go?">

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

    <div class="mainsection w-[1200px] m-auto">

        <section class="slider_section relative">




            <div class="slider m-auto ">




                <div class="item relative">
                    <div
                        class="contentOnherosection absolute left-[50%] z-10  translate-x-[-50%] top-[40%] translate-y-[-50%]">
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

            <div class="sliderContent">
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



        <section class="border border-red-500 min-h-[650px] mt-28 w-full">
            <div class="cityheadline ml-20">
                <h2 class="text-[30px] font-bold">TOUR IN <span
                        class="underline underline-offset-[6px] decoration-[5px] decoration-yellow-300">RAJASTHAN</span>
                </h2>
            </div>



            <div class="allSection w-full h-full mt-4 flex items-center">
                <div class="filterSection w-[25%] min-h-[650px] border border-cyan-400"></div>
                <div class="outputSection w-[55%] min-h-[650px] border border-gray-400"></div>
                <div class="suggestionSection w-[20%] min-h-[650px] border border-red-400"></div>
            </div>



        </section>





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