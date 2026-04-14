<div class="container">
    <div class="row">
        <div class="col-md-12">

            <!-- Fő cím: miről szól az oldal -->
            <h1>Bemutatkozás</h1>

            <!-- Általános bevezető szöveg a Balatonról -->
            <p>
                A Balaton Magyarország legnagyobb tava, amely nemcsak a pihenés és a turizmus egyik
                központja, hanem a hajózás szempontjából is kiemelkedő jelentőségű. Több kikötő,
                menetrendi járat és sétahajó indul a tó körül, így a látogatók a vízről is
                felfedezhetik a környék látnivalóit.
            </p>

            <!-- A weboldal célját ismertető blokk -->
            <h2>A weboldal célja</h2>
            <p>
                A „Balatoni hajók” weboldal egyrészt bemutató oldal: célunk, hogy áttekintést adjunk
                a Balaton hajózási világáról, a legfontosabb járatokról és hajótípusokról, illetve
                érdekességeket és hasznos információkat gyűjtsünk össze a látogatók számára.
                Másrészt ez az oldal szolgál a <strong>Web‑programozás 1</strong> tárgy házi feladatának
                demonstrációjaként is.
            </p>

            <!-- Rövid áttekintés arról, mit talál a látogató a menükben -->
            <h2>Mit lehet az oldalon találni?</h2>
            <ul>
                <li>
                    <strong>Cikkek</strong> menüpont alatt rövid ismertetőket adunk a balatoni
                    hajózás történetéről, a kompjáratokról és a sétahajózásról.
                </li>
                <li>
                    <strong>Táblázat</strong> menüpontban mintamenetrendet és hajóadatokat
                    jelenítünk meg.
                </li>
                <li>
                    A későbbi menüpontokban különböző <strong>webes technológiákat</strong>
                    mutatunk be (JavaScript, Fetch API, Axios, React, SPA), ahol egy kiválasztott
                    adatbázis‑fájl adatait kezeljük CRUD (Create, Read, Update, Delete) műveletekkel.
                </li>
                <li>
                    A <strong>Belépés</strong> funkció segítségével a felhasználók regisztrálhatnak
                    és bejelentkezhetnek, így a házi feladathoz szükséges felhasználókezelés
                    (session, adatbázis) is megvalósul.
                </li>
            </ul>

            <!-- Felsorolás arról, milyen technológiák szerepelnek a beadandóban -->
            <h2>Felhasznált technológiák a beadandóban</h2>
            <p>
                A beadandó elkészítése során a következő technológiákat és módszereket használjuk:
            </p>
            <ul>
                <li><strong>HTML5, CSS3, Bootstrap</strong> – a weboldal felépítése, elrendezése és stílusozása.</li>
                <li><strong>PHP + MySQL</strong> – front‑controller minta, felhasználókezelés
                    (regisztráció, belépés, kilépés), adatbázis‑kapcsolat.</li>
                <li><strong>JavaScript CRUD</strong> – kliens oldali adatműveletek egy választott adatfájllal.</li>
                <li><strong>Fetch API</strong> – JavaScriptből PHP szerver felé történő kommunikáció, 
                    az adatok tényleges tárolása adatbázisban.</li>
                <li><strong>React</strong> – komponens alapú felület, ahol szintén CRUD funkciókat valósítunk meg.</li>
                <li><strong>Axios + React</strong> – szerverrel történő kommunikáció React komponensekből.</li>
                <li><strong>SPA (Single Page Application)</strong> – egyoldalas React alkalmazás több aloldallal,
                    useState állapotkezeléssel.</li>
                <li><strong>Git + GitHub</strong> – verziókezelés, csapatmunka, publikálás.</li>
                <li><strong>Internetes tárhely</strong> – az alkalmazás elérhetővé tétele külső webszerveren.</li>
            </ul>

            <!-- Csapattagok bemutatása – ide írjátok be a saját neveket/Neptun kódokat -->
            <h2>A projekt készítői</h2>
            <p>
                Az oldalt a Web‑programozás 1 tantárgy házi feladataként készítettük, páros projektmunka keretében.
            </p>
            <ul>
                <li><strong>Név 1</strong> – Neptun: <em>ABC123</em></li>
                <li><strong>Név 2</strong> – Neptun: <em>DEF456</em></li>
            </ul>
            <p>
                A fenti adatok a dokumentációban is szerepelnek, illetve a láblécben külön is
                feltüntetjük a készítők nevét és Neptun‑kódját a beadandó követelményeinek megfelelően.
            </p>

            <hr>

            <!--
                EXTRA JAVASCRIPTES MODUL
                Érdekesség-kártyák a balatoni hajózásról.
                A gomb megnyomására 3 véletlenszerű kártya jelenik meg animációval.
            -->
            <h2 class="mt-4">Érdekességek a balatoni hajózásról</h2>

            <p>
                Kattints a gombra, és véletlenszerűen megjelenik néhány kártya érdekes információkkal.
                Ez a rész már JavaScript segítségével működik, és példát mutat egy egyszerű,
                dinamikus kliens oldali megoldásra.
            </p>

            <!-- Gomb, ami indítja a JS logikát -->
            <div class="mb-3">
                <button id="show-facts-btn" class="btn btn-primary">
                    Érdekességek mutatása
                </button>
            </div>

            <!-- Ide fognak bekerülni a kártyák JavaScript segítségével -->
            <div id="facts-container" class="row g-3"></div>

            <!--
                Extra CSS – csak ehhez a modulhoz.
                Szebb kártyákat, árnyékot, animációt adunk hozzá.
            -->
            <style>
                /* A JS által generált kártyák alap stílusa */
                #facts-container .fact-card {
                    background: #ffffff;
                    border-radius: 12px;
                    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
                    padding: 1rem 1.25rem;
                    border-left: 5px solid #0d6efd; /* kék sáv a bal oldalon */
                    position: relative;
                    overflow: hidden;
                    opacity: 0;                  /* induláskor láthatatlan */
                    transform: translateY(10px); /* kicsit lejjebb csúsztatva */
                    transition: all 0.3s ease;   /* animáció átmenet */
                    height: 100%;
                }

                /* Amikor a JS hozzáadja a "visible" osztályt, a kártya beúszik */
                #facts-container .fact-card.visible {
                    opacity: 1;
                    transform: translateY(0);
                }

                #facts-container .fact-card h3 {
                    font-size: 1.1rem;
                    margin-bottom: 0.5rem;
                    font-weight: 600;
                }

                #facts-container .fact-card p {
                    margin-bottom: 0;
                    font-size: 0.95rem;
                }

                /* Halvány ikon a kártya jobb felső sarkában */
                #facts-container .fact-icon {
                    position: absolute;
                    right: -10px;
                    top: -10px;
                    font-size: 3.5rem;
                    color: rgba(13, 110, 253, 0.12);
                    pointer-events: none;
                }

                /* Hover effekt – kicsit megemeljük a kártyát */
                #facts-container .fact-card:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
                }

                /* Gomb kinézete – egy kicsit szélesebb, „fontosabb” */
                #show-facts-btn {
                    min-width: 220px;
                    font-weight: 500;
                }
            </style>

            <!--
                JavaScript kód
                - Egy tömbben tároljuk az érdekességeket (cím, szöveg, ikon).
                - Gombnyomásra 3 véletlenszerű elemet választunk ki.
                - Ezekből dinamikusan Bootstrap-es kártyákat hozunk létre.
            -->
            <script>
            // ============== Adatmodell: érdekességek listája ==============
            // mindegyik objektum egy kártyának felel meg (cím + szöveg + emoji ikon)
            const balatoniErdekessegek = [
                {
                    cim: "Az első menetrend szerinti járat",
                    szoveg: "Az első menetrend szerinti hajójárat 1846-ban indult a Balatonon Széchenyi István kezdeményezésére.",
                    ikon: "🚢"
                },
                {
                    cim: "Komp Szántód és Tihany között",
                    szoveg: "A balatoni kompjárat a tó legszűkebb részén, Szántód és Tihany között szállít autókat és utasokat egész évben.",
                    ikon: "⛴️"
                },
                {
                    cim: "Éjszakai sétahajózás",
                    szoveg: "Nyári főszezonban több városból indulnak zenés, éjszakai sétahajók a part menti fényekkel és élőzenével.",
                    ikon: "🎵"
                },
                {
                    cim: "A Balaton mélysége",
                    szoveg: "A Balaton átlagos mélysége körülbelül 3 méter, a legmélyebb pontja (a Tihanyi-kútnál) 11-12 méter.",
                    ikon: "🌊"
                },
                {
                    cim: "Jég és hajózás",
                    szoveg: "Ha a Balaton teljesen befagy, a hajóforgalom szünetel, és külön jégfigyelő szolgálat működik a tó biztonsága érdekében.",
                    ikon: "❄️"
                },
                {
                    cim: "Balatoni kikötők",
                    szoveg: "A tó körül több tucat kikötő található, a nagyobb városokban menetrendi járatok, máshol főként vitorláskikötők működnek.",
                    ikon: "⚓"
                }
            ];

            // ============== Segédfüggvény: véletlenszerű elemválasztás ==============
            /**
             * Visszaad db darab véletlenszerű elemet a megadott listából
             * úgy, hogy ugyanaz az elem ne ismétlődjön.
             */
            function veletlenElemek(lista, db) {
                const masolat = [...lista]; // másolatot készítünk, hogy az eredetit ne módosítsuk
                const eredmeny = [];

                while (eredmeny.length < db && masolat.length > 0) {
                    const index = Math.floor(Math.random() * masolat.length);
                    // kivágjuk a véletlenül választott elemet a másolatból
                    const [elem] = masolat.splice(index, 1);
                    eredmeny.push(elem);
                }

                return eredmeny;
            }

            // ============== Fő logika: DOM esemény és gombkezelés ==============
            document.addEventListener('DOMContentLoaded', function () {
                const gomb = document.getElementById('show-facts-btn');
                const kontener = document.getElementById('facts-container');

                // Biztonsági ellenőrzés: ha valamiért nincs meg az elem, ne fusson hibára a kód
                if (!gomb || !kontener) return;

                let lathato = false; // állapot: már vannak-e érdekesség-kártyák a lapon

                gomb.addEventListener('click', function () {
                    // Minden kattintás előtt kiürítjük a konténert
                    kontener.innerHTML = "";

                    // Véletlenszerűen kiválasztunk 3 érdekességet
                    const valasztottak = veletlenElemek(balatoniErdekessegek, 3);

                    valasztottak.forEach(function (elem, index) {
                        // Külső oszlop div (Bootstrap grid)
                        const col = document.createElement('div');
                        col.className = "col-md-4";

                        // Maga a kártya
                        const kartya = document.createElement('div');
                        kartya.className = "fact-card";

                        // Halvány ikon a sarokban
                        const ikonSpan = document.createElement('span');
                        ikonSpan.className = "fact-icon";
                        ikonSpan.textContent = elem.ikon;

                        // Cím
                        const cimElem = document.createElement('h3');
                        cimElem.textContent = elem.cim;

                        // Szöveg
                        const szovegElem = document.createElement('p');
                        szovegElem.textContent = elem.szoveg;

                        // Kártya összeállítása
                        kartya.appendChild(ikonSpan);
                        kartya.appendChild(cimElem);
                        kartya.appendChild(szovegElem);

                        // Oszlopba tesszük a kártyát, majd a sor konténerbe
                        col.appendChild(kartya);
                        kontener.appendChild(col);

                        // Kis késleltetéssel adjuk hozzá a "visible" osztályt,
                        // ettől lesz lépcsőzetes beúszó animáció
                        setTimeout(function () {
                            kartya.classList.add('visible');
                        }, 80 * index);
                    });

                    // A gomb szövegét frissítjük
                    if (!lathato) {
                        gomb.textContent = "Érdekességek frissítése";
                        lathato = true;
                    } else {
                        // Ha már látható volt, akkor is új véletlen hármast mutatunk,
                        // ezért a szöveg marad, csak az állapot változik.
                        lathato = true;
                    }
                });
            });
            </script>

        </div>
    </div>
</div>


