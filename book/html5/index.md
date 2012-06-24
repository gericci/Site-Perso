##Sommaire

* ####[Introduction](#introduction)
* ####[Les Polyfills](#polyfills)
* ####[Les Nouvelles Fonctionnalités](#fonctionnalites)
  [WebForms](webforms)
  [WebStorage](webstorage)
  [Offline API](offlineapi)
  [Geolocalisation](geolocalisation)
  [WebSockets](websockets)
  [WebMessaging](webmessaging)
  [History API](historyapi)
  [WebAudio](webaudio)
  [FullScrean API](fullscreanapi)
  [WebSQL](websql)
  [File API](fileapi)
* ####[Quelques Outils](#outils)
  [HTML5Shiv](html5shiv)
  [Modernizr](modernizr)
[HTML5 Boilerplate](html5boilerplate)
* ####[Quelques Liens](#liens)


## <a name="introduction">Introduction</a>

## <a name="polyfills">Les Polyfills</a>
Vous vous doutez sûrement que le HTML5 n'est pas fonctionnel sur tous les navigateurs. En effet, il est beaucoup plus facile de développer une application avec ses nouvelles technologies pour les tous nouveaux navigateurs.

Cependant, il existe des solutions. En effet, au fur et à mesure du deploiement du HTML5, la communauté du WEB développe des mécanismes permettant de bénéficier de toutes ses nouvelles fonctionnalités sur les anciens navigateurs. Nous les nommons des **polyfills**. Le plus souvent, ceux sont des fichiers javascript à ajouter à vos pages.

Dans ce livre, je vous indiquerai également les polyfills les plus performants pour chaque fonctionnalités détaillées. A l'heure actuelle, il existe de nombreux polyfills différents, s'appliquant certaines fois à la même fonctionnalités. Si vous connaissez des polyfills plus performants, je vous invite à contribuer à ce document. 

## <a name="fonctionnalites">Les Nouvelles Fonctionnalités</a>
### <a name="webforms">WebForms</a>
### <a name="webstorage">WebStorage</a>
### <a name="offlineapi">Offline API</a>
### <a name="geolocalisation">geolocalisation</a>
### <a name="websockets">WebSockets</a>
### <a name="webmessaging">WebMessaging</a>
### <a name="historyapi">History API</a>
### <a name="webaudio">WebAudio</a>
### <a name="fullscreanapi">FullScrean API</a>
### <a name="websql">WebSQL</a>
### <a name="fileapi">File API</a>

Grâce à l'API de gestion de fichiers, il est à présent possible de manipuler des fichiers. Pour cela, nous allons utiliser
la nouvelle classe FileReader, disponible dans la nouvelle API JavaScript. Vous trouverez toutes les informations concernant cette API 
sur le <a href="http://www.w3.org/TR/FileAPI/">site du W3C</a>

Je vais à présent développer un exemple d'utilisation de cette nouvelle API. Le but de l'exemple est de pouvoir uploader
différents fichiers, et après soumission du formulaire, en récupérer leur nom et leur taille. 

Nous allons tout d'abord ajouter à notre page un formulaire, afin de transférer des fichiers. Pour cela, nous allons utiliser
l'élément input de type "file".

	<!doctype html>
	<head>
	</head>
	<body>
		<form>
			<input type="file" id="files" name="files[]" multiple />
		</form>
		<span id="span">
		</span>
	</body>
	</html>
	

Lorsque ce champs sera modifié, c'est à dire lorsque l'utilisateur à ajouter un ou plusieurs fichiers, nous allons mettre 
à jour l'élément span, avec toutes les informations des fichiers ajoutés. 

Nous allons donc ajouter un EventListener à l'élément file, afin de détecter l'évènement change. Pour cela nous allons 
utiliser la méthode addEventListener.

	<script>
	  document.getElementById('files').addEventListener('change', function(evt){
		
	  }, false);
	</script>
	
La dernière étape est donc de récupérer les fichiers chargés, et de lire ces différentes propriétés. 		
L'objet files correspond à un objet de type <a href="http://www.w3.org/TR/FileAPI/#dfn-filelist">FileList</a>, contenant des objet de type <a href="http://www.w3.org/TR/FileAPI/#file">File</a>. Lorsque nous avons récupérer cette liste de fichiers, il 
suffit donc de la parcourir, et de lire les paramètres name et size de l'objet File. 

	<script>
	  document.getElementById('files').addEventListener('change', function(evt){
		var files = evt.target.files;
		var html = [];

		html.push("<p>", "New Uploaded Files :", "</p>");
		for (var i = 0, f; f = files[i]; i++) {
			html.push('<li>', files[i].name,', size :',files[i].size,' bytes</li>');
		}
		document.getElementById('span').innerHTML=html.join('');
	  }, false);
	</script>
	
Voici le code complet : 

	<!doctype html>
	<head>
	</head>
	<body>
		<form>
			<input type="file" id="files" name="files[]" multiple />
		</form>
		<span id="span">
		</span>

		<script>
		  document.getElementById('files').addEventListener('change', function(evt){
			var files = evt.target.files;
			var html = [];

			html.push("<p>", "New Uploaded Files :", "</p>");
			for (var i = 0, f; f = files[i]; i++) {
				html.push('<li>', files[i].name,', size :',files[i].size,' bytes</li>');
			}
			document.getElementById('span').innerHTML=html.join('');
		  }, false);
		</script>
	</body>
	</html>

## <a name="outils"> Quelques Outils</a>

### <a name="html5shiv">HTML5Shiv</a>

### <a name="modernizr">Modernizr</a>

### <a name="html5boilerplate">HTML5 Boilerplate</a>

## <a name="liens">Quelques Liens</a>
