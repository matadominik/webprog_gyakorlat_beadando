<div class="container my-4">
  <!-- Fejléc: címsor és menü kártyákban, középre igazítva -->
  <header class="text-center mb-4">
    <h1 class="display-4 mb-4 text-center">Balatoni Hajók - Vízi Világ</h1>

    <div class="nav-cards-wrapper">
      <div class="nav-cards">
        <a class="nav-card" href="#bemutatkozas">
          <span class="nav-card-title">Bemutatkozás</span>
          <span class="nav-card-desc">Kik vagyunk, miről szól az oldal</span>
        </a>
        <a class="nav-card" href="#erdekessegek">
          <span class="nav-card-title">Érdekességek</span>
          <span class="nav-card-desc">Random fun factek a Balatonról</span>
        </a>
        <a class="nav-card" href="#tortenet">
          <span class="nav-card-title">Hol vagyunk?</span>
          <span class="nav-card-desc">Térkép és elhelyezkedés</span>
        </a>
      </div>
    </div>
  </header>


  <section id="bemutatkozas" class="text-center mb-5 px-3">
    <h2 class="mb-3 text-center">Üdvözlünk a balatoni hajózás világában!</h2>
    <p class="lead text-center">
      A Balaton Magyarország legnagyobb tava, évszázadok óta a vízi élet és kikapcsolódás központja.
      Számos kikötő és hajóút várja a látogatókat, legyen szó sétahajózásról, kompokról vagy túrákról.
      Most bemutatjuk a vízi világ fénypontjait, érdekességeit és vadonatúj menüpontjainkat.
    </p>
  </section>

 
  <section id="erdekessegek" class="mb-5">
    <div class="gomb">
      <button class="nav-card-button" id="show-facts-btn">
        Mutasd az érdekességeket
      </button>
    </div>
    <div class="row justify-content-center" id="facts-container"></div>
  </section>

 
  <section id="tortenet" class="mb-5 text-center">
    <h2 class="mb-3 text-center">Hol vagyunk?</h2>
    <div class="map-wrapper mx-auto" style="max-width:100%; max-height:400px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.104896364676!2d18.040389276025447!3d46.90993427113449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769bf7d5b62549f%3A0x9a7c64878d3ee3c1!2zU2nDs2ZvayBLaWvDtnTFkQ!5e1!3m2!1shu!2shu!4v1775924516822!5m2!1shu!2shu"
              width="100%" height="450" style="border:0;" allowfullscreen></iframe>
    </div>
  </section>
</div>

<!-- Reszponzív CSS -->
<style>
body {
  font-family: 'Arial', sans-serif;
  background:#f8f9fa;
  color:#333;
}

h1, h2 {
  text-align: center;
}

.gomb {
  text-align: center;
  margin-bottom: 1.5rem;
}


.nav-cards-wrapper {
  display: flex;
  justify-content: center;
}

.nav-cards {
  display: flex;
  justify-content: center;
  align-items: stretch;
  flex-wrap: wrap;
  gap: 1rem;
}

/* 3D-s nav kártyák (felső 3 box) */
.nav-card {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 1rem 1.4rem;
  min-width: 210px;
  border-radius: 14px;
  text-decoration: none;
  background: linear-gradient(135deg, #ffffff, #e8f2ff);
  box-shadow: 0 15px 35px rgba(0,0,0,0.16);
  border: 1px solid rgba(13, 110, 253, 0.08);
  transform: translateY(0) translateZ(0);
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  text-align: center;
}

.nav-card-title {
  font-weight: 700;
  font-size: 1.05rem;
  color: #0d4ba0;
}

.nav-card-desc {
  font-size: 0.9rem;
  color: #4b4f5c;
  margin-top: 0.15rem;
}

/* hover – „3D-s” kiemelkedés */
.nav-card:hover {
  transform: translateY(-6px) translateZ(0) scale(1.02);
  box-shadow: 0 22px 45px rgba(0,0,0,0.25);
  border-color: rgba(255, 196, 0, 0.9);
}

/* Gomb, ami úgy néz ki, mint a 3D-s nav kártyák */
.nav-card-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.9rem 1.8rem;
  border-radius: 14px;
  border: 1px solid rgba(13, 110, 253, 0.08);
  background: linear-gradient(135deg, #ffffff, #e8f2ff);
  box-shadow: 0 15px 35px rgba(0,0,0,0.16);
  color: #0d4ba0;
  font-size: 1.05rem;
  font-weight: 700;
  cursor: pointer;
  transform: translateY(0) translateZ(0);
  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease,
    border-color 0.25s ease,
    
    color 0.25s ease;
}

.nav-card-button:hover {
  transform: translateY(-6px) translateZ(0) scale(1.02);
  box-shadow: 0 22px 45px rgba(0,0,0,0.25);
  border-color: rgba(255, 196, 0, 0.9);
  background: linear-gradient(135deg, #ffffff, #fdf3d4);
  color: #0b3b7a;
}

.nav-card-button:focus {
  outline: none;
}

/* kisebb kijelzőre */
@media (max-width: 768px) {
  .nav-cards {
    flex-direction: column;
    align-items: center;
  }
  .nav-card {
    min-width: 100%;
  }
}

#facts-container {
  max-width:800px;
  margin:0 auto;
}

/* Érdekességek kártyák alapstílusa + animációk */
#facts-container .fact-card {
  position: relative;
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  border: 2px solid transparent;
  opacity: 0;                 /* induláskor láthatatlan */
  transform: scale(0.9);      /* kicsit kisebb méret */
  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease,
    border-color 0.3s ease,
    opacity 0.3s ease;
}

