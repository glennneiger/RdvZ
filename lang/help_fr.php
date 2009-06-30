<?php include('../includes/config.inc.php'); ?>

<htmL>
<head>
<title> Aide RDVZ </title>

<link rel="stylesheet" type="text/css" href="../templates/<?php echo TEMPLATE_NAME; ?>/style.css" />
</head>

<body>
<h1>RDVZ 1.03</h1>
 <h1>Documentation utilisateur</h1>

<p>RDVZ est une application PHP/MySQL permettant l'organisation collaborative de rendez-vous.</p> 
<p>L'organisateur du rendez-vous choisit les dates possibles, puis transmet au participant une adresse g&eacute;n&eacute;r&eacute;e par l'application.
A cette adresse, les participants peuvent choisir les dates qui leur conviennent.</p> 

<h2>Vue de l'organisateur du rendez-vous</h2>

<p>Apr&egrave;s authentification, l'organisateur du rendez-vous est dirig&eacute; vers le tableau de bord de l'application.</p>

<p>A partir de ce tableau de bord, il peut :</p>
<ul>
<li>Cr&eacute;er un nouveau rendez-vous</li>
<li>G&eacute;rer les rendez-vous existant</li>
</ul>
<h2>Cr&eacute;ation d'un nouveau rendez-vous</h2>
<p>Le bouton "Nouveau rendez-vous" permet de cr&eacute;er un nouveau rendez-vous en plusieurs &eacute;tapes.</p>
<h3>Etape 1 :description du rendez-vous, et commentaires &eacute;ventuels.</h3>

<center><a href="help/add_rdv_step1.jpg" target="blank"><img src= "help/add_rdv_step1.jpg" height=200px></a></center> 
<p>Le bouton "Afficher les options" permet d'afficher les options avanc&eacute;es, qui sont :
<ul>
<li>Autoriser le vote "Disponible en cas de besoin"</li>
<li>"Recevoir une notification par e-mail" : si le "oui" est coch&eacute;, le propri&eacute;taire du sondage re&ccedill;oit un e-mail lorsque quelqu'un vote.</li>
<li>"Entrez une liste d'adresses &agrave; qui vous souhaitez adresser ce sondage" : il est possible de renseigner des adresses e-mails de correspondants, qui seront pr&eacute;venus &agrave; la fin de la cr&eacute;ation du sondage. 
Pour ce faire, renseigner l'adresse -mail, puis cliquer sur le bouton "Ajouter". Il est possible d'en rentrer plusieurs de cette fa&ccedil;on. 
Un clic gauche sur une adresse d&eacute;j&agrave; rentr&eacute;e permet de l'&eacute;diter, un clic droit permet de la supprimer.</li>
</ul>
</p>

<h3>Etape 2 :</h3>
<p>Choix des dates : l'utilisateur choisit les dates possibles pour le rendez-vous qu'il souhaite mettre en place. Un commentaire peut &ecirc;tre entr&eacute; pour chacune de ces dates.</p>  
<center><a href="help/add_rdv_step2.jpg" target="blank"><img src= "help/add_rdv_step2.jpg" height=200px></a></center> 
<p>Une fois ces &eacute;tapes franchies, une adresse est g&eacute;n&eacute;r&eacute;e, et affich&eacute;e dans le r&eacute;capitulatif : 
Cette adresse est destin&eacute;e &agrave; &ecirc;tre transmises aux participants de la r&eacute;union par l'organisateur (par mail ou chat, par exemple) . Ces participants font alors le choix des dates qui leur conviennent.
</p>
  
<h2>Gestion des rendez-vous</h2> 
<p>Le tableau de bord regroupe les rendez-vous d&eacute;j&agrave; cr&eacute;&eacute;s par l'organisateur : 
<center><a href="help/liste_rdv.jpg" target="blank"><img src= "help/liste_rdv.jpg" height=200px></a></center> 
</p>
<p>Ce tableau de bord liste les rendez-vous d&eacute;j&agrave; configur&eacute;s par l'organisateur. Pour chaque rendez-vous est indiqu&eacute;e :
<ul>
<li>La date de fermeture automatique des votes : pass&eacute;e cette date, il ne sera pas possible de voter pour ce rendez-vous.</li> 
<li>Le titre est un lien vers l'interface de participation (voir section suivante).</li>
<li>La colonne "Action" liste les op&eacute;rations que l'utilisateur peut effectuer sur les rendez-vous, qui sont :<br>  
Modification : permet de r&eacute;organiser les rendez-vous<br> 
Export : Exporte les r&eacute;sutlats dans un fichier csv<br>
Effacer : Efface le sondage<br>
Clore/Rouvrir les votes : Lorsque l'organisateur cl&ocirc;t les votes, le sondage restedisponible, mais plus personne ne peut y voter. 
L'organisateur peut alors rouvrir les votes, jusqu'&agrave; la date de cl&ocirc;ture automatique.</li>
</ul> 

<h2>Consulter les r&eacute;sultats du sondage</h2>
<p>A l'adrese g&eacute;n&eacute;r&eacute;e par l'application se trouve la page de sondage du rendez-vous qui pr&eacute;sente  le titre et les commentaires du rendez-vous, ainsi que les dates choisies par l'organisateur.</p> 
<p>Les votes d&eacute;j&agrave; d&eacute;pos&eacute;s y sont &eacute;galement visibles, sous forme de tableau.</p>  
<center><a href="help/consult_rdv.jpg" target="blank"><img src= "help/consult_rdv.jpg" height=200px></a></center> 

<p>Chaque ligne correspond &agrave; un utilisateur, chaque colonne &agrave; une date possible. Pour chaque date possible, trois types de vote peuvent appara&icirc;tre 
 <ul>
 <li>Disponible : le participant qui a vot&eacute; est disponible sans restriction pour la date concern&eacute;e.</li> 
 <li>Disponible en cas de besoin : le participant n'est a priori pas disponible, mais pourra se lib&eacute;rer &agrave; cette date s'il n'y a pas d'autre solution.</li>
 <li>Indisponible : ne pourra en aucun cas participer &agrave; la r&eacute;union pour la date concern&eacute;e.</li>
 </ul> 
Si le participant a vot&eacute; en &eacute;tant authentifi&eacute; via CAS, le symbole  appara&icirc;t en face de son nom.</p>
 
<h2>Participer &agrave; un sondage</h2> 
<p>Le choix des  disponibilit&eacute;s par le participant  se fait sur la m&ecirc;me page</p> 
<p>Le participant doit rentrer son nom dans le champ "Votre nom" (sauf s'il est d&eacute;j&agrave; authentifi&eacute; via CAS, auquel cas son nom est automatiquement renseign&eacute;)</p> 
<p>Pour chaque date, le participant choisit sa disponibilit&eacute;, comme expliqu&eacute; ci-dessus, en cochant la case correspondante (si aucune case n'est coch&eacute;e, le choix est "indisponible" par d&eacute;faut), et valide sa participation en cochant la case "participer"</p>
<p>Un deuxi&egrave;me vote de la part du m&ecirc;me participant &eacute;crase le vote pr&eacute;c&eacute;dent. Il est &agrave; noter qu'un utilisateur non authentifi&eacute; via CAS ne pourra pas &eacute;craser le vote d'un utilisateur authentifi&eacute; via CAS, m&ecirc;me s'il renseigne un nom identique. 
</p>
</body>
</html>