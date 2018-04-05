<?php /* Template Name: Hearing Simulator */ ?>
<?php get_header(); ?>

<?php
$pageTitle = get_post_meta(get_the_ID(),'show_page_title',true);
$show_page_sidebar = get_post_meta(get_the_ID(),'show_page_sidebar',true);
$sidebar_location = get_post_meta(get_the_ID(),'sidebar_location',true);
$page_sidebar = get_post_meta(get_the_ID(),'page_sidebar',true);

if($pageTitle == 1){
    echo '<div class="post_title"><div><h1>'.get_the_title().'</h1></div></div>';
}

?>

<section id="pageContent" class="blogPosts innerWrapper clearfix <?php if($show_page_sidebar == 1){ echo 'hasSidebar'; } if($show_page_sidebar == 1){ echo ' sidebarOn'.$sidebar_location; } ?>" style="padding-top: 0px">
    <?php
        if($show_page_sidebar == 1){
            echo '<aside id="page_sidebar">';
                dynamic_sidebar($page_sidebar);
            echo '</aside>';
        }
    ?>
    
    <main class="container">

	    <h1>Hearing Simulator</h1>
        <h6 class="field_image">People with normal hearing – especially parents, spouses and friends of those with hearing loss – are often eager to better understand what hearing loss sounds like. While a blindfold worn around the house for an afternoon might help someone learn what it’s like to live without vision, hearing loss comes in varying degrees and forms. Simply blocking out all sound won’t provide the right information. To really understand the complex nature of hearing loss, you have to experience the loss of both volume as well as specific sounds.</h6>
        <p class="bold">Using computer simulation algorithms, we’ve put together a group of audio files that simulate what someone with sensorineural hearing loss is able to hear in specific contexts. The sound files are grouped by type, from conversations in different contexts – background noise; restaurant; traffic – to various kinds of music. For each sound clip, you can listen to what it sounds like with “normal” hearing, as well as mild and moderate hearing loss. Here’s the hearing loss simulator</p>

        <table style="width: 100%;" border="0" cellspacing="0" cellpadding="10">
        <tbody>
        <tr>
        <td style="width: 25%; vertical-align: top;">
        <h3>Hearing Loss</h3>
        </td>
        <td style="width: 25%; text-align: center; background-color: #f2f2f2;">
        <h3>Normal</h3>
        <img src="http://209.126.119.193/~phonak/template1/wp-content/themes/modularwp-phonak/images/graphlette-normal-hearing.png" alt="graph - normal hearing" /></td>
        <td style="width: 25%; text-align: center; background-color: #c2c2c2;">
        <h3>Mild</h3>
        <img src="http://209.126.119.193/~phonak/template1/wp-content/themes/modularwp-phonak/images/graphlette-mild-hearing-loss.png" alt="graph - mild hearing" /></td>
        <td style="width: 25%; text-align: center; background-color: #f5f6f6;">
        <h3>Moderate</h3>
        <img src="http://209.126.119.193/~phonak/template1/wp-content/themes/modularwp-phonak/images/graphlette-moderate-hearing-loss.png" alt="graph - moderate hearing" /></td>
        </tr>
        <tr>
        <td>
        <h4>Speech</h4>
        </td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>Single speaker</td>
        <td style="text-align: center; background-color: #f2f2f2;"><!-- [if lt IE 9]><script>document.createElement('audio');</script><![endif]--> <audio id="audio-407-1" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker.mp3?_=1" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-2" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker-mild.mp3?_=2" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-3" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker-moderate.mp3?_=3" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Dialog two speaker</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-4" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/dialog.mp3?_=4" /><a href="https://hearinglikeme.com/content/uploads/2013/07/dialog.mp3">https://hearinglikeme.com/content/uploads/2013/07/dialog.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-5" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/dialog-mild.mp3?_=5" /><a href="https://hearinglikeme.com/content/uploads/2013/07/dialog-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/dialog-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-6" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/dialog-moderate.mp3?_=6" /><a href="https://hearinglikeme.com/content/uploads/2013/07/dialog-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/dialog-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Announcement in station</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-7" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Anouncement.mp3?_=7" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Anouncement.mp3">https://hearinglikeme.com/content/uploads/2013/07/Anouncement.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-8" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Anouncement-mild.mp3?_=8" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Anouncement-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/Anouncement-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-9" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Anouncement-moderate.mp3?_=9" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Anouncement-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/Anouncement-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>In a restaurant</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-10" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant.mp3?_=10" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-11" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-mild.mp3?_=11" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-12" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-moderate.mp3?_=12" /><a href="https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/speaker-restaurant-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td></td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>
        <h4>Environmental</h4>
        </td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>In the mountains</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-13" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Alps.mp3?_=13" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Alps.mp3">https://hearinglikeme.com/content/uploads/2013/07/Alps.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-14" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2015/07/Alps-mild.mp3?_=14" /><a href="https://hearinglikeme.com/content/uploads/2015/07/Alps-mild.mp3">https://hearinglikeme.com/content/uploads/2015/07/Alps-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-15" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Alps-moderate.mp3?_=15" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Alps-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/Alps-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Birds singing</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-16" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Birds.mp3?_=16" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Birds.mp3">https://hearinglikeme.com/content/uploads/2013/07/Birds.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-17" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Birds-mild.mp3?_=17" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Birds-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/Birds-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-18" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Birds-moderate.mp3?_=18" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Birds-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/Birds-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Frogs</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-19" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/frogs.mp3?_=19" /><a href="https://hearinglikeme.com/content/uploads/2013/07/frogs.mp3">https://hearinglikeme.com/content/uploads/2013/07/frogs.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-20" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/frogs-mild.mp3?_=20" /><a href="https://hearinglikeme.com/content/uploads/2013/07/frogs-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/frogs-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-21" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/frogs-moderate.mp3?_=21" /><a href="https://hearinglikeme.com/content/uploads/2013/07/frogs-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/frogs-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Ducks</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-22" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/duck.mp3?_=22" /><a href="https://hearinglikeme.com/content/uploads/2013/07/duck.mp3">https://hearinglikeme.com/content/uploads/2013/07/duck.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-23" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/duck-mild.mp3?_=23" /><a href="https://hearinglikeme.com/content/uploads/2013/07/duck-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/duck-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-24" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/duck-moderate.mp3?_=24" /><a href="https://hearinglikeme.com/content/uploads/2013/07/duck-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/duck-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Industry</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-25" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/industry.mp3?_=25" /><a href="https://hearinglikeme.com/content/uploads/2013/07/industry.mp3">https://hearinglikeme.com/content/uploads/2013/07/industry.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-26" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/industry-mild.mp3?_=26" /><a href="https://hearinglikeme.com/content/uploads/2013/07/industry-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/industry-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-27" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/industry-moderate.mp3?_=27" /><a href="https://hearinglikeme.com/content/uploads/2013/07/industry-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/industry-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>In traffic</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-28" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/traffic.mp3?_=28" /><a href="https://hearinglikeme.com/content/uploads/2013/07/traffic.mp3">https://hearinglikeme.com/content/uploads/2013/07/traffic.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-29" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/traffic-mild.mp3?_=29" /><a href="https://hearinglikeme.com/content/uploads/2013/07/traffic-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/traffic-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-30" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/traffic-moderate.mp3?_=30" /><a href="https://hearinglikeme.com/content/uploads/2013/07/traffic-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/traffic-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td></td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>
        <h4>Music</h4>
        </td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>Piano</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-31" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/piano.mp3?_=31" /><a href="https://hearinglikeme.com/content/uploads/2013/07/piano.mp3">https://hearinglikeme.com/content/uploads/2013/07/piano.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-32" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/piano-mild.mp3?_=32" /><a href="https://hearinglikeme.com/content/uploads/2013/07/piano-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/piano-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-33" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/piano-moderate.mp3?_=33" /><a href="https://hearinglikeme.com/content/uploads/2013/07/piano-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/piano-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Clarinette</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-34" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Clarinet.mp3?_=34" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Clarinet.mp3">https://hearinglikeme.com/content/uploads/2013/07/Clarinet.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-35" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Clarinet-mild.mp3?_=35" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Clarinet-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/Clarinet-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-36" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/Clarinet-moderate.mp3?_=36" /><a href="https://hearinglikeme.com/content/uploads/2013/07/Clarinet-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/Clarinet-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Classical: Beethoven</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-37" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/beethoven.mp3?_=37" /><a href="https://hearinglikeme.com/content/uploads/2013/07/beethoven.mp3">https://hearinglikeme.com/content/uploads/2013/07/beethoven.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-38" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/beethoven-mild.mp3?_=38" /><a href="https://hearinglikeme.com/content/uploads/2013/07/beethoven-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/beethoven-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-39" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/beethoven-moderate.mp3?_=39" /><a href="https://hearinglikeme.com/content/uploads/2013/07/beethoven-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/beethoven-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Children singing</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-40" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/kids.mp3?_=40" /><a href="https://hearinglikeme.com/content/uploads/2013/07/kids.mp3">https://hearinglikeme.com/content/uploads/2013/07/kids.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-41" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/kids-mild.mp3?_=41" /><a href="https://hearinglikeme.com/content/uploads/2013/07/kids-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/kids-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-42" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/kids-moderate.mp3?_=42" /><a href="https://hearinglikeme.com/content/uploads/2013/07/kids-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/kids-moderate.mp3</a></audio></td>
        </tr>
        <tr>
        <td>Pop</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-43" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/popmusic.mp3?_=43" /><a href="https://hearinglikeme.com/content/uploads/2013/07/popmusic.mp3">https://hearinglikeme.com/content/uploads/2013/07/popmusic.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-44" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/popmusic-mild.mp3?_=44" /><a href="https://hearinglikeme.com/content/uploads/2013/07/popmusic-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/popmusic-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-45" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://www.hearinglikeme.com/content/uploads/2013/07/popmusic-severe.mp3?_=45" /><a href="https://www.hearinglikeme.com/content/uploads/2013/07/popmusic-severe.mp3">https://www.hearinglikeme.com/content/uploads/2013/07/popmusic-severe.mp3</a></audio></td>
        </tr>
        <tr>
        <td></td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>
        <h4>Background Noise</h4>
        </td>
        <td style="text-align: center; background-color: #f2f2f2;"></td>
        <td style="text-align: center; background-color: #c2c2c2;"></td>
        <td style="text-align: center; background-color: #f5f6f6;"></td>
        </tr>
        <tr>
        <td>Telephone</td>
        <td style="text-align: center; background-color: #f2f2f2;"><audio id="audio-407-46" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/telephon.mp3?_=46" /><a href="https://hearinglikeme.com/content/uploads/2013/07/telephon.mp3">https://hearinglikeme.com/content/uploads/2013/07/telephon.mp3</a></audio></td>
        <td style="text-align: center; background-color: #c2c2c2;"><audio id="audio-407-47" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/telephon-mild.mp3?_=47" /><a href="https://hearinglikeme.com/content/uploads/2013/07/telephon-mild.mp3">https://hearinglikeme.com/content/uploads/2013/07/telephon-mild.mp3</a></audio></td>
        <td style="text-align: center; background-color: #f5f6f6;"><audio id="audio-407-48" class="wp-audio-shortcode" style="width: 100%;" preload="none" controls="controls"><source type="audio/mpeg" src="https://hearinglikeme.com/content/uploads/2013/07/telephon-moderate.mp3?_=48" /><a href="https://hearinglikeme.com/content/uploads/2013/07/telephon-moderate.mp3">https://hearinglikeme.com/content/uploads/2013/07/telephon-moderate.mp3</a></audio></td>
        </tr>
        </tbody>
        </table>
        <h3></h3>
        <h3>About the Hearing Loss Simulator</h3>
        Which sounds, and how much of each sound a person with hearing loss misses, depends on the degree of loss. For the person who still has some hearing and is listening to speech, the missing sounds are often the consonants P, K, F, H, T, and S, and the Sh sounds. Higher voices and higher-pitched sounds are harder to hear, as well, and it’s more difficult to hear anything when there’s background noise involved. So, unlike the blindfold experiment, wearing earplugs or noise-cancelling headphones isn’t a good way for a hearing person to experience hearing loss.

        If you have hearing loss, consider sharing this this page to your friends and family. It may finally show them why you need them to look at you the next time they’re asking “SO HOW ARE YOU?” at a busy restaurant.

    </main>
</section>

<?php get_footer(); ?>