#facts-container .fact-card.visible {
  opacity: 1;
  transform: scale(1);
}

/* Hover effekt: nagyobb és árnyékosabb */
#facts-container .fact-card:hover {
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
  transform: scale(1.05);
  border-color: #007bff;
}

.fact-icon {
  font-size:2.5rem;
  position:absolute;
  right:20px;
  top:20px;
  color:rgba(0,123,255,0.1);
}
</style>

<!-- JS: érdekességek -->
<script>
// ============== Adatmodell: érdekességek listája ==============
const erdekessegek = [
  {
    cim: "Első hajójárat 1846-ból",
    rovid: "Az első menetrend szerinti hajójárat 1846-ban indult Széchenyi István kezdeményezésére.",
    hosszabb: "1846-ban indult el a Balaton első menetrend szerinti gőzhajója, a Kisfaludy. "
            + "Ezzel vette kezdetét a szervezett balatoni hajózás, ami nagy lendületet adott "
            + "a tó környéki turizmus és kereskedelem fejlődésének.",
    ikon: "🚢"
  },
  {
    cim: "Komp Szántód–Tihany között",
    rovid: "A komp egész évben közlekedik, és autókat is szállít.",
    hosszabb: "A Szántód és Tihany között közlekedő komp az egyik legfontosabb átkelő a Balatonon. "
            + "A járműveket is szállító járat jelentősen lerövidíti az utazási időt a tó két partja között, "
            + "és egész évben üzemel, ha az időjárási viszonyok engedik.",
    ikon: "⛴️"
  },
  {
    cim: "Éjszakai sétahajók",
    rovid: "Esténként zenés sétahajók indulnak több kikötőből.",
    hosszabb: "A nyári szezonban több balatoni kikötőből indulnak esti, zenés sétahajók. "
            + "A fedélzeten élőzene vagy DJ gondoskodik a hangulatról, miközben a kivilágított part "
            + "és a csillagos ég különleges élményt ad az utasoknak.",
    ikon: "🎵"
  },
  {
    cim: "A Balaton mélysége",
    rovid: "A tó átlagos mélysége 3 méter, legmélyebb pontja 11 méter.",
    hosszabb: "A Balaton viszonylag sekély tó: átlagos mélysége körülbelül 3 méter. "
            + "Legmélyebb pontja a Tihanyi-kút, ami nagyjából 11–12 méter mély. "
            + "A sekélység miatt nyáron viszonylag gyorsan felmelegszik a víz.",
    ikon: "🌊"
  },
  {
    cim: "Téli jég és hajózás",
    rovid: "Fagyáskor jégfigyelő szolgálat működik, hajójáratok nem közlekednek.",
    hosszabb: "Amikor tartósan fagypont alá csökken a hőmérséklet, a Balaton felszíne befagy. "
            + "Ilyenkor jégfigyelő szolgálat ellenőrzi a viszonyokat, de a menetrendi hajók nem közlekedhetnek. "
            + "Bizonyos években a korcsolyázás és jégen való túrázás is népszerű program, mindig fokozott óvatossággal.",
    ikon: "❄️"
  },
  {
    cim: "Kikötők a tó körül",
    rovid: "Több tucat kikötő és vitorláskikötő található a Balaton partján.",
    hosszabb: "A Balaton partján több tucat kisebb-nagyobb kikötő található, amelyek közül sok "
            + "kifejezetten vitorlások fogadására specializálódott. A kikötők fontos szerepet játszanak "
            + "a vízi turizmusban, versenyvitorlázásban és a helyi gazdaságban.",
    ikon: "⚓"
  }
];

// ============== Megjelenítés – AZ ÖSSZES ÉRDEKESSÉG ==============
document.addEventListener('DOMContentLoaded', () => {
  const gomb = document.getElementById('show-facts-btn');
  const kont = document.getElementById('facts-container');

  gomb.onclick = () => {
    kont.innerHTML = "";

    erdekessegek.forEach((m, i) => {
      const col = document.createElement('div');
      col.className = 'col-md-4 mb-3';

      const card = document.createElement('div');
      card.className = 'fact-card position-relative';

      const icon = document.createElement('div');
      icon.className = 'fact-icon';
      icon.textContent = m.ikon;

      const cim = document.createElement('h3');

      const rovid = document.createElement('p');
      rovid.textContent = m.rovid;

      const hosszabb = document.createElement('p');
      hosszabb.textContent = m.hosszabb;

      card.appendChild(icon);
      card.appendChild(cim);
      card.appendChild(rovid);
      card.appendChild(hosszabb);

      col.appendChild(card);
      kont.appendChild(col);

      setTimeout(() => { card.classList.add('visible'); }, 80 * i);
      setTimeout(() => {
  card.classList.add('visible');
}, 80 * i);
    });
  };
});
</script>




