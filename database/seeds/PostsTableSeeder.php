<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            'title' => 'Is C++ Dying ?',
            'slug' => 'is-c-dying',
            'content' => '<p class="ui_qtext_para" style="margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;">No. C++ is being used for more and more all the time, especially since C++11.</p><p class="ui_qtext_para" style="margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;">But, the computer industry as a whole is expanding even faster. In the past, you had to be pretty passionate about computers to be able to keep a job in the industry. Now, there is so much demand that a whole new wave of new people are getting involved, and for them, C++ is too difficult to learn. So you have a large segment of the industry that is using things like Java and Javascript.</p><p class="ui_qtext_para" style="margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;">So, there will always be a need for C++, but now there is also room for jobs that can be done with less training. Relative to this new influx, C++ must seem to be outdated and shrinking, especially to those new people. But in absolute terms, C++ use is growing at a great pace.</p><p class="ui_qtext_para" style="margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif;">There are a few languages that can compete with C++, like Rust and D, but they are not quite there yet, and the evolution of C++ has greatly accelerated in the past few years. They are now talking about releasing new standards every two years now.</p>',
            'post_status' => 'publish',
            'comment_status' => 'open',
            'post_link' => '',
            'user_id' => '1',
            'post_type' => 'post',
            'featured' => ''
        ]);
        App\Post::create([
            'title' => '',
            'slug' => '',
            'content' => '<p><strong><em>The Last Judgement</em></strong> is the name of the <strong>fresco</strong> located on the wall behind the altar of the <strong>Sistine Chapel</strong> in <strong>Rome</strong>. It was designed and realized by the Renaissance master <strong><a title="Michelangelo Buonarroti" href="https://www.florenceinferno.com/michelangelo-buonarroti/">Michelangelo Buonarroti</a></strong> between <strong>1533</strong> and <strong>1541</strong>.</p>
                <p>It depicts the Second Coming of Christ as well as the final and eternal Judgement by God on all humanity according to the Christian religion. Altogether there are over <strong>300 figures</strong>, with nearly all the males and angels originally shown as nudes.</p>
                <p>Michelangelo’s masterpiece was <strong>inspired</strong> by Dante’s <strong><em>Divine Comedy</em></strong> and is mentioned by Dan Brown in his <em><a title="Inferno by Dan Brown" href="https://www.florenceinferno.com/dan-brown-novel/">Inferno</a></em>.<span id="more-1978"></span></p>
                <p><img class="alignnone size-large wp-image-5311 retinized" title="The Last Judgement by Alun Salt" src="https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-912x1024.jpg" alt="The Last Judgement by Alun Salt" width="912" height="1024" srcset="https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt.jpg 912w, https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-267x300.jpg 267w, https://www.florenceinferno.com/wp-content/uploads/2014/01/The-Last-Judgement-by-Alun-Salt-768x862.jpg 768w" sizes="(max-width: 912px) 100vw, 912px"></p>
                <p>It is the second largest fresco by Michelangelo located in the Sistine Chapel, next to the frescoe on the ceiling illustrating episodes taken from the <em>Book of Genesis</em>. Between the two frescoes is an interval of almost twenty-five years, and one can witness between the two a change in Michelagelo’s artistic vision.</p>
                <h2>Before starting</h2>
                <p>The realization and the location of the <em>The Last Judgement</em> came about as the result of the specific wishes of the <strong>first patron</strong>, <strong>Pope Clemente VII</strong>. Unfortunately, he would only see the compositional model: the actual painting of the fresco took place under his <strong>successor</strong>, <strong>Pope Paolo III Farnese</strong>, beginning in <strong>1536</strong> after a <strong>long</strong> and troublesome <strong>preparatory phase</strong>.</p>
                <p>This phase consisted of the creation of the <strong>chapel’s wall</strong>, which involved the placing of a thick layer of bricks at the top and of a thinner layer of bricks at the bottom to <strong>create</strong> an <strong>inclined surface</strong>. The sloping of the wall was deemed necessary to improve visibility and to avoid the deposit of dust.</p>
                <p>During this phase, <strong>three frescoes</strong> that were <strong>painted on</strong> upper the <strong>wall</strong> by the Italian painter known as <strong>Perugino</strong> were <strong>destroyed</strong>, as were two lunettes painted by Michelangelo himself over twenty years earlier. The result was the creation of space to paint one great piece of architecture.</p>
                <p>Michelangelo worked alone for the entirety of the project, with the exception of minor assistance for the manual preparation of colors.</p>
                <h2>Choice of subject</h2>
                <p>While the Last Judgment was a <strong>traditional subject</strong> for large church frescoes, it was unusual to place a fresco at the east end, over the <strong>altar</strong>. The traditional positioning was on the west wall, over the main doors, at the back of the church, so that each member of the congregation was reminded of its possible fate on their way out of church. It might be either painted on the interior or in a sculpted tympanum on the exterior. However, a number of late medieval panel paintings, mostly altarpieces, were based on the subject with similar compositions, although adapted to a horizontal picture space. These include the <em>Beaune Altarpiece</em> by Rogier van der Weyden, and works by artists such as Fra Angelico, Hans Memling, and Hieronymus Bosch. Many aspects of Michelangelo’s composition reflect the well-established traditional Western depiction, but with a fresh and <strong>original approach</strong>.</p>
                <p>Most traditional versions had a figure of Christ depicted in <strong>majesty</strong> in about the same position as Michelangelo’s, although even larger than his, with a greater disproportion in scale to the other figures. As here, compositions contained large numbers of figures, divided between angels and saints around Christ at the top, with the souls being judged down below. Typically there is a strong contrast between the <strong>ordered ranks</strong> of figures in the top part, and the <strong>chaotic</strong> and frenzied activity below, especially on the right side that leads to Hell. The flow of souls usually began at the bottom (viewer’s) left, as here, with resurrected souls rising from their graves and moving towards judgement. Some pass judgement and continue upwards or to the left, to join the company in heaven, while others pass over to the right and then downwards towards Hell in the bottom right corner (compositions had difficulty incorporating Purgatory visually).<br>
                The damned souls may be shown naked, as a mark of their humiliation as devils carry them off, and sometimes the newly resurrected souls too, but angels and those in Heaven are fully dressed, their clothing a main clue to the identity of groups and individuals.</p>
                <h2>Description</h2>
                <p>The painting is noted for its <strong>radical departure from traditional depictions</strong> of the Last Judgment. In particular, the overall structure replaces the traditional pattern of horizontal layers depicting heaven, earth, and hell with a <strong>single large space</strong>. The figures are grouped into <strong>individual plastic formations</strong> and are placed in <strong>isolation</strong> characteristic of eternity’s terrible <strong>emptiness</strong>.</p>
                <p>At the centre of the work is a depiction of <strong>Christ</strong>, captured in the moment preceding the pronoucement of the verdict of the Last Judgement. To Christ’ right is his mother, Vergine Maria (the <strong>Virgin Mary</strong>), who turns her head in a gesture of resignation:in fact she can no longer intervene in the decision, but only await the result of the Judgement.</p>
                <p>Surrounding Christ in a slow rotary movement are figures, identified as the <strong>saints</strong> and <strong>God’s elect</strong>. Most notable are San Pietro (<strong>Saint Peter</strong>) holding the Keys of Heaven San Lorenzo (<strong>St Laurence</strong>) with the gridiron, San Bartolomeo (<strong>St Bartholomew</strong>) with his own skin, which is usually recognized as a self-portrait of Michelangelo, <strong>St Catherine of Alexandria</strong> with the cogwheel and <strong>St Sebastian</strong> kneeling holding the arrows. Many others, even some of the larger saints, are difficult to identify.<br>
                Several of the main saints appear to be showing Christ their <strong>attributes</strong>, the evidence of their <strong>martyrdom</strong>. This used to be interpreted as the saints calling for the damnation of those who had not served the cause of Christ, but other interpretations have become more common, including that the saints are themselves not certain of their own fate, and try at the last moment to remind Christ of their sufferings.</p>
                <p>In the centre of the lower section are the <strong>angels</strong> of the Apocalypse, who are awaking the dead with the sound of long trumpets. On the left, the risen recover their bodies as they ascend towards <strong>heaven</strong>; and on the right, angels and <strong>demons</strong> fight over making the damned fall down to <strong><a title="The Map of Hell" href="https://www.florenceinferno.com/the-map-of-hell/">hell</a></strong>.</p>
                <p>Below this detail is the representation of Hell, against the backdrop of a red sky in flames, and of <strong>Charon</strong>, leading the damned into hell where they are greeted by <strong>Minos</strong>, whose body is wrapped in the coils of the serpent. This part clearly references the <a title="Dante Alighieri’s Inferno" href="https://www.florenceinferno.com/dante-hell/">Hell</a> of Dante’s <em>Divine Comedy</em>.</p>
                <p>In the centre above Charon is a group of angels on clouds, seven of which are blowing trumpets (as in the <strong>Book of Revelation</strong>), with others holding books that record the names of the Saved and Damned. To their right is a larger figure of a <strong>soul</strong> who has just realized that he is damned, and appears paralyzed with horror. Two devils are pulling him downwards.</p>
                <p><strong>Michelangelo</strong> is able to convey the full force of terror at the supreme moment, when fate comes swiftly and where there is no time left or opportunity available to fix one’s mistakes. This instant <strong>represented</strong> by Michelangelo ends up having a universal connotation, as if it symbolizes the <strong>moment</strong> when <strong>life ends</strong> and <strong>no hope remains</strong>.</p>
                <p>The entire painting is dominated by the <strong>human figure</strong>, almost always presented fully <strong>naked</strong>. The bodies are represented with great expressiveness and power.</p>
                <h2>Reception and later changes</h2>
                <p>The reception of the painting was mixed from the start, garnering much praise but also <strong>criticism</strong> on religious and artistic grounds. Both the amount of <strong>nudity</strong> and the muscular <strong>style of the bodies</strong> have been one area of contention, with the overall composition being another.<br>
                The Last Judgment became controversial as soon as it was seen, with disputes arising between critics in the Catholic Counter-Reformation, and supporters of the genius of the artist and the style of the painting. Michelangelo was accused of being insensitive to proper <strong>decorum</strong> in respect of nudity and other aspects of the work, and of pursuing artistic effect over following the scriptural description of the event.</p>
                <p>The mixing of figures from <strong>pagan mythology</strong> with depictions of <strong>Christian subject</strong> matter was also objected to, as were the figures of Charon and Minos, wingless angels, and the very classicized depiction of Christ. Beardless Christs had in fact only finally disappeared from Christian art some four centuries earlier, but Michelangelo’s figure was unmistakably Apollonian. Further objections related to failures to follow the scriptural references.<br>
                The angels blowing trumpets are all in one group, whereas in the Book of Revelation they are sent to “the four corners of the earth.” Christ is not seated on a throne, contrary to Scripture. Such draperies as Michelangelo painted are often shown as blown by wind, but it was claimed that all weather would cease on the Day of Judgement. The resurrected souls are in mixed condition, with some appearing as skeletons while most are depicted with their flesh intact.</p>
                <p>The controversies continued for years leading into <strong>1564</strong>, after the death of Michelangelo, with a decision by the Congregation of the <strong>Council of Trent</strong> to have some of the figures of the Judgement that were considered “<strong>obscene</strong>” covered.<br>
                The task of painting the covering drapery, the so-called “<em>braghe</em>” (pants), was given to <strong>Daniele da Volterra</strong>, since then known as the “<em>braghettone</em>.” Daniele’s “braghe” were only the first and in fact others were added in the following centuries.</p>
                <p>Despite this censorship, the painting has not lost its strong expressive power. In fact, today, after the recent restoration, it still appears as one of the most <strong>intense paintings in art history</strong>.</p>
                <p>This post was originally published in January 13, 2014 and has been updated and enriched on December 15, 2017.</p>
                <p>Picture by <a href="https://www.flickr.com/photos/alun/188739956/in/photolist-hFkPb-eqr43n-ernhNo-hFkPc-69LKmz-hJtan-6UCw4-atXxSw-9d4dNM-21vgAas-5DwkR-5nFJi3-9d7aJ9-HTbiqQ-5f5DPV-ce1kbm-SeXbvh-6UCw2-9d4cQx-9d7pYW-9d7vp5-9d7ubC-jd28ho-9d7ngd-9d7hoy-9d4iyB-9d4eZx-9d79Lf-NfZDGw-dLP4BB-9d7oem-D2tCvN-21zVWQV-ZsUub7-ZezM1M-219a35J-218tUyZ-D2orbU-21t6zD3-21uZY5A-D5T3Q5-217UUYU-21i3Vjw-2173CkC-21zW2kr-21nTFCM-215K5PS-215BsvU-6pnorw-dLP4ki/" target="”_blank”">The Last Judgement by Alun Salt</a> <a href="https://creativecommons.org/licenses/by-sa/2.0/" target="”_blank”">CC BY-SA 2.0</a></p>',
                'post_status' => 'publish',
                'comment_status' => 'open',
                'post_link' => '',
                'post_type' => 'post',
                'user_id' => '1',
                'featured' => 'assets/upload/post/Last Judgement.jpg'
        ]);

        

        DB::table('post_tag')->insert([
            'post_id' => '1',
            'tag_id' => '1'
        ]);

        DB::table('post_category')->insert([
            'post_id' => '1',
            'category_id' => '1'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '1'
        ]);

        DB::table('post_category')->insert([
            'post_id' => '2',
            'category_id' => '4'
        ]);


        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '4'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '5'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '6'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '7'
        ]);

        DB::table('post_tag')->insert([
            'post_id' => '2',
            'tag_id' => '8'
        ]);

    }
}
