---
title: Installation Jack Audio mit JackTrip
author: Peter Mall
date: 29.10.2020

documentclass: scrartcl
classoption:
    - twoside
#    - twocolumn
#    - draft
papersize: A4
geometry: "inner=3cm, outer=2cm, top=2.5cm, bottom=3.5cm"

#\usepackage[paperwidth=5.5in, paperheight=8.5in]{geometry}
fontsize: 11pt
#margin-bottom: 1.5cm
#margin-top: 2.5cm
<> indent: true
lang: de
<> toc: true

header-includes: |
    \usepackage{fancyhdr}
    \pagestyle{fancy}
    \usepackage{microtype}
    \fancyfoot{}
    \fancyfoot[EL,OR]{\thepage}

#   \usepackage[x-1a1]{pdfx}
#    \usepackage{titling}
#    \usepackage[bookmarks=false]{hyperref}

filters:
- pandoc-citeproc

# pdf-engine: xelatex

mainfont: Minion Pro
sansfont: Myriad Pro
# sansfontoptions: [Color=8FA2BB]

output:
  pdf_document:
    pdf_engine: xelatex
---

JackTrip ist ein Open Source Projekt zur Übertragung von Audio in Echtzeit über das Internet in CD Qualität. Damit dies funktioniert, muss man einen Internet Zugang mit mindestens 2 Mbit upload und ebenso viel download (meist kein Problem) haben. Außerdem muss man sich per Kabel an den Router anschließen. Eine Übertragung über WLAN ist nicht geeignet (hat einen technischen Hintergrund).

Die Audioqualität hängt auch von der Soundkarte ab. Auf einem halbwegs aktuellen Laptop konnten wir das System mit der eingebauten Karte starten, es wird aber empfohlen, eine hochwertigere Karte zu benutzen.

Allgemeine Infos:\
<https://ccrma.stanford.edu/software/jacktrip/>

## Installation

Es müssen folgende Programme in dieser Reihenfolge installiert werden (Windows):

-   ASIO4ALL
-   Jackaudio
-   JackTrip (kein Installer, wird direkt gestartet)

Downloads für Windows:

<https://ccrma.stanford.edu/software/jacktrip/windows/index.html>

## Jack Audiosystem starten

Zunächst muss das Jack-Audiosystem gestartet werden. Dies ist das Program Jack-Control oder qjackctl.

Im Setup muss folgendes eingestellt werden:

![](setup.png){width=50%}

Interface: der Treiber der Soundkarte. Nutzt man per ASIO4ALL die interne Karte, dann diese Einstellung verwenden

Sample Rate: Dies muss mit den Vorgaben des Servers übereinstimmen (bei Bedarf abklären)

Frames: Dieser Wert wird auch vom Server vorgegeben, er sollte so niedrig wie möglich sein. Die angegebenen 128 sind ein brauchbarer Anfang.

Dann mit START den Jackserver starten.

![](start.png){width=30%}

Wenn eine Fehlermeldung auftritt, liegt das oft daran, dass die Soundkarte bereits genutzt wird. Sicherstellen, dass kein Programm geöffnet ist, welches die Soundkarte benutzt.

## Starten von JackTrip

Das Programm JackTrip wird direkt aus der Eingabeaufforderung (Terminal) heraus gestartet (in Windows 10 alternativ auch PowerShell möglich). Wenn das Programm im Ordner jacktrip im Ordner Downloads gespeichert wurde, dann mit dem Befehl dorthin wechseln:

cd Downloads\\jacktrip

Die Verbindung zu Server wird dann über folgenden Befehl hergestellt:

./jacktrip.exe -C *IP-Adresse*

Die IP-Adresse des Servers muss man vom Admin bekommen haben, ebenso die oben genannten Einstellungen.

Sofern das Programm startet und keine Fehlermeldung produziert, sollte eine Verbindung vorhanden sein.

# MacOS X

Die Installation bei MacOS läuft sehr ähnlich. Die Dateien können hier runtergeladen werden:

<https://ccrma.stanford.edu/software/jacktrip/osx/index.html>

Das Jack Audiosystem muss zunächst über das Programm Jackpilot gestartet werden, bevor man mit qjackctl die weiteren Einstellungen vornehmen kann. Eventuell muss man öfter zwischen beiden Programmen wechseln, da Einstellungen nur geändert werden können, wenn das System nicht gestartet wurde.

Für MacOS gibt es keinen ASIO4ALL Treiber, man muss also mit den Treibern von Apple auskommen (sofern man keine externe Soundkarte hat).

# Disclaimer

JackTrip ist kein sogenanntes Plug-and-Play System, es muss daher zu Beginn einer Session etwas Zeit eingeplant werden, um sowohl das Audio System, die Netzwerk Verbindungen als auch die Aussteuerung von Mikrofonen und Lautsprechern einzustellen. Es werden Kopfhörer empfohlen. Außerdem hängt die Klangqualität maßgeblich von den verwendeten Mikrofonen ab. Auch wenn das System eventuell mit Laptop Bordmitteln zum Laufen gebracht werden kann, wird dies wahrscheinlich nur für eine Testphase zufriedenstellend sein. Für eine regelmäßige Nutzung sollte man in eine hochwertigere Soundkarte investieren.


# Empfohlene USB Soundkarten

* Presonus AudioBox USB 96 Black
* EVO4
* Zoom U22

Alle zwischen ca. 80 und 100 EUR.
