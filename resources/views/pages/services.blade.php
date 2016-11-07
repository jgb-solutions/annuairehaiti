@extends('pages.page-full')

@section('title')
	Nos Services
@stop

@section('page-full')

	<div class="col-sm-12">
        <h2 class="text-center">
            Nous offrons aussi des Services Professionels
        </h2>
        <hr>
    </div>
    <div class="col-sm-7">
        <h3 class="noMarginTop">Création de site web</h3>
        <p>Avez-vous besoin d&#8217;un joli site web fonctionnel pour présenter votre entreprise, vendre un produit, ou assurer votre présence en ligne? N&#8217;allez pas chercher plus loin. Nous pouvons vous aider à avoir le site que vous rêvez avec les fonctionanlités souhaitées. Que ce soit un site vitrine simple ou un site dynamique complexe e-commerce, blog, ou autres, nous avons quelque chose d&#8217;intéressant pour vous. Ne nous croyez surtout pas sur parole. Le site que vous lisez en ce moment, nous l&#8217;avons construit. Et plusieurs d&#8217;autres encore. Visitez notre <a href="http://jgbnd.com/#portfolio" target="_blank">portfolio</a> pour voir un peu plus.</p>
        <p>Laissez-nous vous aider à avoir cette présence que vous souhaitez tant en ligne. C&#8217;est notre boulot.</p>
        <p>Utilisez la forme sur cette page pour nous contacter ou pour plus détails. Nous aimerions travailler avec vous.</p>
        <hr />
        <h3>Indentité Visuelle</h3>
        <p>Toute entreprise/entité qui se respecte s&#8217;inquiète pour son apparence. Votre logo, votre marque, vos brochures&#8230; définissent à un certain niveau la qualité du service que vous offrez. Autant s&#8217;assurer d&#8217;avoir le client à première vue, car la première impression définit souvent la prochaine action: vouloir en savoir plus sur votre service ou partir. Entre nous, vous ne voulez sûrement pas perdre ce client si important, n&#8217;est-ce pas? Heureusement nous pouvons vous aider à avoir l&#8217;identité visuelle dont vous avez besoin pour séduire le plus grand nombre de clients possibles et aussi vous établir sur le marché professionnel.</p>
        <p>Utilisez la forme sur cette page pour nous contacter ou pour plus détails. Nous aimerions travailler avec vous.</p>
        <hr />
        <h3>Création d&#8217;application mobile</h3>
        <p>Ce ne serait pas exagérer de suggérer que la technologie est presque indispensable dans nos vies quotidiennes à présent. Nous faisons beaucoup de choses en ligne: transaction, recherche, rester en contact, prendre soin de nos affaires&#8230; tout ça sans laisser le confort de notre ordinateur ou téléphone. Pour la plupart de ces activités, l&#8217;utilisation d&#8217;un appareil mobile est grande, très grande même. Des statistiques récentes montrent que beaucoup plus de gens surfent sur internet avec leurs téléphones/tablettes que sur ordinateurs. Cela implique qu&#8217;une entreprise ne doit pas négliger l’accessibilité de ses services sur mobile. Toutes entreprises sérieuses veilleront que leur site web soit accessible sur mobile/tablette. Ou encore mieux pour celles qui veulent plus de confort voudront une application mobile dédiée à présenter leurs services et la facilité d&#8217;utilisation de ces derniers. Nous pouvons vous aider. Que ce soit une application web mobile accessible à travers le web ou une application native que vos utilisateurs pourront installer sur leur appareil mobile Android ou iOS.</p>
        <p>Utilisez la forme sur cette page pour nous contacter ou pour plus détails. Nous aimerions travailler avec vous.</p>
        <hr />
        <h3>Promotion pour votre entreprise</h3>
        <p>À quoi ça d&#8217;offrir des services de qualité s&#8217;ils ne sont pas connus du grand public, d&#8217;ailleurs c&#8217;est quand même pour eux que vous êtes donné tout ce mal. Non? Vous avez vu qu&#8217;ils en avaient besoin et vous vous êtes débrouillés pour leur en offrir. C&#8217;est bon jusque là. Il est temps maintenant de faire connaître la chose. Et nous sommes là pour vous. Nous pouvons écrire au sujet de votre entreprise en général et tous les services que vous offrez dans leurs moindres détails. Qui plus est, nous assurons la promotion sur tous les réseaux sociaux, incluant l&#8217;option de promotion payant de Facebook pour toucher plus de mondes et les faire connaître ce que vous faites. Plus de mondes connaissant votre entreprise et ses multiples services, c&#8217;est plus de clients potentiels pour vous.</p>
        <p>Utilisez la forme sur cette page pour nous contacter ou pour plus détails. Nous aimerions travailler avec vous.</p>
        <hr />
        <h3 class="noMarginTop"></h3>
        <h3 class="noMarginTop">Gestion de comptes sociaux et de site web</h3>
        <p>Gestion d&#8217;entreprises, clientèles, comptes sociaux, site web et tout le tralala qui vient avec, c&#8217;est peut-être trop pour vous. Et nous comprenons. Parfois c&#8217;est trop. C&#8217;est dans cette optique que nous vous offrons de faire ce que vous ne voulez pas ou n&#8217;avez pas le temps de faire à votre place. Nous sommes une équipe de professionnels qui savons et aimons ce que nous faisons. Ne vous prenez pas la tête pour ce mis-à-jour que vous voulez faire de temps à autre sur votre Twitter/Facebook/Instagram/Site web. Laissez-nous le faire à votre place. C&#8217;est aussi notre boulot.</p>
        <p>Utilisez la forme sur cette page pour nous contacter ou pour plus détails. Nous aimerions travailler avec vous.</p>
    </div>

    <div class="col-sm-5">
        <hr class="visible-xs">
        <form method="post" id="jqueryForm">
          <div class="form-group">
            <label for="name">Votre Nom ou celui de votre entreprise</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nom complet ou celui de votre entreprise">
                <span class="text-danger error">S'il vous plaît entrez votre nom ou celui de votre entreprise</span>
          </div>
          <div class="form-group">
            <label for="email">Votre E-mail ou celui de votre entreprise</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Votre email ou celui de votre entreprise" >
                <span class="text-danger error">S'il vous plaît entrez votre e-mail ou celui de votre entreprise</span>
          </div>
          <div class="form-group">
            <label for="subject">Type de Services</label>
                <select name="subject" class="form-control" id="subject">
                    <option value="">Choisissez un service...</option>
                    <option value="Création de site web">Création de site web</option>
                    <option value="Communication Visuelle">Communication Visuelle</option>
                    <option value="Création Appli Mobile">Création d'application Mobile</option>
                    <option value="Promotion">Promotion pour votre entreprise</option>
                    <option value="Gestion Comptes Sociaux/Site web">Gestion de comptes sociaux et de site web</option>
                    <option value="Autre">Autre service (non listé)</option>
                </select>
                <span class="text-danger error">S'il vous plaît choisissez un type de services</span>
          </div>
          <div class="form-group">
            <label for="message">Informations additionnelles</label>
                <textarea name="message" id="message" class="form-control"  placeholder="Ecrivez vos informations additionnelles ici"></textarea>
                <span class="text-danger error">S'il vous plaît rentrez vos informations additionnelles</span>
          </div>
          <div class="form-group">
                <button name="submit" type="submit" class="btn btn-yellow"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
          </div>
        </form>
        <div id="results"></div>
        <hr>
        <address>
            Port-au-Prince, Haiti<br>
            <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br/>
            </address>
            <address>
            <strong>L'équipe AH</strong><br>
            <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
        </address>
    </div>

@stop