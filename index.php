<?php
include('config.php');
if(!empty($_POST)) {
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("INSERT INTO Kontaktformular (name, `alter`, instrumente, musikrichtungen, disziplin, musikbegleitung, `e-mail`, telefon, kontaktzeiten, motivation, anmerkungen, woher, datenschutz) VALUES (:name, :alter, :instrumente, :musikrichtungen, :disziplin, :musikbegleitung, :email, :telefon, :kontaktzeiten, :motivation, :anmerkungen, :woher, :datenschutz)"); 
    $sth->bindParam(':name', $_POST['name']);
    $sth->bindParam(':alter', $_POST['alter']);
    $sth->bindParam(':instrumente', $_POST['instrumente']);
    $sth->bindParam(':musikrichtungen', $_POST['musikrichtungen']);
    $sth->bindParam(':disziplin', $_POST['disziplin']);
    $sth->bindParam(':musikbegleitung', $_POST['musikbegleitung']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':telefon', $_POST['telefon']);
    $sth->bindParam(':kontaktzeiten', $_POST['kontaktzeiten']);
    $sth->bindParam(':motivation', $_POST['motivation']);
    $sth->bindParam(':anmerkungen', $_POST['anmerkungen']);
    $sth->bindParam(':woher', $_POST['woher']);
    $sth->bindParam(':datenschutz', $_POST['datenschutz']);

    if(!$sth->execute()) {
      $execErr = "Fehler beim Speichern der Daten";
    }

    $sth = null;
    $dbh = null;

  } catch(PDOException $e) {
    $connErr = "keine Verbindung zur Datenbank möglich: ".$e->getMessage();
  }
