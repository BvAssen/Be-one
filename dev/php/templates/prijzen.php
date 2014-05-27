<?php
/*
Template Name: Prijzen template
*/
?>
<?php get_header(); ?>

	

 
	<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class=".u-gridColumn10">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div>
						<table class="Table">
								<tr>
									<td style="text-align: center;"><strong>Reguliere opleiding praktijk</strong></td>
									<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
								</tr>
								<tr>
									<td>Losse les van 60 min.</td>
									<td>€ 32.50</td>
								</tr>
								<tr>
									<td>Losse les van 60 min.</td>
									<td>€ 48.50</td>
								</tr>
								<tr>
									<td>Losse les 120 min.</td>
									<td>€ 60</td>
								</tr>
								<tr>
									<td>Kennismakingsles van 90 min.</td>
									<td>€ 40</td>
								</tr>
								<tr>
									<td>Praktijkexamen</td>
									<td>€ 200</td>
								</tr>
								<tr>
									<td>Eigen verklaring</td>
									<td>€ 25</td>
								</tr>
								<tr>
									<td>Tussentijdse toets</td>
									<td>€125</td>
								</tr>

						</table>

						<tr>
							<table class="Table">
				<tr>
									<td style="text-align: center;"><strong>Theorie</strong></td>
									<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
								</tr>
								<tr>
									<td>Theorie leerboek</td>
									<td>€ 25</td>
								</tr>
								<tr>
									<td>Theorie oefen cd</td>
									<td>€ 15</td>
								</tr>
								<tr>
									<td>Theorie examen</td>
									<td>€ 40</td>
								</tr>
						</table>

	<!-- <table class="Table">
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h1><strong>Aanhanger</strong></h1>
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanhanger.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Losse les</td>
				<td>€57,-</td>
			</tr>
			<tr>
				<td colspan="2">C.B.R. praktijkexamen incl. administratiekosten + eigen verklaring C.B.R.</td>
				<td>€250,-</td>
			</tr>
			<tr>
				<td colspan="2">Dagopleiding</td>
				<td>€529,-</td>
			</tr>
	</table>

	<table class="Table">
		
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h1><strong>Bromfiets</strong></h1>
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brommer.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Theorieboek</td>
				<td>€20,-</td>
			</tr>
			<tr>
				<td colspan="2">Vragenboek</td>
				<td>€20,-</td>
			</tr>
			<tr>
				<td colspan="2">C.D.</td>
				<td>€20,-</td>
			</tr>
	</table>

		<table class="Table">
		
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h1><strong>Caravan</strong></h1>
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/caravan.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong><br></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Training incl. boek "Veilig op weg"<br></td>
				<td>€130,-</td>
			</tr>
		</tbody>
	</table>
	<table class="Table">
		
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h1><strong>Examen machtiging<br></strong></h1>
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cbr.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong><br></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Wie praktijkexamen voor de categorie B&nbsp; (personenauto) wil aanvragen bij Rijschool Compleet, moet eerst de rijschool machtiging geven om dit examen aan te vragen en te reserveren. Het inschrijfnummer van Rijschool Compleet is 5248A1.<br></td>
				<td><a class="Table-link" href="https://mijn.cbr.nl/" target="_blank">Link naar CBR</a><br></td>
			</tr>
		</tbody>
	</table>
	<p><br>** Zie voorwaarden op deze website; te weten artikel 3-betaling, regel 10 en 11.</p>
	<p>** Startpakket is eenmalig. Alle lessen hebben een duur van 60 minuten.</p>
	<p>** Prijswijziging en druk- en typefouten voorbehouden.</p>

						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>   
 -->
<!-- 			<div class="Usp u-gridColumn4 ">
				<p>Nog even de voordelen op een rijtje:</p>
				<ul class="Usp-list">
					<li class="icon check"> Hoog slagingspercentage (81%-85 %)</li>
					<li class="icon check"> Hoge mate van kwaliteit</li>
					<li class="icon check"> Maatwerk</li>
					<li class="icon check"> Inzicht in de vorderingen</li>
					<p class="Usp-text">van de cursist</p>
					<li class="icon check"> Goede prijs-kwaliteitsverhouding</li>
					<li class="icon check"> Cursisten krijgen het praktijkboek </li>
					<p class="Usp-text">'Rijopleiding In Stappen'</p>
					<li class="icon check"> Een goede service</li>
				</ul>
			</div> -->

		</div>
	</div>
<!-- 
	<div class="Review">
		<div class="u-gridContainer">
			<h2 class="Review-heading u-sectionHeadingWhite">Recensies</h2>
			<div class="u-gridRow">
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
			</div>
		</div>
	</div> -->




<?php get_footer(); ?>
