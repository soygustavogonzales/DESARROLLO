<?php 
			
			include('simple_html_dom.php');
			$html = new simple_html_dom();
			$texto='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptatem aperiam quam repellat eos asperiores!';
			$html->load_file('domHTML.html');
			//$html = file_get_html('www.viunex.com');

			// Find all <div> which attribute id=cajita
 			$element = $html->find('div');
			# modify it
			$element[0]->innertext = "opopop";
			# output it!
			echo $html->save()

?>