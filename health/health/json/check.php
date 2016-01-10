<?php
echo '
  "CHECKLISTS": [
    {
      "ChecklistID": 8352,
      "Name": "8352",
      "Logo": "",
      "Product": 100010,
      "Local TimeToLive": 172800,
      "Company": "ACTrondheim",
      "Department": 1,
      "Stylesheet": "html , body {background-color: #ffffff;} ",
      "Deliverytype": "Show all",
      "Questions": [
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 1,
          "Text ID": [
            {
              "ID": 33,
              "ENG": "Order information",
              "NOR": "Ordre informasjon",
              "POL": "Dodatkowe informacje"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Header"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Rune Langøy",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 10,
          "Text ID": [
            {
              "ID": 12,
              "ENG": "Customer name",
              "NOR": "Kunde fornavn og etternavn",
              "POL": "Nazwisko, imie klienta"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Marit Hammers gate 8",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 70,
          "Text ID": [
            {
              "ID": 14,
              "ENG": "Address",
              "NOR": "Adresse",
              "POL": "Adres klienta"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "7506 STJØRDAL",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 80,
          "Text ID": [
            {
              "ID": 15,
              "ENG": "Postcode",
              "NOR": "Postnummer - sted",
              "POL": "Numer pocztowy"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "7506 STJØRDAL",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 80,
          "Text ID": [
            {
              "ID": 15,
              "ENG": "Postcode",
              "NOR": "Postnummer - sted",
              "POL": "Numer pocztowy"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "982 10 630",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 90,
          "Text ID": [
            {
              "ID": 17,
              "ENG": "Cellphone number / phone number",
              "NOR": "Mobiltelefon / Telefonnr",
              "POL": "Numer telefonu kom."
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "rune.langoy@skanska.no",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 100,
          "Text ID": [
            {
              "ID": 19,
              "ENG": "Customer E-mail",
              "NOR": "E-post kunde",
              "POL": "E-mail klienta"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Email"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SQL::update sjekklistesvar set svar=ordrenr,betingelser=¤¤,besvart=1,updated=¤20130101010101¤ where sekvensnr=120 and egenskap1=¤salg¤ and ordrenr=? and (linjenr=? or linjenr=linjenr)",
          "Sequence#": 120,
          "Text ID": [
            {
              "ID": 623,
              "ENG": "Sales ordre number",
              "NOR": "Salgsordre nummer",
              "POL": "Sales ordre number"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 130,
          "Text ID": [
            {
              "ID": 32,
              "ENG": "Checklist",
              "NOR": "Sjekkliste",
              "POL": "Czeklista"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Header"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Luft/Luft",
          "Timestamp last change": "20151002055915",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002055915",
          "Display rule": "0",
          "Sequence#": 145,
          "Text ID": [
            {
              "ID": 110,
              "ENG": "Type of product",
              "NOR": "Type produkt",
              "POL": "Typ pompy ciepła"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 147,
          "Text ID": [
            {
              "ID": 515,
              "ENG": "Standard or compact model",
              "NOR": "Standard eller kompakt",
              "POL": "standardowy lub kompaktowy model"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Fujitsu  AGYV14LAC / AOYG14LAC (Gulv)",
          "Timestamp last change": "20150930144314",
          "Last change by": "tomasz.brandeburg@acsenteret.no20150930144314",
          "Display rule": "0",
          "Sequence#": 150,
          "Text ID": [
            {
              "ID": 24,
              "ENG": "Product brand",
              "NOR": "Fabrikat varmepumpe",
              "POL": "Nazwa producenta klimatyzacji"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Agyf14lac",
          "Timestamp last change": "20151002060231",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060231",
          "Display rule": "0",
          "Sequence#": 160,
          "Text ID": [
            {
              "ID": 20,
              "ENG": "Model number indoor unit",
              "NOR": "Komplett modellnavn innedel",
              "POL": "Komplet model jednostki wewnetrznej"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Aoyv14lal",
          "Timestamp last change": "20151002060154",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060154",
          "Display rule": "0",
          "Sequence#": 170,
          "Text ID": [
            {
              "ID": 21,
              "ENG": "Model number outdoor unit",
              "NOR": "Komplett modellnavn utedel",
              "POL": "Komplet model jednostki zewnetrznej"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 200,
          "Text ID": [
            {
              "ID": 2,
              "ENG": "Indoor and outdoor units securely installed in accordance with the \"rules for placement\" ref assembly process",
              "NOR": "Inne- og utedel forsvarlig montert i henhold til \"regler for plassering\" ref monterings prosess",
              "POL": "Jednostek wewnętrznych i zewnętrznych prawidłowo zainstalowanych zgodnie z \"zasada umieszczenia\" procesem montażu."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "E004724",
          "Timestamp last change": "20151002060303",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060303",
          "Display rule": "0",
          "Sequence#": 220,
          "Text ID": [
            {
              "ID": 3,
              "ENG": "Serial number indoor unit",
              "NOR": "Serienr innedel",
              "POL": "Numer seryjny jednostki wewnetrznej"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "1",
          "Timestamp last change": "20151002060019",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060019",
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 300,
          "Text ID": [
            {
              "ID": 576,
              "ENG": "Drain hose from the indoor unit installed without \"water trap\", end led to drain or below the cladding. Pour water into the machine and confirm that the water exits trough the drain hose, if drainpump mounted , clean the filter and check that it starts and functions without leakage.",
              "NOR": "Dreneringsslange fra innedel montert med fall uten \"vannlås\", ende ført til sluk eller nedenfor kledning. Hell vann i maskinen og bekreft at vannet renner ut gjennom drens slangen, rens filter i eventuell drenspumpe og kontroller at den starter og fungerer uten lekkasje etterpå",
              "POL": "Dren wyprowadzony z jedn wewnetrznej z odpowiednim spadkiem na zewnatrz bez zagiec i efektow \"syfon\" wlej wode do jedn wewnetrznej i sprawdz czy wyplywa na zewnatrz, w przypadku pompki drenowej sprawdz czy dziala poprawnie tez stosujac wode do testu."
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 350,
          "Text ID": [
            {
              "ID": 26,
              "ENG": "All wiring including grounding equipped with cable crimps shall, strain relieved and after tightened at both ends",
              "NOR": "Alle ledninger inkl. jording utstyrt med niter, strekkavlastet og etterstrammet i begge ender",
              "POL": "Wszystkie przewody elektr. plecionki wymagaja zarobienia koncowek nitami elektrycznymi do podlaczenia zasilania lub kabla sterowania."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 400,
          "Text ID": [
            {
              "ID": 27,
              "ENG": "Pipes and wiring between indoor unit and outdoor unit bundled together and attached securely to the wall. Hole in the wall sealed from the outside, and pipes from the wall-mounted so that rainwater can not flow along the pipe",
              "NOR": "Rør og ledning mellom innedel og utedel buntet sammen og festet forsvarlig til vegg. Hull i vegg tettet på utside og rør ut fra vegg montert slik at regnvann ikke kan renne inn langs rør",
              "POL": "Rury i przewody na zewnatrz musza byc ukryte w kanale instalacyjnym i zamocowane do sciany tak, aby woda deszczowa nie dostala sie do wewnatrz budynku przez odtwor instalacyjny."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 500,
          "Text ID": [
            {
              "ID": 29,
              "ENG": "Connections drawn with torque, ester oil on all threads in pipe joints and flanges. Moment of different pipe sizes: (1 / 4''- 18Nm) (3 / 8''- 40nm) (1 / 2''- 54Nm). Caps on serivce port (14-18Nm) and stop valves (20-30Nm)",
              "NOR": "Koplinger tiltrukket med moment, esterolje på alle gjenger i rørskjøter og på flenser. Moment ved forskjellige rørdimensjoner: (1/4'' - 18Nm)  (3/8'' - 40Nm)  (1/2'' - 54Nm). Hetter på service port (14-18Nm) og stoppventiler (20-30Nm)",
              "POL": "Dokrecanie srub polaczeniowych kluczami dynamometrycznymi smarujac podlaczenia olejem. Dostosuj sile klucza do grubosci rury. (1/4'' - 18Nm)  (3/8'' - 40Nm)  (1/2'' - 54Nm)"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "24007",
          "Timestamp last change": "20151002060313",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060313",
          "Display rule": "0",
          "Sequence#": 600,
          "Text ID": [
            {
              "ID": 444,
              "ENG": "Pressurize with 20-25 bar nitrogen, and use leak spray on all accessible joints. Let the pressure stabilize. Note pressure after stabilization in mBar",
              "NOR": "Trykksett med 20-25 bar nitrogen, og sjekk alle tilgjengelige koblinger med lekkasjespray. La trykket stabilisere seg. Noter trykket etter stabilisering i mBar.",
              "POL": "Test szczelnosci (nitrogen) cisnieniem 20-25 Bar, sprawdz szczelnosc polaczen za pomoca spray, gdy cisnienie sie ustabilizuje zanotuj wynik w mBar"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "24007",
          "Timestamp last change": "20151002060320",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060320",
          "Display rule": "0",
          "Sequence#": 610,
          "Text ID": [
            {
              "ID": 445,
              "ENG": "Note pressure in mBar 5 minutes after stabilization. <b>IMPORTANT: Pressuredrop shall be less than 3mBar</b> (ex 20576mBar drops to 20573mBar is OK)",
              "NOR": "Noter trykket i mBar 5 minutt etter stabilisering. <b>VIKTIG: Trykkfallet skal være mindre enn 3 mBar</b> (eks 20576mBar faller til 20573mBar er OK)",
              "POL": "Spadek cisnienia po 5 min od ustabilizowania sie wyniku na manometrach. Uwaga!!! spadek nie moze byc wiekszy niz 3 mBar (np.20576mBar -20573mBar ) jezeli jest wiekszy jest to nieszczelnosc !!!"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "20",
          "Timestamp last change": "20151002060324",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060324",
          "Display rule": "0",
          "Sequence#": 620,
          "Text ID": [
            {
              "ID": 446,
              "ENG": "Vacuuming performed directly against keller, Note vacuum reading in mBar:",
              "NOR": "Vakuumer direkte mot keller digital manometer, noter vakuum i mBar:",
              "POL": "vakium wykonane przy zamknietym zaworze na wezu, wynik zapisz w mBar"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "20",
          "Timestamp last change": "20151002060331",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060331",
          "Display rule": "0",
          "Sequence#": 630,
          "Text ID": [
            {
              "ID": 447,
              "ENG": "Vacuuming performed > 15min (End pressure Max 0,002Bar over pressure reading when vacuuming directly against keller digital manometer.) Note vacuum reading in mBar:",
              "NOR": "Vakuumer i minst 15min (Vakuum skal være maks 2 mBar høyere enn vacuum oppnådd under vakuumering direkte mot keller digital manometer). Noter vakuum i mBar:",
              "POL": "vakium wykonane min 15-20 min. roznica cisnienia max 0,002 Bar w/g wskazan manometru. Zapis wyniku w mBar"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "23",
          "Timestamp last change": "20151002060338",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060338",
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 800,
          "Text ID": [
            {
              "ID": 36,
              "ENG": "Tested, outflow temperature 10 min. after the start of the indoor unit should be > 20 ° C above the inlet temperature. With the fan speed on max (Verify that the fan achieves high speed) Record the inlet temperature:",
              "NOR": "Testkjøring utført, utblåsningstemp. 10 min. etter oppstart av innedel skal være > 20°C over innsug temp. med viftehastighet på max (verifisér at viften oppnår høyt turtall)    Notér innsugs temperatur:",
              "POL": "Test temperatury jednostki wew. Sprawdz temp. na wlocie i wylocie powietrza - temperatura na wylocie musi byc wieksza minimum o 20°C od temperatury na wlocie. Test przeprowadz na funkcji HEAT, predkosc wetylatora na MAX. Zanotuj obydwie temperatury."
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "55",
          "Timestamp last change": "20151002060344",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060344",
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 820,
          "Text ID": [
            {
              "ID": 70,
              "ENG": "Record outlet temperature:",
              "NOR": "Notér utblåsnings temperatur:",
              "POL": "Maksymalna temperatura na wylocie"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 895,
          "Text ID": [
            {
              "ID": 575,
              "ENG": "If possible, add PUR foam from both from the inside of the wall",
              "NOR": "Skum hullet både fra innsiden og fra utsiden dersom mulig.",
              "POL": "jesli jest to mozliwe dodaj pianke izolacyjna od wewnatrz... (mozliwe w niektorych modelach np podlogowe, FD25,35, 50, GE25,35, FH)"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": null,
          "Sequence#": 900,
          "Text ID": [
            {
              "ID": 38,
              "ENG": "ACsenteret sticker label affixed outside and indoor unit",
              "NOR": "ACsenteret klisterlapp påsatt ute og innedel",
              "POL": "Naklej logo instalatora ACsenteret wewnatrz i na zewnatrz."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "LzlqLzRBQVFTa1pKUmdBQkFRQUFBUUFCQUFELzRRQllSWGhwWmdBQVRVMEFLZ0FBQUFnQUFnRVNBQU1BQUFBQkFBRUFBSWRwQUFRQUFBQUJBQUFBSmdBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQ1pLQURBQVFBQUFBQkFBQURNQUFBQUFELzJ3QkRBQ0FXR0J3WUZDQWNHaHdrSWlBbU1GQTBNQ3dzTUdKR1NqcFFkR1o2ZUhKbWNHNS9qN2ViZjRldGlXNXduOW1ocmIzRHpjL05mSm5oOGQvSDc3Zkp6Y1gvMndCREFTSWtKREFxTUY0ME5GN0ZnM0NEeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWC93QUFSQ0FNd0FtUURBU0lBQWhFQkF4RUIvOFFBSHdBQUFRVUJBUUVCQVFFQUFBQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkFBQWdFREF3SUVBd1VGQkFRQUFBRjlBUUlEQUFRUkJSSWhNVUVHRTFGaEJ5SnhGREtCa2FFSUkwS3h3UlZTMGZBa00ySnlnZ2tLRmhjWUdSb2xKaWNvS1NvME5UWTNPRGs2UTBSRlJrZElTVXBUVkZWV1YxaFpXbU5rWldabmFHbHFjM1IxZG5kNGVYcURoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1SGk0K1RsNXVmbzZlcng4dlAwOWZiMytQbjYvOFFBSHdFQUF3RUJBUUVCQVFFQkFRQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkVBQWdFQ0JBUURCQWNGQkFRQUFRSjNBQUVDQXhFRUJTRXhCaEpCVVFkaGNSTWlNb0VJRkVLUm9iSEJDU016VXZBVlluTFJDaFlrTk9FbDhSY1lHUm9tSnlncEtqVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnb09FaFlhSGlJbUtrcE9VbFphWG1KbWFvcU9rcGFhbnFLbXFzck8wdGJhM3VMbTZ3c1BFeGNiSHlNbkswdFBVMWRiWDJObmE0dVBrNWVibjZPbnE4dlAwOWZiMytQbjYvOW9BREFNQkFBSVJBeEVBUHdDNEtXa0ZMVURDaWlpa0FsS09sRkE2VUFGRkZGTUJLTzlMU0hyUU1XaWlpZ0FwRDBwYVE5S0FBVXRGRkFncEQwcGFEMHBEQWRLS0Iwb29BS1J1bE9wRzZVd0FkS1dnZEtLUUJUVDk0VTZtbjd3b0FXZ1V0RkFBYUZIRkhhaFB1aWdCUlMwVVVBSi9FS2RUZjRoVHFBRXhTTjJwMUkzU2dCY1VsTFJRQTF2dTB0RGRLV2dZbEkzU25VamRLQUNsb29vQVkzM2hUNmEzM2hUcUFFcG8rOGFmVFI5NDBBTFIyb283VUFJdjNSUzBpL2RGT29BYWZ2ajZVNmtQMy93cGFBRVAzVFFQdWlnL2ROS09nb0FUR2FSUmduQnA5TlhxZnJRQW9ZanFLY0hVOTZiVGNmdlB3b0Fsd0RSZ2ltY2pvYVVTZk5naW1JZG1rS2cwN0lOR1BTZ0JoVDBwcEdLazVvNG9BanhTWXFRcUthVklvQWJSUzBVQUpSUzBVQUZGRkZBQlJSUlFBVVVVVUFSanJUcWFPdE9vRUZKUzBsQUFhQjBvb0hTZ0JhU2xvb0dKU0hyUzBoNjBBTFJTMFVBRkllbExTSHBRQURwUlFPbExRSUtROUtXa1BTZ1lvNlVVRHBSUUFVaDZVdEkzU2dCYVdnVVVnRXBEOTRVNm1uN3dvQVdpaWlnQTdVSjkwVUhwUW4zUlFBNmlpaWdCUDRoVHFiL0VLZFFBVWpkS1dodWdvQVdrcGFLQUd0MHAxTmJwVHFBRXBHNlU2a2FnQXBhS0tBR243d3AxTlAzeFRxQUNtajd4cDFOSFUwQUxSMnBhUTlEUUFpL2RGT3BGKzZLV2dCUDQvd0FLV2svaS9DblVBTmI3cHBSMEZJMzNUU2pwUUFVMWVwK3RPcEY2bjYwREZwUDQvd0FLZFRmNC93QUtBRnByRDV4VHFhZnZpZ0JjVWJtVWp1RFMwaDZpZ1E0T08vRk80Tk14VFNDR0dEaW1CTHQ5S1Q2MGdaaDcwb2RTY2Q2QUFnR21sZlNuNEJwTUVVQU1JOWFTcEtRcURRQXlpbkZUOWFiUUFVVVVVQUZGRkZBREIxcGFRZGFXZ1FVVVVVQUpRdlNpZ2RLQUZvb29wREVvUFVVdElldEFDMFVVVXdDa05MU0dnQUhTbG9GRkFnb1BTaWc5S0JnT2xGS09sRkFDVU4wcGFSdWxJQlJSUlJUQUtRL2VGTFNINzFJQmFLS0tBRVBTaGZ1aWc5S0YrNktBSFVVVVVBSi9HS2RUZjR4VHFBQ2tib0tXa2J0OWFBSFVVVVVBSTNTbHBHNlU2Z0JLUnUxT3ByZHFBRm9vb29BUS9lRk9wcCsrS2RRQWxJT3BwMU5YcWFBRnBEME5LYVJ2dW1nQVhvS1drSFFVdEFCL0YrRkxTZnhHbE5BRFcrNmFjT2xJMzNUUzBBRkl2ZjYwdEl2ZjYwREZwUDQvd3BhVCtNL1NnUXROUDN4VHFhZnZpZ1k2a1AzaFMwaCs4S0FGcEQ5NFV0Qis4S0JCVFNQbi9DblVuOGY0VUFISTZHbFdROGdqcFJUUjk1cVlFZ0lORzMwcUdVZkx4d2MwcXNVWGxzajNvQWs1RkhCNjBlWU85THdhQUdsZlNta1lxVEI3VWxBRWRGUHdQYWlnQ0VVdElPdExRSUtLS0tBRW9IU2xOSXZTZ0JhS0tLQmhTSHFLV2tQV2tBdEZGTFRBS1E5S1drUFNnQUhTaWdkS0tBRnBEMHBhUTlLQUZIU2lnZEtLQUNrYnBTMGpkS1FDMHRGRkFDVWgrK0tkVGY0eFFBdEZMU1VBQjZVaS9kRktlbEMvZEZBQzBVVVVBSi9HS2RUZitXZ3AxQUJTTjIrdExTTjIrdEFEcUtLS0FHdDJwOU5idDlhZFFBVTF1MU9wcmRSUUF0S0tTbG9BYi9HS2RTZngvaFMwQUZOWHZUcWF2ZjYwQUxTTjBOT3ByZmROQUNqb0tXa0hRVXRBQ0Q3eHBhUWZlTk9vQWEzM2FXa2I3dExRQVVpOS9yUzBpZEtBRnBCOTgvU25VMGZlTkFDMG44WStsT3B2OGY0VUFPcHArOEtkU0g3dytsQUMwbjhRK2xMU2Z4ZmhRQXROL2ovQ25VbjhmNFVBTFRSOTQwNmtIVS9XZ0JrdlFmV215RE1mNDArVCtINjB5UlNVNEdlYUJpa0VJQWFWUnQ0RkJIeUFHbjk2QkRRNUJ3YWZ2QjYwMytMOEtDb0lwZ080TkZScU9CelJRQXdkYVdrSFdsb0VGRkZGQUJTTDBwYUY2VUFMU1V0RkF4S1E5UlMwaG9BZFJSUlFJS1E5S2RTSG9hQmlDbHBCMHBhQUNrUFNsb1BTZ0FIU2xwQjBwYUFDa2JwUzBqZEtRQzBVVXRNQktiL0dLZFRUOStrQTZpaWlnQkQwb1g3b29QU2hmdWlnQjFGRkZBRFArV2xQcHY4QXkwcDlBQ1VqZFI5YWRUVzZqNjBBT29vb29BUnUzMXAxTmZ0OWFkUUFVMXVvcDFJM1VVQUxSUlJRQW44ZjRVNm1qNy80VTZnQktSZS8xcGFSZS8xb0FXa2I3dEthUnZ1MEFBNlV0QXBhQUVIM2pTMGcrOGFXZ0JyZEtkVFc2ZmpUcUFDa1RwUzBpZmRvQVdtcjk1cWRTTDk1cUFGcHY4ZjRVNm0veC9oUUE2ay9qL0NscFA0L3dvQVdrL2kvQ25VMytNL1NnQjFOL2pOT3BvKzhhQUZwRjcvV25VMWUvd0JhWUE0eUtUR0JUajBOTmJoYVFEV2J0VGoxRlFJU1FTYWxIYW1BNytMOEtXay9pUDBwYVFDRG9LS1VkQlJRQkNPdExTZDZXbUlLS0tLQUNoZWxCb1dnQmFLS0tCaFNHbHBEUUF0TFNVdEFCU0dscEQwb0FCMG9vSFNsb0FTZzlLV2tQU2dCUjBvb0hTaWdBcEc2VXRJM1NnQjNhaWlpa0FVMytPblUzK09nQjFKUzBVQU5icFNyOTBVTjkyaGZ1aWdCYUtLS0FHL3gwK21EL1dVK2dBcHJkUjlhZFRXNmlnQjlGRkZBRFc2ajYwK21OMUgxcDlBQlRUMUZPcHA2aWdCYUtLV2dCbysvK0ZPcG8rK2FkUUFVMWVoK3RPcEY2VUFGSTMzYWRUWCs3UUF0TFJSUUFnNm1sb1hxYVdnQnJkdnJTMGpkdnJUcUFFN1VpZmRGTDJvWDdvb0FLUmVyVTZtcDFiNjBBTFRSOTgwK21qNzVvQVdrL2ovQ25VMGZmUDBvQWRTRDd4cGFRZmVOQUMwMGZlYW5VZys4YUFGcHE5RDlhZFNMMC9HbUFOME5KU3Q5MDBVQVJzZzQ5elR0dEtlMzFwYUFHajd4cHg2R2tIM2pTbm9hQUVIUVVVRHBSUUJEM3BhVHZTMENDaWxvb0FRMExRYUZvQVdpaWlnWVVocGFRMEFMUzBsTFFBVWhwYVEwQUE2VXRJT2xMUUFVaDZVdEllbEFDanBTMGc2VXRBQ1VqZEtXa2JwUUE2aWlpa0FVMytPblUzK09nQjFGRkZNQnJkS1ZmdWlodWxDL2RGSUIxSlMwVUFNSDM2ZlRCL3JLZlFBVWpmZUZMU0g3d29BZFJSUlFBMXZ2TDlhZlRHKzh2MXA5QUJUVDFGT3BwKzhLQUZwYVNsb0FhUHZtblUxZnZtbjBBSlRVKzdUcVJmdTBBTFRYNlU2bXQwRkF4MUZGTFFJYXZVL1duVWk5L3JTMEFOYnFQclRxYXc1Rk9vQVE5S0YrNktEME5LdjNSUUFVMU8vMXAxSW5mNjBBTFRSOTQwNm1yMU5BRHFRZmVOTFNEN3hvQWRUUjk0MDZtanFhQUZwRjZtblUxZXArdEFDMGk5S1drWDd0TUFib2FLRzZVdEFEVDFGT3BEMUZMUUEwZmVOSzNRMERxYUc2R2dCS0tXaWdDRHZUcWIzcDFBZ29vb29BUTBMUlF0QXhhS0tLQUNrTkxTR2dCYVdrRkxRQVVoNlV0QjZVQUlPbExTRHBTMEFGSTNTbHBHNlVBS09sTFNEcFMwQUZOYnBUcWEzU2dCMUZGRklBTk4vanAxTi81YVVBT29vb3BnSTNTbFg3b3BHNlVxL2RGSUJhS0tLQUdqNzlQcGkvNnluMHdFcEQ5NFV0SWZ2Q2tBNmlpaW1BMC9lRlNVdy9mRlBwQUpTSDd3cGFRL2VGQUMwVVVVQU5YNzVwOU1YN3pVK2dCS1JmdTBwNlVpL2RGQUNtbXQyK3RPTk5idDlhQmpxV2twYUFFWHY5YVdrVHArTkxRSWEzM2hUcVlUODRHS2ZRQWpmZE5LdlFVamZkTktPZ29BS1JPbjQwcHBJL3UwQUxUVjZ0OWFlYWFuZjYwQUxTTDFhblUxZXArdEFEcVFkVDlhV2tYdjhBV21BdE5YdjlhZFNMMyt0QUMwMWZ1aW5VaS9kRkFDTjBwYVJ1MzFwYUFFUDNoUzBoKzhLZFFBMGRUUTMzYUIzK3REZEtBQ2lsb29Bcjk2ZFRUMXAxQWdvb29vQVNoYVdrWHFhQmkwVVVVQUZJYVdrUFNnQlJTMGdwYUFDZzlLS0RRQWc2VXRJT2xMUUF0TmJwVHFSdWxBQU9sTFNMMEZMUUFVMXVsT3ByZEtRRHFLS0tZQlRmK1dncDlNLzVhQ2tBK2twYVNnQkcrN1NyOTBVamRLVmZ1aWdCYUtLU2dCRi8xbFBwaS9mcDlNQXBwKzhLZFRUOThVZ0gwbExSUUEwL2VGUHBoKytLZlFBbElmdi9BSVV0Ti9qb0FkUlJSUUExUHZOVDZZblZ2clQ2QUVQU2hmdWlnOURRdjNSUUFHbXQxSDFweHByZFZvR1Bvb29vQVJPbExTSjkybG9FTlAzeFRxYWZ2ajZVNmdCRys2YWNPbE5mN3RPb0dJZWxKSDkwVXA2VWlmY0ZBRHFhblEvV25VMVB1L2pRSWRTTDMrdExTTDBQMXBnTFNMMC9HbHBFKzdRQXRJdlNscEUrN1FBcDZVaS9kRktlaG9YN29vQVJ1MzFwYVJ1byt0TFFBbjhRcGFUK0w4S1dnQkIzK3REZEtGNlVOMit0QUJSUlJRQlhQV25VMDlhV2dRdEZGRkF3cEY2MFVnNjBBT29wYVNnQXBHNlV0STNTZ0JSMHBhUWRLV2dBb05GQm9BUmVsTFNMMHBhQUZwRzZVdEllbEFBdlNscEIwcGFBQ2ticFMwamRLQUhVVURwUlFBVXovbG9LZlRQK1dnb0FmU1V0RklCcmRLVmZ1aWtib2FWZnVpZ0JhU2xvcGdOWC9XZmhUNll2K3MvQ24wQUZOUDN4VHFhZnZpa0Era3BhS0FHbjc0cDFOUDN4VDZZQ1VuOGY0VXRKL0ZTQVdpaWlnQkU2bjYwNm1wMyt0T29BUnZ1bWhmdWlodnVtbFg3b29HSWFhZnZDbkdtbjd3b0FmUjJvb1BRMEFJbjNSUzBMOTBVdEFEZjQvd0FLZFRmNC93QUtkUUlhL3dCMm5VMStnK3RPb0dJM1EwSjkwVU45MDBMOTBVQ0ZwcWZkcHg2VTFQdWltQTZrWHArTkxTSjkyZ0JhUlB1aWxQU2hmdWlnQmFhbjNSVHFSZnVpZ0FQUTBEb0tHKzZhVWRLQUducVByUzBIcUtLQUUvai9BQXBhUWZmUDBwMUFEVjZVSHQ5YUY2Q2c5UlFBdEZGRkFGWTlhZFRUU2lnUXRGRkZBeEtRZGFkVFIxb0FmU1VVVUFGSTNTbHBHNlVBS09sTFNEcFMwQUZCb29OQUNMMHBhUmVsTFFBdEllbExTSHBTQUY2VTZtcjBwMU1CS1J1bE9wcmRLUURoMG9vSFNpZ0FwdjhBR0tkVFA0eFFBK2lpaWdCcmRLVmZ1aWticFNyOTBVQUxSUlJUQVluK3NQMHFXbzEvMWgrbFNVQUpTSDc0cGFUK01VZ0hVVVVVQU4vNWFDbjB6L2xvUHBUNllDVW44VkxTZnhHa01XaWlpZ0JJKy8xcDFOajZINjArZ1ExL3VtbEhRVWovQUhUU2pwUU1RMGgrK0tjYWIvR0tBSFVOOTAwVU45MDBBQy9kRkxTTDBGTFFBMGZmUDBwMU5YNzdVNmdCcjl2clQ2WTNWZnJUNkFHdjl3L1NoZnVpa2srNGFjT2dvQVE5RFFuM1JRMzNUUXYzUlRFTFNKOTBVcDZVaWZkRkFDbm9hRis2S0crNmFWZnVpZ0FQUW1rWDdvb2ZoRDlLQjkwVUFEZmROTFNOOTAwdEFDSDd3cGFRL2VGTFFBZys4YVdrSDNtcFQwTkFDRG9LUTlSVGgwcEQxRkFCUlJSUUJXYWxwcHB3NlVBTFJSUlFBbElQdlV0SVB2VUFPb29vcEFGSTNTbHBHNlV3RkhTbHBGNlV0QUJRYUtEUUFpOUtXa1hwUzBBTFNIcFMwSHBRQWk5S2RUVjZVNmdBcHJkS2RUVzZVZ0hEcFJRT2xGQUJUVDk4VTZtbjc0b0FkUlJSVEFhM1NsVDdvcEc2VXFmZEZJQmFLV2tvR05YL0FGaCtsU1ZHditzUDBxU21JU2svakZMU2Z4aWtBNmlscEtZRGYrV2crbFBwbi9MUWZTbjBnQ21qN3hwMU5IM2pRTVdsb283VUFOajZmalQ2Wkg5Mm4wQU1rKzRhZDJwc24zYWYyb0FRMDMrUDhLY2FhUHYvQUlVQVBwSCs2YVdrZjdwb0FVZEtLQjBvb0FhbjMycDFOVDd6ZlduVUNHdDk1ZnJUNllmdnJUNkJqSlB1R25EcFRaZnVVN3RRQWovZE5LdjNSU1A5MDBvNkNtSUQwTkMvZEZEZmROQSs2S0FCL3VHbEhTbXY5dzA0ZEtBRWY3cHBSMHBIKzZhVVVBSS9UOGFXa2J0OWFXZ0JQNHZ3cGFUK0w4S1dnQkY2dFNub2FSZXArdEszM1RRQURwU0g3dytsS0tUK0w4S0FGb29vb0FxTlRoMHBwcHc2VUNDaWxwS0JoU0Q3MU9wbys5UUE2aWlpa0FVamRLV2tQU2dCVjZVdE5YcFRxWUJRYUtEUUFpMHRJdExRQXRCNlVVSHBTQVJlbE9wcTlLZFFBVTF1bE9wRzZVQUtPbEZBNlVVQUZOUDN4VHFhZnZpZ0IxRkZGQXhyZEtWUHVpa2JwU3A5MFVDSFVsTFNVREdyL3JEOUtrcU5mOVlmcFVsTVFsSi95MEZMU2Y4QUxUOEtReDFGTFNVeERSL3Jmd3A5TUgrdC9DcEtBRXBvKzhhZFRSOTQwaGpxRDBvb1BTZ0JzWDNhZlRZL3VDblVBTWs2ZmpUKzFNazZENjArZ0JEVFI5OC9TblUxZnZtZ0I5TmsrNVRxU1Q3djQwQU9wS1dpZ1ExT3JmV25VMlB2OWFkUUF3LzZ4YWZUUCtXZytsU1VBUnlkQjlhZlRKUDRmclQ2QUdTZmROUEhTbXlmZHA5TUJyL2ROS09sTmsrNGFmUUF5VDd0UEZOZjd2NDA2Z0JyL2ROT3ByOUtkUUExdXEvV25VMXZ2TDlhZFFBMytMOEtXay9pUDBwYUFFWHY5YUcrN1F2U2h1bjQwQUxTZnhmaFMwbjhSb0FXaWlpZ0NxZWxLT2xJM1NsSFNnQmFLS0tBRXBQNHFkVGY0cUFIVVVVVUFGSTFMUWFRQ0wwcDFOWHBUcVlCUWFLRFNBUmFXa0hlbHBnTFFlbEZGSVlpOUtkVFY2VTZnUVVqZEtXa2JvYUJpam9LS0IwRkZBZ3BwKytLZFRUOTRVREhVVVVVQU5iN3RLbjNSU04wTktuM1JRQTZrcGFTZ0JxLzZ3L1NwS2pYL1dINlZKVEVGTi81YWZoVHFhUDlaK0ZJWTgwbEthU21JYVA5YitGU1ZHUDliK0ZTVUFKVFYrOGFkVFY2dFNHT29QU2lodWhvQVNQN2dwMUluM0JTMEFNZnQ5YWZUWC9oK3RQb0FhYWF2M21weHBGKzgxQURxU1Q3byt0TFRaUDRmclFBK2lpa29BU1BvZnJUalRZdnUvalRqUUliL3dBdGZ3cDlNSCt0L0NuMEFSeWZlWDYwK21QOTlQclVsQURKT2crdFBwai9BTVAxcDlNQnNuM2FkVFpPZyt0T29BYTNiNjA2a2Z0OWFkUUF4K2crdE9wcjl2clRxQUd0OTlhZFNINzRwYUFHajd4cDFJUHZOU21nQnEvZG9idDlhVmZ1aWh1MzFvQVdtajd6VTZtanExQUMwVVVVQVZUMHBSMHBEMHBSMG9BV2lrcGFBQ21uN3dwMU5QVVVBT29vb29BS0RSUWFBRVhwVHFhdlNuVUFGS2FTaWtBZzcwdElPOUxUQVdnMFVHa01SZWxPcHE5S2RRSUtSdWhwYVJ1aG9HQTZDbHBGNkNsb0VGTlAzaFRxYWZ2Q2dZNmlpaWdCRzZVSjkwVU4wb1Q3b29BZFNVdEZBREUvMWgrbFNVeFA5WWZwVWxBQ1UwZjZ6OEtkVFIvclB3b0FlYVNsTkpRQTFmOEFXL2hVbFJyL0FLMC9TcEtZaEthdlZ2clRxYXZmNjBoanFHKzZhS1IvdUg2VUFLbjNCVHFhbjNCOUtkUUF4K3EvV24weHZ2TDlhZlFBaHBxZFcrdE9wRS9pK3RBQzBqOVYrdE9wci9lWDYwQU9vcGFRMENFaSs0S1Uwa2YzQlRqVEFZdit0UDBwOU5YL0FGalU4MEFSdC9yRnA5TVArdFduMEFNZnF2MXFTbVA5OVByVDZBR1AxWDYwNmticXYxcDFBREg2cjlhZlRXKyt0T29BWS9WZnJUNmEzM2xwMUFEVDk4ZlNscFArV240VTZnQnE5VDlhVTlEU0wzK3RLMzNUUUFpL2RGRGRWcFYrNktRL2VGQUMwMWVwK3RPcEY3L1dnQmFLS0tBS1o2VTVlbEllbEM5S0FIVVVVVUFKU0hxS1dtbnFLQUgwVVVVQUZCb3BEUUFMMHAxTlhwVHFBQ2lpaWtBZzZtblUwZFRUcUFDbE5KUzBER3IwcDFOWHBUcUFDa2JwUzBqZEtBQmZ1aWxwRis2S1dnQXByZmVGT3ByZmVXZ0IxRkxTVUFJM1NoUHVpaHVob1Q3Z29BZFJSUlFBeFA4QVdINlZMVWFmNncvU3BLQUVwcS82ejhLZFRWLzFoK2xBRHpTVXBwS0FFWC9XbjZWSWFqWC9BRmgrbFNHbUEybXIzK3RPcHFkL3JTQWRTUDhBY05MU1NmY05BRGsrNFBwUzBpL2RIMHBhQUdOOTVmclQ2WWZ2clQ2WUNVaWQvclMwa2ZRL1drQTRVMS92cDlhZUthMytzU21JZFNIb2FkVFQ5MDBBRWYzQjlLVTBKOXdmU2lnQnFmZmI4S2VhWW4zbSt0UE5BRFArV28rbFBwbi9BQzEvQ24wQU1iL1dMVDZZZjlhdjBxU2dCamZlV25VMC9mV24wQU1QMzFwOU1QOEFyQjlLZlFBeHZ2clRxYWY5WVBwVHFBRy84dFQ5S2RUUi9yRytsT29BYW5RL1dsYjdwK2xDZmRvZjdwb0FCMEZJZnZDbkNrUDNoOUtBQ2tYb2ZyVHFhdlNnQjFGRkZBRkkwcTlLRFF2U2dCYUtLS0FDbW5xS2RUVzdVQVBvb29vQUtRMHRJYUFCTzlPcHFkNldnQmFLS08xSVlnNm1uVTBmZU5MUUF0TDJwS1h0UUExZWxPcHFkL3JUcUFDa2JwUzBoNlVBQy9kRkxTTDkwVXRBQlRXKzhQclRxYTMzaFFBK2twYUtBR3Qwb2orNEtHNlVSL2NGQUQ2U2xwS0FHcC9yRDlLa3FOUDlZZnBVbEFDVTFmOEFXSDZVNmtYL0FGaCtsQURqU1Vwb29BYXYrc1AwcVExR24rc2FwRFRBYlNKMFAxcGFST2grdElCMU5rKzRhZFRaZnVHZ0I2L2RGRkE2VUdnQnArK3RQcU0vNjFha3BnTnBJL3UvalNta2orN1FBOFUwL3dDdFg2VTRVMC82MGZTZ1E4MDF2dW1uR21QOTAwQU9YN2crbEZLUHVqNlVob0FTUHEzMXB4cHNmOFgxcHhvQVlQOEFXbjZVODB4ZjlZMzBwNW9BWi95MkgwcVNveC9yVDlLa29BWi95MEgwcDlOLzVhZmhUcUFHbi9XRDZVNm0vd0RMWDhLZlFCSC9BTXRmd3A5TS93Q1doK2xQb0FZUDlZMVBwcS9lYjYwN3RRQTFQdWloL3VtaFB1Q2gvdS9qUUF0Si9IK0ZMU2Z4bjZVQUxUVis2S2NlbEl2M1JUQVdpbG9vQXBHaGVsQm9YcFNBV2lpaWdBcHJVNm10UUEraWlpa0FsQm9wVDBvQVJPOUxUVTZtblV3Rm9vcGFReG8rOGFXay9pTkxRQXRLZWxKUzlxQUdwMyt0T3BxOS9yVHFBQ2tQU2xvUFNnQkYrNktXa1Q3b3BhQUZwamRWK3RQcGo5Vit0QUQ2S0tLQUd0OTAwUi9jRkRkS0kvdUNnQjlKUzBsQURVLzFqZlNwYWlqL0FOWTFTMEFKVFYrK2FkVEYvd0JZMUFFbEpTMGxBRFkvOVkxU0dtUi9mYW5tbUEwOUtST240MDQ5S2FuM2FRRHFaTDl5bjB5WDd0QUVnNlVHanRRYUFHLzh0UjlLZlRQK1dnK2xQTk1CcHBJL3VDbE5FZjNCUUE0VTMvbHNQcFR4VFA4QWx0K0ZBaDVwai9jTlBOTWY3aG9BZU9ncERUcWFhQUVpNkg2MDQwa1gzZnhOS2FBR3AvckgvQ24weFB2djlhZWFBR0QvQUZwK2xQcGkvd0NzYW4wd0dqL1dINlU2bWovV0g2Q24wQU1IK3NQMHA5TVgvV04rRlBwQU1IK3NQMHA5TVgvV05UNkFHTDFiNjA0L2RQMHBxZC9yU3Q5dy9TbUFMOTBmU2tmb1ByVGgwRk5mdDlhQUhVMytNMDRVMGZlTkFDbm9hRjZDaHZ1bjZVcTlCUUlEUlNNZWFLQUtab1hwUWFGcERGb3BhU2dBcHJVNm10MG9BZUtLQjBvcEFKUzlxU2w3VUFOVHFhZlRGNm1uMHdDbHBLWHRTR00vaXAxTi9pcDFBQzB0SlMwQU5UcWZyVHFhdlUwNmdBb1BTaWc5S0FFVDd0TFNKOTJuVUFGTWZxdjFwOU1mcVByUUEraWlpZ0JHKzdTUi9jRkszU2lQN2dvQWRTVXRKUUEyUDc3VkxVVWYrc2FwYUFFcHFmNnh2cFRxYW4rc2FnQjlKU21rb0FTUDc3VTgweUw3NzA4MHdFTk5UN3RPUFNtcDkya0E2bVMvZEgxcDlObCs2UHJRQkpTR2xwRFFBMGY2ejhLZWFZT1pQd3A5TUJwNlVSL2NGRGREUW4zQjlLQUhpbUQvQUZ4K2xQRk1YL1hOOUtCRHpUSCs3VHpUSDZENjBBU1UwMDZtbWdBaS93QldLVTBrWCtyRkthWURZK3IvQUZwOU1qL2krdFBvQVluMzNwOU5UN3ovQUZweG9BYXYzMi9DbjB4UHZOOWFmUUF4ZnZ0VDZZbjNtK3RQb0FZdjMycDlOVDd6ZlduVUFNVG9mcWFWL3VHaVA3dEsvd0J3MEFLT2xOZnF2MXA5TWI3eTBDSENtajd6ZlduMDFlcmZXbUFQOXcwb3BIKzRhY0tBSTVQdmZoUlNTL2Zvb0FxbWhhV2tXcEdPb29vb0FLYTNTblUxdWxBRGgwb29IU2lnQW83VVVVQUl2VTA2bXI5NDA2Z0FwYVNscERHL3hVdEovRlMwQUtLV2tGTFFBMWVwcDFOWDd4cDFBQ2lrUFNsRkllbEFDSjkyblUyUDd0T29BS1pKMUgxcDlNazdmV2dDU2lpaWdCcmRLU1A3Z3BXNlVrWDNCUUEra3AxSlFBeVA3N1ZMVWNmMzJxU2dCS2FuK3NhblUxUDlZMUFENktLS0FHeC9lZW5tbVJmZWY2MDgwd0VQU21wOTBVcEl4U0lSdEZJQjFObDZMOWFkbW1TZncvV2dDV2tOTFNHbUExZjlhZnBUelRFLzFwK2xQTkFEVys2YUUrNlBwU1A5dy9Tbkw5MGZTZ0J3cGkvNjEvd3A0cGtmK3NmOEtCRHpUSC9oK3RQTk1icXYxb0FrcHJkRFRqVEc2R2dCWXY4QVZyOUtVMFIvNnRmcFFhWUNSZEQ5VFRxYkY5MzhUVHFBR3g5Vyt0T3BzZjhBRjlUVDZBR3AxYjYwNm14L3hmV24wQU1qL2kvM3FmVEkraCtwcDlBREU2dDlhZlRJdWgrcHA1NkdnUTJQN2dvays3K0lvais0djBwWDZENjB3SFV4dnZyK05QcGgvd0JZUHBRQTZtcjMrdFBwcWRQeHBnRC9BSGZ4cFJTUDBIMXBSUUlqaysrYUtHNVkwVUFWYUZwYUZxQ2hhU2xwRFFBVTF1bEJOTUo0cDJFU0E4VUUwek5KbWl3WEg1bzNWSG1qTkZndVBVOG1uYnFpSFNselJZTGt1YVhkVU9hTjNGRmd1U1orYW5BMURubWxEVVdIY25GRlJCNlhmU3NGeHkvZU5PcUpXNU5PM1VXQzVJS0QwcGdlbExVaGhIOTJuVXhHK1duYnFBSFZISjIrdFAzVXlROVByUUJKUlNicVF0UUFOMHBJdnVDbXUvRklqNFVVN0JjbnB1UlVaZW1salJZVnlTTS9PMVNaRlZrWTVOUExHaXdYSnNpbXA5OXFpM0dsamI1bW9zRnllaWtCelF4d0tReGlIQmI2MEY2WWgrOTlhVTFWaWJpTXh4U0t4d0tSdWxBNlVBUDNHbXUzSy9XaWtiN3kvV2dDYmZTRjZiU0dnTGl4dis4YjZWSVhxR1A3N1U4MHd1RHY4aHA0YmdWQS93QjJwTzFLd1hKZzFNaWI1M1B2VGFaRjFmNjA3QmNzbHFheCtaUHJVWk5OM2Z2RXBXQzVhcGovQUhUOUtVTlVjcllVMERKVSs0djBvTk5WdmxIMHBDL1dpd3JqNGgrN0ZPTlJRdjhBdXhUOTFNQkl2dW42bW4weUkvSitKcDlJQnNmUS9VMCttUmZjL0UwOG1tQTJQN3Y0bW5HbVFuOTJLY3pjVUFOaCs1K0pwNy9jUDBxT0Z2M1lwWkcvZHQ5S0xCY2VuM0I5S1IvNGZyU0szeWlrZHZtUWU5T3dya2xNUCt0L0NuVXovbHNmcFFCSlRFKzZLZDJwc2YzQlRBSC9BSWZyVGhUVys4djFwd29FTUhWdnJSU3IzK3RGQUZTZ1VkNlNvS0ZKcHBOQk5OTkZndUJOTjdDbHBCMHBpQTlhS1U5YVNtQVVuY1V0SGNVQUE2VVVvNkdpZ0JLRDBwYVE5S1FCNjBVRHZSUUFVVXRJYUFBVXRBNlVVQUtEUVRTVUdnQlFlS1hkVFIwcGFBRjNVMHRraWxwcDZpZ0IrNmpKcEtLQUVicFNyMEZJM1NsWHBRQXRGTFNVQUNkNmNhYW5lblVBSlNSOVRUcVJPcG9BZURpbk8zRk1OQnBEdUpIMFAxcHhwc2ZRL1dubW1JWTNTZ2RLVnVsQTZVQUZOYjd5L1duMDF2dkxRQS9GTk5PcERRQTJQN3pVODAyUHExT05BREg2VSttTjAvR24wQUwycGtQUnZyVCsxTWgrNmZyUUE4MHovbHF0UE5NLzVhcjlLWUV1YWlsUHltcEtqbCs3UUJLT2dwcmREVCsxTWY3cCtsQWhZdjhBVnI5S1VtaVAvVnI5S0c2R21Ba0pQbGlwTnhxT0wvVnI5S2NlOUFDeE4rN0ZPWThHbVJmNnRmcFN2OTAvU2dBaC93QlV0S3g0TkpEL0FLdGZwU3Y5MC9TZ0JJZjlXdjBvbC8xYlVzWCtyWDZVazMrck5BRHgwcHJmNnhQeHA0cGpmNjFmb2FZaDROTlgvV3YrRk9wa1p6STlBeVFuNVRTUjhJdjBvZjdoK2xDZmRIMG9FRGZmWDhhY0tZZjlZdjBOUG9BYW5UOFRSU0o5d1VVQVZEMXBPMUlUODFIOFA0MUNLRW9vb3BpRXBCMHBhUWRLQUZQV2lsYnJTVUFGSjNGTFNkeFFBbzZHaWw3R2tvQUtROUtXa1BTZ1lvNkdpZ2REUlFBVUdpZzBnQWRQeG9vSFQ4YVdtQWxCcGFTa0FEb0tXZ2RCUlRBS1R1S2RUZTRwQU9vcGFNVUFOUFNuS09LQ09LVlJ4UUFVWXAyS1RGQURVNzA3RkNqclRzVUFOTklnNjA3RkNqclFBVWhGUHhTRVVBTmpIQnA1cEl4eFRpS0FHTjBvQTRwV0hGS0J4UUFtS2FSODYxSmlta2ZPS0FGcERUOFUwaWdCa1k1YjYwODBpRHI5YWNhQUkyN2ZXblVoR2NmV25Zb0FEMHBzUDNQeHB4NkdraCs1VEFVMDMvbHFQcFR6VEIvcmZ3b0FrcUtYcCtOU21vcE8zMW9FVFV5VDdoK2xQcGt2M0RUQWNuM0I5S1IvdW42VTVmdUQ2VTJUN2grbEFDeC82dGZwU3Q5MC9TaVA3aS9TaC91TjlLQUZqLzFhL1NrbC93QlczMHB5ZmNYNlUyWC9BRlRmU21JZEYvcTErbEpMOXh2cFNwOXhmcFNTL3dDcmI2VUFPais0djBwczMzUHhGT1g3b3BzdlJmOEFlRkFFbE1QK3VIMHA5TS81YmY4QUFhQUgxSEY5OS9yVWxSdzlYLzNxWWg4bityYjZVbzZDbXkvNnMwNFVnRS81YWo2VTd0VFArV3ArbE9iN3ArbEFDUi9jWDZVVUo5d2ZTaWdDaVQ4MUpuNWFRbm1nSGlvTEZvcE0wVXhDMGk5UHhvcEIzb0FjM1drb0o1b29BV2tQVVVVSHFLQmpoME5KUU9ob29FRkI2VVVoNlVERlhvYUtGNkg2VVVBRkJvcERRQTRkUHhvcE8zNDBab0FXa1BXak5Kbm1nQnc2Q2xwdWVsR2FBSFVuY1VtYU01eFFCSUtXbzkxRzQwQVNFVW9HQlNjZWxHYUxDSFVZcEZwMUF5SVNBRS9LYVh6ZjlrMUJjdTBiamFoWUVkc1ZCNTh2L1BFL2l3cEFYZk1QOTM5YUJLZjd2NjFTODZiL0FKNXIrTFVlYlA4QTNZeC93SS80VXdMdm10NkQ4NlBOUG9QenFsNWsvd0Qwekg0bi9DZ1BOM1pQd0JvQXVpUmgwMjBlYTNxS3BGcENlSlFCL3VmL0FGNmJtVHZOK1MwQVh2TVk5eCtWSG1OL2UvU3FPVy81N04rR1A4S1QvdHJKK1kvd29BditZMzk3OUtQTVA5NnFISC9QUi84QXZxaktZUHpOL3dCOUdnQy81aC92R2s4ei9hUDUxUXhIL3RIL0FJR2Y4YU5zZjkwbjhTYUFML21EKzhmenBwbFhITGZyVk1JbmFMUDRacGZMSC9Qdi93Q09VQVdvSm9rbkNCaVRJZlhOWGF4ejU2NDhxM0l3Yy9kclhVN2xCeGpJb0FhM0FOSkQ5eW5TZmRQMHBrUCtyRkFEelRCL3Jmd3B4cGkvNjQvU2dSS2FqazZyOWFrTlJ2OEFlVDYwd0phWkw5dzFKVWN2M0RRQThmZEZOays0ZnBUeDBwa3Yrck5NUTlQdUQ2VTJUN2pmU25yOTBVMlQvVm1nQnkvZEgwcHN2K3FiNlU4ZEJUSnY5VTFBRDErNlBwVFp2OVcxUFhvS1pOL3F6OVJRQklPbE1rNnAvdlUrbVA4QWVUNjBDSDB3ZjY0L1FVL2NLWXYrc1k5dUtBSDFIQjkxdjk0MUptbVFBaE9SamswQUxMOXcwK21TL2RIMUZQcGdNSCt0YjZDblA5eHZwVFYvMWpmaFN5ZmNiNlVBS1B1aWlnZEtLQkdabWtCcEtRSG1zelFmbWx6VGFLQUhacE05YVROSVRRQThtak5OelJtZ0IxRkptak5BRGgwTkZOQjYwdWFZQzBIcFNab3p4U0FWZS8wb3BBZXYwb3pRQXRJVFJta1k4VUFPengrTkdhVHRTWm9BWE5KbjVxTTBuOFZBRGoyK2xGSWUxRkFDMEwycERRdlFVQUxTaW01cFFlYVlpZWtwTTBVeERsUE5PcU1WSlNHUTNVYlNJTnBBSVBVMVcrenYza0g1VmViN3BwbmxnOTZCbFVXeC93Q2VuL2p2L3dCZWwremVzaC9LcllqQTcwYkI3MENLdjJaZjd6L21QOEtQczZlcmZuVnZZS05pK2xBRlR5SXgvQ1QrSm84cVArNFB6TlhOaStsR3hmN28vS2dDa0VUL0FKNWlsOHNZeUkweDlCVjNhdm9QeXBjRDBvQXBiUU9pTC8zeUtjb1A5MzhoVnVsb0FyZ042R25BTjZHcHFLQUl3cDlLTmhOU1pwYUFJdGhxUlJnWU5MU2dVQU5rL3dCVzMwcGtQK3JGVGxjZ2oxcUNJWWpGTUJ4cGkvNjQvU25tbUovcldvQWtOUnQ5OVByVWhxTnY5WW4xb0FtcU9YN240MUpVVXYzZnhvRVRWSEwvQUtzMUpVYzMrck5NQ1FkQlRKZjlXYWtIU281ZnVmaUtBSmFaTi9xelQ2Wkw5ejhSVEVQcGt2M2Z4RlNWSEwwWC9lRkFFblFWREpJQWVham11TW5hbFZpeFBVMURaU1JaTTJPMU44NnErYVRQZXBLTEltSTcwOFR0akdlS3FqSVBQTlNxd0hVVUFXQkxuZzA4UFVKQS9BOURTcTIzcnlLcTRyRW9PQ1Q2MHBiY01VaW5QU2dnSHR6UmNMQWNuK0kwVWJDZWg0b3AzQ3htWjRwb1BOTDJwbys5VWdTVVVsRkFDMGg2VVVqZEtBRkhTbHBxOUtXZ0JhS1Nsb0FRSG1uVXp2VHFBRnpSU1Vab0FBZWFYTk43MFVBT3pTRThVbWFRMEFQenhTWnB1YVhOQUM1b3p6VGMwWjVvQWVUUm1tNW96UUE2Z2RxYm1nSGlnQjFLS1ptbEJwaUo4MFpwdWFNMEFPelVnUEZSWnA0UEZBRGp5S1JEOG9wTTAxRytYOGFCa3VhTTAzTkdhQUhab3pUYzBab0FmbWpOTXpSbWdCK2FNMHpOR2FBSDVvelRNMHVhQkRzMHVhWm1qUHZRQS9OTHVGUjVvM0NnQ1hjUFNsRCsxUWhoNi9yU2cwd0p2TXFOZnUwbE9YcFFBaHBpZjYxcWVhWkgvclhvQWtOUm4vV3BVaHFNL3dDdVQ4YUJFMVJ5OUI5UlV0UlM5VS8zaFRBbHBrdjNQeEZQcGt2M1I5UlFCSlVjdjNSL3ZDcGFpbC9nSCsxVEVTMHlYN28rb3A5TWw2TC9BTHdvQWs2VlZ1WkR0d0tsZGkzQXFyY2tBcWc3Y21reHBFWDNSZ1VtYVlTYzBBbW9MRkpvSjVBcE1qSFdrYk80K3dwQVNFOGo2VTRjMHdjcURUME9HQkl5S0JsbERsTVVnNGJweFROK0hZam9UVHhoc0dtSWxUa2NkUlVqQVlCOVIxcUVNVmZLaXB3eXZHY2R1Y1V3RUJPS0tRWnh4UlFJeSsxTS9pcDQ2R21meFVnSDB0RkZBQ1VOMG9vYjd0QUNMMHAxTVNuVUFGS085SlFPOUFDWithblpwbjhWT29BWE5HYVNpZ0JDZWFXbW5xS1dnWXVhUW1pa05JQmMwWnBLS0FGbzcwbEZBQzVvcEtLWUM1b3pTVW5hZ1E3TkdhYm1qTkFFd05LRFRBYVVHbUEvTlBCcUxOUFhwUUErbXAwUDFwYWF2ZjYwQVB6U2J4Nmo4NmExTno3L0FLLy9BRjZBSk40cGQxUjBkS0FINy84QVBGRyttWjkvMS84QXIwdVBiL1A1VUFPM0dqZC9uL0pwdkFwUlFJWEpveWY4L3dENnFUSHQvbjhxT0tZQzU5LzEvd0RyMGMrLzYwYys5RkFCUVBhbCtuK2YxbzU5NkFITG4zcDQ2aW1MMTdVOGRhQUhVcTlLU2xYN29vRUJwa2Yrc2Y2MDg5YVpGOTkvclFCSWFqLzVicjlEVWhxUC9sNFg2VXdKcWlrKzhuKzlVbFJ2OStQNjBBVFZITC9EL3ZDcEtqbDZwL3ZVeEV0UlM5VS8zcWxxT1Q3OGYxb0FrcGt1T0I3MCtvV09XSHVhQUhEMXFqYy82OCsxWGgrZ3FoY245ODFTeWtSRTBtZWVLVHRTOXFrb093NHB6WjIvV2tQUVVzaHkzdGlnQVE0NE5QR1IxcUk4R3JFV0dqYmpKb0FjallxZUtMY3JZUHVLcGhzSEZUeFM0RzBuZzBnSmtJUE5IM1c0cGlrSXJIcUtRU1o0elRBdGI5dkJINDBVeU80Q3Jnak9LS1lqTkhRMUdmdkNwQjBOUm43MUlDV2lrcGFBRU5EZmRvb1AzYUFHcFRxYW5lblVBRkZGRkFEUDRxZlREOTZuVURGcEtLS1FEVDFGTFNIcUtLQUZwS0tLQUR2UlNkNldnQW9wS0tBRm9wS0tBRnpTR2lrUFNtQTZrcEtLQkVncFJUUWFVVUFQcVJPbFJDcEU2VXdIMDFlLzFwMU5VZGZyUUFqVW1mZjlmL3IwclVaOS93QmYvcjBBSmoyL1QvNjFMUmoyL1QvNjFMbjMvWC82OUFDZGFYSHQrbi8xcUtLQkFQWS81L09seFJ5YUtBRGoycGZ6cFBwL245YVhIcit2L3dDcW1BVW85djhBUDYwbWZUL1A2MHYxb0FQclJ4N2ZwUng3VXZQdit0QUNybjNwNDYweGNaN1U4ZGFBSFU1ZnVpbTA0ZmRGTVFoNjB5TDd6L1dubnJUSWVyL1dnQ1ExR1A4QWo0SCs3VHpURi80K0QvdTBBUzFHL3dEckkvclVsUnQvcm8veG9BbXFPVDd5ZjcxU1ZHLytzait0TVJMVWNuK3NqK3BxU28zL0FOYkgrTkFEblBHUFdvbXlTTVU4bkpKN1V3Y3VEUU1lUnhnVm5USDk2MzFyUjlUV2JLZjNqZlUxTEdobEZHYWJrMUl4N2RxWkkyTWRhYy9VVWt3K1VIOGFCalFkd0lxU0NUWTRxRlRnOFUvdnhRQk5LQnUzTDBOQU9LWVcyNUZPWEpqejcwQVRSdm5nME9wVTVIVCtWUWc0TldvWERjc004Y2oxcGdJR0dLS2E2bEdJWEpYcUtLQkVBNkdvejk2cEIzcU51dElDU2xvb29BU2cvZG9vUDNhQUdwM3AxTlR2VHFBQ2lpZ1VBTVAzcWRUVDk2blVEQ2lpaWdCaDZpbHBHNjB0SUFvb3BLQUR2UlIzb29BS085Rk43MEFMbWlrcGFBQW1rUFNpZzlLQUNrb3BwQk9NSEZBRXdwUlRSVGhURU9GU3g5S2hGVFIvZG9BZlRWNy9BRnAxTlh2eDNwaUJ1S1RyUTNGSjE5LzgvalFNWHAyeCtILzFxWFB2K3Y4QTllbTlQOC8vQUtxWHJRSVB3L1QvQU90U2crLzYvd0QxNlRwN1V2V2dBL0QvQUQrVktENlVuRktNMHdDZ2ZoU2ZsUzgwQUx6NzBESHRTY2UxTHo3MEFMejcvclNjZTM2VW5IdFM4Ky82MEFPV25qclVhMUlLQUhVNGZkRk1wNDZDbUlUdlRZZjR2OTZuZDZaRDBiL2VOQUVocU5QK1BodjkycERVYWY2OXZwUUJNYWpQK3ZUNkdubW1IL1hwOURRQkxUSC9BTmJIK05QcU52OEFYUi9qVEVTMUZLY1NKajBOU0U0RlU1N2tiaHM1eDNvYkdrV0QweCtkSnVBWWMxUmFWajFiazB3dG1wdU94cGxodDRJckxrYjV6OWFVdHpUVHpTYkdrTnpTcnkxTWJJb2piTFVnSFNuQkJweElhSmZ4Rk1jWllVeFh3TnA2VURBTDZWS0Q4b0JGTUxBSUZIVThtbk0zUUdnQmVyVTlUMUZSS2NaTkFmR2FBSm1JUE9NVStCc1BnOTZoM2JseUtRTnpRQmVWMlVZemlpbzk0T0NhS29SRXZlbzI2MUl2ZjZWRzNXcEFsRkZBNlVVQUlhVS9kcERTbjd0QURFNzA2bXAxTk9vQUtCUlJRQXcvZUZPcGpmZUZQb0FLU2lpZ1kwOWFXa2JxS0tRQlJSU1VBSGVpanZSUUFVbmVscE85QUJSU1V0SUFwRDBwYVR0VEFEUUtLU2dCNHB3cG9wd3BnT0ZTeC9kcUVWTkg5MmdSSlRGNkg2MDZtcjBQMXBnREdrNis5S1Q3L3IvOWVrL0Q5UDhBNjFBQm5GTFNBKy82L3dEMTZVL1QvUDVVQUpTLzUvenhSbk5KL24vUFNnUW9Qb2Y4L25TL1gvUDZVbko5VC9uOGFPbitmLzFVd0Z6NmZwLyt1ZysvNjBmV2tCOVAwb0FkOVAwbzQ5cVErLzYwRDJvQVhQMW80OXYwcE9LWDg2QUhMNzA4VkdudCtsU0NnQjFQSFFWSDJxUWRLWWhPOU1nKzZmcWFmM3BrSDNQeG9Ba05SeC82NS93cDVwa1grdGsvQ2dDVTFIL3k4TC91MDgxSC93QXZIL0FhQUpxalArdlQ2R241cXZQSjViYnZSZUtBSTd5ZkxlVWg0L2lOVkNlZnBTWkp5VHlUU1p4VU4zTEhBbnZRUGVtZzB1ZTFBRHZXaFYzWk9jZTlOenhSbmpGQUNIUDFweUFaSnB0T1RxYUFGMkE4MUFZdm1xY25CNHBHSS9FMEFNQ0F0blBTZ3hIY1R1Tk9BcDJTT2xBREJDNUhYUDRVdjJaK3VjZldwRmMrdEswbkdTYVloSTRkdjNtL0twQXNZR2R1YWppM1NqZHRPTTFaV0pjWXppbUl1UndxVUdFVnVPdEZRcjhvd1A1MFV4RkpldjRWRy9XcEY2MUcvV29LSkIwcGFCMHBhQUdtbFAzYVEwdjhOQURJK3BwOU1qNm1uMEFKUlJSM29BamI3d3A5TWI3MVBvR0pSUlJRQTF1b29wRzYwdElCS0tLU2dBNzB0SjNvb0FLTzlGSjNwREFVdEpSUUlXazdVVWg2VUFMU1VVVXdIaWxGSUtVVXdIQ3BvdnUxQUttaSs3UUlrcHE5RDlUUzBpOUQ5VFRBUW4zL0FGLyt2U2ZoL244cVZqbWs2ZTM2ZjRVQUxuUGVqcDdmNS9DazYrLytmeG96UUF2WC9QOEErdWdIMG94N1V1RFFBaDkvMXBSN2ZwUUYrZ3BkdnFhWWh2NVV0TzJqMy9PajVSNkNnQm85djBwY0U5cVhlT3h6OU9hTng3S2FBQUthVUo5S1JuMi9lS3I5VFRmT1U5SHovdXFUUUJLQjc1cHdxRGNUMFdRL2tLa1FuSEl4K09hQUhub2FrN1ZFZWhxV21JU21RZjZ1bkh2VElQOEFWQ2daSWFaRi9ySlByVGpUSXZ2UDlhQkVwcU1mOGZCLzNhZWFqSCt2Yi9kb0FselZEVVd3VkhxS3ZWbmFqektvOXFUMkdpRE9LQ2VsSTNCcGhiSjRxU2lUUEZMMnBtZU1VaGJOQUQ4ODB1YVlPbExtZ0IyY21uclVTbmlwRW9BVW1tOWFHNjRwdWFRRHhTaW1xYzBySDVhWUNsaDBGT1ZSMWI4cVlnd00wNG5IRkFpVU9BT0JpbkxLQjFKcURrMG9GTUN6NW5vYUtyN1Q2MFVBT1hyVWI5YWtYNzFSdjFwQVNqcFMwaTlCUzBBSWFQNGFEUi9EUUJISDk0MUpVY2YzalVsQUNVQ2lnZGFBSTIrOEtmVEcrOEtkUU1LU2lpZ0JyZGFLRzYwVWdFTkZGRkFCUlNkNldnQXBPOUxTZDZRd29wS1dnQXBEMG9vUFNnUVVVVVV3SENsRklLVVV3RkZUeGZkcUNwb3Z1MENKS2FuSS9HbHBpNVZUMHhudWFZRHlNOTZBb0grY1ZINXFucElwOWxHYVhjVDBFaC9UL0NnQ1RBOUJSdVVjWkFxUERIK0JmK0JObWpFbjk5UjlGb0FrM2VnUDVVWlBwK1pxUHl5ZnZTT2Z4eC9LanlZKzY3djk3bitkQUNtVlZPR2tRSDB6U2VhRDA4eHZvdFBBQ2pDZ0Q2Q2x6UUF6Y3g2UkgvZ1RmL3JvQWs3ZVduMEdmOEtmUlRBYnNjL2VsYjhBQlI1Uzk5eCtyR25acE40SGVnQlZSRis2aWo2Q25acU15cU85TjgzUFFFMEFUNXBRYXJscGNjSitmRk9pTW0zOTVnTm5vRFFJbUo0cVdxNVBRZXBxYW1BRThINlUySC9WQ2h2dW42VVEvd0NyV2dCeHBrUFYvd0RlcDVwa1A4WCs4YUFKRFRGLzF6ZlFVNDB4ZjlhLzRVQVNWbjMvQVBybHEvVk84akxobUhWY0drd1JUZklibW94MXlhZkkyY1ZIM3FTaHdOSVBVMFVNTVlQclFBdTdtbHo4dE1IM3FWYUFIYnNWTEd3eG1vZTJhZEgwb0Fjellha0QwUFRCeFFCTXZTa2ZrZ1Vpa1lwcGI1NkFKMUZKbm1sNkxUU2NqSW9BZHVQYWpKcVBOTG1nQi9QclJUYzBVQ0oxKzlVVW5XcEYrOEtqazYwQVRMOTBVdE5YN29wYUFBMGZ3MGhOTG41S0FJNC92bXBLaWpQem1wTTBBRkE2MGxBNjBBTWI3d3AxTWY3d3AxQXdvcEtLQUd0MW9vYWlrQWxGRkZJQTcwdEozcGFCaVVkNktLQUVwYVNsb0FTanRSU0hwUUF0TkpJeGdVdEZNUThVb3BCUlRBY0ttaSs3VUFxYVA3dEFoOVJSeG9jc1VVdGs4a1ZMVWFFQmVUM05NQ1NpbUdSUjNwcG1VVUFTMFZENWp0OTFHUDRVZnZUMkMvVTBBVFpvM0QxcUh5MlBXVDhoUytXbmNzZnFhQUhtVlIzcHZuZy9kNStsQUNMMFJSK0dhREtCL0ZRQWJwRDBRL2p4UmlROVNvL0drODBIcGsvU2dNekVoVjZldEFEdkw5WEorZ28ySjZFL1UwYkpEMUlGSThaV01zV0pOQUQvQUpSMFZSK0ZCbEhUTlBTSk1BbGNuM3A0QUhRQVV3SUE1YjdxazA4SzdIb0I5VFRvL3Z2OWFmUUJHNjdTbk9TV3Fhb3BmdlIvV3BhQkRYUHl0OUtXTC9WcjlLYS8zRytsT2ovMWEvU2dCYWJEOTF2OTQwNG1tUWNwK0pvQWtOTVQvV1ArRlBvamlmY3gybms4VUFCcU5lWkgvQ3JIa251eWo4YUJGR2hKTEVrOWUxQUdQY1FGRGxmdTFWRmJiYk1FYmM4ZDZ6TDJKWXB2a0dGYmtDa01nelM5UVJTWnlLT3dOSVkwR25BMGpEQjlqU0EwQVNEa2tVNkx1S1o2R25wOS93Q3RBQVR6aW0wTWNOU0dnQi9ZVXduNWpVZzZWRjNvQXQ5WWhnOXFZRGc0cHNiNFVDbk1PL3JURU5iNVd4UURRY01PYWFCNzBnSktLYitJb3BnV0F3elRId1RUZDNOSVJrMGdKMEl4MXB6WUFIekExWEFJcHcrdEFEeVI2MG5tTGpHYWJ4U2ZoUmNCVndDVFR0MU00b3g3MGhqOTFHZWFibjFvTkFBUms5YWRUTUdsK3RBQzBsRkZBRFc2MFVqZGFXZ0Fvb29wREU3MHRKM3BhQUNpaWlnQktXa0ZMUUFVeHM4WTZkNmRRYUFFcER4UzBocGdLcmc5OFUrcTdDaFdaYUFMTlNvZmxxc3NvUFhpcEJLb0hXbUt4Tm1veEdEeVdibnNPS2phZGNFQ21HNElHQUtMaFlzQkVIOE9mcWFjQ0Y2QUQ2REZVek01cUlTTXg2MFhDeGZNcTkycGhuVVZYUFdta2NVWEhZc0c0SjZDbW1WajNwaXFTQlVxeDBBUmtzU01uclU2UmV0SXk0ZVA2MVAwcHBFdGdpZ1VrWDM1UHJUeFRJdnZQOWFZaVdtVGY2azArbVRmNm8wQVNyOTBVdmVrSFFVNEEwQVJ4L2VmNjFJS1JJaXU0bkhKelVnQ2p2OEFsUUJESi9ySS9yVXVLWEs1empKSHJTN2oyRkFER2paMUlVZGFlc1pWUUNRUHhvK2MwWXgxWUNnQlBKai9BSW1acWN2bG9NS241bWt3bzlhQzZqMG9BZjVoL2hHUG9LQ1hQWDlhaGE0VWQ2amE1OUJTdU94WngvdGZsU2ZLUC8xMVROdzVwTjdOMUpwWEh5a3JPQm1xbCt3ZllmU3BEMHF2YzlGb0N4WDR6UVA0aCtOSWFYT0dCTkFBUG1VanVPUlRNMC9sV3lPMU5sWGEvSFE4aWdCeThqOEtjcC9TbzBPRCtOT1U0WWlnQlhQT2FRbWxmcFRPMUFFd1BGUjU1Tkt2U21FNFkwQVNMa3Jtbmw5M0hlb2xiNWVLT2V0TVJJQ2FEenpUQm5QV25nWm9BTWdVVWg0T090RkFFb0lIYWdzYzhjVXVLVEhla0F1VDYwdlB0VGFYNjBBS01DbDROSnhSbWtNWHZTWW9ISnpUcUFFNlVVVVVBR2FZZHhOT05GQUFNOTZVaWtwYzBBTVlHaW5Ia1VtS0FFcGFTbHBERTcwdEozcGFBQ2lpaWdCS0tCUlFBVWhOTFNHZ0JLUTB0SlRBYWFNVXRMaWdCbUtRaW43YUN2RkFEQU9LYWV0VEltVnBoWEJvQVhGTlFmUHdPOVNEQVBOT2hqR2QzSkhiTkNBVm8vbXBycGhNMVpJeWMweVZTVXdveWFxd3JpeHA4bytsUHhUa1hDamp0UzQ5NllpT1QvV1IvV3BLTnE1Qkl5UlRzaWdRZ0ZFY2JLV0o3bk5PeWFNRTBBT3dQV2pDOXhuNjBZOVRSd08xSUIyNzBGTGttbTdzZWxOTXlqcTM2MEFTWVBjZ1VZSHFUVmMzQzl1YWphNWJzTVVyanN5N2tEdFNHVURxUUtvbVZqMUpwUVJTdVBsTFRYQys1cU0zRGRoaW82UHBSY2RrQmxjOTZUSlBVMHBIcUtNZWxLNHc0TkxnVTA4VUEwQU9veFJtZ0dnQkRWZTQ2Q3JEZGFndVB1VXhGV2c5S0IxcGUxTVE0OHFEK0JwclpJQXowcFk4c0dYOGFFT0hCUElvQWpGUEhMWjlhYXcydGluTDAvR2dBZk8ybWc0SE5QYnVQV21FVUFLcmNVeHV0TFNOUUFxR3BBYzhWRXA1cFFjVXhEelNocVRjRDFvQzgwQU8zVVVvSzQ1b3BESmMwNGRLYjNwUjNwQUtCUzAzTkc0Q2dCVFNacEM0cU11U2FBSkJSbjNxUGR4VE4vUFUwQVRsZ09LWGNLcmw4bWdQMUZBRSs2a0wxRnU0SE5KdTVvR1NFL04xcGQyTzlSWjVwckU0NG9BbFNYTDdhbjdWUmhVaVFFK3RYUWVLQkNIclNVN2Ivd0RXcHRJQTcwdE43MHRBd29wYU1VQU5GTFFvcDJLWURhUTlhazIwakQ1aFFJYmlqYlVtMmpGT3dFWlhpbEM4Q25zTXFRQlRsVTRIRkZnSTl0Qlg1VFV1ejFOTHRIMW9FUlJENUJUdkxIOTJwQmdkQUJSVEFaNWVSamdVNUVDcUJuTkxnMHVQVTBBSEhwUm1sNG96OUtBRGswdUtZWEE2bkZNYTRRZE1uNkNnTEUyQjlhWElGVkRjc2VpajhUVEdtZHY0c1VyanNYaTRIVTRwaG5RZDgxUkpKUEp6UlN1UGxMaHVSL0NLWTB6bnZqNlZBQlRnY1Vyc2RrT0pZOVNUU2Mwb09hV2dCT0tXakZKMG9BWEZHRFFEVHFBRzVJcDRhbTB1S0FINW95S2pwUWFBSDVvcHRLRFRBWHAwb0I5YU9EUmlnQkc3VkRQOTJwbUhGUVRmZEZBaXNhVVUxdXRLT2xNUURocVdtbnJUaDBvQWxtUlNxc3JBbmFNMUVoNSt0QjU0cHZUZzlxQUh2Mk5Kako5cUc2Q21nMEFCR00wMDhpbnZ5ZUtaMm9BQjFvTkZPTkFBQ2NVcEp4VFIxcDQ1NG9BYlJTNXh4UlFCTXo4OGRhUVNmTUtaTDhzbjFwQWNta0E1bklZZzAzY1RUcEJrQnFqL0FBb0FkdTk2UWs1b29OQUJtbTBNZnlwTnkwQVBBeWFSaGptZ1A3VUVscUFGVnVsS1RnMUVRUWVUVHVNVUFCZWt5Y1VaK2JwVGsrWnZhbUJLaUVFYzFOVE1VL0ZJQnlOZzlNME1NbklwRkhOUEE1b0FoL2lwK0tYYjgrUlRndEFEUUtYSEZQQzB1M2puaW1CRkdPS2ZpbkJWVVV1UjZVQ0c0OXFReGtzRG5HS2ZrMGNtZ0JObzlhWEFIYWpIdlJ4UUFabzVOR2ZhamQ3MEFHRFJnVXhwVUhWaFViWEFIUUUwWEhZc2NlbEdhcUdkajB3S1lYWnVyRTByajVTNDBpanF3cU0zQ2pvQ2FyWm9vdVBsSmpjTWVnQXBqU00zVmpUS0tWd3NCelJta3lhU2dZN2lrcE9LWE5BQ2lscE90S0tBRnp4UzVwS0tBSGdpblZHS1VNUlFJa0ZGTkJGT3pRQVlwY2tVbExRQVpwM1dtVWdiQnhRQThpaWtEVXZCcGdKUU9LWEZKUUF1YWNHOTZaUzRvQWVUeGlxODMzYWx5UlVNM1Q4YVlpdTNXaGFEU0RyUUlVOUtXTTBHbXFjTURTR3h4NjBOMXo2aWh1RzRvNEtuMTdVeENHaytsRkpRQUU4VWxMMnBLQUNuRHBUYWN0QUJpbkRnWm9GRzdtZ0JLS0tLQUo1NHdWVTU2OTZyaGdHd2FtQitVcG5wMCtsUk9vemtkYUJFaXNHQkg0MUV4SVBBbzNiY1lxUmxCWEkvQ2daQmxxQ0NSMXBlUjJwMk9LUUVlMG1qRlM0cGhIemUxTUJRdnZpbEE5NlFVNmtBMC9TbWs4VThpbUhyMG9BT2d6VDR1Z0hlbUhzS2xqd0RUQXNFZEtmaWxKSGFqTklBQXhUZ0I2MDA5S1VaeFFBNFlCNlV1NzZVZ0E3MHZIcFFBWk5HRFJuNlVoWURxYUFIWTlUUnhVUmxRZC95cGh1UFFmblJjTEZqZFNidmVxYlR1ZStQcFROekh1VFJjZktYR2xRZDgvclViWFBQQ244YWhCejFwQ0tWeDhwS1pXYjdweFVURjg4a21rNkdsRDU0Tks0N0NidlduZGFhdzdpbTVvQWVSU0hJb0RldEdhQmpjMGJxVWpOTXdSUUJKbWx6VVdhVU1hQUpjMGhBTk5EQTA2Z0JNWW9wNEhxYUdUMDVvdUEwVW9wdEtDUlFBL2lqRklEbWxHYUJDMFVVVXdEbWxERVVDbHdEUUFvYWx6VE1ZcFJRSWZtaW0wdEFCVGhTVXRBQzVwZURUYUtZQ2tlbEhTa3pUZ2FBRXFHZXA4Q29Mam9LWWl1YWJUcWFhQkRqVFQxcDNha05JWTdxQWFTaER3Vi9LaW1JQ0tiM3AyYWFldEFCU1V0SlFBb0ZPQTVwbzYwb2JCeFFBODhDbTBaelNVQU94UlNab29BUlplZWxLeHpnMUJuNXFrSm9BbmpBZU5vOERKNUI3NXBJSE1aS0hvYVpHZHB5RFRpQkl4eHczWVVDRWxHSlQ2SG1taXBKRGxGWTllaHFNR2tNZFRlbEwzeFNNYUFEcFNic0RtbTd6U0U1NjB3RkxrbkFwTThVbk5JYUFIZzk2a2pKeVBlb2hVa2JaWVVBWHNjVVpxTXlEdFRUSlNIWW1KcEM0QTVOUWJ5ZTlSa21sY0xGa3pvdmZQMHBodUNlZy9Pb0tLTGpzU0dWei9GK1ZKazkrYVlEUzVwREZvcEtLQmkwbWNVVVVBR2FYTk5velNBZFRhTTB1YUFFQnhRZWFDS1NnQmNVbVNLQWFYTkF4Y2cwVWxGQUNFQ2t4aWxKTkdhWWhLVU1SUmdHa0l4UUJJR3A0YkZRVTRFaWdDZklZYy9uVFNuY2NpbUJnYWVHeDBwQU5wd09LZGtIcitkSVY5T2FZQzVvcHVLTTBBUG9GSUtVVUNIQTBZQnBLV21JUDFvelFEUzhHZ0JBYWNEbW1sYVRCcGdTVVUwWjlhT2FBSFV1S2JtbERZb0FkajBxdmNubGMxUGtWWHVqOHkwQ0lhVHZTbWtIV21JWDNwS1drcERFNkhJcDdldnJURFRsT1Z4NlVDRXBHSE5MUVRtbUEyaWlsQTVvQUtEbk5MUlFBVWxLZWxKUUFob3BhS0FJdUFlZWxTTXZHUnlLandXT1RVaW5GQUNLM3JVb0hJUGNWR2NIcFNxMkR6UUJMY2NTZlVBMUZUNVgzdm4ycU10UUFidWFROG1nRUNrTGlrQWR1S2FjVUUwbU9hWUNqaWpITkpubWxVNU5BRHh4VGs2MHcvV25vYVFFb1BOTHU5UUtabWx6VWxpNUZJUm1pa3pRQW5Ta3AxR0tReHRMUlMwQUlEUzBsR2FBRnBwT0tkU0huclFBM05HYUNNVWxNQmMwWnBLQnpRQTdOTG1rQ3RUdG52UllMb1NrcHdVZXRLQW9QSU5GbUxtUTJpbk1CMnB2U2sxWWFkd3BNWXBhS0JnS1VHbTBvTkFDbFFlbE5JeDFwd05PNjBBUmluQWtVcFQwcEFLQUhoczA0R21BVW9vQWt5RDFwQ3ZwMHBBYWNEUUliaW5BMHZCNjBoeFRFTFJTWW96UUE3TkZBeFJURUtEUzVwdEZBRHNVVWxHYUFGeFNVdEZNQktyM0orWVZacXJjZmY4QXdvRU03VW9OTlU4VXRBQzlxVFBhbEI0cEc5cVlncEFkclpwUnpTR2tBcDYwZFJTQThVQTB3RXAzU2tQV2t4UUF1UlNicU1VVUFGS0tUdlNqclFBdUtLTTBVQVJnMFUzbWxvQUNhWFBGSlJTQU56WXhtanRTVXRNQXBEUzRvSXdLQUU0elJ4MnBwUHBTWk5BRGlCU2ppbWcwWnlhQUhDbnIxNXFPbnJRQktQV2ltWnhUNmdzV2twS1drTUtNMFVsQUMwVVV1S0FDaWpGTHgzcDJZcm9iUno2VTRrVWJxZktMbUV3YUNncFIrdEpuMXAyUXJzTm9IYWx5S2FUVFdhbUllVFJuaW95MUlXd2V0QUVoT2VsSnU3WnFJdnpUY21nQ2NTQVVvSWJrVld6VWtSNmlsTFlxTzVMUlIxb3FDeEtLV2xCOWFBQUNsNlVVdEFCUzBtS0tBRnhSUm1sb0FLTTBVWm9FS0RUaFRLVUdtQTZscEFhS0JCaWxCb3BEUUE3SU5GTnhSbW1BNmlnSE5GQWdwYzBsRk1CYzFWblB6bXJCcXRJZm1OQWhpMHRJT3RMUUF1S0RTVXVjaWdRbEZGRkFDRGcwSGcwTnlLT29wZ0dhV2twS0FIVTNORkZBQzBxMDBVbys5UUF0RkxnMFVBUTBEclR6Zy9XbVk1b0FkU0hwUlFhQUZ3S1EwbmVnOG1nQmVsTVppVGdVN1BPS1VEdlFBekdCelNVNXVUUmlnQkFNMGc0T0RUeHdPT3ROeDgyYUFIVTVhUlZKTlRLaWpxYVFEUlMwNGhlMUppbFlxNG1EUzROR1RuMG95YUxCekFNZDZYajYwMXVSMDVvQjlhZGhYWS82VTNQclNFMG1RYVloMjZrelRTY1Vab0FVbWpPS1lUejFwTjFBRHkxSVdwbTZtazBBUDNtazM4MHpOSVRUQWNUU0ZzMDBta3pRSWNUUm1tNW9Kb0dPelVzWFFtb0JuTldFWUVjMUxLUThHbkNreFZtRzFaL21iNVY5K3RRVmV4QUZMSENnazFhanRBQm1Wc0gwRlRxRWlHSTF4NzBoSlBXcVNKY2hnZ2hIWnZ6cEd0a1AzSHg5YWZTMDdJbTdLelc4aTlzajJwaEJIQkdLdVpJNkdnbmNNTUEzMXBjcFhNVXNVbFd6RkdlbVZOUnRidDJJTkt6SHpJaEJwYVZvMlU4ZzAwSEZJWXVLV2t6UlRBV2xCcEtLQkRzMFUzTk9CSGVnQW94UzBVQUpTNW94U0VVQU9wS1NselRBS3FTZmVQMXEyYXBzY21nVEVwYVNsSFNtSUtCd2FLRFFJVTBsRkZBQzBnNjRvRkJvQUtEMXBEUjJvQUtBS0IxcDQ2Y1V3RUJ4UjFJcHVNVTlhQUZvcHd4UlFCWEZIV2tHUjBGUHgzb0FaMDRvcHhYUFRyVGR1RGcwQUlTS1RQY1VZcDJQU2dCQUtkZzkrS0JtZ0E1NTZVQU4raG94elR5b3p3T0tNZWxBRFFDS2RnRVV2WGlqR0tBQVpBcHc0cE9LVFBXZ0IzYm1selRNa1VicUFGSnh4UnU5YWF4NG96UUEvUEZJU0tadXBDZURRQS9PUlNGc0NvOStPbEpuUE5BRDgwRit3cU10U1pwaUg3cVRkVE0wWm9BY1RTWnB1YVROQURzMGhOQTZjMHVLQUc1b3dmU24wdVRRQXdMNjA0TFM5NktReFF1S2tVWXBxK3A2VkpicUpwZHArNk9hT1VmTVdySURlV0s3bEhmdG1yak1XcGlnS0FBTUFVdEFyaFJSU0dnQXBhYlMwQ0Zvb29vQUtLS0tBRjNHa1pJMis4dVBwUlJRQkUxdi9kTk1NYktjWU5XS1VFanZTc1BtWlV4UlZza045NVFhWVlrYjdwd2FWaXVZcjBVOW9uWG9NL1RtbzgwaDNGQnhUZ2FaUlFCSlJUTTRwd1lHZ0F4Um1paWdCRDBxbVR6elZ6Rk1kRmI3dzU5YVltVnMwb3B6UkVjcWMxSGtnODB4RDZPMUE2MG5RMENGbzZpanJSME5BQ1V2VVVFVWdOQUJSUWV0SlRBWHBSdXhTVVVBU2NNT0tCd2Fhb3dLY0RtZ0IxRkc2aWdDUGlrSko2VVpKb0ZBRGh4emlseUQxRk53YzlhS0FFMjU3VW9VVW9KNmcwZ05BRGd0Tm9MWnBDYUFEdlJTWnBNMEFQR0tWMkJBQTZVeklwTjNGQUM3cU0wd3RUV2FtSWtQWGlrM2MwemRSdTlhQUpOd3hpbUZ1d3BtYVNnWThuZ2MwMHRTWnBNMENGelJtbTVvelFBcE5KbWtwY1VBR2FPYVhGS0JRQTBDbkFVb0ZIV2dCT2xLUGVsb3h6UUFnb3B3b3hRTVRqRktDRjY4MHFxaE9DK3dudVJ4VC9zY3JETVpXUWY3SnBvUkN6RnF1NmV1QVdxcDVUTElGZFN1VDNGYWtVYXhydFhwUTJCTFJTVXRTTUtEUlNVZ0NscEtLWWhhTTBsRkFDMFVsRkFDNXBhYlJRQTZpa29wZ0xSU1V0QUJTRlZZNVpRVDYwdEZBRVRRZy9kYkgxNXFGd1lnUytBUFVkNnQxSE9vYUp3VGdFZGFWa083S3djTjBORlZyYU5wTnhCd0ZIVTlLczdXSERkUlExWXBPNG9ZaW5Cd2V2RlI4aWpyVWpKYzAwbW1aSTcwMHlab0FIYXFzekVzQ0ttWTVxRnhtbmNsb2ZFK1Y1NmluRWdpb1UrVnZyVHlDRHhURVNyeUtHUHBUREpnWTcwQTVvQWtCeUtaUXB3YUQxb0FPMUZBNjBkNkFGQnhTN2VjOXFSZVRpcFFBQjdVQU1IcWFPdEt3Tktvb0FjRkdLS1dpZ0NDaWtQV2cwQ0Z6aWdHazcwaDYwQU9wT3A5RFNaeDFwTS9uUU1jVGpnMG5GSXh6OTdyNjAwbGgxNUZBRGlSaW01eFJ2ejFwTWoxcGlEZFJta0p6U1VBTG1reUtTa3pRQVpvelNacEtBSFpwQ2FURkxpZ0FveFNnVTRkYUFHWXBjVkl5cU1iVG1reHhRQTBDbEF6UWZlbG9BU2x4U2tjY0NnVURFeFM0b0E5NkNQU2dBb3hpa3pUZ2VPYUFFNlV2UVpwcHB3SkF4Mm9BYTNJcHNjaGpiSzlmWE5TZGV0UnN1RG50UWhGMWRSQlRFa2U3Mk5XSUxpQ1FZRGxTZXpWa25iMnlLVE5Pd0cvdDlDRFNkS3hZNXBJejhqbjZWYmkxRmgvckJtbFlMbDZpbUpjUXlBZk9BVFVtM0l5cHlLVmdFb29vb0FLS0tLQUNpaWlnQW9vb29BS0tLS0FDbHBLS0FGb3BLS0FGcEdUelZLZW94U013VlN4NEFxdEpkQW8yeG1VbmppbUJhQ0piUStXbyt1YXJFOGtrNXlhZ2dta2x5SFlrRHZVM1NvWmFRSG1ta1lwYzBacEZER1BGUW1wbkFJcUZnYVlodVRRZWFLU2dCQ0tsSHpESnFPcEY5S1lpT1JlOU15UlZobDRxSmw0cGtpQi9XcEFjaW9kdE9ISGVnQ1NsNjB3dGptbnhuTkFFaWpBcDJhYitOT0E0b0FVS1R6VGlNVWdiQXB1NG1nQlNhS2JSUUJEU0hQclNacHBOQWgrYVF0VGMwaE5NQjI3aW01cHRHYUFGSm8zRVVsSm1nQnhiTk5wTTBVQUxTWm93YVVyaWdCdExpbEFwY1VBTng3VW9GT3hRQlFBbUtVRGlseG1qRkFDQVVZcGFPOUFCbWcwRVk2MFVER2tVbzk2WE5LT25OQWdJeDNvQTcwVVVoaW1qUHJSbmlrNjB3RHJSZ2pyUm4xSEZIU2dBR0RUc2RPS1pnOWFYOGFBRjY5Nk1CdURRT2FNRU56eFFCRzZGU2ZhbUNwNUdHT0RVSjROVVNGSlMwbE1CYXN3WFhsUllCSVlWVm9wQWFTNm1jZ1NJQ1BVVmJTYUdVRGEyTSt0WVZTUnlsT3dOSm9adUZEMUhJOXFiV1dMeVJWK1NRZzU2R3JNTjZXS2ViazllbEt3RnVrcUdXN2l3REVNK285S0V1WTI2bmFmZWxZQ2FpZ0VFWkJ6UlFBVVVVVUFGTFNVVUFMU013VlNXUEZJekJGSlk0RlVKNWpLZlJSMnBwQUU5d1pEZ2NMNlZYWnpqYUR4U0ZnVDdVYlEyTnBKUHBUQXRXdkVmMU5UVkhBTVJBVkpXVDNORnNCR2VsTk9SVHFNK3RJWkd4cGhxUmx6MHBWaUFHWkRUQXJrWnB1MDlxdG1OQnlGSnBoeDZZcDJGY2hWZWVUUzR4VGpTZHFZaGMweHV0T3hURzdVQ0VJcHVLVTVvelFBRG5pcEZHeGNVeEJsdnBUenlhWWlSTVl5YWRrbW8rZzRvVW1nQ1E5S1FVaXR4aWxvQU1VVW5XaWdDcm1tNXBNMG1hWWgyYVROSm1pZ0JjMG1hQUtYRkFDYzBZelNpbHhRQW1NZldsNHAzWDYwaDYwQUpTNG9IRkxRQWxMeFNITkx0NHpubWdCS1VDa0h2UysxQUQwSVU5S1JnZW82VXBZWUdCakZKdXlNVUFOelJtbC9DazcwREZvNW80RkE1UFBTZ0JEUjJwZS9GSlFBQ2pKN21pbHhRQUVnaWtwZHRIT0JRQW4wTktPYU9EUzlPbEFDSElvK3RGSDFvQU00NlVGc25Kb3lLTzFBRVI2MGxLM1drcWlRb29vcGdGT01iQVpJT0tiVnRKaGdEcU1VQVZLS3UrWEZMMEhQdFVMMnpEbFRrVWdJS1VFanBRUVFjRVlvSGVtQXF1UUQ3MDVHeTR5d0ZSMFVBVC9hSFZ1Rzl1S3RSWG1Vd2NiaCt0WjlLcFplUlNzQnNSeTcvd0NCaCtIRlNFWTYxbUc3SkhHNVNPbURVbHZleWxzT1F3OURVMkdYcVJtQ2pKcWovYURFNEtLT2FQdFNESkdXYjM2VVdBZGNsbVhjN0FjOExWTm03Q2xrY08zR2FaVEFTbEJ3Y2pyU1V0SUM1R3hJR2U0cVFHbzFSZ2d3M2JvUlNqZDN4VU0wUkpTWnB1Y1V1YVF3enpUaDc4bW05T2dwTWs4Wm9FRHNUME5SRW52VWhHTzlOYm1tQXpkVGd3SGFtN1RSdE5NUTdkN1ZHM1duWU5KaWdCdEZMaWdESnhRQTlCaGFjb3lhRFRrRkFoQ0tPMVBLZzBoWEZNUTNQT2FYTklSUXRBRGczSFNpa09LS0JsSEZBRkxTNDRwa2lZb3hUcVRGQUJpbHhpaWpKb0FNVURyUzVwT1JRQXRGSjNwZmVnQk9jVW9GQTVOR09hQmh6UzR5Y0U0RklNOXFYSEdTZWFBREhZOUtCNzBmalNrN2gwb0VOTktBY1VZNG9VN2ZlZ1lIQXBCVHp0eFRTTVVDQVVVQTBIa1VERVBGRkxRQU1aelFJU2xQdFJUZ0JqSU5BeHZJb0ZCeVR6elFQMG9BQjlhQjlhVG9UUzVYSGZkUUFZNzBIMnBBYVU1Nm52UUlRVXBwUHBSUU1ZMzNxYlRuNjlLYlZJUVVvR1NBYVNpZ1JaTnR4d2FZSThaRGc1QTdVMFN1QmdHbnBLVGdFMElCcXNWYkk1cXpITUpEakdEVVRoV1lZeHljY1U0VytHeVcvS25vQk02SzNEQUdxOGx0M1EvZ2FSOThiWkRHcEk1OTNERG4ycFdBcVl4eFNVcFB6R2ltQVV1NDBobzcwQUpUbDYwaDVOR2Zha0FVQ2w3VWdGQUMwVTk0eXFBbnFUMHBsSVlVQVpJb3A4YUVzbWU5SUM5MnBEUm1qTlpHb2hGTklwNTRwcDVGQURkekR2UnVPS1FqRkptbUFic25uaWxwcDVvd2V4b0VPQXp5VHhTRStsTnlhTSsxTUxDNW96N1UzTkxRSWRrVW85YVp6VDZBRnA2MHdkYWVEVEVTaEFSa21uYkY2VWg2Y0dtazBBT01hSHRUZkxWYWRtbTd1S0FJWEh6Y1VVT2N0UlFCVW9vRkxqSnFpUTYwZEtPaHBPOUFCU2pINDBsQW9BVTBsTFJRQWNpZ2MwR2pKb0FPL05MeG5yU0drSFhtZ1l2UThVdEptZ0dnUVU0SE5MSnNMWlRPUGVtWjlLUXh6Y25yVGM0UEZGQk5NQmNVaDlNMGRjVUhpZ0E2VXRKMm96NlVBS2NjVVVIa2M1cE1VQUxubm1nbk5GSnhRQXVQU2hjWjU0b3pTVUFLVkhyU2QvYWp2Um1nUWU5TG5nVWg0b29HQkJGSHRRYVFZOUtCRFg2MDJuUDFwdE1BcDZ4c3lrcU00cGxTUXllVy9QUTlhQUc3R0hWVCtWVHRiRURLdG42MVlEcXc0eFFjTitGRnhGRXF5SG5pcEk1eXZEY2lwMmpXUUE1elViMnhIM2VhcTRESkgzTUNPbE5VNFlFY1U3eW14MG9NYktNa0dub0laSW0wakJ5RFNxQWtveVFSVWRHYVF5NjNsT3VUaXFwVmNrWjcwb2ZrWkhHTVUwbkJOSUNXS0JYNXp4VG10UUJrTlRFbUFYR08xT2FjN1RpZ0N1YW50MEIrWTlCVUZXb09ZVG5nRHZReG9qbmtEa1k3VkZSUUJrZ1VnSHhSN3ljOEFVOUd6T0NPbmFtYjlvSVRvYVdEL1dmaFVzYUxXYzBacHRLRFdab0JvcGFTZ0FOTVlVNmtvQVljaWx6UzBoRk1BNE5JUlNjaWdHZ0FwTVU2ZzBBSXVjMDdOQUhHYVhGTWtjcHAyYWp6enhUK3RNUkp1SStsSVNhWnpTYmlPOUFFbWFPdFJialRneDdVQUQ5YUtZV09hS0FJS1FkS1hyUmlxSkU1b3p6UzBZb0FLQ3RIU2pyUU1TanZ4UzBsQWh4QXhTVXVQenBLQUVvNzB1S01VQUIrbEdNVVl6UWVPQlFNS01VdUtUaWdCUnhRUjlhTzlKN2lnQlFCMFBTZ2ltOTZrazIvTHRiUEZJQmxMU2RxWFBGTVFFakE0NXBBY1V2MXBNVURGb293S1EwQUx6U1o1eFIyNXBQd29FTHhTSDg2S01tZ0JlQWVhRHowb0NrODBkS0FENjBuZWduTk93QUFRZVRRQXlUdFRLZXc0cGxNQW9vb29BTWtVNVhaVGtHbTBVQVNpYzdsSkdNZGNkNnN0T3FxcmNrR3FOU09mM2NmNDBBWEVrU1FkUWFld0JVODFtQWtIaXBSTzIwZzg1RkFoV1ZTMk04NXhUemJjam50VmNFZzVxZGJvZ1lLMEFST2hRNElwVVR6SEE1SHFhbWVXT1FBbmdpcFl0akxnR2dCQmJ4TDk0bWtGdWtnYmEyQ0R4VTRVVlR1RUFPNU03Y2tmalFCQzZsV0tucUtzQU45anl2NDFXTlhZbDNXNFU4RHZReGxNREo1NmQ2YzdBNHdNWXFhNUlSQWk0R2UxVnFRQlUwSDNqVU5UUUVET2FUMkd0eWVpa29xRFFXbHpTR2tvQVUwbEdhU2tBaG9CcGFURk1BNE5JUlMwWm9BU2daUEZLQm5wVHd1S0JDWW94VGlRQmsweHBDUnh4VEVCNHBRZTFNRk83aWdCNHBDdnBTNXBNMHhEU09mU2xGTGtVbjQwQUlSelJTODBVQVZ4Uy9qUm1relZDQTlhV2tKNXBLQUZvbzYwVUNDZ1VvNTROSUJnMEFJZURTNFBHS1Blbm9SbjVxQmpNZGFLbmNvVjk2aTNZNHhTQVFZUEZJUmlqQnpTOXVhWURSU2dkNk00cFFjVUFKUjJvNzBIbWdCUjN6U1Vab09QcFFBaDRwY1VBNE9hWGZra25xYUFFeFMreG96elNaUFNnQXdhT005YU54eGpORkFnNlVoOTZYajFwS0FEcFM1eUtUMm94elFBdU85SWFLTzlBQmlqTkhGSFNnQkQwcGhGUEpwRFFBMmlscEtBQ2lpaW1BVVVVVUFGRkZGQUJSUlM0NEZBQ1VvSkhRMGxQaWpNc2dVZDZCRmlLNGtDNUtFcjZnVUNXSXBJSEdjbklGWDQwVkVDcjBGTWVKSCs4b05LNHpKcTIwd1JmWGdjVkk5a2grNFNEVmQ3U1ZlMjc2VUFRdXhkaXg2bW0wNWxaVGhnUjlhYlRBS2NLYlRoU0FsU1hIQjZWS0QzRlZjMDlYS25qcFV0Rkpsak5GTVZ3dzQvS2xxU2hhVE5HYVNnWTZpbTB1NmdBb282MFlvQWQwNlU0TlRld29waUIrY2NVMGluVVk0b0FZT3RQVVpwdE9ERmFCRW0wVW0ybStiNmlsRWkwd0RhS05nTktISHBVbnk0eUJRSWgyR2lwOCsxRkFILzlrPQ==",
          "Timestamp last change": "20151002060357",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060357",
          "Display rule": "0",
          "Sequence#": 940,
          "Text ID": [
            {
              "ID": 67,
              "ENG": "Picture of indoor unit after installation",
              "NOR": "Bilde av innedel ferdig montert",
              "POL": "Zdięcie  wewnątrz p montażu"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:940:SVAR<>¤¤ and besvart=1",
          "Sequence#": 941,
          "Text ID": [
            {
              "ID": 67,
              "ENG": "Picture of indoor unit after installation",
              "NOR": "Bilde av innedel ferdig montert",
              "POL": "Zdięcie  wewnątrz p montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:941:SVAR<>¤¤ and besvart=1",
          "Sequence#": 942,
          "Text ID": [
            {
              "ID": 67,
              "ENG": "Picture of indoor unit after installation",
              "NOR": "Bilde av innedel ferdig montert",
              "POL": "Zdięcie  wewnątrz p montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:942:SVAR<>¤¤ and besvart=1",
          "Sequence#": 943,
          "Text ID": [
            {
              "ID": 67,
              "ENG": "Picture of indoor unit after installation",
              "NOR": "Bilde av innedel ferdig montert",
              "POL": "Zdięcie  wewnątrz p montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:943:SVAR<>¤¤ and besvart=1",
          "Sequence#": 944,
          "Text ID": [
            {
              "ID": 67,
              "ENG": "Picture of indoor unit after installation",
              "NOR": "Bilde av innedel ferdig montert",
              "POL": "Zdięcie  wewnątrz p montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "LzlqLzRBQVFTa1pKUmdBQkFRQUFBUUFCQUFELzRRQllSWGhwWmdBQVRVMEFLZ0FBQUFnQUFnRVNBQU1BQUFBQkFBRUFBSWRwQUFRQUFBQUJBQUFBSmdBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBRVFLQURBQVFBQUFBQkFBQURNQUFBQUFELzJ3QkRBQ0FXR0J3WUZDQWNHaHdrSWlBbU1GQTBNQ3dzTUdKR1NqcFFkR1o2ZUhKbWNHNS9qN2ViZjRldGlXNXduOW1ocmIzRHpjL05mSm5oOGQvSDc3Zkp6Y1gvMndCREFTSWtKREFxTUY0ME5GN0ZnM0NEeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWC93QUFSQ0FNd0JFQURBU0lBQWhFQkF4RUIvOFFBSHdBQUFRVUJBUUVCQVFFQUFBQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkFBQWdFREF3SUVBd1VGQkFRQUFBRjlBUUlEQUFRUkJSSWhNVUVHRTFGaEJ5SnhGREtCa2FFSUkwS3h3UlZTMGZBa00ySnlnZ2tLRmhjWUdSb2xKaWNvS1NvME5UWTNPRGs2UTBSRlJrZElTVXBUVkZWV1YxaFpXbU5rWldabmFHbHFjM1IxZG5kNGVYcURoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1SGk0K1RsNXVmbzZlcng4dlAwOWZiMytQbjYvOFFBSHdFQUF3RUJBUUVCQVFFQkFRQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkVBQWdFQ0JBUURCQWNGQkFRQUFRSjNBQUVDQXhFRUJTRXhCaEpCVVFkaGNSTWlNb0VJRkVLUm9iSEJDU016VXZBVlluTFJDaFlrTk9FbDhSY1lHUm9tSnlncEtqVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnb09FaFlhSGlJbUtrcE9VbFphWG1KbWFvcU9rcGFhbnFLbXFzck8wdGJhM3VMbTZ3c1BFeGNiSHlNbkswdFBVMWRiWDJObmE0dVBrNWVibjZPbnE4dlAwOWZiMytQbjYvOW9BREFNQkFBSVJBeEVBUHdDMWlqRkxpakZJQnVLTVU3RkdLQUc0b3hUc1VZb0FiaWpGT3hSaWdCdUtURk94UmlnQnVLVEZQeFNZb0FadHBOb3FTa29BaktDa01ZOUtseFJpZ0NBeEE5cVlZRlBhck9LVEZNQ20xcXA3VXcycEhRbXIrS1RiUUJuR0J4ME5BTXlkQ1I5RFdodEZOS0NnQ290MU9uVWsvVVU5ZFFZZmVVVk9ZZ2UxTU1DbnRRQXEzMFo2Z2lwVnVZbTZPQjlhcXRiRDBxTTIyT2hvQTBRNnQwWUg4YURXWVlYSFEwb2FkT2hQNTBBYUJBem1pcUl1cFY2alAxRlBGNy9lU2dDM1NZcUFYY1o2NUZTQ2FOdWppZ0IxSlM1QjZFR2lnQnBGSmluMGxBaG1LUWluMGhGQURNVWxQcE1VREc0cHBGUHhTRVV4RU9QMzhlT3VhdnFEMzYxU3hpUkQ2TUt2ZnhVaGhpbnIycG9wVjZDZ0I1NlUwMDg5S1lhQUd2OEFkL0duTjFwci9jTk9iNzFBRFdvRkRkS1FVQU9QVmY4QWVwOU1QOFArOEtrb0Fpa0hISFduUms3Y0duZTFIRkFEVy9oLzNoVHpUSDZEL2VGU0dnQmhGT0ZJYVZhQUNUN2hvb2wvMVorbEZBQWFhYWZURFFBTFFuM0YrbEt0TlUvSUtBRnBNODBISFR2Umdab0FVSG1rWC9XUCtGQUh6WnBWL3dCWS93Q0ZBeGFUdlNtazcwQUwycEgrNlA4QWVGQTZVUDBIKzhLQkNtaGZ1MHBwZTFBeU05YUIwb1BXbEZBREUrKy8xcDlOVDd6L0FGcDlJQnBwbFBhbTBBTmY3amZTbFVmSXYwb2YvVnQ5S1ZmdXI5S0FFSXBoNjFJYVkzV2dCdUthNDZmVVUvRk5jZFBxS0FJN2dmSlZUdlZ5NUg3djhhcDk2YUJnYWJUbXB2YW1JQlNnNDVGQXBLQUo0NXlPRy9PdE8ydmlvQWM3MDllOVl0UFJ5dlNrME02TFlrcTdvV0I5cWxqWEVZQjZpc0szdW1SZ1ZiYTFhOXRlSk44cllWLzUxSUZnREZSR0w1dDNxYzFQU0VjVVdIY295SjgyRFZhWmNMejYxcE9nYXExeEY4dFNVWnhUbjJxSnVLdDdlZUJVZmxaWnFwTVRSVHdlb3FSWmVPUnpUblhCd0tpMjV5ZW1Lb2tuaUJ3UzNlbkE1NlZDSlRzMjk2a2orUmVhQkQxR003dWxPSFROTkJCSEI0TklQcFVnRFp4U2tGY1k2NHpTYlNUeFVoaTRVN3M4YysxQUZpelUvYVVHRHh6eFVtb2MzQXpuR0IwcHRobnp3TThjNUZQdlpNVEZjTHdNODlhT2d5bzNvNHlmNVVJelJydEIrVTlqVEdiSjRwNi9kSjVHS0FFeElTUUZQSFdta0ZjcVFReDdZcVpYWlkySWtBN2tHb3pLV2JjVnlTT08rS0FJU2NuZ2lwbzVvMHdkcHlCMXFPV0ZsUVBnODVQU29YOUJURVRTVEIyM0JlZ3hnMHpxVHhpbW92SE5PeG1rQklyZ0RhUlM0d2MvcFVMTnh4VWtUWlVaNXg2MHJERmROL3pIT2ZTbWxTQjE0cVF0a2RTS1kzSStYclNBalpNam1wRUJST090TkFZRE5JWEpOTUIrNHRTRThldE5KT1FhY0FNWTcwQVBqM1p6amdkNmNNY2trYzlNMDJQZzQzY1VrcWJPUWNpa01rVnM1Qnhpa3h5TUhqdlVJeXdKRlBVL0xrOGlpd3Jrck9jWXhuNlVna3d2cFVaY1k5NmF2elB5VHg2VVdIY3YwVVVsV1NMU1V0RkFDVVUzYjgyUVQ3aW5VQUZGRkZBQlNVdEZBQ1VVdEZBQ1VtS1h0UlFBM0ZGT3hSUUEya3AyS1RGQUNVbUtkaWpGQURjVWxPSXBNVXdHMFV1S0NLQUdta3hUc1VsQURkb3BDb3AxSlFBd3hnOXFZWVZQYXBxS0FLeHR4VERiK2hxM1NZb0FwK1U0NkdnTk12UmpWc2lta1VBUUM1bEhVWi9DbkM3L0FMeTA4b0RUVEdEMm9BY0xtTTljaW5pVkQwWVZYTVFwaGg5RFFJdVpCb3Fsc2RlaE5LSGxYdWFZRnVrTlZoY09Pb0Jwd3VSM1UwQVNrY2o2aXJoNjFuaTRqSjY0clF6M3BEQVVxOUJTVTRkS0FIbnBURFR5ZUthMUFERys0ZnBUc2Q2WTUrVS9Tbmo3djRDZ0JwTkM5YVNnZGFBSE4wSDFGU0dvejkwZlVWSWFBR21nVU5RT2xNQkpQdS9pS2tOTWsrNGZxS2VhUURlMUt0SlNyUUFTL3dDclAwcGFTVC9WdDlLQjJvQVdtR25tbTBBS3RSREpGU0xRZ0d5Z0NGbXdjbnJTcWR4ejNGRG9DM0FvQXhRTWxXaGY5WTM0VTFUelRsNWR2d29FQnBQV2xOTko2MEFLT2xEZEYrb3BSU1AwWDZpZ0J4cDNha05IYWdDTTlhVVVoNjBvb0FTUHEvOEF2VTZtcDFmL0FIcWRRQWpkNlpUbXB0QXhKUDhBVnQ5S2NCd1BwU1NmNnB2cFR1d3BBSWU5TWJyVDI0Rk1OTUJNVTFoeVByVDZhZnZENjBnSTdyN240MVQ3MWN1aDhuNDFUNzAwSmlOMHBPMU9mcFNmdzB3RUhTa0ZLT2xJT2xBQUtPMUE2VXZhZ0E2VkxITVZQemZuVU5GSURadGRRWlFGa085Zlh1SzA0M1dTTU1oQkZjcXJsVHdhdDIxNDBiWlZzSDA3R2xZRG9DS2lrWEttbzdlOWpud0Q4cituclZseGtBVk5pa3lna1lZRWR4VGZMQ28vclUvbGxKYzlqUlBIdVVsZTFTVVo3UmZNRFZWMUlZaXROVU96SkZRWE1RQkJ4M3FreE5GQWdZOTZVRTQyc2VNOWFsOG9uSjlLWVJ4Z2lxdVNQWmdvVURuTlBCSHBtcTRPeHZXcFVKSkxaNDlLQUxFS2hwTVo0NmMxTE1NT0FwNHFvalo1SFNwTjJWcE5BaTVwL3dEcnlQUVZIZXNUZFB4d0tmcFp6Sy9zdFFYakZybVJSd04zTkhRQ0ZjRml6Y2owcHhsWlhHUmpiMklwei9NM1FZVVkrWHBTaVBjQzdNU1NPdEFpRnR4ZmdicytncCsxVkkyc0NEM3BBekJ0d1BOUFFLU0JKMzdudFFCWW1oL2NaSndvWHFhendwYkFVWk5YcDB0L0x3aE9TUnoyRlFRZVhrQjhnaGgwOUtZQ1NSTkc0ODRrRWpOUmtyazRIRldic1FFN2c1SlA0bXF5Z05TWUNZM0RHS2x5UmpOTWJJSTVvQnlLUXhXYmQ3VTBzQXVNY21rT2UxQnhuM29BYnoycG96bmtWSUJnWnB1UTNhbUlVbFYrdE53MjdvYU54M0E0emlwVnljWjdtbHNBMEx4a21wamdxRG5nQ28zVWpJQnBxazRPVGtDZ1kvSXljZ0Q2VWdPVGp0VGVUZ1VjRFA1VUFEa055VDNwdWNISXBTT09hUlJ6bW1JaUZ6Y3IvRWZ4cDR2cHgxQVAxRldURUthWVY5S29CaTM4bmVJSDZVOGFndjhBRkd3cERBS2FZUGVnQ1VYOEo2N2grRlNDN2dQOGY1aXFadGdUbW1tMm9BMFJORWVraS9uVHd3UFFnL2pXU2JadXhwdmt5RG9hQU5paXNqOSt2Um0vT25DZTVYK00valFCcTBWbS9iWjFPRGcvaFRocURqNzBZTkFGODBMMHFtTlJYK0tNajZHbmkvaFBYY1B3b0F0VVZBTHVBL3g0K3RQRTBUZEpGL09nQjlGQVlIb1FmeG9wQUZKUzBVQU54UlMwVXdHMGxPb29BWmlqRk9wTVVBTklwdUtlUlNHZ0JtS0tkU1VBSlNVNmtvQWFhVEZPb29BWmlreFQ2VEZBRE1VbUtmaWpGQURNVTByVWxHS1lFUlFlbE1NWXFjaW1rVUNLY3NlM210Y2ZkWDZWbnpENURXZ3YrclEvN0lwREZwUlRhZU9sQURoeU9hYmpIQTZVbzZVR2dDTmh3YWVuM0I5QlNIcFRZbXluMG9BVTlhQjk2anZSM29BVnZ1bXBEVWJmY2I2VS9OQUFhQjBwRHhTclRBSmY5VzFPTk5rLzFUZlNuSHBTQWJUbHB0T1hwUUFTZjZ0dnBTRG9LV1Q3amZTa0gzVitsQUNtbTcxM2JjODA0MUNRTitjYzBBU3FlYUYrNEtST3RLdjNCUUFocHRPTkpRQTN2VDQvdnQrRk54VG92dnYrRkFDbnZUV3B6VTA5YUFIQ2tmb3YrOEtXaCtpLzd3b0FjYUJRYUJRQXcvZW9GQjYwQ2dCRS9qLzNxZFRVL2kvM2pUcUFHdFNVSHJRS0FFay8xVGZTbEJwSlA5UzMwcDRHS0FHbnBUU0tlYVlldEFDVWhIekw5YWRRL1ZmclFNZ3V2dUFlOVZBT2F1WEk0RlZjZk5RaE1SeDhtYWJqNUNhbWtIN3Fta2Z1Q2FZRVg4TklvK1UxSnQrVE5JcS91eWFBR0RwUjJwVkh5R2p0UUFsSlMwbEFCUlJSUUJJa3BVakpPSzFyWFVUZ0J6dlVkKzRyRnBReFU1QnhTYUE2cFdTVmR5RUVVdTBBZld1ZnQ3MTQyQkRZUDZHdGkzdlk1Z0F4Q3QraHFMRHVTN0JqcFZLK1VnWTdHdExGUVR4Q1FBTlJZYVpRaFFzdUNPb3FLYUFxcHhXakhFRmZqMG9saTNBWW9RMll4aktBSDFxTTVHY2Q2MXBiY0hIdFZPVzNQSngwcXJrMksrN08xUjh2cWFrREFzUU93NjFDUVFhUU1RTnZZOWFZR2xZM1N3dTI4SERkeFVFaEwzRHNPN0VqTlFoeG41VDhxaXBWT1FCNmlrSW5PMVlnTW5kbnAycGh5VjY0QnBwNUh2VHhsc0x4OHZTb0dBbFJZdGdBSi8zZWFaS0NKQ0dZRSsxU3hKc2NHTUZuejk0OVB3cEprSG1IQ3NEM0hmM3FoRVNnbGV2YW1qSU83amlwREhoUmdjK2xLM0VZWHZ6K0ZBRUx5RjJHVkhISEZKNWloaUNNZHFDeFI4cVJ4M3BqblBKT2FBSkYybk9EbWtMQUhyVEZZQVpIVTBOam9PdElCUytRY2RxUUVnWjdtazZKU0FiL0FMdE1CKzg0R2V0UFZRUU1IcWVhWVFPbU9hRnlwOVJTR1dBaW9UakpwQWVmU25iZ2NFZGFhV0pQQXFSaUZTeFBPQUthVklVNU9hZVNTQ1FNK3Z0VER1WmNEZzB4REZPRGpybW5PTU5uSEZDS0FNbmpGT2JEQTg4VTJCR1dvRERwVEd5RFM5YVlpOWlreFQ4VVlwZ014UmluWW94UUF6YUtOb3ArS01VQU0yVW15cE1VWW9BaThzZWxJWWg2Vk5pakZBRmN3ajBwcGdYMHF6aWt4VEFxRzNYMHBwdGg2VmNJb3hRQlJOdFRUYkhzYXY0Rkp0b0FvZVM0NkUwQVRyMFkvblYvYlNGS0FLWG4zSy94RTA4WGs0NmdIOEtzbU1lbE5NUTlLQUloZnQzUVU0WDY5MFA1MHBoSHBUVEF2cFFCSUw2STlkdy9Dbmk2aFA4QUgrZFZqYmowcHB0eFFCZUUwWjZPdjUwNE1EMElyTjhnMGhpY2REUUJwVWxaMzc1ZWpIODZVVFhDOXlhQUw1QU5KaXFRdXBoMUFQNFU0WGg3cFFCYnhTVlhGNHZkVFRoZFJudVJRQkxSVEJQR2Y0aFRnNm5vdy9PZ0F4U1U2a29FSmlreFRxU2dZbUtURk9vcGlHa1UwaW5tbW1nQ0tRWlExY2k1dDR6L0FMSXFzd3lLc3cvOGV5ZlNrTVduanBUVDFwd29BVVVocFJRYUFFcU9MN3BwOVJ4ZzRQMW9BZm5OSGVrRktldEFBZnVINlZKMnFQOEFoUDBxUTlCOUtBRU5LS2FhY0tZQkp6RzMwcGUxSTMrcmI2VUlkeUJ1ZWZXa0FVNWVsSWFWZWxBQ3Y5dy9TbWo3aS9Tbk45MDAxZjhBVnI5S0FGTk1JcHg2VTJnQlVwVis1UW5Xa1g3djRtZ0FOSUtEU0NnQmFXUDc3L2hRS1ZQOVkvMEZBQTNXbW5yVGoxcERRQTZrZm92KzhLWHRTUDBYL2VGQURxS0RTZHFBR0hyU2lrUFdsRkFDSjBiL0FIalM1cEUrNjMrOGFVMEFNTktLUTBxMEFFbitxYW4weVQvVkdubnJRQTA5YVozcDdVMzBvQUtSdnZMOWFkU045OWFBSVp4eUtySDc5V3BoeUtydDk4MEFMTVA5SEgxcEdIK2pHbnovQVBIdVByU1NmOGUxTUJoSDdrL1NrUWY2TXhwN2o5d2ZwU0x4YW1rQkdxL3VTYWF3d0JVb0gram1teURnWTlLWUVWSmppbElJcHdUS2c1cEFNcEtsOHIzcGZKLzJ2MHBnUTBWTVlmOEFhL1NqeUQvZUZBRU5QU1ZrNkduL0FHYy8zaFI5blBxS1FHaFo2a1Z3cm5jUFE5UldwSExITXVVYlB0M3JtL3M3ZjNoVTBYbXhrRVBTc0IwSUZCRlVZTlFJR0pSbjNGVGYyaEQ2TitWS3d4WlZ5UlVMZ0ZhVjd5RmoxYjhxYjlwZzI0K2JQMHFiTXE2S2R4RGprRGpOVnBJaVBhcnJ5bytPVGpQcFJNOFRqNWM1K2xOWERRelVRN3NlbFhGUWdDUWdrOU1VeEVBWWs0eG1yRzlObU1rSE5VU0o1Wk1tM0h6RTQrbFR5V3Bod3grYkl5YWJieVJCejVwem5uZDNGUHVKbzNUYjV1N0hUaWxZTGtVUTNUS09uUGJ0VXNyRHpKQXZCNXlhYlp5UnhPeFp4eU1EanBVTEhKWWwrdjYwV3NBcUJtTzdjQmppb3lEM09SU2o3dlVDbWtEZGtHa0JDd0pianBUT3B3ZWxUc3VlbUtObVBTbUJFcVo0Rk9LaGNaUEpHY1VwVTQvK3ZUUWpaNEZBZ0VlL3ZnVThCVTRwVVVnYzlhVjFCT2NacERHWjNFZXZ0VGl3QXgxcGdVZzhBMDhnNHlSelJZQm9jOG5wU3F4WUhtazI1N1V3a29jQ2dDYU01QjZWSW9BNFkxREhnWUpQV25TRTd1QnhTR05sd3A2SE5OSDNlYWVTcmc3ajI0cUlZTk5DRnd2cCt0TlpnRHdNbWw5KzlLcmVvK3VLWWpReFIycGFLWUNVVXRGQUNZb3AxSlRBYlJUc1UwZ1VnQ2lqYlJpbUFZb3hTZ1VVQU5JcE1VL0ZKaWdCbUtNVS9GSmlnQnVLVEZPeFJpZ0J1S01VN0ZKaWdCdUtURlB4U1lvQVppa3hUOFVsQURjVW0ybjBZb0FqMmlrS1ZKaWt4UUJFVUZJWWg2VkxpakZBRUJoSHBUVEFQU3JHS01VQVZUQUtiNUo5YXRrVWhGQUZUeTNIUmpTZ3pEK0kxWnhTYmFBSVBPbUhYK1ZMOXBjZFZGUzdhVGFQU2dCb3V2VmFjTGxEMUJwQ2c5S2FZeFRBa0U4Wi9peFMrWWg2TUtnTVFwcGhvRVdjZzlEVmlIL1VEMnpXVzZNdlExZnNTV3RCbnFDYUJrMU9GTU5QRklCd3BEUURRYUFFb2lHVlAxTkpSR2V2MU5BQXc1cEtVc000cHVjY1VBUEhRL1NuRDdpL1FVa1p5RFNBL3UxK2xBQWFjS1lXcFZhbUE4L2NiNlU1VG1NZlNtNStVL1NoUDlXT0QwcEFLYUY2VWh6NlVLYUFIbjdwcHEvNnBmcFNuTzA4Y1UxVCs3VWUxQUM5cWFhV21uT2FBSHBTRDd2NG4rZElwSTZpZ2ZkL0dnQUpwQlNiV0pvMm5QV2dCNHBWL3dCWTMwRk5BSW9WaVdZNHlEeFFBdmZtZ2Nta1pHUGZIdFNyQ2V1NmdCdzZDa2s2TC92Q2pZUnhta0tuSzg5RG1nQjVwS2FTYUFHTkFEVDFvRkxzT2VhWGFBS0FFVDdwL3dCNDBFMDRKdFRucWVhWVJRQTBtbFU4VWJSVGd2RkFEWFA3djhSL09uazgwTXVUanQxb1pjQ2dCckdtNTZVaEhOT0VlVFFNTTAyU1FLUWVwNXFkWWg2VlJadDdzM2JQRkFoZm16ejNxSnZ2bXBndUVCUGMxRWZ2bWdCMC93RHFWSHZSTC9xQVBjVVQvd0NyVDYwazMrclVlOUFDeWNRR21IL2oycDgzK28vS21zTVd3b0FUL2xnS2l1dUdYNlZQajkwdjRWWHZQOVl2MG9BaTh4aU1IbXJDRDVCOUtxaXJnSHlpbUFDblVncGFBQTB0SlMwZ0Y3VUNqdFJRQXRGRkhhZ0JlMUdhS0FLQUVCeVQ5YVdtcjMrdE9vQUtEUlNIcFFBNFVocFJTR2dBcENlYUtUK0w4S0FGcGFLS0FETkl2SUpwYVJQdTBBS2FTbHBLQUNqUE9LS0tBRjdVbEJvelFBdElTYUtPOUFDNXFNalB0VC9yVFhCTGZMMHBNWXFqaW5sejA3bWtCMjBqa2pCNHFBRWNZSjlCU2NiZUtDZldrQXlNMDJBaC9PakJGU0tPbExMbDN5QUYrbmVnQzlSVUF1b0Qvd0F0QlRoY1JIL2xvdjUxWWlXaW1DV005SFg4NlhlcC9pSDUwQU9wTTU3VVpIclMwQUZKUzBVQUpSUzBVQUpSUzBsQUJpakZMUlFBbEppbG9vQVRGSmluVWxBQ1VtS2RTVUFKU1lwMUJGQURNVW1LZmlreFFBM0ZKaW5VVUFOeFNZcDFKaWdCdUtURk9OSlFBbEppbllveFFBeWpGT3hTWW9FTnhTWXArS1RGQURjVWxQeFNZb0FiU1lwMUppbU1hUlNZcDFHQ1RnZFRRQXdSbVJ0by9FK2xXb0l4RW14VGtaelN3eEJlRCtOU09GRGZMMHBBTktnVTlGQlhKcFkwenkzU2xQb09sQURNQ2dMdU9LY2VCVWlKZ1pOQUNDTkFPbEtVVlY0QXB4SEhOUXQ2VUFOSUZPVlJucFNoYzFJQmdlL2FnQnUwSGp0M3BDQjJBcVE4REZNTkFETWM4Q2wyODA4Y0x3TXRTN1RqNWpsaitsQURRTXQ3RCtkT05LcWdEQTZDbDRGQURDT0tjcURGS0Z5YWM1MnJ4UUJGSnlkdllkYVRGTGlqRkFDWXdLYmlsNVk4VTQ0VVpOQUViY25iK2RMaW5LQUIxNVBXbEF4MW9BVEdCU0FVNGcwbVFLQUd2bmhSMU5QVmNBS0J3S2JIOHhMbnY5MzZWTW9wREc3TW1ncmlwUUtZYVlobUtiMno2MDhqdCtkTk5JWkdSU2tGZ0JuQXBRdVRTN2FZaE91UGFuS3VTQjJwUXVLbEM3VnlldEFFTW5XazJoaHp4VGlNbk5BRkFERlVBMC9hQU0wb1duYmNrRDhhQUdJbkdUMXByaXJCR0JVSkdXb0dSaE0xSWkwS3B4elVxTFNBZ3UyTWR1Y2RXNEZVRlhvQlZtOGZmUHRIM1UvblRJbDV6NlV4QklBTm9IWVZXLzVhSDYxWmwrLzlCVlhQem42MEFTWEIrVkI3MGszM1UrdEUvVktKdXFEM29BV2YvVTQrbE1rLzQ5MXAwLzhBcS94cEp2OEFVcFFBcCs0bjFGVnJ6bVg4S3RIN3FmV3FsMy9yejlCUUJDT3RYYXBvUG1GWGFZQUtLQjFwYUFFN2lscHZjVStrQUhwUlNHZ0dnQmFXa3BlMUFCUUtPMUhhZ0JxZmRwMU5UN2crbE9vQVdrUDlhV21ucVByUUErbW1scEtBQ2tIM2pTMGc2bjYwQUxTMGxMUUFoNkdoZnVpa2JoVFNqb0tBRnBLS0tBQ2xwTzlGQUFhU2cwbEFEcUtTZ1VBT0dNODlLYXd5Y0FlOUtDQWVhYTBvVW5HVDZHcGU0dzNramJUU2NzS0FjalBjMGc2azBJUS9QekdsWGo4YVpuRk80SUZKakgvV203K0R4MHBWSUJJcCswTWVCU0FwL1ptOVRTZlozOWEwdGdwTmdyUVJtK1JKNjBlVEpXbHNGR3dVQVp1eVVVZnZoM1A1MXBiQjZVbmxpZ0RQOHk0SDhUZm5TK2ZjaitKdnpxLzVROUtUeWg2VUFVaGRYQS9pYW5mYnB4My9BRXEzNUk5S1R5QjZVQVZocUUzY0Q4cVVhaS9kVnFjd0w2VW4yZGZTZ0NNYWllNkQ4NlVha082ZnJUdnN5K2xOTnN2cFFBNGFpbmREK2RML0FHaEg2TlVadFY5S1EycStsQUU0dm9UL0FIdnlwZnRzSi9pUDVWVyt5Q2sreUNnQzRMdUUvd0FkS0xpTC9ub0tvL1pQclRmc3A5VFFCbytkR2VraS9uUzcxUDhBRXY1MW0vWmo2bWtOdS9yUUJwNUI3aWlzenlYSGVrMlNqb3hvQTFLUTFtL3Z4L0dmenBkOXdQNGorZEFHalNWbitkY0R1YVg3VE9Pby9TZ0M4ZWxKakFxbjlxbDdxUHlwZnRiOTBGQUZ1aXFvdkQzanBSZUR1aG9Bc1VtS2grMXA2TlNpNmo5L3lvRVM0cENLWUxtSS93QVg2VWVmR2Y0eFFBN0ZGSjVzZjk4Zm5SdlUvd0FRL09tQVlveFM1QjdpaWtBMGlwWW84Y25xZjBwWTQ4NFkvaFV1Q0JRTVFEYlNxaGR2NTBBRWtBVlB3aTRIV2dCcDQ0cG1SU25rVWlyazRGQUN4cnVPYW14ayt3b0F3TUNrWnRvd09LQUd5TjJxUGJrMHZMR25LdWFBRlZSbjZVOERBeWZ3cFFCK0FwckhOQURTYWJqUE5CNXB3RkFDRDFQU25xRDFQVTBnR1Rqc0tmd1ByUUFocFFLQXZyVDhVQUlCZ1pxSmprNS9LbnVlMU5GQUNEMG8yWjZuaW5BZDZRMEFNeGltNHlmWWRLZTNBd09wcE1ZR0JRQURyeFQyNmMwaWlnODBBTVBKcHJEZXdqSGZrL1NwT0ZVc2Vnb2lRaFN4SHpQeWZiMnBBUEE5S2VPS0ZIRk9BOWFZQ0U1SEZNeDNOUE5NYjBvQWFhYmluR2xWUWFBR2dVb1duZDZVRHZRQUt1V0E5T2FkTHdNVStKY0FrOVRUWDVZMEFSWW94Z1U4Q2tQYWdBVVU5VjcrdEtGNHhUeU1DZ0NKcWJ0SGJtbFpjbWxVWkFvQVFKMnBabkVNRE9ldzRxVlZxanFEYnBraUI0SHpHa01xcURqSis4ZVRVeXJoYWFveVJVbE1SQS8rc1lWVUhNaCt0V3M1ZDZyTDkvOEFHZ0I4MzMwcEp2dnA5YVdiL1dwUkwvckVvQUxqN2crdEpQOEFjUVV0eDBYNjBUOUVGQURqL0JWSzZQNzlxdW5xdFViai9YdjlhRUEyUDc0K3RYS3FRLzZ4ZnJWdW1BQ2lnVUdrQW44UXA5TUgzeDlLZjNvQUIxbzcwR2w2MEFOSFUwNm05elMwQUwycEQwTkxTSHBRQURvS1drcGFBQ2svaUZLYWFQdi9BSVVBUHB0T3B0QUJRcDYvV2xwcTlLQUhVR2lrb0FSK2xPcHJuZ0QzRk9vQUtLS1NnQmU5RkozcGFBQ2tvb05BQlFLU2xGQUNNVkhYOEtnSkJrNDQrbFRzRDFBSlB0UkJiWlF6U2txb3orUHRTQWpYZ1pxUlJtbTQzTndNRDBwVklGSUFZWTYwQVpQRk9QSTY4MGdHTVl6bWtNVkJsc21wU01kS2lBWU5qTk9HN3FhVEF0WXBNVTZpckVKaWpGTFJUQWJpakZPeFJpZ0J1S01VN0ZKaWdCS0tYRkZBQ1VVdUtLQUV4Umlsb29BYmlqRkxSUUFtS1RBcDFGQURjQ2piUzB0QUROb28yQ25VVUFNMmlrS0NuNG94UUJIdEZKc0ZTWXBNVUFSN1JSc0ZTWXBNVUFNOHNVM3l4NlZKUmlnQ1B5eDZVbmxEMHFXa29BaU1ROUthWVI2VlBSUUJYTUk5S1R5QjZWWXhTWXBpSzVnRk5NRldjVWhvQXF0RVIwTlNXbHUwa201aWRpKy9XcFVReVB0SDRuMHEvSEdGVUt2QUZJWW8rbEtRQ09UeFN0eFFpNTVQUVVBT1ZRbzNZeFRTY21uRTVwcDRGQURUNlZLcTdWejNwSTA3bXBBTTg5cUFFNkRKcUpqazA5Mnp3S1JWeFFBS29IYm1uZ1k0N21nWUF5ZnlGQk9QcWFBQmpqZ1V3MHZVMDdDalBPVFFBekZLZU9CMU5LUFUwS01uSjZtZ0JRTm93S1RCSjRwK00wOExnVUFJcTQ1SnlhUmpnVTgxQ3h5YUFHbWxGQUZBRkFDMGhIclNtbU1jbmIyNm1rQWc1TzQ5L3dDVktCbWx4U3FLWUFlQlRjWnB4NXByc0VUT01uc1BXZ0J1UE1rQy93QUs4dC9RVk9xN2pUSWtLSUFlV1BMSDNxY2NMaWtBM0dLY0d5Q0FEeDNvQW9OTUJwcU05YWxZWkZSNG9BYmpOUDZEQXB5TDNwY2Q2QUdCYWVGN1VvQUF5YWtVZCs5QUFmbFdvVFVzaHp4VWVLQUV4eFFveWFVOWFjb29BVURxYVhxS1F2SG5adUdmU25NMkJ4UUJDNDR4VG8xNG81YXBGR0tBRkpDSVNlZ0dheHdUSTd5SHF4L1NyMm95YlloR0Q4ejhWVEF3QUI5S0FISUtWdmVsWHZRZWxBRlRvemZXb1UrLytOV0hHSGFxOGYzeFFBNlQvWHA5S0pQOWNsRC9BUEh3djBvay93QmV2MG9BSitkdjFvbis4Z29sKzhuMXBKdVpVRkFFbjhhMW56OHp2OWEwUCtXZytsWjB2TXIvQUZOTkFMQi9yQlZ1cXR1UDNsV3FBQ21qSk5PTktvd0tRRGVqL2hUaDFwT3JuNkNsSFdnQU5HYURTaWdCQlMwZzZVb29BV21ucFRxYlFBdExTVVVBS2FhUHZVNmtIM2pRQTQ5S2IzcFRTZDZBQTBpL2RGSzNRMG5ZVUFLS0tCUWFBR3Q5NWZyVCsxTS9qWDhhZlFBbWFLS0tBQVV0SU9sS2FBRXBEUlJRQVVvcEtCUUJZaW1TR0k3bXdjNXdPcDRxRU85MUtBTUpIbjhCUkhBc3JaZVJWVWRqM3E4WnJkVlZTcThkQXZUclNBZ2FGQklGZ083QzVKUGMxV0lKZnB5YXMzRTZzd0N1QXZvb3BxU3hxNnljbGh5UlNHUkZBakFzRGpIT0tVRlVBT01tckgyaFhoWlh4bkhISDRWVStYWUJnNTdtaXdFcFpXWGdBTjN4U1o2ZDZqM0hidEhRYzlLY3BKNlVnTGxGTFJWaUNrcGFLQUV4UzBVVUFKUlMwVUFKUlJTMEFKUlJSUUFVVVVVQUpSUzBVQUpSUzBsQUNVVXRGQUNVbExSUUFsRkxTVUFKU1U2a29BU2twYVNnQktLV2s3NG9BS1Nsb29FSlJTMGxNQktURk9wRFNBYWFhY2tnQVpKcHpIaXJGdER0RzVoOHgvU21BK0NFUnJqdWVwcVg3b3B3R0JtbVlMdGdVaGdxNzI5dTlPUG9PbEtTcURhS0JRQWxDcnVPYVhHYWtBd0tBREdlTzFJNXdNVTc3b3FMbG1vQUZHVFRnTTlLRjVPQlRndUtBRzhBNS9LbXNhVmprMDBESm9BVlFjNVBTbkRub0tROG5BNlU3R0J4MW9BVHFjZGhUK25IZW1nWUZPUW5QM2Nta0E1UlRqUUJnYzlhUmpnVXdHU05qaW94VG01cE9uUVVnRHBUaFJqSnpRYVlEV09CbW1nWUhQVTlhZGdzYzloMHBRTW1nQm9GT3hnVUhnNHBRQ2VsQURjVXhCNWt1ZXFwK3BwOG9aRTQrOGVGK3RQampFYUJSMi9Xa0E1UnptbDYwNVZwMjJtQXpvS0RnQW1uR28yNU9LQUc1elNnYzBZcHdvQVVDbHhRQlF4MnFUUUJHN2ZPRkJBOWMxTDFIV3FXNGw5MVdZczdSbWtNVm8zejhyZm5SaGdNY0UwNGV0R2FZaG9WbUhvS01kUWMvaFVnUEZLVjQ5NkFJRWhWZnVqdlVtS2t4Z1lwdU0wQUlCNlU4VUFVeWVUeW9XZjBGQUdmY1A1dDB4NmhlQlRCeGsrbENqQTU2bmswTjl3Z2Q2QUhwbllNOWFDZWNVb3dBUGFrSFdnQ3ZLTU9mcFZhUDc0cXpNY3VmWVlxdkY5NFVBS2YrUGtmU2gvK1BnZlNqcmMvaFFmK1BuOEtBQ1QvQUZpVWt2OEFybHBYL3dCYXRKSi9yeDlLQUpCL3JQd3AxdEJHNnlPNkFrZW9wby8xaCtsRnZkeFJ4T3I1NUk1N1VJR1dQSmlVNUVhajhLZnNqSkkyTGtEUFNxb3YwY25iRzFPKzJML3p5UDUweEZnUnAzUmZ5cDIxTzZxUGZGVnZ0djhBMHlQNTBmYmYrbVg2MEFXREVqQS9LUHFCVEJCSDNGUkM5T0RpTDlhYjlyZi9BSjVqODZBTFFpaUErNERUZkxUKzZQeXF2OXJiL25tUHpvKzF0L3p6SDUwQVdQTFhzby9LbDJwM0NqM3hWYjdXMlA4QVZqODZYN1UzL1BNZm5RQk9VWE9NRDhxVFl2b1B5cUg3VS84QWNXbW02a0IrNnRJQ3g1YStsTHRYKzZQeXF0OXFmKzR0TDlwYy93QUMwQVRtTkRnOFo5QjJvTWFrWXhpb1B0RC9BTnhhUVhMbitCYUFKdktIcWFVUklPMVFHNWsvdXJTZmFaUDdxMERKMmlVakFBRk5XM1hvV0FQdlVUWEw0KzZvcEJOSVA0dnpGQUN5UjdEMUZNNzBuVTVQV2lnQkIvclB3cDJhYXYzalRxQUNnOUtLUTlLQUY2Q2lpaWdCTzlIZWxwS0FDZ1VsTFFCWUZ1dmxCMlk4anRUUEtUc1dOWHZLVXdnSEhRVlhhUExZNEZKZ1ZWakxOZ1pPS1hZRDNJOWF1d0lFSnh3Q01FK3RPbmhWZ0QzSHBRbG9GeW85dU1Bb1NSVVpRQnVNNHJSV050Z1VFWXdja1ZUa2l3VDF6Mm9hc0NJdHVDQU9wcC9sbFh3UjFwSTEzc0FXeFUzM25DbHpnZGM5cWtaTlJWVCswSXY3clVmMmhGL2RhckVXNlNxbjlvUi8zV28vdENQKzYxQUZ1aXFuOW9SLzNXcFA3UWovQUxqVUFXeDc0cGFwL3dCb1IvM0dvL3RCUDdqVUFYS1NxbjI5ZitlWi9Payszci96elA1MEFYS0twLzJndi9QTS9uUi9hQS81NW44NkFMbEZVdjdRL3dDbVIvT2o3Zm4vQUpaL3JRQmRwS3BtL1A4QXp5L1drKzNuL25uK3RBRjJpcVgyNG4vbG4rdEgyNXYrZWY2MEFYYVROVS90ekgvbG1QenBQdHovQVBQTVVBWGFLcGZiWC91Q2srMnYvd0E4eFFCZHpSbXFYMjJUL25tS1Q3Wkovd0E4eFFCZHpSVkw3WkovenpGSDJ1VCs0S0JGMDlLYlZUN1hLZjRCU2ZhcFA3Z29HWEtUSE9hcWZhWlA3Z28rMVNmM0JRQmNwS3FmYVpQN2dvKzFTZjNCUUl0MGhCOWFyZmFwUCtlWXBwdTVQN2dwZ1c2UTFUTjVKL2NGVFdqeVhNbUNvQ0Q3eHBETE1FVzl0N2ZkSFQzcTRvcEZIUUFZRk9KN1VBTlkwYlRqSU9EUUJ1UHNLY2FBRnd2ZnJUZU9nTkdldkZPalhKelFBOVZBR2FjQjNOS0JuNlUxam5nVUFNZHNuRkFGR0tlb3p6UUFLQUJta1p1S1ZqK1ZONjBBTnBUd01DbmJlTTBtMDlUUUFLTURtZ0ROS09hZW9wQUNya1ZJRnhRb3BUVEFRbkZRczJUN1U5MjdWSGpKcEFHS1FjMDRpZ2NVQUdNQ2tZOWgxTktUU0tPNTYwQUxqQUFGQVhKcDFLQjFwZ0lRQ2VLVlJpbEFxS2Nsc1JKOTUrL29POUFDUmt5dVpQNFJ3djhBalU2aWtWUW9DcU1BY0NuNDRwQUZBQjZrNTlxY0JSVEFhYWpJTkUwaFZnRjZqclR3ZHlCc1VBTXBRS0R5YWVvb0FVQ29MbHY0UlZqT0JWSjIzdVQrVkpqUWdISUFxMEJnQVZEQ256NVBhckZDQmpTY0NrRkRjbW5BVXhEbEhGT3BCbnZTMEFJYU1VdEZBQlZDK2NQSXNZL2g1TlhKWEVhRmoyck1ERnlaRDFZL3BRQVVwNkdscEdQRkFBT2MwRWhGTEhvQm1rR2MxRGZTYklnbzZzZjBvQWlWaXlGajFPVFRJZnZVcWY2a2ZTa2krOVFBby80K0dwT3R5ZnBTci94OFBTRC9BSStHb0FWdjlldjBwRy80K1B3b1ArdkgwcFArWGcwQVNEN3pld3FqS2NLRkgxTlhlNy9TcytRNWtZanBtbWdaTmEveFZQVUZyMGFwelFBdEpRS0tRQ0wzK3Bwd3BxL2Rwd29BTzlJMzNUUlFlbEFDMG9wdEtPbEFDMDAvZUZMbWsvaS9DZ0IxRkpTMEFMVFY2VXRJdjNSUUFwb3BLQlFBTjIrdEZJM1VVVUFMUlJSUUFpOS9yVHFhbjNUOWFkUUFVMXVuNDB0SWVvK3RBRHUxSGFpZzBBSlJSUlFBVXFqSkZKVDRjZWFtZW1SUUJxZko1V004NXFHRlc4eHprQW5nQTFLOHNQR0NRZlhiVU1Vc1piSkdNSE9jZGFUQW1lTUt3eWNjNXBjY1p5UXVmU210UEVXSERuOEtmNTBPd0RENDY5S0VJY3JaVnR2SkFxck5GOHhKNmpnbXJFYzhhazdRd3ozSU5Ka01DUjNQZW51TW9Rd3RKSTZyMjVwWm8xM05sbFVqc3g1cTdheGgybVBvUUJpcU1vUjVuWjNJSmJzTTByQVFDMlgwcGZzeStsV2NVWXBnVnZzNitsSDJkZlNyT0tNVUFWdnM2K2xIMmRmU3JPS01VQVYvSVgwbzhoZlNwOFV1S0FLL2tMNlV2a0w2VlBpakZBRUhrTDZVZVN2cFUrS01VQVFlU3ZwUjVLK2xUMFVBUStTUFNrOG9lbFQwbEFFUGtyNlVlVVBTcHNVWW9BaDhvZWxIbEQwcWJGR0tBSWZLSHBSNVFxYWpGQUVQbGowcFBMRlRZcE1VQVIrV1BTallQU3BNVWhvQWoyRDBvMkQwcCtLVEZBRGRnOUtUWUtmUlFBellLVFlLa29vRVJGUlRTb3FVMHc1SndPU2UxQURGaE1qaEZISnJXdDRoREdFVURBNyt0UjIwSGxMenk1Nm1ySUdCUU1DTW4wcHJEUEFvNkRpakczNm1rQWRCZ2RLS09ncE91S1lBb3lhblZjREZOalhBelVoK1VVQU5kdG94VU9HWTV6aW5rNU5MaWdCRlduSGdZRk8rNk9hYWYxTklCcHBLZGlrMjgwd0hGOERqazBtMGtaYmcrbWFlRjIwSG1nQm9GUFhrMG1NOENucW1PdElCd0l4VEdJQXpta2tWbUl3Y0R2VFdDZ1lVQVVBTlBKcFFPS0FLRDZDZ0F4ejBveFNoQ1ZJemlsSXdNMEFOQ2hteDJIV25zb0ZOR1ZISFdsVU0zTEhqMG9BQUtYMnBUa2NDbEFBcGdOYjVWSko0SEpxTzNHY3l2d1g2ZXc3VXNuNzJRUmR1cmZUMHFjREhha0FBYzlLWEZMUlRBS1E4Q2xwclVBUlk1ejFOUExIR085STNBcEV6eVRTQVVWSU9ucFNLS2RUQWh1SDJwdEhVMUJHTXRnVXNqYjNKN2RCVWx1bkpZajZWTzdHU0Jkb3dLVThDbHBvTzQ0Rk1RcWpBejFwd0ZIU2xwZ0ZGRkZBQlJSVEpDVlRJR2Z4eFFCVjFCdmxXTUg1bVA1Q3E0R0FBTzFCWXlTdEllM0FwVHdLQUFVMG5tbC9HbUFkejFOQUQxclB1Mzh5ZGgyWDVhdlN2NWNUUDZDc3BUbkpQVW1nQ3lPSWZ3cElQdlU0LzZuOEtiQjk2Z0FUL0FGNy9BRm9UL1h2UkZ6TS8xb2ovQU5hLzFvQVArWGo4S1FmOGZEVW8vd0NQaHZwU0p6TTMxb0FKRGlPUS9XcUZYcGorNWsvR3FGTkNaYXRmdUg2MUxVZHQvcS94cVR2UU1XaWlrUFEwZ0JmdWlsRkl2M1I5S1h0UUFVamRCOWFXa1BiNjBBTFNpa3BhQUEwZzZtaWtCNU5BRHFXbWlsb0FDZURRT2dvUFNsb0FTaWc5YUtBRVBVVVVIclJRQXRCb3BHNkdnQWorNEtXa1RoQjlLV2dBSEZJZnZDbHB2OGY0VUFQcERSUWFBQ2s3VXRKUUFWTEEyMlpENkh0VVZQais5NlVBWHk3azR5QmswZWJoTm9KeDE2YzFVREJRRHU1cHZtWlk5czlxbTRGMktRRGNjNC9HcEZsWnlRcjhmenJQVnNEa1ZaaWZzekFEMm9UQXRySXc0SnBEMEZOWEdOeGJJK2xEbmo4S29CTE9lTkk1TnpjbHllbFJtQzFMYmpJK2M1NlU2MEpFQzQ3ODArV2RrSUFORDBBcllvcDJLS1FEY1VZcDJLTVV3RzRveFNrVVlvQVRGR0tXaWdCdUtNVTZqRkFEY1VZcDFGQURhTVV0RkFDWXBLZFJRQTJqRkxSUUFtS0tXaWdCS0tLS0FDbTRwMUlhQUVwS2RUVFFBbEZMU1VBSlJTMGhvQUtTbHBLQUdtcGJieWxPOTNVTjJCUFNvWk9sVVpQdmRjVUFiNnp3OTVVLzc2cDMyaUhvSlUvT3ViRERPTjFQQS8ycUFPakRvT1M2NSt0SnVVL3hEODY1NDhqclNBSCs4UHpwQWRDWFU4QmgrZEttM3V3L091ZUliKzhQem9Dc08vNjBBZE1KWWdQOVluL2ZRcHJTb2Y0MS9PdWFJT2YvQUs5SmhxWUhTN2xQOGEvblRoTEYza1QvQUw2RmN3UXhvRzVTQ09vNXBBZFVldVRUYTU0M055ZVJLLzUwbjJ1NkgvTFYvd0E2QU9pQXB5akZjNTlzdXY4QW5xLzUwZmFiZ2ptVi93QTZZSFNnWm94WFBycUZ5RXg1clpGSi9hTjEvd0E5VCtWSURvMEhHYVZteFhPRFVydi9BSjZta09vM1dmOEFXdFFCMEpOUjlUWFB0ZTNEOVpXNDk2UVhkeC96MWY4QU9nRG96d0thT3RjK2J5NS81NnYrZEF2cmxmOEFscTFBSFNEMHB2M2pudDJybnhxVjBQOEFscVRVaDFLNUhBZkErZ3BnYnA5S2Q2Q3VmR28zV2MrWitncGY3UXVzNTh3MEFiNG9kd2lGajBGWUg5bzNmYVUvbFF1bzNERWIyemprWkhlZ0RkZ2pLcmx2dnNjbXBhd1A3V3VmN3cvNzVGQjFPNVAvQUMwL1FVZ09nb3JuVHFOei93QTlUUi9hTnovejFhbUIwVk5OYytkUXVzZjYwMGZiN3ZIK3RhZ0RjYjVqaW5nY0FWejMyNjZCL3dCYTFMOXV1ai95MmFrQjBkUlhEN0l6anFlS3d2dGwxL3oxZjg2YTExTzU1a1k0OVRRQnJLQ3hDaXJpcUZVS08xYzR0MU9weXNqWnBmdGx6L3oxZjg2U0d6ZmJKNmQ2ZW9BSEZjNTlwdVArZWovblI5b3VmK2VzbjVtbUk2U2xybWZ0RS9lUi93QXpTL2FKditlai9uVEE2V2tKd0s1cno1VC9BQnQrWnBQTmxMY3N4ejcwQWRNTTQ1cUM4YmJBZlU5cXdtZVhnNzIvT21DV1R6RitZL2lhQU5ORjJxQjM3MEdxaTNFbWV1ZndxMk9tYUFHdDk4ZnJRT1dwTzVQSXB5RDVjbWdDcmZ5WVZZeDM1TlUxNlU2ZVR6WjJidDBIMHBGNlVBV0cvd0JWK0ZFSFdoLzlWU3dkNkFHdy93Q3NmNjBSZmZmNjBsdjk1ejcwc1BWL3JRQUovcjJwSXY4QVdNZmVoUDhBV3Y4QVdpRHF4OTZBR1QvOGU3ZlgrdFVxdVhKLzBmOEFHcWROQ1pjZy93QlVLZlRJZjlVdFB6elNHTDJwakg1VDlLY1RTTU1SbWdCUlM5cVNsN1VBRkllb3BSU0g3dytsQUMwdEpTOXFBRXBxZnhmV25VMWVuNDBBT0ZMU1V0QUNIcFMwaDdmV25VQU5OTFNIclMwQUozTkZIYzBVQUxUWCs2YWRUVzZmalFBNGRLTTBVVUFGTkgzalRxYXZWdnJRQXRMU1V0QUNkcUtLS0FBVVpBNjBVb1hjUjZBMG5zQXBQSFBXbUFmTm1wbmozU0JWNlk2MUhLQWtyQWM0T09hZ1pJRDBCemdjNHFXSWJHVWoxelVDNXpuR2NWTUdPUWFHeEU2eXI1Z3owem1uU1hJY2pBQUdmWHJWWnNkY1k0cEZBSTRIME5MbVlGeG5VUURiMTlqVVpaSGtCT2V2RlFLQ09EU1o1K1hqNlVjd3l4UlMwVm9JU2lseFNVd0NpZ2lpZ0JLS1dpZ0JLS1dpZ0JLS0tLQUNpaWlnQXBLS0tBQ2tvSkhxS2FYVWRXSDUwQU9vcU16UkRySXY1MDAzTUkvakZBRXRGUWZhNGMvZVA1VTAza1hiY2Z3b0FzMEdxcHZVN0t4cHB2UjJqYWdDM1RUVlg3WTNhUDhBV2srMVNIcEdLQUxkSlZUN1JOL2RGSjVzNTlQeW9BdDBWVTN6bitMOUtUTXgvak5BRnVpcW0yVTlYUDUwaGpmdTUvT2dSYWZwVlNWQzMzUVQ5S2prallEcWF0Mkovd0JISHNTS0JsRXhTQS9jYjhxTVRmM0cvS3RmTkxtZ0RIUG5mM0QrVkp1bC91SDhxMlNvY2U5Q2oxNjBBWSsrVCs1K2xIbVNEK0g5SzNZOGNnMGhBelFCaCthMzl6OUtQT2IrNEsyOEQwcE5vOUJRQmkrZWY3b284LzhBMlJXMFZIb0tOaS8zUitWQUdNSnMvd0FOU1pQOTM5YTF0aS8zUitWR3hEL0NQeXBETWpkNmlrTWc5SzJQS1QrNlB5cFBLai91TCtWQUdQNW85S1h6UjZWc0NDTHZHdjVVR0NML0FKNXIrVkFHUDVvOUtYelY5SzFoYncvODgxL0tsRnRDZitXUy9sUUJraVJmUTB2bUo2R3RVMnNIL1BKZnlwUHMwSC9QSmZ5b3NGek04MWZlazh4UGV0UTJzSC9QSmZ5cFBzc0gvUEphTEFabTlQZjhxUE1YL0lyVCt5d2Y4OGxvK3lRZjg4eFFGek44eGZYOUtYelI2bXRMN0hiL0FQUE1VZlk0UCtlWW9DNW1pUWV0RzljOWEwL3NjSC9QTVVmWXJmOEE1NWo4NkF1WnU1Ty84cVRjbWUzNVZwL1lvUDhBbm4rdEgyRzMvdWZyUUJtYjE3SDlLVU92citsYVAySzMvdWZyU2l5dC93QzUrdEFHYnZUMS9TbDNyL2VyUit3Mi93RGMvV2wrdzIvOXo5YUFNN3pGL3ZVZVl2OEFlclIrdzIvOXo5YVQ3RGIvQU56OWFBTTd6Ri92VWIxUGV0SDdEYi8zUDFwZnNOdi9BSFAxb0F6ZDYrcG84ei9hTmFYMkszL3VmclR2c1VIOXo5YUFNdnpQOXBxUE1IOTQxcWZZNFA3bjYwbjJHMy81NS9yUUJsaVJjL2VKcDI4ZXByVEZqYmY4OC8xbyt4Vy85ejlhQU12ekJqcWFONFBjMXFmWXJmOEE1NWo4Nlg3SGIvOEFQTVVBWkJWaWNnbm4zcEVVaCtTYTJQc3NJSDNLcTNVS1JxcFZjSFBXZ0NCT1dGWGNrSVA1MVVoNWtVVmFZa3FmVHRURUtmbU9PNXBMbC9MZ1lqcVJnVXFENWlUMnFucUVtNlFJT2k4bWdDcUtlblFVd0NwRSs2S1lFOG4rcnBZTzlKTDl5bGgrNmFRRExib3hwWU9qZldrdHZ1bWxnKzZmclFBa2YzMyt0SmI4aHFXTCtNKzlFSCtyWTBBUlhQOEF4N3I3bXFsVzd2OEExS0NxbFV0aE11eC82dGZwUzk2RSs0djBwYWtZRHJTT2VQeEZPcGpjN2ZyUUE2aWlsb0FCU2Z4L2hTMDMrSS9TZ0IxQm9GQm9BTzFOWDdvcFNlS0YrNlBwUUF0TFNVRTBBSWVvcDFOL2lGT29BUTBVVVVBSU85TFNDaWdCYVE5UjlhV2svaUZBRHFRMFVVQUZOWG9mclRxYXYzUlFBNmlpaWdBcEtXa29BV3A0U0ZqQjZISk9mYW9LZnRiYUg3S0ttV3dGaUVmTDVoemtucWFyS3ZtdXpIM1AxcCs1Z25IT1IzNjBKbEltS25BUGFvSGNZbjNzWjY4VkxKbFJqT2ZjVTFSbDZjM0xZSFhGREVOT1NNRG1ub1NvL3BURUk2WnA1K1drTWVyQWs1eFRXSHpjZEtZRzNQOEFTcERKZzlLUUU5QkZaV0xoditXamZuUjVVcDZ1ZnpyY1JxWkE2a0Q4YWFaSXgxa1g4Nnpmc3pIK0kwb3RUNm1nQytiaUVmOEFMUmZ6cHB1NEIveTBGVXhhQ25DMVgwb0FuTjlBTzVQNFUwNmhGNk5UQmJMNlVvdDE5S0FGT29MMmphbW0vUGFJL25UeENCMnBSRXZwUUJGOXVsUFNNVW4ydTRQUlFQd3FmeXg2VXV3VUFWdlB1ajNBL0NrMzNKL2pOVzlnbzJpZ0NudHVEMWtiODZQSmxQVjIvT3JtS01VQVUvc3hQVmpTL1pSNjFiMjBiYUFLb3RscFJicjZWWnhSaWdDdDluWDBwM2tyNlZQaWt4UUJENVMrbEw1YStsUzRvSW9BaTJDallLa3hTWW9BWnRvMjAvRkdLQUc3YVRiVDhVbEFDWW94UzRwYUJFRXE4R2tzVDhqcjZOVXJESXFPMitXV1FIdmcwRExRcGFRRVVveDcwQU9Xbk11ZVIxcG8vR25aT0tBRkh5cms5YVRkVFNlMmFUT1BXZ0IyYU1pbTd2citWRzhldEFDOFpwYWJrWm96OUtBSFpGS0RUTS9Tbi9LQnhRQXRMVGMwQnZwUUE4VUdoU01VRWlrQUNsRkprVVpGTUJjMFVuRkZBQ0UwbEthU2dCYUJTVXRBQzA3Tk54U2lnQmMwdElPdE9Bb0FVVUdsQW9JcEFOcE0wNGltNHBnR2FNMFlveFFBdWFCVGFXZ0JhQlNjMHRBQlJSUnRJSE9NKzFBQzVvelNZb3hRQTdOQk5JS0RRQVVab3BLQUFuaXFWKzN5TDlhdU1PS282aHdxZldnQ0sxLzFtVFZzOWhWUzE1ZXJRNWVnQ1FFS3VUMjVySWR0OGpNZTV6V2hleWJJZG82dHgrRloxQURoVGw2Q21DcEY3VUFUVGZkSDFvajRqYjZVVGZkSDFvVC9BRkxmUTBBSmJmNnMwVy8rci9HaTMvMVRVUWY2b1VBTmorNDUrdExEeEMzMHBzZitwWS9XblI4UUdnQ082Um1STm96aXFmZXRkWVBNVElJQkZWYnUxTWFDVXZrbHNISXBwaFlVZEJTMFVkNlFCVFcrOHYxcHhwcCsrdjQwQU9vN1VVSHBRQVVnKzgxS0thT3JmV2dCK2FEU0NnMEFJMzNUOUtVVTF2dW1uVUFGSjFOT29vQVQrUDhBQ25VMytNbjJwZTFBQlJSUWVsQUNEcFIzbzZVQ2dCYVQrTDhLVTBnKzhhQUZvb29vQVE4QTBpL2RGRC9jTkxRQVVVVVVBSGVpanZSUUFWY2lRRkY1eDYxVHE1R3d4OUtpWUNlUVFTUjA3Q2hZZmtJT1BVQ3BCTDM3VUU3MXlwNmRxeXV4WEF4QUtDS2hiZ0huSjZWT01oTnBwbUFQclR1RnlBUkVBWkp5ZTFPYklUQVBOU0Z1UFUxRS9DNXdhWXdVQUhQYzBweGprNHhTSU1BYnVwNisxTlBHVkJ6UXhrMnlsMmowcDJLTVZzSWJ0bzIwL0ZGQURNVVlwOUpRQW1LVEZPeFJpZ0J1S1hGTGlqRkFDVVlwY1VZb0FURkdLV2lnQk1VWXBhS0FHNG94VHNVWW9BYmlqRk94UmlnQnVLVEZPSW94UUEzRkdLZFNZb0FiU1U2a29FSlJTMGxBQ1VVdElhQUVwYVRtbG9BYWFpVVl1UHF0VEdvOGZ2Rk5BeVg4NlVHa3BhUUM3alR0MU5vb0dCSXBmeHBNYzlxWEhIU2dBL0dtbW5ZcERRSVQ4YVhOSVJSVEFYZzlhTUQxcEtjQWFBRkhIZWxCUDFwdEtwd2FBSkFmVVVwSXFOVGhpZVRtbHpTQWRrVW9JcG5ORk1CeHpSbW0vaFJRQUZqVGR4OUtLS1FEZzFPQkhyVWY0MHRNQ1VmV2x4NzRxTmFXVlMrTnA2VUFTRHJpbkROUW9TRHljMUlHOTZBSmMrOUlUVE0rOUljbnZRQTRubWt5S2FSVGNjOUtBSGIxcGQ0TlI0UHBTMEFTWkZBSU5SNU5LRFFCSnhTNHFMY2FkdW9BZitGS1dGUjd2ZWduTkFEOGoxb3lLanpSbWdDV2s0cG9OSDUwQU80bzRwdWZyUm1nQng2ZGF6THdzZUQ2bXI3TVFwSTYxUXVpU3FFOWVjMEFKYThFL1NyYWdjZTlWTGJsNnR5TUk0MmYwRkFGQzhrOHljanN2QXFBVUhKT1Qxb0ZNQlJVcWRSOWFpN0dwVSs4djFwQVNUZEI5YVVjVzdmU2ttL2hvUDhBeDd0OUtBQ0hpQnZwUkZ4Q1BwUkh4Yk45S0UvMUg0VUFNWC9qM05LditvcHZTM3A0L3dCVVB3b0FzeDNFY1EydWVUVGRRWkd0NHpHMlFaS3JYTWVmbkhVQ2xsUCtqMjYvN1dmMG9BS1FVdElLQUZOTi9qSDBwMU5IM3o5S0FGcFRTVUdnQmFhdmY2bW5VMVB1aWdCd29OQW9OQURXNkQ2aW5VMXVxL1duVUFLS0tLS0FHajd6VTZtcjFiNjA2Z0JLRDBvb1BTZ0F6UlNZcFJRQVVEcWFLRjcvQUZvQVdrb29vQVJ1bjQwdE5icW85NmRRQVVVVUNnQW9wQjBwYUFBZGFuVmg5T2FoSFdsVjl4d2NqSGVva0lzcXJiZm14MTlhUWJnd0s5RDFxUGVmWElvM2tFbko5eFdkZ0hzN0Z6bm9LVHpEeFVJWWhqampQclVpblBhaXdEbGZtbmVhQ09uUHZVVEVMeDFOTU1uTk93RTdLQ3VTZndxczNJMmpnZHpUeEw2RG4zcHBrWE9UZ2loQVhzVXVLWEZHSzFBVEZHS2Rpa3hUQVRGRkxpaWdZbUtLV2tvQU1VVVVVQUZGTFNVQUZKUzBVQ0VvcGFLQmlVVXRKUUlLS0tLQUVwS1VtbUdSQjFaUitOQURxU28ydVlSMWtINFZHMTVFT2hZL2hRQlBSVlUzbzdSc2FhYnVRL2RqRkF5MmFTcVpublBZRDhLVE01NnVmd29BdTBoWURxUVB4cWw1Y2g2dWZ6bzhqMU5BaTBaWXgxZGZ6cGh1WWgvRm42Q29SYmlsOGxSMm9HT2E3VHNHUDRVMFhhN2hsU0JucVRSNVlxS1JPT2xBRjRTeEgvbHF2NTA3ZkgvejBUODZ5Q3ROSW9zQnRncC9mWDg2VWJlekwrZFlWRkZnTjdHZTRwZHB4V0JrK3RHNXZVL25RQnY3VFNiVDZWaGlSeDBkdnpvRTBvNlNQLzMwYUFOdmFmU2pCckdGek1QK1dyL25TL2E3Z2Y4QUxWdnpvQTE4ZTFLS3lvN3k0ei9yVFV2MnlmOEF2L29LQU5HaXM4WGsvd0RlSDVDbkM4bTdsZnlwREw0RkxWRDdiS0RqQy9sUy9iWlA3cS9sUUJlNW9xaUw2UTUrVmFYN2MzZU5hQUx2TkZVeGZFLzhzeCtkTyszY1o4djlhQXNXYUtyaTlCQVBsbjg2UHRxZjg4eitkQUU5RlFDOGovdU5UdnRrWS9oYWdDY1VWQjlyaTlHL0tsRjNFZjczNVVBV0ZGTFVJdW92VS9sUjlxaHpqY2MvU2dDd0tXb1Jjdy8zL3dCS1B0TVA5OGZsUUJMU0dtZmFJZjhBbm9LUFBoei9BS3hhQkRxTTAzell1MGkvblI1a1ovalg4NllDNXBSVGQ4Zjk5Znpwd2REMGRmem9BV2luWlFmeEwrZElRQ2VvL09nQkJ5YVhIRkl1TTlSK2RQN2RhUURNVVlwMktNVXdFRkxSaWx4UUEyaW5iYVRGQURXSHltcys1enNUSXgxclJJNHJQdVdMS3U3MU5BQlpmZjhBd3AxKy93QXFvRDE1Tk1zeis5cUdkL01tWnUzUVVBUjBVVUNtQXZyVXFmZkZSZHFtaisrS1FEcHVvcFcvNDl6VFpmdkNuU2NXMzVVQUM4V3JmU2tIRUg0VWY4dXJmU2h2OVFmcFFBeHVMY1UvK0JmcUtZLytwRlA3SlFBK1lnUjVOVlEyUkNQUW1wcmc1QUE3ZGFycHpJbzlBYUFKNkJSUUtBQ2tIM20vQ2xwRjZ0OWFBSFVocGFUdlFBZHFSUHVMOUtHKzZmcFF2M1JRQTRVR2lrTkFDSDd5MDZtZjh0QjlLZlFBdEpSUlFBaWZkSjl6VHFhbjNCUzBBRkJvb29BS0JTVXRBQlFPbEJvSFFVQUZKU21rb0FRL2VXblUwL2YvQUFwMUFCUjJwS0Qwb0FPMUtLU2lnQVpnb3llbE4yamNXK2NmeXB4RHNEc0dUVVBtUHpuaGZYcFVzVEpkNHlLYTBnQzR6VUxNT01Oay9TbWtuaGpTc0JJSEpPTW1wZDJWNVlZOUtyYm1adTFLQVNlQm1pd0ZyZXFqL3dDdlROMlRuUEZRREJPR0JvUTg4OU0wV0Ftems4RE5KOGg0WVk5cVF1Q2Z1MDEzeXZZRVVXQTI2V2t6Um1xQVdrcGMwbWFZQzRwTVVacHBrUWRYVWZqUUE2a3FKcnFGZXNnL0NvMnZvUjNKK2dvQXM5S0twSFVCL0RHVDlhYWI2VS9kakFvQXY1b3JPTnhjdDBJSDBGTlAyaHVzalVETkltbW1WRjZ1by9Hczd5SGI3emsvalNpMUhlZ0M0MTFDdi9MUWZoVWJYMFE2YmorRlJDMVgwcDR0MUhhZ0JEZmorR01uNm1tbTltUDNZd0tsRVNqdFM3QU8xQUZjejNKNllIMEZOSnVHNnlHcmUwVW0yZ0NwNUx0OTVpZnhwUmJEdlZ2RkdLQUtvdDE5S2NJVkhhckdLVEZBRVFqSHBSc0hwVXVLTVVBUjdhTVUvRkdLQkRjVVlwMktDS0FHNHBNVTdGRkFFWkZNWVpGU21tRVVBVlhXb3lLc3VLaFlVd0lpS1RGUElwcEZBeHRGTGlqRkFDVWxMUlFBbEZMU1VBT2krLzhBaFUyS2lpLzFncWRoMnBBSXVEVHdLWkd1RFV3SE5JWkd5OGlseFR5S01VaGthamxxVWluS1BtYWhoeFFBMVJ4U2tmS2FWUlRpUGxOSUJpRDVCUVJTeGo5MktVaWdCb0ZERGdmV25BVXJENWZ4RkFEY1VpRGlwQ0tSUlFBQVVqRDUxL0dwQUtZdy9lSitOQUM0cHVPYWx4VE1mTlFBM0ZBSHpmaFQ4VUFmUCtGQUVUNUE0cFFPS2tLMG1LQmtiWkJ6VGw1ay9Da1lVc1EvZUVlMUFpVEZKam1uMFk1b0dOcEd6bGZyVDhVampsUHIvU2dCZWZXakxlcC9PbHhRUlFBZ1p2N3gvT2xaM0ViRU1lbnJTQWRhVngrNmI2VUFQM3VCOTQvblNpUi83eC9Pa0k0cFZGQUFaSHg5OC9uVUVwK1hKcVlqaW9aUjhob1RCa1NTN2NsUnowcGxOVHY5YWZWa0NVVXRGTUFxYVA3OVJDcG9seTJjZ2UxSUFsKzhQcFN5L3dESHVQclNTLzZ6OEtXNC93QlF2MUZBQS9GdFJKL3FUOUtKUCtQY2ZVVWt2K3FvQWJKL3ExcDUrOGxNbCs2bFBQMzErbEFBdHhFcnVrZ09NODhacU9ReG01SGtuSzdLdlFXOHI4akNnK3ZlcXR5dXkrZGM1d29vQWJRS0tLQUNrWHY5YVdtcDkzOFRRQStrNzBVZDZBR3Y5dy9TbkNtdjkzOGFkUUF0SlM5cVNnQnYvTFEvU25pbUw5OXZ3cHdvQVdrYm9hV212OXcvU2dCVSs0UHBTMERvS0tBQ2twYVNnQXBSU1VVQUI2VXZha3BhQUNrb29vQWFQdm42VSttS2VXK3RPb0FXa1BTaWcwQUZGSlIyb0FzV3BUSkI1enhpcG5ndHp5eS9yVktDNElYWndNR2t1SjhzZXdIUVZrMDJ4RmlTeGpZZ3hrS285cWgrd01UaDNBSGJGUHQ3c2hNTWM0OWFtKzFLVTNBWkdjVXJ5UUVhMnNDS0Fjc2ZXbVNXeUVmdTMyL3JVd2xSeGh1Q2U5VnA3Y2hmM2JodnBUVndzUXZiU0E1TEtjZHlhajVEYzhHbitVeDZuZ2V0S0ZBNmpQdlZsV0dNL0hRRSt0TUJMZFIwcVlLQnp3UlRPRDBwaFl2blVFL2hSalREZnlIN3NRL0dwQmJyNlU4UXJURVZqZFhMZEFCK0ZOTFhUOVpEK0ZYUkdQU2wyQ2dDaDVNcmZlZGpTaTE5U2F2N2FYRkFGSVdxOXhUeGJyNlZheFNZb0FnRUtqdFRoR1BTcGNVWW9BakNDbmJSVHNVVUFOMjBZcDFGQURjVVlwMktNVUFOb3hUcUtBRzRwTVUra29FTnhSaW5Zb29BYmlreFRxS0FHNG9wY1VsQUNVVTZrb0FTa3AxSlFBMDBVdEpRQTAwdzA4MUd6cU9yQWZqUUExaFVUQ25OTkg2NStncUpwYzlGUDQwd0drVTBpZ3N4N0FVMDU5YUJpbWtveFNZb0FLU2xwS0FDa3BhS0FGaS8xcTFiNzFUVGlSZnJWM3FhUUFCelVncG1LZDNwREE5YVRGTUorYXBCMEZJQkFQbmI2Q2hoeFNqNy93Q0ZLdzRvQWFCVGlPRFFPMUwyTklZeUwvVmlsSW9pKzUrSnBUVEFRQ2xiN3RDMHIvY05JQU5JdE9JcEY2VUFLS2EzMzBwNHByL2VUNjBBT3hUU09hZlNIclRBVEZBSHovaFM0by81YUQ2VUFHS1RGT294U0FZVm9VWWwvQ25Zby81YkQvZG9BZmlreHpUcVFVQU54elNTZFUrdjlLZjNwc25WUHIvU2dZdEthVUNrSXpRQWdIV2xrSDdsdnBTcUtTWC9BRlRmU2tBOGppZ0NsTkhRVUFOSTRxTnhrVk1SVVREMm9RRk5SalAxcGFYK0p2clJXaUlDa3BUMG9wZ0tPMzFxV1A3OVJEcVByVTBmM3FRRFpQOEFXVXR4L3FsK3RJLyt0TkxjZmRUNjBBTE4vcWtIdUtTYjdnK29wWnZ1UmozcEp2dWo2MEFObDZwVW4vTFFmU281UHZwVW4vTFg4S0FOVkRoRjloV1RjbmRmekg2RDlLMStGQXo2VmpPUzExT1QxM1V3RXBSU0dscEFGTlQ3b3B4NlVpajVCOUtBRm9vcEtBRWZvdjFGT3BqZFYrdFBvQVdrcGFTZ0JxOVcrdE9wRjcvV2xvQVdtU2ZkTk9wcjloN2lnQjlGSlJRQXRKUzBsQUJSUlJRQVV0SlJRQVVVZHFLQUdwMFAxcDFOVDdvcDFBQlNlbEZIZWdBcGFTaWdDM2JpMzh2NTRBeDduT0tsMjJaT1Ribi9BTDZxdW1RZzRwNDl4UUZ5ZmJaSC9sM1A1MEdPeUF4NUxEMkRHb01aUEZPMkhxVFNDNUo1VmoxOHB4OURRSWJMSEN5ajZHb3d1QngxcE9SMi9LbUZ4N1FXV2VXbS9TbWZackwrRjVBZmRSU0ZnZW9vcEJkaW15dGNjVE9EL3UwR3d0MkF4TVFmWGJTRlc3R2t3K2VXcGhjbm94UnpTRUgxb0VMUnhTYmFYQW9BUW1pbHhSUU1RZzBZcDFKaWdRbUtNVTZrb0dKUlMwVUNFb3BhS0JpVVV1S0tBRW94UzBVQ0V4UmlpaWdCS0tLUWtEcVFLQUNrcGpUeEwxY2ZoVVRYa2Y4QUNHYjhLQUxGSlZRM2JuN3NmNTAweTNEZHdQb0tBTGxJenF2VmdQcWFwRkpXKzg3SDhhQmJqdlFCWWE1aUg4V2ZwVVp2Ri9oUmpTQ0JSMnB3akhwUUJHYm1RL2RRRDYwMHZPMzhXUG9LbjJEMG8yMHdLM2x1MzNtSi9HanlRS3NZcENLQUlQTEFwQ29xWWltRVVBUWtVM0ZTa1V3aWdCbEpUeUthYUJpVWxPcEtBRXBLV2lnQkYrK3YxcTlqQnFsMElQdlY4MGdFcHhXa3hUKzFJWkdVK2JOT0F3QlRXa3cyRFVuQUhQU2dCby8xZytsS2VsSUNDNHgwd2FjZWxJQkIwRkxTRG9LY0tReU9Mb2ZyVG1wSS93Q0w2MHBwZ05CK1lVOXZ1SDZVMHFUMDYwRW5ZUWZTZ0I5TlhxYWZUUjFwQU9GTmY3eWZXbjAxdXFmV21BN0ZScmtFNXFhbU1QbW9BRFFQdmo2R2taY2pGS293eS9TZ0JhU25VbEFCUi95MUgrN1Mwbi9MVWY3cG9BZlNkQWFkVEcrNmFRQlE0eXlmVS95cFIwRkRmZlQ2bitWQXhRTVVmeFU3Rkozb0FZNE9SZzBzbityTkFITkV2K3FOSUIwamJSeFFoM0tDYWVRRFRTTURqcFFNWHRUQ09PQlVnNkNtbk9PS0JGRnZ2dDlhS1Z2dnQ5VFNWb2lHRkZCb3BnTDNIMXFXUDd4cVB1UHJVa2YzajlLUURHLzF0T3VQK1dZOTZhMytzUDFwMC8zbzZBRm0vd0NXWTk2U1grRDYwczMzNDZTVDd5ZldnQnIvQU90V3BGNW0vS28yL3dCY1BwVTBLbDdnS09wSUZBRjlwRlZnTUVlNXJKQjNTeXNPN210UzR0YmpHUW9mSDkwMWt3NXcyZXU0MHdIMHRKUzBnR3Q5MC9TbkRvQlRYKzRmcFRxQUVwYUtCMG9BYWZ2citOT3B2V1FmU25VQUZKU21rb0FSUHUvalRxYW4zUlR2d29BS2EvM2wrdE9wcmY2eGZ4b0FkUlJSUUFVbExTVUFGTFFLRFFBVVVVVUFGSTNDbWxwci9jTkFDcDkwZlNscEIwRkJvQUtPOUZBNm1nQXBhU2xIV2dDeEUzbDhrRTFMNXlrajVDUHdwcHdCamlnZ2tmeXhRSWtKUmh6VFdJSFEwM1pMalBRVW0zUGJtZ0JkL3ZRUzJmbE5CUWorR2s1Qi93RHJVQUJMSHFCUmdnZEJTNXgxeFM1ejA1b0FqTG4xcEN6R25GUVRrZzBCUjJvQXNVVXRGQUNVdEZGQUJpaWxwS0FDa3BhS0FFUEFwQWM5c1V0RkFCUlFTQjFJSDFxSnJtRmVzZy9EbWdDV2lxclgwUSs2R2I4S1lieHo5eUxIMU5BeTVSbXFCbHVYN2hmb0thWXBYKy9JeC9HZ0M4MGlMOTUxSDQxRTEzQ1A0cy9RVlhGc085UEVDanRRSVUzby9oalkvV21HNW5iN3FLdFNpTWVsS0VGQXl1VGNQMWtJK2xKNUJZL014Tld0dExpZ0NzTGRmU25pSlIycWJGR0tCRWV3RHRSdHFURkpRQTNGR0tkaWpGQURjVVlwMktNVUFNeFNVL0ZOSW9BYWFhYWZTRVV3R0dtRVZJYWFhQUlpS1lSVXBGTUlvQWpJcHRQTk1MRDFvR0pSU0Z2UVVtVFFBdEprVWxHS0FBc0t2S2NEOEtvR3J5SEtyOUtRRDg4MC9zS2pIV25ucFNHTWtBTlBBeUtqYnJUMVBGQUM0QWRmeHBUME5NWS9NdjFvTFVnSENuQ290MU9WcUJnblZ2clRqMXFOVDh6VTdKSVBOQURpY0dodVZiNlZHRGdZSnpUZ2NnMENIam9LVVV4VDhvK2xPQm9HUHhUR0dDdis5VGdhYTU0SDFGQUVsTmJyUURUVzVCRkFDZ1lHS1VmZlg2R2t6Z1VLZm5INDBBUHBLWE5OelFBdEgvTFVmUTBaby81YUQ2R2dDU21rWkJwMmFhVGdHZ0JBT0JTdDk5UHFmNVVnUEFwVDk5UHFmNVVnSDAxdjYwNm1zT1B4b0dJT3RFditxTktPdEVuK3JQMUg4NkFKTVVtTWpGT3BRdlhpa0EwaW00NHFRcWZRMHdlbUtBS0xmZmYvQUhqU1VyZmZiL2VQODZLMFJBbmVpaWltQW82aXBZK3BxSWRSVXFkNlFFZi9BQzFQMXAwMytzU21qL1cvalRwZjljbjBvQUpmOWNnOXFTVC9BRmlVci82OWZwU1AvclYrbEFDSC9YL2hWaXovQU9QeFQvdENxNC8xNXFlMFAra0Evd0MxUUJ2N2hnbXVYaU9WSjlTVFc2OHUyRis0Mm4rVllNUCtxRkNBZlJSUlFBMS91MDZrYm9QcUtXZ0FOQW9ORkFDZjh0RDlLY0tZUHZ0K0ZQb0FRMEhvYURTTjkwL1NnQVhvUHBUczBsRkFDMHovQUphajJGUHBnLzFwK2xBRDZLS1FVQUxTVXA2VWxBQ2lrTkZMUUFVVWxMUUFVeVQ3djQwNDlhYS84STk2QUhkNktRVXRBQ1VDbHBCMG9BVVU1ZnZENjAwVStGOWtxdDF4elFCYVJHa1hjcUhIclNrTkdBUUcvS2lLN2JZQ0NNZlNwbHUyUFVLYUFLeHVHNkhQNVVubSsyZndxNTlvalAzb2hWZDNpM25id00wQVI3eWUxSG1BSEhlbitZbnJUQ0ZJTEFuSW9FT0RBLzhBNnFDNmdkZWFqMyt2TkwxSFRJb0FVdm1ndUFPaHB1ZG8rN2lneVo3VUFXNktpYTRoWHJJdjRHb212NGg5ME0zNFVBV3ZwUlZGcjZRL2NpL09tR2E1ZitJTDlCUUJvMDFwVVg3enFQeHJPOHVWejgwakg4YVVXdzc4MEFXbnZJVi9pejlCVVRYNC9nalkvV2tXM1VkcWVJZ0tCa1J1cDIrNnFyVFNiaCtzaC9EaXJJUVU3YUtBS2YyY3Q5NGsvV25yYkw2VmF4UzRvQWdFSUhhbkNNZWxTNG94UUF6WUtYRk94UmlnQnVLTVV1S1hGQWh1S01VN0ZGQXh1S01VNmlnUTNGSlRxS0FHMFlwYUtBRXhSUzBsQUNVVXBwS0FFcHBGSThxTDFZRDhhaWE2VCtFRnZvS0FKVFRUVUJ1SkQ5MUFQclRDWlc2c2Z3cGdXR1lEcVFQclVMVG9PaHo5S1o1WGM4MGJBS0FFYVluN3EvblRDem52ajZVL0ZJUlFCSHQ5VFNZcVEwMDBERzRvcGFGUm0rNnBQMG9BYlJWaExTVnVveFV5MlNqN3hKcEFaNXE3Q014cngycVlXeUwwVVZLc2VBT0tBSU5wOUtmMnFYeTZQTHBESzdESm9DbkZUR1BGS0U0b0FybEd5UFkwRkc5S3NiS1haU3NGeXJ0YjBwUUQ2VlkyVWJLTER1VmxIek54UVNmUTFZQ2ZOU2xQYWl3WEtmZW5LZUtzN1Bhanl4NlVXQzVBcmZLUHBTNXFieXhqb0tQTEhwU3NGeU1IaWtZL0wrSXFieWg2VWpSREZGZ0dab0o5S2s4a2U5SVl2YzB3SXMrdE9CK1pmeHAza0U5NlVRc0dITkFDWnB1ZWFlWW05cVR5bjlxUUNacGMvT1BvYVBLZjBvRWI3d2R2YWdCK2FSanhRVmIrNmFhd2JqZy9sUUFvWURpblpCZE1lLzhBS29zSDBOT0hEcCtOQXliTkl4NG96elNFMGdDbktobFpZd2VTYWpKcWF5QmVjRUhHS2FCbW5IR2lEQUFwN2dFWURiZmNVNVZBRk93S3N6RUFGUTNNQ3VoSUdHSGVyRk16bklvR2MwZXJmVS96cEtjZXArcHBLQUcwQ2lnVXdGSFVWTEdPRFVZNjFKSDBOSUNOZjlZZnJUcFA5ZXYwcHFmNno4YWMvd0R4OEQ2VUFJMy9BQjhENlVOL3JoOUtQK1hnL1NnLzY3OEtBRVgvQUZ6Vk5heE5NNVJHQ3NTY0UxREgvckhOU3dYUDJYRXVNODRvQXR6VzExRmF5TVdRZ0tjMW14ZjZ0ZnBXMWVYTVQ2VzdxUmwxSUFGWXNmM0YrbEFEcUtRMHZhZ0JHNnI5YVdtbjd5MDZnQU5KU21pZ0JxL2ViNjArbUwzK3RPRkFBYVJ2dW1sTk5ib1ByUUE2bHBLS0FGcGkvZmY4S2ZURTZzZmVnQjlKUzBsQUFlbEptbE5GQUJSUU9sRkFCUlFLV2dCS2EzMzFGT3BwL3dCWVBwUUE2aWlrb0FYdFNEb0tEMG9vQVVWSE4vcThEdWFrcGo4c2dQclFCSVRQaFFvWUFER0FhUVBPRHlySDhLc3F3SFFrVS96RDZqOHFReWtaSmgyWWZoVXFZSStiT2U5V0JJZlFmZ2Fxc0NzamM1NXBpWk1FWFBXZ3FxOGc1K2xScTN0VWdkY2NpZ1FiaG5yK2xUS3lGUm4rVlFsbFBHUDBwTWU5QUV4Mlo2VTFnbFI3ejA0bzVOQXlKYlpSMnFRUWdkcW4yMHVLQUloR1BTbkJLa3hSaWdCZ1dsMjAvRkdLQUc0cGNVdUtNVUNFeFJTNG94UU1TakZPb29BVEZHS1dqRkFoTVVVdEpRQWxGTFJRQWxGTFNVQUpSUlNNd1Vja0Q2MEFMU1ZFMTFFdjhXZnBVUnV5ZnVSbjhhQUxWTkp4VlF5VHYzQ2oyRko1Slk1ZGkzMU5BRmhwNGw2dVB3NXFKcnNmd0l4K3ZGSXNDanRUd2dGQUVSbW5ib0F0TktTUDk5MlA0MVkyMFlvQWdFQUhhbkNNRHRVdUtURkFETm9wTVUvRklhWURDS2FSVWxOSW9BaklwcHA1Rk5OQUREVFRUelREUUEzdlc5RUVLZ2JGNmRoV0ZuREEraHJjVExEcGswbU1tV0pEMkkraHAva0wvZVA0Z0dvMUpVL01ycit0U0NWUDcvNWlrQW4yZGZWZisrYVBzdy8yZjFwNGtYczYwb2IzVS9qUUJIOW05aCtkSjltLzJUK0JxYmNmVDlhWGQ3R2dDc2JiMmFqN1BqMS9Lck83Ni9sUnZIclFCVU1IditsTDVQdUt0N3gvZUg1MHVjK2hvQXBlUWZiODZQSWIwcTd4L2RINVVZWCs2S0JsSHlHejkwMDB4TVA0RFYvYW45MzlhWGF2ditkQUdhVWIrNGFNZjdKL0t0TGF2cTFHd2YzdjBvQXp4SHgweFI1ZFgvTEhxUHlvOG9mN05BRkx5NlF4MWU4b2VnL09qeVIvZC9Xa0JTOHVrOHVyM2tqME5KNUk5Ry9LZ0NtSTZQTDVGWFBLSHY4QWxTZVY3MEFWZkxvOHVyZmxlNG84byszNTBBVmZMbzh2bXJYbG4wbzhzNTZHZ0N2NWRIbDFaOHMraG84cytsQUZieXg2VXZsREk0cXlJL1duQlBSZnhOQUZYN09HNnFLamF6VW5qSStsWDluOTQwQmxEYlIxeG1pd1hNcTRzcElvbWtCQlVkZlduYVdjbGo3MWMxRW43Rkw5S29hVWVXK3RDM0I3RzBEUlRSVGhWRWkxRGpJYk5UVkRrS3JrOUJRQnp0RktPbEZBeHBvb05BcGdLUHZmaFVpOURVWSs5K0ZTRG9hUUVjZjM2VTgzSDRVa1gzcVgvbDVOQUNEL0FJK0crbEwvQU10ajlLUmY5YzlBL3dCYzMwb0FTSS9POUl5ZVpFcTlzNU5FWFZ6VDBHVUZBQk1RdHF5cjB4VFYrNlBwUmNqOXlmcUtCMEZDQmhTbWs3MEdnQlA0eDlEVHFaL0grRk9GQUNta29OQm9BYW5UOFRUNlpIOXdVK2dCS1E5Vkh2UzlxUS9lV2dCMUZGRkFCVFkvdWsrNXB4NlUyUDhBMVlvQWZTVVVVQUI3VWxIZWlnQjFKUlNIcFFBb29vb0ZBQlRQNHo5S2ZUQnl6VUFQcEtLS0FBMFVoN1VVQU9vVmNuT09PbEoycXpEQzdRbDFJeG5vUlFCRnRHUHZrVW9Va2NTVk9JcFN2S0EvalVEMjhoNndrZjdwcEFJY29NN3MvaFRRVHV5UlRUYlNzM1I4VTViU1hIM21wZ095cDlRZmFwVlpBT2VmclVKdDVsL2l6U2JKeDI0cEJZc2IwNDRHQjdVaDh0amtjSDJxdXBsSklBL2xTanpBZVFSOVJRQlBnZXY1MG1GL3lhaE84bnFLVlFUbmRUQXZZb3hUc1VVQU5wY1V1S0tBRXhSaW5VWW9FTnhTNHBhU2dZbEZMUWZ5b0VGRkZGQUJSUlRIbWpUN3pxUHhvQWRSVlpyMk1mZERNZllWR2JxWnZ1UmhmcnpRQmNwclNLdjNtQStwcWtSTy93QjZRNDl1S0Z0eDFQUDFvR1R0ZVJEb1MzMEZSRzZrYjdrZVBjbW5MRW82Q25oQlFCWExYRDlYd1Bha0VHVGxpU2ZlclcybHhRQkFzS2p0VHdnRlNZcE1VQ0c3YVhGTFJRQWxGTGlpZ0JLU2xveFFBMDBsT3hTR21BMmtwMUpRQTJta1U4MDBrRHJRQXdpbUdocGtCNjUrbFJOTXgrNnY1MEFPTlJNd0hVMDA3ajFOTjIwQUtYOUszWWp1aVUrcWlzSEZibHNjMjZIL0FHUlNZeWRaWFZ5RWtIYmcxS0pwdTZxMzRWQjFmK0U4RHJ3YWR0LzZaL2thUUVobGJCM1c2bjhLUE5pL2lneFVXM0dma2tISGFsM1kvamNmV2dDVGZiLzNISDBOTHZ0eWVIa1dvaTMvQUUwSDRyU0Z1ZnZ4SDZqRkFGZ0dMdGNFZldsQUI2WEFxc2NuK0NNL1J2OEE2OUpzSlUvdUNmbzFBRnpZL2FSRFI1Y3ZwR2FvRUFkWVpsL0ROSVpZMS9qbFg2clFCb2JKQi95ekg0R2o1eC95emY4QUExU013VnlCY012c1Fha1dkKzF5RFFCWTNrZFZrSDRVbm5BZFN3K3ExR0o1c2NUSWZ4RlBFOC9xcC9LZ0J3bVUvd0FZL0tuQ1FmM2xwbm55OTRsUDRVbm5uT0dnV2dDVVBudXY1MHU3Mkg1MUQ1MFhlQVVva2dKeDVURDZVQVRaUG9hTSt4cG43cis3SUtQM1hhUng5YUFIN3ZyK1ZMdjk2WnRVL2RtUDVVUk96SUNUelFBL3pCL2VGS0gvQU5vVW1hVEFQVUQ4cUFIN2pSdTloVE5xL3dCMGZsU2JGOVAxb0FsM0QwRk9HUFNvTmc5Vy9PbmhSanEzNTBBU2NlbEhIcFRObzkvem9BSHYrZEFEeGowcEN3empQUHBTWXp4eitkR0J1R0FCd2FBRlB2eFNBNSs2TSs1cHJ2RkdmbmJKOUtRVEZoa0FnWndLQmtPcGY4ZUV2MC9yV2ZwSitacTBOVFArZ3kvVCt0Wm1sT0JJd05BZERlSFNscGlzTVU3Y0taSTZxTjRjTGoxYXJ1YXo3MDhxUGMwbU5HU09sRkl2M1JTMHdHbWlsTkZBQVB2ZmhVZys2YWpIM2pVbjhKb0FqaCs5U2ovajVla2g2MEwvQUs5NkFCUDlhOUMvNjE2UlB2djlhRisrOUFDUi9jWTBOTjVLcGtaQnBFLzFUVkZkL2RqRkFFODg2eTI0QzRPV0ZGVVloODQrdFhqUUFVR2twYUFFSDN6OUtYdlRSOTl2d3B3b0FEMW9QU2lrZjdwK2xBQW4zQjlLZFRWNkNsb0FEU2Z4ajZVcHBCOTgvU2dCYVdrb0pvQUdPRlAwcEUrNHYwb2I3aCtsS09nb0FXaWtOTFFBbmVpanVhS0FGcERSUWFBQ2dVVW9vQUtZdmY2MCttTDAvR2dCMUZGRkFDSHRSUWV0RkFEdTFiVmdtTEpPT3VUV0xXOWJZUzFqR1Q5MFVtQUFLZjRXL0VVMWxqNDVGU2hoL3dBOUFmeG9mREtjNHBER2VVcDZZUDQwM3ljWkFCSDYxSUU0emdqOEtidUNOeG5uMW9BaWFJLzNSK1BGSGxqSEsvbFUvbktlQ00wQ1NQR01ZeFFCVjhoU2VWSDVVMTRCamc0cTZTamZkd2Z4bzJMakp6K0lvQXoydDhqcURVZjJVQW5JT2ZyaXRKWSt1Q0NPMUk2WUdlTSs5QUZTaWlpcUVGRkZGQUJSU1pxTjdpSlB2U0NnUkxSVlJyNVA0RVp2MHFNM053LzNRRkZBRjZvM25pVDd6cVB4cWtVbGsrL0l4cHkyeWp0UU1sYStUK0JXYW96ZFR2OEFjVlYvV25yRUIycDRRVUFWOXMwbjM1RytncFZ0bEhVWnF6dHBjVUFRaUpSMnB3UVZKaWdpZ0JtS1hGT3hTWW9FSmlpbG9vQVNpbHBjVUFOeFJTMFVBSmlrcFRSUUFsRkZGQUNZb3BhaWVhTmVyRDZDZ0I5SWFnYTV6OXhDZmMxR1dsZnEyQjdVQVdHWlYrOFFQclVMWEsvd2d0VEJEems4bW5lV0JUQVkwMGpkQUZGTUtNeCtZazFQdG94UUJCc0FvSzFLUlRHRkFFUkZOTlNHbUdnQmxiTmtjMjBmMHJHclgwODV0VS9HaGpMSjVZZmRQSGZnMDdaLzB6UDRHbW5rcjkxdU8vQnAyei9wbWZ3TlNBWXgvRElQcFNid0IvckhIMUZMMEk0a0ZNOHdBZjY1eDlSUUFway82YXIvQU1DV211L1Q1NER4L0Z4VEhtQUdUY1JZL3dCcFAvclZIS3hlTkNyV2pnZy9lNDc5cVlDc1diN3NOdkovdXk0L3JRa2JFU0JyTjF5djhNbWMvU29mSTNmOHVWdTMvWE9UL3dDdlVrTUFWbS8wT1ZNcWVRK1JRQkh0VlA0TDZQNkhOSG5oZWw1ZEovdnBtaktwL0ZmUi9yUy9hTWRMNlVmNzhlYUFKWnB5SEdMMUZ5b09IaXpuMzZVMFRTSHBjV1QvQUZHS1dXVWtKaTVnT1ZCL2VSOWYwcG1HYitHeGsvSEZBRm1KbWRXM0pibmorQit2NjFLb0pIK3AvSnMxVmhpUHovNkpEeWhIeVAxOXV0TVZERWNpd25YL0FIWHlQNVVBWDlvSFZIRkdRRDFrSEZRUlRLUjkyZU0rakNwdzRKR0pINmR4U0FYZC93Qk5HL0VVb2I1aCs4SFh1UDhBNjFHVC93QTlCK0kvK3RRQ2NqNW8rdnRRQk51LzZhTCtJcHdKOVVOSmsrcUdsQUovZ1UwQVBYT2Y0Zndwa2YzZnhOUFZlZnVBZmpUSS91L2lhQUgwVVVVQUZGRkZBQlRoMHB0T0hTZ0FwYUtLQUZGSDhRb0ZJZnZDZ0NOcllOSXplcHpVaXhoUmluMHp6RkpJejA0b0dWdFRIK2d5L1QrdFkxaWNYQUdjWkZiT3AvOEFIakw5Qi9Pc2F5QU55b05BZERmUkNWRlBDR2lQN29wOU1rYndveXhBRlViN0JaQ09RUVNLMENBZW9yUDFIN3krbURTWTBaQy9kSDBwYVJmdXI5S1dtQWhvb1BXaWdBSFUwOC9jTk5IVTA1djlXYUFHdzlhYkgvclgrdExEU1JmNngvclFBUi9lZjYwTDFrTkVYVnZyUXYzWlB4b0FhdjhBcVRVZDExVDZWSVA5VFVkeVBtWDZVQURESWliMXFhb0FmOVV2cG1wNkFBVWQ2QlJUQWF2M20rdE9GTlgrTDYwNFVnRHZUWCs0YWRUWCs3UUFvcGFCUlFBVTBmZlkvU2xvWGt0OWFBRm94bWlsb0FZLzNEVHFhL1FEMUlwMUFCUzBsRkFDZXRMU0NsNzBBRkllMUxTZDZBRnBhU2lnQXBxL2RGT2I3cCtsSU9BS0FGN1VVbExRQW5lZ1VVQ2dCMk1rQ3VnQjJvbzI5QmpwV0ZFTjBxRDFJcmIyT1NTQ1BiRFVtQUJVWWZNbUtER2h6Z0VmalFxeUFZY0VuMUJGUElPT3BIMUZJWTFZeXFnS3pDZ3JrZ2w4ajBOS3VBb0FaVFEzM2VSa2V4b0FOaWtkYVFvTWdiam5IcFM3dmFteVBzR1FnUFBwUUEweGM4c0tWVEpqNVdHUFEwdm1uKzcrdEo1akJ1UWR0QUR0MG9PU2dQdUtmbEdISUg0aW95NjQ1NHo2aWhTdVB2WkZBRlBQclVUM0VTZFhIMEhOVXZLa2srKzdIOGFlbHNvN1ZRaVJyNWVpSXpmWGlvMnViaC91Z0lLbFdFRHRUd2c5S0FLaGpsaysrN0g4YWV0c283VmFDMHVLQUlWaUE3VThJQlQ4VVlvRU5DMHVLZFJRTVRGRkxpaWdCTVVZcGFLQkNZb3BhS0FFb3hTMFVBSmlrcGFLQUVvb29vQVNpbXZLaWZlWUNvR3V4L0FwYjlLQUxCcEdZS01zUVByVlV2Ty9jS1Bha0VHVGxpV1B2UUE5cnBRM3lnc1BhbUdhVnZ1cUYvV3BCR0IycDIyZ0N1VWQvdnVUVGhDQjJxYkZHS1lFWVFDbHhUNlRGQURjVVlwMUpRQTJrSXAxSmlnQmhGTUlxVWltTlFCQzFSbXBXcUZuSGJtZ0JEV3BwcC8wYjZNYXlDeFB0V3BwWi9jTVBScUdNdXRrbE9GYnIxNE5QMmY5TTIvQTB4aHUyL2RiQlBYZzA3Yi9BTk0yL0ExSUJuREQvV2ptb21tQS93Q1hoeC92TG1ubHRyRG1aZWFyVFhJVml2MnQwSVA4VWVhQUdOY2J6OHQzYmtlangvOEExcWV3M3d4NVd6azY5OEQ4S2o4MHQveTgyci83OGVQNlZJUVdnVDVMUi9tUEFiQS9uVEFaNUdmK1hKRC9BTmM1S2ZERUZrLzQ5YmhPRC9Ga2RLWjVHZjhBbHh6L0FOYzVLZkJHRW1YOXhkSjE2dHgwb0FpOHdML3kydkkvcU0vMXBSY1o2WDUvN2FSWnBQT0Mvd0RMM2RKL3ZMbit0T0V4YnBmUnQvdnhmL1dvQWtrWXNzZUpiVnNyL0d1TS9UaW1GR1AvQUN3czMvM1h4L1dwSHkwY2ZOby9CKzl4MzdWR1lDeTUreHd2L3VTZi9Yb0FkQkFkN0UyTzNLRVpXVFA0VkQ1YUoxZ3ZZdm9jMUxCQUVsSk5qTkg4cDVENUhUNlZGdVJQNDc2TDlhQUZFNnIwdTd0UDk1Yy8xcThrNEt4bjdTRHVYK0pldk5VUmMrbW95RDJranpVN1NPWTRpTG0yWWtIbDB4bm50eFFCZEJ6L0FCUm1sR2NqNVVQUHIvOEFYcUdGeXc2UU1lK3h2L3IxTUZKSS9kWjU3R2tCUHRKL2dVL1NqYU84ZjYwbTMxai9BQ05LTWVqajhhQUhxQmtmSVJUWS91bjZtbktSa2N2K05NajZINm1nQjlGRkZBQzBVbExRQVU0ZEtiVGgwb0FXaWtwYUFGRklmdkNsRkkzMzEvR2dBa0xBRGI2MDF6akdLV1laUWRPdE1iQUdGT2FReUxVLytQR1g2RCtkWWxxU3R3bU1kYTI5Uy80OFpmb1A1MWkydi9Id24xb0gwT2hoWWxLbEJxR0Q3bFNpcUpGckp2WGRwVzNISUE0cldQU3NhOS8xai83dEpqUlJYN3EvU2xwQjkwZlNscGlHMHRGQW9BVmVwcFgvQU5XZnBTTDMrdEsvK3JOQUNRMGtQTFA5YVdMdlRZZXJIM29BSWVqZldrSCtyYy9XbGgrNFQ3MDBmNmx2eG9BUCtXUSt0RXVBVlk5S0QvcTErdFdYdC9NdE40NmdtZ0N0S29FNkFkTVV0Umh5N29HL2hYRlNVQUZGRkhGQURVNkg2bW5pbXA5Mm5DZ0JLUiszMUZMU0hxS0FIVUdpZzBBSlNKMyt0TFNMMC9FMEFPb29vb0FhM1ZmclRxYWVYWDhhZFFBbExRS08xQUNEcFNpa0ZBNjBBS2FUdlFhTThtZ0JhS0tLQUViN3BvcEc2ZmpTMEFGRkhhaWdBb0ZBcFJRQk5hQXRjcGoxeld6ejZWbDZhdTY2SHNDYTFzZlg4S1RBWUNjbkJwU3h4MW9HM0xZWTV6emtVdkdPdjZVaGtha0FZRk8zZW96VGNnTWNxTWV0S1dUMUg1MEFPVWhoeng3VXJBbFR0UFBibW94bjZqNjBwSW9BY0I2MGpBWkI0NDlhakM4OE1hZGc0UElvQWsrVmh5b1AwTk54R3B5QVZKNDRwcWUzYW5IcDBCL0NnRFBDMG9GT3hSaXFKRXhSUzBVQUZGTGlpZ0JLTVV1S01VQUpSaWx4UlFBbEZMUmlnQktNVXRGQUNZb296VFdkVUdXSUgxb0FkU1ZYZThqSEM1Yyt3cU5yaVovdXFFSDVtZ0MyVGpyVVQzTVNmeFpQb09hckdKMzVrY3RUMWhVZEJRQU5kTzMrcmovRnFqUG5TZmVjZ2VnNHFjSmluQVVBVjFnVWRSVWdRQWRLa3hSUUFnV2pGTFMwQUppakZMUlFBbUtURk9wS0FHNG9wVFJRQXlpbHFONVVUcXcrbE1CeHBEVURYQlAzRi9FMHdoMys4eCtsQUVqekl2Zko5QlVMU3NlZ3g5YVVJQlFSUUJDd1k5U1RUY1ZNUlRDS0FJOFZwYVg5eVFlOVp4cS9wWjVrSDBvR2FKNUFIQjU2SGlsMi93RFROL3dOSTNLOWp5T0R4UVY0L3dCWEovd0UwZ0dNNFVqNXAxL0NxODArSm5YN2F5NFAzWGp5QlUwajdCbmZjSitHYWltbTJ6T1B0aFhuN3J4NXhRQXplVy81YjJqL0FPOG1QNlZJVUxXNEhsV3ovTWVGZkEvblROMjcvbHJadi92TGluN04xdmp5TGQvbTZJK08zMW9Bait6L0FQVGkvd0JZNU0wK0JRc3kvSmRwejBKNHBuMmZISnNwbDkwa3pUNFNGbVFadkU1Nk4wb0FaNStEZ1hzNit6cG1sRXBiL2w2dDMvMzQ4ZjBwRFA4QU1SOXVjYzlKSTgwdThuL2x2WnYvQUx5WS9wUUJKSUMwVWZ5V2tuWCtMSGZ0elRSRXdYaXhCLzY1eVVyb1hoai9BSEZ0SmpQQ3ZqSDA1cUkyd3hrMkVvUHJISm1nQ1dGY1NqTnZkUjhIcWNqcFRCY0t2L0x6ZEovdkwvOEFYcGJZS2s2amJlUm5uaGp4MHBndU1jRFVKbDlwSTgwQVBGeUcvd0NYNk0rMGtmOEE5YXBXTzZLUEJ0Sk92WEFIWHRVUG1NMy9BQzlXa24rK21QNlZJNk04RWY3aTFrd1R3cllBK25OQUNSSklyWkZsRWM5VEZKLzllcnFqcG1GMS9ILzYxWjV0djcyblA5WTVNMVl0bVZjSjVkekhqKzlRQm80QS9oY2ZRMG9JL3ZPS1RJOVhGS0cvNmFIOFJTQWVwNSsrZnhGTWo2Ti92R25xZWZ2Zy9oVEkvd0NML2VOQUQ2S0tLQUNscEtLQUZwdzZVMm5EcFFBVXRKUzBBS0thMzMwL0duQ212L3JVL0dnQW01UVo5YWhJNjlmNVZQSU1yam44S2lPM2NBdVNUMjYwaGtlcC93REhoTDlCL09zV3ovNCtVcmExVC9qd2wrZy9uV0xZSC9TbDVvRG9kRENQa3FRVXlJZkxVZ3BpQTlLeHI3L1dTZjd0Yko2Vmk2aHhKSi91ME1hS1hwOUtLY1JrQSsxTnBpRXBSU0hyU2lnQlY3L1dsay8xZEl2U2xrLzFkQUNSZERUSWZ1dFQ0dnVtbzR2OVcxQUN3LzZ1a0grb05PaS8xVk4vNVlVQUtmdUo5YTE3Vk4xaUI2NXJJUFJQclczYUVMWkxuMFA4NkFNT1ZObDJ3OXFXblhKM1hzaEhvS2JRQVVHaWc5S0FFVDdncFJTTDl3ZlNsN1VBRkllb3BhUS9lRkFDMEdpbG9BYlFuM1JTbnBta1hoUjlLQUZwYVNsTkFEZitXZytsT3B2OForbExRQVVIb2FLRDBvQUtCUlFLQUNnZFRSU0RwUUF0TFNVVUFJM2I2MFVIcUtXZ0FvbzdVVUFGQW9vRkFGN1RGSmxjanN0YU9TT3gvT3FPbWo1WE9QU3JuVDFwTVloWkF4eVdCcHdZZG5wbzI1UHIzcHd3TzlJQlBOSWZHUVJTN3dmU21PeDNnWVU1OWFkblBWYUFFL2lKR09lMUhIZGFDbVdCMjhkNkNnNjVOQUNaVlQweG1uOGU5UmtMamx6VHNIcUdvQVJtd3c0eUtlcFVqZzFHek1vemtHbkxsbEJHRG1nQ3RpbG94UzRxaVJNVVlwYVNnQXhSUlJRQVVVVVVBRkdLQ2Foa3VZazZ1Q2ZRYzBBU2dZb3pWUnJ0bTRqai9GcWpQblNmZmNnZWc0b0dYSG1qais4NEh0VURYZ1BFYUZ2cnhVYXdLTzFTQkFPMUFFYlNYRW5jSVBhbWlBRTVZa24zcXdGcGNVQVJMRUIwRk9DMUppakZBRGNVWXAyS01VQUppakZMUlFJU2lsb29BU2twYUtBRXBhU2tabFVaWWdEM29BV2lvSHVsNklDeC9Tb2k4MG5mYVBRVUFXWGtSUHZNQlVEWE9mdUtUN21tQ0VkVFVnUUNtQkNUSy8zbXdQUVVMRUJVK0tDS0FJd2xLUlRxUTBBTUlwaHFRMDFxQUlqVERVakNvelFBdzFjMHMvdlhIdFZRMVowd2o3UVIvczBETlJ2dWtmS2VuRFVGZVA4QVZTZjhCTkRmY0k0NmRHNlVGUGwvMVQvOEJha0JETSt4ZjlaZFIvUVpwczgySm1IMnZiL3N2Rm1sbWJZditzdW8vb00wazAySEErMTdjZ0hFa2VlMUFETjI3L2xwWlA4QVZkdFNDUGRia2ZaNEcrYk9Fazl2clVlN2QveTBzcFBxdTJuckZtQmg5bWdiNWdjUnlkYUFJL0kyOC9ZN2hQZEh6VDRtQ3lvUE12RjVIeXNPS2I1TzMvbDF1WS9kSHpTeHloWlVIblhpL01PR1hJTkFDTmNmTVI5dUhYcEpGbW03aTM4ZGpKOVJ0UDhBU25QT2ZNWWZiWStEOTJTTHArbEp5LzhBejRTZitPMEFTTkVYdDBIMldHVEJQRWNtTWZyVVgyY0wxc3JsUGRIelVyUWJyZFI5alJzTWVJNU9udlVSaVZPZnM5NUYvdXRtZ0NTM2RWblFDUzhYbjdyamltK2VjNEdvQSswa1gvMXFkQktQUFFmYWJvWlAzWFhnMDB6RWtqN2JBM3RKRmorbEFCbG0vaXNaZnFBditGU05DV3QwSDJPS1RCUEVjblNtYldmL0FKWjJNdjhBdXRqK3RQYUROdWdOaVRoanhHL1Qzb0FpOGxVNjJkMUg3bzJhZkRLaVNMaWU3WG5vNjVGTTJwSC9BQVgwUDBPYWNrNERBQy9tSFBTUk0wQWJHZjhBYllmVVVvYi9BRzEvRVVtNy9iL01Vb0o5VU5JQjZrLzNrcGlmeC83eHA0ejZMK0ZNWHEvKzhhQUhVRWdjazRxRXlNREp6OTNPQmoycEpYUEhUN3U3K2xLNVhLeVlOazl4OWFkbW9BKzNKQzUrYmI5Nm5pWGhqdE9GNjBBNGtsUEhTb2c0SkE3a1pxVWRLWWdwYVNsb0VLS2EzK3NYNkduQ210L3JGK2hvQWN3M0xpbXM0UWdIcWFiY01VZ1psT0NCMXJQaGJkZGNrays5RmdMT3BuT255SDJIODZ5Tk9IK2xESHBXdHFYL0FDRHBQb1A1aXN2VEJtNS9Da1YwTitQN3RQcHFENWFkVEpBMWk2ai9BS3lUL2RyYVBTc1RVRCsva0grelF4b3JzdUFCVWRXSlZ5TTFYcG9RbExSUlFBNWVsSkw5eWdkS0pmdWZqUUFSL2NOUngvNnBxa1gvQUZUZlNvMC8xRGZTZ0IwZitxL0Ntbi9VRDYwcWY2bjhLUnY5U3RBQ25xbGJscVA5RFhQcFdHZnZwVzNIeFpSZ2YzYUFNYWIvQUkvWmZiQXBwb2tQK2t5bi9hb1BOQUJTTjkwMHROZjdwcGdLT2dwZTFGQm9BS1QrTDhLVUdtL3huNlVnSDBsQW9OQUNOOTAvU2dkQlNQOEFkTk94UUFEclM5NlFVVUFJUHZOUzBnNm42MHRBQlNIdFMwaDdVQUxRS1Nsb0FLUmVsRkE2VUFMUUtLS0FFUDN2d29vNzBvb0FLS0tTZ0JhQlNVb29BMGRPSDdsdVNNbXJaLzNxZ3NPTFljZHpWbjhCVWpJREZ1Y3R2UE5MNUovdm1uYmNPVHRHRFRpQmpwUUJBMFRyajV1OUtZNVJ5SFA1MUtjWXdhTzNCb0Fpek9NY21weDB3VFRTeEE0NjB4SmdWeXhBUGNVQVNGQVIxcFZCVmNaQnBtOEhwajg2STFaZDJRTUU4WW9BY1diUDNBUlRWa0RaK1hCQndhZmhlcHpUU2tXN1BRL1dnQ0dpaWlxSkNrcHJ5SWcrZGdQcWFydmVwMFJXYy9sUUJhcEN3VVpKQUh2Vkl6VHlkTUlQYW0rU1dPWFlzZmMwQVdIdklsNEJMSDJxSnJxWi91SUZIcWVhVllRTzFTQkJRTXJtT1NRL3ZISjlxY3NDanRVK0tYRkFEQWdGTHRwK0tNVUFOeFM0cGFLQkNZb3hTNG9vQVRGRkxSUUFsRkxSUUFsRkJvSm9BU2lvbnVJMDQzWlBvS2hhNGtmN2k3UjZtZ0MwV0E1SnhVRDNLRGhjc2Zhb3ZMWnpsMkxmV25yR0Iyb0FhWlpYNllVVWdoeWNzU1Q3MU1GcDJLQUl4R0IwcDIyblVsQUNZcEtXaW1BMmlscEtBRXBEVHFRMEFOSXBqQ2xlVkY3NVBvS2dhUjI2REFvQWM1QTZuRlFNK2VncFN2YzhtazIwQU1PVDFxenB2RjBQY0dvQ0tuc1RpN1Qzei9LZ1pybjdqY2pwMFBTazJaWC9BRlRmOEFhbmZ3bm5zZXZTbWhNcVAzUlArNDFJQ0tZbEUrL2RSLzdvelRaWnNGZjlMSzVVSEVrV2MxSkpsVVBOeW4wNXFPU2JDeC82VTY1WC9scEZuUDFvQVp1M2Y4dExLVDZydHA2eGJvWkI5bWdiSkhFY25XbWI5My9MV3prLzNsMjA5SXQwVWcrelFOa0RpT1RyelFCSDVPei9BSmRicVAzUjgwcVM3WFVmYUx4T1J3NjVGSjVHei9sMXU0L2RIelNpWGFSL3BOMm5zNlpvQVdXWDk2Ni9iSWVDZmxraTZmamlrQUwvQU1Oako5RHRwODh2NzUxKzFRZGZ1eXg5UHh4VE5wZi9BSloyTW4rNjJLQUpQSTNXNEJzd2NNVGlPVDlhajJpUC9sbmV4ZlE1cVV4RTIrRFp0dzNBaWs5dXRSSEVmL1A5Rit0QURvWmg1eUw5c241Yjdza2ZXZ3lGbUkrMFdqODlIVEIvbFJGY2Z2VUgyNlEvTVBsa2k1TkRNV2RoNXRsSnowWmRwb0FUeWkzL0FDNjJzbis0K1A2MDlvQUxkUWJPWmNNZUkzeVI3MDN5QzMvTGxDL3ZISlR6RUV0eG0zdVl2bVBDTms5UDVVQVJiMVRwTmV4ZlVacHl6a2tZMUJUN1NSZi9BRnFUemd2Uzd1ay8zMHpUaE1UMHZMZC8rdWtlUDZVQWF3Yi9BRzFQMUZLTW5zaHBBY2pxaHBRdWY0RlAwTklCNFUvODh4K2RNWDd6L3dDOVRndi9BRXp4K05OWDc4bjFvQU5nK2IvYTYxRkpHZGg1M0hBVWNlOVNHVkFTQ2NZbzh4UDd3cEZKdERUR2NFWkgzOTFJOGJNeDJqYm5JSnoxcVhjdnFLV2l3Y3pJMERid1N1TUxpckE2VkhUeDBwaWJ1TFJSUlFJY0thMzN4OURUaFRXKzhQb2FCamJuL2ozZjZWbXdqL1NSV2xjZjhlNy9BRXJQZy80K2hUUWl4cVgvQUNEcFBvUDVpczdTUURPM3NLMHRTLzVCMG4wSDg2cDZNbitzYjZDcEgwTmhSeFMwQ2xxaENIcFdIcUgrdmtQdFc0ZWxZZDd6TEtmZWt4b0hHVnFyVmx6Z2RLcWs4bWhDQTBDa05BcGdPN1VrMzNSOWFVZEtTYm9QclFBRC9WTjlLWXZGdWZwVC93RGxpMzBwbi9MdWZwUUFvLzFQNFVqZjZ0S1gvbGorRkkzM1UrdEFDbi9XTDlLM1kxLzBSUDhBY0ZZUi93QllQcFhRd2dtMlFZNktLQU9kYi9YemY3NXBhRC9yWmY4QWZOSWFBRnBqbmluR21zT0I5YUFIMFVocGUxQUNVbjhacGFRZFcrdEFEcUtLUTBBSTNUOFJUcWEzYjYwdE1CYUtLS1FDTDMrdExTTDBwYUFDa1BVVXRJZnZmaFFBVTd0VGFYdFFBaDZHbHBHNlVVQUxRS0tTZ0E5YUtRVTZnQktPOUZIZWdBcFJSUUtBTmUxVkJDbUR6am5tcHVPelZEQUhqVEJYUDQxTHVUK0pmMHFSa1R5T3I0QUJGS3Nqc2NiT2FrRFJaeGpCUHRTa0wySkg0MEFNY01WSUs5Unh6U0FuSEttbm5JVWtNU2FhcDNvQ2NIOEtBRzc0KzR4OWFVTEVSd0JUL3FxL2xVYUlWeU8yYUFEeW8vOEFKcFNTcFVBOFU3SHRUV0tEN3dBb0FkdVljWnBrbTVzWUE0cFJ0STRiOWFHQjJuYTNOQUdlMTduaU9NbjNQRlJsN2lUcTIwZWkxTUl3S2NGRlVJckxiak9XeVQ3MUtzUUhhcGdLTVVDR2hRS1hGT3hSaWdZbUtNVTdGR0tCQ1lveFRxU2dZbUtLV2djMENFb3BhS0FFb3BhS0FFb3ByeUluM21BK3RWMnU4OFJvVDduaWdDelVjazBhZmVZWjlCVlltYVQ3ellIb0tWWVFPMUFDdGNzM0VhZmlhakt5U2ZmWW4ycWNJQlNoYUFJbGhBN1U4SlQ4VXVLQUdBVXVLZGlpZ0J0TFJpaWdBcEtYUE9NVVVBTnhSaWxOUnZLaWRUejZDbUE3Rk5ZaFJra0FWQzB6dHdnMmoxTk5FWlk1WWtuM29BZTA0NklNbjE3VkdkNy9BSGp4NkNwQWdIYWx4UUJFSXdLTnRTRVUxcUFJeUtqTlNHbU5RQkdhbHREaTZqK3RSbW5XNXhjUm4vYUZBemNIVHJqclNLbVZIN3NIM1JxVmZ4b1JjcURzQjkxT0tRRENDdmE0VDZITlJTUzdGai8wcVZPRDkrUGRubnZVekp0UENUcjdxYWpua0tJaCswVEoxNnB1ejlhQUlmTUQvd0RMZTBrLzMwMjFKSEZ1V1FlUmJ0bGYrV2NuV28vTkRmOEFMemF2L3dCZEk4VStKQTIvOXphdGxTUDNiNHpRQXp5ZG5QMlc2ajk0NU0wZWJzLzVlYnhQWjB6UjVHM243SmNKN3h5NW84d3Avd0F0NzJQL0FIMDNVQVNUeS92bUgycUQvZGxqNmZqaW85bS8vbGxZeWY3cllxU2FYOTRSOXBoNkQ1WlkvYjF4VWV6Zi93QXNyR1gvQUhXMm1nQ1FRWXQySDJOeDh3T0lwTTU0NjFIa0ovRmZ4ZlhrVklzR0lISDJOMTVCeEhKblAwcG03Wnh2dm92cU1pZ0JZN2o5NG8rM0U4amlTTGsvcFN5WmFSaG15azU2TjhwcEZ1UG1IK25BODlKWXYvclU2VUZwV0dMS1Rub1R0YWdCbjJmUC9MZ2plOFV0U2JSSGIvNnU3aStic2NucC9LbUczN213UDFpbHA0eEhibi9qOGh3MzFQOEErcWdCbm40NEY5TXZ0TEhtbDh4bi93Q1c5bkwvQUw2NE5KOW8vd0NuOC9TV0tsM0Yvd0NLeGwrdnltZ0RXWEpBKzRmcFM3ZittZjVHbXFDVkh5b2VPeHB3WEg4QkgwTklCd0FIOEREOGFhUDlaSjlhY01mN1kvR21qL1dTZjU3VUFMVERnc1FWQUhxZTlWemRrT3k4SEhBOXozL25VNGtiSHpBWnFlYnlMNVJvWkN3K1VaelRnaWJsWGxTQndLTjQ3b0tVT2cvaHg5S1hPaGNqSEttMDVESDhUVW82VkY1aSsvNVZLT2xVbW5zSnByY1dpaWltSVVVSDd3K2xBcEdQekFleG9BYlAvcUgrbFVMY2Y2UUQ3R3RHVmQwRGdkY1ZuSVNraW5yN0NoQVdOVC81QnovUWZ6cVBSMHhiWjlUbXByOVMrblB0R1RqUEgxcVN6ajhxMmpYdUJRUG9XS0tLS1loRzZWZ1RObnpDZTVQODYzSjIyUXV4N0FtdWJhVE1acVdORTh6SEhIU3E5U3MzYW9xcENDbHB0S0tBSEE1RkpOMit0QzlLU2IrR2dCVC9BS2h2cFRQK1hZMDV2OVFhYTMvSHZRQXAvd0JUK0ZJL1JLVi85VlNOMVNnQlQvclB3cm80T0kxK2dyblArV3Y0VjBVWjJyZzlNVUFjNE9XYytySCtkRk5qNVhQdlRxQUZwcjl2clMwaDZyOWFBRk5MMnBLRFRBS1JlcCt0TFNMMC9Ha0E2aWlrN1VBSWVxL1dscEQ5NFV0QUMwVWxEZmROQUF2M1I5S0tCMG9vQVdrNzBVZHpRQVVVVVVBSWUzMXBhUTlSUzBBRktLU2lnQktYUEZKUzlxQUNpaWdVQUZQUVpaUjZtbVZKQ3F2S3F2eXBQTkFHbWhjcG5jTS9TbkRlZW9XcS9rQmYrUGVaay8yU2Npazg2NGovQU5ZbThmM2s2L2xVakxHeHhJR0NyeDcwNHM2OVVQNGMxWFM3OHhzUnVNK2pqQnFZU1Nkd3BvQVh6bEgzZ1I5UlNDV0k5R0ZJU3pmZVZTS2lYekV5Tm9JelFCWkJCNkg5YWFjbVJRR3dEN1V4WmY3OGY2VTd6SW5JNlpINFVBUzdUNmo4cWE2TXlrY2MwbTlWSDN2MW9Fdm8yYUFGVU1xZ0ZmeW9MQWRVUDVVMktReUFrNDRPT2xTVUFVOFVZcDJLTVZSSW1LTVU3RkZBQ1lvcGFLQUVwYUtLQUNpaWlnQXBBTVVFZ1ZESmRScWNBN2o2TFFCTlRXWUtNc1FCNzFWYWVhVDdvQ0Q4elRQSkxITGtzZmVnQ1o3dEJ3Z0xuMjZWRTBrOG5mWVBhbnJHQjJwNFdnWkFzSXprOG4zcVFJQlVtS01VQU5DMHVLZGlpZ1EzRkxpbG9vQVRGRkxTVUFGSlRxU2dCS0thOGlKOTV1ZlNvak03OEl1QjZtZ0NZa0FaSndLaGE0WG9nTEg5S2I1Ulk1Y2xqNzA4SUIyb0FpSmtrNm5BOUJTckVCVTJLS1lEQW9GR0tkU1VBSlNHbHBLQUdHbW1ubW1tZ0NNMHcwNTNWZmMxQ3pGdllVQURFQ2tqYjk4aC93Qm9VM0ZLdkRBKzlBem9GNmpyMTdVcURjdjNReDlqaW1wMjYvaFRrd1NmdXR6NjROSUJHVHZzbEgrNmFaSXhFWXhMT25QVXJtcFdUai9WditCcGpFcW5XZGVmclFCVTg3UEJ1b1c5cFljZjBxU0ZRekg1TE5zcVI4allKb2trSTUrMUtCNlNSWm9oSWFRYzJiOWVWNFBTZ0NQN1Bqa1djcSs4VXVhWGVVLzVhM3NmKzh1NFVmWis0c3o5WVpxTW1QOEFpdm92cjh3b0FrbW0rWWY2VkdNcURpV0tvOW9mK0N5ay93QjF0cHA4czMzUDlLVVpVY1N4WnpUT0g3V012ME8wMEFTSkJpS1QvUkdYT1A4QVZ5Wno5S1puWi95MHZvdnFOd3A4Y0dFay93QkVLNUgvQUN5a3pubnRUZHhUK0sraStvM0NnQnYyai9wK1ErMHNQLzFxa21YZk13MldjblBRbkRVeno4OGZiVVB0TEQvOWFwSmwzeXQ4bHBKOVRocUFJdnMrT2ZzRGozaWxxUlNFZ2Y1cnlMRERsdVNQcFRQc3dIUDJLUmZlS1dwRU95SjhTWGNlQ09YR2NmU2dDUDdSbnBmSWZhV0wvd0N0Umd2L0FBV00zME8wMHZuRWovajloYjJsaXgvU2p5ekovd0FzTEtiL0FIR3dhQU5TTmYzYS91MTZEZ0hwVHdNZndzUG9hWkdtSTFIbFl3QndEMHA0NDdPUHhwQU9COTNwRS8xN2ZVVW9QKzAzNGlrUS92Mi9DZ0JXamlKd3lmcUtRUVJnZkx1VWR1S2tLa3RuZWgrcTBnUnhqNVl6anBna1VjcUh6TWI5bXlNcTM2VWh0bjdFVThLNjQrUnVEbmg4MUx5eWQxelJ5aHpNcWVTMmVNSDZHcHgwcU5BM21MemcrL3BVdmMvV2kxZzVyaFJSUlFJVVVqZmZYNkdsRkkzK3NIME5BRDE5S2kreklNQlI5U2V0UHA0T2FFQUJRQmdkS0FNVXRGTUFvb29vQXA2cEo1ZGpKenllSzUwbjVhMXRkbDRqaUgrOGF4NlFFNTlhU2tCNHBhWUM5cU9LRkdUaXBUQWV4b0FqWG9LU1hxdEtPMUpMMUZBQS93RHFEVFgvQU5RS2RKL3FEVFgvQU5TdjRVQUsvd0RxcVIvdnBTeWY2c2ZoU1A4QTZ4S0FIRG1jL2hXKzVJallrOEJUL0tzQ01adU1lcEZhODVhS09RTjAybm44S0FNU0wvVmluVTJQN2dwM2VnQXBEOTVhVW5pa0orWVVBTDNvTkZCb0FCU0wwcGUxTlg3bytsQURxS0tLQUUvakgwcGFRZmYvQUFwYUFDaHZ1bWlrYnBRQXRGRkZBQlFPdEhlaWdBcFFhU2lnQkQ5NFV0Si9GK0ZMUUFkcU8xRklhQUNsTkpSUUF0SU9sRkE2VUFMVTlyL3JnY2RBZWxRVmFzZjlhell6aGFHQmVRb1VHUjBIT1JUdjNaOUtCa3FEZzgwMWgyS244cWtZMlMzZ2xQektNK3RSR0NhSG1GOTYvd0IxdjhhZVYyU2h3bWZ3cVlUbzJQbHdlL0ZBRUVkd2puWStZMzlHcDRYZm5kamcxSTYyMHcydVB6cUV3eTIvTUwrWkgvZFBXZ0NUWVJ4bW10R2R3WlFNOTZkRFBGS2R1N1kvZFdHRFVqRGJuQkZBREFPTUVVYlU3QVVxbmN1Y1V2NEdnQmdSYzVCeDlEVDhlOVJ1QmtOdDc0UEZPRzJnQ0tpbG9xaVF4UlMwVUFKUlMweVNWSXg4N0FVQU9vcW8xNW5pSkNmYzhWR2ZPbCsrNUE5QnhRQmFrdUlvL3ZNTStnNXF1MTFJMytxVEh1YVJJRkhhcFFnRkF5RHkzazVrY3Q3VTlZZ3ZhcHNVWW9FTkMwdUtXakZBQ1lveFRzVVlvQVRGRkxSUUFsRkxTVUFGSlMwMTNWQmxpQlFBdEI5VFVCdUMzRWEvaWFic1ovOEFXTVQ3ZHFBSHZPbzRYTEgycGhNc25VN1I2Q25yR0IycDRXZ0NKWWdPMVBDMC9GSWFZQ1lvb3pTRTBBQnBNMEdrb0FTaWw0NzBuYm1nQktEVWJ6Z2NLTnhxSnQ3L0FIang2Q2dCN3lxdkErWSsxUk16djFPQjdVNElCUzRvQWkyNHBwRlNrVXdpZ0NNaWtwNUZOTkF6ZGo1VlQ3VThjdTNLbm4rTGdpb29PWWs3L0tLbUIrY2pJNjlHRklCMjNJKzZUOUdwakFxcDRtWG5xRG1uZ2VpcitEVWpMeHdzZzl3YVFFSmYvcHUzL0EwelVhWjg1Y3ZhdGsvM2RyVk1XSS81YXlEL0FIbHpTS1FYWE1rTGM5MHdhWUZieUFUeGFSdDd4UzRwY0dQK0MraStoM0NoNE56RS9acmQrZXFTWU5IbGxQOEFsaGR4L3dDNCs0VUFQa213c2Y4QXBUTGxmK1dzV2MvV284aCs5akw5ZmxOUGVYYkhIL3BNcVpCLzFrZTdQUGVtYncvL0FDMXNwZjhBZVhhYUFKSW9PSlA5RUF5dldLVE9hWm55Kzk5RjlmbUZQaWg1Yy9aWStWUE1VbldtQUdQK0c5aS9IY0tBRTgvdDl0SDBtaC8rdFVrdzN5ZmR0SmNnZFcybnBUUFA3ZmJmd21oLyt0VDVodllmTGFTNVVkVHRKb0FaNUdPZnNVaSs4TXVha1I5c2NuN3k3anhqNzR6ajZWSDlueHo5aWtYM2hscVNOdHFTZnZidVBBLzVhRE9PZTFBRFBQM0RIMnUzZjJsanhUNDRkN2JqYjJ6K2pSTlNKSVpPQmN3U2Uwa2VEVTZSREgrb2ovN1p0UUJialhDTCs3STQ5YWVPTzdpbVJyaEI4akQ4YWVEN3VLUURnZjhBYlA0aW1qL1hQOUJUZ2Y4QWIvTVUzL2xzMzBGQURxS0tLQUYzSDFOTHZiMXB0TFFBN3pHb0J6elRhY09sQUMwVVVVQUtLYTMrc0gwTk9GTlArc0gwb0FkUURpZzBsQXlRTURTRnFhS0RRQThVak1BRDZDa0JKV3MzVjd2eTR2SVEvTy8zdllVQ011OW4rMFhUeUQ3dWNMOUtnTkFvUGI2MHdKQlRxYUtkUUE1RGhoVnRDRHgzcWxTaGpTYXVOTWNmdm5IclRKZnZDbkR0VFpmdkNtSVdUL1UweVQvVkw5UlRwZjhBVWlteWY2dFByUUE2VDdnK29wRy8xcS9TbGsrNnYxcEQvclI5S0FId2Y4Zkl6L2VGYXQ5S2h0cEFRd1lLY0dzbUhtZi9BSUVLMXJ3Q1RUNVgvaVZlYUFNVlB1RDZVN0ZJdjNSOUtYdlFBVTMrTWZTbHBQNC93b0FjS0tLRFRBUTVDbjZVTDBGSy93QncvU2tGSUJhU2xwS0FBZmVOTFRSbkpwMUFCU0h0OWFXa1BVVUFMUlJSUUFVbmFscEtBRm9wS1dnQlA0alMwMGRUVHFBQTBocFRTR2dBb29vb0FEMHBhUTlLV2dBcTdZRC9BRm5IVVlxa0t1MmU0UXV5NDY5NkdCY1FsVkNrQTRwKzhlaHFNQnlPY0NrSllIcFVqSGlkTjIzRForbFAzSWVwSDQxWFV0NW9KVWhSVXBkT2hZRDYwQVBHdzlNVkc2Z3lBZGlPbWFlTnA3ZzBlV3VjNEdhQUlKTE9PVGxsT2ZVR29YaW1pSFV5b1A4QXZvZjQxZTIrNXBDRzdHZ0NHM2tXUlBsYk9PM1FpcGNtcTVnTHNaSS9ra1U5UjMrdFN3T1pBUVJoeHdSUUE0eUJSbHVQd3Bkd1pjanBTbjZWRkcyTWdnakI3aWdCS0tyeVhjU2NBN2o2TFVMWE0wbkNLRUg1bXFKTHJNcWpMRUFlOVYzdlVIQ0F1ZmJwVmNRbHpsMkxIM3FaWWdPMUFFYlN6eTk5ZzlCU0xBTTVQSjlUVmdMaW5Zb0FqV01DbkJhZmlpZ0J1S0tXbHhRQTNGTFMwVUFKUlMwVUFKUlJSUUFVbEl6QlJsaUFQZW9XdVIwalV0NzlCUUJQVVR6b25HY24wRlJFU1NmZmJqMEhGT1NJRG9LQUdtU1YvdWpZUDFvV0VaeWVUNm1wZ3VLWEZBREF1S2NCVHNVaE9LQURGSFNrSk5KUUFFK2xKUzBVQU5Jb3BhYXpCUmxqZ1V3Q2tKQUdTY0NvbW1KNGpING1tYkN4eXhKb0FlMDQ2SU0rL2FvaUdjL01jKzFTQkFLZGlnQ01MaWx4VDhVbUtBRzRwQ0tmaWtJb0FqSXBocVVpbzJ3QmswQVJtbW5paG56MHBtTTlhQm0zYW5OdkgvdWlwODRjamNCN01NMVdzam0xaitsV2M0YkdkdkhjWkZJQjJNOWtQME9LWGIvc04xN0drNi84OHorbEczUC9BQ3p6OUdwQUsyZXp1UHdxUGQ4dy9lSWVmNGtxWEpYdTQrdE5KeVI4NDY5MW9BZ2VNT1RtS0YvbzJLaU51RTVXQ2RmK3VjbFdTb1luNVltK2h4VGZLeHlJWkI3bzFNQ0Y1U2tNZjcrNGo2L2ZUZCtkUitZSC93Q1c5cEovdnB0TldtWXFpL3ZaazYvZUdhaU81dWswRCswa2VLQUVoaUJaajltZ09WUE1VbldtaGZML0FPV2Q3Ri91dHVGUGhoTzhrMjl1ZmxJM1J2anRUQWhqL3dDV041Ri91dnVGQUI1L2I3WXc5cG9jMCtVYnluRnBMbFI5NDdTZnBTQ1Zqd0x0eDdTeFpwOGlsOW1SYXlmS1B2Y0g4S0FJdnMrT2ZzVGozaGxxV0VrQng1bDFIOHYvQUMwR2NVaTJ5ZzUreXN2dkc5VG9kb1lDU1plT2pET0tBRVFsdXNrVW4rOG1EVWl4L3dEVEpmOEFnTFVMejFhTnZxTVU0TC8wekgvQVRTQWxSY0lQa1lmalRnZjlwaDlSVFVHRkh5dVB4cDJmOXBoOVJRQThIL2JINGltLzh0ai9BTG9wd2IvYlg4UlREL3J6MCs2S0FIMFVVVUFGRkZGQUMwNGRLYlRoMG9BV2lpaWdCUlREL3JCOUtlS1ovSCtGQXgxRkZGQUNpa05LS1EwZ0lubldDMloyQUdDY0QxTmMzTkkwc3JTT2NzVFdoZHpDU1FwbkNxVHg3MW5PUG5PS2FBUVVwN2ZXa3BhWWg0cGFRVXRBQUtXa3BlMUFEbDdVMlQ3d3B5OXFiSjk4ZlNnQW0vMVErdE5rKzRuMXAwMytxSDFwc25SUHJRQTZUb3YxcEQvcnZ3b2wvaCt0Si95Mi9DZ0NXeng5clhQVGZXbnFEQmJLWUwzWEZZdTRvcnNPb05NTjNLNkdOc2JUUUJLdlFVVURwUlFBVW44WDRVdEhlZ0JSU0dsb05BQ045MDBvcEc2ZmpTMEFCcEtXa29BUlQxK3RPcHE5UHhwMUFCbWsvaUZMU2Z4VUFMUlJSUUFIcFJRZWxGQUJSUjJvb0FhTy93QmFkVFY2VXVlYUFDaWxOSlFBb3BLV2lnQkQycGFUdUtXZ0FGYUZxQ2JmQUlHU2F6eFdqQVRIYm9kdVI3VW1CWXp4elJrWnBubWNjb3cvQ2dPcDlmeXBESDcxOWNab3lwN2lvMmJESmoxcWZBSTdVQVJiVnowRklRRllFRWdkK2FsOHRPdUJVY2lSZ1padG8vM3FBSDhqb1RRUzNZajhxck5kUmc0Um5jK2lqTkp2dXBQdXhoQjZ0UUJZTG1MSnl1RDY4VkhITjVrNWRWK1hISkhlb2hBZk1IbkV5aysvSDVWWkNrRGhNZlNnQ1F5QTlRYVlaVXpnbkgxbzVIWS9sVWI0OHhkd3lPOUFGTllRTzFTQkFLa0FwY1ZSSTBDbEFwYUtBRXhTMFVVQUZGRkZBQlJSUlFBVW1LV2drRHJRQVlvcUI3bEJ3b0xuMjZWR1dsazZuYVBSYUFKcEprais4ZWZRZGFoYWFSL3VMdEhxYUZoQTdWS0ZvQWdFUlk1Y2xqNzFLRUFwK0tYRkFEUXRMaWxvb0FLU2pOSlFBcE5OcGU5RkFDWW9wYWprbFZPcDU5QlFBK21PNm9QbU9LaGFXUitGRzBmclFzWE9UeWZVMHdCcG1iaEJnZXBwb2pKT1dKSjk2bENnVVlvQWFGQXBhV2pGQUNZb3hTNG9vQVRGRkxTRTRvQVNtc1FPVFRIbUhSQmsvcFVSRE9jc2MwQUs4dlpPZmVvaUNUa25OU1l4U0VVQVJZb3hUeUthYUJtcFlIL1JsL0dyaVlZOE9VUFRCNlZSMC84QTFBK3BxOFVicU1Ha0JKNVRucDViZnBTR0o4SE1JL0EwekJIVlB5Tk9ERWQzRklBNVhxSkZwUE1CeDgvL0FIMHRQRXJqcEorWXBmTlk5UWpVQVI0Qnp4RzNQMHBwai82WnQvd0ZxbUxJZnZRajhLVGJBZXpyUUJFVHRVZlBLdlhxTTAzT2YrV2tUZjd5MVBzVGpiY0VmV2d3eUhvOFQvVVVBUUxIbHMrVkVlRHlyVTBSN2Y0SjQvOEFkT2FuOGh3ZVlGUEI1VTAwSnMvZ2xUNmMwQU0zSC9uNGI2T3VhY1YzYmVJWDQrbE8zZjhBVFUvOENXbHdEai9WdHg5S0FHaUlEbnltSCs0MU9Cd0QrOGtISGNacFF2b2pmOEJOTHV4bjU1QngzRkFCblBlTnZxTVV1My9wbi8zeTFKblA4VWJmVVlvMi93RFRQL3ZscUFKWXhoUnc0L0duWi8yaitJcHNZd3ZSeDlUVHMvN1IvRVVBT0IvMmwvS21uL1g5dnU5cWNEL3RMK1ZOYi9YRHA5M3RRQStpaWlnQW9vb29BV25EcFRLZU9sQUMwVVVVQUZOL2ovQ25VMytLZ1k2aWlpZ0JSVFRUaFRUU0F4SlYvZlAvQUx4cU1vTTFOSVAzamY3eHBDS1lpQm9oanBVTElRUWF1N2VLaGxHQlRBaHBhU2xvQUtPeHBLVTlEUUE4ZHFaSjk4ZlNucjFGTWsrLytGQUJQL3ExK3RKSi9CU3pmZFg2MFM5VW9BSk9xZldrSCt1TksvM2twQi9yalFBaW9aQXlqcVRUcGJUeVlTNTY1QXFTei8xdytwcWZVVC9vNEgrMEtUM0dpblJSUlRFRkZKbWxGQUNpa05LS0tBRVBiNjB0SWVvcDFBQ1VncGNHakI5RFFBaS9kRkxRcW5hT0RTN1c5S0FFbzcwN2EzcFNpTmowQm9BWlJUL0tjZFZOSGxQL0FIVCtWQUREU1ZMNVQ0NkdqeVgyN3NjVUFSMEhwUVFSMUdLUnZ1bWdBWDdvcFJTRHBTMEFIZWp2UlNVQUxRS0tLQUU3MFVkNldnQUZhbmx2NU1ZQzlNVm1LTXNCVzRIVUFESXBNQmlGdjRoVW9ZVWdZRWNHZzBoamp0Tk4ycjZDb0xnQUJkdVFjanBUOXAyOVNQeG9BaWtMdTVTREE5V1Bhb1piUlZLc3psem5IemRLZkJJVWRvWE8xeDB6M3FXYUo1RndHQU5BQWloQmhRbytncCtUN1ZIaVJRTXFHOXdhY0dJSDNHL0tnQkdWdDZzRjZkZWFlSkIvRXBGSVpGQitiajY4VW9kVzZFVUFPM29lOUh5bm9SU2NHbzVVR3hpQnpqclFCRnlhWEZGTFZFaVVVVVVBRkZGRkFCUlJVVWx4R2h4bmNmUVVBUzAxNUZqR1dZQ3F4bGxrNFg1Qit0SXNJems4bjFOQURtdVdiaUpQeGFtYkhrUDd4aTN0MnFZSmluQVVESTFqQTdVNExUcUtCQmlseFNBMHVhQUNrSm9vb0FLU2xvb0FTaWcxRTg2cndQbVB0UUJKVWNreUljWnlmUVZFVEpKMU8wZWdwVmlBSFNnQkdlU1RwOG85dXRDeEFWS0JTNHBnTkM0cGFXakZBRGFNVTdGSmlnQk1VbE9wRFFBbEhTbVBNcWNEaytncUZtZVQ3eHdQUVVBU1BNRjRYNWo3VkNkMGgrWThlbE9WQUtkam1nQmdYRktSVHFRMEFNSXBwcVEwMDBBUm1tbW5tb3kzcFFNa2l1SGdQeUhnOVFhdVI2dmdBUEYrSU5adUtLUUd3ZFJ0NVFBM21JUWM1eFZ5S2VHUk55T0N2VEpyRHNoYm1iL1NTUW5iQTcrOWFWdmNSdkt5b3lScU9tUmdZb0F2ZkkzUXFmeHBERXA3VkZjejJzY1orWkpHOUZQOWF5R3VwYzVWaWc3QUdrQnRlU094SS9HankzSFJ6K05ZeTZoY3FmOEFXWkhvUlZtUFUzWWRGTk1DL3RrLzJUU1lJNngva2FyalVmNzBmNUdwRnY0ajFERDhLUUVnZkg5OWFlSjJIU1g4NllMcUJ2NHdQclVnYU51aktmeG9BWHptUFVJMUJaRys5Q1B3cERFaDdDazhvZGlSK05BQVV0ejJkUHBUd3FuN3M1SDFwbXh4MGY4QU9rSWZ1Rk5BRW5sU0hvWTMrb3BwaWNkWWYrK1RUT1IxakkraHBSSVIvRTQrdEFFc1l3djNYSFBjMDhIL0FHaVBxS2lGdzMvUFFINjA4VHQzVlRRQklEL3RLZndwcmY2NWVuM2UxS0poM2lvT0djT0JnQVl4UUF0TFNVdEFCUlJSUUFVNGRLYlRsNlVBT29vb29BS2IvRlRxYi9GUU1kUlJUV2RVKzhRS0FIZHFpbmtLUk15OGtjZlNxOHQ4UHV4am5wazBscG1VVFJua3V1Um4xb0FxOVRrOWFNVXBGS0Jub2FCRENNVkROOTAxWTdWQk9QbE5NQ3RSUlJRQVVkalJRZWxBRDE2MDEvdi9BSVU0ZGFZLytzb0FXYm92MW9sKzlIUk4vQlJKOTlLQUIvdnBTTC9yV3BXLzFpMGkvd0NzYWdDUzFkWTMzTjB6VTl3ZnRDQkJ4ZzV6NjFSUCtyL0dyWmtFU0tXOU1VV0M0TGI1NHljMHYyWWV0TkZ5dU9RMmZhbCsxTDJScUFIZlprOWFYeUZINFZHYnNIL2xtZnpwUHRMbm9nRkFFM2t4L3dCMmp5by83Z3FEejVQYjhxVHpaRC9IK1ZBRm5ZbjkwVUJGSDhJcXFaWk0vZk5KdmMveHQrZEFGekE5T2FXcU9UL2VQNTAwOU9wL09nRFFKOXhSdUg5NFZReFJnVUFYaklnNnN2NTBubXhqK01WVG9GQUZ2N1JGL2UvU20vYUl6M1A1Vldvb0FuYTRYSHlnays5TiswTmpoUUQ2NXFJOWFNMEFLU1NjazVOTmJwUzBoN2ZXZ0JhS0tLQUNrRkZBNlVBTFJSUlFBZzZtbHBCUzBBU1FqTXFEM3JRbncyMVFlU1JWS3pVUGNJQ09PdGFUUktjY2Nqb2FUQUZRZTFPMjgvOEExNlRCSGVsSWJ0U0dJeTV4a25qbWtHN3ZpaG1LZ2tya1VxdHg5MGlnQ0tlSVRLQXlnNDZFSEJGUUNTNXQvdktaWXgzNzFjM0w2NCt0Qkl3VHhpaTRFVVY1RElPVzJuME5UQmxQUWlvUmJ3eklPQlVSdFpJdVluSUhwMUg1VUFXcEYzSVI3VkJIeWdQODZqRXNpLzYyTGNCM1QvQ3BZakZJTXh0ejNIZWdCMkFhR1FNT3AvT25lWDdta0tNQndmMG9BWlNVVVZSSXRKVEpKa2orOHd6NkRyVURYRWo4UnJ0SHFldEFGbG1WUmxpQVBlb0h1aDBqVXNmWHRVUWlMSExrc2ZlcFZRQ2dDSStiTDk5amowRlBTRUwycVVDbHhRTWFGQXB3RktCUlFJTUNpaWlnQnRHS2RSUUEzRkxTMFVBSlJTRWhSazhWQTl4MmpHNCt2YWdDY2tEazFDOXdvNFFiajdkS2oydkovckd6N2RxZXFBZEJRQkdSSko5OXNEMEZQV01LT0JVbUtYRkFEUUtYRkxSaWdCS1NuVVlvQVRGTGlpaW1BbElhYkpLcWRUejZWWGFSNU9COG8vV2dDYVNWVTRQSjlCVURPOG4reVBRVXF4Z1U3RkFFWVNuZ2NVNENqRkFDVUVVNmtvQVRGSWFXbU80WHFhQUExRTdnZE9UU016UDdDa3hpZ0JoeTNXakZPeFNHZ1kzRkdLZGlnZGFBRlNKenp0T0trUld4eURWbG1ZRWdjOXNkYVlTM2x1R3dBY2NZNlVDSUF2WEdLYXpCT2VjMGtrdlB5NCt1S2hQUFdnWU14TkxHQ1crWHJUVFYyMWp4RUc0NTVwQUlCSUFjbm5GSUhrOUFhc0ZSNmNVM2J6UUJIdk8zSlg4cVFrNXFYYmlrSXBBS3N6SU9IWWZRMUtsNU1QNHlmclZmZ0gycDJPT0tBTFkxQ1Vmd3ExU0RVaHh1alA0R3FJSXhRUmtVQWFhNmhBM1hjUHFLa1c0Z2ZwSXY0MWloVGluaWdEYXdqZENwb01LZWxaQUpGUEV6cjBrWWZqUUJxZVdSOTFtSDQwdjd3ZnhBL1VWbkxlekQrTFAxRlNyZnlEN3lLYUFMdStRZFZCcGZOUGREVlpiNVQ5NUNQcFVpM2NMZHlQcUtBSmhLcDlSOVJUOXludlVTeXhOMGRmenFRS3A5RFFBN0lweTFCS29qWE9EalBKSGFoVmJBS3V3elFCWm9xTldmb3hCcDlBQzFHemJjbnJnVkpWZTRjSXBMSEF4UU1oa3VaRzZZVVZWYVhlcHhrZ2QvV29KTGd6TVFxL0lPMVBpSVlFZ1lHZWxGaEFqRmx5UVY1NzFidEcyM0tIMU9LZzlxZW55dUQ2SE5BRHJoZHM3cjB3YWJWaS9HTGpQcU0xWEZBQ0g2VlhuNFExWkk0cXZjZmNOQUZXaWlpbUFVSHBSUWVsQUQxNjB4L3dEV1U5ZXRNYi9XVUFFM1ZLSC9BTlluMG9tKzhsRC9BT3RUNlVBSzMrdFdrWDc3VU4vclI5S0UrODlBQkcyMUQ4dVNSZ1ZOZFIrWEJBcCs5bkpOTnMxTFNMakhCeWMxSnFEZ3lScU9vNU5McU1yMFVVbE1RVW9wS1VkS0FGcE85TFNVQUZMU2Q2V2dCS1J1bEwzcEQyK3RBQzBab05GQUFLQjBwYVFkS0FDbHBLV2dCTzlGSGVpZ0JhUTlSUlNFOGlnQmFXa29vQUQwb3BEMHBhQUZOSlJSMm9BQjBwYVFkQlFLQUxkZ016NTlCVjJhUjR3Q3VHeWNZTlZOUEIzT3dHZU1WWm1ET0Z3cDRPYzFMR1BSNVg1OHNZOXppbkYySC9MTnZ3NXFKcEhVREJ4OUJUa3VSakRjWW9BU2R5WXlNRUUrb3FSTUZSakg0VUNWeW9JQVA0MHBrVWpQeVo5RFFBdEdPS2llUlJqSy9pcG9XUlc0VjJCOTZBSk5nSFFBZlNreC90R28wbGtNaFJ0dVIzNlpwNExkd1B3b0FSbExEay9wVldTRmpMakF5ZVF3T0RWdmQ3R281U042SGtZUFhGQUVLM0UwQnhNcFpQWHZWaExoSkJsTWtVNDdXR0RnKzFWcExUYTNtUU5zZjA3R21CRzkwZ09GeTU5cWlaNXBlcDJyNkNuckdCMnA0V21TUkpDQlVnWEZQeFM0b0FiaWx4VHNVVUFKaWpGTGlpZ0FvcGFLQUVvcGFLQUcwdE5kMVFaWmdLcnRjTTNFYTRIcWFBTERNcWpMRUFlOVFOY2x1SWx6N21tQ0lzZHprc2ZlcEFvRkFFWGxzNXpJeFkxSXFBZHFmaWxvQWFCUzB0RkFCaWlpbG9BU2lsb29BU2lrZDFRWllnVlhhZDM0akdCNm1nQ1o1RlFmTWNWWGFaMzRUNVI2OTZSWStjdHlmZXBBdUtBSTFpN25rMDhMaW5Zb29BVEZKaW5VR21BbEpTMEhpZ0JLUm1DakpPS2plWG5DY24xcG0wc2NzYzBBSzBoYmhlUGVtQmU1cDRYRkxpZ0JtS1RGUHB1S0FHa1VsT05OUEZBeEthVGlnblBTa3hRQk9McVQrSUszMUZSeXl0SWVlQjZDbVVVZ0cwVXBwS1lEVFdsQkh0aUdUazQ2MW5HdEMwT0lGejcwZ0phVEZPTkpTQWJpbW5qaW5uZ2lrTkFEUW9OUEFvWCtsT29BajJnYzRveHhUeU9LVGlnQmdIclRndk5GUEZBRGR0RzJwS1RGTUJtMmdyVHdLTVVBTUdhZHlPMUtCU2pqanZTQW5VUVJXMi9lclNOMmIrSDhLdndSbzRPd2gxWGpjRG11ZmZJbU9SU2g1QTM3dDJIME9LWWpZMUdZV3VBa2plWWVpQTUvT3FzVjljWStiYTM0VlVDa3QxTE4zSnFVS1Y3MERMeVhyZnhJUHdOU0MvSC9BRHpQNTFuNUk0cGNrR2tCZk9vZWtmNjFTdVhlY0VzY25zTzFJRzlSVHdWTkFGVlVkQjkzOHU5U3dnaERrWTVxY0VVamNFZTlPNENZcDQ3NG94MHAyT1RTQW52Y2t4bi9BR2FyaXJWNE9Jc2YzYWdIU2dCaHF0Y2ZjTldqbXF0ejl3MHdLdEZGRkFCUjJvb3BnU0wxcU0vNnlwRk9UVVovMXArdElBbSsrdEsvK3RUNlUyYi9BRmkwNXY4QVdyOUtBQS82NGZTbXAxZWxQK3VIMHBFNlArTkFFdHJJSWdXOXVCNjFITG56RkxISlBKb2pVa0FnNHh6VFpUbHdjRVV1b3hhV2tIU2xxaENDbEhTaWdVQUxTVVVVZ0U3MHRKM3BhQUNrYnQ5YVdrUFVVQUxSUlJRQUhwUU9sQjZVVUFGTFNVVUFGRkpTaWdBbzcwVW5lZ0JhS0tLQUE5cUtUdUtXZ0FvUFNpZzV4eFFBVVVVdEFGMnhjSWpaR2NuMXE0R0RBWU5WTFdOV2crWlFlZTRwNWgvZktFWXFHN0NrTXRjVTdhcDUyalAwcUw3TzNVU3QrTlNLa2d4OHdQMUZJQ09kQUVZakkvR210YkFKa0ZpZnBVc3NVam9WRzNrVW9aMUdHUS9oUUJUV0dVL1QzcDMyYVhxTUg4YXViMXh5Y2ZoVGdRZTlBRktOSFZ5WFU5T3RUQWc4WnFjOFVod2UyYUFJVGltQjhIRElNVlB0WDBxQ2FBWUxBa2Vvb0FVeVJqdUtYQXhrVW5rb1Z4K3RLcWdENVR3S0FLd0ZMaWxwYW9rVEZMUlJRQVVVVVVBRkZMU2Q2QUNpbzVKMGo0SjU5QjFxQnBwWk9GR3dmclFCWWtsU1A3eHg3VlhhZVIrSTEyajFQV2tXRUE1UEo5VFVvV2daRXNYT1dKWStwcVFMaW5Zb29FSmlscGFLQUVwYU1Vb29HSlJpbG9vRUZGSVdDakpPQlZkN25QRVl6N25wUUJPekJCbGlBS3J2Y00zRVkvRTB6WVhPWEpKcVFMaWdDTVJrbmN4eWZlbmhjVTdGTGlnQk1VVXRGQUNVVXRGQUNVbEk3aFJrbkZRdEt6OEw4bzllOU1DU1NSVTQ2bjBGUWt0SjE0SHBTcW1LY0JRQTBLQlM0cDJLS0FFcENLZFNVQU5wcHB6RUtPYWhaeTNBNEZBQ3N3SEhlb3prbm1uWW94UU1iaWluVWxBQ1VVdEJCeG1nQmpFQ21FNXBNNW9GSUJhMExQUGtjOU04VlJYQSt0WHJUUGxFNTcwQVRrMGdwVDFvSFdrQTFqaW9qeWMxSkw2VXpyUU1rVUhBNXA0SE5NVGluanJRSVFqOWFNWjdVcmRLVHIwb0FSTW5PUmlsWGlnbFF3QlBKN1V1TzVvQVhPUlFldEFwVFFBZ3BldEFwYUFFeFM5Q0RpbHBPL1BTZ0JETEdwK2VQT2V3Tk9tNUpWUmhRZUtZMFNzR3dRV1BRc0R4VCtkMzE1cGdNUlF2MXArQWFBYVBla0F2VVVZbzdVQThVQUtCME5LRkdmU2tGT0I1OWFBRGJuclNNdWVtYWQrTkljWjRvQUIyQk5QQjQ0cHA1R0tRY1VBWGJnNXRZbjlPRFZabTQrV3JGdXl1alFPZUc2SDBOUlNSR003V0hJNyt0QUVPVG5rOWFndWZ1SDYxWWNlZ3FyUDl3MEFWNktLS1lDVXRKUzBBUFhyVVovMXY0MDlPdE0vNWFuNjBBRTMrc1g2VTV2OEFYTDlLYk4vclI5S2MzK3VYNlVBSi93QXR2d3BGKzY5TC93QXQ2UmZ1UFFBK0U0WE5GeHM4eE5wejh2TlMyU0J6OHg2Q21YaWdYQTJnQWJld3BkUUloMHBhU2xwZ0lhWHRRYVZWSjRvQVNrcC9sc1Iwbzh0dlNnQnRGTzhzbjJwUkVmV2dDT2p1S21FUCsxVHZzNDdOUmNDQ2lwVENWNXdXSHR4VDQwaVlmZGtvdUJYUFNpcmdpZzlmek5QRVVXUHVBMHJqc1VNVVZjbENLdkNBZmhVY1oyQUFyK05Gd3NWNk1HcnlsVDBINlU0NXh3QitORnhGQUtXNkFtbmkzbFBPdy9qVjNZcE9kb3AyekhRbjg2TGpLUXRaU09nSDQwdjJTVDFYODZ1WWNkRCtZcEdNZzV3RFJjQ3I5amZybGFjdG0yZVdGVHJNR0gzVDlQU24rWXZ1UHdvdUJBTEhQV1Q5S2JOYUNOTWhpVG5waXJZY2RpS2ptYjd2cG5wUmNDdXRxQ01saitWU0MyUWRSbjhhZUh6VHhRQXFFUnFGQ2tDZ3YrOVU4NEdlMU9GSE5JQ1paVVBSaFVpdDZFR3F2SGNab3dQU2dDM3VvSnFrN01pa3E1Qjl6VWlPNVVaZm1nQ3hRUUQycUVTT09wQnB3a1BjVUFObnl1MHF4SE5ORHNEOTdQNFVzemJvK0FldFI3aG4zOTZBSlJJMmVRS2E3c3lNQXZYanJTQmdlaHpSUUE2TnNJQTNCNzA0RUUxR1BTaWdDS2lpbHFpUW9vb0pvQUtTb1pMcEY0WDUyOUJVRE5MTDk0N1Y5QlFCWWt1WTA0enViMEZRTkpMTC9zTDdkYUVpQzlCVWdGQUVhUkFkcWtBcHJ5S25VODFDOHpOMDRGQUV6eXFuZkpxRjVtYjJIdFVWRk1DUVR1dmZQMXA2M0o3cUtnb0hQU2dDMnR3aDY1RlNMSWpkR0ZVeEdBTXVjVUdUSENESHYzb3NCZW9xaVpuT1BtUEZPRTdqdm42MFdBdGtnRFBTb0h1UjBqRzQrdmFvR2RwRDg1T1BUdFQwS1VBSnRhUTVrT2ZidFVnVURwU2pGT3hTQVFDbG9vb0FLS0tLQUNpaW9wSmxUZ2N0NkNnQ1FuRlF2UDJRWjk2WWQ4aCticDZVNVVBcGdNQ2xqbGprMDhMaW5Zb3hRQW1LTVU2a29BU2lsRk5kd281TkFCVWJ5QWNMeWFZek0vSFFVQmNVQU53U2NrNXBjVTdGSlFNU2twMUdLQUc0b3htbll6UzhDa0EzR0tROHFmcFVnVDFwU200WUJ3S0FLTkxWaDdVamxEbjJxdVFRY0VZTkFCV2hZLzZnNTdtczZ0Q3dHWUc3ODBBV0Qxb283NE5BOUJTQVpMMnFNR3BpdWV0UnN1T2FCamt6bXBGcGlZeFQxNjBDRk9EUnlDUFNsN1VZN1VERzdBWEQwNGowcGU1cGNjVUNHOXFLUTljVXRBQlIzcFIzelNnY2V0QUJRQlNEcWFjT1I3MEFOQSthbEk1b0hTbDljVUFBb3h6Uyt0Qnozb0FhYytsS01kNk8zdFJrNCtvb0FVR25VeW5JTWlnQndHYVllRFVvSEZOWURibWdCZ05QQnBxS1NvUFNsUEJ3VHpRTWZ6MnExSE9zaUNPZjhHOUtwcWVNMDRkTWlnUlltdG1VYmwrWmZVVm5YUDNUOWF2Unp2RWZsUEhwVHBJN2E5VWdFUlNIOGlhWUdMUlZpNXM1clkvT3Z5LzNoMHF1YUFFb29vb0FlblUxR1A4QVdINjFJblUxR1A4QVdmalFBczMrdEgwcHpmNjVmcFRKdjljUHBVamY2NGZTZ0JxLzY4MGkvY2VsWC9YbWtUL1Z0UUJic01iV3o2VStSUTdCY1o5L1NtV1ErVTFad0tReGdpUWZ3ajhxVUtCMEFwK1BlZ0xqdlNBWnRwcGpIb00wOW1WRGhqak5MbGV4Qm9BaDh2UHFLYTZPT2d5UHlxenhUV3g2MEFWR0pYN3lzUGZ0U2dyNmlwbUlBNDZuZ1ZJc2Fxb0dCajZVQVFBVTRDcHRpWTZDankwN0VqOGFBSzc4Z0tPOVRLZ0FHQjBwSGl5d1lFY2RpS1VieDJINEdnQjIzSXBOaS8zUlRUSVIxVS9sUUpoNmlnQnhoVmp5RGcrOUhrNEhCTktKYVBNTkFEV2lZOU1IOUtZVlpUbHQyUHpxWHpEVFhrd3VhQUJaRVA4QUdLa1ZsUFFnMVdRWUhQVTB1QVR5QlFCWkxDbXN3Mm1vTmc3RWo2R210R1cvak5NQ2VJRFlLZmdkelZkUzZEQXdmMHBSSTNRb1IrTklDWWdWR3lLM2FrOHdZNUJGT1dSRDBZZm5RQWdqQTlhbFZmUTBnSVBjVThVQUFEWTZnMDFYWXVWMkhJOURUODAxU1BPWVo3Q2dBSndlUXcvQ2pjTy9IMXFURk9BSGVnQ3RLVk1iZk1PbnJVc2Z6SVBwVHlxbnFBZndwUExUKzZLQURGSDFwUEw5R1lmalNFT09qZm1LQUZjWkJGWjg3VGhqZ2NEdmlyalNPZ3lRcCtsS3JsZ0NZeU0wQVVFa2NZeU1WWVNjZ2ROMmZTckJWU0RsU2ZhbXFpQTdsRzAwZ0lrbExOamQrR0tuMnRnZEtqWXFMamQ3WUpwSHZJMTRIekgwRk5BTFFUanJWWjd0YzRpRzgrdmFvaUpKZVpHNDlCMHFpU2VTN1FjSU43ZTNTb0dNczMzMndQUVU5WXd2UVUvRkFERWpDamdVOENtdElxOSthaGVWajA0RkFFelNLbnVmU29IbFp1QWNEMnBtYVROTUFvelNFNXBNZXRNQmVUUzA1WTJJeTJGWDNvREJHK1FaOXpRQXF4OFpjN1JRWEE0UVk5elVUbDJPZXYxcHZtRWZlVTBBU1p5Y2s1b3Bva1U5NmNDRDBOQUJSU2dVdUtBRzB0R0tLQUZwUTdEdlRTUUtOd29BbEVwN2luQ1plK1JWY3NLWVc1b0F1aDFQUWlrZDFRWkpxcU1ldExtbFlCelNQSndQbFg5YUZRQ2tWdmFuZVlCUllCNEZGSUhCcHdJUGVnQXhSUlJRQWxJZUJTUElxRG5yNlZBek5JZWVCNlVBUGVYSnduNTFIZ2s1UEpwd1hGTFNBUUNpbllveFRBYmlpbHBLQUVQRktCU2dldFBXUFBXa01qNVBBcDZvRkdUVXFvT3c1cHM2WUswQU0rOTA2VTlSU0p4VHhRQW9GUTNVUThrbkhLOTZuRkpLdm1Rc282a1VBWk5XckJ5a2hHT0g0cDBWb01rU1pMQThZNlZQOW5CNEhHS0FKMjRPYWJTN1NGd1NTZmVreHgxcEFLS0NNMGdwZWxBeHUwZ2NVcTlhY0RTaFJuSW9BRG5pbmRxWXh5UlR4MG9FSU9EUzhVWTV6UjJvQWFldkZBb2FqRkFDaWwvclNEZzA3bnAxNW9BVGtIMHBSejJvb29BUWRNVXZyU0E4VTRVQUg2MG1jMFpwRGpPUDFvQVhJNzhlOUlLUW4wcE0rOUF4MzBxVkJnY0dvUlV5YzkrS0JEeU1ad1ByU0hBSFBTaWtkZDZGYUFIQWpyU0ZjOGcwcXJnQWVsTFFCRU9Eeit0UEhGS3dIUDhBT21aSTYwQVBOVmJnbllmclZqUEhwVmE1T1k4KzlBRXR0cVVrWTJURHpZenhnOWFsbHNZcnBETFpNUGREV1hUNHBuaGNQR3hWaDZVd0VkR2pZcXdJWWRRYWJtdFpMaTMxRlJIY0FSemRuSGVxTjNaeTJyZk9NcjJZZERRQkNuZW1ENy80MDVPOU1IK3MvR2dCWnY4QVhDcEQvcmgvdTFGTi9ycWtKQWx5ZW0yZ0JGLzF6VXNBRGNFWkJwRURFczRBR2ZXbGdrVkdLOVdQVDYwQVhJcElrR3dIR1BXcHdSMjVwSVlGalg1bERPZXBJcFRDaDZMajZjVWdERkdQUTAzeThmZFp2eDVwcnJKc0lCQlA1VUFNd0pHSmJCQTZVN2F2OTBVS01LQmpGTzRwREdsZlFuODZZU3dQV25rMDF1YUFHbmR2RERHQjJwNGsvdkRGQTZjbWtvQWVIVmp3MU9xREFQVVVtU01LcHdUUUJaN1VVd0J2NzJhWDVxQUhkNmE2cVZPUURSa2p0VEhiam9hQUlvbzhjL2x6VXV6NmloU0JUd2FBR2JXOWFZNk93eHh4VmhTS1EwQVFqUGNVdTRBOS93QXFrNDlLT0RUQVprVXVlS2RzSGZGUXpaVWdJY0UwZ0pLT0tGamNqazgwNHhPUFNtQWhGTWdYRHZ4M3A1UjhjTG44YUk4b0NaQVJ6NmNVZ0pOZzlCUzdSUUdVOUNLZGtVQUFVK3BwUExPOHVHNXhqa1U4VXRBQ0FOanNhT1IvQ2Z6cDFJenFvK1lnVUFOTDdlcHg5YUE0UFJnYWhtdTRBcFVuT1JVS1hKS2dSUUUrK0tBTCthUXRWTGJkUDBWVXAzMldaLzhBV1RuOEtBTEVqTGc1SUhGUXJkUklnRFB5T3c1cHY5bm9lcnNmclVrVm9JUWR1MC9VVUFNKzJNMytxaFkrOUtFdkpld1FHckN1NnNBWStQVVU5cmhRT2pBK21LQUtvMDVtL3dCYktXOWhVaVdpUi9kWEI5UlZoSjBZZGNIME5QREJ1aEZBR01xQWRxZmltdElxKzVxRnBXYmpvUGFxSkpta1ZmYzFDMHJON0NtVVU3QUlhVHJTbkZHUlRBVGJSZ0NuS3BicHdQVTA0RkU2Zk8zcjJvQVJZeVJub1BVMHU1RSs0Tng5VFVMekV0OCtmcDJvRFo2RVVBUFlsajh4elNVRDg2WEZBQ1VZbzZHaWdCQ2dQVUNtK1dPeElxUUdqOEtBSThPT2hCcGQ3RHFwcHhBOWFNRDFvQVFTcWFjR0I2R2phcDdacHBpWHRrZlNnQi9CcENLajJNT2pmblJ1a1hxTS9TZ0IrMmpGTjgzMUJGT0RxYUFGNDlQeHBPbEx4bWdqTkFEYzBkS1hiUUJpZ0JNMG9ZQ2pBOUtOdEFEd1Qyb0xFakdhYjlCVGhRQkg1ZlBYUDFwZGhGUHhRZU85RmdHNHBLZHVCNG9OS3dEYUR4VHVEU2JNbnJRQTNyU2dVNEtLbFZWSFNrTWFzZmMxS3FaK2xPVk81L0twbFhnMGdHS2dBNlZEYy93MWF4MXF0Yy93MEFRclRoMXBCU2dVd0g0cFY0cEIwcGM4MEFOWTdaQlVtS1FnSHRtamNCanZRQXVCVENLbDdVM25uamlrQTBjVVV6SjNFR25LZlhtZ1k3Z2lsQUZLTUFEQTU5YVRMTmpQTkFBVlByU2pPUFdqSXp6bWw2Q2dRM1BPQ01Vb1lEcWFLVWNjY1VBSEJGSmlncU1jY0drQ25vV0pvQWNCK05LT0RtbUtHQXdjSEhlbktjVUFPeDlLYm5GQmNCZXZQdlRTMmNnVUFQOEF3b0E1OTZGNVhtblVBTXhpazJrOUtrd085TGlnQ0hEWnBRcEo2YzFMM283QTBBUWdjZ1lGVFI4QUg4NkR5ZjYwNVRnZTFBRHdBUUtCMDVwUjBvSFNnQXdPdEJITktTT2xJZXRBQ1lIcFRDTnRQcER6UU1qelVGejl6OGFuSXgwcUM1NFEwQVZLS0tRMHhCbXRHMDFJcXZrM0k4eUk4YzhrVm0wWm9BMWJtd0JReldoOHlNOWh5UldTRGgrZldwcmEvbHRKTXhuSTdxZWhxOWNXOE9wUW00dEFGbUgzNC9YL0FPdlFCbHU0YVhJNXFjSms3NU1ESFFWREE2SStIVWcwazB4YzRIU21CTHVlZHhIRUtpdW9YZ2tYY0NNaW9rZGtiY2pFSDFGVHozTFhNU0s0RzlUdzNyU0EwNGJwZnMwYnZuSkdEaXBWbWpmZ056N2lxdWxrTkF5TVB1dDBOVzF0MVQ3cEkvR2dCZU1kYVNvM2JiSUU0Skl6OUtUYzNUYmo2R2tBOGpGTU5HLzFwck5RQWhwTUV0Z2VtVFNnOXoyNXBZczR5ZXA1cERHUDhuSkJJOXFhSkIzeUI3MVpIUFduQlFlb0ZBRlV1dUNRUWFiYmtGMk9LdE5DakhPTWZTa2VBRlR0d3A3WW9BUUhtcEFCVlVMTUJuazQ2aW5SUEkyUGxIdWFBTEJGRzNtbUZtSFZUeDNGSG1JM1hwUUE0eGoycHZsODlQeXA0WWNBVXVlZXZJb0FnY2JWeUd4OWFiRXp1Q1RnRHB4M3FXWWdJU2VSaWtpRzFGSHRRQWhEVW95T3hxVEhlbHhRQkZ1SFROTlVCcGpraklISEZURUR1S2FZMUp6am1nQ1FmV25BVkNWT2VHUDUwNGJnT3VUUUJJUUtCVVprWURsYy9Ta0U2a1o1L0tnQ1VxcEdDQVJTR0pEL0FBNCtsUXl6N1FOcDVxQnI4NUNweTN0MG9BdHNpcVB2RWUrNnFuMnBsZmFHMytnQXlhZUxhU1g1cDVPUDdvcDlyRkdqdnRVY0hGTVEzRjNNTzBZOTZVV0pQTWpGejljVmVGS0FPbElaVldLT01FTEQrUXBMZGdJd29HTVZiR0tPS0FJd1JTNXBTb0p5UURUSGhVak9DRDdHZ0IxRlJlV3c2U045RHpTUnRJNVpTRkJVODgwQVRVaHBBSDlCK2RCRERzYUFJNXdER2Nqa0RpbGoyK1d1TVp4MnBHWW5nZGFTRWpZRjZNT0NLUUdVTW1qZ1VFKzlOeldwSXVhUW1sUkdjL0tQeHFURWNYWDUyL1NnQml4czNiQXAyRVQvQUd6K2xET1g2bmowRkptZ0FkaTNVL2hTVXZXazRGQUFRRDE1cU1vakhwajZVOGtudlNVQU44cGg5MXZ6cEQ1ZzZybjZWS09PdEJhZ0NJT08rUlR4dFBlZzRQVVpwcFJmcFFBN2dtbEZSaFNPamZuUmx4MVhQMG9Ba3BNVXdPTytSVHM1NkdnQmNHZ1o3MGd6U2pOQUMvV2tQdFFhU2dCZlkwaGpVOXNVVW8rdEFETm45MWlLUDNnOURVdUtNVUFSRnovRXBwUTRQZW44VTBoU2Z1NW9BY0NEM296VFBMWHR4U2JYSFJzL1dnQ1FuME5KdU5NeXc2cm42VW9rQVBJSSt0QUR0NW9KejFwTWc5Q0tNVUFMdTRwdWNtbmJLVGJqdFFBOEFBVVp4MXBBMk90SVdPZURRQTRuam1oUnVPRkpwVVJwRG5ISGMwNHVGRzJMZ2QyOWFBSDcvSkdNN245UFNwRGNuUHlqajNxc0FBT2FBeFBRVXJBV3hjRHVQeXFPZGxjREhXb2FSVDlhTEFPRk9GTnlhY29KUEZGZ3VPb0hXa1lCVGpPVDZVbWZsOTZReDdIdFNkcVEwb29BQVNEN1U4SEswek5DbjVxQUZiMW9BcGNaRktQU2tNQUtPZ3g2MHRHTTBBSmo2MC90UWVsSDRVQ0VwcDRQV25VaEhOQUNBMDRVQURyNjBBak5BQzBFWjdVRThVRG1nQkN1UnlCVGNZYnZqR0treHh4VEIwem1nQlQ5S2R0T01yMDlLUWRQV2xCQUdNOFVBSElIU2wzREhRMHZzRFRoNzBBSmtVY1VjY0RGS3ZHUlFBbUtYRkFJNUJvR0NNNHlQYWdZOEVsYVhPQjZaNlV4ZG9PY2RhWFBjRThjVUNIWnlPYVErdEE2QTdqajBvYkJHYUFFNy9XaitWSVR4N1VaSHJRTVJzQ3F0ejl6OGFza2NucFZhNi8xZjQwQVZLUTBVaE5NUVpwckhBcEMxTkpKNjBBS2hBZm1wTGE1ZTJuRWlIcDFIcUtoQUpHY0RGQUk5QlRBMHRWaVJ4SGVRakN5L2VBOWF6dUswbCtmUkdCL2dmajgvd0Q2OVorMys5MDlhQUc3YzhEclJqRlRCTUxrL012cU9vcENCbkRrYy9kY2Q2QUpiRzY4aVREREtuZysxYkhtQXJsVHdlYzF6K3d4dVFlYzFhdEoyeDVKNk4wcE1DK3BEdXo5YzhDblVnd0JqRzMyTkxta0FVMGdaNlU3QkZMM3BESTJRTW9BSkI3MEFGUjYxSnR5YU52dlFBME42OWFjcnEzY1o5S1hIdFRTcW5xb1Axb0FrejNvQjlhaFNMNVNRVzU2RFBTbWJwMVlBREk5NkFMWStsTllBYzRBcUZIbUp5VkdLZVhKSkJVMEFKTGp5eWUvYWxTTUJBUFFVeG1ESm5rQUdwWTNWdWhCK2xBQnRCSElwUEtYMHg5S2w0Sm9JRkFFRWtJZE1aYmozb1VNQjJPUGFwV0ZNSW9BT2NVQStvSXB5amptbDcwQU5CQm9wSHhnOFo0cGlyME9UbjYwQVNVVTNCQTYxRkpPSStNZy9TZ0NaaUFDVHhWYnp0cWhFR1dwaDg2YlBCVmNjY1ZZdDBXTlA5cnVUVEFqVzFhVDVwbTQvdWlyQzI4YWdBSXY1VTRFWjYwN2NPMUlCQkdCMHlQYk5SK1F5Wk1ia0U4ODgxS0RUcUFHcjVnSEp5YWNKRy9pWDlhV25BVUFOTXFEcmtmVVU0T2pBWUkvQTAwclZhR0tOdHpFZk1HSXhRQmNHS1hnMUNVVmgwL0xpZ2dnZkt4b0FrSzFBT0xrL0x1eU8xU1pjRE80RWZTb3h2OEFORDhFWW9Bc1k1b1BwVGZNSFFnL2xTNzFJem44NkFHc29ZRUhvYWgrenFyWnlUVmo2VWhGQUdDRmFRNFVVOElpZmVPNCtncHhrSkdPQVBRVkdTZndyUWtjMGg5Z1BRVkV3Mzl5S2R4MW80b0FqMnVPaHpSNWpEN3ltcE0wWW9BYXNxbW5nZzlEVFNpbnFCVGZML3VraWdDVEZKMDcwekVpOU9hUE1QOEFFdEFEcUtRTXBwY2VsQUM5dUJRRjlhVlJpblpvQVp0b3hUaWFEMDQ2MEFOMi9qVFRHUFRIMHA0QjcwRVVBUjdEamh2em96SU9vejlLa0F4U0hyUUF6ZU8vRktDRDBOTDFwcFZUMm9BY0FQV2w5OFV3SWV6WSt0TDg0OUQ5S0FIWXpRUWM4VTN6Y2ZlQkZMdnowWVVBSWMwZEtkaytuNVVjRTgwQU5vV243Yzk2WEFvQWFLZHR6MUZMeDNvQnh3QlFBd3hJZjRjVTN5c2RHSXFYbW1zQ2FBR1ljZENEUnZZZmVVMFlwVlZtT0Z6bWdCUE1ROWFsUll5dTVqK0E2bW5ZalZkcEFkKy9vS1lvVmZ1akh2UUE1bUw4ZmRYc29wdUFBVHpTMHZibnBRQTNHU0NRUlR1M0hTanIxb29BT01jVVVBQVU1VXp5ZUFPOUFBcWxqUTh3UWJVNjl6VEpadU5pY0wvT29hUUQ0MitmSnFjY0RwVmRQdkExYXBNWXlsRkk0STVCL09sQU9RU01VQUZPVHVhUWNtbkRweFFBb0dENlVBVVVwcEFIdFNqZzQ0cE9tQlNyNmRRYUFIWTQ0cE90THpqMXBPbldnQUZKM3BlOUZBQ0h0Umo4NlUwY0dnQkFSM3BlZ3BLVUFldUtBQThyVFY1WDZVNGo1VC9Ta1hHTSt0QUFLVVo2OVJTalBHS0RrR2dCQVQrUHBUd2VtZlNtWjU2OFVBODg4MEFQeU90SVpBRGpyVWVmWHBSdDU0NlVBU2JnZUQzOWFjRnhUUUFCZy9yUzU0b0FlTWhlM0hUTklUbCt2SFNtbCtPdEFUYXBKeVdQNlVBTzVCemswbS9DakFQVG1sQkhCQVA0MGJOeERkeUtReHBKMjRicVI2VW1Xd01jK3hGUEs1QkhYSFRpbll4NkdpNEVEUHlBM3k0cXZjdHVUUHZWdGdNOGlxVndNRHIzNlV3SzlSc2Ntbm5wVWVNMHhDVWRhY2lNNTJyMXFaSklvUmhWOHgrN0hwK0ZKc2FSWEdSMUJvQXlLdGlkbE81NEZINTFZamtzN241R1h5M1ByL2pVdVRYUXBSWGNWUDNlaU9mN3ovMXFsSHovQUt2cjNROUQ5SzB0UmlNVmpGQ2dKVUhMR3NqQkJ6M0ZXbVRZc0FxUVdqT3hoMVU5S2J4SXJMdHdlNi8xRkFQbThqaVFkL1dvMkpCejBQOEFLbUlGSmI1RzZqb2FYUHAycGtwemgxNHAyN09HOWV0QUd4YXlpZUVNUmxod2FrTWE5aFdkcHN1eWNvVHc0L1d0TWtZcVdCSHM1KzlUSGZ5K1NPUFVWS1R6d0tndUZMbFZIQXpuNjBoajF1SXp4dXg5YWtCQjZHb0JDcEdHRlNMRWcrN3hSWUNVVXlRamI5ZUthWTMyL0ljSDBKcUF5U2h3Q1F2MUhXZ0MybUFBS2Z4OWFxTE1VK1ZobjZWSUxoRDNJUHZURVRFODBvcU16S0Z6a0hIcFFrNk1RQndUMHBBUzRwdmxBbjdvejlLZFNFMERHN01lby9HbEtzRnlHL09uWnBHUEdhQUlrTE1PUmo4YVVsdlQ4cUZPVkhGQW9BTjRIWGo2MHU0SGpQUDFwY0EwMWd1UjBvQWJKanl6azRwa2tpb09UVVV6cURzUmN0bnRUbzdZdGhwVGsvM2UxTUJtK1diaE9GOWFsanQwVGsvTTNxYW5DY2RBUHBTRlNPdlNnUUEwdlhyVFFSNmlscEREWWg3Q2pZT3hQNTB0RkFER0RqN3JBK3hvaGVSODVVQUQzcDJhZkNNSWVjL01hQUZ6anNhZHVBNzRvNzgwVUFHNEhvUlVNRGpmSUNPYzlxbEtBOVFLWVlVemtaVSsxQURtWlI5S2lFNEJ4MUZTQkRrbmVUOWVhYVlNajdvSjlqaWdBODllZ0JwaXU0Skk2R2xNQkF6aGdmVHJVUllvMk4yUDBvQWszbG15U2NlMVNwS3VEa2dqM0ZWeUg2NHlQVVVtMXowR2FBTFIyL3c0L0NvNURLa2k3WCtVOGM4NHF1ZHlIdUtVTzJBVHlBYzBBVUFhV292TFlmZGFqYzY5UldoSkxSMHFNU0ErMU9CejNvQWRTaWtvT2FBQTB0TklQclNETkFEK1BTZ2dHaWpOQURXalE5cWI1Wi9oSnA5SFNnQ1A5NHZiTktKUDd3eFRzR2pqdnpRQUJ3YWRuMHFNb3A5cU5oSFJxQUhqM3BjMUhseDFHZnBSNWc3OFVBUzVwRGpIU21oZ2U5TFFBM0dlaHBjQUEwNENqRkFFWEpwd3lPOU9JR1BTa0dQVE5BQ2pwelRXUUUvZEZQN1pwdWFBRytYajdyRVVmdkI2R2wzR2t6UUFDUWpxcEZPRXFudlROMUtRQ09WRkFEOGcwaHlhWnNIYklvK2NkRG42MEFPeVIzb3lmV203MkhWZnlxU0pveTN6QThkc2RhQUZqUm41NkwzTlNNNEM3WStGN3QzTkk3Wis5d3ZaYWJRQW1PT0thUWMwODAzcjJvQWRqYjFJUDBwaGZGT0ZNS2s5cUFCV09ha3BxSWMxTWRzSXkvTGRoUUFLb1ZkOGhJL3JVTXNwZmdjS09ncEpKR2Rzc2FaU0FLS0tWT1c5cUJra2E0K3BxZW9sNmpOUzBnR3YweFQ0d1F2Tk1iMUZPamJJOTZRRDI0cFBlbEpwdEFDNHgwcGFUclMwRERuNjA1UnpUY2NVNWFBRlB2U1k5YVhJeG5wVFQxOWFBRm85ZTFKUUQ2ZGFCQzVQZkpwT0tYUEhTbTlSbWdZdk5MeGppbSs5TDlhQUZKK1UwaVpDakgxb0krVTU5S0VQeUROQWh3K2xEY0gxRkh2U0U4Y1VBTnh6eHpTOU9vcEQ3QTB2ZWdZaEhQU2xVWTZIaWdESFA2MENnQjJSU2REMW96K1JwWXh1ZmtIQW9BVlFUaHUzODZrQkk1d09mV2tPRnlCUmtFOGMwZ0E1SlBINjlLZWc1NjVwcXJnODlhZDZETkFEemc5cVRhcEdPbEFHVlBPS2ErUXZzT3A5YVF3WlJ5QmcxVG1qRGpJN0dweXpHbzJKVmlNbkI2MENLTXNUSXVUakZWODgxZHVYRERHMzhhcFZhRVRJck5FUWdKTGRjZWdwK254Q1M0eVJsVkhPYXM2YzM3b2pINDFialZBeEtxRko2NEZjODZscm8zakM5bUV0dEhjQUt3dzJNQmgycDFwcE1jSUVrN0JuQnlPY0FWSU9EbjBxbHFsOGtzWGxSUzU1NXgzb29ONm9WVkVhNm1XdW5Fb0hsTWNEMm8xRzNWUUpZeDhwOU8xVXhHdmtlWnZCYk9OdFhOUG1Fa2JXMG5JeDh2MDlLMGw3cjVrSkxvelBCMm5JNmludmlRWkhVMFR4K1hJeUhzYWpCSTZmVVZvbVpzUlRrRmZXa1EvS1YvR25NUVhWaDBicjlhWXYzcVlpV0Y5c3FzT3h6VzF2eVA4QUdzTkJsZ1BldG5xZG83MG1BL2V1TTU2Q21SaHBNa2drOWZwVFFLY0JqSUh5L1ExSXlRWXlLZHdSeDFwaTVCd2VjZWxPSkE2SE5BRGdTVGltU3J1QXlvYjYwQ1JUMzU5RFI4NWYrRXFmenBnTldGQjBBd2ZXbGFKTnJBS0tsQzBGRHRPMGdIMU5JUlRXSXZ5Q0R0N2RLRWdrWHFwWHZrVlpNY2VjbmJ1NzRwUytaQ296Z2RmU2dZMUErTU8vTk9HNDl4UzA3UEdLQUl5empxblBzYzFITEtObURrRThIUHBWZzlNNXBqZ0VBRUFqSGNVQU4zREl3UlQxNSt0TkVTRmNiUUI5S2F3Q0w5NHFCNzBBU1p4VmVXWGU0Uk9hamFaNURzanlmV3BZa01LNTI3bTdrYzB3SHhRQk9UeTNjMU5qam1vMGxWeHhuOHFmdXozcEFMaWcwb29vQXJTcjVrb1hweG1uQmNESFA1MDVnZlA3WTIrdExRQWdCOWYwcFBtQjdHblpCRkZBREdac2NLZndwMXZJdkt0d2M1eFMwblhwUUJOOU1Zb0hXb2lvUC8xcVVaWEdHTkFFdE5JR1RVWmFRTHdRM3Nhalc2M05qeXpuMm9Bc0RyVHhVVzhkd3cvQ25xNm5vMzRVQVB4VmU3WGNnK1VFQWpuMHF6VVZ4L3FtNHp4UUExRVhBQUFwd2hYT1FNSDYwS2ZsR0tVRTBBRHc3dU4zNWpOVjVMU1RQeU9NZWxXZzFLT1RRQmdEcnhUc1pwTWVocE00NzFvU0JRSHJpbUdNZnduRlB5S050QURQbkhmTkhtRWRSVHRwcGNVQU5EQTk2Y0dwREdwcHV3am9mem9BbHBwR2U5TXl3Nmo4cVVNTTg4VUFMakI2MGMrdEhVNXpSbWdBL0dpak5GQUJSUlNab0FYT0tYT2UxTjVKcFFjZlNnQkNpazlNZlNqYWV6Zm5UMEFKeVJrVXBVZlNnQm1XWHF1ZnBSNWdQQk9La3dLUXFEMW9BWitPYWV2cWNVMHhyN2o2VW0xaDBiUDFvQWVXRk5OSnVZZFZvREtmWTBBSWFUQnFRWTdVbTAwQU5BeFMwdlBwU1lQcFFBWnBWVm1PQURVa2NSUEpPQjcwOW5BR0YrVmZYdWFBR3FvaVBabXgrQXBqRWc1N252VGpuQTJqaWtDc1FjMEFSNXllYWRuZ0FDbmhGSFdobUNqanJRQTBEQXBRUWFqSko2MHFETkFEK0JTcUdac0tLZWtaZjJVZDZiSk1FR3lMOFQ2MEFLenJEd3VHZjE5S3JsaXh5VGswbWMwVWdDZzhDa1pndlh2UzllYUFFNjFKRU11QWFaVDR2dmlnWk9BUFNuVWxGU0FqZEthb0FQZW5Ha0hXZ0IvT09QMXBlU09tUG9hZDFGTVlZR0J4UUFwSTZtbHlEM0JwcEJBNGFrMnFDQ1J6N1VESlJpbEZNSnlEd1FSM3FNU1NKd3loL29jVUFXUFdtbjJxTlp3d081R1U1NHdPdFBEcWUvV2dBb1BybWw0Tkp6ajFvQUNlTVpwQVNNNDVwMlBTbWtVQUtCbm5wU2ozcEJtbmR1YUFFWWNZL1dsUS9JQjFwR1B5aytsSWh5Z05BRGpnSE5CK3RIMVg4Y1VoN2pwNkVVQ0duOUtVL1NnaWdrWTlLQUFjYzU5c0dsNHgxcHVhTWs0eHpRTWN1U2NMVXlmS29ERDhxZ1ZnclpZZm5VbTlDcDNFZzU0cEFPd1hZOGpIMXB5TGc1SEJwRWpMWUtqOGFseGdDa0Exc0RtbW9mbitYcWFVNTNZNmlrd1ZYbm5GQUR4eUhiSXd2SHBVY2h5Y0E1OTZjU3E5TWMrOU5aZmxJR0NRZnpGSVlTRUVobEJIUElGUXVGQTNianlPL2FucTdEY000N1o3MVh1bjV4dUo5YWFBcVNNWGZBemtuaW9uWGE1QjdWZGlqT3dNQ005VFVGekV3K2M4K3RXaVI5ak1JMktzY0E5L1N0UE9PUldFcHdjMU5ETk1qcWlTSGFUeG5tc2FsTzd1aldFN2FGelVMbDBUeTF3Tnc1cG1tMjZPcGxkZDNPQUQwcTc1YTQ1VUg2MFJvc1dRb3dDYzQ5RFdQUGFOa2E4dDNkalpMU0NVWTJoRDJZVm1ZYTJ1ZVJoa2J0V3pXWnFmK3ZHT3UzbXJwU2QrVmt6U3RjWFVnUE1WeC9FS3BIclY2N09Za1h1QVA1VlJQV3Q0ZkNaVDNDTmN2c3lCazhFMHhSaHlEMUZMbkVneFM1TE94UFVtcUlKN09NeVRnOWw1TmFYSjR6K0ZGdGJ4d3hoY0ZzakxFVU1kcCtZRUFkRFN1TWVBQnpRY0U1VVkrdE5HQ053UFh0VHUzU2tBNFlPT1RqdlNZNm5OTDdVb3dRQmpqUFdnQkVoVjVkNVhKQXFmYjZnVXFPeXJqb0QxRkJPVFFBMEtCbkdSbjNwQkN5Y0dUZDZnaXBlQjlhQ2MrMUFGRjdlUURoTSs0UFdsaDNyOTlXQjZETlhjVVlvQWdCQjcwdnZVaFZjNUlHYWhrYUlaeStQcFFBb3hnODlQV2tKeUI2VlhrdVZVZ0ljL1hxYWhNazg1d3FrRDE5S0xBV0pMbFkxSTNaSHBVSVdXNU9UbFU5YWRIQWlFR1RMTjZrVlpERHNSUUFrTWFScnRVWTk2ZWZsNjVwdTdQQXBrcjRUa25GQURvRkxLU1NSVXBIR0R5UGVpRVlpVWUxT3hRQXd4cWVRQ0Q3R2wyRUhJWS9RMC9GSGZyK0ZBRUxSdDVoZklQR01VdURua0g4cW4yOFpwUDFvQXJuSHJpbHppcGlNOGNZcGpSTC9kb0FqcGFZMFJSR01iZmdhalZwaU4yQnlPbWFMZ1dBVGlsRlFlY1Z4dVJ4K0dhZUpVUDhXUHJ4UUErbXdZekpnZnhVQmdlaEJvZy8xa2crbkZBRTlHQWVvQm9CcGU5SUJBZ0hUSStocEhqTElWM25COXFlRFM5cVlFTWF1cWdFQnNmaFNsc0hCVS9oVXYwcE1VQVJGd0R6a2ZVVTRNRDBJTlB4VEdqVTlRS0FNTWtIaWt3S2FKTWRSaW5iZ2EwSkZCR2VsTFNDbHhRQXROSlBZVTZpZ0JtVzlxTWtIMW9QSjlxS0FGejdVY0h0U1pvelFBbTBkdUtNTU9oQnBjMFpvQWFUanFwRktNSHZTN3FRN1c2Z1VBR0tOdVRSdDlHL09qNXgyejlLQUpBQ3A2a2V0QUFCempOTUVucng5YWRrSHZRQTdnVW00VTBqMHBLQUg3aFNGdlNtMG1hQUhiaU85SnY5NmFUUUFUUUE4UFFTQ1B1NXBBTVV0QURTcTlzZysxSHpEb3dQMXAxS2lNNXdvb0FidllkVlA0VkxGSWg2OG5zS2VOcURhbzNOM0o2Q21aK2JBSDQwQVBZbHVvK2dwTm1UazgwcS9Ta2Q4VUFJd3h6bkFwcGxKR0FLYXpGcWJRQUhtaWlnS1dOQUFPYXNSeEFMdmM0WCtkQVJJVjNTY25zS2dra2FRODlPd29BZkxPV0cxZUY5S2hvb3BBRkJPT25Xa0o3Q2tvQWlPZk15YXNkaDlLZ1lZY1ZPT2dvR0ZPaisrS2JTcDk0ZldnQ3hTMGxGU0FVMGRhY2FhQUQxb0FsQkF3RG5uMG9JNDVwTTg0NzBaSlhvS0FGSXBCMXdhZDI2aWtZZTFBeHdPRjYwdWVUVEFRQnprMDdqdlFBQnVUN2Q2Y0Q2a0gySXBoeG5OSGVnQldRSGtjZXdwbXpsY08yYWVPdnBTTU4xQUVnQVBjVWhCREViZVA1MHpia1l6aWtBSzRHN1Axb0FsMkhuMHBNRWRhQzV4U0xJeE8wam1nQkg2SGpOS01ZejYwNWxCemlnajVjY1pGQUNVaDQ2Q2szcURna0EvV2xKSHIrVkFDYnNuR0tUaWpIUFBXazY4VUFHYUJ4N0gwcE1FanJpanQxOXFUQWNweVJqblBhcEl3V2M0QUo5cWpqWGRKd1BwN1ZmaWpDakJ4bnZpZ0JVVWhmWDNwK1FBZmVrOTZPcHhqajF6U0FZK09PdUIxcG1DUG1RODlSVXB4a0Qyem1sMmZLY2puNjBBVUpOd1k3aGdaNjBpazhFSEdLc3l3N3h5VDBxb1FxOERLa0RPUnptZ0IwNXhoaWVmU3E2SjVrbklPM3FjVkpNKzREUHpjZEtuaUF4dGpYNjVwZ0RLQUJ4amlzdTZtTHZoVDhvUDUxcnVyRkd5Y25IRll5WVdURGpwMXBvUTYzdDN1SkFxakdlVG50V205Z2lSQkZCM0RrUDN6VlZTY2g0V0dSenhXamEzQzNTN1NRc2c2cWUvMHBnTlFrcU53d2U5SkwvcVg0ejhwcWVTSXFwQTYxQXlTWUk2REhXdVNVTFMwT2lOVFRVellMK1ZDQko4NisvV2xrbU4xS0daY1JwMTlhc1JhZEd4Qll1ZDNiRlhVdEk0Y1lBd09udFd5U2IwUm56TzJwaXpTZWE1Ym9QU29qV2xmMmZXYUxwMVlmMXJPd1NlQm10VVo3akRndU1malQzVlRLQkdTUmpuNjFadDdUSjN6QUQwV21lV3YybDlnd3FpZ0MvQmRvcXJ1L3U4MC93QzF4bitJQVZHbG5DSXR6cnpqSit0U0paeEViajA5Q3VEVTZESEM3Z0hETnVIb0tUN1hiNTlSbnBTL1k0aWVCeDlLY2JTSWdBS0I3OTZOQUkydUxZNUtsaDZVZ3Vvc2dIcGpraXBmc1VPUGY2VUN4aTdpalFCaTNzV09UUy9ib1FldFAreFErbEFzb2NmZG8wQWpPb1ErOUovYUtaK1ZTVFV5V2tLSE95bkZOcEJWUjc5cUFLeHZwbis1Q3gvNERTK1pleUxnSnRQcWVLbUZ4empZZnFPbFA4NWVuSStvb0FxZlpybVQvV1NnRDg2a1d3UUg1M1ovMHEwR1U5Q0tYSTdVWEFpRVVjU2txZ0dCNlVSZ2JlTWMwNlU1VWoxNHBObzdVQUxpbUdOQ2VWQnA1eDJQRk1vQWI1QzdzZ0ZUN0dtU1dwYm5lYys5VGhqakhhbEI1b0FqVGVnQUs1OXdhY0pSemtFWTlSVHpqdlRTQlFBQ1pEZzd4K2RQQkI1R0tpWkZJd1ZCL0NvSm90cWxveVZJN0EwQVg4NTVwcDloVkdDUzVZQXFSai9hcTByUzQrWlZQME5JQ1FmU2t6NjBna0hkU01ldElaRjlSVEFodUpDaTl4bmdVNUI4aWpIYW1YVHhtTEdjbnRUMEkyakJ6eFFBL0FwQ3Y0aWdIMUZLVFFCR1kwL3VqOHFVSnMrWmVDZXRQQnBWYmFlZ1Axb0FqL2VaeXJBajB4VGc3RHFvUDBOS2NISkhCOXFUQm9BWHpoM1ZoK0dhVVRLZWpDbTR5S1hHZW9CK3RBRWdiTkxtcWlRcUpYQXlCMUFCcVFLUWVHUDRta0JQbk5CcUxMLzdORzlzWktjK3hvQXhjQTBoalU5T0tYRktPSzFKR2JXSFE1bzNrZFFhZnpSUUEwTUQwTlB6VFNnUGFrMmtkRy9PZ0JTUFNqSHFhYmxoMUdmcFNoeFFBb0FGSHkwdkJvSytsQURlS050RzNIV2w1L0NnQmhIUEZPQ2Nab3htanBRQURGQTRvbzcwQUxuNlVtMVQyeDlLZHRBYms4ZXRPeUR3RndCUUJIdFlES3RuNjBibUgzbHArUGVsb0FqREthWEFQUTA0aFQxQXBwaUg4SklvQU52dFJ5TzFHSkIwSU5IbVkrOHBGQUJTWnA0ZFQ2VktGVmNFakpQUVVBUnBFU01zY0NwTTRHRjRYOVRSa2s1UFB0Ump1YUFEdDZWQzNCSXptbEpDbjVUbW05ZXRBQUNSM29vcEtBQ2puR2NVbFN4UW1RK2dIVTBBTlJDN1lBcVptV0FZWEJmK1ZOa2xXTWJJdnhhcStjOG1nQldZc2NzYzBsRkJQRklBcENjOUtUT2FVVURBQ2lpbVNNY2NVQU5jZ3ZVdzZDcXExYVg3b29BV2xYN3dwS0Ixb0FzOXFLTTBWSUFhYjM2VXVhUTBBT0I0K2xLT0FEZ0NtQTRwVkpQT09hQUpWSVljY0drSU9PR3BuMS9DbHptZ1kvcFNaQkdjZEthV3gxNUZHN25nOGU5QUR3YzlobWdkZVNLYU8vSW8vUDZHZ0IrTWpCb3o2WU5OT1BjVW9PT01jVUNGSFRta1lrRHBuNlVBL3JSam5wMDlhQUZCNDlLWGc4SHJUZS9OS2VPNXdmU2dDR1dieUg1TzRZelQ0cERJb2JZY0hwelVONkFjWTU5NkxVbjdPQm52eFFNbTh4TjJEODJPbkZNbUJrSENrWVBXa01kSUpIUTg4aWdCaXZLTTduNkh2VTBYbUUvTVZ3YVZKRWs0R00rOUNnRGNpamdjNUZBRHlNa1lPUU90Snk3QmUxSW8zQTRHM1BVMVpqaXl3eCtKcEFTd29PNDZWUDZlaG9BQUdBT2xBNjU3Q2dCcmxzRUFmblRZMk9DR0dNR25razVwQU1IR090QUNwVG1PYVJpQkdSeHowd2FqWmdxNVBBSFVVQU51TTRJVWtBZnJWT1NRRUhqa0RyVnlad0kreEpIQXpWTFlaWFZBZVc2L1NnQXRJUktvbGNaSFJhdENMYnluRlRMR0VRS293QU1DbDI4VXhFQUpCNS9PcWQxYkNYNWt3cmVucldpVnBqQWM4VUFZaks4UnljZysxQWxPUWM4anVPdGEzbEYxSUlCNjFXbDAvSXpHY04zSGFtQTZEVkRnTE9Od0g4UTYvalY2S1ZKam1JcXc5bXdhd25obGpPSFEvWEZOQjV5RHordFE2YWJ1TzUweVkzWUtrRWVvcVFwdVAxcm5ZN3FkZUZuY2V4TlRpZTRjZk5NNUhzY1ZXd2pSbWtqdHNoeU9laWprbXNvSVBOWmxYYUNlQjZVNEo4MmFTUnpIOHE4dWYwb0dFc3BDK1dvQlkvcFRiZGR6ZVd2SUp5elV4RUx0dFRKSis4MWFFTUN3cU1FSDM3MGJBU0hzQVFSM3pUOTZCZ2hPYVlaQVRrWXFRT0QyQUhlcEFkdVhISFdrQnFNcUZjbkdTZldoZys0L3d0NkVVQVRkK2FVZGVNMVc4MlZja3g1VWR4VW9sSG9md0dhQUpqNzBWR0pWUGVuN3FBRi9sVEhJd1NUZ2V0S1R4VWNwNCt0QURZMTJwZ2NqMTlhZUJTQTVGTzRvQVRBOUJTZ0RCSElQYm1paWdCR0c3MklvR1IyRk9GRkFEQzNzUlRTUm5HY1ZKa0VaSElwQ00wd0dqMEZQQTQ0TlJQSHUrNlNwOVJVVWZua2tiaGdIR2FMZ1d1cHdhS2pVVEFuTzF2cFJ2SU8wbzM1VUFQSnFPVEd4cytsTHVIcmc5Z2FaTWNJY2pQc2FBSFc2c2lBSHAyelV0TWlKMkRKR2NkcWZTQVdreDYwY250U21nQmpSUkgrQVUwUWhmdWtqMnFUQklwY2ZuUUJGc2NkR0Irb3ByU01uRFJ0OVY1cWZCb0lvQWdXUmVEeVBxTVU4TUQwTktRRHdSVlZZVkYwUnRJWHFCbW1CWkp5YVhxTzlNYUk4YkdLRWZpS2NBL2RobjZVQUtDY1VvcHVHQVBBUDBOSnZLOVZiSHFLQUFITXgrbFNqTlZ2TXhOa3NjRWQrMVRocys5SUIxR0tBYUtBTVRGSm4ycEtjUHJXcEl2SGVpak5GQUJTZldpaWdCT1Iwb3huZ2pKcFRpbEJIclFBelo2SEZBM2owTk9BR2FHYkI2VUFKdkg4UXBjZ2ppa3lPNG8ycWVuSDBvQU9lbEtNOTZiZ2pvMmZyUzdpUHZDZ0FKb3djWnh4NjBMdEo2MDdrNEg4SW9BYnlhZVFPcWpGQXp1d25XbHdRY0VqaWdCRG5IVE5BR2V0TG1na0FjaWdCTm85cUdPQnhpbEdHRk5LZWxBQ3EyZU1VOEx1K2xOV1BieXh3S2VUdUhvdnA2MEFNZUtNbkFIVHFhVUFJUDhhTWtIbmdlbFJzMmVCUUFyU0hvS2J5YUFLS0FDaWlrb0FNMFU1RUx0Z2RhbDh0WWh1a1BQWUNnQnNjWDhUL0FDcDc5NlNXZmNOcURhdE1sbGFSdWVucFRLQUNpaWtKeFNBVW5pbTlhS1VVRENscENjQ2pyUUFoT2FhMzNhZmltdDBOQUVDMWFRL0tLcWlyTWYzYUFIVWQ2S0tBTEdlS1NsSFFVVklDY0VjMGxMMnBweVY0TkFEZ00wNFV4R0hBcDR6UU1PdlNremoweUtEd0FhUW5qL0NnQmR3UDlhUWNjRmlhVE9NbkdNZWxDblBxTWV0QURzOGNBRUduQWtqSElQdFRNNHBRY2V0QUQrNXlNVW94NlV6cjE1ejYwYzQrYkorbEFFbjRDamcrdUtZTTlqeCtkTGtqbklvQWNBQjAvVTBuYjlhUWpqdCtOQjQ5eFFCQmRIT09ncExiT3pIdlNUTXJkT2NWTGJwaFJuclFCTmppbU1vSU9hbFBTb3lhQUlraUN5YmowOXUxWE1DT1ErV1JLQ051U0QxTlUxbUdlZXRUMjBvZHVPM05JQlZEaHNGZWUyZTlhQ2dxZ3dPZTlFY2JoOHlFRTlzMDV1RGc0QlBUM29BWWQ2Z0VOa0Q5YWVEOHZTbHhnWUlwTzVwQUlSNzgwdlhKOU81cER6eU9CL0tsTzBwakk5cVlFTWhac2dZQTlxcmdsbTcvQUY3MUpLNnJJVmpHQjZDb1g0SkhBSi9La0Fqc0RrOGV4cWV5UUJTNUhMZXZwVUVVWWxPMC9kN2tWYUVLcWdDTXk0R0J6bW1nWlBrZHFLclBIS0RsU0NNNXdLVVRGVDgyYysvRk1ST2FqUE5LR3lNMGkvTWV0QUNqanB4U2pyeGswQmZURkdTT2FBRVpWYXFrbGpFMmNMaHUyRFZ4Zm02MHBYUE5BR0xKYVN4YzQzQ21LK3pnN2wrbGJvanBHZ2pjY3FwL0NpNEdOOW94M1kwSUhuYmFpNEhjaXRZV01BNThzWnAzMmFNSEtnb2Y5azBYQWdoZ1dKUUIxNzB5ZGRweXY2VllsRFJwdXh1QTVQMHFOWFdWUnRCNTlxUXludlBRbkE2MUlrekFlMU5ZYzBoQXh4UUJNSitmYXBETUFnNS9ESElxcDJ4VGpqMXlLQUxrZTdsV0JHNDdnZlVWSUVIV29iZHdrZWNacXdzcXQwNHBBQndCbnBUQkdPdTQvblVod1Iyb3g2VXdHbEd4dzFSYkpCOTVRM1BVSGtWWW81b0FpM0JlcWtmaFRnMGJEZ2cxSmcrbE5aQTNVQ2tBQUROTGdWQzBMWnlrakExWGFhZUpzRmcxQUY4Z1VtQjZWRWtzcklDMFIvT2w4NEQ3eXN2MUZBRW1BT2dveDdVd1NvZWpDbjVvQVJ1QWFodDBBVW51VG5pbnpNVmpKb2hBQ0RGTUNVQ205NlVnbnZTaFFPYVFDRlFlb0JwcGhSdjRjSDFGU1VoN2NrVXdJbGcyZmRjL2p6VHVSNlU4ODk2WVNPbVJtZ0F5ZTRvM0FlMzFwZUIxcGVNZXRBQmtlMUxWUzRoMnNHVTdja0RpckNSWUhMdWZ4b0FmU1lwQ0NNNFBUMXB1NlRBUGw1K2hvQVZsNzFBelluR0NTQ0ttTXFnNGZLbjBJcXFad0xrSXVOdlhOSUN6Z0hCcFFLT295T2FVVXdHMHBGQm9QSW9BUXFDT2dwaGlVOXNlNDRxVEZIYWdDTXh1TVlrUDRqTkdaQWY0U1B5cVFuTkpRQmhoaG5tbmRlOUJ3ZTFOMmVoeFdoSStqRk15dzkvcFNoeDM0b0FlZmFrNG80UGVsQXg5ZldnQnBHZTlKdHB4R0tRRTBBSmpIclJUeHlPYUNCUUF6TkdhZGdVdU0wQU1weWpJeWFOdE9CMmlnQnV3TWVsR3dqN3JmblR3U2VjY2V0QXptZ0JtNTE2alAwcFJJcDY4VklhallEdU0wQU80UGVrSzVwb2pCNlpGR0pGOUdGQUQwSFlVL0lYcHlhYWpOczRYYjZrMG04S2NEbjFvQWRqdTFOWndLR2NZOVRVZlhyUUFFbGpSMG9velFBVVpvMmtqT09LZXFkeitWQUNLbVJrbkZPV0lzMkJ6VWlJWDlnTzlObG5DRFpGK0pvQWM3cEFNTGd2L0FDcXF6RnpsamswaE9UelNVZ0ZwS0tRblBTZ0JTZlRyU0FVQVV0QXdwZWxKMG82MEFSeloyL2pVaWZkRk1tSHlVNlA3b29BZFRHNlUrbU5RQkIzcXhIOTJxL2MxWWkrN1FBK2lpaWdDZGVncGFSZnVpbHFRR3RUTTRxUSs5TU5BQU9HeUtjSExFNUhTbzhnQ2tETm5JR0tBSmdPYzVwMlBwaW9GbFpSeU1pbnJLaDR6dEo3VURITU05OGZqUUFCemprOTZYNWVTT2FPZW94aWdBNzV6UVJtamcwb3gwUDYwQUhTaWpqdVRRZXRBQUFQVEdhT281NXBhYVdHY2REUUF1YVRjQURqbjJGTjVZL053RDZkYUZSVSs2S0FJblhMZ2M4OG1yVVk0QnFBcm1UTldsNFVDZ0FZOFUxUnRCSjdVSEJKenlCNlVJMk1idWM4aWt3SlVRTjBBT09lbFN3eDVmNVZBOWNDb2xjam5BNTdBVmN0MVlMbHZ2SG5wUUJZNjhrRW4xb2tLbjY5cWJ1UFNrTFpHUWFBQW41Zm1QSUhGUmx6bmtFRHBUaTJQL3dCV2FoZjVpVG5xT0JRQTR5cUZLNUdjNDU3MHhIK1RBQXlPYWltUlh3N0FranY2VkI1YlJuZEZLY2djcWU5SUN3ekJzNUp5dFF5TmhjN3ZtOTZjSkJJb2NBcVNPZmFvMFZwM09BTUxUQWRieUNJbko2OWF1cVF3eURWQXhNcDZWYXRnUXB5TVV3TElUZDkwSGdjODAwakl3UmtlOU9ERlNDS2NaRllqS2djYzRvRVJiUXliUVNvOXFZcU5IeDk0VllJQTl4VFh4aklvQWozcUI4M0gxNHBRZDNPY2ltZVlwNE5NSWo2b3hVLzdKb0FtQTlxa1VWUmE0a0RaemtEdGpGV1k3cUpnTXRTR1RETkxTcVF3NElwZHRJQk1jVWh6MnAyS1JxQUlMbVh5MDdaUEE0cGtRUGxxTzQ3K3ROZGhMY0JTcHd2UFdyQUZNQmhRTjFBUDFwajJzYkVIRzM2VlAzOXFNWm9BcS9ZMXdRR09lMmUxTWt0bjI4Smwvd0M4Q01WY3hTNDRvQXlodlFZWldHT3VSU2gyRmFtS1kwYVB3d0IrdEFGVkhjQUU5K2xXby9tQU5NK3pJY1lMQUR0bW43Tm1OcEo0NXpTQWVhTzJLak1pcWNOa1pwNEk5YVlEc1VuSXBjK2xKbmptZ0F4bXF6d2t6alBJOXF0QTB3ajk1a1VnRkZMaWo2MHRNQmpLQ1B1Zy9XazJmTHdTdjBxVEZGQUVMd3N3d0pEajNwRkVnNnF1UFkxUFJpZ0JtNGpxamZoVTZSN2h4K3RSMHVTTzlBQVNBZHZBSU5JM0I2NXBqeHEzSkdENmlvQUpSSVZSK0IvZW9Bc0hweDFxczh4enltQ0tsL2VBY2xUU25CSHpMbWdDQkoyTFlQSXEwT0JVUVNQT1FNR3BPTVlHS0FJTGh2bVFkUG1IV3JnOTZveWpNeUE1eG1ydys2S0FGd0thVkhhbkNsb0FqMjhldE1lSldHR1VINmlwOENqYlRBcG1IYVBseXYwTkh6Z2ZmeWZjVlpjQUtjOUtnNHdlYzRwQU4zT09xajhEUUpjZmVVajlhY0FDTTVwQ3VRY0hGQUFzcU1mbEl6NlU3TlVKb21WdHhISHRWdU9KR2pIM3grTkFFbkZGTmFOaGtoemdEdlVSbVlEbFNmb0tBTXMvUTBESk5PTGM0eFFDSzBKQURIVS9sVFRnOXFmU1lCb0FadDlDUlJseDcwN2I2R2dBZnhIOHFBR2h3VDgxTzRQSXBTb0lwbTBaNHlLQUpNY1VZcG56RDBOS0hBNjhmV2dCUW83ODBuSTlxY0NPb3BlVDJvQUU3bk5CYm5wVFcrdE55YUFIRnM4ZEtUbjFvYko3VW5hZ0JkeHBkeEpwRlV1Y0Nwd0ZqNFVaZjFQYWdCcXJ0R1gvQUFGS1NXeDJBN1Vqa0syU2R4cG9ZdDdDZ0J4NTZVdzdSVFdZbnBTVUFGTFJTRGtnVUFHYVZSM1BUK2RLRTU1cHhUY2NETkFDYi9RVk1xL0x2aytVZWxLSTB0MTN5SExkaFZhV1pwVzU2ZWxBRHByZ3Q4cThLS2d6UlJTQUtPbEhRVW5YclFBSG1pbG9vR0ZCTkJOUlJrbVE1b0FseFMwbExRQXlVZnV6UkY5d1VyOG8zMHBzUDNhQUpLWTFPcERRQlhQM2pVOFhTb1crOGFtaDZVQ0pLS0tPOUF5WlB1aW5VMVB1aWx6U0FHNlZHVFQyTlJuclNBUVlweWpJSnBsT0JJejB4UUE3blBBSTlhYXlxUjh5cWFjVHhqMTlLWVNNOGRSUU1UeXdPVVlxZnJtbkJwVTdCeDdVS2VlMktkMXdRRFFBQ2NjQXFRVFQxY01ldlBwVEJrakdCOVRUU200OGs1b0FuM0Qxb0ZWZ3JoOEkzYnZUdDBnNDJqUHFhQkV4NUo3VURqcUIrZFJlZVA0c0NuQ1FIdUNQWE5BeFQ5UVI3VVpCNW9KUFBJK2xJemNVQUxHY3ZVMjdKQ2pyN1ZERU54d09wcVlMdFluSXlmUTlhQUhJQWUvSVBOT1JHendPQ2NuNlVnWERaSzhlb3EwaTRBR004ODRwQUVFZURrZ1lxd0RqOEthUGJnZEI5S1VZSy8xb0FkMUpwaHgwNXAyY0RGTWtiQXhrZm5RQTJWd28zQVlxczB1NEFFRlc5UWFKSDNncmo2VkVCemtqcHh6UUE4RWtZT1NBRGozcHBJWnR4T09hVmhnWVU4am5GSHpjWi9Ha0JHVzJiOGM1NUFxMUJsWXgrNVlLUmtzUFdxNlJHZTlDOEdOUUNlT2xhK0RqakZNQ3NraU1kb1laOU85S2M1NjhlbFR0RWovZlJTZnBVTFcyTTdIWWVnUElvQVF0VFBtSS91KzlReVRHSnpITXVEMlByVWlUSTR4dXpRQWhsMmNIMTYxSXJDUlJ0UE5JWXM4OWFJb3RqR2dDS1dGdXRRRUVWbzhIdlRER3ZPUUtBS0xIQzg5YWxnMm92ekFIOEtWSWhKS2VPQlN6UmxSa2RLQUhoNEc3YlQ3Y1U1aktxYmtsSkE3SG1xV1BmOEtlR1lER1RRQllXOWJPSFVaOXFjOTU4bkNObXFxZmU3VmF5dXpHTTBBTnRnTmhJT1dKNUI3VlpCRlFJc0k2am1rZmFNRkhQMEp5S1FGaWw2VlVOdzZrOEEwNUxvSEFjYlQ2MHdMRkFQTk5XUkQvQUJyOUtkNzBBTGpuTklhRGcvV2s3MEFPcE85RFp4OHVNKzlKbWdBeGx1bWNVSEdjWW9YcFMwQU5LajBvQUk3bkZPRkZBREdMcVBsVU4rTklybmNkeUVWSmpGSU1rMEFMdUI0cGZwVFNLRHh6UUE2aW1LeFlaSDYwcFlnZE0wQU9wZS9OUXJPakhBeitWUERxZjRoOUtBSGRhS0tCelFBWjRxSUFNNVBjVStUbERqZzFYdDhuTEhwbWdDeHpTNG9vRkFEY1lwcFVOOTRDcEtTZ0NGcmREemx2enFVTXlqZ2pGR0tDS0FGRWpkMS9JMDd6bDc1WDZpbVlvNG9BbFNSRzREQTA3TlZSR2hiSlVmVVZESVowdUZSSlBsYnBtZ0MrY0dtRmVjMGdFdTBmTU05K0tRdElEZ3hrKzZtZ0JTUHBTRWNkS2krMEpubklJOVJUMWNOMFlHZ0NLNkc2RTRIU3BZY0ZWOUNLYk5ueTJ4NlZIYVNmdWxIUWlnQ3lVR2VLUXFLVldYOGFUZG1nREM1WTRGTngyTlAyajFwZHVSeldoSXo4YU9hZVZHYVhHRHdLQUc5UlNnQUE1R1RUdXRGQURUakdNVVp3T2VLWHZUV0ZBRHFRZ0VjaW1aeFM3cUFBeGp0eDlLVERqcHpUeHpRV3gwb0FqM2pQekFpbkRCNzBwYjFBcHV3TnlBUjdpZ0J4cHlSYmh1WTRGTTJTS2ZYNjFLU1crOTA5QlFBcGZJd255cjYwd3NGNEZLU1BXa3dCelFBM2FTTWswM1BZVXBKSnBLQUFDZzBHbEM1R2MwQU9SVks1Si9DbXNNR25jSlVpSnY1eGdEdWFBR3hBdU1EazFLOGlXNHdQbWsvbFVjazRRYkl2eE5WaWM5YVFDdTdPMldPVFRhS0tBQ2c4Zlgwb0p4MDYwZ0ZBQjFQTkxSUlFNS0NhVE5MUUFDb2w0bU5TMUVlSjZBSmFLTzFIZWdBYmtINlZIQjkwMUpVVVBCSW9FUzBocGFRMERJSCs5VXNWUnY4QWVwOE5BaWFrcGFRMERKby91aW5HbVIvZHA5SUJwcGpVOXFZM1drQWdwVkdUNzAwVTVEZzlhQUhkQU9PbnZUU2UrZmFuSDBBb0hmaWdZbkpIWEZPVVlCNzAwazR6UUFjNXlhQUhFNCs5MDlxUTljNXg3MHZPN0dhQ2NjRWRmU2dCb09aT1JUOGNjR28vNC93cCtUbjBIclFBRlFlQ29OUkdOTnd3Y0dweU9NWkg0MHhnRGpJR1I3VUFSRlZPT01uMXpUbEJrTzNqL0NuSDd0UGdVY3R3ZTJNNG9BbEFFYTdlR3h6VGtJais2Q0NQYk5KZ0V0d091YVZWeU94eVJVakpVQVk3UjFiOUt2Um9FUUt0UlFSYkFXSStZOC9TckErNkNhWWhwR0J4ajhhUG9LY0Qyb3p6ajFwQU5ZNEh5OUJWU1ZodXllUFFkNm1tWUJjREc2cTB1R1FLY0UveXBnUnFRU1JrWTc4MGdPMGdFL0wwejYwaFVKMTZlMUJaZG94a0RwN2lrTWZuakhPT3hwcm5qSEpQdlRYY3J4a2M5eDJxYXlSWkpDWDVJcGlMVnBDSW8vOEFhUEpxeURUUmdVN0ZBQzBoNjV6K0ZPQUZNWWdjazhVQVY3aEJQSkhFVkI1eWMrbFMvWXJjakFpVWZTbndodVpHQUc3cDY0cC9TZ0NGYlJFNER2OEE5OVVQYlNLTXBJRDdNS25CNHBjODBBVWo1eXVBOGVSL3M4MURjdG5qNWdmUWl0TEZCQVBKR1RRQlNoRzJNYzV6VHo4eTRxVTI4Wk9SbFQvc21tRzNjSEt2bjZpZ0NIeVZQVWRhZ2xpS0hweFZ6WTRQekwrSXBUdFBIWDJOQUZTM0NzMkdYbXJVa1kyOFU5RVZSd0JUNkFLRHd5ZGhUUkZKM3JRd085SmpuaWtCbk1qTDFwdXh1b0hTdE1xTytEVmFaZ29JVVlOTUNLM2k4NlJua3lUOWV0V1JicjJMRDZHaUNJUnI3bmttcHFBSW1qa1VmSXdQc3dwdTZRZmVpUDRHckZKam1nQ0lPUDRnVitvcUNhUU02cWpEazhtcnVLYTBVYmZlUUg4S0FHakdLVHZRYmZCK1YyQTlLUEtrSFJ3ZnFLQURtbEJwdnpqcXVmcFRSSXVjRTRQb2VLQUpEelNBVUEwdEFCM294Um1selFBaEdLUmpnVWRlOVJUdHRqYm5HYUFFaEdRV3h5M05TK1dHNmdHbVFnaUpRUmc0cVlVQU1NS0hJd1FQWW1tL1pncHlramcvV3BxS0FLczBNemNCOTN0MHBJZk1qR3hvemoxRlcrOUdLQUloSXZRbkgxNHAyYzA0cm5yMHB2bHIyR1BweFFBdWFLVHkvYzB3aVZSeHRmOEFRMEFQelJubk5WL3RLWnc2c3BxUlpZMkhEZm54UUJJZWFiU2hnUjFvb0FRVXlVaFpJaWVnYXBCVU53Y05HMk9BM0lvQXVEcDFwQUNPNU5LQ01jZDZUSm9FTU52R1NlS2plSk1Eakh2VS9KOXFSd0R4aWdaVk1LRmNFdGoyTkNXNVQvVnVQb1JVNVFBY0NtcURrN2g5RFFCRXp0R2NNdWZjVkd0ME1IZXBHS3Q3UWVDS3J5V29IS0VnVUFaSWt4OTRZcVFPRFNGZlNtZVdCeU9QcFdoSko5S1dvdm1IdlNpUWREd2ZlZ0NTaWszQTBoeWVob0FVMDBnam5OT0hwU09EeFFBeitkS09sRzJrNlVBT1U0eUtROWFRQXNjQ3JDcDhvTFlWUit0QURJNHQzdlQ4cW55cHlmWDBvWjl3d3Z5citwcGhJWGo5S1FDNXhrazU5Nll6RWpweFFYQjZqaWtMREhGTUJ0SDFvb05BQjBwUmtuaWtBeWFrTEFIZ1krbEFEQ2hIV2daSFNwRitib0trT3lFWmZsdXdvQVJVRzNmSndLaW1uTG5BNFdvNVpXa2JKUDRVeWtBVVVVZHNucFFBVWhPZUIrZEJPZnBSUU1BTVV0SlMwQUZSbC9uMmluOWFoZmlZVUFUMFVDaWdBcUtUaVZUVXZhb3B1cW1nQ1dnMERwUWFCQlVTY1NNS2xxSWNUR2daTFNIcFMwaG9BaGsrOEtkRDFwc25VVXNYV2dSUFJSUlFNbGorNVQ2Wkg5MDB1YVFBM1NveWFjeDRwaE5JQk04MDlSazhqUDRWSFVpZmo5S0FIQlFPaHBNRURyVGp5QjZlOUllT09sQXhPM05LRDh2SE5JRGpxT2FYMXdLQUE4Z2NqTkhPT2xHS01uT0RtZ0J2UG1kdWxQems4OWFqeis4R1BTcE00SHI2MENEUE9EU2ZTamlqQU5BeE1ucmpOV0F1UUFjRSsxTjJoUmozOU9La3dSenhuSFNrQUk2OWdjajFxMWJMdU84cjM3OXFySXVaUUNlcDROYUtLb0dGR0I3MEFQeHhTYmhqQTZlOUtBU0NBYVlNSDd3d2ZyU0FlQU1kUDFwdTRnbmN1TWQ2VS9JUGxIYXFsMUx5RUQ0UGMwQU5sZFMveXNQYW84bHR2UTU2NHBpbkI1eVFEeVJUMCtVaFI2ZHFBQWdNb0o1SHBpb2p5K1RuSGYwRlNNM3pFRGdqclVZQWtkVjkrYVl5ZTJnOHhpenA4djhBRDZWY0VTakJDZ0hwa1VKd29BNkNuTTJCMy9DZ2tOeDlPbE9WeU91YWpWZy9LbmltN1dHY3Z4MXBnV2M1cUZqNWtvUUhJQnkxUitjcE9DRGoxcG9jUXVTdVdKNmpOQUZzWUJ4VHhWTkwxV2JEcnQ5RFVvdW90NFVOMTcwaGtyWkhRMEtXNS9Tak9jNFBTZ1VBT0lKK3RCWGpCcHluRk8zTDZjMEFSRkRrY2tlMUtvd0tjZWFiejNvRUxta1pGZnFQeG9wSGNJbWFBSVF6bVpodUdCN1U3Sjc0TklxWUdmNGp5YVg2MEFMdkhmSS9DZ012cU9hS1RhR0dDQWFMQU9iRlZaZ1hrUlZHZTUrbFROQ0NPR1pjK2xSaUY0OGxIRFovdlVBVEFCUnhTMHpjM2RTUHB6U2h3VGdtZ1kvUEdEUmpQV2dVdUtBRUJwUjlLTVV1S0FBYzBHa0xZb3ljVUFCNmRhWTZodUdBSTk2Zm1tc1FBU2VhQUthb3BtY0RJVWYzVHhVb2pJT1ZkaCtPYWJBRHRMZG1PYWxGQURNU3IvZGI5S1F6N0Roa2FwZWFOcHptZ0JpelJ1TWhoVUYyd0lDZ2pyelZneHEzVlFmd3BqUVJIcW96N1VBUFFZUWZTbmcxQ0ltWDdybkE3SG1sRE9QNFFmb2FBSmdSUzU0cUR6Y1p5ckRIcUtja3FQd0c1b0Fsb0p4VGM0cDNKRkFDam1rK3RKbWpOQUM5cVRIRkdlS0tBS2t3QzNNZU9jMVpDZzhFQS9VVld1Q3YycVBQUVZhVTU2YzBBSVkwUEpVZlhGTjhzajdybjhlYWYwTkxRQkdSSjIya2ZsVUZ3c3I3Y3gvZE9lRG1yZExpa0JESE9wQURmSjdHcGNkNkNBZUNNMDB4cjJ5UG9hWUVnT2U5TDFxdXNjaUU0a3lEL2VGRzZWUHZMdS8zYUFKd0tRL0thakZ3b09IQlEvN1F4U2lTTWt0dUg1ME1CNHp6U1lBNHhRSFZ1aHorTktmYWtCLy8yUT09",
          "Timestamp last change": "20151002060414",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060414",
          "Display rule": "0",
          "Sequence#": 960,
          "Text ID": [
            {
              "ID": 66,
              "ENG": "Picture of outdoor unit after installation",
              "NOR": "Bilde av utedel ferdig montert",
              "POL": "Zdięcie na zewnątrz po montażu"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:960:SVAR<>¤¤ and besvart=1",
          "Sequence#": 961,
          "Text ID": [
            {
              "ID": 66,
              "ENG": "Picture of outdoor unit after installation",
              "NOR": "Bilde av utedel ferdig montert",
              "POL": "Zdięcie na zewnątrz po montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:961:SVAR<>¤¤ and besvart=1",
          "Sequence#": 962,
          "Text ID": [
            {
              "ID": 66,
              "ENG": "Picture of outdoor unit after installation",
              "NOR": "Bilde av utedel ferdig montert",
              "POL": "Zdięcie na zewnątrz po montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:962:SVAR<>¤¤ and besvart=1",
          "Sequence#": 963,
          "Text ID": [
            {
              "ID": 66,
              "ENG": "Picture of outdoor unit after installation",
              "NOR": "Bilde av utedel ferdig montert",
              "POL": "Zdięcie na zewnątrz po montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:963:SVAR<>¤¤ and besvart=1",
          "Sequence#": 964,
          "Text ID": [
            {
              "ID": 66,
              "ENG": "Picture of outdoor unit after installation",
              "NOR": "Bilde av utedel ferdig montert",
              "POL": "Zdięcie na zewnątrz po montażu"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "LzlqLzRBQVFTa1pKUmdBQkFRQUFBUUFCQUFELzRRQllSWGhwWmdBQVRVMEFLZ0FBQUFnQUFnRVNBQU1BQUFBQkFBRUFBSWRwQUFRQUFBQUJBQUFBSmdBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBRVFLQURBQVFBQUFBQkFBQURNQUFBQUFELzJ3QkRBQ0FXR0J3WUZDQWNHaHdrSWlBbU1GQTBNQ3dzTUdKR1NqcFFkR1o2ZUhKbWNHNS9qN2ViZjRldGlXNXduOW1ocmIzRHpjL05mSm5oOGQvSDc3Zkp6Y1gvMndCREFTSWtKREFxTUY0ME5GN0ZnM0NEeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWEZ4Y1hGeGNYRnhjWC93QUFSQ0FNd0JFQURBU0lBQWhFQkF4RUIvOFFBSHdBQUFRVUJBUUVCQVFFQUFBQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkFBQWdFREF3SUVBd1VGQkFRQUFBRjlBUUlEQUFRUkJSSWhNVUVHRTFGaEJ5SnhGREtCa2FFSUkwS3h3UlZTMGZBa00ySnlnZ2tLRmhjWUdSb2xKaWNvS1NvME5UWTNPRGs2UTBSRlJrZElTVXBUVkZWV1YxaFpXbU5rWldabmFHbHFjM1IxZG5kNGVYcURoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1SGk0K1RsNXVmbzZlcng4dlAwOWZiMytQbjYvOFFBSHdFQUF3RUJBUUVCQVFFQkFRQUFBQUFBQUFFQ0F3UUZCZ2NJQ1FvTC84UUF0UkVBQWdFQ0JBUURCQWNGQkFRQUFRSjNBQUVDQXhFRUJTRXhCaEpCVVFkaGNSTWlNb0VJRkVLUm9iSEJDU016VXZBVlluTFJDaFlrTk9FbDhSY1lHUm9tSnlncEtqVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnb09FaFlhSGlJbUtrcE9VbFphWG1KbWFvcU9rcGFhbnFLbXFzck8wdGJhM3VMbTZ3c1BFeGNiSHlNbkswdFBVMWRiWDJObmE0dVBrNWVibjZPbnE4dlAwOWZiMytQbjYvOW9BREFNQkFBSVJBeEVBUHdESmI3eHEzcGhBdlk4OUR4VldRWWVwYk5ndDFFVDBEaXBLUjB3WElHQm1udUdDZ0RBb1E0WWpwZzBqbk9SK3RCUURJNFBOVTcrVThSNDQ5YXZJbTVRU2Z5cUc2dFZaQzJUdUE0elFKc3dybEFwWEhURlJMVnE4UWhWSklQUGFxcTAwU3lSYWV2U21MVHgwcGlGb3BLV2dCZTlRWEhVR3A2aHVPbElDQnFoYnJVemRLaGZyU1JURldwNHFnV3BvelF3Uk90U0xVU1ZLdFF5a1NyVHhVYTA4VWlpUTB4YWVLWU90U0FHbW1uR21rY1V3SExVR29EOTBQclZoUlVPb0Q5eFRXNG5zWko2MGxLM1drclV6Q2lpaWdBbzdVVXZhZ0JLS0tLQUNpaWlnQUZhZHpqK3hyVDZtc3dWb3prLzJSYmY3eHBNRFBvb05GTUFvb29wQUxTMGxMUUFWY3ZCaTJ0UCt1ZjhBV3FkVzd3NWd0UjZSL3dCYVRBcVVVVXRNWVVVVVVBRkFvcFJRQTVCbHdQZXBic2Y2UkovdkdtUkRNcUQvQUdoL09uM1hOeEovdkdrQkF2VTA4OUtZdlUwODBEQVV0RkZJQUpvV21uT2VLZW93S0FDazcwdEozb0dWNVA4QVdHbFdrZjc1cFZxaVNRVktPbFJpcEIwcVdOQjNwYVR2U2pyU0dJT3ArdExTTDBQMXBhWWdwS1dpZ0JLS0tLUUNpcEY0dHBUNmxSK3VmNlZHS2V4eGFnZjNwUDVEL3dDdlRRTWlOQTZVcG9vQVEwbEtldEZBQ1Vvb3BSUUFkNmF2M2MrcHB4NkdveSt4UU81b0FlYVFkYU01R2FVVUFBNlVkcURSUUFVVVV0QUVmVnorVkxpZ2R6Nm1seFFBemJrMHJENWNVNFVqVUFNMjRYRkpUalNVQUpSMm9vUFNtQURwVHFRVXRBQ0drcHg2VW1PYUJEeDBvN1VkQlMwQUFwazMzTWV0U0NvM0c2UlY5NkVCTkNtMUJVbEtCZ1V1S29rYmdVWXAyS01VQU5wTVUrakZBeU1qSFNrSzVxWEZKaWdDTEhIV2tLWk5Ta1VZb0FoYU1kcWJzOXFud0QycEN1ZmFnQ0ljQ2tKNStsU2tZNjFHNjQ1RklCQzJhYlNacHdHUlRBS085R0tWUlNBY1JoZmVrUVphbkhwU291T2xBQnR3TVVnWHJrQ240elJRQkRzQmJBTkw1VlBJQ2duMXB3RkFFUGxINlVGR3FjVVVBVitSd1JTZ1k3MDl6Z2dDazVvQVpNTVBUVU9DQ08xUzNJdzFRaWhET3NqK2VJT3hQekFIaWtPUWNaSnBsaklHMDZGaWY0UUtWMytjQVVGSW5oYkNuSjZValNLNFlBNUhTbzFUNUczbnJTd3B3UUIwb0YxTTNVWXdzV1B4ck5GYTJvdUhWazJrTXZYTlpJcG9sa2kwOFZHcHFRVXhDMFVsTFNBV29yZ2ZKVXRNbUh5VUFWVDkyb25xWWZkcUY2U0tFV3BZemhxaVdwRm9ZSXNxZWFsWHJVQ0htcGxQTlF5a1NpbmltQ24xSlE4VTMrS25BMDNPV3BBQm9IU2xOQzB3SElPQlVXb0Q5d2FzSU1Db0w3bTNhaGJpZXhqTjFwdE9hbTFzWmhSUlJRQVVkcUtLQUNpaWlnQW9vb29BQldqTXAvc2VBNDQzbXM2cjBrNWJTb29qakN1Y1VBVWpSUWFPMUFCUlJTMGdDbG9vb0dGWEw1Q3NWcm5vWWdhcDFjdkp2TWh0bHhqWkhpZ1JVb29vb0dGRkFvcEFBcFJSU2lnQjhQOEFyay8zaFN6Tis4WSs1cGJVaGJtSW5vR0JOTmxJTWpmVTBBUnIxTk9MWTRwcTBwRkF4MmNpbHBvNlU0VWdBQ2xvRkJvR0pTMGdwM2FnQ28zM3o5YWN0TlAzalQxcWlTUmFrcGkxSlVzWWc2MDRVMFUvc2FReGkvZEZPeFNEb0tkaWdRbEpTbWp0UUEybG9ORkFDMDZYaUtFZXVXL1gvd0N0VGUxU1hBdzBLK2tZL1htbWdJVDFwYUQxb29BUTBtT2FkU1VBRktPbEpTOXFRRFcrNmFSa0RBWjdVNStnK3RGTUJnRk9GR0tVVUFHS0RSM29wQUZCNDVwUlRYKzRmeXBnSXYzUlNtakZCb0dBcHA2MDhkS1ozb0FRMDJuR20wQUlLVTlhQjFvcGlGcGFRVXRBQ0dsWDd3cERUb3h6U0FjUlJTOTZTZ1F0SkVNekUrZ3BlMVFSa21VNEpITk5BeTlTMGdWZ091YU0rdkZVU0xSUzBVQUppakZMUzBBTndhUHdwMUZBRGNDa3hUc1VoQm9HTXhSakhlbi9BRm93RFFJWno2WnBycUdHT2hOU0VZcENLQmtTUkZlVzVwZG1PM0ZQd2FPYzlLQUl6R09hQkdQVWlwUHJSZ0NnQ1BhZlVVY2pzZndxVEZKelFBd01hY0Q3VUVaNmlrSytsSUJlRDFwYWpHOGU5THUvdkNnQjlOYmhTUjFvem5vYURrOFVBTUE2ZnJUd3VLVGIzNlVwSkhhZ0F1eFZZVmN1aGxjMVNGSkRaMEdqbmZZN1QvQ3hGWDJqTEVGUU9sWm5oOGdyTW5vUWNWdGRLb0d4aUlDQnVISXAvQXF0Y1hpUURwdUo2VkNTN3FHWWtnODBDM0M5VldkaGdFbGF3ZTlkQTBRTVFjY0gzckJsRzJWaDZFMElHS3RTQ28xcDYweERxS1NsRklCYWJKOXcwNmtiN3BvQXBqcFVjbmVwZTUrdFJ2UzZsZEJncVZCa1ZDS21TaGlKVTQ2MU1ocUVEZDBxUmNqcUtsbElzS2FlS2hVODFNdklxQzBQV21INzFQV210OTZrQUdub0tRRE5TRGpBb0FEeHhWZTdPWVdxWnp4VU0vTUxVMEptTzFOcDcweXRqTUtLS0tBQ2lpbG9BU2lpaWdBb29vb0FLblpmOUZSdmMxQUswSGhiK3hvNWVNZVlmclFCUW9GRkFvQVdpa3BhUUMwVVVsQXc3MUxLVHRqei9kcU1kYW11STJqOHNNQ01vQ1BwUUJGUlJSUUF0RkZGSUFGTFNDbG9Ba2h3WlZ6eHpVYjlUVDR2OVlLWTFBQW5TbjB4T2xQb0dHS1VVbExTR0xSaWlqTkFDVXArN1NVTjl3L1NnQ3FPdFNMVVlxUmFva2xVVTg5S1lsUFljVkxHQXB4KzZhalFIdlVoKzZhUXhLZFNVdEFoRFNVNDBsQUNVVVV0QUNkcWt1eC9wakwvQUhWQy9wU1JydWxSZlZnS0oyMzNjemY3UnA5QmRTUHZSUzBVaGlHaWc5S0Iwb0FLV2twZTlBRFcrOEtXZy9lL0NpbUEybEhhanRTaWtNTythS0tLQkFLYS9ZZXBwK0tZMzN3UFFVd0NqdlMwRHBRTVE5S2FLYzFJT2xBRFc2VTJuTlRhQUZGSUtYdFF2U2dRb3BUMG9GRk1CblNwRSs3VE8vSXA2L2RvRU9IU2dVZHFVQ2tBam5DRTFIYUxsODA2NE9JOGV0U1dpNFhQZXFRbVdSUzRCNjBVdE1Rd3graHhTSGNPb3o3aXBLS0JrWUlOTGluRlFlb3BwVXJ5RCtkQUJSUUd6MUdLWDZVQ0VvcGFLQUV4UmlscGFBR1lOQkZPeFJRQXpGSUJUOFVtQ0tCalNLVEZQK3RHQWFBR1VVN0ZKaWdCTVVsT3BvenU2Y1VBR1BXakFwMUZBRVpRSHZ6U2JXVVpPRFVtUU9POUI1d01VZ0dIb0FhTVU3R1RtZ2lnQjg0eWxVTzlhRDhvYW9NTU1hbUkyYVdoeStYZHVwL2lTdHFVczNmQXJuZE5iYmZ4ZTV4WFRiQWZ2RHAycXdLc2xyNXlCUnhnNXpWbElBc1FYT2NVQnYzZ0E2VXNyN0I2azBBSXlLMFJ3TzFjNWMvOGZEY1k1cmVqbmJidEtZUHJXTHFDN2JrMENaQXRTQ294VWdwaUZwYVNpa0E2ZzlEU1V0QXltZnZ0VEhxUitKRFRIcGRSOUNFVktsUlZJaG9ZRmhPYW5UME5WMFBOV0VOU01lRnBReFU4OUtVQWRxY0JuaGhVc2FISWNpaC92VXphWXpsY2tVdTdKcEZFcUVEclNnMHhSdVBQU25PZG9OSUNOMjVwc25NUitsSjFwNUg3c2oycGlaanlWSFVzdmY2MUZXcU13b29vcGdGQW9vRkFDVXRGRkFCUlJSUUFWZTh5VCt5VlRIeWVaMTk2cEN0VUpudzluMGxvQXlxQlNta0ZBQzBVbExTR0dhVE5JYVNtSWVEVnU4bTg1WU0vd3hnVlJGYU9vUjdHZ3gzaVUvcFFCVEZGRkZJWXRGRkZJQUZMU1Vvb0FzMkJVWElMTHVHMXVQd05WM0ZXYkJBOHpCdU1Sc2YwcXU5QURVNlUrbXIwcDFBd3BhQlM5cVF3b29vb0FTaCtJejlLV215LzZvMENaV0ZTTFVZb0JKSXhWQ0xTVklSVWNkU21vWlFncFQ5MGZXa1duSHQ5YUJEZTlPcEIxcGFBRU5GTFNVQUlldEZMM29vQWt0ditQbU1qc2MvbFVLbkpZK3BxeGJEOTQ3ZjNZMlA2VlhRZko5YWZRWFVLS1drcERBMGRxS0tBQVV0QW9vQWIzb05LTzlGQURhS0tWZnZVREZvb3BlOUFncGg1YyszRlA3MUdPNTk2WUMwQVVVb3BER01PYVh0U25yU0dnQmg2MGxIYzBHbUFkaFRxU2xvRUpubWw3VVlvb0FPMU9IQXBvNmluZ1VBTFRoVFIxcDFBaUM0NVpWcTdDdTFCVlBHKzVBOUswRkdCVm9UQ2lsb29FSlMwWW94UUFVaDVvUEZJS0FGQXBDbmNjVTRVdEF5UDVoMUdmcFNnZzAra0txZW9vQVRGSmlqYXkvZE9SNzBidjd3eFFJS0tYZzlLS0FFeFNVdExRQTJrSXAyS01VQU53YVRQcUtkUmlnQnVBYVRiVGlLTVlvQWJnMGxPcENBUlFNYjVZTGh2VHBTazg0OUtVQmw5eFFCOUtBQ2tBd2NtbllvYWdCeEdWSXFoS01PYTBCVkdjWWFvaVV4SUgyWEVURHN3UDYxMStma3pYR2RPYTIzbW1ualVLVGdnSEFxeEYvSmJESWUvV2xrY0tGejFKeFRZRlpZRkRjY2Q2Y3BHQ0IxRklyY2ptbThxTXVWSkE5S3g3eVlUT0hBeFcwWS9QVXAxejFxcHFka2tWc3NpajVnY0VnVUlVaktGU0xVWXFSYW9nZDJwYVR0UlNBV2xwQlMwQVZaZjlaVWI5S21uNGNWQzNTa3lrUmQ2Y3ZOTlBVMDlhQVJJcHhWaERtb0ZHYWxUclVzb3NLYWxCOWFoRlNDcEdUS09PS2lJRy9qaW5LVFNQbmRuRklMRGs0NXBqN21QTkFPQlVuQnBEUkdvcHgrNmZwUyt0SFkvU21CanpkVDlhaHFlY1ladnJVRmFvellVVVVVeEJRT3RGQW9BS0tLS0FDbW1uVWhvQUZOYmtRejRkYi9mL3JXR090YmNCLzRwMlQvZi9xS1lqSE5KMnBUUlNHTUdjMCtrcGFBRUlwRFRpS0FPYVFEY1ZxNnVQbXQvK3VLMW5DdEhXRDg4SC9YSmFZR2RTMGxMVWpDaWlsRkFCUlJTMERMVmo5K1Ura1RWV2VyTmx3Snovd0JNai9TcXo5NkJDTDBwOU5Yb0tkU0dLQlM0NG9GTDJvR0ppakZBb3BBSmltM0hFVlBGTXV2dUQ2MDBKbGNVNUJUUlVpaXFZaWVPbms4VXhPbEszU29aUXEwNDlSVFY2VTQ5ZndvRUl0TFF0TFNBU2tQU25VMXFBQ2lsb29BbWc0aHVXOUV4K1pGVnh3bytsV1U0c1pUL0FIblVmek5WelZQWVFnNlVVdmFrcERFcFRSUlFBVXRGQm9BYjJwS1drb0FLRTZrMGRLVk9Fb0dMUUtLQlFJRHdDYVl2M1JUbis0YVNtQ0VwM2FrcGUxSVkzdlRXNlU2bU5RQTJqdlMwQ21BZDZVYzBncHdITkFneFNZeFRxYWFBSElPYWNLUkJ4VHFBQVVwNlVncEhPRUpvRUZtdTZSbjk2dlZCYUp0aEhxZWFzVlpJbEpTMFVBRkZMU0dnQnBHYUFLVTBDZ0FGTFFLWEZBQ1VVdEZNQW9JQm9vcEFSZVZnNVVrVXZ6RDd3ejdpcEtLQmpBUWU5Rk9LQTlxYnNZZmRQSG9hQUNpazNmM2hpbDY5S0JCU1lwY1VVQUpRYVdqRkFEUnlLUWpQQXArTUNoZmVnQ01oZ09uU2dZSXFYRlJFWlBTZ1lvNlpwanRqanZUendLcVN1VG5INFVnTHZlcWwwT1RWc1ZYdXhVSXBsVHRXM3BVdVlveHgweFdJSzFOS1I1SXNSOVZhckVhN1NMdXd4NTlLU0sza0xzV1lBRTlxa2h0OWpiM081djVWWXAyRG1Hb2lvTUtNVlcxUmQxako3WU5XNmh1MTMya3Evd0N5YVpKekFwNjB6dlR4UUJJT2xGSUtLUXhhV2twYUJFRndPbFF0MHFlNCs3VUo2VW1VaUE5YWN0TmJyVGxvQW1XcFZxRmFtWHRVc29tSFNwVjZWRXRTQThWSlE4ZGFWamtVZ29JRklBV245S1l2U2w3MGdGb0ZKU3JUQXlyajc3MVdxMWNqOTYxVmExUm13b29vcGlDZ2RhS085QUNVdEpSUUF0RkZGQUFLMklEL0FNVTlMLzEwL3dBS3h4VzVhUmh0QW0vM3MveXBnWXBvRkJvcEFKUzlxS1drQVVVVVVERkZhR3IvQU90aC93Q3VTMVFIV3RQWEZBbWl3UDhBbG1LZlFSbUNpaWlwR0ZMU1V0QUJTMGxLS0JsdXovMVZ5ZjhBcGwvVVZWZnZWeXpYTnJkdDZJQit0VW42bW1JY3ZTblUxZWxPcVJpaWxQU20rbE9QU2dZVVVVZHFRQUtpdXVpajNxWWRSVU4xMVdtdHhNaEhXcFJVQk9La0JKWGlxWWtXVTZVTWM4Q21vVHQ1cGNjMUJRNWFjZXBwQlM5elFJRnBhQjBvcEFGSWFVVWg2MEFGRkZGQUU3Y1dTRCs4NVA1QVZYTlR5akVVSS8yU2YxcUE5YXBnZ1BTanRTbWtwQUozbzcwdU9LU2dCZTFCNlV0SWVsQUNVVVVVREd0ME5QeDh0TjlLZDJvQUtCMG9vb0VOZm9CNm1rcFcrOFBhaWdCTzlCNlV0STNTZ1kzdFRUVGowcHRBQ0dsSFNnMHZhbUFDbG9wYUJDR2twVFNVQVBYZ1V2YWp0UjJvQUJTT04yRi92SEZPRlBoWGRNUDlrWm9RbVdWR0ZBcGFXaXJKRXBhS0tBQ2t4UzBVQU14elM0cFFLV2dCQUtXaWxvQVRGRkxpa3BnRkZGTFFBbEZMU1VBRkZGTFNBUWpOTU1mb2NHcEtLQmtPU3A1R2FVTURTbm1rS2c5cUFGeFJpbTRaVDhwejdHbEVnemhoaWdBUFBGT0FxTlpFM25rWjlLbHlNVUNHc2UxTjk2RGswRTRHQlFNamYwOWFZWXcvQVBJcHo1Sm9SZHJaNXBBUzFGY0RLVktUbW1URDkzV2FMWlFIV3RydzYzTTZmUTFpbjd4clQwRjl0NlYvdklhMVJCMFZGRkZNUVUxeHVSaDZqRk9vb0E1TmhoaVBTbkNuM2E3Ym1RZWpHbzFvQWtGRkMwVUFMUzBncGNjMEFSVGpLVlgvQUlhdFNqNURWWWZkcVdVaUYrdEt0SS9XaGFBSmxxWktoU3BscVdVVExUeDBwaTA4ZGFrb2RUczhjMGdGT3dLUUFnNHBUMXBpOS9yaW5Ha0FHbFhyVFRUbDdVd00yN0g3NXFwMWV2QisrTlVhMGpzWnNLS0tLb1FVVVVkNkFFUFdpZzlhS0FDaWlpZ0JSVy9ZYzZGT1BjLzByQUZiMm1uT2kzSTlDZjVDbWhHSTNXa3BXNm1tMGhpMHRKUzBoaFIzb29vQWN2VVZxNjcvQUs2TC9jRlpTOWExTmQvMThRUC9BRHpGUG9JeTZLU2xxUmhTMGdwZTlBQlFLS0tCbWhaLzhlRjJmWlIrdFVINzFldHVOT3VmZGtIODZvdlRFT0hTaWdkS1dwS0ZwYVNsb0FLS0tLUUFPb3FHNCs4S21IV29aL3ZqNlUwSmtZSE5TcU9halhyVXE5YWJFaVVVdElLV3BLRkZMNjBnRkwyb0VLT2xGSHBRYVFBS0tCUWFBRXBhS01aNG9BbXVlSFJmN3FLUDBxSEhOVFhYL0h6SjdISDVWVFdSak1RZW5TcWU0a1RHbTBwcEtRdzdVZzVwVFFLQUZwcm5BcDFOY1pZVUFMU1Vwb29BU2xvQXlhS0FDbHBLV2dCaDVjL2xTMGc3bjFOTFFNU2thbmRxYWV0QURXcEtVOWFROUtBRzA0MGc1TkwzcGdMUzBVZHFCRGFWZVRTR25JS0FIVVVVR2dRb3F1V1AybjVTUmppckhRVldnK2FiUHFhYUV6VFZtMmpkelVnT2FZaEJGTzI1NUhCcWhDMHROeVIxL09uWnlLQUNnMFVuZWdCYU1VdEZBQmlpbG9wZ0pTVXRHS0FHNHBmclMwWW9BU2lpbG9BU2lsb29BS2ExT3BwcEFOb3BhRFFNVEZJUUR3YVdpa0JCSmJoK25CcFVqa1VZQnpVNHB3b0FnWm1BNVhGTlg1VjY1cTBSbW8yaFU5c1VBUWdoaGtqSDFwZG83R2g0blVjY2lvaSswY2dnMHdKOERiNzBqakttbDdVZFJXUlpuT01PYXQ2Vyt6VUlUNm5INTFXbUdIcDF1MnllTi83ckEvcldpSk93b29vcWlRb29vb0E1N1ZGMjNzbnZnMVZGWDlhWEYwcmVxMVFGQUQxcHhwcTB0QUNpbHBLS0FFY1pRMVVYb2F1TjBOVkIxSTk2VEdpS1NrWHJUcEtZT3RJWk9sVExVQ1ZPdFN5a1RMMHA0NjB4S2VPb3FSb2VLZUtaVDhVaGpVNWR3RDNwVDA2MDFjcks0cHg2VWdFTkt0SlNyVEFwWHcvZTFubnJXamZEOTRLejI2bXRJN0diRW9vb3FoQlJSUlFBaDYwVUhyU1VBTFJSU1VBT0ZiT211QnBGNEQyL3dyRnEvWlRCYk82alA4U2dqNjBBVTI1TkpRYUJRQXZlbHBvcDFJWVV0SlJRQTRkUldscmpicmlQZ2c3QjFyTXE3cXM0bm5SZ01mSUtPZ2luU2Q2S00wREhVVW5haWtBdExTVWQ2Qmw2SGpTNXZlUmY1VlJhcmFBZjJjNS9pODBEOUtxSHJURVBIU2xwQlNqclVsQlMwRHBTOXFBQ2twUlJTQUIxcUNiL0FGbFdCVmFYL1dHbWhNYUJVa1l4M3BpMUxHZDNTbXdSTW9wMktCMHBhZ1lDazdVNytFMDMwcGlGb05GRklBRkJvcEtBRnA4STNUeGoxWVV5cGJYL0FJK0ZQcGsva0thM0JqWlczU3UzcXhOUlk1elRqUlIxQWJSVHNVbEFCUUtLQlFBdE5iNzlQSFdtZnhVQUJvcFRTVWdGRkZBNlVVQUZGRkkzM1RUQWF2M1JSU2lnZGFCZ2Fabk9hZXh4VWZhZ0FwRFRxYWFBRVhyVHFBT0RRT3RNQlJRYVVVaG9FTk5QU20wOUJ4UUF0SGVpanZRSWJJY1JzZmFsc284cVNSVExqN29YMU5YTGRkc1FGVWhNY0J0NmRLZURTRUFpa0F3YzgweER3ZldncDNYaWtVNTZVNFVBTjNZNFlZcFI2MDdnOWFic0krNmVQU2dCMUxUUXd6ZzhIM3B3b0FLS1dpbUFsRkxSUUFsRkxSUUEybHBhU2dCS0tkVFc2VUFJZlNrb3hTNHBERXBEVGpUY0NnQk1VdExSUUFncDRIRklCbW5VQ0NpbHBLQUd1b1pjWndLckJ0emJBTjY0NE5TU0hKSVk1WDBwalRJbkdRTTlLQmpxVWRLU2dkS3lMS2R5TU5VYTFQZGlxNjFhSk93dDIzMjhiZXFnL3BVbFZOS2ZmcDhYc01mbFZ1ckpDaWlpZ0RKMXhmOEFWTjlSV1NEaXR6V1UzV2diKzYxWVk2MEFQV24wd2RhZlFBVVVsS0tRQ25wVk04U05WenRWU1RpV2hqUkhKVWExTEpVUzBrTW1TcGtxQktuU3BZMFRKVHgxcGlVOFZKUThVOEhpbUNuZ1VpaHZTYjZpbnZqSEZSbi9BRmd6VWgrN3hTRU1weTBnNUZLS1lGVy9IS21zMS92R3RTK0h5ZzFsdjk0MXBIWWlRbEZGRlVTRkZGRkFDckcwajRVVTgyc21PMVdMWC9WbjYxTlV0anNVbHRuS1o2SDBOUk1wVTRQV3RLbVBHcmpCRkhNRmpQcWFFL3U1UjdWSEtoamZCcVMzQUlrQi91bXFFUjBDa29GSUJSVHFhS2RRTUtLS0tBRnA4N0JtQkhJMmltVW5ZZlNnQUp4U0tjbWxibWtVWU5BRCsxSlMwVWdDbE5KUzBESkFmM1dQZW96MXBRZnlwdmVnUkpTaWtwUjFwRkNqcFM5cVFkS1h0UUFsTFNVdElCUlZhVC9XTjlhc2lxcmZmUDFwb1RGWHBVc1k2Vkd2U3BZNkdDSnUxTFNkcVh0VWpCdnVtazcwcmZkSDFwbzYweER1OUJvNzBVZ0R0U0NsUEFwQlFNV3BJUWN1UjJVLzRWSFNxY1o5eFRRaEc2VVVwNlVob0FLYTdZS2oxcFRVUmpMVEJzOFVJR1Mwb3BNVTRVZ0RvQ2ZRVXhlVG4ycDBuRWJmVEZOUVlwOUFGUFdrcGFRVWhpMFVkcUtBQ2tmb0I2bW5VMC9lV21JUTAzUE9PbFBOSUJRTWpQVTg1RkoxeGluc0tRWXhRQWxJVFRxWWV0QUR2NGFCU25zS1FVd0hEcFNIclMwaG9FSlVnNEZNQTVxU2tEQVVVVUNnUkZJTjl3aTFvS09NVlV0aHZuWnNkT0t1Z2NWYUVJZVBlZ0dsNjBoWEhTbUlRa2o3dFBYcFNEcmpGSVR0T2M4VXdIVTRHbUFqZzA3UEZJQlNBdzVGTjJzdlRrZWxMbkZLRG1nQkZZSDYwNmtaQTMxOWFUTEwxNUhyUUEra29CRERJcGFZQ1VVdEZBQ1VVdEpRQVUwMEdscEFKUjJwUlFhQUcwVUVVWTRvR0pubnArTkxpakZLQlFBb0hGS0tLUnlRaElHVGpnVUNHdktxSEdRVDZWUmx2SDNuQzRIWUdwNDdaV082VGwrcE5TaUNNSHArRkF6TFo1RzUrYlBXb3lEMVkxc0VLdlFBZTlaZHl4YVk4WXh4UUJvR2dVNDBnNjFrV1FYSStXcWdxL2NEOTNXZjNxNGtzNkxRWDNXYnIvZGV0T3NQdzgvenpKN0ExdVZaSVVVVVVBVnRSWGRaU2V3elhPZDY2ZTVYZGJ5TDZxYTVqdlFBOFUrb3hUeFFBVXRKUzBnRnFyTU1TZzFhcXZjY01EUU1oazZWQ090VHYwcUR2U1EyU3BVNlZYU3AwcVdORTZWSUtpU3BSVWxEeFQxcGdweTBoaVA5OVNha0k0cU4rMzFxUTBnR1VvNjBuclMwd0lMNy9WaXN1VDcxYXQ1ekJXVko5NnJpUkliUlNVVlpJdEZKUlFCYWdsV09JbGozNlVHN0haZjFxb2V0Rkt3WEx5M0tGU1R3ZlNvemRjL2Q0cXQycEtPVkR1VHp1c2loaHdmU213OUgvd0IybXJ5TVZKYmpMc1A5azBXRVJVVVVDbUF0TFNDbHBERm9wS1dnQmFUMCtsRkoyRkFDMHVLUVU2a0FVVUNpZ0FvRkZGQUMrdElPb3BlNXBCMUZBRWxLT3RKU2lrVUtLV21pblVBSlMwbEtLUUNqcFZROVRWcy9kTlZLcENZN09CVTBkUkxVOGRKZ2lTanRSUzFJeEcvaHBCMXBXKzhQcFNMMW9FT283MENpZ0JhU2cwVURDa0IrY2p0aWxwRjVkdndwb1E0MGhwZTlJZXRBQmlqdWFCU2pwbWtBbExSUzBBTWw1VUQxTkE2R25OMUZKMnBnSjJvb283MGhoM29vcGFBQ205WkQ3Q25VMWVTeDk2WWdORkthU2tNYWV0SWFVMGhwZ05OSUJrMHBvVGxxQUZicWFCUWV0S0tBRnByVTZtbnJRSVZCelQ2YWdwOUFDVXZRRStnb3BHR1Z3Ty9GTVErMFVyRnU3dHppclNuSXpqSDFwUWdDQmZTa3dSN2lySkZvNm5KbzYwRGlnQlNLalljK3RTRG5wVFdHYUFHcmdkdWFlRDYweHVCU0J2WDg2QUpNVTRDbXFhZFRBV2xwQlJtZ0FLYzVYZzBtNGpoaCtOUEJ6UlFBbWFLYVV4eXB4N2RxQTJEaGhnMGdIMDA5S1hOSWFBRUZGS0tVQ2dCQlFhVTAyZ0JLQU0wdEFGQXd4VGdLTVV1S0JDVTJRa2RCbXBLWTdCUmswQU1DWTU1SHRSdVBwejcwbWVTT3BIVTBoOXhuRkF4V3hnNUkvR3NtNVpYbU8zN280RldyMlhqWUQ5Y1ZSb0ExalNBODVwNVdrSzk4VmtXTmsrWkdyT1BER3RJRElyUGxHSE5VaE12NkUrMi8yLzNsSXJvNjVUVFgyYWpDZlZzZm54WFYxb1FGRkZGQUNNTXFSNml1V2NiWEk5RGl1cXJtYnhkbDFLdiswYUFJeFR4VVlxUmFBQ2xwS1drQXRRWEk0QnFlb3JnZkpRTWdicFZmdlZnL2RxdWZ2VWtOa2lWTWxRSlV5VW1ORmhLa0ZSSlVvcUdVaDQ2NXA2MHdVNFVoaEo5Mm45Um1tTVR0cDQrN3o2VUFORkZMakJvb0FpdXVZRFdUTDFGYTl3UDNEVmt5OXF1SkVpS2xGRkZXU0ZGTFNVQUZKUlMwQUFvUFdpZzBBS3ZXcmxoRjVrMHA3TEV6ZnBWTVZvYVl3RWtvUFZvbUEvS2dEUG9GQnBCUUFvcDFOcFJTR0xTMGxMUUFVZzZVdElPbEFCVGdjaW0wNGRLQUZGRkFwTzlJQmFTaWlnQlIxTkt2M3FSZXJVTDk2Z0NTbEZKU2lrVUtLWHZTQ2w3MEFJYVVVaHBWcEFEZmNQMHFxS3RTZjZzL1NxdFVpV1NMVXlWQ2xUSlNZMFNabzcwbEg4VlNNRDk4K3dGS2xOL2lmNjA1ZWxBaFJSUzBsQXdORkxTVUFGTmo1Wno3MDZtUThxVDZrMHhFbWFUdlJSUUF1YUQwb29wQUE2MHZha0FwMUFERDFOQjZVMVRuUHVhZjJwc1lsR09LV2s1cEFGRkdRZWxGQUFlS2FnK1VlOUs1d2grbEtCeGltQWhwRDBwZTlCNlVnR0dtbW5IclRUVEFROUtWQjFwRFRod3RBQ2Q2Y0tRVTZnQktiM3B4NlUwZGFBSkZIRkxSMm9GQWc3MGVZa2NpYittYzBDcTgzelRxdm9LYTNFelhWZ3d5RGtHbHFHRmRxQUNwZnJWa2lGZTRvNjlldExTWW9BYWNnOFVvSWJwU2tacE1FVUFCejlhanhVb0lOQlVFNW9BaUdSMHA0YjhQYWwyNHByTGozb0FrVTBkYWl6ajZVOVd6MC9sUUE0VSttQ25EZ1V3Rnp6aWdnRVlJcG82azB1ZWVLQUdsR1g3dkk5RFNCZ1Rqb2ZRMUxrRHJTTWlzT1JTQVNsRk4yc24rMFAxcHdJUFNnQkRUZTlPYnBUY1VBRk83VUFVdEFBT2xMUlMwQUlhaWsrWUZENlZMVloyTFRZQTRYT1NhQUdNU1dPd2owK3RNbkx3UmJpMk05QUtsV1JNSFlOdmZKcWhkVHRJMjBuSUZBeUE4bkpwS0tLWWpjVWpIQUZLUUNLakZMdU5aRmlNdnBXYlAvckR4V21XeUt6N29ZYy9XbWdaSEcyeVZIOUdCcnNRY2dIMXJpKzFkZmFQNWxwQy9xZy9sVm9sazFGRkZNUVZ6MnFMdHZYOThHdWhyRDFvWXVnZlZSUUJRRlBXb3hVaTBBTFMwbExRQXRSekRLR24wa24zVFNHVkI5Mm9HKy9VNjlLaGsrOVNXNHhVNjFPdFFKVXkwbU5FNlZNS2hTcGxxR1VTQ25DbUNuaWtNUmh3YWtVNVdtTnhuM3B5WndQcFNBUS9lb29QV2lnWTJiL1VOV1BMMnJha0dZMkh0V05MMC9HcmlSSWlvb29yUWdXa29vb0FLS0tLQUNsN1VVb29BUVZMR3hVNVU0TlJkNmV0QUVaNjBVNlFZYjYwMmdCYVVVMm5VQUxSU1V0SVlVaTlLV2tYcFFBdE9IU21tbEhTZ0JhTzlGSlNBV2twYUtBQmVyVTVmdlUxUDR2clNwOTZnQ1NsRkpRS1JRNFV2ZWtIYWxvQVEwTFFhQlNBSlQrN05WaFZpZi9WbXE0cWtTUFdwMXFGYW1Ta3lrU0NnZmVwQWFGKzlVZ05IOFIvMmpUMTZWRXArVDZtcEIwRk1SSlNZeHpRRFRtKzZhUURBZUJSU0tmbEZMUUFoT0FUNkNrdHgrNlg2VWtweEU1OXFmRU1ScVBhbjBBV2lpbHBERUZGTFJRQUNoemhTZlFVb3BrNS9kSDNJRkFpSGErM2lsMnZ4VTJNVW9vdU1nMnRqa1VvVndvMmtEMUZUNUZSNzF5QUNDUlFBekRBNTYwOWM5NlhPYUtBRWZzUFUwdE5QTWlqMEJOT1BTZ0JCUWFWUnhTR2dCaEdhU2xOTm9HSlRqd0JUYWN4NU5NUUNuVTBjMDQwQUllbEl2V2hxVkJ6UUEraWlsb0VJS2loSG1YTEgzcVZqdFVuMEdhTEJPckdxaVN5OG9wK0tRVXRXSWJpaW4waEhwU0FiUlIzcGFBRUlIYnJTQTQ2MHBwY1pGQUNVbmJGQlVqcFNnZzBBUmtVMERtcGlNMG0wVUFOem5qdlR3Y0RtbWtVWkk5eFFBOGRLT2xOenp4eVA1VXVSam5pbUFvT2FlcHpUT004VW9ISlBlZ0I5SVVCT1J3ZldrM2dIQjRwOUFFVEVqN3cvRVVBNTZWTHgwcGpSOTFPRFNBRjk2ZGlvOXhVL01NZnlwNE9hQUZvNlV0SStBcEpPQUIxcGdNa2JBR09wT0FQV28zUlErNWoxNEdLVkZKS3U1d2VnRk5ad1VjWUFPY2V0SUNDWlkvSmJ5MjRQY0dzMnJMeUdPSHlzQUU5ZlVWV29BS1NscEJUQTF3YVVHa05JRHpXSm9QSUJxbmVMZ1pGV2dhaXVSbU9taE1vZHE2ZlJuMzZiSC9zNVg5YTVnVnYrSG56YXlKL2RmUDVpdEVTeldvb29waUNzZlhGK2VOdllpdGlzM1cxekJHM28yS0FNVUduclRBYWV0QUQ2S0RSUUFVTjkyaWc5S1FGUWRUOWFobDYxTWZ2dFVVdExxVjBHcjFxZEtnV3AwcE1hSjBxWmFnU3AwcUdVUEZPWHJUUlRoMXBESE55S2RHY3FQYWtJeUQ5S1NQTzM4YVFBM1drTkszV2s5S0JqanlwK2xZMHc0UDFyWjdHc2k0SDN2clZ4SWtWNktLSzBJRnBLV2tvQUtLS0tBRkZPQXBvb09TY2RxQUZZZ2Q2RmRSNjBxb1BTZ0NtSVIzREVZQnB0UzdRUmlvdWhwRENscEtXZ0JhS1NscERGcEY2VUdnZEtBRE5PRk5wUlFBdmFnVWRxQlNBV2twYU85QUFuOFgxcFY2MDBNQUQ5YUZPZWFZRXVhQWFRSTdkRk5PRUV1ZnUwckR1QU5PQnBQSmxRRWxEajJwRURQOTBFMFdDNDRtZ0dob3BmN2hwdUdYN3lrZlVVckRDYy9KK05RQ3BaamxSOWFpRk5Fa2kxTXRRclVxbWt5a1B6UXA0WTB3bWw2UlA5S1FDTDl4ZnBVZ3BuUUFVK2dRdFF5dTJjQTRGU21rMlpJTkNCaXg1MkRQWEZPcEJTMGdJNS93RFVrZXBBcVZmdWlvWitmTEhxMVQ5cWZRQW9vb3BERUJ6U21nVVVBS0tqbTVhTmZWcWxGUlB6Y0lQUlNhRUllYVdtazgwWnBER1NuSEE2MUJIRzI1ZVB6cXdWeXhOTEdNcnVwcDJCb01ZRkxpbE5GQURCekl4OUFCU21rVG5jZlVtbE5BQ2pwVFRUdTFOUFNnWXlrUFNsN1Vob0FSZnZDa1BXbkRnRTAwVXdIcUtkU0NnMENHbW5wMHBsU0w5MmdRVXRKUzk2QUdYQnhFZmZpck5vdTJJQTk2cXlnczhhRDF6V2lpNFhGV2lXT0ZMU2RQcFRxb1FVdElLV2dCQ0FhVEdPdE9vN1VBTXBSUWVEN1VvcEFIV21FWjZVK2t4elRBYjlhY0QyeFR0dkhOTlpTT1JRQVlwR1hQU2xCSGVsNjlLQUlpQ0tWVFV1UFdtRk04MEFBQW85cWJ5TzNGUEJCRkFBUmtVd0ZsYkM1UHNha0g1MGhYZFNBVGRtcEZiSUZNMjk2TTdlVHg3aWdDUWdFWU5SbEN2M09ub2FVc2UzTklKZm0yc01VQU5Nd0hCK1UrOUJJa0lIVlJ5ZmMxWDFPVlBLQ0Fndm44cW9SVHZDNFlINjBBYSs1WEJ6eHRQZXExNU1xeDQ2UG5JcXI5c2ZjeEdEbjFxR1dScFgzTWVhQUdra2trbkpOSlJSVEFLS0tLQU5ZMGdITktlbEpXQm9IZW16RE1aRk9PT0tSK1ZOTUROUERHdFBRbVAyaVdNTVZMTGtZck5rR0hOWE5GZlpxYWY3UUlyVkVNNlB5NU1mNjQva0tYYkpqaVFmaXRQejdVWnBpRzRmSDNoK1ZVOVdSalpNY2c3U0QwcTd2WDFGUlhpNzdTVWY3Sm9BNWtVOWFaM3B5MEFTVVVBOFV0QUJTMGxMU0dWSk9KYWlsSEZUVEQ5NVVVblNsMUgwSWxxZEtnWHJVeVVtQ0owcWREVUMxTWxReXlVVTRkUlRCMXA0cERIODRQU21SbmdHbmQ2YWg1SXBBSzNha1BhbFk5cVE5YUJqK3hyS3VSOHpqM3JWck11eCs4ZXFqdVJJcDBVVVZxUUxTVXRKUUFkcUtPMUZBQlRscHRPV2dCNHBTT2FRVTdHUlFBb3FLVmNObjFxVmFKVjNSNTlLQUs5QXBLV2dCYUtTbG9HTFNEcFJTRHBTQWRTaW1pbmlnQXBSU2dFbkFGVHgyNVAzcUxBUXFDZUFNMUtsc3pIbmdWYlNOVUhRQ25CaDJHYWRoWElJN05GT1NNbjNxd3NLTDBBRktBeDlxY0lzOWMxUWdDb1BTbkFyVGxpQTdVOFJpZ1JHU21LcjJHMFJQL3ZuQnE0NmZLY2RhcjZaR3d0aVh4Z3NjVUFUL0lmU2p5MVBwVXZsaW1tSVVBVjVMT0orcWlxc3VtNDVqYjhEV2pzWWREU1pZZFIrVkt3N21LOE1rWDMxUDFwUld5UWpqSDZWV21zZ2NsT0RVdUpTa1p4TzNrOUtDd01aNTY5QlVra1JRNGRhakkrVmZyVWpIbnJUeDFwbmVuaWtNV2p0UlIyQnBBQXBlMUpuTkxRQkZKek5FUHFhbTdWRjF1dm90UzAySVVVVVVVaGhpbG9vb0FjS2g2M0wvd0N5QUttSFNvWStYbGIxYkZBRGlLTVVIclNpZ0JTT0tSUnRYRk94U0drTVR2UVRnWm9wSlA4QVZuMzRwaUVRWVFmU2p2VHUxTkhXZ0JUMHByVTgwdzlhQmpUVFRUalRUUUF2OEgxTklCUzlnS1VVd0ZIU2tOT3Bwb0VOcVh0VWFqbXBEUUlCUUtLVVVBRUM3N29uc294Vi9HS3IyU2ZJWFBWam1yVmFJZ2IxcGNFVVk1b3BnRkxTZm9hS0FGb3hTOWFPbEFEU0R1SE5LVjlLWHFhVVVBTTl1aHB3RktSbWs2ZGZ6b0FXbXRUcVEwQU0yN2pta3dWK2xTQWM1cDJLQUl5YVhyMHBTbnBUUVBRMEFCR2FhVkkrNzFwK0tEU0FhRDY4R25VbU05YUJrZTRvQWRuQXBDUlNnZ2ppbzVJOSszSnhnNTRvQVZrN2pnMVd1SmpEQ1IvR2VtYXRqUFNzelVYM1Q3ZXlqRkFGUWtrNU5KUlJUQVFpajYwdEhhZ0JLQlI5S00wQUtmU2twYVNnRFg3VTAwdEpXQnFJYUQwbzdVdmFtSXo1eGlTcExKL0x2b0cvMnhTWFF3K2FoQjJsVzlEbXRFU3p0YVk3aFNBZTlMR2QwYXRucUFhUm9sWTVJT2ZyVkVqZ1FlUlNPTW93OXFiNUtaNy9BSjB2bGoxUDUwQWNxM0RHbkxUcmxkbHhJdm94Rk1GQUVvNlVkcUIwb29BV2xwS0tRRmU0NGNHb242Vk5jOUFhaGI3dEpsSWdIV3AwcUh2VXFVTUVUcFU2ZEtnU3Bsck5sa29wd3BncCthUXg1NlV3QTd5QlRnZUthVCs4NDcwZ0hNTzlKU25wU0NnWThWblhnL2V0OUswQlZHOUg3NC9TcWp1U3pQb29vclV6Rm9vb29BU2lpaWdBcFFlYVNpZ0NVVklLaVE1RlNMUUFvR0RpcEFNakZNSTcxSXRBRkoxMnVSNlVsVDNLNEliMTRxQ2dBb3BLS0FIVURwU1VvNlVBS0tsaWpML1NpR0VzUVQwcTRvQzhBYzBXQzRrY1FRYzFLQ1Q5MFVLaFBKcVpVQXFoREZqSjVOU0tnRktTRkdTY1VnZG0rNHZIcWFBSkFBS042anFSVFFoUDNtSituRlBWVkhRQVVBS0h6MEJQNFU0YnZUSDQwb296UUlSOGhDVGpnVkZZYnZzY2ZBNUJOT3VHSGt2ejFVMHRvVit5eEFIb29vQWwrYjBwZDNxRFNpbG9BUUVHZ3FEUzRCN1VZOURRQkcwUU5NSWRQY1ZZejYwRVpvQXFNaVRLUVIrQnJQdXJWNHNGTWxRYy9TdGFTRUhrZGFpSng4c241MG1yalRNY05Ud2FtdTdUYWZNakhIY1ZWRFlyTm90TW1IU2w3VXdOVHgwcVJoUzk2UVV2ZWdDT1BtNGtQcGdWS2FpZzVNamVyVkthYkVLT2xMU0NuVWhpVUNsb0ZJQmVncUczL3dCVUQ2a21wSkR0aWMrZ3BzWTJ4S1BRVXdEdlRxYlQxcEREcUtEUzAyZ0FwcjhsUjcwNms2eWoyR2FZaFNPS2F0T2JwU29PS0FHMHpISnA3SEhGTm9BYlNVNDlLUWRhQmdSelFCelIzb0hXbUlVMDAwNm1ta0FxQ25Ha1FjVTRpbUlTZzlPT3A0b3FHN1lyRU1Ia21taEdyR29SQW83REZQcXZheU04Q2x6ayt0V0FhMEpGcENNMHRGQUNZOWFLZFNVQUo5S1hPYURTZDZBRkE1cGFRVXRBQzBZelJRS0FFSzQ2ZmxTZGFmU1lvQUJTMDBkY0duVUFGSVFLV2taZDNmQkZBRFRrQ2pHYVVIQnczNTBZOUtBSXdXM05rREhhbjBVdkZJQkNBZlkwM2NWT0hISDk0ZEtmMW94bWdCa3JCSXk1NkFkcXhKR0x1V3lUbjFxM2ZUbkxSRGhSVkdnQW9vTkFwZ0ZGRkZBQ2dacEtXaWdCdk5BcGFURkFHdU90SmpKNjRwZTlOUFdzRFFTZzlLV2s2MHdLdDBPTTFXeGtWZHVSbGFwaXJSTE9zMDUvTXNJR3gvQUIrVldLb2FJKzdUd1A3ckVWb1ZaSWxJY2s5T0tkUlFCem1wcnR2cE9PcHpWWmEwTmJYRjByZXExbkxRQkt2U2xwcTA2Z0JhS1Nsb0FpdWZ1VlhQM2F0VGpLVlZIM2FsbEloUDNxa1NtTjk2bngwTUNkYW1Xb1VxWmFobEVncDlOSFNuVkpRNGRLYWNpUUVVNGRLYTNERDYwaGp5YzBncFd3T2xKUUFvcXBlLzZ3SDJxME90VnI0Zk10TmJrc3pUMU5KU3Q5NDBsYkdZdEZGRkFCMnBLWHRTVUFGRkZGQURrT0crdFRMVmVwME9SbWdDVWNpbFgrVkl0T3hodnJRQVNwdmpJcWpXaUtwM0NiSkQ2R2dDR2lpaWdCYW50NHQyQ2VsUndSNzJ5ZWxYbFhzS1lDcU95MU1pWW9STVZJV0NESm9FS0FBS2J2TGNJUHhwb0RTY3R3dnBVeWpBNG9BYXNZQnl4M0gzcVFVaElBeVRpcWs5OHFaRWZ6SDE3VUFYY2djazRxSnJ1SlA0c24yckpsbmtsQUxNZnAycFkvdTBteHBGOTc4L3dMK2RSRzdtYitMSDBxQ25BVk4yVlpBN3UvM21Kb1IzVDdyRWZRMEVVWTRwWEdUcGR6TC9GbjYxTW1vTi9Fb1AwcW5pZ2RhT1ppc2pVanY0V09DMjArOVdsWU1NZzVGY3k1K2MvV3ByZWVTSTVSaVBhcnVUWTZHanBWSzJ2MWZDeWZLZlh0VjBFRWNWUWhSelRIakRDbi9TbEJ6OWFCRkpsTWZCNVQrVloxM0I1WjNwOTAxdU9nWVZSbGoyWlZobEQrbEpvYVprZzFJcmNZcHM4WmlrSTdkcVlwck5vc3NxYWRqZ21vbFBGT2Rpc2JIMnFSamJiL0FGUVBxU2FsSjVwa0F4Q285cWNPcG9lNEljS2NhUmFVMGdDbDZVMGRhZXdHMm1EMElaam1BLzdSQS9Xbm5wVWNuUGxMNnRtcEdvQkNEclRsNjBpMG82bWtNV20wN3RTVWdDbXJ5N0gwd0tkVFkraFBxVFZDRmZwUzlGcHJmZUFwWE9GTkFEQ2NrMFVpOUtVOUtCaUdremlsYWt3Q0tCREFlYWtXbVlPVHh4NlU5QngwcGlDbTk2YzNXbWprMGhraWpBcEtYdFNVeEMxV3V2bW1qVDBxMEtxTCs4dkdQWUdxaUptcmJKdGpVZWdxWWpISXBrWDNRYWtxeVFCcGFRQ2dVQUxSUlMwQUpTWXAxSVJtZ0JDUC93QmRIVHIrZEx6UlFBdEZKeVBwNlU0YzBBRkZGRkFCaWs2ZlNuVVVBSlJRUjZVQS9uUUFFQWpCNXBwREo5M2tVK2lnQmlrTU0wWTV4U3NnUEk0TklHSU9HRkFDTXJiMXdmbDcwa3plWEV6ZWdxUW5hYXBhak50VFlPcHBBWmpzV2NrbkpOTm9vcGdKUlJSUUFVdEZGQUJSUlNVQUZGTFJRQnEwRVVVTjJyQTBHdHdSOUtUdlM0OWFTbUJITU1vYW9qZ210Qng4cHFnd3c1cWtTemM4UEhNVXkrakExcmtnVnoraEUvYW5VZDA5YTNGVjFPVDgzNDFZbVBDNDdrbWx4VEQ1dllMUVdjREpUanZnMHhHYnJrWXhFLzFGWkFyYjFnNzdSV0NuQWJxYXhCU0FrV25HbUxUNllCUzBncGFBR3lES0dxbys3VnR2dW1xZzcvV3BZMFF2OTZuUjBrbldoS09neXd0VExVS1ZNdFF5aVVkS2YycGkwOGRLa29WYVIrY2UxS3YzcUdHUm1rTVdqdFNLT0tXZ0FGUVh3K1ZLbjZWRGVqOTBwOTZhM0V6TGY3NXB0T2srL1RhMk1oYUtTaWdCZTFKUjJwQlFBdExTVXRBQ1ZKRWNIRlJtbFRPNEFkYzBBV2xiRFl4VXVNaW9TcFVrRWZNT0NLbVE1VVVBS3ZJcGx4SHVqejNGU0RnNHAyTWltSXk2Rlhjd0FxU2VQWklmUThpaUFmTm1rTXN4cnRVQVZhalRBcU9KZTVxZmhWeWFZZ1pnaTVOTlJTNTNQK0E5S1l1WlgzSG9PZ3F3QlFBb0ZNbW1TRmNzZm9LYmNUckFtVHlUMEZaYnlOSzVaamswWEFrbXVIbVBKd3ZwVVI2VUNsSStVL1NwS0V4OG8rbFNwOTJvejkwVktuM1JTWTBPcHc2VTJuaWtNTWNVVUZnS0tRQlFPdEZLS0FLYm5ER2xqYkpwajlUU3g1M0RGV1NXMHEzYjNiUVlEWlpQVDBxcWxQTlJlekt0YzIwZFpGREtjZzBFZW5Xc3Uwbk1MNFAzRDFGYXlrTW9JT1FhMVR1WnRXQlR1SHVPdFJ6UkJsSXBXeWgzanQxSHFLbDRaY2prR21Jd3JxTWxTaCs4dkk5Nm9BMXUzMFBHOGRSV0xNdTJRNDZIa1ZES1E1RFQ1ais0YjNHS2dVMCtSc29CNnNLbnFVV0VHRkE5cVVkYVFkS2NLa1k0ZDZEU2RxY2VsSVkybGZQSERFRWRxQUtmNkNtaVdRc0Q1OFlQVUtTYWVhYjF1WFBvQUtVOWFHTkNpbC94b0ZBNjBoaW1rcFRSUUFoT0ZKcEVHRUE5cUpQdUVldkZPSFNtSWpQM3FKVHhpbDcweVQ3K0tCZ0tXaWxvRU5OTGpnVWxQTkFEUlRseG1nVTNPR3BnSTNXa1hyUVRtbEhGSUIxRkFHYUtZZ0oycVQ2Q3ErbmpkTms5Nmt1bTJ3TjZtcGROaXdBNTdqaXJpU3krbkFweHBvR09LZDNxaENyUVIzcFFLRFFBZ3BSU1lwYUFDaWlsb0FLQ00wVXRBRGVuV2pIY1U2a3hqcFFBQTVwYWFjSG1nSG5Cb0FXbG9vb0FXbWtacGFXZ0J1Y2RmenBhQ0tUN3RBQzBoR1JnOUtBUWVocFJRQkU4YkVuQndQWHZXUmN1ek9RM1VkYTJaNVZpaVptT0JXQVRrMEFKUlMwbEFCU1V0RkFCUlFLS0FFb3BhS0FDaWlpZ0RWNlVjNDVwWDRZMGc2R3NUUVFrbGNlbE5wU2FUdFFBamRLb1NqRDFvVlJ1Qmg2YUV5MW84bXpVSS84QWF5djZWMDljZGJ1WTdpSngvQ3dQNjExWG1qT2VmenJSRXNucU4vbitVSDYwM3pNOUFmem9EQUVrS2NuM3BpSWRUVGRZT0Iyd2E1MGNHdWt1bUVscEt1U1BsTmMzM29BZXRTZHFqV3BCMG9BS1drcGFBQTlLcVl3ekQzcTNWVnVKVFNZMFF5MGlkYWRMVEY2MHVneXd0VExVS2RLbVdvWlJLdFBGTVduaXBLSHIxcFNNNXBvcHhwREFINWNVbEtoSFRGSWVEUUF0UlhZL2NENjFJTzFNdVIvbzVwb1RNbVg3MU1xU1hxS2pyVXpGb3BLS1loZTFOcDFKUUFVVVVVQUZLbkRENjBsS090QUYyNWJOM0tQZWtpNE9LanVXL3dCS1kvVCtWU3BnODBBU2U5UEZORk9YamltSWh1b3Q4Wkk2am1xMXNNdldnUnhWVlU4cTQ5alFCY1FZRlJ5TnZjUmpwM3B6dUVqTFUyM1g1ZHg2dHpRQk9vd01Da2xsRVVaWnFkMEZaZDVQNXNtQWZsWHBRQkZMSzBzaFpxQlRCMXA0cVdVT0ZEZmRQMHBSU045MDBnRmJvS2tYb0tqZXBGKzZLQm9kU2c0cHRGSVk3Y1B4cGV3cG9wM2FrQVV1ZURUYzBwUHlHZ0NvUlVrWXhUS2xUcFZNU0owNlU2bXAwcDFRTVZPdFhkS21KVXhzYzl4VkpEaFNhZFp0NWJ4SDZBMVVYWVRSdE1PS2JBMjEyaVAxWDZVL3FLaG1QbHVrbjkwOC9UdldwbVNUSnVVaXNDK2oyTjlEWFNNTWlzZlU0K0NmYWt4b3lSU3Njc2c5NlNreis5V29LTGluaW5yMHFGVHhVeTFES0g0b1BTbG9OSVlncHc2MGkwbzQ1cGlJWXVYbGIxYW5IclRiZi9VZytwSnAzZWhnaHdvRkh0Uzl6VWpBbkpvcE85TFRBYTNKVWU5UHFNbjk0UFlVOEhJcGlHdHdhaUh6T1Q2VStVODAxT0ZvR09GRkZJMmNVQUE2MDQwaThDaWdRb3BwSHpVNFVocGdNUFdwT050TWJnWm9IT00wQVAzZHNVaElIV2pvTTBaSXhucFFJcjNaenNUMU9UV2haQWlKYy9oVkhiNXQyYzlGRmFVUTRIOHZTdEZzU3liSEZJTTU1cGFYRkFoUlJTQTlqUm1tQXZXblk0cG82MDZnQnBCQnBhZFRTS0FGb3BLV2dBb3BhU2dCQ080NjBudGo4S2ZTRVVBTkhIVGtVNEhOSnlLVDNYcjNGQURxV2tCRFV0QUJRUnhSUzBBUk5HRzVCSUk3aW94TzBUYko4RFBSeDBOVmIyOVlPWTQ4cmpnbXFYbXNkeFlrayt0QUUrb3orWkxzVS9Ldjg2cWQ2S0JRQUdrb3BhQUVvb3BhQUNrcGFTZ0Fvb29vQUtLV2lnRFMzaGptbEJyT2luS25CTlhJcEE5UktGaWxLNUpTVTg5YWJVRkNEcFZTN0hPYXQxQmRENWMwMEpsUlRqbXVvaEcrTkNDdnpBSHJYTHJYUzJMcSttd2tybHNiZnhGV2lXV2hFZXhGSmtJY1pCSTlLUkxZRGxtWSsyYWw4dFA3b3BxL1VSQ3hWbEl6MUZjMHd3eEhvYTZ3eG9mNFIrVmN6ZUo1ZDFLbzZCamltQkd0U0NvMXFSYUFGRkZGRkFDMVdsR0phczFYbisrcHBNYUlKcVl0U1RmZHFOYVNHVHBVeTFBbFRxYWhsSWxXbmltTFR4VWxEeFRpUjZVd1U0MGhndlhORGRhUWQ2VnFBRHRUWitZR3AzYWtrR1lYK2xBbVpNM2FvcW1tKzdVTmJJekNpbHBLWWhlMUpTOXFTZ0Fvb29vQUtLS0tBSjdrNW1KOWgvS25RTmtZcU9VN256Z2pnZGFTTnRyZzBBWFkrT00xSWZXb1IxQkdLbUhJcGlIQ281VXlBZTRxUmZTbElvQXFUT1haSS9YazFjUVlBcWl5bEx2SjZkcXZLZUtBSXJ5WHk0VGpxZUJXVm1yZW9QbVZWOUJWU2tNVmVhZUthdldwTVpwTWFETkI1VTAxZ1JRRDh0QUVqVTllZ3BqVThjaWtOQ21seFNDblVoZ0JTbWxHS1UwZ0dVUHhHZnBUcWJMeEVhQVpXRlNyVVFxVmFwaVJPblNuaW1KVHV4cUJpSGlGL29hWE8wRDJwSFA3aysrQlRXR2FZSFF4bktnK296VEowM1JzcDdqRlBqR0ZYNlVyanJXeGtKYnQ1bHNqSHJ0NXFucUtaak5XckwvVUVlamtmclVWOE14TlNHYzNUUi9yZndweHBxZmZZMUpSWVE4aXJLZEtxcDk2ckFPQlVNb2ZuNXFjYWpGU2RSVWpBVWtwMnd1ZlFHbEhXbVhIK3FJL3ZFRDlhQkNvTnNTajBGQTYwcmNjVWdvR1BGSjNORkhyU0FTaWlseFRBajZ1eCtncHdOS2d5dWZVazBNdU9hWWlLUVpZRDI1cHFzT2xTbkdNbW9TTnhCQXhRTWtKcFRUUjFwYzBBS0tLT3dvRkFDOXFROWFVMDAwQ0ZJM0lSUzR4MUZBT0JUQzNOTVFwT1RSa0RyMHBNMHlWdHNUSDJwaUVzNUZaeUdJNWJOYUtIQXgzUFNzS0xJT2EwYmU0TEVLNStsV1NhU25nVTRWRWh5dVJVb05BQ2tVblRyVGpTWXBnQXAxTnhpbkNnQmFLU2xvQUNLU25VaEZBQ1pwYWJTMEFGTFJSUUFIbWt4UzBVQU1JeWM5RFRnM1k5YVVqTk5JejFvQWRWVzd1aENwVmZ2a2NlMVdBU09HL09xRitvRDdpbVFQWHBRQlV1QXJCWkZZa25oczFBVHpVak1TcEdPcHpqMHFPZ0Fvb283MEFKUzBVVUFGRkZGQUJSUlJRQUNpaWxGQUNVdUtPOUZBRmMxYnMzNXdhcTlUVWtUaEdxcEs0a3pWelNFNU5OamNNdWFjYTV6VVFkYWp1QmxLa3BzZ3lob0JtY090YitnT1RBeWs4S3h3TWV0WUo0WTFzK0huK2FkUFlOV2lJWnQ1SHJSdUZMUlZDR2gxUFJoV0JxNEF2V0l4eUFhMm1pV1pzc28yanVPcHJLMXFKWTVZOWlnQXJTMUF6aFVxMUVLa1dtQTd2UlIzb3BBTFVGeDJQdlU5UlhBK1NnWldtKzVVU2RLbmtHWXo5S3JwVW9iSjBOVHJWZEtuU2t5a1RMVWxSclVncUNod3A1NlV5blVoalR3YWNUbkZOT1F3cFIwRkFDOXFEeWpmU2twdys2ZnBRSm1STjkyb2FubTZINjFCV3lNeGFTbHBLWUMwMm5VbEFnb29vb0FLS0tTZ0NlWTVjZjdvL2xVZEs1eTJmcFNVaGxtQnR5NFBhcktNT25TcytKOWpnMWRCUEJBcGlKdW5OT3BvNUZLdnBURVJUcHVYSTZpbGhmS1ZLUm1xMlBMYytob0FwM1p6T2FpcDl4L3JtcU9rTWN0U0ExRU90UEJwTWFKQ00wMHJnRDYwQTBySGdmV2tBcmRha0hTb2oxcVlVTWFDbkRwVGFjT2xJWW82Q2xwdmFscEFGSlB4RCtWS0tiY0g5MkI3MElHVnhVaWRhakZTUmpGVXhJc0wwcDlNWHBUcWdZMS91QWVyQ25ScnZsVlIzWVV5VHFnOTZ1YWJIdnVOMk9GR2FwSVROY0RHS0g3MDd1S2EvZXRUTWpzdjlYSi92bW1YditwYjZWSlpEL1I4K3JFL3JVT290aTNjKzFJWnpacHNmYys5T05KSHdtYWtvbWorOW1wczFYaWI1YWxVMURHaVFWTXBHT2FnRlBmTzM1ZXRJWTVUbkpwczNMUkw2dG1uUkR2MnBHNXVVSG9wTkhVRU9iclFLRDFwYVF4TzRwVFNmeFVwcEFKUVRnRStnb0ZJLzNENzhVeENwd2lnK2xKSzJCVHFpY1pQMXBqSEhsVGp1S2F2U25PY0NtcjBwQUJwdE9KcEIxcGdPN1VVbEtPdEFBYWFhY1R4VGFCQzlxYlR2NGFhZWxNUWxSWFp4RUI2bXBoVmE3T1pGWDBGTmJpWkdnNHFSZUR4VFFPS2RXaEpvV3MveU1UMUdLdVJuZHpXTWpiU0QxOXEyYllvMElNWnlLUUV0R0tCUzB3Q2s2ZlNuVVVBSlMwbU1Vb29BV2xwS1dnQkN2cFRhZUtRajBvQWJTMGxMUUFVVVV0QUNVbjFwYVdnQlBZMW42aWNiRURkZWNHdERQcldWcU1tNlRaMkZBRlI4N2prWXBsTFNVQUZGRkZBQlJSUlFBVXRGR0tBRW9wYUtBREhGRkZBNjBBRkZMUVJ6UUJWSnBNMFVsTnNSb1dSTzJyZmFxbGowcTVXTXR6UkNHaGg4cG83VWRxUXpPa0dKRFdqb2I3Yi9BQi9lUWlxTndNUFUybXZzdjREL0FMV1B6NHJSRXM2clB0VWNoZGxJVlRVdEZNa2hWOXFnQkNmWWRxejliK2FLSnNFY2tjaXRhcU9zTHVzaWY3ckEwd09mRlNMVVk2MUl0QUQ2S0tLQUZxT1laUTFKVFg1UTBnSzNXUDhBQ3F5ZDZzamxLckRoeUtTS0pVcXdsVjBxZERVc2FKMXFRVkV0U2lvS0hVOGRLYU9sT1hwU0tHdDJOS09sSWFVYzVwQUhlbkxUZlduTDFwZ1pNLzNtSHZWZXJWeU1UT0txOTYyV3hrRkZGRk1RdE5wMU43MEFMUlNVdEFCU1VVVUFLcHpTMGk5S1dnQXExYnZsZHA2aXF0T1JpakFpZ0RSalBZOWFrOTZoUmdRR0ZUaW1JWHFLamxUSTk2a1gwcFNLQU1pNkdKTStvcUdyZCt1SkFBTzJhcVVoZ0tjRFRhVVVBUEJwYzhqNjAwR2xIVVVoais5U2lvUjFxWVVtTkM5NmNLYlJTR09GTFNVdElBRk11ZnVyOWFrSGFvYm8vZHByY0dSQ3BVcUVWTWxOaVJPdE9waTlLY0tnWTEvOVl2c0NhMmRPaDh1RUVqNW01Tlp0ckFaN3NESHlxTW10NVJ0V3RJcnFSSmdQdkdvcDIyeHNmYXBod3RWNXZuS1Ivd0I1dWZwVmlKcmRkbHVpK2dyUDFkOFc1SHFjVnB0d0t3dFlseTZwNmMwbUNNcC91bWdEOTFTUDl5bjQrVEh0VWxDeGdoZWFtWHBUQjBGUFdwWlNIaXBUOTAxRU9LbDZnQ3BBY293QlRGNXVKRDZBQ3BCVVVSeVpHOVdOQUQ2WEdUaWtCNXBlUFdrTVZoMHBwcGVncEQxb0FCU04xVWUrYVdrNnlmUVVDRlk0Rk16ME5MSWVLVHFxMHhpU2ZkelFQdTBya0VZcHBQUVVnQTBxMDN2VGgwcGdGS0tTbG9FSTFKU21rSFdnQlRUVFNtbW5yVEVPRlVwRHZ1R1BZSEZYQ2NLVDZWU2o1eWZXcWlTeVFVdEFvcXhCVmkxdUdnZkk1VTlSVmVwclpRMG9CcEFiS3NHVU1PaEZPRk5qWENBZHdLZFRBV2lpaWdCYVFqMHBhS0FBSE5GR085RkFDMUhQS3NVWkxISHBUcEhDTGsxalhseVpwTUEvS09udlFBa2QxSWtwZmNlVGtqMXJWZ25TZE1xZWU0ckRwMGNyUnNHVWtFVUFiOUxWU3p1aE1DR0lEK25yVnZOQUJSUm5QRk5aZ3ZVNEhyUUJIZFNlWEF4NTZjWXJGZG1ibGprMWYxS1RLcXU3bXMwOWFBQ2cwVVVBSlJSUlFBVVVVVUFMU2pwU1VVQUZHVFJSUUF0SGFrcGFBQ2c5S0RRYUFLaEZKU2s1b0ZOaUx0alY2cVZsVjZzcGJtaUcwbzZVbmMwb3FSbE83SE9haWpmWTZ1T3FrR3JGMk9NMVZIU3JSSjFxM080NEVaSnBYbGtIM1lqVGRQd2JHRnVwS2pOV2Fva3JlZEwyalA1VTIvWU5ZeURhM1QwcTNUSlYzUk92cXBGTURsTzlQV21rWU9LY3RBRWdwYVFkS0tBRnBHNkdsN0dnMEFWQjBJOTZydHhLYXNkSFlWQkx4TFU5U3VnNUtuU29GcVpLbGpST3RTclVLMUt0U3lpVlRUZ2MxR0RUd2Frb1JxVmVmeXBXcHFubWtBNGlsUWMwWUpweWpGTURMdkIvcEQxVFBXcjk4UDhBU1c5eFZCdXRheDJNbUZGRkZVSUtUdlMwaDYwQUZMU1VVQUZGRkZBQ3Iwb3BGNzB0QUMwVVVVaGxpMmwydHRQUTlLdkpuSEp6V1Vwd3dQcFdnc3FxZ1pqeDYwMEpsZ2lvNUxnSUFvRzZROUZGUitjOHZ5d3FjZjMySEZTd3dyRWMvZVk5V05NUWdnM0kzbWNzM1dzeWVFd3VWUFRzYTI2Z3VZQkttRCtCb0F4cUtkSkcwYmxXSE5OcERGRktPb3B0S090QUVpOWFucXVoNXFmTlN5a09wUjFwbzYwNGRhUXh3cGFTanRTQVVkYWd1ejh5ajJxZGV0VnJvL3ZCOUthM0V5TmFtU29GUE5XSTZwaVJNT2xQVUZtQ2daSjZVeFFUZ0RrMXIyRnI1YTczSHpuOUtsSzQyN0UxbmJpR01EdWVTYXNuazRwUHVpbEhBclV6RWM4WXFPQWI1bWs3TDhvL3JTVE1laS9lYmdWT2lDS01LT3dwQU1tY0twcm1MeVh6YmgyN1p3SzJOVXVQS2dJQitadUJXQjFwTXBEWDZBZTlTSHBURys4b3AvcFVzcER4VWkwd0NuZ1ZJeGUxVGpxUHBWZGoweFU2ZE0wbUEvcHpVRVArcVgzNXFXVTdZWFAreWFqUWJWVWVnbzZBU0NsRk5vTFlHYVF5VEZNYmhxRmxBNjFGdkxPY2pnOUtCTWtvWDd6SDhLQUtFKzduMUpwZ05rT1RTNTJyVVpiTGZqVHBPd29HTis4eE5OYjcvRktuS21tZzhuMU5BRHhUeDBGTUhXbjBBSlMwbmVuVUNHdDFwQlN0MXBQNGFBRXBPOUxTVXhETGh0c0xlL0ZRSU1BVkpjbk94VDNPYWFLdU94TEZvb29GVUlLbnRnREpnNTlxZ3FlM3dKUm50NlVnTlpKQUV5VDA2MDlXM0RPT3RWREtRRDhvempvYXNRbmQ3WTdVd0pLV2dqMG9vQVdpaWlnQmFRanVLV211d1JHWTlBTTBBWjJvem5kNWFuaXMrbnpTZVpJVzlham9BS0tLS0FGVmlweXB3UlduYTM0Y3FrdlhwdXJMb29BNkRQSnFDNWtLcUpGNHh3YzFtcmRTcmpEa2dkalVrMTE1MFRLVngwNzBBUlR1R0l3U1FCam1vVFNrMGxBQlNVcHBLQUNpaWlnQmFLS0tBREZGTDJwS0FFcGFLS0FDZ0hGRkZBQzk2U2lpZ0NwU2pyU1ZMQXU2UUNnQzdhTGhhdG5nQTlxWkVvVmFrNmlzbTdsb2FldEpTMG1lYVF5SzRHVXFrSzBKUmxEV2YwWTFTSlowdWpTaHRPUUUvZEpXcjRJUGNWajZEdGFDVkNBY05uOHhXcVVRRDdveFdoSXBsUlRnc0tVT3JkRFZWWTFlYmFwK1VjbkZXREJHM1ZmeHBBY3pjTHN1SkY5R0lwcTFQcU1mbFhzZ0hUT2FnV21CS3ZTaWtXbG9BTzFMUlJTQXJQOEE2NC9TcTgvK3NXckV2RW9OUVhIOEo5NlhVcm9JdFRwVUMxTWxKalJPdFNyVVMxS3RReWtQRktPdElLY0trb1UwemtIaXBlTWdtbzNBM1p4eFNBbFFITk9jNEZOVmllbnBRNXBnWjk1L3JqOUtvdDFyUnZSKzhIMHJPZnJXc2RqSjdpVVVsRlVJV2twYVE5YUFGb3BLS0FDa29vb0FkakZGT2NZMmU2aW0wQUZGSlJtZ0IxVzdSOHJ0UGFxZWFmRko1Ymh2em9BMUZPS2xITlFxUXlnanZUMCtYaW1JbEhGT3hUUlRoUUJXdWJaWmw1NjlqV1RMRzBUbFdGZEJqTlFUMnl5cmhoUUJoMGQ2bnVMU1NFNXh1WDFxQ2dCNmRhbXpVQ2RhbEJxV1VoK2FlS2pCcDRxU2g0NjB0TUJwYzBnSHAxcXJjbjk4YXNxYXFUSE16VlVkeE1hdldyVUNOSTIxQVNmUVUrejAyYWZETjhpZXA2bXR5MnRZNEZ3ZytwN21xdGNtOWlLeXN4RUF6Y3YvQUNxK0FGRkp3b29BSk9UVkNGQXljbWtkZ0FTVHdPcG9adnlxTkY4NWd4LzFZNmY3VkFoOENGaVpXR0NmdWowRkxOSUZVODA5bUNpc1hWcnpnd29lVDk3MnBES0YvY0c0bkpCK1VjQ3E2MGRhY09CVUZEZitXZzloVDZhdk1qSDBweG9ZMFBGUEdhWW82VktNRVZJeHZjVk92U29jYzFPdlFVbUF5NC8xT1BVZ1Uwbm1uVDh0R3Y4QXRacE85QXh4NFdtdWNJS0pHd0JUZHhkUW82bnJTQVlBMG5zS2xoWHV4eVJVZ1VLTURzS0ZHQlRFS2VBVDZVMERDQWUxTEo5d2oxNHBUUUJWejgvMHBTMmR4L0FVaktRVzlLYjJwakhxZmtQdlFxODFIbkNqbXBsKzc5YVFDaWxGQ2pPYVVDZ0FGQTYwdlFVbEFoclVoN0NsTk5KK1kwd0EwbWVhQ2FGb0VWYms3cHNlZ3A2bmpGUmZlbVkrOVNDdEZzUU9vb29vQVdwclhtWEdNK2xRMHFNVWNNTzFBRnlMNXBtR2F2MnhMUjdtR0RtcWR1aXlTZ0UrL1d0RURhQUJUQVdnaWlsb0FTbHBDTzlGQUMxVDFOaUxjQWZ4SG1ybFVkVGpaa1ZoMEZBR1VhU2xORkFDVVV0SlFBdEpTMGxBQlNqbWlrb0FLS1VVR2dCS0tLS0FDaWlpZ0Fvb29vQUtLS1dnQktNVXRMamptZ0J0RkZGQUJSUjFvb0FxQ3I5aER1RzZxSXJhMDVNUTFNblpEUThER2FPMU9jWWMwM05abGlIMnB0T05Ob0FEeXByT2NZYzFwQ3FGd01TR3FRbWFXZ1BpNWtYKzhtZnlOYkUwZ1VZNmsxeitrTmpVSXdEamRrZnBYUVBibHo4ei9wVjlDV09naUVhNUlHNDlhbHBpSVVRS0QwOXFkejYweEdGcmE0dXdmVlJWQVZxNjZuTVQvVVZsTFFCSXRPcHEwNmdCYUtTbHBBVjdqaDFOUTNBK1dyRngwQnFDWVpqTko3bExZaUZUcFVDOUJVeVVtTkU2Vkt0UkxVcTFES1JJS2NLYUtXcEtIOXFZZTlPN1UxdWxJQjY5YURRdElhWUZhOSs4bjByTmV0TzlIQ0dzMlVZL090WTdHY2hsRkZGVVNBcEdwYVEwQUpSUzRveFFJU2lseFJpbUFyT1dDais2TVUybDcwWW9BU2lseFJpZ0JLV2x4UmlrQmJzcDhIeTJQMHEvak5Zd0dEa0d0SzFuOHdiVys4UDFwZ1dVYmJ3YWxITlJFWkZLckZUZzBBUzA2bUt3TlBwZ05aQXdyUHV0T3lTMFhCOU8xYVE0cDJBYUFPY2FONHpoMUlvQnJvV2hWeGdnR3FzdW14dHlvS24ycFdHbVpRTlBEVmNPbTRQVnFjdGhFT3BmTlRZZHltR3BRZWVLMGtzcmZIVFAxTktZWXJWeEtpQXIvRjNLKzRvNVE1aXRCWnl5Y2tiRjlUV2hiNmZERWQyM2MvOEFlYXJDa1k0R2FjQzNZQVZTVmlXN2pnQUJTN3MvZEg0MGdYdXh6UVhBNlV4RGdNY21tdklBTWs0RlJ0Smx0b3l6ZWdwMGNCSkRTNEo3S09ncEFDSTB4eTJWajlPNXF3U0ZGTlp3b3JPdnI4UWphdkxudDZVRERVcjhRSmhlWFBRVmdNN014WnVTZXRQY3RJNWQyeXhwQWxJWTBIMnB3UHRUeEdQV25CQlNHUnJrYmpqclNjbnRVd2p6M3BSR081RklZMWZwVHdyWTRGUFZBTzRxUVkvdkNsb0F6YTJPbFNqcDBvR1BVVXZIclNzZ0lwRll5cVFPQURUZHJrOUtuNDlhT0Izb0dRUEc3WTRISHZVaW9SZzQ3VS9JOWFRdW82bWl5QzdBZ2tZb3BQTVgxbzh4VDBORmtJQ0NjZXh6UWMrbEhtSjYwYjFQZWdDT1FFcVJVUmpPT01aK3RXQzYrdE5Kanp5YVlFQmliSGFucXJCY0hGU2hvLzd3cHdLSG93cERJMUJ4VHVhZHRIYWphUFdqUVEwOUtZVFQycUpqeUJRTVhOTUhKSnBleG9IQW9FTk5ESGJHeDlxQU9hWmNIRVdQVTAwQkRFT01tcEthb3dLZFdoQXRGSlMwQUZMU1U1VkxIQUdUUUJxYWZFQkdKRDFOWGFpdDEyd0lQYXBhQUNsb29vQUtDS0tXZ0JLZ3V4bTNZZTFUbmlvNWNGQ1BVVUFZTERCcEtmS01PUm5PRDJwdEFDVVV0SlFBVUNpbG9BUTBVVVVBSlMrMUZGQUFhU2xveFFBbEZGTFFBbEZMU1VBRkxSUjJvQUtVMGxGQUFCbWdpbHhSUUEybEZCeFRvbHk0OXFRRlNKZHpDdWdzNDhSRDZWajJxWk9hM2JQL0FGUTlxaWJMaWlHWVlhbVZOT0tncUVNUTAwVTQwbmVtQUNxZDJNUG1yZzYxWHZCd0RUUW1SMlQ3THVGdlJ4WFhWeGFFZzVIYXV3amxWb2xmUEJVR3RFU3lTaW1obEl5RHhRWFVkVFRFVWRhVGRhQnY3clZnanJXN3FVOGIyam9EazFoRHJTdUJJdFBOTVhyVDZBQ2xwS1dnQ0s0R1k2Z2ZtTS9Tck12TVpxc09ZL3dwTXBFQzlCVXlWQ3ZTcFVwTUVXRTZWTXRRSlV5MURMUklLY0thS2NLa29VVWg2MDRVakNrQXE5YWRUVjYwdE1DQzlIN3RQcldaTDMrdGFsM3pDRDcxbHk5VFdrRE9SRlJSUlZraFJSUWFBQ2pOSlJURUxSU1VVZ0Y3MFVsRk1CYVdtMHRJQmMwdWFiUzBESFpweXNWSUlPQ0tZRFNnMEFhbHRjQ1FZUERWWUtnaXNWV3djZzROWDdhOEJ3c2h3ZldtSXRjanIrZFBVbjZpbEdHRkpzN2ppZ0NRTlNqSGFvd1NPb3pUd1ZQdFFBOEUwNEVVMEw3MHUwZXRNQitCUnRGTjJlalV1MXZXZ1FvUWVsSkp0RWJFOU1ITkxoKzJLcDM4a2lxc1NqY3o5UU91S0FMc0J4Yng1NjdSVHkrQjF4VEkxWjBCWTQ0NkNuaU5CMUdmclNBajNsajhvTGZTbkNGbSsrMjBlaS80MUp2QXByU2dkU0FLQmtpS2tZd29BcEhsQ3FTVGdEdWF6N25VbGp5STBhUnZweFdQYzNjOXczN3drRCs3MEZBR2plYXBuS1FIUCsxV1dXTEVra2ttbURtbmdVbU1BS2VLQUtjQVQwQnFTZ0ZPQXBWamM5RVkvaFR4REtla2IvbFNzQXo2R25CYzk2ZjVFdVA5VS81VXhWZHBQTFZTWDlNYzBXQWQ1ZVJ3MUpzd2VEVnVQVDdsaHlxcjlUVTQwdHlQbWtHZllVY3JDNk0wS1FldE81clVYU2svaWRqOUtrWFRJQjFESDhhZkt4Y3lNZm1rSnJkR24yNC81WmcvV25yYVFMMGlUOHFPUU9ZNTA1cGNPZjRUK1ZkS0lVSFJWSDRVN1lQU255aHpITmVUSVQ4cVAvM3pTaTJuUFNGL3lycE5vb3dLT1ZDNWptemFYUkl4QTJLZDlpdWlmOVNmMHJvc0NqQXA4cURtT2NPblhQOEF6elA1aW1TV2swS0Y1SXlGSFd1bXdLcVh5R1ZvWWdNcXpqZDlCelJ5b09ZeDQ3S1owRGVVd3o2MUlMT1pmK1dScmZ3S1RBcGNxRG1aZ21DY2Y4czJwclJ5ai9sbTM1VjBHQlNiUlJ5b09ZNTUwYmpLbjhxZ2JoNjZjb1BTbU5DamRWQi9DamxEbU9iVDdtVFMxdk5ad3Qxalg4cWhmVFlUMEJIME5MbEhjeGhVTS9McXZweld3K2xqK0J6K0lxbE5wbHdITEFCaDdHbWxxSnNwZ1VVOTQzak9IUXI5UlRLb1F0RkZGQUJWdXhUTW00NXdLcDFhc3BBa3VHUEJvQTJFQUNBVXRJdlFVNmdRVXZha29vR0xSUlJRQXRWcmxHUkRzKzZlcEhVVlpvNjBBYzg2L09jRGp0VGEwTDYxOHY1MEh5ZDhmdy8vQUZxejhjMEFGRkhXbG9BVEdhRFMwaG9BU2lpbG9BU2lscEtBQ2lpaWdBb0ZGTFFBbEZMU1VBRkZGRkFCUUtLV2dBb29vb0FLbnQwNm5GUVZjaUdFQXFKdlFxSzFHVzBlRkZhTnNjS3c5NnFSakFGV0xjL093ck51NVpMSXU2TnFxWUlxODMzY2V0Vkc2MElRdzlLYVR6VGpTRWNVd0c1NXFLNUdZODFNUlRKUm1NMDBKbWV2V3VyMDEvTTArRnY5bkg1Y1Z5ZzRKcm90QmZkWUZmN3JrZjFyUkVzMDZLS0tZaUs0akR3U0tRT1ZJcmx1OWRkWEt6amJPNitqR2dCRjYxSlVhMDhkS0FGcGFTbHBBSS8zVFZWZnUxYVBTcW82c1Bla3lrUUg3eHFSS1kzRDA1YVF5d2xTclVLVk10UXlrU1U1YWFLZXRTTWNLR3BCU21rTUJ3MUwzcHZRaW5HZ0NHNjV0L3hyTW02bXRTNC80OTJyTWw2bjZWckF6a1Y2S0tLMElGb3BLS0FDaWlpZ0Fvb29vQUtLS0tBQ2lpbG9BS0tLS0FGcGFTbHBBRkxSUlFNc1FYY2tQSDNsOURXbEJkeFM4WndmUTFqQ2xGTVIwQXdhWGFEV0xGZFRSL2RiSTlEVnlQVWgvd0F0RUk5eFFCZjh2MEpGS0E0N2cxREhlUXYwY0Q2OFZZVjFQUWcweEFNK2xPQlB2U2dpbHlLQUdNK3hTeE9BQmtuRlZMUnd6UGNTSDVuNEhIUmUxUzNKTThpV3k5RythUStpL3dEMTZ0S2lxQUFBQU8xQUVYMmhleE5KNWpIb3Y1bXA5aW50UjVhK2dwQVZ5Sm02RUQ2Q20vWm5ZOHNUVnZ5eFFFUFpqUUJXRm1lNXA0c2tQVVpxeHNiKzhhTnIvd0I2bllaWEduVytjbUpUK0ZTQ3loSFNKUHlxWEQvM3FYRCt0QWhxMjBZNklvL0NuQ0pSMEFwY1A2MHZ6K3RBQUl4NlU3WUtUNXZXbCtiMW9BTmdxbEhFcWF1NUlHWGl5RCtOWGVmVTFVbEdOUXQySlBJWmYwb0F1NG94UmozcE1IMXBBT3hSU1lveFFBdEZKUlFNTTBab296UUFab296Um1nUW5QcFJ6UzdxVGNLQURuMHFwT3pEVUxkZWZ1c2F0N2hWUXRuVkVKNmVVY2ZuVEdXdWZTam4wcGQxRzZnQnZQb2FNMDdkUnVvQVptamRUOGlrd3ZvS0FHNXBLZHNVMGhUME5BQ1VoQXBTckQzcHVjZGVLQUd2RXJEQkFJckt1YkJMaVhGc05tMC9PM2JQcFduZFNsTGRpcCtZNFVmVThVNk9OWTR3aWpnQ2dEQm0wNmVMa0FPUDltcXVNY0hnaXVwS2cxV3VMT0tjZk92UHFPdElEbnlBTVVLY0VFZHF0WFZoTEJsbCtkUFVkUlZRR2dEZHRwaE5FRzZISElxWVZtV0pJUWxmdktlbnRXaWpCMXlLQUgwVVV0QWdwYVNsRkF3b283MFVBQkFJd1JrR3NlOXRUQzVaQis3UDZWc0U0Rloyb1Q3Y1JMam5rLzRVQVp0TFNVVUFLYVFDbHpSUUFsRktCeFJpZ0JLU2xOSlFBVVVVVUFGRkZGQUMvd0E2UWlpbHo2MEFKUzBVVUFGRkZMUUFsRkZCb0FkRXU1eFYwQ3E5dXZVMVpIU3NwUFUxanNLdlNwSURpY2UvRlJMMHB5bkRnL2pVREx6ajVhcHljU0dyeDVVMVNuSHppaEVqYVE4TDBvQnhRVHhWQU5JelNNdnltbjBoNUZBak1jWWtOYS9oNXlQUGpBejBicldWT01TbXREUVgyM3BYKytoclJFczNkN2dFK1dmb0NLakYyQyt3UnVXOVBTbnp5ZVduQkFZbkFwWVkvTFRHY3NlU2ZXbUlCSXgvNVpPUHJpdWR2MUszc29JeGxzMTAxWU9zcnR2TjM5NVFhWUZFVklPbFJpcEJRQXRMU1VDa0F2YXFwNGthclZWbjRsUDBwTWFJSlB2MHEwUy9lRkl0SW9uU3AxcUJLbVdvWlNKUlRscG82VTVha1k0VXRJT3RMbWtNUTlSVGpUVDFweG9Bam01Z2VzdVVjaXRXVC9WT1Bhc3lUdFdrQ0pGYWtwVDFvclV6RW9wYUtBRXBhS0tRQ1V0RkZNQW9wZUtLUXhLS2RSaWdCdExUZ0JUZ0JRQXpGTGluZ0NuQUNpNEVlS0FLbEE5cVhBcFhDeEZpbHFYOEtVQWVsRndzUkNscHhPRFJtaTRXRXhUbEREb1NQcFNCelR0NW91Qktza3c2U04rZEtaN2pIK3RhbzFKcDR6UmNMRFlKSjRwWGNPY3Q2ODVxNHVvVGpxcW1xNHo2MG96NjBjd1dMYTZrL3dERkYrUnFRYW1POFRWUnBSeDYwY3dXTkFha245eC95cHcxQ0k5bS9Lczc4NlVmalJ6QnltbUwrTDMvQUNOS0w2TDFQNVZtZy9Xak5ITUhLYW4yMkwxUDVVdjI2TDFQNVZsNVB2UmsrdEhNSEthbjIyTDFQNVV2MjJMMS9Tc25jZldsM0gxbzVnNVRWKzJ4ZjN2MHBQdDBYcWZ5ckwzSDFwTjFITUhLYWJYOGVPQXgvQ3F0emR2S3llV21DakJzbXEyN0ZMdUo3MGN3N0dpTlI0K2FOaDlPYWQvYU1mOEFkZjhBS3MzY2FOeG81aFdORTZpbjkxL3lwcDFKZitlYi9sVkRlYU54OWFPWUxGMDZuNlJQVFRxYjlvVy9PcW03M296UnpEc1dUcVV2YUg5YWFkU243UkQ4Nmd6Um1sekJZbE9vM1BhTlJUVHFGMS9kVWZoVE0wbWFPWUxDbS91L2I4cWFiNjcvQUwyUHdvelFUUnpCWWFieTdQOEFHZnlxSXlUbHc1ZHR3NkhOUzhlbEJGRndzQXZMc2Y4QUxRbjZpbmYyamREdUQrRk42VTAwY3dXSlJxdHdPb1UwOGF4SVB2Umo4NnBsVDJwdlBRaWptSHltaXVzaitLSS9nYWtYV0lNZ01HWDhLeTltUm5HRFVjNEhsampxYWFrUzBieWFsYnQveTB4OWFuUzZpZjdzaW44YTV1MlpDTnBPRDcxWk1ZSElwM0ViNGNVN2NEV0FrL2w5SkNQYk5TRFZoSDFZUDlLZHdzWDlTQUZ1R0hHSkYvblU0REFjaXM0NmxiM01SUmlVSjZidld0S09WWkZES1FRZTRwZ0dhRFRpb2I2MDBncjE2ZXRBRFdYTloxNXB5eUV2RjhyOXgyTmFkSVJRQmd3WmpkbDI3V0hZMWRpYmFkd3lRZW9xYTZ0Vm1HUnc0NkdxS08wVG1OODVIclNBMGdjamlscUNKK091UjNxYWdCMUZKUzBDRm9wS2NLQmtNN2hGK2JnZFRXTEs1a2taejNOYXVvTmkyZnRuaXNlZ0Fvb29vQVRGTFJTMEFIUVVVbEZBQ0drcDFKaWdCS0tLS0FDaWlpZ0Fvb3BhQUZCSGVsSXB0QVBHS0FDbDdVbExRQVVVVStKZHppa3dMTVM3VUFwL1FVRG1oNnhOaEJUdlNtOUd4VHhTQXZSbmRDRDdWV3VCME5UV2h6RmowTk11RjROQ0VWc1V2RkozbzcxUWdCNG9wdEt1TWRhQUtWME1TWnFUVEpmTDFDRW5qNXNmblNYZzZHcXFrcklqRGpCQnE0a3M2OWN5VEZzZ292QSt0VFZCQ3NpUjR3cDc5YWt6Si9kVWZqVmtqNnh0ZFg5NUUzc1JXdG1UbjVWOXVhek5iREdLSWxjWUpHYzBBWkFxUmFqRlNMUUE2aWlpa0F0VjVlSlJWaW9KL3ZLZmVoalJCTU85TlduemRLWXRTVVRKVTYxWFUxT3RTeWtUTDBwd3BpMDhWQXgxSGFrcDNha01UdUtjYVozcDFNQkR5ckQyck1ldFBzUjdWbVM4Zm5Wd0lrVlQxTkpUbSs4YVN0VE1TaWxvb0FTaWxvb0FLS0tLQUNscEtNMGdGcGFibWxCb0dPRk9CcGdOT0ZBRHhTaW1naW5BaWtNY0tXbWdqMXB3SUZBQVJRQ2FYSU5MeFFBMGptbENpbDY5S1RPS1E3Z1U5S2FRUjJxUU1PbFArWEZBaUVHcFZOSVFwNmMwNEtSMk9mU21JVUduWnBNSE9DS2Rqbm9hVmgzQ2x4UzRQOTAwYytocFdDNFlvQjlhWGEzOTAwb1J2N3Bvc080VVVFRmVxbWovQUlDYUxCY1hOSVQ2VUE1NDJ0UzRPTTdHb3NGeHZOTGlsMmtmd04rVkdEL2NiOHFMQmNUODZPYVVCaWZ1TitWTzJQbkd3MFdZWEk4bjBwUlR3cmRrTkxoc2ZjTkZtRnhuNFVZcHhERC9BSlptazJQL0FNOHpSWmhjVEh0UlM3R3huWWNVaFdRRDdob3NLNG1hTWswRkpEL0FSUnNiSDNXb3NGeGFYaWsyc1A0RFMvTi9jTkZtTzRVaHBjUC9BSERUVHY3SWFMTUxoaWtQMXBNdVArV2JVRXNNNVJ1UGFpekM0ZEtNMGZPZVFob0FiKzRhTE1MaDJvb0lmdkdhYVN3UEtOUlpoY1hpazRwdTV2N2pVRXYvQU04Mm9zd3VQenhWYTZQektQUVZPQStEKzdiaXFzcDNPVGdpbkZhaWJJeFVnZDFIRGtmalRCMXBUVmtqU01uSk9jK3RBV25DbHhRQTNGV2JXNmx0bStSdmw3cWVsUTRwY1VBYjlwZnh6NFUvSy9vYXVBZzF5b3lEd2EwN0xVU0NJNXprZG0veG9BMVN1T1Iwb3B5c0NLUmhqa2RLWWhwRlZMdTJFeTVIRGpvYXVVMWhRQmsyOHhWaWtnd3c0SXE2amdZQlBYcFVON2JGdjNzZkVpL3FLcnJMNWlEQndSU0dhVkxVVUxNMGFsdXRTVUFMUVRpbDdWRGNTR05OM0dCeWMwQ00vVXBOMHdUUENqcFZPblNPWGRtUFVuTk5vR0ZGSlMwQUZIYWtwYUFDaWlpZ0FwS1hyUlFBbEpUalNVQUpSUzBsQUJTMFVVQUZGRkZBQ2s0NDdVQ2tvemlnQmFzV3k5V3F1T2F1eHJ0UUNvbTdJdUsxSGlvM05TbmdWWGxiRlpJMEptSHpVOVJ4U1BnSHJTQng2MENMTnFjYnhUNXh3YWhnYkVvOTZzeWpJcENaUnBEU25nL2pTSG1xQWJRT3RCcE9ocGlJcm9aU3FMVm96REtHczBqclZ4SloyTm8vbVdrTCtxQS9wVTFVTkZmZnBzZit6bGYxcS9Wa2hWSFdFM1dSUDkxZ2F2VlR2bDgrR1NNSGhWTEhIcjJvQTUwVkl0TTcwOWFBSDBDZzBVZ0ZxRzRIQVB2VTNwVWM0L2QwQVY1Ujh0UkxVcjhwVVMxS0xKbHFaYWdXcDBxV05FeTA0VXhhY0trb2twY2NVMFU3TlNVTjdpbkdtNCtZVTdxS0JBUDZWbVRkVDlhMHgxck11T3JmV3RJa1NLOG5VR21VOStsTjRyUWdTaWw0cGFBRXhSaWxvelFBbTJqRk9GR2FBR2tjVWxQYnBUS0FDbHBCVGhURUtCU2lrNlVvb0dQR0FLV21nVTREQnBDRGc5aFQxRklQcmluZE9jOFVBQkEvR25BZDgwZ2JKeFNqSUdhQmp3UGY4cVhCUEdPdElEM3B3SEhHUWFCRVpqSVk4WnB5OEQ1bDRwNFU3ZVRUbFdnWWdDNHlEK1FwNDVGTkNFa2dqcFQxVEE3MEFDazdjNEdQVTBvSS91MHVlT09uZWxLN3NEQkFvRUt1TWNZSDFwM29SelNCZHI0UDUxSUFLQUFZeDkyZzhBNEg0VW9Iell4UVJRQWdIclNISjdaOXpUK2c3a1VZb0dJTVk2VTRLTWUxQTU5dmVnZy9sNlVBTHQ5RFFNYnVlL3BRY2djVW1NZlUwQ0hiUmtraWpyMXlhUWs0eURRR3l2RkF4UW9wRHh3UmswNEU0TklUNmlnUWg1SFNnWUJ4MHBGSVlaQjRvSEFOQXd6MndPYU9NWUp4UjJ4M294bnBuMG9BWEl6MkpwQ0FPZ3BHSFhubkZLQ1JqUEkrdEFDQVpHT3RHTUNsSXhrajg2WE9jZ2lnQk8zU2tJNXBlQ08xTHdUODFBRWJDbWpBUCtOU0ZjVTN2Mm9BTUhwai9DbHhuT1JSa2RCUVNNak5BRGNZcERHR0h6VS9CN2ZsNjAwbnJrZmhRQkdJc2QrdEFHTzFQY2ZLU08xSFdnQnVQbno2REZWNzVSNVE0d2UxV2U5STZMSXUxaHg2VUFZNDYwNDBTb1k1Q3B6N1o5S0FlS1loYVdtMDRVQUtLV2twYUFDbkNtMDVUUUJmc0wweEVSeUg1T3g5SzJWT1JYTVZwNmJlZElaRC91bitsQUdtUmcrMUpUeHlNVlNuek5jQzJCK1FEZEo3anNLWWhzMHpUS3lXeWxpUmp6T2lqL0dzdHJhVzBJYVFoZ2VwSGF0NElBb0FHQUtpbWpEcVZZWkJwREsxczRaQnpWZ1ZtcG0zbU1aNmRqVitOdHdvQWxGWjJxTTN5RG5hYXZrNFVuQk9CMEZVTDJWWnJmS2c0Qm9BejZLS0tBRXBhS1NnQW9wYUtBQ2lpaWdBb294UUtBQTBVdEpRQWxGTFJRQWxGRkZBQlNuNjBnb29BS0tLS0FId0xtUWUzSnE4S3IyeThFK3RXUldNM3FheFdnam1xc3JWUElhcFR0MXBKRFpiSTU1N1VFaFFjZGFuWkZmcjFxQm85amM4MENId01keWs5aldrL3dCeXMxZTFhU0hkR0Q2aWt3S1VnK2MweXBaeGhoVVdjQ21BMDBuZWxOSWV0TVFqaktuNlZuc01NYTB1b3FoS01TR3FRbWJQaCtRL1o1VXhuYTJmenJYQlBjWS9Hc0h3OCtMbVpQVmMva2YvQUs5YjlhRURUdTdBZmlhaVVPZ1lGUTVZNU9EVTlGQUhKdnhJMzFwUlQ3eGRsM0t2KzBhWUtBSkNjZ2NZb3BCMHBhUUMweVVaak5QcEgrNGFBS3YvQUN6cUVkYW1IM0NLaEhXcExKVnFaS2dXcGtxV05FNjA0VXhhZUtrb2VLV21pblZJeFA0aFRxTzlLT2xBQ0RnaXM2Nkh6UDhBV3RIdUt6N3dmUEpWeDNKa1VzNXBLV2pGYW1Zbk5ITkxpakJvRUp6UlM0Tkx0TkFEYUtkdE5BSE5BQ1VVdUtVSVRRQWxBeFR3b0E2aWdSZzlEeFFBM2luQ2xhTEhlcFVoR09jNW9HUmdIclRsR2VRYWtXSmxQREQwNlZJSVVIdlFJak1lZWpDblJyajd3cDRpR01BOFVwajZFTU1lOUFDWUJPU0JudWNVcXFBZmYxcHdUR09SVGd2YklvQWFVNDYwNEwweDFwMkFEZzA4WUhGQUROcDVCSFByUzdCM09DZVBhcEFSZ2MwRWhtQTZpZ0NNS2Y0anowelR3Q0U0SUp4VDhCZjRqMW95QVA4QTYxQURPM0djZHhUc2NaelQxK2JHRjl1S1RkdHhsRHljSDJvQVFkYWNmbEl5Q08xU0tNbmpPQWNDaVFxVjJzZURRQXpHU00vZ2FkamduTk5TUUt6QnY0ZWZ3bzg2TWdrQThmclFBL0F3ZTFHM3VRZndwTjQyaGdPTythVU55TVovR2dZZER3ZU8xQnpqanFhY0c1d1J3Qm1tR1UvZVFEYU92Zk5BaFd6d053OWFEeWNjWXBWZmNnSlVxZnBTQXFCakorbEF3QTl1TVk1cEF2eThubjFwZDRKeDFHTTBLZHd5L0JKNDlxQUYzY2MwakVucHorTk5SOXczRG9mV2s4em5wd090QWhVQ2dsUU1BZHFNYzg5ZTFPeDh1OVJudUI2MG03T0FWT2ZyUUFtT2FYMUdLUm13Q01aSTdVbzVCSVhPT3BIclFNVHFUM3BBeHpqSEJwd0h5amNNTWVwOUtRSGNUeDA2bWdRYnNkOFV2Sng2OThVMDRESFA4UTR6M3BBNVloUU1ETkF4NFk1d1JrVVkzY2pyNlVOdFpUejlUVEEyUUNvSkhBejZVQU8zNTdIMTRvQnlOMjM2VTBzY2hWeVNlcHpUaVFoem50elFBaEFZREhXa0JCT01ZTkx1SGZJSnBubWpjUUVPZS90UUE3azRQcDBOSWVjK3RLRytYUFBvZmVtdXdHTTg1b0FGNmhlYWJJdUJoUGx4eWFlZUR3YzlxVE9TZmJxYUFHcVNRUDFwQ0NNanYycFR3UmdacFNCdEdNazBBVjd1SHpZOGo3eTlLemVWT0NDUHJXeGtoYzR5ZTJLemJ5WXNURzYvTXA0Tk1SR0RtbkNvbGFwUWFBSENscHRPb0FLVVVsS0tBRkZLQ1FRUndhU2cwQWIxaGRDZUxrL092WC9Ha3NsWi9OblAvTFJ5UjlCd0t4N2VaNFpBNmRSMjlhMzdWbE1DRk9GSTRGTUJ3NUZJd3B6REI5alFhQkdkZlFiMDNEN3k4aW9MV2JzZXRhY2k1RlpGeEdZWnR3NkdreG1tRGtaRlpsM0c4Q3VvNWpjNUI5S3QyMG9JSE5Hb1J0SmJrcU03ZVNLQU1lbEZKUUtBRm9vb29BU25EcFNVVUFGRkJvb0FXa29vN1VBRkZGRkFCUjJwYVNnQktLV2lnQXBLV2lnQktVYzhVVStCZDBnOXFUR2kxR05xZ1ZJZUJUUU9sSzU0ckJ1NXN0Q0dWc0NzK2R1dFc1MnFrNXlUVnhSRW1iZmVteURLMC92U1A5MDFBeUlBMWV0am1JQS9TcWVhczJqWjNEME5BRGJsZS9wVUE2NHEzY0RnMVR6VFFBYWFhZFNIbWdRRHBWSzVHSkt1TFZhN0hRMVNFeVhSbjJhbW4rMENLNmV1UXRIRVY1QzU2QnhtdXJFOFJKQWtVNDk2MVJMSktLakU4WkdRNHhTK2FuOTZnUmhhdW9XK1k0NmdHcVlxOXJKQnVsS25QeTFSRkFFZzZVdEl2U2lrQTZnL2ROQW83VUFWQjFZZTlRbmh6VTUrK3dxRi92bXA2bGRCNjFNbFFMVXlVbVVpZGFmVWEwK29LSGluclVZNlU5YWtZcHAxTk5Pem1nQk8vd0NOVUx3ZnZIK2xYdTFVNzBmdkQ5S3VPNU1qT3BhU2xGYW1ZdnRpbHhTWnBjNDVvQU85RktPbWV0SmpIdlFBVVVZSkZCRkFDZ1U2bWdFOTZPYzBBTy9DbktNZE9LUWVncFIxNW9BZjljR25xeHBuR1JTODQ0b0FrSEdNQ2pta0RZeG1uQWcwQUowSFhyUzhzT1FhRkJJcVJSZ1lvQWFBUXVjY1U0SFBOS1VKNmRLVUlkb1ByUUFqa2xsd2VsU0syUWM4RUNveDZWTWlnQU1CeVJRQWdBSVBmMHhUMVFZd0IwcFJ5T2xPQXdTZldrQWJmbENnNEZPR09BUm5qa21rNUlCSysrS1VBNXlldWMwd0VHT1VBeDNwUzIwYzVPZUFBT2xPeGprbk9mMHBHQVBCeUI2ZzBBRVozRGN2cHpTU1pIek9kbzZZSFUwa2NlMkl4NHdTMmVLZE1CS3BCd0FEd1NmMW9Bb1hNamk5VlZZNVBCSHBWN1ltNVRzR0ZGWjRSbzlSaWpiQlpjOCt0WDJJREFkRkhVZXRBaE9BdTA5am44elR1U1FPZ2JxTzVwbU11eEhBeUIxN1U4ZDJCeWVnb0FWU1N4TERnRHBTTWNBWjZacEFBSEhyMXlUU0Fna2s4Z0htZ0NSbTY4ODlxYXJBZ25HU3RKbFFWQnpucCtOS2c5Z0FSUUF4ZDJSbjBQVDlLZDgyTUhISEpwNjVHYzl1L3BSd1Z6N1VBSU1ad0JTYzdnMlNGQjVIclNwMUo1d2Ywb0dTM3NLQUdNNTJnRDZpbkRrWnppamNPdmM4VUhHQVR5YzBBS1FjN2g5ZWFCeWNLUW9KNXgzcHJ2aFIxeVRqanRRckhCNC9pSEdNVUFLeS9PUzNROWoyRkxubmoxNXhTT3U0Tm5oajBwQ2cyTU00eVJrOWFBRmJibnFNNTYwd0tPZTR4MDlLZmtIbkhPU0RTRS9LVGpwMkZBQ2c0eXZCUGYwcHFERE1OMlI3Q2tJNU9CZ0VldExqSEhPZVJTR0FHT25Qb005cUJqam5rQ2dESUF4aGNVZ09DekFqSjcweEFIQllBZFQzTkp0NE9NZTFMa1pHTzNla0F6ako5NkJpa2pIYmpnQ212ZzgrblNsQkhwa0dreU1udlFJQ1FPTWZqVFI4b3dPT0tSbUdjOGM5aFJuSk9mcFFBb1k1SHBTZ244TThVMW1JVWtMMG9VbkdmVTBBQkxiaGpHQWV0WmQ5ajdVK0RtdFRJQXoySFUxalR1SkpuY0RBSnBnSXZXcGxxRlJVdzZVQU9GTFNDblVBRktLU2xvQVVVVW5hbEZBQjByVTBtNDZ3c2ZkYXl6VDQzS09HVTRJT1JRQjArTnd4VEJUTGFZVFFxNDc5ZlkxS3c1elRFTVlaRlVydUVPaEg1VmZxR1JlRFFCandPVWJhYTBvbjNMVkM3ajJTYmgwTlMyMHZTcEdRYWhhZVdUTEdQa0o1SG9hcFYwT0E2RUVaQjRJckd2TFkyOG5IS0g3cC9wVEFnb3BEU2lnQXBSU1VwTkFDVVVDaWdBN1VVVUNnQXBSa21rcFFjVUFLZU9LU2pyU1VBS2FTbDdVZHFBRW9wYVNnQXF6YnJoYyt0VndNbkZYRUdCajBxSnZRdUsxSGltU0hyVHp3S2hsYkNuM3JKR2pLczdWVlkxSk0zTlFuclcwVm9aU1p2NTVvYmtHZzBIcFdKWkdPMVQyeHhMajFGVngwcVdJNGxRKytLQmx1ZGNyVkN0RnhsS29PTU93b1FoTzFOcDFOTk1CRjYxRmNqS1ZLUHZVMllaak5OQ1puOVB3cnA0b0lyblpNRkFVZ2NBZGE1ZzExZW1QdjArQS83T1B5clZFTXNnQURBQUFwYUtLWWpLMXhQbGlmM0lySEZidXNybXpCL3VzS3doUUJJdE9waTA2a0FvcGFTbG9Bck54S2ZwVUVuMzZzU2Y2MFZCS1BtRlQxSzZDclV5VlhTcDBwTXBFNjA4VXhha0ZReWhSMHA0cHEwNWFrWXBwY2NubnZTVUhCQnorbEFCMnFwZWY2ejZpcmRWYnZsbCtsWEhjbG1ZYVVVSHJTVnFaanVsT3ljVWdvNmU5QUNxUHlwVGpnZnBTYzRKNzBBSEFKeFFBdlE0eHhTTnlPT01VdklCbzQ0R09LQURuQUFwZVByaWt3dTcwRkgwelFBNEhxTy90VGdNamp0U0lNZ2tkYUJ3TXR4UUE1ZXRPQnpTY0VaQXA1VUJSZ1lOQUI4dlU5cU8yZWdvR0NlYWtJRFp3ZWxBRGsrNzdVOE4wNDYwMEE5Q0tjUU04MEFPNklQZnRUaGx2b0thZWdKNjB1Y0RpZ0JuUTlNWjdHcGt3RkE5Qm1vZVNjMU5HY3JnanZqbWdSSUJnOEFBZXRPQkE2YzVwdk9SM29KUFRuZzlhQUhjN3NjbWxKR0RuSEhZVW1UZ2RzOWFPQURqOGFReDNHQjcwbzUrOWdpbTkrZXhwV0c0ajA5YUFFWmlDUmpyMHBWSVlBWTRYbk5OM2dxbzJuYTVOU0xnWUFBQXBnVUpQK1FuR3hJYkNFazFaSXdTUVBtYmdIMXF1dVcxTmlSd3FZNTdpckxNUTRJUFE4VUNBS0EyTUU3dXVhVURERW5CeDJwVzNkQm5Kd0tUbkpKSHNQZWdCY2RTVHhUZUZHY1VveU1EQko2MGh5WFU4WTdtZ0EybnpkN1k0SFQxcDNJb1BJT1JubnBTTUcvSEhGQUNrWjNEc1JUY0tXYlBVOFU0aks0SUI0bzZEMUk2VUFLU1RnSEFHT2xKMDRIWGdacFJuZHdjZDgwbWM0eHptZ0JPUnh3TWUxQlBRQVp3YzhudlF4NDU2NTRvQndNQWNaL09nQlU0RE01em5rRDBvemdOeHpnZm5RTWYxcE1GZ0IyTkFCeUJrZCtRYzBneHNBWEdPd0g4NlhhRytZOXVSNkNsQkJpeWd3Q08zZWdCbkFVazR4N1VyQmNuUFBjQ2c0KzdqcDBGUEs1RzNBNU9UOUtBSXhub0Q4dVNhWGJnS1FPYzVGRFkvaEdNakE0NlVZNUdBYzlLQUVIK3J4a2x2enhSbnBnR2xRRVpVOEQxOWFUanBRQTFzN3NBZmo2VWhCQnlveUFNRG1sYzkrL3dEOWVrUERFc1NTY1VERXlRQmdBY1VnK1VrQURrZGZXbkFnWXgyN2RLYmc0T1JrNDVvQVFqa2NmamlrQk9ldkZPNHhqUEk1cGg1SUErNk1jbWdRckx1NUhCOTZRRFluUEpBcHd3dzQ2VWc1SkdPaG9Bam5sRWNUTTNkY0xXUldocVRmdTBIUFBQVGlxQzhtbUE5QlV0TlFVODBBSlQxNlV3VTRjVUFPb3hSUlFBVXRKUlFBdEZGSGFnRFEwdTQ4dVh5eWZsZnA5YTJoeU1WeXlrcWNqdFhRMlU0bmdWdjRod2ZyVEFtSHBUV0ZQY2M1cE90QWlsY3hiMUlyT1FsSHdhMlpGeUt5N3VJcTI0ZE85SmpMY0w1RlNUUkxOR1VjY0g5S28yOG1PS3ZvMlJRQmhUd3RCS1ViOEQ2aW1acmJ1N2NYRVczZ01PUWF4R1V4c1ZZWUk0SW9BUGVpazYwdEFCUlJSUUFsTFNVdEFCUzBsRkFCUlJTMEFGSlM5cUtBRUhTbG9vb0FraFhMNTdDcllxR0JmbHo2MU9Ld203czFpdEJzaHFyTS9GVHlHcVU3ZGFJalpXYzVOTkZCNjBvcll4TjdyejYwZHFiQ2N3cDdESDVVNnNEVWo3bWxCd1I3R2h1R29vR2FJT1VxbE9NU1ZhZ082TWZTb0xwY0VHaENJQjBwcHAzYWtJcGdONzBNTXFmcFFhWHRURVp6RERFVjBPZ3Z1MC9iL2RZait0WUVveElhMXZEMG1CTkhnbmtOeFdrU0diZEZNMy83TGZsVEh1VVE0WU1EL3VtcUVSNm11NnhrOWhtdWNIV3VpdVpsa3RaUUVrd1ZQTzA0cm5POUFFaTA2bUxUK2xJQlJTMGxMUUJCUDk5VFVNM2FwN2pzZmVvSnZ1MUwzS1F4ZXRUcFVBcWFPa3lrVHFha0ZSTFVvNlZES0hyVGhUVnB3cVJpbWp1YUtUMW9BS3JYSzR4VmlvYnY3cTFTRXpMYnFmclNVNS92TjlhYml0akljS2RrZ2pGTkZLRHpRQTZqajA2VW5YMnBRQ1JRQWRCU0JTT1R6UzlhWCtkQUNaOXVLVVo3aWs1d01VNDl1ZXRBQ3I3L0FKVW8rWlNmZnBUU2NIak5TSm5IZWdBQTVHT0JUeWZUazB6dmdjVThnazRQU2dCUU9BQlVpZzB5TkNNNHFUUEhJNW9BZXZKNW9HY2M4ZDZhQ09NZERUOC9wUUFvR1d5UHJTNE9PbjVVS004MDhjSDhLQUloOTdGVEJlUVNjQWRxang4K091YW1KeVBTZ1FldjFwUjcwbUFCam1oVGs0eHhqclFNZms0b1BUOEtSQ1dVWmJraWxZbmFjRGswZ0RBWW5PZmxQV25mS2Y1VTNhZHVDY3NPYWVXeTNPT2xBQ0tHeVN5akJIRkcvajFMWStvb3dRaEM5ZTJhU1E5eHRHTUhtZ0NsYTVlOG1aaVd3TWJxdUtCOHVPbjlhcFdIeXlTdTJlV3dEVjA1SktnYzR6VEVLMlV5ekVBWW9YQTVBNm5pZ3JnampkdDZaN21nZksyY2ZNUm5IYWtNRTNZSjZFK3ZhbXhyaUplZW5lbEEycGtuNXV1S1pCMFU0NjU0cGlKZDNPM3A2VW5VQS84QTY2T1NBMjBiaDBwVitVS0NNazlUUUFoT2VUNlo5YVU0T0RuajJwRkdFeVQ2NDRvWEo1T0J6UUFaQkpVZGZiMHBNRWtjNHdNQUNsQjZuZ1k2bjBvUEhKNmtkYUFBRDVTd3gvczBjWkdDeDRvNTJBWUNuSEFQWTBtQmpJNXlQV2dBT2VSbkdlS1hQUDhBc2dmclF3eWNkL2JwUXh5Q092T2ZyUUFpNDJqY2ZiQnFPTjFSY0RoUWVENjAvd0NiR0NPYzQ2ME1BeWtnNEhTZ0FKR1J3ZXVjQ2tKeU0rbmJOT1ZnRnpuM05JZnVLR0hKN2Vwb0FhY2tqcDkzOHFYSUdXTEhqcmlnbjVpZzVJR1Rpa1hPMEVqR2ZYdFFBdk9RQ09nelRmbWRGSzhCdW85YWNlbUIzNm1nRGtaSEJOQUF4T1NGSGJwVFRnREdlUFhOT3dBTVo1YnA5S1pqSTQ2ZXZyUUFqRWhPT0QzSjdDbXNRZk13VHpnVWJ3V1BHVjYwNytJQVk2MERFMm5xU09uNTBoNUdPMk1VdVFDVDFwcE9lUHpOQWdCNmdmZDdVdlFtbWo3eEhvS1ZUaGh3VG1nRE92NUdhVUtlaWppcTZEbW4zTDc3aHlEa1o0cHFjR21CT3RGQXBhQUcwNmtwUlFBNFVVbEtLQUNpbHBLQUNsRkpTMEFMVnpUYmp5WjlySDVYNFB0Vk9qb2MwQWRWOTRZcGc5S3JhYmNlZEFBVDg2OEdyYkR2K2RNUTFoVmFlSU1wR0t0MVZ2YmlPMWlEeUFuSndBTzlBR1V3TVVtRFZ5Q1RJRlF6U1EzTWU2TmhuMDcxRkMrMXNHa00xQWNqTlU3NnpFa2UrTWZPdjZpckVUNUZTMENPY29yUjFDMHhtYU1mN3cvcldkUU1LS0tVVUFKaWxvb29BS0tLS0FDaWlpZ0JhS1FVbzVPS0FDbEF5UUtVOGNVK0ZjdG4wcE4yUTByc3NJTUFDbk53S0ZHQlRaRFhPYkVNaHdLb1ROazFhbWJpcUxuTEd0WUlpVEVGUFVVMVJVcXJXaG1hMFhIbUw2Tm44NmZUQnhjSC9hWFA1VStzRFVZL2FpbGJwOUtRYzBobHEwYktFZWhvdWg4cC9PbVdqWVlpcHB4bEQ5S0JGTE5JYVBTZzB3R21sSFNrb0ZNUlR1Umg2dTZBKzIrWmY3eUdxdDJNWU5PMHA5bXBRbjFPUHpxNGtzNnFpaWlySkk1M0VjTE0zSXgwOWE1WnZ2RWU5ZEpkRE8xZHg1UFN1ZnUwTWQxSXA3TWFRREJVbFJpcEIwb0FXaWlpZ0NPNCs1bW9KZnVWWm1HWXpWZCtZL3dwTXBFUzFLbldvUlVxSG1wWTBXRnFRVkV2YXBSVU1zZXBwd3BxMDRkYVF4MU45YWRTZXRJQkJVVjBQM2EvV3BhanVmOEFVajYxUzNFekprUDd4dnJRVG1pWC9XTlNDdGpJY09ocGY0YVQycGUvU2dCZjRlZTFBT2ZlZzg5cUFPNC9PZ0JUbnRUVG44YVhvTVo1OWFYK1o3MEFKampwelRoL0trTzBkZTFMalAwNzBBT0I5Qm1sUUhKejBwTnVCd2FNTm5yUUJLdmJCejlhZVY1ei9LbXJuSE9NMUo2MEFLdlhpbkRKSVB0VFZPVC9BRnAyN0I2SHJRQURKNjRHS2VBT3ZlbTRBT09nTk9YR2NjZzBBT0J6MHAvVG1vMUJCYlBUdGlua2tLUGVnQk1mT0Rqdnptbi9BRU5Sc3BQUS9LQjBGU0hwMDlxQURQQU9mclM5dUJuQW8rdlhwVGh5S0FGNzVKNTZVclpJejBOSjFPRDA2Q2hzWUhZVWdBdU9jazQ5ZlduajV1Y1o5S1FOMjl1bnBTN3VDU0RqMjYwQUxnN1dZSHBVVjBybUViZUR3VFV4NCtYcG1tdU55c0J4eDB4UUJVc3poR1hrbDNPYzFhNENqbkdUZzFYczBVeEZpcEozbmsxT1dKQjI0eUQwTk1RL2s0UFRqZ1UzYnU1NmtEcjBwQmxTQTNJSEpQclRnTXNOM0E2bjNQcFNHTk9DQXE0MjR4bnZTcjkwREhQVDNwd0tuT2VSMTVwTTViSWJHZXVCMm9BT3JZNTRPVFRkM3l0SVJqQk9CM3hTcVZHU0R5VFJqR0NjY2RSNjB4QWNsYzR6a2RNMGlmZUhPZTFEQUFrODQ5TTBSNTZZNzhDZ0FRZ0tOcThaenozcGM1TEIrZHRBQng4cEdBY0FpamxsSnlEeWVhQURCMmtuRzZsVWJSc0hKQUhTajc0eWVPdkZJc204RlkrbURscUFFYnBnY3NPd29WZ3dCR1FPUmdDbHhnbmorSEFCcE03UWRnUEFQWDFvQVQ1c1piZ2ozb2JCVkVPTUJ1Z3BSa1I1UFZnTVVtU3JaSUdCd0RTR0tGNFA1ak5JZVN2T2NjWnBjL2Q1R1QwcHVCeU8vYW1JYUJ0STU0UDNpYUhZNUpIVHRUc0FaQkFJcEd3U0NRZWVudFFBaWs4bmpucFM4WXp1K3RHQVFCempOSXhPQUJqMW9BYXh5K1R3RHhTc2NLTW5nZGdLalpTU005TTlLVW5COVRRQXBBeGhjWkZEZ04xeHgwQXFOV0paaG5nOXFjU0FEanFUbkZBRHZ2QTQ3OFUybTlUbFRTN2VBUHpOQUNqcU8yYVpPNGlpSmJucnhVcWRDYyszTlZyNTl0dmpITEhGQUdaVGtGTnFWQlRBZUtXaWxBb0FYclJSaWlnQXBhS0tBQ2lpaWdBcGFTaWdCMUZKUzBBV0xLNE52T0cvaFBEZlN1aFJneWdnNUJybDYxTkx1OFlnYy83cC9wUUJwL2RPUHlxaTYvYjd3cTNNRUJ4ais4MVhwV0N3dXgvaFVtcXVtQUN5VCs4M3pOOVRURVRlU2lyaFZBSG9CVlc0dEZia0REZXRhRk5LNW9BeVVabzIydndhdG8rUlVrMEN1T1JWUXE4TGM4ajFwRExYYXNlL3RQSWJlZy9kdCtoclVTUUduT3F5b1VZWlU5UlFJNTZscVc2dDJ0cGRwNVUvZFByVU5BeGFXa0ZMUUFsRkxTVUFGRkdNMHRBQlJSU1VBT3lXNjFaaFhDWjlhcklNc0JWMERBSHBXYzNvWEZEdWxReUdwV1BGVnBXd0RXYU5HVmJoK0RWVWNtcEoyeWNVMVJXMFZvWlNlbzVSVXlqaW1vdFNZcWlUUWtPSkltOThmblVsUXpETUJJNnJ6VXdPY0gxR2F3TlJHR1JURnFRMUgwTklDU0E0bEh2VnlUbEtvZzdXVSs5WG01U2tCbm4rVkJwempEbWtGVUF3MENsSXBCUUlodWx6SFZlQi9MdUltL3VzRCt0WEpseWhyUGF0SWtzN1dpcTF0ZEk5dEczUEtqUEJwWkxnN1NJMFptUFRpckpJdk0vZk03Zk5nNEdLeDlSNXZIYjF3YTFnakxFQVkzTGR6amlzdlVlWlZiYVJ4amtVZ0tvcVFHb3hVaTlLQUhVQ2twYUFFY2ZJYXJmd1ZhUDNUVllkRDlhVEtSQUtrV21kelQxcE1hSjBOVENxNjFNcDRxR1dTclRoMXBpbW40NXFSaTBvNmZqU2RxWHNLQUV4VWR3UDNKK3RTWnFPY2Z1V3BvVE1tYi9XR21DcEovdjFHSzJSa0xUd2VCVEtjdlNnQnc3aWpyeGtVbzk2QWVUUUF1S0FENjBnNjgwbzQ3OWFBRG5KNEgxb3o2Wm80SnBlb3htZ0JSd0I2MDhET2NZT090TTdqcm1wUFlVQVBBK29wVjRiR2V2U201OWUzV245U0Q2VUFMdStZQTlLZjFQV21EbHFlRDYwQU82bnAxRktGRklwejlQWDBwVnlmb080TkFDc3BLSEJPVDNwd1BBSFU5NlFISE9EaW5FOGpIVEZBQ0hQQkZPR2QyYysyS1lPR0dPUlQxWEI3WjYvalFBNWM0R1JtbmpnakFxUExFY2RmZW5yd1FEMXhtZ0JSeWZiK1ZLRHp6eUI2MGpBamJnZCthVkJ0QkE1NzVvQVhIYnJUbDRBSGJHS2FEMlBGQzVPNGs1NTZVZ0hqcDA5K2FSbXhHekFjNHptajEzYyt3cGt4WllXMmp0emowb0FpdFFmczBXR3dPU2ZlcEdBREtOcDY1T0tTM0JXS01jNVZmNmRLZmpuMVk5YVloTjNMYmpsc1pQcFRzNHdTZmVvMUh6bmpOU0RxU1RrKzNha01DT3VCazQ0cEFEMVBjOC80VUJSZ3F4T004YzlhUW5KMjlNbnAzb0FjT2dHT2h6VFI4NEwvVUQxcGVpOU01TklRcUhhQmdkaFFBT1NRZWFhaE8wKy9lbk55dnQ2VTFqdDJnZGp6VEVPQlhoUjI2ZldsR0RqMEI2VUU4cmsrK0tHQUJVSEF6MjlxUUNnQXNRZWU1RkNIN280VTQ2Q2dIbko0eU92U2hWQ2hSMUs4aytwcGpFNjVVWnlUa24wb1pSc0djbkhPVDNvSXh1Q25ERWR2MG9DL0lDZW9QUTBnQnZ1OXVLYVRuRzNwbW40NUFIUUhCTk5HUW04bk9UOTJnQkRqam5nY1pwcDlXeU1qcFRtNXpqdDBvUFRPY0NnQU8wTmpra0hJcENjTUNQeEdLVGtZN24xcGMvTnp3UFFVQU53ZDdEUFVjZTFOYkEyN3V2clRpMkZicUQycUFMbHdwYi9BR3FZaVhnREI1UFdtcmxpZHpkTzFMdVhkMXlSVGQySHh4NzBBUkVlWE11UndhY3h4eWFrWk43cVQyb3l2UUxRQWlkUDVVbzVPTWZTbU5qYjh3eHpVaTV4ay9qUUF2QXdPT2F6dFJreklFQitVYzRxKzJTZWVsWkZ3ZDB6SDN4VEFZb3FaUnhVYUNwZ0tBQ2xGRkZBRHFLQnlLS0FDaWcwbEFDMENpbG9BS0tLS0FDaWlpZ0JSVGdTRGtjR21pbG9BMVV1L3RGakxHVCs4MkVmWGlyOXJHcTJzU2pqQ2l1ZFJpcmNIRmJkaGNoMDhzbjVrL1VVQVd1UWNHblV2RERCcHBCWDNGTUFJcGp4aGh5S2ZtaWdSVGUzMjhyK1ZJcElPTTRQb2F1a1ZHOFlZY2lrQlV1SWhORVVrVWowUG9heEpJMmljb3c1RmRHVVpQdW5JOURUV1NLUVlrUWZpS0JuUEJTYVVxVjROYlRhWmJPY3J4N0ExREpvNHdURzV6MkZJREtvcFNwVmlyREJVNElvcGdKUURSUlFBbEZMUmlnQ2FCZVMzcFZrVkZDdUVINTFMMEZZU2QyYlJWa01kcXFUTnhVN21xVnc5T0sxRTJWeWR6VklncU5SVmlOYTJNaHlyeFQ2S0tBTCtNb1I2aWtoT1lsOVJ4K1ZPWHJUWWhneUw2Tm44NndOU1NvMis5VWxNZjFwQUllbFg0anVpQjlSVkh0VnUwT1lzZWhvR1FUcUE0cU9wN2tZNTlEVUZOQ0VOTjcwNDBuZWdCSEdWTlo3RGtpdEUvZHFoS01PYXBFczZQUm4zNmRIL3M1WDlhdlZsYUErYmFSUFI4L21LMWExSUVyTTF4TXdSdDZOaXRTcU9ycnVzV1BvUWFBTUFVOWFqRlNMU0FjS1drcGFBQTlEVmZ1MzFxeFZjOE8xSmpSQi9FYWV2YW10L3JEVGxwRkltVmFuVmVLaVRwVXltb1pTSFl4MUZTSVFhWnU0cENUNjFJeVU3UjFvT0NCdHFMazA0RWdBVWhoVFpmOEFVdFM1elEvK3FiNlUwSm1UUDk3OEtpRlRUL2VIMHFDdDBaTWRUaFRhVVVBU0FZb3h4MXBLVWZwUUFETkg5S1BUZ21sb0FPbExta0p4amtVcWo1VDYrOUFDODQ0NjA5UXdiR1JUUWFlRHhRQTRad1FSVDE5L1NtWnhpbmoyL0dnQVRoajZVOUI4dkp6OWFhUmdZOWFrSFh0N1VBQy9kUEZPWEh6WXptazZjZzA0QVo0NG9BVUx5VGs0OUtYSFlkUGFnSG4yb0xBY2V0QURsR1NTZW5wVGgxNmNqaW1wMyt2ZW5qclFJVUtNZy9wVGdDTW5uR2U5TnlRUmo5YVhqbm42VUFPeGsvaDJvL2hBd2M5T0tSR3lNK25TbENFWnozb0dLdlBBTkt2VDNOQndXRGVuR0tCazllTTBDQlI4b2IxN1ZIZU1VdG0yc005ei9oVTU0SHAycXZkQU5idGprOXFCaXhzR1VZWUhpbkVidUY0SjZWSENoVmR2YzFOajA0R2FCRE5vVThFWlBUM29WUnoyOWFjbU0vTjI1VVVjNUE5Y1pwREU2TVRnREhTbEdjZysvV2oxQnhuUFNuWUc0SDJ4UUExUmdBRG9PYyt0TjI0T0FDZWNrbnRUbU9XWEgvNnFEMDRHYUFHZ2RDZUFLYTQ3Z2MrbFNCZXZYSFNvemxRUURsdmFnUTlQbHh1T1dBb0hERHUzUDRVRnRxQTR6NjA5ZmxJei93RHFvR0prRjg5ZU9QclRseHRJNjAzaktqQnpqa1U0REk0R01IbWdDTU44dTQvTVQ2ZDhVcXFPNStiRk9BS0VEc09ocENNQUVZQkl4OUtBRVlIS25HRlBjbmswdzUyamFPbjVWSXc1Sko0WGdDbU5uQVU5ZXRBQmpLbjZad0thVHhtbk5uYmdjRTAxOEFISFFpZ0FZNFBicFRWSXlCbjYwQTRRODVxTUJ5eE9lTWNVeERpUys3ako5YWlVWWJQSmIxcDRCQzR5VGsvbFRoa2NEOGFBR2ZKd09Ob05PYkRBWUhmclRISkFQR2FlUUJqYlFBY1k3OGRhQVFjNDdDZ0xnWUdjMDdhRlBKQUdLQUkyd0R6UzU2OG5IWVVFRDB5YzBZT2V1S0FHU3N5UXN3KzhvNzFrTVNUazhrMXAzbnlXNy9NVDJGWmxNQ1dNVkpVY1BwVXRNQktLV2lrQUxUcWJUcUFDa3BhU2dCT2xPcEtLQUZvb29vQUtLS0tBRm9GRkZBQzFQYlNDTWx2NHg5MDFYcHluQm9BNkNDY2tLc255dVJuRldRMVpVY2l6c2pBNGJIUE5YMEp4eHo3VUFTbEFlUndhWWNyMTRwVmZOT3puclRFTnpSbWxLZjNUaW1ISTZpa01kU0ZRYVRkUm1nQnV3ZHFYRERvYVhOR2FBTWpWSWRsd3N2WnhnOFZRSXdjVjBGOUdKYk9RSHNNaXVlSk9jSHQvS2dBUFdpanJSUUFkNmNnM09CVGFudDE2dCtGSnV5R2xkazZpaGp4U2pwVWNocm5OaUdWc0NxTWgzRTVxeE8yS3FzYTJpak9USFJqTlRxTUNxNkVnNXEwdklCRldRQXBhT2xIdFFCZUhXa0hGd1IvZVdscEg0a2piM3hXQnFTVTEvdTA3cFNFY1VnR0wwcXhhSDVtSDQxWFdwYmM0bkh1S0JrMXlNZzFWcTdPTXJWSCtLaENDa05MU1V3RjdWU3VsS3ZuMXE0S3JYcE9GOXFwRXN1NkJJcVN6Qm1BQlVIbXRscm1CZXN5RDhhNW5TMWprdmtTVlF5c0NNR3VoRmxhcjBnVDhzMW9pV0krcFdxLzh0UXg5RkdhcjNWMUpjMjhpeFd6N0NPWGJpcm9XR0laVlVUNkFDaVE3bzJBN2ltSTVjZGFldE1Jd3hGUFhyU0FmUzBsTFFBVkE0L2VINlZQVU12M3hTWTBWMysvK0ZLS0pmdkNrQjVwRkU2R3AxTlYwcWRhaGxEODA0YzB5bkNwS0hDbDcwbWFXa0FsREQ1RytsTFNuN3ArbE5Bekl1T29xQ3JGeDJxdjNyZEdMSFV0SUtXZ0J3NkROTy9sVE4yS1VPTWMwQU85TzFBRkp2Rk5NbnRRQkp6Z0hGS0QzeFVYbUdsVno2MEFURHIvU25EcjdWRHZPZW9vOHdqdlFCWkdBY2dVOERnKzlWVWNqaGMwOHpNb3hubWdDd0RqaW5qam1xWmRpT1dOS04yVHlSUUJlSFRta3ljMVZPOHFNc1N2MW9PODhialFCZDdkYzRGT0JBSU5VaGtNTU56ampCcDJIY0VaempyUUJjRERCSTV4M29WeG5hZWZlcW14bFRHV0lOUDI0YmFDYzBBV3llYzlxWHFwcXJzWVpMbmpyUVkzSTY4QTU0OUtBTG1RZU1nSHFPYVNTUlZYSmJqMXFzc1BBWWM1NXBXaXdCbnVlS0FMSWtYcmtZNjVwUE9Sc1ljRDZDcTZwbkhCQjcxS2tZeHVVanBuRkFDdk9XQlZFT0QxelZmWTRsNVB5cWM0RktHYzlSam5wN1ZMR1ZZZktjNG9BZVhLZ0hZU08zTkw1NnJqS3R6eWFhTVoyZ2M5YWFlU0ZLRWpPS0FKUHRFV3dzcHpqakhlayswUmxoZzhkVHgwTlFSQUlkcFhxZWM4WXFUeWNPY2RPdWFBSkZtVmpnQTlldEN5TjgrVjRIM1RVVDhQOHE0NCtsU0VyZ0xodVJ4NzBBTmt1SEdGUmZtSjV6enhTTFBKMFplbnBUMUJYSHljNDVxVUtBQWVNbnJRSWhhYmN4RzF1UGVtYnlBV0tucjBxY0FESjU5cVZsVUxnZGUrZldnWldlUXBoa1VzVDYxSUppd0pLTXBQdlQ5aTRJeDBwMkJnZ2RqUUJYYWFRTmxGT1R4azFJczdoeHZUQzQ2aXBIQ0JUOHhKQXBOcWtZeDBvQWExd01rYld6bmorbE5OejgzK3FJSUhIMXA3SnVCQTR5Y1pwUUFJeU80NDNldElDTVRNd1lQRmdZd01Ha2preXpia3dRZWdQYW5vdXdZYzUzZFJTbFFWNmtaR00rbE1Ddkk4ekVnRGJudm5tbHpLQmdxRFV1MCtYanYyQk5JQUZBejE2NVBZMGdJTXlkQ3E1eCtkU0Zud0R0SFhuRks2R1JsWWNjZGFjUU9RY2NtbUJCbVhBK1hQUFkwL2MrM0JRZmdha0hVNDY5dU8xSGZ2Ni9XZ1JYZG5PQUZiUDFwUk13SHpMazlnTzlUY0tRT2cvclRNYmZtNnRRQkdIbEwvZEFIMXBWZGpuNVFjZTlQWmM1eHpuMG9QUVlBb0dOTXJEalpna2V0UitlL1hZRDdDckFIUFBVRHNLaktMbmo1UmpyUUJtM054Skw4cmNBSHBVQUZQbjIrYzIxaXd6MTlhUktZaDZqRlNpbUFVNWV0QUMwVXRLYVlDWW9vb3BBTFJTVXRBQ1VVVVVBRkxTVXRBQlMwZGFLQUNpaWlnQXBhU2xGQUUxdktZcEFjL0wzclhpa3d5a2R4V0hWMnltTEVJVzZmeW9BMmh0Y1pQV2phUjBPYXJSU2JjYzlUVmxYeUtBQUdselFRRFNiU09ob0FDaW4ycHBqUFkwN21seWZTZ1JGdFlkcVFzUlUyNDQ2VTNPN3NLUXlObUJVZzQ1cm5iakN1dTBIdURYU0ZNMWkzVUNZTDlNZFBjMEFVVnBUUlIycGdHTTFialhhb0ZWNGhsd1B4cTJ2cldjMzBMZ3VvcDZWQkkxU3NlS3JUTnhXYU5HVlpteWFoNzBybkpOSUszU01XOVJ5aXBveVZxTlJVb0ZNUkoxb3BvT09PMU96eFFCZU5ObDVpSkhVYzA0MFl5aEZZR280bk9ENmpOQXBzWE1TKzNGT29BWjNOT1U3WkZQdlRUOTZoK2xJWm9TY3BWQnhoNnZJZDBRUHFLcHpqRENoQ0crdE43MG9wT2hwZ0hlb0x4Y3gxUFVjNHpHYWFFeWxiLzY2TTd0dnpEbk9NVnVyKzdES3JFNTQzYmlmeXJBSFRqdFd5c3NaUlNaRUJJN210VVF4K3dIZ2tuSGNtbmJjWTU2ZTlOVjFadmxrUS9qVGp1M0FaeG52Mm9zSXlaQnRrWWVocFZwMTBNWERkK2FZdEFFbExTZHFXZ0JhaW02cWFscHNvWGFTeElJNlk5YUdORlNYdFRWNjArYnRUVjYxSlJNbFRKVUtWTXRReWg0NjBvRklLZUJVbENOMHA5SFA2VW1lUlFBdUtmZ1lQMHBoSlBGT0hQNVVJVE1tNEhUNjFXcTFjLzFxclc2Mk1tT0ZMMHBCUWVsQUJqbWphZWVLVVU4MEFNMmNacFFuclQrOUpqa1VBTjI1OXFRcmlwTzNUTkw5T3RBRVlRbW5pTEk2MG9BQXpUeHlPdEFBWThBYlQ5YVZZYy9NRHlPbE9YT08xUFVjWXpnMEFKc0lCM1l3YWtDc0FBRDBvL3BUaDZFNW9BRWpWT25JTk9IUWNmTjA2VWlaSEJINDA0ZE01NW9BQW9WczdRRDdVOWNiandBYVlNNUFKelR4Z25jT3A0b0FjT1FRZWVhUmx5Y2pBSjcwcTBkUjE0b0FVREk1Nmp0NlU4ZGZ3NUZOWGc1SGZyaWx6a2VuNFVBTzdZejM2VXA1WUFjZXRJcDZFYzl1YUJqNWdDUWVwcEFLNERBNDR4eUtSUWRvd01kdU85S0I4MjRjbm9lL0ZQSS91L25RQWdYTXB5T01kYW9vTmwrNkQ3dU1rQ3JpRW5jR0dDRDF6MXFtMlJxTW1CMVRrbW1CYlRHQytNSHNBYWNyTUNDd0FIWWVsQXdSbkdmUVV2VTVQWTBnRXhrN2lveU9vcFhPQWVlRDNwcFkvTUJuMS9HbkU0T2M5dWhwZ0l3VjE2Y0hvT2xMZ2NmN0lKSHRSbmpyem52U2R3ZW5QZWdCZDIwZlg4elNnbm5Kd0Y0cEIwejJ6azB1TWtaNEhYRkFnR1FjOXpTSGs1NkdrNjd1M1BXZ2tCYzk4MEFMa2tFNUhUaWxPRDE5YWpCK2ZiMlBQTk9PUnpnOGMwQUtTRDI2L3JTQW5aazRKN1VZNXp4d2VDYVVZeVJqbjE5S0FGNUE2QWtkNlFrQTlSaWt5RDFHUm1sKzhUOHZlZ1lad0JrNVk4Wm80WitCN2o2MG5WaTNQb0Rpa3kyQVIvZTdVQUhJRzBqb2V2clNIa2JqMUk0SHBTOEVEcjF5YU00STkrOUFoQndCanA3ZDZEMUo3MEVaOWdmNVVuM1NUNzVvQUR4a24xNXBEbk9NSG5nYzBIc1NhUW5hT25UcmswQUx4dXp6bWtPVG5KNzBoT0NUenhRNFBRZCsvdlFBaDNjWTRwVUEzS2VCeG44YUNBbzllTVpvS25jTTlLQUVQSnpuQnoxOWZTbzVHOHRDQ2NrRG9SVW9HY1o3TitkVkx0OEFxUFhuM29Bb1NMaHZZMDZNVWpaSjVxUkJUQVhGRkxSUUE5ZVJTbW1LY0dubm1nQktTblVsQUNVVXRBb0FLS0tLQUVwYUtLQUR2UzBVQ2dBb29vb0FLV2twUnpRQUduSXhSZ3c2aW0wQ2dEVmlrRHhMakhYOHFzUnlZT001NHpXVGJUR044RTRVbm4yclNSanViQTdkU2V0QUZ4WERESU5QQnFnci8zVGhnT2xUaVVqcU9LQUxPYUtpV1ZUM3A0Y1VDSFVZUGFtN2hTNUZBeFhZS3ZXc201RzlINUFIV3JzN0dPTWc4NTZWajZoY2VYQnNCK1ovd0NWU0JWeUR5T2hvcXhEWWxiRVNNY09Ua0ErbFFWUUU4Qy9LVDY4Vk9PbE1RWVVEMHA1NEZZU2QyYlJWa1J1ZUtwVHQxcXpLMktvVE5rMVVVS1RJdXBwNmltQ3BVRmFtUTlSVDZSYWRRQUEwb1Bha29vQTBEUXB3RFIycHRjNXFPajRMajN5UHhwMU1BeEtQOXBjZmxVaDZVd0dQMm82clEzU2hlbElaYnRUbUVlM0ZSWEs5L2VuV2JaREw2VXR5UGxOQWlxS0RRS1gxcGdOcEpPVUlwVDBvUElvRVorTUVpdEMxalV3eG5ZcEpIcG1xRDhPUld0cElEVzVCL2hhdEVTeGZzNm4rQWZsVFRDOFB6Sm5IZFQwTmFYbGpqam1tdkdGR1d4Z2RlYW9reEw3QWxVZ1lCVVZBdFQzakIyRERwMEZRQTB3SlIwcGFSZWxMU0FXbVRmY05QcHNnK1EwREswdktVeGUxU056SCtGUkwwRlFVVHgxTXRRUjFPS2xsRHhUeG1tVTRkS2tZN09UU0drV2xOQXdCNXFSVHlLanA2OXFBTTI3R00vV3FkWGJ3WTNmV3FWYlIyTVh1T0ZLYVFVcHBnQTZVNEhGTjZHbEZBRGgrdEhhanRTRE9hQUhBakZBeG1rRk9IV2dCUmluanBUQUtjTSt0QUVnK1VjMDVTR09QU20vVWNVL3Z4eDcwQU93ZU1IRlBISGJOTVhCNmpwVGdjZFR4Mm9BY0IwSU9CU2o3dWNFZXdvOWFVY0NnQlJqZzlNMEFjTmpnNTYwWTZjOXFGRzFTdWVhQUhKeWVUVDFISnlQcFRJK25JcDQ2MEFKakdBcHdLY01qSjR4bmlqakFIcFIwQkk1SFdnQlI5M083Z1VvQXllbWNVakx3UjdVOGZObkhKb0FSZUR0QndjVThsaTJPTURuNjAxV0JKSit0S1FXUEpPUFVkNkFFVmx3b0pIUFVIdWFweU1UcUw0R1R0QXhWMlFJRkxNUUFEVktLT05wNUc1VVp3TW5tZ0Mxa2tCaHg2RDBwVHozUFVkZlNtTHQ1QTY5YVhyd0NNam5KcEFQWDVzL3dnY0FVM0pPY2pHVGdjOXFYR2NrZ2RjOFVjNXowOWNkcUFCaGtZRkhyanNlOUJIYkh0UWVmekg0MHdET01qME5LVDgyVHlhWWVHYlBTblpHUjNHYUFGSTRKemoxeFNCZ1J1R2Z4cGVuMXh6VGNuY0JqRzd2aWdRRlFlb0dPRFNrNStVa2s0d2FNOXVuWWU5SWY5WUZ6MnlCUUE3Z0FIcVJRQU8rZXY1MG0wYkQzT09sQko0NmMwQU9KeU05TTlNMEUvZTNZSGZIK05OY2prNDVGQnpqak8zdDcwRERQekQyNG81Q2tMZ1k0K3RLT2hQclNmeGUrYUJCMFhnNTVKNXBBQWNjY0VkYU9TNituY21rQU9DQWZvVzdVQUdjTUF4NVBGQVlNeEF5ZXhvMjdncGJHOERyL1drNkQ1T2UrRDNvQVU4cndNYzRGTk9BT21PZS9VMHVTVlVIa25yVGNqazkvd0NWQUNubmtnZXRCMmtIYWM1NzB2WGpQWDJvSTRHTzFBRFFlR0hPQjYwdkdNNTQ3RVV2VHFSMXBmZkdmUVVBSWNZUGFzNjVCRXJaT2NuTmFEa0tqY0U4ZEJWQ1U3eHVJNU5OQVZHNzFKR2NpbXRTSWRyZldtQk5SUlJTQVNuZzVGTU5LcG9BY0tVREo0bzcwOU9HelFBaFRGTXFkaURtb2NVQUdSaWtvSFduWTlhQUcwVXRGQUJSUlJRQUNpaWlnQW9vb29BVSt0SlFPS0tBRnpWMnpsTEVLeE9SMDk2bzBxc1ZZTURnanBRQnJqblBJNDlhbFZ1UXZ0bXFNTXdZRW5ISTVGV2xma0UvZUp4aWtCTVl3UmtVbTF4ME5MR3hERUU1cVdnQ3Nza2drS01BRDFIdUtlWkpCd01WSklnY0RzUjBQcFVMN2xYSkc3SHBTZHdLMnBYRHh4SVNDeEp4Z1ZSZ2dacFJjWFM4ZndyNjFibW5ERlN5bkNuT01VWHMwYkt2WElIQUZDR04xQzRKUVJMZ0FqSnhWT0VibkdlM05SbGl4eWVwcXhBT005elEzWkFsZGs0OWFhNXB4NEZSdWF4Tml2TzJCVkZ6bHFzWEQ5YXJEazFyRkdVbU9VVk1ncGlDcFY0cXlSYVdpa29BS0tLV2dEUTdVdzA3MXBqRExWZ2FrcjhiRzlEVHZVVTJRRXhISHBTNXpnK296UUFoNkdtcDFwNUZNSFdrQkxibmJOOVJVODR5cCtsVmtPSlYrdUt1UHl0QUdlT3RMUS9CTktLWWhEMHBCVWhYQzVxUHZRQlRuR0pLdmFPNTNPZ1hPY0g2VlR1aGhnYWswNjZXMXVTN2drRmNZRlhFVE45aVl4OGlrZ25rK2xaMXhjZWZ1alJnQW95VDYrd3BESmQ2Z1NxanlvdStlcHEzQmFSd0ZVQTNaNjU3MVpCblhFTzJ4VnlQbTNjNDdWU0ZiK3BJdjJGMVFjTGpwMnJBRkNHU0xUd2FZbE9vRUxTTnlwRkZCNkdnWlgvZ3FFZEJVNDZFZTlRRG9mclVsRXNkV0JWYU9yQ25pb1pTSDA3dFNDbHFSZ09sT0hKcEZwVlBPS0JoVGxwTzlPSGFnRFB2aHkzMXFqVisvSEwxUkZiUjJNbnVLUHVtbEgzYVhIeTAwZE1VeEM5cU0wQ2pwUUFvOXFYdFRlbE96UUF2MXBRYzRwQjYwdmVnQjYwNWZyVE8xTzdVQVNLZWFmd2NERk1CcDY4OC9sUUE5UnoxcDRPUm52VEFNanJpbktPYzBBT0dUejJwYzg5Q1JTRFAwOUtWZnZFTUJqSFgxb0FjUHZBZDhaRkdCdTNaNlVEQkE0K2xMamdBOWZhZ0JRY3FXOXVhY1dBQXozcHVRT09ldkZJb2JkODNKenhqdFFCTjF4eDBIRkpqQnhuajFwRlB6ZHdCVHNaejF3TzFBQU92SjU3VTRERFp4U0lmbEI5YWFXUG1xb0dSN2RLQUg0K2ZwMnhtakJJenVPZlQycGM1YmpudGlsVEFiRDlEMkI2MGdJbVpaRmxWaGpISUMxV3R0cnhNNUpPNXpqTldwMmkzSDVSa0VZSC9BTmVvTGNFd2htN3NUZ2V1YVlFdkl4a1k5VDNwd0J5T3d6elNmTWZ4b3dTVGs4R2tBdWVTYzdqL0FIZlNnRWc5UVRTQWNyMEFQcjJGTGtmbHp4UUlDTWdZNUdjVU1DQ0NNWk5LdWR2K0ZONXdQVWVsTUFBNUlKUFhOS09PVCtlYURnRHFhQ005Ung2MEFIdUR3YUFjRDZqSnBDUVd5YUJ5T0FjWXpRQXBPVDB5ZXhwQXY3d3lEcWVBUFNrQkJVbnBnZHFVbkFKOU8xQUM5L1k4VW1NODg5anhTRWJqejB5S2N4K1VEUExIakZJWUhya2ZYbWtJUHFRTWNtbXhoaGpkajJCcCtlVGs5K01VQUdjbkdNamppazNFaytwN0QwcEFNa0hQUTVOQXdYT2VtTUFDZ0JUZzg5czVGQXlUdTlSaW03VHh6em5pbEJ6MDV5YVlDOEhJNmp2UUIweVQ3VW45TzlLT1FDUFUwQU5DZ0tDb1BOR1ZKSFlqdFM1SVVBOG1tcUd3TjVHNDhETkFod1BBL00wcWdsdXZBNFAxcG82ZktjRW5HZlNsSDNqamdVQUxqcU90SXZEa2M1bzV5Qm5BeHpuMXAzR0NjOVRRQXhzbGVCejA1cW5KeU0xWnVIMlc4allQQUlxbEZKNWtZUGZ2VFFFTDlUVENLbWNjMUdSbnJURU9qT1JUcWpYaHFsRkF4TVVVNmlrQXFjMDd2VEFjR25VQU96VGVnb3BhQUc5NlVIT2FEMXBPbEFCU1V0RkFCUlNDbG9BS0tEMHBPbEFDMEdsNjBVQUpRUFNpZ2V0QUFlS0tEelJRQStOOWg5dTlYVWJDcXc3ZWxaOVNKSVJ4bnZRQnFDVGRKbEc2aXJLbkE2NXlhenM3RzNEbGNkNmx0Wk54QUpQeW5QMXBBWENXRGdZeUQxTlEzTXJSYkNDQXVlU2FkZFhDUVJibTZub1BXc1dXWjVTZHpFZ25PUFNnQ1dTVkRJNVVFZzlLcjlhUUdqdlFBWTVxMmd4Z1ZCRU12bjBxMHZTczV2b2FRWFVHTlFTdGdWSzVxcE8xU2tVeXBNMldwcWlrUExWSWdyWkdUSkVIRlNkcWFCeFRoVEVGSlMwaG9BS0tYSEZKUUJvNHhUY2ZOVDJOTXpnMWdha281V214Y3hqMnlLRk5MRVBtY2UrYUFGTk14eWFrYW9qOTQwZ0ZmZ2oycTkxU3FER3JrTGJvaDlNVWdLa293eHBVNXAwdzV6VFlpRlBOVUlDVHVJN1UwaWxreUc0R2Mwb1BZOVBXbllMbFc2SHlBMDJ4eDlzaExkTjJEVXR3dTZNMVVqY3BJcmVoQnFrSm5VbmFvK1ZTUHJTUUY1TnhJQTV4eDF4UUh5b0o3OU9LZHVFS2t0akhYQTZrMVRJSTdsRkZyS3ZRN1R4WE9kNjZWV013WWxTdVJqQnJtM0cxeVBRMDBNY3BwOU1XbjBDQ2xwS1dnWkIwTGZXcS93REV3OTZzSGh6VmQrSkRVOVI5QjZWWlRwVmFNODRxekdNVkxLUklLY0tRQ25WQlFZb0gzcUtRZmVvR1BwUlRhVVVBVTcvN3pmU3FDakpyUXZ1cCtsVUVyV094azl4VDNwb09EU3IxTk5xaERqUlFEa1VVQUhTaWpHUlNkRFFBNEh2VHdhaitsT0RjMEFQSEF6MW9WaVQ5M05Kd1FldnZUMDRGQURnb0lIUDRWTXA0eDNIYW9sR0JVaTVCSlBUdFFBOGRPS2VLaXdlTUhCRlNBK29vQWQ3ZXRQcGdvSUpJSU9CM29Ba0JwVnpuSjYwMGMvMHBjOXVob0FjQnljODBvNFg1ZW9GSUNlVDBGS3BCSjlSN1VBT3dDT2VuU2dyd1JuZzlxWGtkdnBVc1d3QTc4Rmg2MEFNSEErWVk1NW9PRGtIcDJJb0xCbno5MEhxS1E4bk9QL3IwZ0ZVQU0yTWpKNHBlQ1FlK01jVW5jQUhOT1hyOVBhZ0JsMFZiSVJlVkdlZTNGTWhHMnlqNlpLL25VVjVLek8rMVFNam5iVWx1NThoU1JnaFIyb0FrQSs2V0o1R0FvN1VNTnAzSHA2VXE4a1k0NHpTYnUrZWM0NDlLQUFrRXNSa2tjWXgwb0dRb0dPVDJvMmtaeHdjVVlQWElBN21nQTZkVDc0b0lHT1Q5S0NmbUk3a2NjVUFBZ0VucDBwaUU1NHprQSsxS08vRkhKYnJrclNnZktCMm9BWXk1R09nOWFYcmtkczlmV25IR09SeFNaQko0T0FhQUdyZ1lSUmdkdmVnNEdUejZZOWFWVGtCaU1lM3BRQUF2WDlLQUZJeU9lQjB4U0ljc1F2WWNaNlVIN3hBSEFHUm51YVZSem5nWU9jZDZCaTloak9hYVJ1ejZnWXB4T1NXd0tSaXlyd0JqT2FBRVlZWUFrOU0wSEF5Y2QrS2FDV1FNUWNFODA0OGNMMTdmNDBnR2pPM09NRHQ5YVhPQ3ZVbnY2VUhnQURPUlNqZ1p4alA0MEFKdDI5c2dpbDZlNTZjVTBrSEhYYjArcHBXSkFBNmR2clFBMGpQek1BUUtCeno2ZEtVQUhHU1NCMnBRT09RTy9BcGdKNms5NlVFa1ovV2s5dXY0VTBuNXpoU0d3TVVBUFRrQXR4N2U5T0hBQUE1cGNZQkdlbE0zZktTUHBtZ0NqcWMyRkVhdDErOVZPMWZhKzNzYWRldVhsKzdqSDYxWFU0SUlwb1Jma0hlb2lPYW5CRWtZWWQ2aEk1cGlHRVlxVkRrVXdqMW9RNGFrTWx4UlMwVUFOTk9VNUZOTkE0TkFENlNscEtBQ2twUlNVQUZGRkZBQ1VvbzdVRHJRQUdrcGU5RkFBRGlsSjZZcEtLQUEwbExSM29BQlFhS0tBQ2lpaWdDYU9UY05yRTRxV04vS09Ea2dFRUhGVTZrTGd4NFBXa0E2NWxhV1ppM2JqSHBVSm9vcGdGS0tTbkFab0FtZ1hDNTlhblBBcHFEQzBFMWc5V2JMUkVibkFxbE0yVFZtWnNDcUxuSnFvb21URy94Vk1nNHFBVlBFZU1HdFRNZUtXaWlnQW9vb29BS0tLS0FMMzBvNmlrNzVGT3h3RFdCcUlEVWtmTW1leFhCcU1pbEIyc3BQWTBBTEkyR3lPZWFHNjU5YWMzY1k1cHJESW9BYTNJcXphWktISFkxWEhTcDdMaDJYMUZJQkoxSVBQclNLb3FhNkhIMEZRUnRqclRRaDdxTVZHeWdnWTdVNlI4OU9sTUo0cGlzTWtIN3Mxbk5XaWVWTlo4cS9PYWFCblNXcDgyelE4NUtqdlUyMGJ1b3JNMHA1VERIMDh0Y2c4ODFwSVYvaU5hRUQxSFBGYzdlcnN1NVJqSHpHdWlRanAxK2xZV3FEL1RXSTdnR2dDc3ZXbjFHdFNVQUxTMGxGQUVUL0FPcy9DcTh2RWxXWmZ2aW9KUDhBV0Q2VlBVcGJDSWVjR3JLY1ZYWGcxT25JNHFXTW5SZ2VLazIrbFZsTzArOVdFY1lxV1doY1UzYmc1cVVFVWpTQlc2WnBER1lwUU9LZTJDb2FtaGdLQUt0Nk9mcUt6MTZWcFh2T01lbFpvKzlXc2RqT1EwY0doaHpTZHpUanl0VVNOQnAxTnBhWWhhV2twYVFDZEtVVWxHUFNnQjROUFUrcHFJR25LY1VESjE0OThVOVR4VUt0VW9JeFFCS1BYRk83VkZ5UndjYzA5VHg3VUFQWDAvblR1U1QwcU1IazA0Y055ZXZOQWg0OTZVSFBKR01ldE56K0ZMeGttZ1kvazR4MjYwN1BVY2dVekdNWjYwNEhuQkhXZ0J6RGpHTXFPM3JTTTRMYkU0cFZQU2w3OWV2V2dCNjRJOWZlak8wQTlzWitsTk9kdVNNRE9hVWdja2dmTU1kYVFDcjh6S0J6eHlmU25mZEo1K1hPZmVtcjkxU1J0N0dnWXdNakF5YUFJNVVFY011QjJKK2xFREI0RlBBNkNsdW0yV2o1T0MzR0tiQ0ZRREhZNEdhQUpBUUNTY0FaeHhTbFJ1eUJ6M3gzcEFNbmR4MXBUeDBPVFFBRDdwQk9EbkZCQUp6azlmd3B4L1VjNHBvQUk2ZDZBQUx1UEk2SE5EdGpBUFFqZ1VwK1Vqb0tDUmtrZGNZRkFDRElPUjZZT0tOM1hPQmpta1U1WG44cWRqQkdCeWV0TVExaGxjblBGSDhMWk9RTzJPOUtveXJBbk9mU25EZ2dmbDdVQU1LbmJ5dk9NbWhSOG9KOU9SVGdUenhucmcrdEErNWpHTVlHT3dvR0I1T0NmcjcwS0R3ZUJ4U2pBYkhVZ2RRS0FDQWMvaFNBVEI3SEdlL29LUXJ6MUo1SFdsVVpIdU90SXcrWWtuajNvQVFZSUJIUWZxYUJ3QXZYbnZRUWVNWUJ6UWVHSFRrZFBXZ0JCalpucUJuSjlhVVo1eDk3MVBhbXRoZUZBd1RTZ2d1VjROQUNZejBQR2V0R0F4eWM0OUtVWjVKNEE2ZlNnTXA1NDQvU2dBeWRwSjV6MjlLVEp4a0NsL21SVFJuZ1pHZTVwZ09HZU9tZW4wb0hYQVBOS01CaUJ5ZXBOSUdCNEdlTzlJQVBCeU1udFRIR1J0SFE4YytsRWppUE80NDlCVmE0dVJHQUY1Wmh4N1V3TTY1QldabEl4ZzRxSVZOS3JPeFpqa25tb3FZaTFhU1l5aDc5S2ZLTUhOVll5UXdJNmlyWitkUWZXbUJIdXlQZWtQQnpTWTJtaWdDWkdERElwMVF4bkRZOWFtcEFJYVNsTklhQUhDaW05S2RRQVVsTFRUUUFVdEpSUUF2YWp2UlNVQUwzcFFLUVU3b00wQUpTSGlscERRQWg2MHRKUzBBSjBwYUtTZ0JhV2tGRkFCU1V0SWFBRXB3SEZOcHdvQUtraFhML0FFcU9yRUs0WFByVXlka1ZGWFpLS1l4cDVQRlF5SEFyRTFLMDdWVUp5YWxtYkpxSWMxdEZhR1VtS29xWkJURUZTZ2NWUkk3TkZGR0tBRnhTVXRGQUNVR2lpZ0M0TW5weFVvSHkwSmc5S2tDK3Bybk5pTXJTT3VWUDBxVTR6VFQxcGlHNXpodlVacHg2VXhQdTQ5Q1JUaFFBem9ha2dPSjEvS28zejFGT2pPMWdTS1FGeWNaRlV1aElxK3czSlZCeGhqUWhBZWFROUtCMG9OTUJPMVVwaGlTcm9xcmNERDAwRExta3RpTndSa0JzMXBqYVgzRFB0bXNuUzJ4STYvM2hXcXA1OURXcUlaTUJ0SFBHYXlkWFhFcU1PNjRyVUF6ampuMXFocTZmdWtiSFE0b0VaWXFRZEtqRlBYcFFBNmxwS0tCa2N2YjYxQkw5NWFzUy9kcUNmb3A5Nmw3alFncVpUakdPOVFpcEk2VEtKeDBwUUthdFBGUVVoeWtpakp6MG9GS1R4U0dLekVqbWtGQjZVb29BaHVod3RabjhkYWwxOXhheW00Yy9XdFltY2dQVTBxbkJvYjFwdFVRS1JnMFV2VVlwdE1CZWxMU1Vab0FXbEZKUlNBWHFLVVo3MGdOT0hTbUFvcDRibW1ZOUtPaDVwQVdBd3ArYXJxM3ZVaU56eWFBSmxPT1QwcDI0OXFqVXFPTWluaGxIVmhRQTlUa25JeFRscU1TSW96dUIrbEw1eWRWeWFBSk1uanZTb2VtN3ZVZjJoUWRvQnB5eXB4ay9wUU1remtZRlBCM0x4a0RGUStjdVFNRWorVk9NNjdzQUhHS0FKT2hIcDJweWdCUjZEcDdWRDU0QUoyblBha0Z5VHd5RWoxcEFXT29ZRmM1OWFjMjBZQks0Nm4wcXNia2xzQ0k0OWNpa2E1bUkrVkZVbmdrbk5BQ3pza2lvb0lKM2pGVEZSdXlBQitGVkZJalhwejFKcVV5TVNNZEtBSlEyV0sveXB5Z2dBNXo2NXFzWGNISUE1OTZHa2syNFhHZTJhQUxPY0hPY21sR0QzcXFqeUJRQ2NuR0RUdk1mT2VPbEFXTEI2Wk9NZTlCWUhqclZmZS9yU2IzSFZxTGhZbXlGYms5ZUtjR3lTTTlPOVZCSXpGa3owcFRsbHdTY2ZXaTRXTFlZWndNZTlJQ3ZQSXllOVZEMTcvblNiUm4zb3VPeGNCWGRuZHlQNVUxbVFxUXg0STlhcmJSajNvVUZUbkZGd3NXZk5VOXVoL1dqelJuSklCQXFJKzFRM0J3bTRmd25OSzRXTGJTcWc0T2U5UmlmTEhBT0JucDNwZzVGTGdVWEN4THYrVWNIUDBxS1RPVGdaNXp6U0VFNHdTTWU5SFh1ZnpvdUZoWGxKQjR4VUpaZ1YyREp6VWh6VEZJSnlLWUV4Y2s0NkNvMGxjdGtyd0NjblBXaHVSZ2pyU0VGZ29VWUFQV2dCN1N0emhCenhrMENSOTRJQTZkS01VbmZQU2k0V0hHWjhIQ2dINjFHelRNb0FZREhwM3AxTFN1RmlGa2taZ3pQa2ltdkNDNWtQT0IwcWZ0UlJjTEVJQzlsR0tjc01YL1BOZnlwRkdDVTlEeDlLa0ZBRFRFaFVyc1VaOXFySUNwS0h0VndWQmNyaGc0NzlhcE1USUhGUjFNM1Nvc2M4VlFoS25SdHkxQWVLZkdjSEhyU0Fsb05MU1VBSlNyU1VDZ0JhUTA3RkppZ0JCUlNpbElHS0FHbWdVdEowb0FjS0RTRHBSUUF0SjFOQk5KUUFVWm9vRkFDMGhwVFJRQURwUjNwT2xMUUFVbEdhS0FDbEZKUU90QURnTXNCVnRSZ1ZCQ3ZPYXNkcXltOWJHa0VOWTFXbWJBcWR6Z1ZTbmZyVXhXcFRLN25MVUtLYjFOU0lLM01TUkJVZ3BxaW5pZ0JlZ3BLVTlhUTBBR2FLUGFpZ0JPVFMwVVVBWDFPQ0tmdXFQMHBRYTV6WWZta1BXa296VEVBSHp1UG9hWEZJVGlVZTRJcDFJQnI0NlVoNlVzZzRCcEIwb0dYb2p1aEgwcXJPTVBtcDdVNWp4VWR3T0tFSXJpanRRS0tZQ0NvTGtkRFUvZW9yZ1pTbWhCcHo3THhEZ0hPUnpXMnFzZnVpdWVnYmJORzNvd3JvME9PNUgwclJiRU1VQTU1cXJxYTdyUmpqb1FhdUE4ZTlRM28zV2tnL3dCbk5NUnp3cVJhakhXbnJRQStpaWlnWTJYN2hxQ2IvVjFZY2ZLYXJ5Y3duNlZMR2hvNlZJbFFyMHFaS1RLUk90UEZSclVncUNod3BUMHBCUzBoaVVvb29GQUVkei9xMSt0WmJqNXpXcmNmNnI4YXk1UHZtdElHY2hCeU1VeWx6ZzByRHZWa0RjMDQ4ak5Ob0ZNQW9wMk0wMmdBelM5ZWxKU2lnQTVvNTlhWDYwdUtBQUErdE9JNHpubWtBcFQwcERBcm1qYjZrMDd0VHUzTkFDQlJTaEIzRktxOFZJQU1VQU5WQjM2R25oQUJ3S2NGcFFLUURRZzlLVmY5WVIyeFRnRFRjRVRZL3dCbWtNZmlsSEZLS0tBQUdselNVNmdZWm9vcGFBRWJsVFFEOG9QdFNpa2pHVkg1VWdIZFJtazYwNGppbTlLWUIwNG9GQTRJT00wOExpZ0JLQ0tleEczcGcrdEpqSW9Bcm41Wi93RGVXcHNmTG1vNVJpU00vd0MxaXBINjR6U0FqMjViSFA0VW1mMzN6SFA0ZDZjQnpVaXhnTm52NjB4Q1k1cGVDS0c2VW93T0tRdzdWSEl1OUNQVVZMUmppZ0NyQzVNU2h2VEJxZW9ZMTJ5eUpqdmtmalVvYmFNR2dCK1JnNUdjMDNGR2MwdEFDRWNVbU1jZHFjZWxJYUFHNDdaNHpTcWNNUjY4MG9wckRCQkhyVEVPNzBocDFOTkFDZEtYTkpRS0FEaWlpaWdCampEQnZ3Tk9GS1JsU0tZcHlPZXRBRWxJNjdrSW9GTFRFVXNiVHRQT0tZU1ZiSTRxMWVObVZYMmdBQURGUVRONWpsOW9YUFlkcW9SRXpibXlhYm5Cb1BORkFGaFczS0tXb29qZzQ5YWxvQVNnVXRGQUJtbEhOTnBhQUNsN1VlOUZBQ1VIclMwbmFnQlNhUVVsSFNnQTcwVVVZb0FLTzFIWGlqdlFBbzZVVWxMMW9BS1NscEtBRDZVVWxMUUFVVVpweURMWXBBV0lsSVVVOXFGR0JUWE5ZdmMyV3hGSzJBYW9UTmxzVmFuYkFxaVRscXVDSmt4VkZUb3RSb0tuVVZvWmk0cGFLS0FDaWdVVUFGRkthVEZBQlFldEZGQUYvd0JhUThVdjhWSTNTdWMyRnBDY1VMeUJTUHppbUljeDRWdlFpbjk2aUFKakswOUR1d2ZVVUFLL0swZ0l4anZVY3A1NVA0VTBFa2dMUllDN2Fua2luWEE0TlEyNTJ5am5xS3N6REsvaFNCbEh2UzhVaG83YzB3Q215aktHbE5PVUU1QTY0cGlNOGNINlYwVVRBeHFTZW96WFBNTU1SNzF0NmVpUGF4U1krWURHU2EwaVRJdDVBWEpOUnlTSTBiTG5PUWVsU3Npdjk1UWFWVVZNN1VVRTl3S29rNWc4R25yUzNDN0xoeDZNYWF0SUI0cGFTbG9HQjZHb0R6R1JVL2FvY2NFZTlKalJYVDd0VHBVQ2RLbVNwWlNKMXA0cGkwOFZCUThVdElLZFNHSlFLS0JRQTJmL0FGSit0WmN2M3pXck4vcWpXWEx5N1ZwRXprUkdsSHBTVVZvUUlSZzBVNGNqRk5QQm9BWE5MOTc2MDJsQndjaWdBeGlpbmZlNjBZeFFBWXB5OFVncGFReDJQU2tib1ByVGdLQ0J4bWdBRlBBcG9HS2tYazlLQUhZelNxdUtjQmlscEFGT0E0b0Fwd0hGQXdVVTF4bWRmZFRVaWdkNmEvOEFyNDhlaG9BWGJnMG1Lazc4MGhITklCdUtCUzlxTWMwaGhTanBSaWxHTVVBQW9qSXdSNkUwWnBvKzgzNTBBUFkrbEp6bm1rSnBRMUFDRUdsN1Uwdm5yUm50UU1sVSt0SFNvdzlPM0hGQWlPNC8xWlA5MGcxS1Z5YzlxamNrcVJqclJFeE1ha2VsQUVnR0J4U0ZzY1VwUGVtRWttZ0JjK3BwVllVekJwY1lQclFCSmtVdkcwODgweFdLT0dIVVVTT1hiY2NaUHBRQkUveTNDTjJZYlRVblhOUlQvd0NyM2QxSU5TS080NlVBQzhHbEpHYWFSUUJUQWR1RklUeHhSa1k2Wm9KeWVnSDBvRUF5M1FVNWtiYnlLVHpXQk9NZmdLTnhQZWdBQnpHUFdrcFIxSS9Ha1BGQUFhU2pOSm1tQTZpbTdxTTBnSFV3akQreDVwYVJqbGZjYzBBT3hUaFVlNzVlT2FlR3lNR21JWk1tK01qdlZQdFY4bXFjNkZKTTltcG9HUU1PYVEwNDAwMHhDQWtHckt0dVhOVnFraGJuYlFCTlJSUlFBbExtaWtOQUM5cUtLV2dBcHRLYVNnQmFRMHRIYkhlZ0JPdEZGSFdnQW9vb0ZBQ1U1VGc4MGxGQUNtazdVVWRxQUVvb29Jb0FBYzgxUENPOVFBVmJqWEFGVEoyUlVWcVNkQlVUbmlwR1BGVnBXNHJIYzFLMXcxUUtPYWRLZHhwWTFyZExReGIxSkVXcEJTQVU2bUlXazYwVW9vQU1VbExTVUFIZWxvN1VDZ0JLS1UwbEFHZ2VvTklhVTBFVnpteEdEZ2tVcmNzS2EvQkJwYzV4UUJLb3BFNFg2RWlsWHJTRTRaaDlEVEVLY0hxTTFHUmcrMVNBVUVEQjRwQU5pZjUxK3RYbjVTczlWNXo2Vm9BN282R0JSWWZNUlNkYWtrR0hwdmFtSVpUaFNVQ2dDbElNT2EyTkdiTm9WUDhBQ3hGWlZ3TVBXam9aL3dCYXYwTmFSSlpxZ2VsR0RpbDYvU25WWkJ6MnBwc3ZYeDM1cXN0WDlaWEZ5cmRpdFo2MGhrZ3BhUVV0QXdxSS9lTlRWQzMrc3BQWUVWaDFiNjFNbFJuL0FGalU5S2xsSW5XcEJVYTFJS2tvZU9sTFRSMHAxU01CMU5LS2FEeWFjS1lDUy82cHF5cGY5YWExWlA4QVZ0OUt5cHZ2MWNDSkVUREJvTk8rOFBla0k0cXlSS1hyeFNVbmVtSVVpaW5EQkdEU0VFVUFBcDRJUFdtQ25Da0E3R0tCUUtkaWdZVUhsbCt0R0tQNGxvQWsyZzBvVXEzdFNnVTRkYVRBY01ZcHdwQ3VPZjBwd0ZJWW9wY2lrNlVkVDFvQWNIOWFheC9leGtlOU95QlRXeHZqK3BvQWt5MmVsTkpKTlM5cWE2NG9BajNVbVQ5YVVpazcwREhETk9ISXFQT0tjaHlLQUZ4U0FmT1I2aW5Dam82bjJwQUkzU2t3ZHVhZXd5S2JqM3BnTklwZWxMaWtvQVRrODA4SFBla3h4UlFBL3RUSVNGQkE1d1RTOWFZbkVyajFBTklDVGRnOUtBS0RRQWFBQXJuamlrWVk1NC9DbElOQVVmeFVBRkpTZ2NVWW9BYVFHVXFlNHhUYmRzeERQVWNHcE1DbzRzQ2FSTzMzaFFBL1BOR2FkZ1VFRDFwZ0ptalBhajVmV2x5dEFoTWMwSGlsTEFVWm9BWjBZRS9Tbk1LVW5JSTlhVGtxQ2V1S0FHbW1tbmRxYWZTZ0JPOUxTVXBvQUJSd0RSU21nQmc0SlgwcHdOSXd3UVI5RFJUQWRuaW81bDN4bjFxUWNVZTFBak9OTk5UVEx0Y2lvVDFxaENVZE1HakZGQUZzY3FDRDFwYWhoUGFwcUFFb1BTanZRYUFBVXYxcHRLYUFBbWtvelFLQUNscEtYdlFBaEZIUVV2ZWtQV2dBb3BhU2dBb29GS2FBRW83VWxLRDJvQVNsSEpvNzBvb0FlaWZPQjZkYXNxTVZEQXZVMU1lQldNMmF3UXh6VlNkcXNTSGlxTXpaTkVVRW1SSHJVMFdDUHBVSTYxSkh3MmEyTWl4UlFDRDBvRkFCU2lpaWdBb0hYTkZMUUFoNjBvcEtYdlFBSHBTR2xwRHpRQmZvenhSMnBLNWpZWTQ0cGlub0trZnBVYWpMVXdKMW9ZWWRUNjVGSlRuL0FOV0Q2SE5NUTZtdWZscGFhMzNUU0FhT2xYYmM1aUZVRjZWYnREOHBIdlFNYk9QbXFFZGFzWEF4elZjVTBTSjNvRktlRFNVd0s5eU9RYXM2TSsyN0s5bVUxRGNESzBtbk50dll6Nm5GVkVUT2lCL0NuZHFiam1sRmFHWm1hMnVWaWY2aXNrVnRheU0ycW4wYXNVVWhrZ3BhYUtjS0FDbzVQdmlwS2JKOTBmV2hqUlZmaVUvU25yVFpmOWFQcFNyMXFDa1RyVWc2VkdsU0NwWlE4ZEtjS2FPbE9GSVlZd1RTOTZUTktPdEFDTjl4dnBXVlA5LzhLMW02RWUxWlUvM3FxQk1pRUhtbkhubW0wb09EeldoQWxKM3B4SGNVMFV4QzA4TjJOTm9wQU9LNDVwUUtGT0tlQUQwb0dJQlRsRkowcHkwQUtSVGNIY0Q2VklCUVJtUlI2MGdGQjVwNHBtMGlwRU82Z1lvWWRPYWZuRkppbG9BTTV4U2dFbmlnOUtjbElCdTMxcHI4UEgvdlZPUlVjcTh4RS8zeFFCS0R6eFRqZ2pqclNFWU9LVU1GSFNnQ0ZsNU9LYmlwWElxTUFab0dKaW5CU0RTOUtjR3oyb0FBT2FSK0N2MXBjNUZCWElIMUZJQ1VRTTY1eUFLZ2Y1SEFib2U5YUo2Q3FWMG9QUHBVcDZqc1I5ZWFRNG82RGc4VXVjOXFzUUFVVUNrTkFEdTNhbU44c3FONjVGUEZSeS9kQjlHRklDVmpTWnBNMGxBRHMwaDYwbEZBQXZHYVh2U0RyN1Vwb0FEVVRmTE1qZXZ5MUwvRFVVMytySkhWVHVvQWxPUlNab0pCQU5KUUFacFJ6U1o0b0J4UUF2ZW5LS2JTanJUQWMzRk5IVWcvVVU0ak5OUEJCOThVQ0VJcHBxUnFhYUFHNG9vb0ZBQlMwbmVsRkFDRVpVaWtCeU90T1BXbVl3NTlEelFBN05MM3BvcDNGTVJCZEowWWZqVlJxMGl1NVN0VUpGd1NLcENHcmdpbHdLWURnMDdOQUNqZzhWT3B5TTFXeWFsaGJzYUFKYVEwcHBLQUVwVFNVQTBBRkZGRkFCUjBvb29BS0tLVVVBRklhVTBVQUZGRkpRQVVZb29wQUtLTVlPS0FjSE5QalhjK2FHTkZpTUFJQlF4cGVncU56V0c1dHNRek5nR3FMbkpxeE8xVmVwcldLTTVNY29xVlJURUZUQWNWWkFxOFU2bTBvTkFEcU1VVVVBRktLU2xvQUtPbExSMm9BYlJSM282MEFYVlBHS0Qxb1B5bWpPUm11WTJHdHlhUlB2ZlNuN1RpbkxIaW1BM05Qem1NaWpiVGNGYVloeUhLQStvb1BRMGtmM1NQUTB0QUVLNXlSVnEwK1Z6NzFYSDN6VXNKeEt0SVpQY2ZkcXJWMllaU3FSR0tFSURTVXRKVkNHVERLVldoYlpNamVqQTFiY1pVMVJiZ21taE02bEpBL1RCK2xQSHZWRzIzRzJSa09NcjE2MUROUGRSSDVpTWRqV3R5Q3pxSzdySisrT2F3Qld5YmVaNEhMeUQ1aG5GWTQ0TklCNHAxTVduQ2dCYVpMOTM4YWZUWlB1R2daWG0rOHBvVWMwczNSVDcwZ3FDaVpPbFNyVVNWS3RTeWg0cHdwQUtXa01QNHdLWHZRS1h2UUFqZHF5N2tmTUsxVDArbFpkME1QVlEzSWtRQVpwRFNpa1BXdFNCVlByMHBTdU9SMHB0T1ZzZlNrTVNsQXB4VEl5dlNrRkFDZ1U4Q2tGUEFvQU92WDg2Y29vQXAyMGdVZ0ZVVW4vTFpmcFNnK3RJT1p4MytXZ0NVQ25BRHNPYVFkYWtIMG9HSmlsUE5CbzZta0FxZ0R0bW5FN3ZtQXhudFRSMHBSbWdBNXpUSmljSi92aXBTU0tpbVB5QS83US9uU0FuTklSa1VwcFFLWURDdEE5K21LY2V0TjI1UFdnWTFzbkZHTURBcDIya05BRGx3RjVvWWdqREU3ZStLQjBvSXl0SUNRVHVFN0hIZW9aR2VVODlQU2lQbFFNZFJVbUFLTEJjalZjRG1rUHJVaHB2ZWdBSU9lYVlRYzA4a1lGSEJGQURSVFpGTEl3OXFrTkpRQXhUbFFSM0ZPeDFwc0ErVGI2RWlwTVVoalFNVS9KSTVQU2dpa3BpREF6UmlqSE5IZWdCeXFNVXhnQ0NPeHAxSWV0QUVVUE1RejFYZzFLT2xRcDhzMGkrdnpWS0tRd3BNVXBvcGlERkpqdlM1cE9LQUhEM3ByQ2dkYVUwd0Q3eWcrdE1OUFR1UHhwcmNHZ1Eya0ZPSXowcHRBRHFLT0tLQUEwMStWM2R4elRxVHB4UUFEMUZHS2FuQUk5RHhUd1JqM3BpRjZkYXJYU2ZOdUhlclBVVXlSZHlFVXdNOGpucmlrcHo4bW1kNm9RWnBWSlVnMFk1cFFNMGdMSU9RQ0tLWkVlMVNVQU5ORkxTVUFGRkZBb0FLWEhGRkpRQVV0SlMwQUI2VWRxT2xCNjBnQ2tGTFJRQVVsSFdrb0FXckVBK1hKcUFESkFxMGd3QUtpYjBMaWhXTlF5SEFOU01lYXJUTnhVSkdqS3N6Wk5NVVVNY21ub0syUml4NkNwQlRRTVU0VXhCUlJTMEFPQjRwYVlwd2ZhbjQ3MEFHS1VVYzBVQUpSUzBncEFJUlJTKzlONzVwZ1huRzRERk9VWUFCb3pnQ2szWk5jNXNPWTRwalM0cHJaSjYweGxKNmRLZGhFb2xCRkwxSEZWMTVHS3RSakNZb3NBeVA3N0QxR2FrcVBHMlZmZmlwS0FJanhKVGdjRUgwcHNuREEwcFBGSUMrZVVxazMzalZ5SnQ4UVB0VldVWWMwSUJ1T0tTbEZKVkNFUFNxTWd3eHEvVlNkZm1KNEZOQWF1bXR1dEVIY2NWSThabXVWVGJsUWNrMVgwY2xrWlA5cXRLWVRZVkxmYW9PY3NlMWFJellQR1FPbkhTdWNrRzJWaDZIRmREQWx5dWZQa1YxN0hHTVZoWGhRM1VubG41YzhVMkJHS2NLWUtmU0FXa2Y3cHBhRDBOQXl2THpIU0xTdnpHMU5VOENvS0pscWRhZ1E4Vk9uU3BaUklLQ0tWYWRqSXBER1U3RkxzOXFlRUFvQWp4V1plZmUvR3RXUWdEanJXVmRjay9XcWp1VElyRHJTVTRkNlN0RE1URktLU2xGTUJ5c1ZQRlM0RDlPRFVReFVnWGpyU0dLRklPRFQxRkNuSXdha0F4OUtRRFFLa0E0b0FwVjVQU2dBSzU1cVBiaVRJUHpZNmUxVGdVeG95citaak9SaWdZaW5tcDFCSzhtbWJBNEJVNE5UcW94ZzBnR0JlS1hITk9wT0JTR0dQYWw1NG9IWHZTazRPS0FFSTllYWluQUVaUHVLa05Sei82bHFBSnlLT2xJT2xMa0RyUUEzdlIwelEyTThVbk5NQlJSMW9vM2UxQUNpbmJUaW1BWkZPNlVnRWp3Ri9FMHJIdlRFL2lIdlR1MUFoTWltWjk2RFRhQmo2VE5JRFFQZW1BNEhQV25FQ21rZE9hTTVGSUJrZkR1UGNHcERVWitXY0grOHRQSU5BQ0ZxTStsRkdPOUF3eWMwdUQxcEJtbEJ4UUlLY1I3MDA5TTBvT1JRQkRMOHN5TjYvS2FjS0xnWmhPT281RkNNQ00rdEFBU1JTcWNpbE9LYUNPMU1CbWNVb1ByU2x1VHdEU0RGQWh3NjFKVEJ6UzV3TVVBT1VyNW56Y0RHQWFSbEpGTU5TcWR5Zytvb0FpSEdRYVFqRk9ZYys5SjFITk1Cb05LYVR2eFNnOWpTQWNPZUtRaWxBb2JPUGFnQ054Z2c5anhTajBvUEtrVWdPUm1tQThHbHpUYVVVQ0trOGV4ajZIcFZmQnp4V2hPbTlQY1ZTbEcwNEhTcVFobTdIYW5BanRVWnBWSE5BRWdiQkJxZk9lYXIxSkUzR0tBSkRTVXRKUUFVdUtTbG9BS1EwdElhQUNpa296UUF0S09hU2xwQUdLVHBVZ3dSazFHeHlUUUFkcVVkS1NnVXdKSVZ5MmZTckhRVkhFTUw5YWthc1pPN05ZclFqYzFTbmFyVXJZRlVaU1NhY1VLVEdLTTFNZ3hVYUNwd0sxTXdwYUtLQUNscEtXZ0FweW5QRk5IWG1qdlFCSUtLYXB6VDZBRVBOSjNwYVNnQkRRQm1paWdDNlIxcVBPMXhVby9PbzVGejBCcm5OUnpEY01pb3lDT00wb2NwMTZVcGNFOEdtQWtZNDZWWUIycnpVRy9IM1ZwNEprR0tBQnVWM2VoelVsUFdNYmNlMVJwOTBldEFESmh4VWVjaXBwUHVHb1VIT2FRRjZ6YmRGajA0cGs0d3dORnFjT3cvR24zQW9BcmpyUWFCUWFZaE8xVmJnYzFhcUM0SEdhcEFXTkZNbjJoZ2dCNEJPVFd2SkpEYTVabk9lU0Z6bXVldFpYaWx5akZTZURpcDJKYkpKeWF0TWhva3ZOVGtuVmtRYkU3K3Bxakp0QkcxczhEUDFxT1JpR0lwSTZvUktLZUtqRlNEcFNBV2xOSlMwRElkdWNqMU5SdW5sdVV6bmFjVktmdkdvbk81eWZlcEdoeUhpcDBOVjA2MU90U3lpWlRVaUhtb2QyS2NHR2FReHp5TUpQNVZMdXdCbW9qelM5cVFDRmlTYW9YWXdUOWF2clZPK0dDYXFPNG1Vc2NVaHBlMUpXaG1IYW5BQ2s2OUtVVURIcWg3YzA4QTk2WXRUREpHTTBBS2dxVUxtbW90VEtPS1FFZUN2MHBWSXpVb0ZOZVB1S0FIWTRxZEZXU1BqOGFxcTJPRHhUb3BHVjVBQ2NjVW5xTmFEeW13NDlhY3ZKd0thdVNjOTZrQTcwa0RIT0FxNHhVZU0xSVNHR0RVZU1FNHBnQUhOS3c1cEY2ODA0L2VvR054VWM0L2NQOUttSTVwa3cvY3VQOWswZ0hKeWdQdFM0elNSY3hKOUtkMm9FSThZREFpbUVuZGpGUFk4VTBEbk9hb0E2aW1ra2ZlcDVIRk5ia1k2aWtBcW5qaWdDa1R2VDZBSTE0a1lmUTA0R21IL1hmVVV1S1F3cE1VWjVvNjB3QUNnRG5OSE9hQlFBNDlLQjBwb1BOT0hOQUVVdkRJZlJxbWFvNWx6RTJPd3pVZ081UWZVVWdHOVJTVXBCRkczMU5BQnhqcFNZcGNlbEczM0ZNQkJtbERVamRlVFFNZXRJQlQ4d0k5ZUtnaUpDN2U2bkZUWkdlOVE4Q2RoMlBOQUVtY2ltODlxVUZmUTB1OWY3dE1RMHFCOWFYQXB3Y1k0V2wzOGZkRkFETnZwVGdEUjVvOUtYZlFBRlQ2VXNYR1FmclNiejJOSUh4SXBQMG9BZElLakJ5YWxrd1Z5S2hIV2dCM0FwTURQTkI2MHA2QWcwd0ZvTklEUzBnR2tVMDhQajE1cDdkS2EzSzU3cnpRQXZhZ1VkY0VVVXhDOWVEVk9aY09SNlZjcXRkS1F3WWQ2YUFyWUg0MFVya0VBZ2ZXbVo1cGlING9SdHBwbWFNMEFXaDBwYWlpYkl4NlZLYUFFcFJSU1VBTFNVdEZBRGFLWEZHS1FDQ25VM05MVEFYclNIaWxGQjVwQUppbG94UlRBc1JINWFWbTRxdXJGZWxQYVhJNmMxazRzMFVrUlR0VlkxSzRKT1RVZU9hdUtzUzNjZWc0cDlOalBhblZSSVVVVVVBRkxSUlFBVXRKU2lnQTZVL05Nb0I1cEFQcHBwYzBnNjB3RHBTamlqdm1pa0JkK3Y1MEVFOTZLUXFleHJBMUdOZ2Y0MUN6ZWdxYVQ3dE1WZjNnQjlLYVlocXN6RWM4VmNqQVZjMVVLYk9hbmprK1VDZ1phQjRxQWNTTVBmTlNidU9LaUovZmZVVUNGYm9haUFxWTFHT3RJWkxBY1REM0ZUempJcXNoQWNIM3EzSnl0QUZQdlNtZ2ptanFLb1FocUdZWlExTWFZL0ttZ0NtbkRBKzlYa1JwRzJvQ1c5QlZIb2E2UzJWRmhYeTFDZ2pQRld0U1djMWR4dkRNeU91Q0tSZHUwRUhudVBTdHZWWUk3aVBJSUVxamozRllTcVZZcWUxVVNTaW5yMHFNVktneXBPUngyOWFCaWlscEtXZ1JFMzN6VVIrOGFtZjc0cUEvZk5TOXlrT1U4MU1wcUFWTXB3dWFsbEVnNjB2UTFHQ1RUdnZZSHBTR1RLZldsSFEwd0hvYWV2ZWdBSFdxdCtPdFdpY1ZXdnZYMnBvVE0vUEZKVHNVM29hME13SFdwRjU2aW1xQVRVaXFSUU1lcUtlaHdmZXBWWEhGTlFWT2kwZ0JWcVZSeFNBWXA0R0tReFFLY1Z5S1FkYUpKUExYT00wN2lzTVpNOWFoQTJNMk9lZWFUelN4T0trdGp2bGtHTy9QNVVpbXJEb1NHNlZQU0JGVnlSM0ZHS0JDb1FyWjdVT01IMk5KaW5kVXhRQXdjbWpQTktCelI2MGhpVWtnekczMHBUU01ma1Awb0VOaFA3bFA5MFZJS2p0em1CRDdWSlFBVW0yazNIdlM1NHBnS1JUZG9CcGUyYVFuajNvQVhGSmcwbzRwYzBBUWtmdkZwNEdhUjhEYWZjVTRVZ0drWU5OelQyeFRPL0hTbUE2TWJtNUhGV0FGeGdxTWZTcXlrcWNpckViYitDT2FsbElxM0MrVEl1MzdyZFBhbnJtblhZQlJSM0RBaW0rbE5iQ1k1dVFSNjFGQ1NZVkhweFV1T2FoaitWNUY5R3pRQTQ1cDNha1BXZ0U0b1FCdUlGR2Z5cGVBT2VhRDA0NlV3R0drQjdVdElQV2tNVWptb3BmbGRHL0NwZ2FaT29hSnNkUnlLQkRhVEl6U2dncXBCNjBCY21pNEQ4anRTcVFSU0ZhVlZ3RFRFTjJpa0pLaW40NHBqQ2tNUU5Tdm5vZUtiU25wUUJQbmVtZldvT2h6VWtMY0ZUMjVwSkJocVloRFJTQThVVUFMakZMbWt6a0NpZ0IxSW81eFJSbnZRQXo3bVVQYnA5S1VVNlVjcS80R20weEFUanNham5jZVVjZzFKVFpGRG9WUGVnQ2lQbUJINDFIVGx5ajg5UWFkSU1IUFk4MVFobEZLS01VQUxHMjFzbXJJT1JWYkZUUm41Y1VBU1VsS2FTZ0FvSFdpZ2V0QUMwbExSUUEwMHRJYUtRRGhRRHpTZHFLQUhkQjlhYWV0TG1rTk1Bb29GQm9BUnFpeHpVcDVwTVVBTkFwK01pa0ZMUUFVVVVkNkFDaWlpZ0JSUlJSU0FXa29vb0FVSE5MVGFkbjBwZ0ZKUzBsQUgvLzJRPT0=",
          "Timestamp last change": "20151002060429",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060429",
          "Display rule": "0",
          "Sequence#": 980,
          "Text ID": [
            {
              "ID": 520,
              "ENG": "Take picture of the pipe layout",
              "NOR": "Ta bilde av røroplegg",
              "POL": "zrob zdiecie podlaczenia rur"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:980:SVAR<>¤¤ and besvart=1",
          "Sequence#": 981,
          "Text ID": [
            {
              "ID": 520,
              "ENG": "Take picture of the pipe layout",
              "NOR": "Ta bilde av røroplegg",
              "POL": "zrob zdiecie podlaczenia rur"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:981:SVAR<>¤¤ and besvart=1",
          "Sequence#": 982,
          "Text ID": [
            {
              "ID": 520,
              "ENG": "Take picture of the pipe layout",
              "NOR": "Ta bilde av røroplegg",
              "POL": "zrob zdiecie podlaczenia rur"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:982:SVAR<>¤¤ and besvart=1",
          "Sequence#": 983,
          "Text ID": [
            {
              "ID": 520,
              "ENG": "Take picture of the pipe layout",
              "NOR": "Ta bilde av røroplegg",
              "POL": "zrob zdiecie podlaczenia rur"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:983:SVAR<>¤¤ and besvart=1",
          "Sequence#": 984,
          "Text ID": [
            {
              "ID": 520,
              "ENG": "Take picture of the pipe layout",
              "NOR": "Ta bilde av røroplegg",
              "POL": "zrob zdiecie podlaczenia rur"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 1000,
          "Text ID": [
            {
              "ID": 39,
              "ENG": "Remote Control Operation tested and shown to customer, customer explained how the machine behaves with automatic defrost. Demonstrate to customers how to keep the filter clean and replace the fine filter",
              "NOR": "Fjernkontrolloperasjon testet og vist kunde, forklart kunde hvordan maskin oppfører seg ved automatisk avriming. Demonstrert for kunde hvordan man holder filter rene og bytter finfilter",
              "POL": "Sprawdz funkcje pilota sterowania. Wytlumacz klientowi dzialanie pilota sterowania i konserwacji jednostki wewnetrznej - czyszczenie filtrow."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:1000:SVAR=¤Terrassemarkise¤",
          "Sequence#": 1050,
          "Text ID": [
            {
              "ID": 707,
              "ENG": " ",
              "NOR": "Type markise",
              "POL": " "
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "5",
          "Timestamp last change": "20151002060450",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060450",
          "Display rule": "0",
          "Sequence#": 1100,
          "Text ID": [
            {
              "ID": 41,
              "ENG": "Record the total number of meters of piping and wiring package",
              "NOR": "Notér totalt antall meter rør og ledningspakke :",
              "POL": "Wpisz całkowitą długość zamontowanej rury i przewodów."
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060454",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060454",
          "Display rule": "0",
          "Sequence#": 1150,
          "Text ID": [
            {
              "ID": 40,
              "ENG": "Any additional refrigerant refill, see instal. manual. for # grams / meter. Record the number of grams:",
              "NOR": "Evt. ekstra kjølemedie påfylt, se mont. anv. for ant. gram/meter. Notér antall gram:",
              "POL": "Wpisz ilosc ewentualnie dodanego gazu freon jesli bylo to konieczne zapisz ilosc gram."
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "1",
          "Timestamp last change": "20151002060459",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060459",
          "Display rule": "SEKVENS::=:50500:SVAR=¤1¤",
          "Sequence#": 1190,
          "Text ID": [
            {
              "ID": 59,
              "ENG": "Low brick wall bracket",
              "NOR": "Lav mur veggbrakett",
              "POL": "Metalowe uchwyty do ściany"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060503",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060503",
          "Display rule": "SEKVENS::=:50500:SVAR=¤1¤",
          "Sequence#": 1195,
          "Text ID": [
            {
              "ID": 60,
              "ENG": "Damperblocks",
              "NOR": "Spesialdempere",
              "POL": "Plastikowe stopy"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "1",
          "Timestamp last change": "20151002060514",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060514",
          "Display rule": "0",
          "Sequence#": 2400,
          "Text ID": [
            {
              "ID": 53,
              "ENG": "Service agreement",
              "NOR": "Service avtale",
              "POL": "Powiadomienie o serwisie"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060518",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060518",
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 2500,
          "Text ID": [
            {
              "ID": 54,
              "ENG": "Filter agreement",
              "NOR": "Filter avtale",
              "POL": "Dodatkowe filtry"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 4395,
          "Text ID": [
            {
              "ID": 684,
              "ENG": "On w66/82, set gasstemp % to 10%.",
              "NOR": "På W66/82, sett gasstemp % til 10%.",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5000,
          "Text ID": [
            {
              "ID": 533,
              "ENG": "na",
              "NOR": "VVS installatør:",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5010,
          "Text ID": [
            {
              "ID": 534,
              "ENG": "na",
              "NOR": "Elektroinstallatør:",
              "POL": "Elektroinstalator"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5020,
          "Text ID": [
            {
              "ID": 535,
              "ENG": "na",
              "NOR": "VV bereder type og størrelse (eksmpel EP2-200)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5030,
          "Text ID": [
            {
              "ID": 536,
              "ENG": "na",
              "NOR": "Elkolbe VVB kW ",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5040,
          "Text ID": [
            {
              "ID": 537,
              "ENG": "na",
              "NOR": "Elkolbe VVB styrt av VP?",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:147:SVAR=¤Kompakt¤",
          "Sequence#": 5050,
          "Text ID": [
            {
              "ID": 516,
              "ENG": "na",
              "NOR": "Varmeveksler montert loddrett med gassrør øverst og væskerør til kjølemediet nederst.",
              "POL": "wymiennik ciepla zamontowano pionowo z rurami czynnika chlodniczego w dolnej czesci"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5060,
          "Text ID": [
            {
              "ID": 517,
              "ENG": "na",
              "NOR": "Plasser eventuell utetemp. sensor slik at den ikke påvirkes av direkte sollys eller luft fra utedel. Ta bilde som viser plassering utedel og ute sensor.  ",
              "POL": "czujnik temperatury umiesc w takim miejscu aby nie byl narazony na bezpośrednie działanie promieni słonecznych lub innych zrodel ciepla. Zrób zdjęcie pokazujące umiejscowienie jednostki zewnętrznej i czujnika zewnętrznego."
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:147:SVAR=¤Kompakt¤",
          "Sequence#": 5070,
          "Text ID": [
            {
              "ID": 519,
              "ENG": "na",
              "NOR": "Temp sensorer plassert 15 til 20 cm fra varmeveksler, alutapet til kopperrør og dekket av isolasjon utenpå.",
              "POL": "sesor temperatury zamontowany 15-20cm od rury czynnika chlodzacego znajdujacego sie w izolacji termicznej"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5090,
          "Text ID": [
            {
              "ID": 521,
              "ENG": "na",
              "NOR": "Kontroller at vannflow gjennom varmeveklser er uavhengig av termostater  / shunter o.l slik at der alltid er flow i systemet",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5100,
          "Text ID": [
            {
              "ID": 523,
              "ENG": "na",
              "NOR": "Noter flow i l/min ved drift (flow skal være min. 2 og maks 5 l/min/kW nominell  effekt installert Det betyr at W66 skal være mellom 9- 20 l/min og W82 skal være mellom 12-30 l/min)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5110,
          "Text ID": [
            {
              "ID": 524,
              "ENG": "na",
              "NOR": "Verifiser at der er nok expansjons kapasitet, Juster inn trykk i expansjonskar til 1,0Bar, fyll anlegget med vann, og luft systemet grundig",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:147:SVAR=¤Kompakt¤",
          "Sequence#": 5115,
          "Text ID": [
            {
              "ID": 538,
              "ENG": "na",
              "NOR": "Kontroller at vannflow går i riktig retning (Flow skal ut fra veksler på toppen av veksler der hvor varm gass kommer inn)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5120,
          "Text ID": [
            {
              "ID": 525,
              "ENG": "na",
              "NOR": "Still in system trykk til 1,0bar",
              "POL": "wprowadzono w system cisnienie do 1,0 Bar"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5130,
          "Text ID": [
            {
              "ID": 526,
              "ENG": "na",
              "NOR": "Sjekk at mikroboble utskiller / luftepotte er montert og opperativ",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5140,
          "Text ID": [
            {
              "ID": 527,
              "ENG": "na",
              "NOR": "Start varmepumpen og still inn alle parameter etter anvisninger i installasjonsmanual",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5150,
          "Text ID": [
            {
              "ID": 528,
              "ENG": "na",
              "NOR": "Kjør pumpen på max effekt (eventuelt ved å øke setpunkt 10 grader over returvann temperatur under testen). Ta bilde av status menyen som viser avgitt maks effekt og alle temperaturer",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5160,
          "Text ID": [
            {
              "ID": 530,
              "ENG": "na",
              "NOR": "Ta bilde av service meny, og instillinger",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5170,
          "Text ID": [
            {
              "ID": 531,
              "ENG": "na",
              "NOR": "Ta bilde inni innedel (åpen dør / lokk)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Vann¤",
          "Sequence#": 5180,
          "Text ID": [
            {
              "ID": 532,
              "ENG": "na",
              "NOR": "Forklart kunde bruken av anlegget og overlevert bruksanvisning",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "R0013120",
          "Timestamp last change": "20151002060111",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060111",
          "Display rule": "0",
          "Sequence#": 7040,
          "Text ID": [
            {
              "ID": 58,
              "ENG": "Serial number outdoor unit",
              "NOR": "Serienr utedel",
              "POL": "Numer seryjny jednostki zewnętrznej"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060557",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060557",
          "Display rule": "0",
          "Sequence#": 8800,
          "Text ID": [
            {
              "ID": 151,
              "ENG": "Do we need to go back to customer ? Note what needs done. ",
              "NOR": "Trenger vi en tur til? Spesifiser i notat felt hva som gjenstår.",
              "POL": "Jezeli serwis zajmuje wiecej czasu niz go masz, zapisz co musisz zrobic i ile czasu Ci to zajmie."
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Trevegg",
          "Timestamp last change": "20151002060553",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060553",
          "Display rule": "SEKVENS::=:145:SVAR=¤Sol Skjerming¤",
          "Sequence#": 20050,
          "Text ID": [
            {
              "ID": 82,
              "ENG": "Sealing pipe",
              "NOR": "Rørgjennomføring",
              "POL": "Uszczelnienie rur"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060602",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060602",
          "Display rule": "SEKVENS::=:145:SVAR<>¤Luft/Luft¤",
          "Sequence#": 21210,
          "Text ID": [
            {
              "ID": 539,
              "ENG": "Power connectet to indoor unit?",
              "NOR": "Strøm på innedel?",
              "POL": "zasilanie pradu podlaczone do jednostki wewnetrznej ?"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060605",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060605",
          "Display rule": "SEKVENS::=:145:(SVAR=¤Luft/Vann¤ OR SVAR=¤Væske/Vann¤ OR SVAR=¤VP Ventilasjon¤ OR SVAR=¤Sol Skjerming¤)",
          "Sequence#": 21220,
          "Text ID": [
            {
              "ID": 607,
              "ENG": "Heat pump shelter",
              "NOR": "Varmepumpehus",
              "POL": "Schronisko pompa ciepła"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": " Plus take down old pump ",
          "Timestamp last change": "20151002060624",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060624",
          "Display rule": "0",
          "Sequence#": 50000,
          "Text ID": [
            {
              "ID": 68,
              "ENG": "Enter notes here..",
              "NOR": "Skriv notater her..",
              "POL": "Wpisz notatki..."
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Note"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060627",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060627",
          "Display rule": "0",
          "Sequence#": 59000,
          "Text ID": [
            {
              "ID": 74,
              "ENG": "Agreed price",
              "NOR": "Avtalt pris",
              "POL": "Uzgodniona cena"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "Faktura på E-post",
          "Timestamp last change": "20151002060632",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060632",
          "Display rule": "0",
          "Sequence#": 60000,
          "Text ID": [
            {
              "ID": 85,
              "ENG": "Payment",
              "NOR": "Betaling",
              "POL": "Zapłata"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SQL::update sjekklistesvar set Gyldigsvar=( select case when b.svar=¤9949011¤ then (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);40 mnd rentefritt (kr 649 + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) when b.svar=¤9948998¤ then (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);40 mnd rentefritt (kr 699 + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) when b.svar=¤9948913¤ then (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);40 mnd rentefritt (kr 649 + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) when b.svar=¤9948917¤ then (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);40 mnd rentefritt (kr 699 + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) when b.svar=¤9948903¤ then (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);40 mnd rentefritt (kr 399 + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) else (¤24 mnd rentefritt (kr ¤)||cast(cast(cast(c.svar as float)/24 as int) as nvarchar)||(¤ + kr 45 i gebyr pr mnd);Faktura, fri mnd+30dager¤) end from sjekklistesvar b,sjekklistesvar c where b.ordrenr=sjekklistesvar.ordrenr and b.linjenr=sjekklistesvar.linjenr and b.sekvensnr=¤155¤ and c.ordrenr=sjekklistesvar.ordrenr and c.linjenr=sjekklistesvar.linjenr and c.sekvensnr=¤59000¤) where ordrenr=? and (linjenr=? or linjenr=linjenr) and sekvensnr=60020  and egenskap1 like (¤%salg%¤)",
          "Sequence#": 60010,
          "Text ID": [
            {
              "ID": 91,
              "ENG": "Requested credit limit",
              "NOR": "Ønsket kredittgrense",
              "POL": "Uzgodnienie kredytu"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤",
          "Sequence#": 60020,
          "Text ID": [
            {
              "ID": 95,
              "ENG": "Deferral",
              "NOR": "Betalingsutsettelse",
              "POL": "Odroczenie płatnośc"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤",
          "Sequence#": 60020,
          "Text ID": [
            {
              "ID": 95,
              "ENG": "Deferral",
              "NOR": "Betalingsutsettelse",
              "POL": "Odroczenie płatnośc"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "INVSEKVENS::=:60000:SVAR=¤Debetkort¤",
          "Sequence#": 60050,
          "Text ID": [
            {
              "ID": 355,
              "ENG": "Write the customers name on the receipt and take a picture if it",
              "NOR": "Skriv kundens for og etternavn på avstemmingsrapport (kjøpskvittering) og ta bilde av rapporten",
              "POL": "zrob zdiecie faktury lub paragonu zakupu urzadzenia zapisz imie i nazwisko "
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤",
          "Sequence#": 60100,
          "Text ID": [
            {
              "ID": 91,
              "ENG": "Requested credit limit",
              "NOR": "Ønsket kredittgrense",
              "POL": "Uzgodnienie kredytu"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤AC Delbetaling¤",
          "Sequence#": 60102,
          "Text ID": [
            {
              "ID": 388,
              "ENG": "na",
              "NOR": "Beløp pr måned",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SQL::update sjekklistesvar set Gyldigsvar=(select case when abs(svar)=0 then ¤NA;¤ else (¤6 mnd, kr ¤)||cast(cast(cast(b.svar as float)*0.18324 as int) as nvarchar)||¤/mnd, totalt kr ¤||cast(cast(cast(b.svar as float)*0.18324*6 as int) as nvarchar)||¤;12 mnd, kr ¤||cast(cast(cast(b.svar as float)*0.09908 as int) as nvarchar)||¤/mnd, totalt kr ¤||cast(cast(cast(b.svar as float)*0.09908*12 as int) as nvarchar)||¤;24 mnd, kr ¤||cast(cast(cast(b.svar as float)*0.05659 as int) as nvarchar)||¤/mnd, totalt kr ¤||cast(cast(cast(b.svar as float)*0.05659*24 as int) as nvarchar)||¤;36 mnd, kr ¤||cast(cast(cast(b.svar as float)*0.04187 as int) as nvarchar)||¤/mnd, totalt kr ¤||cast(cast(cast(b.svar as float)*0.04187*36 as int) as nvarchar) end from sjekklistesvar b where b.ordrenr=sjekklistesvar.ordrenr and b.linjenr=sjekklistesvar.linjenr and b.sekvensnr=¤59000¤) where ordrenr=? and linjenr=? and sekvensnr=60102",
          "Sequence#": 60105,
          "Text ID": [
            {
              "ID": 91,
              "ENG": "Requested credit limit",
              "NOR": "Ønsket kredittgrense",
              "POL": "Uzgodnienie kredytu"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤AC Delbetaling¤",
          "Sequence#": 60150,
          "Text ID": [
            {
              "ID": 389,
              "ENG": "na",
              "NOR": "Ønsket første forfallsdato (senest lønningsdato i neste måned)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Date"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤  AND SVAR<>¤Resurs Bank¤",
          "Sequence#": 60200,
          "Text ID": [
            {
              "ID": 92,
              "ENG": "Social security number",
              "NOR": "Fødselsnr",
              "POL": "Person numer,,,,Nr Pesel"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤",
          "Sequence#": 60300,
          "Text ID": [
            {
              "ID": 93,
              "ENG": "Working",
              "NOR": "Arbeidsforhold",
              "POL": "Praca... wykonywana, miejsce pracy"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤",
          "Sequence#": 60300,
          "Text ID": [
            {
              "ID": 619,
              "ENG": "Fast ansatt",
              "NOR": "Fast ansatt",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤",
          "Sequence#": 60320,
          "Text ID": [
            {
              "ID": 620,
              "ENG": "Ansatt siden",
              "NOR": "Ansatt siden",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Date"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤",
          "Sequence#": 60400,
          "Text ID": [
            {
              "ID": 94,
              "ENG": "Housing Conditions",
              "NOR": "Boligforhold",
              "POL": "Warunki mieszkaniowe"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤  AND SVAR<>¤Resurs Bank¤",
          "Sequence#": 60600,
          "Text ID": [
            {
              "ID": 96,
              "ENG": "ID type",
              "NOR": "Legitimasjons type",
              "POL": "Rodzaj dokumentu tożsamości"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "DropDown"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤  AND SVAR<>¤Resurs Bank¤",
          "Sequence#": 60700,
          "Text ID": [
            {
              "ID": 97,
              "ENG": "Photo of ID",
              "NOR": "Bilde av legitimasjon",
              "POL": "Zdięcie dokumentu tożsamości"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ AND SVAR<>¤AC Delbetaling¤  AND SVAR<>¤Resurs Bank¤",
          "Sequence#": 60800,
          "Text ID": [
            {
              "ID": 100,
              "ENG": "ID checked and approved",
              "NOR": "Legitimasjon kontrollert og godkjent av ( navn på selger ), lesbar underskrift",
              "POL": "Sprawdzenie dokumentu tożsamości klienta"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤",
          "Sequence#": 60999,
          "Text ID": [
            {
              "ID": 616,
              "ENG": "Kontokreditten gjelder for kjøp i tilknyttede utsalgssteder i henhold til de kjøpsvilkår som gjelder for brukerstedet. For avtalen gjelder også Alminnelige Vilkår for privat kontokreditt. Resurs Bank tilbyr en gunstig spesialkonto-ordning med særlig fordelaktige renter og gebyrer, under forutsetning av at korrekt betaling (både med hensyn til betalingstidspunkt og beløp) skjer i henhold til spesifisert Spesialkontoplaner, se vedlagt Standardiserte Europeiske opplysninger om Forbrukerkreditt. Dersom betaling ikke skjer i henhold til Spesialkontoplaner, gjelder avtalens generelle rente- og gebyrbestemmelser (Basiskonto). Renter belastes fra og med kjøpsdato. Ved inngåelse av kundeforhold i Resurs Bank inngår du i konsernets kunderegister. Innhentet personlige opplysninger kan benyttes og distribueres for markedsføring. Jeg er innforstått med at jeg ved å henvende meg til Resurs Bank kan reservere meg mot at mine personopplysninger brukes til markedsføring eller videreformidles til tredjemenn til dette formålet. Jeg erklærer at de opplysninger som er oppgitt i søknadsskjemaet er korrekte og fullstendige, og gir tillatelse i at det foretas vanlig kredittvurdering og kontroll. Jeg godkjenner og bekrefter ved min underskrift at jeg skriftlig eller på www.resursbank.no har mottatt kopier av, lest og godkjent gjeldende Standardiserte Europeiske opplysninger om Forbrukerkreditt med gjeldende Spesialkontovilkår samt Alminnelige Vilkår for privat kontokreditt \"RBAV02NORGE\" eller senere. Jeg bekrefter at jeg har lest disse grundig og forplikter meg til å følge dem dersom søkt kontokreditt blir innvilget.",
              "NOR": "Kontokreditten gjelder for kjøp i tilknyttede utsalgssteder i henhold til de kjøpsvilkår som gjelder for brukerstedet. For avtalen gjelder også Alminnelige Vilkår for privat kontokreditt. Resurs Bank tilbyr en gunstig spesialkonto-ordning med særlig fordelaktige renter og gebyrer, under forutsetning av at korrekt betaling (både med hensyn til betalingstidspunkt og beløp) skjer i henhold til spesifisert Spesialkontoplaner, se vedlagt Standardiserte Europeiske opplysninger om Forbrukerkreditt. Dersom betaling ikke skjer i henhold til Spesialkontoplaner, gjelder avtalens generelle rente- og gebyrbestemmelser (Basiskonto). Renter belastes fra og med kjøpsdato. Ved inngåelse av kundeforhold i Resurs Bank inngår du i konsernets kunderegister. Innhentet personlige opplysninger kan benyttes og distribueres for markedsføring. Jeg er innforstått med at jeg ved å henvende meg til Resurs Bank kan reservere meg mot at mine personopplysninger brukes til markedsføring eller videreformidles til tredjemenn til dette formålet. Jeg erklærer at de opplysninger som er oppgitt i søknadsskjemaet er korrekte og fullstendige, og gir tillatelse i at det foretas vanlig kredittvurdering og kontroll. Jeg godkjenner og bekrefter ved min underskrift at jeg skriftlig eller på www.resursbank.no har mottatt kopier av, lest og godkjent gjeldende Standardiserte Europeiske opplysninger om Forbrukerkreditt med gjeldende Spesialkontovilkår samt Alminnelige Vilkår for privat kontokreditt \"RBAV02NORGE\" eller senere. Jeg bekrefter at jeg har lest disse grundig og forplikter meg til å følge dem dersom søkt kontokreditt blir innvilget.",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤AC Delbetaling¤",
          "Sequence#": 61000,
          "Text ID": [
            {
              "ID": 387,
              "ENG": "na",
              "NOR": "Jeg søker om delbetaling og forsikrer at de opplysninger som er gitt i søknaden er korrekte.  Jeg aksepterer de gjeldene betalingsvilkår som jeg har lest og forplikter meg til å overholde. Jeg godkjenner at arbeidsgiver og andre offentlige kilder kan bli kontaktet for referanser. Sted, dato og signatur",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤",
          "Sequence#": 61000,
          "Text ID": [
            {
              "ID": 102,
              "ENG": "na",
              "NOR": "Jeg søker om Cresco Access og forsikrer om at de opplysninger som er gitt i søknaden er korrekte. Jeg aksepterer de gjeldene kontoregler/betalingsvilkår som jeg har lest og forplikter meg til å overholde. Jeg godkjenner at arbeidsgiver og andre offentlige kilder kan bli kontaktet for referanser, herunder andre DNB-eide selskaper. Sted, dato og signatur",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤",
          "Sequence#": 61000,
          "Text ID": [
            {
              "ID": 7,
              "ENG": "Signature customer",
              "NOR": "Signatur Kunde",
              "POL": "Podpis nabywcy (kupujacego)"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤AC Delbetaling¤",
          "Sequence#": 61020,
          "Text ID": [
            {
              "ID": 390,
              "ENG": "na",
              "NOR": "Bilde av signert delbetalingsavtale dokument (Beløper og signaturer må være leselige)",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Picture"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤ and  SVAR<>¤AC Delbetaling¤",
          "Sequence#": 61049,
          "Text ID": [
            {
              "ID": 626,
              "ENG": "na",
              "NOR": "Kreditt sjekk <a href=\"#\" onmousedown=\"javascript: {window.open(''http://www.resurs.se/norge'');}\">Resurs Bank</a>",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Info"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Cresco¤ and SVAR<>¤AC Delbetaling¤ and SVAR<>¤Resurs Bank¤",
          "Sequence#": 61050,
          "Text ID": [
            {
              "ID": 365,
              "ENG": "na",
              "NOR": "Ble kredittsøknad godkjent?",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 0,
          "Type": "Check"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": null,
          "Timestamp last change": "0",
          "Last change by": null,
          "Display rule": "SEKVENS::=:60000:SVAR<>¤Resurs Bank¤ ",
          "Sequence#": 61055,
          "Text ID": [
            {
              "ID": 627,
              "ENG": "na",
              "NOR": "Kontonr Resurs Bank",
              "POL": "na"
            }
          ],
          "Helptext": null,
          "Required": 1,
          "Type": "Value"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "W3sibHgiOjEwNSwibHkiOjQ0LCJteCI6MTA1LCJteSI6NDN9LHsibHgiOjEwNSwibHkiOjQyLCJteCI6MTA1LCJteSI6NDR9LHsibHgiOjEwNCwibHkiOjQ3LCJteCI6MTA1LCJteSI6NDJ9LHsibHgiOjEwMywibHkiOjUzLCJteCI6MTA0LCJteSI6NDd9LHsibHgiOjEwMSwibHkiOjYxLCJteCI6MTAzLCJteSI6NTN9LHsibHgiOjk5LCJseSI6NjgsIm14IjoxMDEsIm15Ijo2MX0seyJseCI6OTksImx5Ijo3NCwibXgiOjk5LCJteSI6Njh9LHsibHgiOjk4LCJseSI6NzksIm14Ijo5OSwibXkiOjc0fSx7Imx4Ijo2MSwibHkiOjU3LCJteCI6NjEsIm15Ijo1Nn0seyJseCI6NzQsImx5Ijo0MSwibXgiOjYxLCJteSI6NTd9LHsibHgiOjg1LCJseSI6MzQsIm14Ijo3NCwibXkiOjQxfSx7Imx4Ijo5NSwibHkiOjMwLCJteCI6ODUsIm15IjozNH0seyJseCI6MTA4LCJseSI6MjQsIm14Ijo5NSwibXkiOjMwfSx7Imx4IjoxMjEsImx5IjoyMCwibXgiOjEwOCwibXkiOjI0fSx7Imx4IjoxMzUsImx5IjoxNywibXgiOjEyMSwibXkiOjIwfSx7Imx4IjoxNTgsImx5IjoyMywibXgiOjE1OCwibXkiOjIyfSx7Imx4IjoxNTgsImx5IjozMSwibXgiOjE1OCwibXkiOjIzfSx7Imx4IjoxNTgsImx5Ijo0MSwibXgiOjE1OCwibXkiOjMxfSx7Imx4IjoxNTgsImx5Ijo1MCwibXgiOjE1OCwibXkiOjQxfSx7Imx4IjoxNTgsImx5Ijo2NSwibXgiOjE1OCwibXkiOjUwfSx7Imx4IjoxNTksImx5Ijo3NSwibXgiOjE1OCwibXkiOjY1fSx7Imx4IjoxNTksImx5Ijo4MiwibXgiOjE1OSwibXkiOjc1fSx7Imx4IjoxNjAsImx5Ijo4NiwibXgiOjE1OSwibXkiOjgyfSx7Imx4IjoxNjAsImx5Ijo5MCwibXgiOjE2MCwibXkiOjg2fSx7Imx4IjoxMjksImx5Ijo0NiwibXgiOjEyOSwibXkiOjQ1fSx7Imx4IjoxMzQsImx5Ijo0MCwibXgiOjEyOSwibXkiOjQ2fSx7Imx4IjoxMzksImx5IjozNiwibXgiOjEzNCwibXkiOjQwfSx7Imx4IjoxNDQsImx5IjozMywibXgiOjEzOSwibXkiOjM2fSx7Imx4IjoxNTAsImx5IjozMSwibXgiOjE0NCwibXkiOjMzfSx7Imx4IjoxNTQsImx5IjozMCwibXgiOjE1MCwibXkiOjMxfSx7Imx4IjoxNTcsImx5IjozMCwibXgiOjE1NCwibXkiOjMwfSx7Imx4IjoxNTcsImx5IjozMSwibXgiOjE1NywibXkiOjMwfSx7Imx4IjoxNTYsImx5IjozNywibXgiOjE1NywibXkiOjMxfSx7Imx4IjoxNTEsImx5Ijo0MiwibXgiOjE1NiwibXkiOjM3fSx7Imx4IjoxNDgsImx5Ijo0NiwibXgiOjE1MSwibXkiOjQyfSx7Imx4IjoxNDUsImx5Ijo0OSwibXgiOjE0OCwibXkiOjQ2fSx7Imx4IjoxNDUsImx5Ijo1MiwibXgiOjE0NSwibXkiOjQ5fSx7Imx4IjoxNDUsImx5Ijo1NSwibXgiOjE0NSwibXkiOjUyfSx7Imx4IjoxNDgsImx5Ijo1NywibXgiOjE0NSwibXkiOjU1fSx7Imx4IjoxNTgsImx5Ijo1OSwibXgiOjE0OCwibXkiOjU3fSx7Imx4IjoxNzAsImx5Ijo2MCwibXgiOjE1OCwibXkiOjU5fSx7Imx4IjoxODEsImx5Ijo2MiwibXgiOjE3MCwibXkiOjYwfSx7Imx4IjoxOTcsImx5Ijo2NiwibXgiOjE4MSwibXkiOjYyfSx7Imx4IjoyMDYsImx5Ijo2OCwibXgiOjE5NywibXkiOjY2fSx7Imx4IjoyMTIsImx5Ijo3MiwibXgiOjIwNiwibXkiOjY4fSx7Imx4IjoyMTgsImx5Ijo3NiwibXgiOjIxMiwibXkiOjcyfSx7Imx4IjoyMjEsImx5Ijo3OSwibXgiOjIxOCwibXkiOjc2fSx7Imx4IjoyMjIsImx5Ijo4MiwibXgiOjIyMSwibXkiOjc5fSx7Imx4IjoyMjIsImx5Ijo4NiwibXgiOjIyMiwibXkiOjgyfSx7Imx4IjoyMTQsImx5Ijo5MCwibXgiOjIyMiwibXkiOjg2fSx7Imx4IjoyMDEsImx5Ijo5NCwibXgiOjIxNCwibXkiOjkwfSx7Imx4IjoxOTIsImx5Ijo5NCwibXgiOjIwMSwibXkiOjk0fSx7Imx4IjoxNzksImx5Ijo5NCwibXgiOjE5MiwibXkiOjk0fSx7Imx4IjoxNjcsImx5Ijo4OCwibXgiOjE3OSwibXkiOjk0fV0=",
          "Timestamp last change": "20151002060638",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060638",
          "Display rule": "SEKVENS::<:90000:BESVART=0  and obligatorisk=1",
          "Sequence#": 90000,
          "Text ID": [
            {
              "ID": 5,
              "ENG": "Signature",
              "NOR": "Signatur",
              "POL": "Podpis"
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "",
          "Timestamp last change": "20151002060647",
          "Last change by": "tomasz.brandeburg@acsenteret.no20151002060647",
          "Display rule": "SEKVENS::<:90000:BESVART=0  and obligatorisk=1",
          "Sequence#": 90100,
          "Text ID": [
            {
              "ID": 7,
              "ENG": "Signature customer",
              "NOR": "Signatur Kunde",
              "POL": "Podpis nabywcy (kupujacego)"
            }
          ],
          "Helptext": "0",
          "Required": 0,
          "Type": "Signature"
        },
        {
          "Access level": 0,
          "Input validation rule": "",
          "Stylesheet": "",
          "Server updated": null,
          "Answer": "1",
          "Timestamp last change": "20151006140547",
          "Last change by": "Server",
          "Display rule": "0",
          "Sequence#": 100000,
          "Text ID": [
            {
              "ID": 30,
              "ENG": "Bill",
              "NOR": "Fakturer",
              "POL": "Faktury "
            }
          ],
          "Helptext": "0",
          "Required": 1,
          "Type": "Check"
        }
      ]
    }
  ]
';
?>