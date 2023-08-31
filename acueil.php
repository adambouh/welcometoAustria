<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href= "devoir.css" />
        <title>beinvenu a l'autriche</title>
        <link rel = "icon" src = 
        "resource/drapeau.png" 
                type = "image/png">
         <meta charset="utf-8" />
       <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
        function popup(id){
        document.getElementById(id).style.display="block";

        }
        function closepop(id){
        document.getElementById(id).style.display="none";
        }
        </script>


   
    <body>
             <table class="head" style=" width :100%;">
            <td ><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span></td>
            <td style="width : 700px;"></td>
            <td><a class="head-button" href="acueil.php"> accueil</a></td>
            <td><a class="head-button" href="plan.html"> plan de site</a></td>
            <td><a class="head-button" href="who_are_we.html"> qui somme nous?</a ></td>
            <td><a class="head-button" href="contact.php"> contact</a></td>
        </table>
  
        <div id="mySidenav" class="sidenav"  >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="side-button" href="acueil.php#artetculture"> art et culture </a><br>
            <a class="side-button" href="acueil.php#siteetmonument"> sites et monument </a><br>
            <a class="side-button" href="acueil.php#indexvilles"> index des villes </a><br>
            <a class="side-button" href="acueil.php#maps">  maps </a><br>
           
        </div>
        <div style="padding:0"><!--center -->        
        <h1 style="font-size:80px;
                        font-family: poppins;
                        text-transform: uppercase;
                        color: #500909;text-align: center;">WELCOME TO  AUSTRIA</h1>
                <div style="display:flex" >
                        <div class="next-to-vid">
                         
                        <p bold>
                            Situated in the Alps and bordered by the finest countries as Germany, Italy
                            and Switzerland. Austria is a south-central, largely mountainous landlocked
                            country. It’s a federation of 9 states, one of which is Vienna, the capital and
                            the pilar of the country.<br>
                            Austria is one of the most beautiful touristic destinations in Europe and the
                            whole world. It has a massive musical heritage raging from the classical
                            composer Mozart to the Strauss Waltzes and the Vori Trapp family and the
                            famous Vienna state opera. Also, it’s a crossroads of cultures and has such
                            an eventful history; an attractive architecture that defines the country’s
                            legacy and prestigious history over the years. In addition to that, some
                            marvelous historical landmarks and archaeological sites to discover
                        </p>
                        
            <!--1-->    <div id="artetculture"> 
                            <h2 class="h2">ART  ET CULTURE </h2>
                            <div class="artsegement">
                                <div class="art1" onclick="popup('popup11')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/artetculture1.jpeg">
                                    </div>
                                    <h4>AUSTRIA - HISTORY</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                <div class="popup" id="popup11">
                                    <button id="close" onclick="closepop('popup11')">&times;</button>
                                    <h1>AUSTRIA - HISTORY</h1>
                                    <p>Austrian history dates back nearly 2,000 years, when Vindobona 
                                        (Vienna) was an important Roman military garrison along the Danube
                                        . The city grew through the Middle Ages and in 788, the territory 
                                        that is present-day Austria was conquered by Charlemagne, who encouraged 
                                        the adoption of Christianity. In 976, Leopold von Babenberg became the first
                                         in his family to rule the territory; the Babenberg line of succession lasted
                                          until the death of Frederick II in 1246. There was a brief interregnum when
                                           the territory was ruled by Otakar II of Bohemia, but in 1276 Rudolf I defeated
                                            Otakar II at Durnkrut and became the first Habsburg to ascend to the throne.
                                    </p>
                                    <h3>The Habsburg Empire</h3>
                                    <p>
                                     Although never unchallenged, the Habsburgs ruled Austria for nearly 750 years. Through political
                                      marriages, the Habsburgs were able to accumulate vast land wealth encompassing most
                                       of Central Europe and stretching even as far as the Iberian Peninsula. During the 
                                       16th Century, the Ottoman Empire gained strength and in 1529, the Ottoman army
                                        surrounded Vienna. The Habsburgs held their ground and the Ottomans retreated, 
                                        to return again in 1683. This time, Vienna was successfully defended by Polish
                                        King Jan Sobieski III. To this day Austrians are still proud of defending their 
                                        territory from the invading Ottomans.   
                                    </p>
                                    <img  src="resource/artetculture1.jpeg">
                                    <br>
                                    <a href=http://en.wikipedia.org/wiki/Image:Juliusz_Kossak_Sobieski_pod_Wiedniem.jpeg">battle of Weina 1683</a>
                                    <p>
                                        Habsburg rule in Europe was particularly unsettled in the 18th and 19th Centuries,
                                         when various wars were fought over their landholdings. Emperor Charles VI (1711-1740)
                                          and his daughter Maria Theresa (1740-1780) ruled the Empire during these tumultuous 
                                          times. Maria Theresa was only able to take the throne as a result of the Pragmatic 
                                          Sanction, which allowed a female to ascend when there was no male heir. She became
                                           a great reformer within the Empire, advocating many changes, most notably in the 
                                           educational system. Maria Theresa’s son Josef II (1780-1790) continued many of her
                                            reforms and he himself has been described as an enlightened absolutist.   
                                            <br><br>
                                        In 1848 Franz Josef I ascended to the throne and remained in power until his death in 1916
                                        . With a reign spanning from the Revolutions of 1848 to World War I, Franz Josef saw 
                                        many milestones in Austrian history. The Compromise of 1867 allowed some minor sovereignty
                                         to the territory of Hungary and created what became known as the Dual Monarchy. Under the new system,
                                          Franz Josef remained the head of state (Emperor of Austria/King of Hungary), but the Hungarians were
                                           now permitted to have a parliament and legislate on their own.    
                                    </p>
                                    <img  src="resource/artculture1/2.jpg">
                                    <a href=http://en.wikipedia.org/wiki/Image:Franz_Joseph,_circa_1915.JPG>Franz Josef I.</a>
                                    <p>The old Habsburg Empire slowly began to deteriorate in the beginning of the 20<sup>th</sup> Century. This deterioration 
                                        culminated in the June 28, 1914, assassination of Archduke (and heir to the throne) Franz Ferdinand and his wife Sophia. 
                                        This incident sparked the beginning of World War I and assured the end to the Habsburg domination of Central Europe. In 1919, 
                                        the Treaty of St. Germain officially ended Habsburg rule and established the Republic of Austria.</p>

                                    <p><a id="Political_Turmoil_During_the_Inter_War_Years_Leads_to_Anschluss" name="Political_Turmoil_During_the_Inter_War_Years_Leads_to_Anschluss"></a></p>

                                    <h3>Political Turmoil During the Inter War Years Leads to Anschluss</h3>

                                    <p>In the years leading up to the Nazi period, Austria experienced sharpening political strife among the traditional parties, 
                                        which since 1918 had created their own paramilitary organizations. By the late 1920s and early 1930s, these organizations 
                                        were engaged in strikes and violent conflicts. Unemployment rose to an estimated 25 %. In line with similar trends among other
                                         Central European countries, a corporatist and authoritarian government came into power in Austria under Engelbert Dollfuss, who 
                                         abolished existing political parties and Austria’s Constitutional Court. The Social Democrats, now excluded from the political
                                          process, took up arms, and a brief civil war ensued in February 1934. Austrian National Socialists (NS) launched an unsuccessful coup
                                           d’etat in July 1934 and murdered Dollfuss. The Nazi leaders were, however, arrested, tried, and received death sentences. Following 
                                           this unsuccessful coup, the Austrian President asked an ultra-conservative Christian Social leader, Kurt Schuschnigg, to form a government.
                                            Like Dollfuss, Schuschnigg sought to appease his neighbors and, at the same time, obtain support from Britain and France against pressures
                                             from Hitler’s Germany, but without success due to the authoritarian trends in Austria and Austria’s poor image in the West. In February 1938,
                                              under renewed threats of military intervention from Germany, Schuschnigg was forced to accept Austrian National Socialists (Nazis) in his government.
                                               On March 12, Germany sent its military forces into Austria, an action that received enthusiastic support among most Austrians, and Schuschnigg was
                                                forced to resign. He and many other political leaders were arrested and imprisoned until 1945.</p>

                                    <p><a id="The_Holocaust_in_Austria" name="The_Holocaust_in_Austria"></a></p>

                                    <h3>The Holocaust in Austria</span></h3>

                                    <p>The dissolution of the Austrian Empire and consequent loss of territory 
                                        following World War I, as well as the political strife of the 1930s, set 
                                        the stage on March 13, 1938, for Germany’s Anschluss ("Annexation") of Austria and the beginning of the Nazi period, the darkest chapter in 
                                        Austria’s history, during which most of the Jewish population of the country was murdered or forced into exile. Other minorities, including the
                                         Sinti and Roma, homosexuals, and many political opponents of the Nazis also received similar treatment. Prior to 1938, Austria’s Jewish population 
                                         constituted 200,000 persons, or about 3 to 4 percent of the total population. Most Jews lived in Vienna, where they comprised about 9 percent of the
                                          population. Following Anschluss, the Germans rapidly applied their anti-Jewish laws in Austria. Jews were forced out of many professions and lost access
                                           to their assets. In November 1938, the Nazis launched the Kristallnacht pogrom in Austria as well as in Germany. Jewish businesses were vandalized and 
                                           ransacked. Thousands of Jews were arrested and deported to concentration camps. Jewish emigration increased dramatically. Between 1938 and 1940, over half 
                                           of Austria’s Jewish population fled the country. Some 35,000 Jews were deported to the Ghettos in Eastern Europe. Some 67,000 Austrian Jews (or one-third of 
                                           the total 200,000 Jews residing in Austria) were sent to concentration camps. Those in such camps were murdered or forced into dangerous or severe hard labor 
                                           that accelerated their death. Only 2,000 of those in the death camps survived until the end of the war.</p>

                                    <p><img alt="Austrian Jews" data-entity-type="file" data-entity-uuid="4b1e5183-a00d-407a-86a5-fafd71b54aaa" src="resource/artculture1/3.jpg" /></p>

                                    <a  href="http://en.wikipedia.org/wiki/Image:1938_Jews_arrested_during_Kristallnacht_line_up_for_roll_call_at_Buchenwald.jpg"  title="http://en.wikipedia.org/wiki/Image:1938_Jews_arrested_during_Kristallnacht_line_up_for_roll_call_at_Buchenwald.jpg">Austrian Jews</a>
                                            
                                    <p><a id="Austria_Post_World_War_II" name="Austria_Post_World_War_II"></a></p>  

                                    <h3><span class="mw-headline">Austria Post World War II</span></h3>

                                    <p>At the Moscow conference in 1943, the Allies declared their intention to liberate and reconstitute Austria. In April 1945, both Eastern and Western-front Allied 
                                        forces liberated the country. Subsequently, the victorious allies divided Austria into zones of occupation similar to those in Germany with a four-power 
                                        administration of Vienna. Under the 1945 Potsdam agreements, the Soviets took control of German assets in their zone of occupation. These included 7 % of Austria’s
                                         manufacturing plants, 95 % of its oil resources, and about 80 % of its refinery capacity. The properties returned to Austria under the Austrian State Treaty.
                                          This treaty, signed in Vienna on May 15, 1955, came into effect on July 27, and, under its provisions, all occupation forces departed by October 25, 1955. Austria
                                           became free and independent for the first time since 1938.</p>

                                    <p><a id="Austrian_Compensation_Programs_and_Acknowledgment_of_its_Nazi_Role" name="Austrian_Compensation_Programs_and_Acknowledgment_of_its_Nazi_Role"></a></p>

                                    <h3><span class="mw-headline">Austrian Compensation Programs and Acknowledgment of its Nazi Role</span></h3>

                                    <p>During the immediate postwar period, Austrian authorities introduced certain restitution and compensation measures for Nazi victims, but many of these initial
                                         measures were later seen as inadequate and containing flaws and injustices. There is no official estimate of the amount of compensation made under these programs.
                                          More disturbing for many was the continuation of the view that prevailed since 1943 that Austria was the "first free country to fall a victim" to Nazi aggression. 
                                          This "first victim" view was in fact fostered by the Allied Powers themselves in the Moscow Declaration of 1943, in which the Allies declared as null and void the
                                           Anschluss and called for the restoration of the country’s independence. The Allied Powers did not ignore Austria’s responsibility for the war, but nothing was said 
                                           explicitly about Austria’s responsibility for Nazi crimes on its territory. With the collapse of the Soviet Union in 1991, greater attention was given in many 
                                           countries to unresolved issues from World War II, including Austria. On November 15, 1994, Austrian President Thomas Klestil addressed the Israeli Knesset, noting
                                           that Austrian leaders "... spoke far too rarely of the fact that some of the worst henchmen of the NS dictatorship were in fact Austrians. .... In the name of the
                                            Republic of Austria, I bow my head before the victims of that time." Since 1994, Austria has committed to providing victims and heirs some one billion dollars in
                                             total compensation.</p>
                                </div>
                                <div class="art1" onclick="popup('popup12')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/artetculture3.jpg">
                                    </div>
                                    <h4> austrian art</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                <div class="popup" id="popup12"> 
                                    <button id="close" onclick="closepop('popup12')">&times;</button>
                                    <h1>Kunsthistorisches Museum</h1>
                                    <div  class="article">
                                        <img class="article-text" src="resource/artculture1/21.jpeg">
                                        <p class="article-text">
                                            The Kunsthistorisches Museum (lit. "Museum of Art History", often referred to as the "Museum of Fine Arts")
                                            is an art museum in Vienna, Austria. Housed in its festive palatial building on Ringstraße, it is crowned 
                                            with an octagonal dome. The term Kunsthistorisches Museum applies to both the institution and the main building.
                                            It is the largest art museum in the country and one of the most important museums worldwide.
                                            <br>
                                            The museum's primary collections are those of the Habsburgs, particularly from the portrait and armour collections of Ferdinand of Tirol,
                                            the collections of Emperor Rudolph II (the largest part of which is, however, scattered), and the collection of paintings of Archduke Leopold Wilhelm,
                                            of which his Italian paintings were first documented in the Theatrum Pictorium.
                                        </p>
                                    </div>
                                    <h1>Madonna of the Meadow by Raphael, 1506</h1>
                                    <div class="article">
                                        <img class="article-text" src="resource/artculture1/22.jpg" width="300px">
                                        <p class="article-text">
                                            The Madonna del Prato (Madonna of the Meadow), formally Madonna with the Christ Child and Saint John the Baptist, is an oil on board painting by Raphael,
                                            created in 1506, now held in the Kunsthistorisches Museum in Vienna. It is also known as the Madonna del Belvedere after its long residence in the imperial collection in the Vienna.<br>
                                            The painting was executed by twenty-three-year-old Raphael within months of his 1504–1505 arrival in Florence. The scene represents the figures of the Virgin Mary, the infant Jesus, 
                                            and an infant John the Baptist shown in a calm grassy meadow, in a pyramidal arrangement linked by their gazes. Mary is wearing a gold-bordered blue mantle set against a red dress, extending 
                                            her right leg along a diagonal. The blue symbolizes the church and the red Christ's death, with the Madonna touching hands with Jesus the uniting of Mother Church with Christ's sacrifice.
                                            [citation needed] Her eyes fixed on John, her head turned to the left and slightly inclined, and her hands steady him as he leans forward unsteadily to touch the miniature cross held by John.
                                            The poppy refers to Christ's passion, death and resurrection. The painting depicts a peaceful, tender and idyllic moment, disturbed only by child Jesus's grabbing at the cross held by John 
                                            the Baptist, which hints to the forthcoming Passion of Jesus.[3] This kind of serene and harmonious composition was held in very high regard by Renaissance patrons and earned Raphael
                                            a commission to paint a fresco for the Pope at the Vatican stanze in Rome.[2]
                                        </p>
                                    </div>
                                    <h1>Tower of Babel by Pieter Bruegel the Elder, c. 1563</h1>
                                    <div class="article">
                                        <img class="article-text" src="resource/artculture1/23.jpg" width="300px">
                                        <p class="article-text">
                                            The Tower of Babel was the subject of three paintings by Pieter Bruegel the Elder. The first, a miniature painted on ivory, 
                                            was painted while Bruegel was in Rome and is now lost.[1][2] The two surviving paintings, often distinguished by the prefix "Great" and "Little", are in the Kunsthistorisches Museum, 
                                            Vienna and the Museum Boijmans Van Beuningen in Rotterdam respectively. Both are oil paintings on wood panels.<br>
                                            The Rotterdam painting is about half the size of the Vienna one. In broad terms they have exactly the same composition, but at a detailed level everything
                                             is different, whether in the architecture of the tower or in the sky and the landscape around the tower. The Vienna version has a group in the foreground, 
                                             with the main figure presumably Nimrod, who was believed to have ordered the construction of the tower
                                            , although the Bible does not actually say this. In Vienna the tower rises at the edge of a large city, but the Rotterdam tower is in open countryside.<br>
                                            The paintings depict the construction of the Tower of Babel, which, according to the Book of Genesis in the Bible, was built by a unified, monolingual humanity as 
                                            a mark of their achievement and to prevent them from scattering: "Then they said, 'Come, let us build ourselves a city, and a tower with its top in the heavens, 
                                            and let us make a name for ourselves; otherwise we shall be scattered abroad upon the face of the whole earth.'" (Genesis 11:4).
                                        </p>
                                    </div>
                                    <h1>Isabella in Black by Titian</h1>
                                    <div class="article">
                                        <img class="article-text" src="resource/artculture1/24.jpg" width="300px">
                                        <p class="article-text">
                                            Isabella in Black (also called Portrait of Isabella d'Este) is a portrait of a young woman by Titian. 
                                            It can be dated to the 1530s and is in the Kunsthistorisches Museum in Vienna. 
                                            The artist and the date are undisputed.
                                             Beyond the museum documentaton, there are repeated doubts about the person depicted.<br>
                                             Depicted is a young woman as a half figure in a chair with an armrest[1] against a dark background. She stares 
                                             slightly to the left. Personal features are light blond curls, the (rare) eye colour light grey, flat eyebrows and 
                                             a snub nose — overall not representing the ideal of beauty. On her head she wears a balzo (a fashion invention of 
                                             Isabella d'Este (prototypes before 1509[2]), but widely popular in northern Italy in the 1530s). Her clothes are dark, the sleeves green with patterns,
                                              a gold decorated shirt and a fur (probably lynx). The canvas is reputed to be trimmed on the left and right.<br>
                                              The painting passed from the Gonzaga collection in Mantua to the collection of Archduke Leopold Wilhelm of Austria, where it is listed as Catherine Cornaro ("Queen of Cyprus") in the inventory in 1659.
                                                An engraving of a copy of the painting shows an inscription "E Titiani prototypo P. P. Rubens exc. Isabella Estensis Francisisci Gonzagae March. Matovae uxor". 
                                                 However, this inscription is three to four generations later and thus uncertain 
                                                (cf. the mistaken baroque naming "Queen of Cyprus").
                                        </p>
                                    </div>
                                     <h1><a href="https://www.khm.at/en/">to learn more visite the site of the Kunsthistorisches Museum's officiel site</a></h1>   
                                </div>
                            </div>
                            <div class="artsegement">
                                <div class="art1" onclick="popup('popup13')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/artetculture4.jpg">
                                    </div>
                                    <h4>famous austrians</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                <div class="popup" id="popup13"> 
                                        <button id="close" onclick="closepop('popup13')">&times;</button>
                                        <h1>Wolfgang Amadeus Mozart </h1>
                                        <div class="article">
                                            <img class="article-text" src="resource/artculture1/31.jpg" width="300px">
                                            <p class="article-text">
                                                Wolfgang Amadeus Mozart (27 January 1756 – 5 December 1791), baptised as Joannes Chrysostomus Wolfgangus Theophilus Mozart
                                                , was a prolific and influential composer of the Classical period. Despite his short life, his rapid pace of composition resulted 
                                                in more than 800 works of virtually every genre of his time. Many of these compositions are acknowledged as pinnacles of the symphonic, 
                                                concertante, chamber, operatic, and choral repertoire. Mozart is widely regarded as among the greatest composers in the history of Western music,
                                                with his music admired for its
                                                "melodic beauty, its formal elegance and its richness of harmony and texture".<br>
                                                Born in Salzburg, in the Holy Roman Empire, Mozart showed prodigious ability from his earliest childhood. Already competent on keyboard and violin,
                                                he composed from the age of five and performed before European royalty. His father took him on a grand tour of Europe and then three trips to Italy. At 17, 
                                                he was a musician at the Salzburg court but grew restless and travelled in search of a better position.<br>
                                                While visiting Vienna in 1781, Mozart was dismissed from his Salzburg position. He stayed in Vienna, where he achieved fame but little financial security. 
                                                During his final years there, he composed many of his best-known symphonies, concertos, and operas. His Requiem was largely unfinished by the time of his death at the age of 35
                                                , the circumstances of which are uncertain and much mythologized.
                                            </p>
                                        </div>
                                        <h1>hitler</h1><div class="article">
                                            <img class="article-text" src="resource/artculture1/32.jpg" width="300px">
                                            <p class="article-text">
                                                Adolf Hitler (German: [ˈadoːlf ˈhɪt.lɐ] (20 April 1889 – 30 April 1945) was an Austrian-born German politician who was dictator of Germany from 1933 
                                                until his death in 1945. He rose to power as the leader of the Nazi Party,[a] becoming the chancellor in 1933 and then taking the title of Führer und Reichskanzler in 1934.
                                                During his dictatorship, he initiated World War II in Europe by invading Poland on 1 September 1939. He was closely involved in military operations throughout the war and was 
                                                central to the perpetration of the Holocaust: the genocide of about six million Jews and millions of other victims.<br>
                                                De 1933 à 1945, en tant que Führer (« guide ») du peuple allemand, il a dirigé l'Allemagne, dans un régime politique totalitaire surnommé le Troisième Reich1 dont il est le maître absolu.
                                                Appliquant les idées qu'il a exposées en 1924 dans son livre Mein Kampf (Mon combat), il fait de l'Allemagne un État dictatorial qu'il domine avec l'aide de son parti,
                                                le NSDAP (ou parti nazi, en allemand Nationalsozialistische Deutsche Arbeiterpartei, le « Parti national-socialiste des travailleurs allemands »).
                                                Dans le cadre de ce régime autoritaire, plusieurs organes policiers et miliciens sont créés : ces institutions répressives contribuent à la mise en place d'un État 
                                                totalitaire qui contrôle la population et élimine tous les opposants au nazisme, d'abord les communistes, 
                                                puis les minorités désignées comme à éliminer pour des raisons racistes et antisémites.
                                            </p>
                                        </div>
                                        <h1> Sigmund Freud </h1><div class="article">
                                            <img class="article-text" src="resource/artculture1/33.jpg" width="300px">
                                            <p class="article-text">
                                                Sigmund Freud (/frɔɪd/ FROYD, German: [ˈziːkmʊnt ˈfʁɔʏ̯t]; born Sigismund Schlomo Freud; 6 May 1856 –
                                                23 September 1939) was an Austrian neurologist and the founder of psychoanalysis, a clinical method for evaluating and treating pathologies explained as 
                                                originating in conflicts in the psyche, through dialogue between a patient and a psychoanalyst.<br>
                                                Sigismund Schlomo Freud, plus connu sous le nom de Sigmund Freud, est un docteur en médecine et neurologue autrichien né le 6 mai 1856 à 
                                                Freiberg et décédé le 23 septembre 1939 à Londres. Père de la psychanalyse, il développe plusieurs 
                                                théories fondamentales sur la psyché humaine, du complexe d'Œdipe à l'inconscient.<br>
                                            </p>
                                        </div>
                                        <h1> Arnold Schwarzenegger </h1>
                                            <div class="article">
                                            <img class="article-text" src="resource/artculture1/34.jpg" width="300px">
                                            <p class="article-text">
                                                Arnold Schwarzenegger est un culturiste, acteur, réalisateur, producteur de cinéma, bodybuilder et homme politique austro-américain, né le 30 juillet 1947 à Thal, en Autriche.<br>
                                                Son physique exceptionnel lui ouvre les portes d'Hollywood, dont il devient l'une des plus grandes vedettes mondiales du cinéma d'action dans les années 1980-1990, ainsi qu'en témoigne son
                                                importante filmographie, dans laquelle figurent aussi bien le genre fantastique que la comédie ou la science-fiction. Durant cette période, il a notamment travaillé avec des cinéastes 
                                                tels que John Milius, James Cameron, John McTiernan, Paul Verhoeven et Ivan Reitman, 
                                                et a reçu le Golden Globe de la révélation masculine de l'année en 1977 pour son rôle dans Stay Hungry.<br>
                                                Engagé politiquement avec le Parti républicain, il est élu 38e gouverneur de Californie le 17 novembre 2003. Il est réélu à ce poste le 7 novembre 2006. Il quitte ses fonctions le 3 janvier 2011. Depuis, Arnold Schwarzenegger a repris sa carrière d'acteur.
                                                En 2004 et 2007, il fait partie du Time 100, classement établi par le magazine Time des 100 personnalités les plus influentes dans le monde3,4. En 2010, il fonde l'organisation non gouvernementale R20 pour participer à la lutte contre le changement climatique.
                                            </p>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                    
                
            <!--3-->    <div id="siteetmonument">  
                            <h2  class="h2">SITE ET MONUMENT A VISITER </h2>
                            <div class="artsegement" >
                                <div class="art1" onclick="popup('popup31')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/places1.jpg">
                                    </div>
                                    <h4>Hallstatt Old Town</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div> 
                                <div class="popup" id="popup31">
                                    <button id="close" onclick="closepop('popup31')">&times;</button>
                                    <h2>Hallstatt Old Town,  Hallstatt</h2>
                                    <img class="article-img" src="resource/places/1.jpeg" width="90%">
                                        <p class="article-text">
                                            Hallstatt is a small village in the Austrian Alps that is famous for its beautiful lakes and stunning old town. The village was first settled more than 7,000 years
                                             ago and has been continuously inhabited since then.<br>The old town is a
                                            UNESCO World Heritage Site and is full of historical buildings, churches, and cobblestone streets. There are also many shops and restaurants in 
                                            the old town, making it a popular destination for tourists.
                                            Hallstatt is located in the Salzkammergut region of Austria and is close to several other popular tourist destinations, including Salzburg, Golling, and Bad Ischl.
                                            The village can be reached by car or train and there are also several boat tours available that visit the village.<br>
                                        </p>
                                        <img class="article-img" src="resource/places/2.jpg" width="90%">
                                        <h2><a href="https://whc.unesco.org/en/list/806/">learn more</a></h2>
                                       </div>
                                <div class="art1"  onclick="popup('popup32')">
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/places2.jpg">
                                    </div>
                                    <h4>the opera house</h4>
                                    <p>descriotion</p>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                 <div class="popup" id="popup32">
                                    <button id="close" onclick="closepop('popup32')">&times;</button>
                                    <h1>Wiener Staatsoper the opera house</h1>
                                    <img class="article-img" src="resource/places/11.jpg" width="60%">
                                       <p>
                                        Wiener Staatsoper is one of the leading opera houses in the world. Its past is steeped in tradition.
                                         Its present is alive with richly varied performances and events. Each season, the schedule features 
                                         350 performances of more than 60 different operas and ballets. Every night, you can witness world-class 
                                         artists alongside the permanent ensemble members on the stage and at the conductor’s desk, accompanied by 
                                         a unique orchestra: the orchestra of Wiener Staatsoper, whose members at
                                         the same time make up the Vienna Philharmonic Orchestra.
                                       </p>
                                        <img class="article-img" src="resource/places/12.jpg" width="60%">
                                        <h2><a href="https://www.wiener-staatsoper.at/en/staatsoper/the-opera-house/">learn more</a></h2>
                                       </div>
                            </div>
                            <div class="artsegement">
                                <div class="art1"  onclick="popup('popup33')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/places3.jpg">
                                    </div>
                                    <h4>landsites ,austria</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                <div class="popup" id="popup33">
                                    <button id="close" onclick="closepop('popup33')">&times;</button>
                                    
                                    <h1>Green Lake in Styria</h1>
                                    <div style="display: flex;">
                                        <img class="article-img" src="resource/places/31.jpeg" width="60%">
                                       <p>Granite giants, roaring waterfalls and gorges, meandering rivers, 
                                        shimmering mountain lakes and bizarre tree formations. The most fascinating 
                                        landscapes in Austria are all creations of Mother Nature. As a result of the
                                         geological conditions, the ice ages, climate zones, fauna and flora the country
                                          today presents itself as an impressive and unique mix of diverse natural wonders 
                                          you won't easily find elsewhere.
                                        While none of these stunning features were created by humans, Austrians 
                                        take especially great pride in looking after all the natural treasures the country 
                                        is known and beloved for, preserving them for locals, visitors and the next generations
                                         to come. Austria is beautiful on pictures, no doubt - but it will blow you away in real
                                          life. Again and again.</p>
                                    </div>
                                    <h1>World of Ice Giants in Salzburg</h1>
                                    <div style="display: flex;">
                                        <img class="article-img" src="resource/places/32.jpg" width="60%">
                                       <p>Werfen's "Eisriesenwelt" [world of ice giants] is actually the world's biggest ice cave:
                                         The cave system extends more than 42 km deep into the mountain. The first section, about a kilometer in length, features imposing ice formations and is open to the public. Since it is a protected natural monument, development of the cave has been painstakingly
                                         cautious in order to preserve its unique natural beauty and ecosystem.</p>
                                    </div>
                                    <h2><a href="https://www.austria.info/en/summer/most-breathtaking-natural-wonders-in-austria">learn more</a></h2>
                                </div>
                            </div>
                        
                        </div>
            <!--4-->    <div id="indexvilles">  
                            <h2  class="h2"> INDEX DES VILLES </h2>
                            <div class="artsegement" >
                                <div class="art1" onclick="popup('popup41')">
                                    
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/ville1.jpg">
                                    </div>
                                    <h4 style="text-align:center ;">vienne</h4>
                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div> 
                                <div class="popup" id="popup41">
                                    <button id="close" onclick="closepop('popup41')">&times;</button>
                                    <h2 style="font-size: 40px;">vienne</h2>
                                    <div style="display: flex;">
                                    <div width="400px">
                                        <img class="article-img" src="resource/villes/01.jpg" width="400px">
                                        <img class="article-img" src="resource/villes/02.jpg" width="400px">
                                        <img class="article-img" src="resource/villes/03.jpeg" width="400px">
                                        <img class="article-img" src="resource/villes/04.jpg" width="400px">
                                    </div>
                                    <div width="400px">
                                        <p class="city-text" >
                                            Vienne (prononcé : /vjɛn/ ; en allemand : Wien /viːn/  ; 
                                            en bavarois : Wean ; en hongrois : Bécs ; en slovène : Dunaj) est
                                             la capitale et la plus grande ville de l'Autriche ; elle est aussi 
                                             l'un des neuf Länder (État fédéré) du pays (en alleman d : 
                                             Bundesland Wien).<br><br>

                                            La ville est située dans l'est du pays et traversée par le Danube (Donau). Capitale 
                                            du duché puis archiduché d'Autriche, elle fut de fait celle du monde germanique durant le 
                                            règne de la maison de Habsbourg (devenue en 1745 la maison de Habsbourg-Lorraine) sur le Saint
                                            -Empire romain germanique (1273 – 1291, 1298 – 1308, 1438 – 1806) puis présida la Confédération
                                            germanique (1815 – 1866). Elle fut en même temps celle de l'empire d'Autriche (1804 – 1867) puis
                                            de l'Autriche-Hongrie (1867 – 1918). Elle a été le point de départ de la crise bancaire de mai 
                                            1873. Depuis plusieurs années, elle figure dans les premières places de nombreux classements
                                            internationaux récompensant la qualité de vie des métropoles. Par exemple, la ville est en tête du
                                                classement selon l'indice Mercer évaluant
                                            le coût de la vie et la qualité de vie de 221 villes dans le monde2,3.<br><br>

                                            Peuplée d'environ 1,9 million d'habitants4, Vienne est le principal centre culturel, politique et 
                                            économique de l'Autriche. Jusqu'au début du xxe siècle, elle est la plus grande 
                                            ville germanophone au monde. Elle est aujourd'hui deuxième derrière Berlin. 
                                            C'est la 6e plus grande ville de l'Union européenne par la population municipale.<br><br>

                                            Vienne est un important centre politique international, notamment en raison de
                                            la neutralité autrichienne, puisqu'y siègent l'OSCE, l'OPEP et diverses agences 
                                            de l'ONU, comme l'Agence internationale de l'énergie atomique, l'Office des Nations
                                            unies contre la drogue et le crime ou l'ONUDI. En 1958, Vienne partage avec La Haye le prix de
                                            l'Europe. Par ailleurs, la ville a été le lieu de signature d'un grand nombre de conventions et
                                                traités internationaux. Entre 2005 et 2010, Vienne a été la première destination mondiale pour 
                                                les congrès et conventions internationales.<br><br>

                                            Surnommée la « Ville des rêves » parce que l'inventeur de la psychanalyse, Sigmund Freud, y résida, 
                                            ou encore la « Ville de la musique », en raison de l'influence considérable que la ville a eue dans le 
                                            domaine de la musique, notamment à travers le classicisme viennois. Vienne accueille environ 6 millions de
                                            touristes chaque année. Grâce à sa riche histoire, elle bénéficie d'un patrimoine culturel et architectural
                                            remarquable. Depuis 2001, le centre historique de Vienne est classé au patrimoine mondial de l'UNESCO5. 
                                            <br><br><br></p>
                                        <h2><a href="https://fr.wikipedia.org/wiki/Vienne_(Autriche)" style="font-size: 40px;">learn more</a></h2>
                                       </div>
                                    </div>
                                </div>
                                <div class="art1"  onclick="popup('popup42')">
                                    <div class="imgart" >
                                    <img  class="img1" src="resource/ville2.jpg">
                                    </div>
                                    <h4 style="text-align:center ;">Graz</h4>

                                    <a class="savoirplus"> &#x2794 en savoir plus</a>
                                </div>
                                 <div class="popup" id="popup42">
                                    <button id="close" onclick="closepop('popup42')">&times;</button>
                                    <h2 style="text-align:center ;">Graz</h4>
                                    <div style="display: flex;">
                                        <div width="400px">
                                            <img class="article-img" src="resource/villes/11.jpg" width="400px">
                                            <img class="article-img" src="resource/villes/12.jpeg" width="400px">
                                            <img class="article-img" src="resource/villes/13.jpeg" width="400px">
                                            <img class="article-img" src="resource/villes/14.jpeg" width="400px">
                                        </div>
                                        <div width="400px">
                                            <p class="city-text" >
                                                Graz ou Gratz (prononcé en allemand : /ɡʁaːt͡s/) est une ville d'Autriche et la capitale
                                                 de l'État de Styrie (en allemand : Steiermark). Avec une population de 288 806 habitants 
                                                 (629 161 dans l'aire urbaine), c'est la deuxième ville la plus peuplée d'Autriche.
                                                    Son nom est dérivé du mot slave grad pour « ville » ; gradec, /ɡradet͡s/, signifie « petite ville ». D'ailleurs,
                                                    Gradec est toujours le nom slovène de Graz4.
                                                    Elle possède quatre universités, qui accueillent 40 000 étudiants. 
                                                    La bibliothèque d'une de ces universités est la plus grande bibliothèque scientifique de Styrie, 
                                                    et la troisième d'Autriche.<br><br>Située dans le sud-est du pays, à 145 km au sud-ouest du centre-ville de Vienne5, Graz est arrosée par la rivière Mur. Elle se trouve dans une plaine délimitée à l'ouest par les derniers contreforts du massif alpin (le Plabutsch de 763 m.), au nord et à l'est par les collines de Styrie. L'agrément de son site et ses vastes parcs lui valent parfois l'appellation de ville-jardin. Les communes voisines sont :

                                                    <br>au nord : Gratkorn, Stattegg, Weinitzen ;
                                                    <br>à l'est : Kainbach bei Graz, Hart bei Graz, Raaba ;
                                                    <br>au sud : Feldkirchen bei Graz, Seiersberg ;
                                                    <br>à l'ouest : Attendorf, Thal, Judendorf-Straßengel.
                                                    <br>La forteresse de Riegersburg se trouve à 38 km à l'Est de son centre, 
                                                    la ville de Köflach à 27 km à l'Ouest, Maribor à 60 km au Sud.<br>
                                                    À l'époque romaine, la zone est agricole et densément peuplée.

                                                    À la suite de l'effondrement de l'Empire d'Occident, la région est colonisée par des populations slaves. Graz fut construit autour de la colline du Schloßberg, sur laquelle est construit un château.

                                                    En 800, s'installent aussi des colons Bavarii dans la région, qui est devenue la Carantanie.

                                                    La première mention écrite de la bourgade date de 881. Elle devint la résidence du pouvoir local, puis ville de résidence des Habsbourg de 1379 à 1619.

                                                    Avec une situation stratégique à l'entrée de la vallée fertile de la Mur, Graz fut assiégée sans succès par les Hongrois sous Matthias Corvin en 1481, puis par les 
                                                    Turcs ottomans en 1529 et 1532. Elle vit aussi passer des raids de cavaliers, dont certainement celui qui ravagea la région de Voitsberg en août 1480.

                                                    En 1540, dans le quartier "Eggenberg" fut fondé les Paradies, ou école luthérienne, dans laquelle
                                                     Johannes Kepler enseigna de 1594 à 1598. L'archiduc Charles II d'Autriche-Styrie fit brûler 20 000 livres
                                                      protestants dans le carré de ce qui est de nos jours un asile de malades mentaux, et réussit à remettre
                                                      la Styrie sous l'autorité de Rome.

                                                    En 1573 est fondé un collège jésuite, qui devient l'université de Graz en 1585.

                                                    En 1625 est construit le château d'Eggenberg, plus grand château de Styrien 1.

                                                    Entre 1784 et 1809, les remparts sont démantelés, et au xixe siècle de nouveau quartiers sont
                                                     créés, aux vastes places et rues rectilignes. La ligne de chemin de fer Vienne-Trieste (348 km) 
                                                     est créée, avec arrêt à Graz.

                                                    En 1878 est fondé la première ligne de tramway, hippomobile. Elle est électrifiée en 1897.

                                                    Nikola Tesla étudia l'ingénierie électrique à l'École polytechnique en 1875. Le lauréat du prix
                                                     Nobel Otto Loewi y enseigna de 1909 à 1938. Erwin Schrödinger fut brièvement le chancelier de l'
                                                     université en 1936. Peu après, un camp de concentration fut installé non loin de Graz par les nazis et Schrödinger s'enfuit.

                                                    Les troupes soviétiques du troisième front biélorusse du général Tolboukhine entrèrent à Graz le 
                                                    9 mai 1945, aussitôt après la capitulation du Troisième Reich, et y restèrent jusqu'au 23 août 1945,
                                                     lorsqu'à la suite de la conférence de Potsdam, Graz fut attribuée à la zone d'occupation britannique6.

                                                    En 1970, Graz accueille le quatrième festival Europa Cantat. En 1979, elle fut lauréate du Prix de l'Europe, remis par le Conseil de l'Europe
                                                    <br><br><br></p>
                                            <h2><a href="https://fr.wikipedia.org/wiki/Graz" style="font-size: 40px;">learn more</a></h2>
                                           </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="artsegement">
                                    <div class="art1"  onclick="popup('popup43')">
                                        
                                        <div class="imgart" >
                                        <img  class="img1" src="resource/ville3.jpg">
                                        </div>
                                        <h4 style="text-align:center ;" >linz</h4>
                                        <a class="savoirplus"> &#x2794 en savoir plus</a>
                                    </div>
                                    <div class="popup" id="popup43">
                                        <button id="close" onclick="closepop('popup43')">&times;</button>
                                        <h2 style="text-align:center ;">LINZ</h4>
                                        <div style="display: flex;">
                                            <div width="400px">
                                                <img class="article-img" src="resource/villes/21.jpeg" width="400px">
                                                <img class="article-img" src="resource/villes/22.jpg" width="400px">
                                                <img class="article-img" src="resource/villes/23.jpg" width="400px">
                                                <img class="article-img" src="resource/villes/24.jpg" width="400px">
                                            </div>
                                            <div width="400px">
                                                <p class="city-text" >
                                                    Linz, aussi connue en français sous le nom de Lintz, est une ville du nord-ouest de l'Autriche, capitale du Land de 
                                                    Haute-Autriche (Oberösterreich), sur le Danube. Avec 204 846 habitants en 20184 (approximativement 801 000 dans la
                                                    région métropolitaine5), elle est la 3e ville la plus peuplée du pays.

                                                    <br><br>En 2009, Linz a été choisie comme capitale européenne de la culture. Depuis décembre 2014, Linz est membre du
                                                        Réseau des villes créatives de l'UNESCO (UCCN) en tant que ville des arts médiatiques. Les villes reçoivent 
                                                        ce titre pour enrichir le style de vie urbain grâce au parrainage et à l'intégration réussie de l'art médiatique 
                                                        et à l'implication de la société dans ces formes d'art électronique.

                                                        Un citoyen illustre était Jean Kepler, qui passa quelques années dans la ville et découvrit le 15 mai 1618 les trois
                                                        lois du mouvement des planètes.
                                                        Anton Bruckner est un autre citoyen célèbre qui a travaillé entre 1855 et 1868 en tant que compositeur et organiste 
                                                        local dans la vieille cathédrale de Linz. La Brucknerhaus porte son nom.<br><br>
                                                        Le compositeur Wolfgang Amadeus Mozart a composé la Linzer Sinfonie et la Linzer Sonate à Linz en novembre 1783.
                                                        Enfin, Linz est célèbre pour le gâteau Linzer (Linzer Torte), qui serait le plus vieux gâteau au monde, sa première 
                                                        recette datant de 1653..<br><br><br>
                                                        Près de Linz, dans la ville de Leonding, Alois Hitler et Klara Polzl, les parents d'Adolf Hitler sont enterrés. Adolf Hitler fréquenta
                                                        lui-même l'école 
                                                        (Fadingergymnasium) de Linz, mais la quitta pour poursuivre sa scolarité dans une école de Steyr (Haute-Autriche). Hitler projette de 
                                                        faire de Linz une métropole et à cette fin il envisage la restructuration quasi complète de la ville, selon les plans de l'architecte Hermann 
                                                        Giesler, devenu manifestement après Speer durant les derniers jours du Reich son nouveau et grand favori14, par la construction de nouveaux 
                                                        édifices15 : une série d'immeubles d'apparat sur les deux rives du Danube (un pont suspendu devant relier les deux rives de celle-ci), d'une 
                                                        maison du NSDAP (un énorme bâtiment avec une salle de réunion gigantesque et un campanile comprenant une crypte dans laquelle il voulait avoir 
                                                        sa sépulture, un nouvel hôtel de ville, un grand hôtel de luxe, un grand théâtre, une bibliothèque, un musée des armes, un gigantesque musée 
                                                        (le Führermuseum consacré à l'art germanique), un bâtiment d'exposition et de deux monuments, l'un à la gloire de l'Anschluss, l'autre d'Anton 
                                                        Bruckner ; non loin de là, sur les hauteurs, devait s'élever la résidence où Hitler souhaitait se retirer dans sa vieillesse. Le Führer concéda
                                                        également à sa maîtresse, Mlle Braun, un plein pouvoir sur le quartier des affaires, les allées vertes ainsi que les parcs pour leurs 
                                                        réaménagements futurs16. Hitler rêvait de reproduire à Linz le panorama qu'à Budapest les siècles avaient modelé sur les deux rives du Danube
                                                        (Vienne était mal orientée selon lui car tournait le dos au Danube). Linz reçoit plusieurs titres honorifiques nazis à partir de 1938, et notamment celui de « filleule du Führer ».<br><br>

                                                                Pendant la Seconde Guerre mondiale, Linz était un centre industriel majeur, qui produisait des composés chimiques et de
                                                                l'acier pour la machine de guerre nazie. Plusieurs usines avaient été démontées et transférées depuis la Tchécoslovaquie récemment 
                                                                occupée et ré-assemblées à Linz. Le complexe de camps de Mauthausen-Gusen, le dernier camp de concentration nazi à être libéré,
                                                                est localisé autour de Linz, avec pour principal camp Mauthausen à peine à 30 kilomètres. Après la guerre, le Danube, qui traverse l'est de la
                                                                ville, séparant le district Urfahr du nord du reste de Linz, servit de frontière entre les zones d’occupation soviétique et américaine.<br><br></p>
                                                <h2><a href="https://fr.wikipedia.org/wiki/Linz" style="font-size: 40px;">learn more</a></h2>
                                            </div>
                                            </div>
                                </div>
                        </div>
                        </div>
            <!--5-->    <div id="maps">  
                        <h2  class="h2"> carte du pays </h2>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2749828.466462797!2d13.345758150000002!3d47.69647194999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079b259d2a7f%3A0x1012d47bdde4c1af!2sAutriche!5e0!3m2!1sfr!2sma!4v1670805714121!5m2!1sfr!2sma" width="100%" height="700px" style="border:5px solid rgb(179, 109, 109); margin-left: 30px;margin-bottom: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>           

        </div> 
                    <div class="vidnews">
                        <video class="vid" autoplay muted>
                        <source src="intro-vid.mp4" type="video/mp4">
                        </video>
                        <div class="newscont">
                            <?php
                            $conn = new mysqli("localhost", "root", "", "projet");
                            if ($conn->connect_error) {
                            die("Connection failed:" . $conn->connect_error);}
                            $insert="select * from news 
                                        order by datpub 
                                        limit 5";
                            $sql3=$conn->query($insert);
                             $tab3 = array();
                             while ($row_user3 = $sql3->fetch_assoc())
                                 $tab3[] = $row_user3;

                            foreach ($tab3 as $key => $value):
                                echo '<div class="news" >';
                               echo '<h3>'.$value["head"].'</h3>';
                                echo ' <p><a href=" '.$value["lien"].'">see more</a></p>';
                                echo ' <p> '.$value["datpub"].'</p></div >';
                               endforeach;?>
                            
                        </div>
                        <button class=" newsletter" onclick="popup('join')"> join our newsletter</button>
                        <div id="join" > 
                            <button id="close" onclick="closepop('popup11')" style="background-color: #b11414;">&times;</button>
                            <h1> veuiller entrer votre nom et email</h1>
                            <form  name="quest1"  action="" method="post" >
                                <legend>nom:</legend>
                                <input type="text" name="nom"><br>
                                <legend>email:</legend>
                                <input type="text" name="mail"><br>
                                <input type="submit"  name="join">
                            </form>
                            <?php
                                If(isset($_POST['join'])){jion();}
                               function jion(){
                                $conn = new mysqli("localhost", "root", "", "projet");
                                if ($conn->connect_error) {
                                die("Connection failed:" . $conn->connect_error);}
                                $insert="insert into newsletter(nom,email) values ('". $_POST['nom']."','".$_POST['mail']."');";
                                $GLOBALS["conn"]->query($insert);
                                }
                               ?>
                        </div>
                    </div>
            </div>   
        </div>
   <footer>
    copyright XXXXXX 2022-2025
   </footer>
</body>
</html>