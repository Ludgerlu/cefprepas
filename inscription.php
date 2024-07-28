<?php include("share/header.php")?>



 <div id="main">
    <div class="entry-header clearfix" style="background-color: #ffffff; background-image: url(../wp-content/uploads/2021/12/iStock-622184024-1-1-1-scaled-e1639002171224.jpg); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title">
                    <h1>INSCRIPTIONS A CEFPREPAS</h1>
                </div>
            </div>
            <div class="entry-title-right"></div>
            <style type="text/css">
                .entry-header {
                    position: relative;
                }
                .entry-header:before {
                    content: "";
                    display: block;
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    background: rgba(16, 58, 110, 0.5);
                }
            </style>
        </div>
    </div>
    <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 7.3.0 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to Ingenieurs2000.com." href="/index.php" class="home"><span property="name">Accueil</span></a><meta property="position" content="1" />
                    </span>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item">INSCRIPTIONS</span><meta property="url" content="https://www.ingenieurs2000.com/admissions/" /><meta property="position" content="2" />
                    </span>
                </div>
            </div>
        </div>
    </div>

     <!--Start Contact Page-->
     <section class="contact-page">
            <div class="auto-container">
                <div class="row">
                   
                    <div class="col-xl-12 col-lg-12">
                        <!--End Contact Page Content-->
                     <div id="MainContent_ContactForm">
	
                    <!--Start Contact Page Form-->

                        <div class="contact-page__form">
                            <div class="add-comment-box">
                                <div class="inner-title align-content-center">
                                    <h2>INSCRIVEZ-VOUS MAINTENANT</h2>
                                </div>
                                 <div id="MainContent_feedbackPanel" class="alert">
		
                                     <span id="MainContent_feedbackMsgLbl"></span>
                                 
	                            </div>
                                <form method="post" id="registrationFormular">
                                    <div class="row">
                                        <input type="hidden" name="form" value="newAccount">
                                        <div class="form-group mb-5 col-xs-12 col-sm-6 col-md-6">
                                            <label>Nom et Prenom *</label>
                                            <input type="text" class="form-control" name="first_name" id="firs_name" required>
                                        </div>
                                        <div class="form-group  mb-5 col-xs-12 col-sm-6 col-md-6">
                                            <label>Adresse email *</label>
                                            <input type="email" class="form-control" name="newemail" id="newemail" required>
                                        </div>
                                        <div class="form-group mb-5 col-xs-12 col-sm-6 col-md-6">
                                            <label>Numéro de Téléphone </label>
                                            <input type="number" class="form-control" name="telephone" id="telephone" required>
                                        </div>
                                        <div class="form-group mb-5 col-xs-12 col-sm-6 col-md-6">
                                            <label>Votre Programme de Formation *</label>
                                            <select class="form-control" name="filiere" id="filiere">
                                                <option value="">CHOISIR</option>
                                                <option value="Formation Complète et Intégrée">Formation Complète et Intégrée</option>
                                                <option value="Formations Continues à la Carte">Formations Continues à la Carte</option>
                                                <option value="Formations Accélérées">Formations Accélérées</option>
                                                <option value="Formations Spéciales sur Commande">Formations Spéciales sur Commande</option>
                                                <option value="Formations en Ligne">Formations en Ligne</option>

                                            </select>
                                        </div>
                                        <div class="form-group mb-5 col-xs-12 col-sm-6 col-md-6">
                                            <label>Sexe *</label>
                                            <select class="form-control" name="sexe" id="sexe">
                                                <option value="">CHOISIR</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Feminin">Feminin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">

                                    </div>
                                    <strong><input id="input_control" name="input_control" value="S'inscrire" type="button" class="btn btn-success" onclick="enregistrer_js();" /></strong>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Form-->
                   
                    </div>
                </div>
            </div> 
    </section>
        <!--End Contact Page-->

</div>
</div> 
<script>
    function enregistrer_js(){	
	var form = document.forms.namedItem("registrationFormular");			
	var oData = new FormData(form);	
	oData.append("type", "registrationForm"); 
	$.ajax({
		url: "actions/add.php",
		type: "POST",
		data: oData,
		processData: false,  
		contentType: false,
		success: function(data){
            console.log(data)

            alert('Merci pour votre message');
			reinitialiser_formulaire_js();
		},
		error: function(xhr, status, error) {
            alert('Une error s\'est produite');
			notification_error_ajax_js(xhr, status, error);
		}
	});
	
}

function reinitialiser_formulaire_js(){	
	document.getElementById("registrationFormular").reset();
}

</script>
<?php include("share/footer.php")?>
