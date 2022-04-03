
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>William Billings | Web Developer & Identity Designer</title>
    <link rel="stylesheet" href="build/tailwind.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body class="text-[#2d2d2d]">

    <header>

        <div class="grid grid-cols-6 p-10 "> <!-- begin 8 col structure | header layout -->
            <div class="col-start-1 col-end-3"> 
                <object  data="your.svg" type="image/svg+xml">
                    <img class="spinner" class="p-4" width="350px" height="auto" src="../img/logo.svg" />
                </object>
            </div>
            <div class="flex items-center justify-center col-start-4 col-end-5 px-4 text-center duration-300 xsm:pr-10 hover:text-slate-400">
                    <a id="dropdown" href="#" class="tracking-tighter ease-in-out sm:text-base md:text-xl lg:text-xl ">Brand Identity Philosophy</a>
            </div>
            <div class="flex items-center justify-center col-start-5 col-end-6 px-4 text-center duration-300 xsm:pr-10 hover:text-slate-400">
                    <a href="#about" class="tracking-tighter sm:text-base md:text-xl lg:text-xl">About Me</a>
            </div>
            <div class="flex items-center justify-center col-start-6 col-end-7 px-4 text-center duration-300 hover:text-slate-400">
                    <a href="https://github.com/billbuildsstuff" class="p-2">
                        <svg  class="spinner hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" width="24px" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/mrbillbillings/" class="p-2">
                        <svg class="spinner hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/billwhomakesstuff/" class="p-2">
                        <svg class="spinner hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    
            </div>
        </div>

    </header> 
    <main>

        <div id="philo" class="grid gap-1 p-10 pb-10 lg:grid-cols-3 md:grid-cols-2 sm:grid-col-1 grid-row-2 bg-slate-50">
            <div class="col-start-1 lg:col-end-4 md:col-end-3 sm:col-end-2">
                <h1 class="pb-10 text-2xl text-center duration-400 ">BRAND IDENTITY</h1>
                <div id="desc" class="hideMe">
                    <p class="px-10 pb-10 text-lg font-thin tracking-tighter duration-400 md:px-10 sm: xsm:px-5 lg:px-44 ">There was a moment when you formulated your idea where your tongue was tied, however your brain was operating at maximum capacity. This was the purest moment of your <span class="font-bold">Brand Empathy</span>. You were literally standing in the shoes of your consumer saying: <span class="font-bold">"this 'thing or service' is exactly what is needed"</span>. Your <span class="font-bold">Brand Identity</span> is your best delivery tool to express that purest form of <span class="font-bold">Brand Empathy</span>. Fascinated with glyphs, symbols, logos and branding since I was a child, I am the perfect canidate to sculpt the presence your business deserves. I simply use techniques that have been utilized for thousands of years (using pen, paper & Adobe Illustrator in lieu of the chisel and stone). I specialize in compressing <span class="font-bold">large concepts</span> into well formed <span class="font-bold">visual-respresentations</span>.</p>
                </div>
            </div>
            <div class="bg-white">
                <img src="../img/logos/1.png"/>
            </div>
            <div class="bg-white ">
                <img src="../img/logos/2.png" />
            </div>
            <div class="bg-white ">
                <img src="../img/logos/3.png" />
            </div>
            <div class="bg-white ">
                <img src="../img/logos/4.png" />
            </div>
            <div class="bg-white ">
                <img src="../img/logos/5.png" />
            </div>
            <div class="bg-white ">
                <img src="../img/logos/6.png" />
            </div>
        </div>

        <script>
            
          function classToggle() {
              const desc = document.querySelector('#desc');
            desc.classList.toggle('hideMe');
            desc.classList.toggle('visibleNow');

            }
            document.querySelector('#dropdown').addEventListener('click', classToggle);

          
        </script>

        <div class="grid pt-5 pb-10 pl-10 pr-10 lg:grid-cols-3 md:grid-cols-2 sm:grid-col-1 gap-x-20">
           <div class="col-start-1">
                    <h1 id="about" class="pt-5 pb-5 text-2xl">ABOUT BILL</h1>
                    <p class="text-lg font-thin tracking-tighter ">Veteran full-stack web developer currently freelancing, however always hungry for a new project or opportunity. I was uploaded into the Design world in 2007 via my Technical Program: "Computer Animation & Web Design. There I fell in love with Digital Design & Web Development. There I was able to walk in the door as a Graphic Design Intern at of world re-known graphic design firm "Jager Di Paola Kemp", located in Burlington Vermont. They are now known as "Solidarity of Unbridled Labour". There I gained early professional skills and gained an early preview to the inner workings of a professional environment. The most important takeaway from this experience was the advanced brand strategies applied to delivery quality design products. </p>
                    <p class="text-lg font-thin tracking-tighter ">I moved to Boston to enrolled at The New England Institute of Art, in their Web Design & Interactive Media curriculum. There I focused on Full-Stack Web Development & User Interface Design. While studying in Boston I was also freelancing & working on home projects. These projects ranged from working with start-up companies build bare-bones web application prototypes; to running “test” PhP scripts at home on self-refurbished laptops to fully install & clone existing WordPress instances on a RDM.</p>
                    <p class="text-lg font-thin tracking-tighter ">From Boston I went from Full-Stack-Developer to Full-Time-Dad. I now have 3 beautiful children, who have honestly inspired me to jump back into my career. After a few years away from the industry I have returned to freelancing while updating my knowledge with ES6, Angular.JS, Node.JS, TailWind, AWS Cloud & much more.</p>
                    <h1 class="pt-5 pb-5 text-2xl">WHAT YOU GET WHEN YOU HIRE ME</h1>
                    <p class="text-lg font-thin tracking-tighter">A professional & dedicated individual who has a large appetite for more information and complex projects. A designer who thinks like a programmer. A programmer who thinks like a designer. An individual who delivers work in accordance to a company's mission and value. A humble father who loves to skate with his children.</p>
            </div>
                <div class="pt-5 ">
                       <h1 class="pb-5 text-2xl ">LIKE THE CUT OF MY JIB?</h1>
                       <form action="contact.php" method="POST">
                       <div class="pb-5 "> <label for="fullName">Full Name:</label></div>
                       <div class="pt-5 pb-5"><input class="w-[100%] p-1 bg-slate-50 border border-slate-100" type="text" id="fullName" name="fullName"></div>
                       <div class="pt-5 pb-5"><label for="email">E-Mail:</label></div>
                       <div class="pt-5 pb-5"><input class="w-[100%] p-1 bg-slate-50 border border-slate-100" type="email" id="email" name="email"></div>
                       <div class="pt-5 pb-5"> <label for="subject">Subject:</label></div>
                       <div class="pt-5 pb-5"><input class="w-[100%] p-1 bg-slate-50 border border-slate-100" type="text" id="subject" name="subject"></div>
                       <div class="pt-5 pb-5"><label for="message">Message:</label></div>
                       <div class="pt-5 pb-5"><textarea class="w-[100%] p-1 bg-slate-50 border border-slate-200 h-56 " id="message" name="message">Hi, Bill I want to hire you!</textarea></div>
                       <div class="pt-5 pb-5"><input type="submit" value="Send"></div>
                    </form>
                </div>
               
                <div class="pt-5 lg:col-start-3 lg:col-end-4 md:col-start-1 md:col-end-3 ">
                    <div class="md:pt-5 sm:pt-5 lg:pt-10">
                        <img class="sm:[75%] md:w-[50%] lg:w-[65%] mr-auto ml-auto" src="../img/me.jpg" alt="some words to be changed"/>
                    </div> 
                    <div class="pt-10">
                        <a href="https://github.com/billbuildsstuff">
                        <svg  class="spinner  sm:[75%] md:w-[50%] lg:w-[65%] mr-auto ml-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
        </div>
        
    </main>

    <footer class="grid text-center text-white grid-col-2 bg-[#2d2d2d]">
        <p class="pt-10 pb-10">William Billings | Web Developer & Identity Designer</p>
    </footer>
    
</body>
