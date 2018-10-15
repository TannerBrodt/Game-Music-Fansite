<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "css/styles.css">

    <script type="text/javascript"
        src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
</head>

<body>
	<?php include('header.php')?>

	<section class="display"></section>

    <div id = "scroller">
        <script>
            $(function(){
                var scroller = $("#scroller div.innerScrollArea");
                console.log("scroller initiating");
                var scrollerContent = scroller.children('ul');
                var curX = 0;
                scrollerContent.children().each(function(){
                    var $this = $(this);
                    $this.css('left', curX);
                    curX += $this.outerWidth(true);

                });

                var fullW = curX / 2;
                var viewportW = scroller.width();

                //scrolling speed management
                var controller = {curSpeed:0, fullSpeed:1};
                var $controller = $(controller);
                var tweenToNewSpeed = function(newSpeed, duration)
                {
                    if(duration === undefined){
                        duration = 600;
                    }
                    $controller.stop(true).animate({curSpeed:newSpeed}, duration);
                };

                //Scrolling management; start the automatical scrolling
                var doScroll = function()
                {
                    var curX = scroller.scrollLeft();
                    var newX = curX + controller.curSpeed;
                    if(newX > fullW*2 - viewportW){
                        newX -= fullW;
                    }
                    // if((scrollerContent[0].left + scrollerContent[0].width) < scroller.left){
                    //     
                    //     scrollerContent.shift();
                    // }
                    
                    scroller.scrollLeft(newX);
                };
                setInterval(doScroll, 20);
                tweenToNewSpeed(controller.fullSpeed);
            });

        </script>
        <div class = "innerScrollArea">
            <ul>
                <li><img src = "../pictures/DKC2-Cover-Art.jpg" width = "500" height = "500" /></li>
                <li><img src = "../pictures/DKCBox.jpg" width = "500" height = "500" /></li>
                <li><img src = "../pictures/MajoraBoxArt.jpg" width = "500" height = "500" /></li>
                <li><img src = "../pictures/SmashLogo.jpg" width = "500" height = "500" /></li>
            </ul>
        </div>
    </div>

    <section class = "content">
    	<h1>
    		Biography of Edgar Alan Poe
    	</h1>
     	<p>
	        On January 19, 1809, Edgar Allan Poe was born in Boston, Massachusetts. Poe’s father and mother, both professional actors, died before the poet was three years old, and John and Frances Allan raised him as a foster child in Richmond, Virginia. John Allan, a prosperous tobacco exporter, sent Poe to the best boarding schools and later to the University of Virginia, where Poe excelled academically. After less than one year of school, however, he was forced to leave the university when Allan refused to pay Poe’s gambling debts.On January 19, 1809, Edgar Allan Poe was born in Boston, Massachusetts. Poe’s father and mother, both professional actors, died before the poet was three years old, and John and Frances Allan raised him as a foster child in Richmond, Virginia. John Allan, a prosperous tobacco exporter, sent Poe to the best boarding schools and later to the University of Virginia, where Poe excelled academically. After less than one year of school, however, he was forced to leave the university when Allan refused to pay Poe’s gambling debts.



     	</p>

     	<p>
     		Lomography is the commercial trademark of Lomographische AG, Austria for products and services catering to lo-fi photographers. The name is inspired by the former state-run optics manufacturer LOMO PLC of Saint Petersburg, Russia. LOMO PLC created and produced the 35mm LOMO LC-A Compact Automat camera — which became the centerpiece of Lomography’s marketing and sales activities. This camera was loosely based upon the Cosina CX-1 and introduced in the early 1980s. In 1991, the Austrian founders of Lomography discovered the Lomo LC-A. They were “charmed by the unique, colorful, and sometimes blurry” images that the camera produced. After a series of international art exhibitions and marketing, Lomography signed an exclusive distribution agreement with LOMO PLC — thereby becoming the sole distributor of all Lomo LC-A cameras outside of the Soviet Union. Since the introduction of the original Lomo LC-A, Lomography has produced and marketed various lines of branded analogue cameras. Most of these cameras are designed to produce a single photographic effect. In 2005, production of the original Lomo LC-A was discontinued. Its replacement, the LC-A+, was introduced in Fall 2006. The new camera, made in China rather than Russia, featured the original Russian lens manufactured by LOMO PLC. This changed as of mid-2007 with the lens now made in China as well. Similar to Eastman Kodak’s concept of the “Kodak moment”, the Lomography website endorses a motto of “Don’t Think, Just Shoot”. This motto is accompanied by the Ten Golden Rules of Lomography; guidelines encouraging spontaneity and minimal consideration of formal technique. The cameras marketed by Lomography are generally low-fidelity and inexpensively constructed. Some cameras make use of multiple lenses and colored flashes, or exhibit optical distortions and light leaks. Current models marketed by Lomographische AG include Lomo LC-A, Diana, Holga, Holga 35mm, Actionsampler, Frogeye, Pop-9, Oktomat, Fisheye, Fisheye2, Colorsplash, Colorsplash Flash, F-stop Bang, SuperSampler, Horizon 202, Seagull TLR, and Smena 8M. The company also resells dead stock Polaroid cameras and Russian dead stock. The Lomographic Society International owns galleries, stores and “showcases” dedicated to the growth, support and public exposure of the art. The society is based in Vienna, Austria, where most of its events are organised. An example of the society’s cultural events showcasing photographs from the community is the Lomokikuyu competition, which raises money for eye surgeries and vision care in Kenya, in partnership with Viennese vision aid organisation Light for the World. The project has since been updated and donations now also go to the International Committee of the Red Cross to help fight the famine in East Africa. The organisation also organises the Lomography World Congress, an international conference of practitioners held in varying host cities. The website also features a magazine, which provides a photo archive storage for their work. Articles monitor trends emerging in the community and offer tips on. Aficionados of the hobby can blog their own tutorials to share their discoveries, fostering enthusiasm with the Lomographic art. Besides fans who are community members, Lomo Amigos, or friends of Lomography, are often celebrities who enjoy working with Lomography cameras and are invited to contribute to the magazine. They include Elijah Wood, Neil Gaiman, and David Arquette. The site also celebrates the work of Lomographers with online exhibits and competitions. 
     	</p>
    </section>

    

    <script>
        console.log("logging");
    </script>

<?php include('footer.php')?>
</body>
</html>