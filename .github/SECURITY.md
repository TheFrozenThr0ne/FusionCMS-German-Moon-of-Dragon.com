# Security Tips
1- Stellen Sie sicher, dass Sie CAPTCHA aktivieren. Es ist wichtig, um Bot-Angriffe auf Ihre Website zu verhindern.

2- Wenn die Website und der Server sich auf demselben Server befinden, verwenden Sie zwei separate Datenbankkonten, um die Verbindung zum Host und zum Server herzustellen. Ein Konto sollte nur Zugriff auf die Auth-, Charakter- und Welt-Datenbanken haben und nur Berechtigungen für die Abfragen SELECT, DELETE, INSERT und UPDATE besitzen. Wenn die Website sich auf einem anderen Host befindet, müssen Sie nur die IP-Adresse im Hostfeld eingeben. Viele Menschen geben jedoch *, was bedeutet, dass jede IP-Adresse auf die Datenbank zugreifen kann; andernfalls geben Sie localhost ein.

![Screenshot 2023-12-14 121152](https://github.com/FusionWowCMS/FusionCMS/assets/12217476/e6379669-ba1c-4453-9594-d4d567293a00)


3- Wir benötigen auch ein weiteres Konto für die Website-Datenbank, das nur Zugriff auf diese Datenbank hat, und wir können und sollten ihm die Berechtigung geben, auf die Abfragen im Bild unten zuzugreifen:

![Screenshot 2023-12-14 121153](https://github.com/FusionWowCMS/FusionCMS/assets/12217476/4e962983-8f71-4db8-b0b9-20c1faed6f20)

4- Verwenden Sie starke Passwörter zur Erstellung der Datenbank und geben Sie diese Passwörter an niemanden weiter.

5- Erlauben Sie niemandem den Zugriff auf Ihre Website-Dateien oder auf Ihren Host, da er auf die Datei oder die Datenbank zugreifen kann, in der die Informationen aller Datenbanken gespeichert sind.

6- Erstellen Sie ein separates Konto vom Eigentümerkonto mit einem starken Passwort für das Konsolenkonto jedes Realms.

7- Zwingen Sie GM-Konten, mit Ausnahme des Konsolenkontos, zur Verwendung der Zwei-Faktor-Authentifizierung.

# Sicherheitspolitik
Wir legen großen Wert auf die Sicherheit der Daten unserer Nutzer, aber wir sind Menschen und nicht unfehlbar. Deshalb verlassen wir uns auf Sie, die Open-Source-Beitragsleister, um uns über aktuelle und mögliche Sicherheitsanfälligkeiten zu informieren. Bitte folgen Sie den untenstehenden Richtlinien, um mit uns in Kontakt zu treten, auch wenn Sie sich nicht sicher sind, ob Ihr Anliegen die Datensicherheit betrifft.

## Melden einer Sicherheitsanfälligkeit
**Bitte öffnen Sie keine GitHub-Issues für Sicherheitsanfälligkeiten, da GitHub-Issues öffentlich zugänglich sind!**

Stattdessen kontaktieren Sie uns über Discord [Nightprince](https://discordapp.com/users/408541006238187530) oder treten Sie unserem Discord-Server bei [https://discord.gg/5nSt9puU4V](https://discord.gg/tnWTkZ7akZ).
Wir garantieren eine Antwort innerhalb von zwei Werktagen und ein Sicherheitsupdate so schnell wie möglich.

Danke für Ihre Kooperation und Ihr Verständnis.
