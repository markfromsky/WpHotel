<?php 
	get_header();
	if(have_posts()){
			the_post();
 ?>
 <article class = 'mainpagearticle'>
 	<?php echo do_shortcode('[metaslider id="5"]') ?>
 
<h2 class= 'title'>PANDOK YEREVAN</h2>
<br>
<p>
One of the best places to enjoy Armenian traditional meals. Pandok Yerevan or Yerevan Tavern is popular both among the local people and also other visitors who are a fan of national food. Here you will find pure Armenian and the best Caucasian dishes. The menu includes a lot of delicious foods, for instance, khorovats.
<br>
Furthermore, Armenian music will also accompany you. This will definitely make your traditional dining experience better and fuller!
<br>
There are four branches of this restaurant
<br>
91 Teryan Street        + 374-10-508-800, + 374-10-508-800
5 Amiryan Street            + 374-10-545-545, + 374-10-545-545
7 Paronyan Street          + 374-10-530-563, + 374-10-530-563
29/2 Khorenatsi Street + 374-10-582-512, + 374-10-562-512
</p>
<h2 class = 'title'>URARTU</h2>
<p>
The nice atmosphere and delicious traditional cuisine are what made Urartu a popular place for Armenians, and also foreigners. Armenian and European cuisine, pleasant atmosphere, live music, high-quality service, private rooms… what not! You can also go to the summer hall.Find Urartu Restaurant in Yerevan:
<br>
Dzorap str., 1/1 Building (Kentron administrative district). + 374-10-538-041, + 374-10-538-106.
 	</p>
 </article>
 <?php 
 }

 else{
 	echo "<p>no content found </p>";
 } 
 ?>
 <?php get_footer() ?>