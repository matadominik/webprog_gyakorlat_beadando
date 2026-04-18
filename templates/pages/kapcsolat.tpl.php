<h2>Kapcsolat</h2>
<p>Írj üzenetet az oldal készítőinek az alábbi űrlapon keresztül!</p>

<div class="kapcsolat-wrapper">
  <form id="kapcsolatForm" method="post" action="kapcsolatkuldes">
    <div class="form-sor">
      <label for="nev">Név</label>
      <input id="nev" name="nev" type="text">
      <small class="hiba-uzenet" id="nevHiba"></small>
    </div>

    <div class="form-sor">
      <label for="email">E-mail cím</label>
      <input id="email" name="email" type="text">
      <small class="hiba-uzenet" id="emailHiba"></small>
    </div>

    <div class="form-sor">
      <label for="targy">Tárgy</label>
      <input id="targy" name="targy" type="text">
      <small class="hiba-uzenet" id="targyHiba"></small>
    </div>

    <div class="form-sor">
      <label for="uzenet">Üzenet</label>
      <textarea id="uzenet" name="uzenet" rows="5"></textarea>
      <small class="hiba-uzenet" id="uzenetHiba"></small>
    </div>

    <button type="submit" id="kuldesGomb">Üzenet elküldése</button>
  </form>
</div>

<h2>Hol találsz minket?</h2>
<div class="kapcs-terkep-wrapper">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783"
    loading="lazy" allowfullscreen></iframe>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('kapcsolatForm');

  form.addEventListener('submit', (e) => {
    document.querySelectorAll('.hiba-uzenet').forEach(el => el.textContent = '');

    let ok = true;

    const nev    = form.nev.value.trim();
    const email  = form.email.value.trim();
    const targy  = form.targy.value.trim();
    const uzenet = form.uzenet.value.trim();

    if (nev.length < 3) {
      document.getElementById('nevHiba').textContent = 'A név legyen legalább 3 karakter.';
      ok = false;
    }

    const emailMinta = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailMinta.test(email)) {
      document.getElementById('emailHiba').textContent =
        'Adj meg érvényes e-mail címet (pl. valaki@pelda.hu).';
      ok = false;
    }

    if (targy.length < 3) {
      document.getElementById('targyHiba').textContent = 'A tárgy legyen legalább 3 karakter.';
      ok = false;
    }

    if (uzenet.length < 10) {
      document.getElementById('uzenetHiba').textContent =
        'Az üzenet legyen legalább 10 karakter.';
      ok = false;
    }

    if (!ok) {
      e.preventDefault();
    }
  });
});
</script>