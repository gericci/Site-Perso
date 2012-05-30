<?php
$page=2;
$title = "Emmanuel DEMEY - Contactez moi !!";
include "header.php";
?>

	
	<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- content -->
					<div id="content">
						
						<!-- title -->
						<div id="page-title">
							<span class="title">Contactez moi !</span>
						</div>
						<!-- ENDS title -->
							
						<!-- column (left)-->
						<div class="one-column">
							<!-- form -->
							<script type="text/javascript" src="js/form-validation.js"></script>
							<form id="contactForm" action="#" method="post">
								<fieldset>
									<div>
										<label>Nom</label>
										<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
									</div>
									<div>
										<label>Email</label>
										<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
									</div>
									<div>
										<label>Site Internet</label>
										<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
									</div>
									<div>
										<label>Commentaires</label>
										<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
									</div>
									
									<!-- send mail configuration -->
									<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
									<!-- ENDS send mail configuration -->
									
									<p><input type="button" value="SEND" name="submit" id="submit" /></p>
								</fieldset>
								<p id="error" class="warning">Message</p>
							</form>
							<p id="success" class="success">Merci pour votre message</p>
							<!-- ENDS form -->
						</div>
						<!-- ENDS column -->
						
						<!-- column (right)-->
						<div class="one-column">
						
						
						
						</div>
						<!-- ENDS column -->							
		
					</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			<?php
			include "footer.php";
			?>
</html>