//   echo "<pre>";
//   var_dump($_POST);
//   echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Fünf Minuten</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Caveat" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">Fünf Minuten</a>
            <div class="navbar-header">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#main-navbar"
                    aria-controls="main-navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item">
                        <a class="nav-link" href="/#über">
                            Über
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#anmeldung">
                            Anmeldung
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#kontakt">
                            Kontakt
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#faq">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="impressum.html">
                            Impressum
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datenschutz.html">
                            Datenschutz
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <div class="overlay"></div>
            <div class="hero-text">
                <div>
                    <h1>Fünf Minuten</h1>
                    <h4>Die kürzesten Straßenkünstler-Aktionen Deutschlands</h4>
                </div>
            </div>
            <img src="assets/header.jpg" class="img-fluid" alt="header" />
        </header>
        <main>
            <?php 
                echo $execErr; 
                echo $connErr; 
              ?>

            <section id="über">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <p>
                            <span class="font-weight-bolder">Fünf Minuten</span>, das Kulturprojekt FÜR ALLE, die Lust
                            auf’s Tanzen und Musik-Spielen haben. Wir sind da, um die Straßenkünstler-Szene in der Stadt
                            und ihrer Umgebung anzusiedeln.
                        </p>
                        <p>
                            Du wählst einen Ort aus und da treten wir maximal 5 Minuten mit Livemusik und Tanz vor einer
                            Kamera auf. Ohne ein Publikum zu erwarten, ohne Ankündigung, nur für uns.
                            <span class="font-weight-bolder"
                                >Ein Musiker*, zwei Tänzer*, eine Kamera und Chemnitz.</span
                            >
                        </p>
                        <p class="text-center">
                            <span class="font-italic"
                                >"Das Gute Gelingen ist zwar nichts Kleines, aber es fängt mit Kleinigkeiten an."</span
                            >
                            - Sokrates
                        </p>
                        <p>
                            Dadurch wollen wir auch der Welt zeigen, dass die Entscheidung in der Hand jedes Menschen
                            liegt, das Alltagsleben etwas zu verbessern und den Ort, an dem wir leben, neu zu entdecken
                            und wertzuschätzen. Und auch zeigen, wie wir wirklich sind - die Menschen, die hier leben!
                        </p>
                        <p>
                            Das Drehteam von fünf Minuten ist ab jetzt für euch bereit. Wir helfen euch, Spaß zu
                            verbreiten! :D
                        </p>
                    </div>
                </div>
            </section>
            <section id="anmeldung">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <form action="/" method="post">
                            <h2>Sag’ uns, wie wir dich in Szene setzen können</h2>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Ich heiße:</label>
                                    <input name="name" class="form-control" type="text" />
                                </div>
                                <div class="col form-group">
                                    <label>Alter:</label>
                                    <input name="alter" class="form-control" type="text" placeholder="" />
                                    <!-- <small class="form-text text-muted">
                                Geburtsdatum bei Minderjährigen, sonst reicht das Jahr
                            </small> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Ich spiele mit folgenden Instrumenten:</label>
                                    <input name="instrumente" class="form-control" type="text" />
                                </div>
                                <div class="col form-group">
                                    <label>Folgende Musikrichtungen:</label>
                                    <input name="musikrichtungen" class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <span>Ich stelle Folgendes dar:</span>
                                    <input name="disziplin" class="form-control" type="text" />
                                </div>
                                <div class="col form-group">
                                    <span>Zu folgender Musik:</span>
                                    <input name="musikbegleitung" class="form-control" type="text" />
                                </div>
                            </div>
                            <span>Wie können wir dich kontaktieren?</span>
                            <div class="form-row">
                                <div class="col form-group">
                                    <span>E-Mail:</span>
                                    <input name="email" class="form-control" type="email" />
                                </div>
                                <div class="col form-group">
                                    <span>Telefon:</span>
                                    <input name="telefon" class="form-control" type="text" />
                                </div>
                                <div class="col form-group">
                                    <span>Bevorzugte Kontaktzeiten:</span>
                                    <input name="kontaktzeiten" class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <span
                                    >Was bewegt dich, bei uns mitzumachen? Welche Wünsche erfüllt dir das Projekt?</span
                                >
                                <textarea name="motivation" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <span>Anmerkungen:</span>
                                <textarea name="anmerkungen" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <span>Wie bist du auf uns aufmerksam geworden?</span>
                                <input name="woher" type="text" class="form-control" />
                            </div>
                            <div class="form-check form-group">
                                <input class="form-check-input" name="datenschutz" type="checkbox" required="required" />
                                <label class="form-check-label">
                                    Ich akzeptiere die
                                    <a href="/datenschutz.html" target="_blank">Datenschutzerklärung</a>.
                                </label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Absenden" class="submit" />
                        </form>
                    </div>
                </div>
            </section>
            <section id="kontakt">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <p>
                            Hast du Fragen, Anregungen, Kritik, Lob, Vorschläge, eine Socke verloren oder Lust, mit
                            jemandem zu lachen? Melde dich bei uns und mach’ dir keinen Kopf über die Formulierung der
                            E-Mail, wir freuen uns auch über ein einfaches “Hallo” :D
                        </p>
                        <p class="text-center"><a href="mailto:info@fuenfminuten.eu">info@fuenfminuten.eu</a></p>
                        <p>
                            Das 5min-Team wünscht euch einen harmonischen Tag. :)
                        </p>
                        <p>
                            Dieses Projekt wird gefördert von der Stadt Chemnitz.
                        </p>
                    </div>
                </div>
            </section>
            <section id="faq">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <h4>Darf ich auch teilnehmen, wenn ich kein Chemnitzer bin?</h4>
                        <p>
                            Das ist ein Projekt für alle, die Lust auf’s Tanzen und Musizieren haben. Teilnehmen dürfen
                            alle Menschen, die sich im Raum Chemnitz** bewegen. Du musst kein Chemnitzer sein, um mit
                            uns zusammen Spaß zu verbreiten! ;)
                        </p>
                        <h4>Muss ich nach Chemnitz kommen, um aufzutreten?</h4>
                        <p>
                            Nicht unbedingt. Folgende Kooperationsstädte sind auch dabei. Teile uns deinen gewünschten
                            Ort in einer dieser Städte mit und wir helfen dir, dort deinen Auftritt zu machen:
                        </p>
                        <p>
                            **Amtsberg, Annaberg-Buchholz, Aue, Augustusburg, Burgstädt, Burkhardtsdorf, Flöha,
                            Frankenberg, Hainichen, Jahnsdorf/Erzgebirge, Lichtenau, Limbach-Oberfrohna, Lößnitz,
                            Mittweida, Neukirchen/Erzgebirge, Niederdorf, Niederwiesa, Niederwürschnitz, Oelsnitz,
                            Olbernhau, Pockau-Lengefeld, Stollberg/Erzgebirge, Thalheim/Erzgebirge, Zwönitz
                        </p>
                        <!-- <p>
                            * Mit allen Personenbeschreibungen sprechen wir jedes Geschlecht an, verwenden in Texten
                            aber die jeweils kürzeste Variante.
                        </p> -->
                    </div>
                </div>
            </section>
        </main>
        <footer class="py-4 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">&copy; Fünf Minuten 2019</p>
            </div>
        </footer>
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </body>
</html>