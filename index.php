<?php
include('config.php');
if(!empty($_POST)) {
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("INSERT INTO Kontaktformular (name, `alter`, instrumente, musikrichtungen, disziplin, musikbegleitung, dateiname, `e-mail`, telefon, kontaktzeiten, motivation, anmerkungen, woher, datenschutz) VALUES (:name, :alter, :instrumente, :musikrichtungen, :disziplin, :musikbegleitung, :dateiname, :email, :telefon, :kontaktzeiten, :motivation, :anmerkungen, :woher, :datenschutz)");
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
    $sth->bindParam(':dateiname', $_POST['dateiname']);

    if(!$sth->execute()) {
      $execErr = "Fehler beim Speichern der Daten";
    } else {
        $success = true;
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
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/"
                ><img src="assets/logo.png" alt="logo" class="logo" /><span class="logo-text">Fünf Minuten</span></a
            >
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
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix" id="navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="#ueber">
                            Über
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#anmeldung">
                            Anmeldung
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt">
                            Kontakt
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="impressum.html">
                            Impressum & Datenschutz
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <header id="start">
            <div class="overlay"></div>
            <div class="hero-text"></div>
            <div id="hero"></div>
        </header>
        <main class="landing">
            <section id="ueber">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <p>
                            <span class="font-weight-bolder">Fünf Minuten</span>, das Kulturprojekt FÜR ALLE, die Lust
                            haben, ihre Freude am Tanzen und Musizieren zu zeigen.

                            Unser Ziel ist es, die Straßenkünstlerszene in Chemnitz* anzusiedeln!
                        </p>
                        <h2>Das Konzept</h2>
                        <p>
                            <span class="font-weight-bolder">Ein Musiker**, zwei Tänzer**, eine Kamera und Chemnitz.</span>
                            Wir schaffen dir 5 Minuten Raum für <span class="font-weight-bolder">deinen freien Auftritt</span>
                            mit Livemusik*** und Tanz vor einer Kamera. Eine Aufzeichnung, ohne Publikum zu erwarten,
                            ohne Ankündigung. Wir überraschen Chemnitz!

                            Im nächsten Schritt präsentieren wir dein Video im Rahmen des “fünf-Minuten-Filmfestivals”, um
                            die Stadt aus einer anderen Perspektive zu zeigen. Wir wollen damit die Straßenkunst für alle
                            zugänglich machen und den Alltag und die schönen Ecken von Chemnitz mit Emotionen, Kunst und
                            Lebenskultur harmonisieren. Dabei trägst du deinen bunten Beitrag zur Bewerbung zur Kulturhauptstadt
                            Europas 2025!
                        </p>
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">
                                "Das Gute Gelingen ist zwar nichts Kleines, aber es fängt mit Kleinigkeiten an."
                            </p>
                            <footer class="blockquote-footer">
                                <cite title="Source Title">Sokrates</cite>
                            </footer>
                        </blockquote>
                        <h2>Deine Teilnahme</h2>
                        <p>
                          Kurz zusammengefasst: im öffentlichen Raum auftreten, ein Video im Querformat davon (Dauer max. 5 min)
                          aufnehmen und es uns zukommen lassen (trage dich <a href="https://fuenfminuten.eu/#anmeldung">hier</a> ein und lade das Video hoch). Es gibt zwei Varianten
                          für die Teilnahme:

                          <li>Variante A „das selbstständige Ensemble“: Die Künstlergruppe für das „fünf-Minuten-Video“ (also
                            Musiker und Tänzer) ist von euch selbst schon gebildet.</li>
                          <li>Variante B „die Künstler-Börse“: Ihr wollt performen, euch fehlt aber der passende Tänzer oder Musiker?
                            Dann tragt euch in unsere Künstler-Börse ein (siehe Künstleranmeldung) und das Team von „fünf Minuten“
                            wird euch euer gewünschtes Ensemble und einen Auftrittsort mitteilen.</li>

                          Brauchst du Unterstützung, z. B. bei der Aufnahme oder Zusendung des Videos, setze dich mit uns in <a href="https://fuenfminuten.eu/#kontakt">Kontakt</a>. ;)
                          Wir sind auch in der Lage, einen Termin für den Dreh mitzuorganisieren.
                        </p>
                        <h2>Unser Auftrag</h2>
                        <p>
                          Wir wollen der Welt zeigen, dass wir mit wenig Zeit unseren Alltag selbst in die Hand nehmen und ihn jeden
                          Tag bunter gestalten können. Wir können die Orte, an denen wir leben, wieder neu entdecken und wertschätzen
                          lernen!

                          Fünf Minuten... die zeigen, wer wir wirklich sind und sein können!

                          Das Team von fünf Minuten ist ab jetzt für euch bereit. Wir helfen euch, Spaß zu verbreiten! :D
                        </p>
                        <p class="small">
                          *Kooperations-Ortschaften, die sich am Chemnitzer Modell und somit auch an diesem Projekt beteiligen:
                          Amtsberg, Annaberg-Buchholz, Aue, Augustusburg, Burgstädt, Burkhardtsdorf, Flöha, Frankenberg, Hainichen,
                          Jahnsdorf/Erzgebirge, Lichtenau, Limbach-Oberfrohna, Lößnitz, Mittweida, Neukirchen/Erzgebirge, Niederdorf,
                          Niederwiesa, Niederwürschnitz, Oelsnitz, Olbernhau, Pockau-Lengefeld, Stollberg/Erzgebirge, Thalheim/Erzgebirge,
                          Zwönitz

                          **Mit allen Personenbeschreibungen sprechen wir jedes Geschlecht an, verwenden in Texten aber die jeweils kürzeste
                          Variante. Unter Musik und Tanz werden Performer der auditiven bzw. der Bewegungskünste verstanden. Eine genauere
                          Trennung der Darstellungsformen muss nicht erfolgen, zu beachten ist nur, dass Darstellende Künste in der Performance
                          zu hören und zu sehen sind.

                          ***Improvisiertes Musikstück, ein Public-Domain-Lied, bzw. befreit von GEMA-Gebühren
                        </p>
                        <div class="social-icons">
                            <a
                                href="https://www.facebook.com/fuenfminuteneu"
                                target="_blank"
                                class="fa fa-facebook mr-3"
                            ></a>
                            <a
                                href="https://www.instagram.com/fuenfminuteneu/"
                                target="_blank"
                                class="fa fa-instagram mr-3"
                            ></a>
                            <a href="https://twitter.com/fuenfminuteneu" target="_blank" class="fa fa-twitter mr-3"></a>
                            <a
                                href="https://www.youtube.com/channel/UC-PGCE6J0Uy8f97_ZcBWKRg"
                                target="_blank"
                                class="fa fa-youtube"
                            ></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="anmeldung">
                <div class="container">
                    <?php
                        if ($success) {
                            echo "<div class='alert alert-success col-lg-8 mx-auto' role='alert'>Daten erfolgreich übermittelt</div>";
                        } else if (isset($execErr)) {
                            echo "<div class='alert alert-danger col-lg-8 mx-auto' role='alert'>$execErr</div>";
                        } else if (isset($connErr)) {
                            echo "<div class='alert alert-danger col-lg-8 mx-auto' role='alert'>$connErr</div>";
                        }
                    ?>
                    <div class="col-lg-8 mx-auto">
                        <form action="/#anmeldung" method="post">
                            <h2>Sag’ uns, wie wir dich in Szene setzen können</h2>
                            <div class="row form-row">
                                <div class="col-sm form-group">
                                    <label>Name:</label>
                                    <input name="name" class="form-control" type="text" placeholder="Name" />
                                </div>
                                <div class="col-sm form-group">
                                    <label>Alter:</label>
                                    <input name="alter" class="form-control" type="text" placeholder="Alter" />
                                    <!-- <small class="form-text text-muted">
                                Geburtsdatum bei Minderjährigen, sonst reicht das Jahr
                            </small> -->
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-sm form-group">
                                    <label>Ich spiele mit folgenden Instrumenten:</label>
                                    <input
                                        name="instrumente"
                                        class="form-control"
                                        type="text"
                                        placeholder="Akkordeon, Mundharmonika, .."
                                    />
                                </div>
                                <div class="col-sm form-group">
                                    <label>Folgende Musikrichtungen:</label>
                                    <input
                                        name="musikrichtungen"
                                        class="form-control"
                                        type="text"
                                        placeholder="Jazz, Country, .."
                                    />
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-sm form-group">
                                    <span>Ich stelle Folgendes dar:</span>
                                    <input
                                        name="disziplin"
                                        class="form-control"
                                        type="text"
                                        placeholder="Tanz, Akrobatik, Capoeira, .."
                                    />
                                </div>
                                <div class="col-sm form-group">
                                    <span>Zu folgender Musik:</span>
                                    <input
                                        name="musikbegleitung"
                                        class="form-control"
                                        type="text"
                                        placeholder="Klassik, Rock, .."
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <span>Du hast bereits ein Video gedreht? Dann lade es unter diesem Formular hoch & trage hier den Dateinamen ein, damit wir deine Daten zuordnen können.</span>
                                <input
                                    name="dateiname"
                                    type="text"
                                    class="form-control"
                                    placeholder="namen-tanzen.mp4"
                                />
                            </div>
                            <span>Wie können wir dich kontaktieren?</span>
                            <div class="row form-row">
                                <div class="col-sm form-group">
                                    <span>E-Mail:</span>
                                    <input
                                        name="email"
                                        class="form-control"
                                        type="email"
                                        placeholder="name@example.de"
                                        required="required"
                                    />
                                </div>
                                <div class="col-sm form-group">
                                    <span>Telefon:</span>
                                    <input name="telefon" class="form-control" type="text" placeholder="000-000000" />
                                </div>
                                <div class="col-sm form-group">
                                    <span>Bevorzugte Kontaktzeiten:</span>
                                    <input
                                        name="kontaktzeiten"
                                        class="form-control"
                                        type="text"
                                        placeholder="Wochentags nach 16:00"
                                    />
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
                                <input
                                    name="woher"
                                    type="text"
                                    class="form-control"
                                    placeholder="Instagram, Facebook, Plakate, Flyer, Freunde, .."
                                />
                            </div>
                            <div class="form-check form-group">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="datenschutz"
                                    required="required"
                                />
                                <label class="form-check-label">
                                    Ich akzeptiere die
                                    <a href="/impressum.html" target="_blank">Datenschutzerklärung</a>.
                                </label>
                            </div>
                            <div class="button-center">
                                <input type="submit" class="btn btn-primary" value="Daten senden" class="submit" />
                            </div>
                        </form>
                        <br />
                        <p>
                            Du hast bereits ein Video gedreht? Dann lade es hier hoch und wir sorgen dafür, dass es an
                            öffentlichen Orten gezeigt wird :)
                        </p>
                        <div class="button-center">
                            <a
                                href="http://173.249.45.130/nextcloud/index.php/s/SBEToNjiDtZzi98"
                                class="upload-button"
                                target="_blank"
                                ><button type="button" class="btn btn-primary">Video hochladen</button></a
                            >
                        </div>
                    </div>
                </div>
            </section>
            <section id="kontakt">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead">
                            Hast du Fragen, Anregungen, Kritik, Lob, Vorschläge, eine Socke verloren oder Lust, mit
                            jemandem zu lachen? Melde dich bei uns und mach’ dir keinen Kopf über die Formulierung der
                            E-Mail, wir freuen uns auch über ein einfaches “Hallo” :D
                        </p>
                        <p class="text-center"><a href="mailto:info@fuenfminuten.eu">info@fuenfminuten.eu</a></p>
                        <p>
                            Das 5min-Team wünscht dir einen harmonischen Tag. :)
                        </p>
                        <p>
                            Dieses Projekt wird gefördert von der Stadt Chemnitz.
                        </p>
                        <img src="assets/khs2025.png" alt="logo-chemnitz" class="logo-chemnitz" />
                    </div>
                </div>
            </section>
            <section id="faq">
                <div class="container">
                    <div class="col-lg-8 mx-auto">
                        <h2>Fragen & Antworten</h2>
                        <h3>Darf ich auch teilnehmen, wenn ich kein Chemnitzer bin?</h3>
                        <p>
                            Das ist ein Projekt für alle, die Lust auf’s Tanzen und Musizieren haben. Teilnehmen dürfen
                            alle Menschen, die sich im Raum Chemnitz** bewegen. Du musst kein Chemnitzer sein, um mit
                            uns zusammen Spaß zu verbreiten! ;)
                        </p>
                        <h3>Muss ich nach Chemnitz kommen, um aufzutreten?</h3>
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
                        <h3>Ich möchte alleine auftreten, kann ich auch mitmachen?</h3>
                        <p>
                            Klar! Wir freuen uns auf jede Performance. Schick uns dein Video, melde dich an und lass uns
                            von deinem Vorhaben erfahren. Wir helfen dir gerne.
                        </p>
                        <h3>
                            Wir sind eine große Künstlergruppe. Müssen wir uns teilen, um uns an das Format von
                            “fünf-Minuten” anzupassen?
                        </h3>
                        <p>
                            Nicht unbedingt. (Siehe vorherige Antwort) Wir würden uns trotzdem auch freuen, wenn ihr
                            zusätzlich ein Video mit einem Musiker und zwei Tänzern schickt. :) Je mehr Auftritte in der
                            Stadt Chemnitz es gibt, desto bunter wird das Leben!
                        </p>
                        <h3>Wir haben keine Genehmigung fürs Musizieren/Performen, dürfen wir auftreten?</h3>
                        <p>
                            Ja, in der Stadt Chemnitz dürft ihr das zwischen 6:00 und 22:00, ohne die Straße abzusperren
                            und andere zu stören. Die Passanten sollten ja z. B. nicht über euch springen müssen, wenn
                            sie einkaufen gehen oder die U-Bahn nehmen möchten ;) Achtet außerdem darauf, nichts kaputt
                            oder dreckig zu hinterlassen.
                        </p>
                        <p>
                            Als “störend” gilt laut der
                            <a href="https://www.chemnitz.de/chemnitz/media/rathaus/satzungen/32_100.pdf"
                                >Chemnitzer Polizeiverordnung</a
                            >
                            folgendes:
                            <br />
                            § 3 Störendes Verhalten in der Öffentlichkeit (Auszug)
                            <br />
                            (1) Das unbefugte Benutzen, Beschriften, Besprühen, Bemalen, Bekleben, Verunreinigen sowie
                            die Beeinträchtigung der Funktionalität oder des Gebrauchs öffentlicher Zwecke dienender
                            Sachen, Einrichtungen, Anlagen ist untersagt. Hierzu gehören insbesondere auch die Störung
                            von Betriebsabläufen, des Dienstbetriebes oder die Beeinträchtigung der Verkehrssicherheit.
                            <br />
                            (2) Jegliche Verunreinigung öffentlicher Straßen, Grün- und Erholungsanlagen sowie sonstiger
                            öffentlich zugänglicher Flächen ist untersagt. Unzulässig ist grundsätzlich das Wegwerfen,
                            Zurücklassen von Abfall, von Lebensmittelresten, Papier, Pappe, Kartonagen, Glas,
                            Blechdosen, Kaugummi, Zigarettenkippen etc. [...]
                        </p>
                        <p>
                            Bezüglich eurer Musik und anderer Geräusche gilt hauptsächlich folgender Satz:
                            <br />
                            § 8 Schutz vor Lärmbelästigung (Auszug)
                            <br />
                            (1) Rundfunk- und Fernsehgeräte, Lautsprecher, Tonwiedergabegeräte, Musikinstrumente sowie
                            andere mechanische oder elektroakustische Geräte zur Lauterzeugung dürfen nur so benutzt
                            werden, dass andere nicht unzumutbar belästigt werden. [...]
                        </p>
                        <p>
                            Genauere Informationen könnt ihr
                            <a href="https://www.chemnitz.de/chemnitz/media/rathaus/satzungen/32_100.pdf">hier</a>
                            nachlesen. Alle Angaben ohne Gewähr.
                        </p>
                        <h3>Was ist das “fünf-Minuten-Filmfestival”? Wo kann man es sehen?</h3>
                        <p>
                            Wir wollen alle zusammen der Welt zeigen, wie wir, die Chemnitzer Bevölkerung, wirklich
                            sind. Dafür sind eure Videos da, sie werden an verschiedenen Orten der Stadt und in den
                            sozialen Medien veröffentlicht. Schaut euch unsere Social Media-Kanäle und unsere Website
                            an. Ihr könnt auch unseren Newsletter abonnieren, um auf dem Laufenden gehalten zu werden.
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
                <div class="row">
                    <div class="col-sm">
                        <a
                            href="https://www.facebook.com/fuenfminuteneu"
                            target="_blank"
                            class="fa fa-facebook mr-3"
                        ></a>
                        <a
                            href="https://www.instagram.com/fuenfminuteneu/"
                            target="_blank"
                            class="fa fa-instagram mr-3"
                        ></a>
                        <a href="https://twitter.com/fuenfminuteneu" target="_blank" class="fa fa-twitter mr-3"></a>
                        <a
                            href="https://www.youtube.com/channel/UC-PGCE6J0Uy8f97_ZcBWKRg"
                            target="_blank"
                            class="fa fa-youtube"
                        ></a>
                    </div>
                    <div class="col-sm">
                        <p class="m-0 text-right text-white">&copy; Fünf Minuten 2019</p>
                    </div>
                </div>
            </div>
        </footer>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <script src="script.js"></script>
    </body>
</html>
