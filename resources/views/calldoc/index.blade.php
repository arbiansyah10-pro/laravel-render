<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CallDoc — Cek Kebiasaan Sehatmu</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Work+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap');

:root{
  --ink:#16302A;
  --bg:#EAF4EE;
  --card:#FFFFFF;
  --sage:#2F6B54;
  --sage-deep:#1F4F3E;
  --sage-light:#D3EADD;
  --coral:#E1573F;
  --coral-deep:#B33C28;
  --butter:#F0B93C;
  --muted:#5C756C;
  --line:#C9DED2;
}

*{box-sizing:border-box;}
html,body{margin:0;padding:0;}
body{
  background:var(--bg);
  color:var(--ink);
  font-family:'Work Sans',sans-serif;
  min-height:100vh;
  display:flex;
  justify-content:center;
  padding:32px 16px 64px;
}

.app{width:100%;max-width:640px;}

h1,h2,h3{font-family:'Fraunces',serif;margin:0;}

.eyebrow{
  font-family:'IBM Plex Mono',monospace;
  font-size:12px;
  letter-spacing:.12em;
  text-transform:uppercase;
  color:var(--sage);
  font-weight:600;
}

.brand{
  display:flex;align-items:center;gap:10px;margin-bottom:28px;
}
.brand-mark{
  width:34px;height:34px;border-radius:10px;background:var(--sage-deep);
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.brand-mark svg{width:18px;height:18px;}
.brand-name{font-family:'Fraunces',serif;font-weight:600;font-size:20px;}
.brand-name span{color:var(--coral);}

.ecg-wrap{
  position:relative;height:34px;border-radius:8px;overflow:hidden;
  background:var(--card);border:1px solid var(--line);margin-bottom:10px;
}
.ecg-track, .ecg-fill{
  position:absolute;top:0;left:0;height:100%;width:800%;
  background-repeat:repeat-x;background-size:200px 34px;background-position-y:center;
}
.ecg-track{
  opacity:.35;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='34' viewBox='0 0 200 34'%3E%3Cpolyline points='0,17 60,17 70,4 78,30 86,17 200,17' fill='none' stroke='%23A9C4B6' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
}
.ecg-fill{
  width:0%;
  transition:width .5s ease;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='34' viewBox='0 0 200 34'%3E%3Cpolyline points='0,17 60,17 70,4 78,30 86,17 200,17' fill='none' stroke='%23E1573F' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
  border-right:2px solid var(--coral);
}
.progress-label{
  display:flex;justify-content:space-between;align-items:center;
  font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--muted);
  margin-bottom:26px;
}

.card{
  background:var(--card);border:1px solid var(--line);border-radius:16px;
  padding:28px 26px;
}

.start-heart{
  width:64px;height:64px;border-radius:50%;background:var(--sage-light);
  display:flex;align-items:center;justify-content:center;margin-bottom:18px;
  animation:pulse 1.8s ease-in-out infinite;
}
@keyframes pulse{
  0%,100%{transform:scale(1);}
  50%{transform:scale(1.08);}
}
.start-heart svg{width:30px;height:30px;}
.start h1{font-size:30px;line-height:1.25;margin-bottom:10px;}
.start p{color:var(--muted);font-size:15px;line-height:1.6;margin:0 0 22px;}
.meta-row{display:flex;gap:18px;margin-bottom:26px;flex-wrap:wrap;}
.meta-item{
  font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--sage-deep);
  background:var(--sage-light);padding:6px 12px;border-radius:20px;
}

button.primary{
  font-family:'Work Sans',sans-serif;font-weight:600;font-size:15px;
  background:var(--coral);color:#fff;border:none;border-radius:10px;
  padding:14px 26px;cursor:pointer;transition:transform .15s ease, background .15s ease;
}
button.primary:hover{background:var(--coral-deep);}
button.primary:active{transform:scale(.97);}
button.primary:focus-visible{outline:3px solid var(--butter);outline-offset:2px;}
button.primary:disabled{opacity:.45;cursor:not-allowed;}

button.ghost{
  font-family:'Work Sans',sans-serif;font-weight:600;font-size:14px;
  background:transparent;color:var(--sage-deep);border:1.5px solid var(--sage-deep);
  border-radius:10px;padding:12px 22px;cursor:pointer;
}
button.ghost:hover{background:var(--sage-light);}
button.ghost:focus-visible{outline:3px solid var(--butter);outline-offset:2px;}

.qnum{font-family:'IBM Plex Mono',monospace;color:var(--sage);font-size:13px;font-weight:600;margin-bottom:8px;}
.qtext{font-size:20px;line-height:1.4;margin-bottom:22px;}

.options{display:flex;flex-direction:column;gap:10px;margin-bottom:6px;}
.opt{
  text-align:left;font-family:'Work Sans',sans-serif;font-size:15px;
  background:#fff;border:1.5px solid var(--line);border-radius:12px;
  padding:14px 16px;cursor:pointer;display:flex;align-items:center;gap:12px;
  transition:border-color .15s ease, background .15s ease;
}
.opt:hover:not(:disabled){border-color:var(--sage);background:var(--sage-light);}
.opt:focus-visible{outline:3px solid var(--butter);outline-offset:2px;}
.opt-letter{
  width:26px;height:26px;border-radius:50%;background:var(--sage-light);color:var(--sage-deep);
  font-family:'IBM Plex Mono',monospace;font-size:12px;font-weight:600;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.opt.correct{border-color:var(--sage);background:var(--sage-light);}
.opt.correct .opt-letter{background:var(--sage);color:#fff;}
.opt.wrong{border-color:var(--coral);background:#FCEAE6;}
.opt.wrong .opt-letter{background:var(--coral);color:#fff;}
.opt:disabled{cursor:default;}

.feedback{
  margin-top:16px;padding:14px 16px;border-radius:12px;font-size:14px;line-height:1.55;
  display:none;
}
.feedback.show{display:block;}
.feedback.ok{background:var(--sage-light);color:var(--sage-deep);}
.feedback.no{background:#FCEAE6;color:var(--coral-deep);}
.feedback b{font-family:'Fraunces',serif;}

.quiz-nav{display:flex;justify-content:flex-end;margin-top:20px;}

.result-top{text-align:center;margin-bottom:24px;}
.result-top .eyebrow{display:block;margin-bottom:6px;}
.score-ring{
  width:150px;height:150px;border-radius:50%;margin:14px auto 6px;
  background:conic-gradient(var(--coral) calc(var(--pct,0)*1%), var(--sage-light) 0);
  display:flex;align-items:center;justify-content:center;position:relative;
}
.score-ring::before{
  content:"";position:absolute;inset:10px;border-radius:50%;background:var(--card);
}
.score-inner{position:relative;z-index:1;text-align:center;}
.score-num{font-family:'IBM Plex Mono',monospace;font-size:30px;font-weight:600;color:var(--ink);}
.score-den{font-family:'IBM Plex Mono',monospace;font-size:13px;color:var(--muted);}
.tier-name{font-family:'Fraunces',serif;font-size:24px;margin:8px 0 4px;}
.tier-msg{color:var(--muted);font-size:14.5px;max-width:440px;margin:0 auto;line-height:1.6;}

.section-title{font-family:'Fraunces',serif;font-size:18px;margin:34px 0 4px;}
.section-sub{color:var(--muted);font-size:13.5px;margin:0 0 16px;}

.tip-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;}
@media (max-width:480px){.tip-grid{grid-template-columns:1fr;}}

.tip-card{perspective:1000px;height:128px;cursor:pointer;}
.tip-inner{
  position:relative;width:100%;height:100%;transition:transform .5s;
  transform-style:preserve-3d;
}
.tip-card.flipped .tip-inner{transform:rotateY(180deg);}
.tip-face{
  position:absolute;inset:0;backface-visibility:hidden;
  border-radius:12px;border:1.5px solid var(--line);padding:14px 16px;
  display:flex;flex-direction:column;justify-content:center;
}
.tip-front{background:#fff;}
.tip-front .tip-title{font-family:'Fraunces',serif;font-size:15px;line-height:1.3;}
.tip-front .tip-hint{font-family:'IBM Plex Mono',monospace;font-size:10.5px;color:var(--muted);margin-top:6px;}
.tip-back{background:var(--sage-deep);color:#fff;transform:rotateY(180deg);font-size:12.8px;line-height:1.5;}

.breathe-box{
  border:1.5px solid var(--line);border-radius:16px;padding:24px;text-align:center;
  background:#fff;
}
.breathe-circle{
  width:96px;height:96px;border-radius:50%;background:var(--sage-light);
  border:2px solid var(--sage);margin:6px auto 14px;
  display:flex;align-items:center;justify-content:center;
  font-family:'IBM Plex Mono',monospace;font-size:12px;font-weight:600;color:var(--sage-deep);
  transition:transform 4s ease-in-out;
}
.breathe-circle.in{transform:scale(1.35);}
.breathe-circle.out{transform:scale(1);}
.breathe-msg{color:var(--muted);font-size:13px;margin-bottom:16px;}

.result-actions{display:flex;justify-content:center;gap:12px;margin-top:32px;flex-wrap:wrap;}

.screen{display:none;}
.screen.active{display:block;animation:fadein .35s ease;}
@keyframes fadein{from{opacity:0;transform:translateY(6px);}to{opacity:1;transform:translateY(0);}}
</style>
</head>
<body>
<div class="app">

  <div class="brand">
    <div class="brand-mark">
      <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h4l2 8 4-16 2 8h6"/></svg>
    </div>
    <div class="brand-name">Call<span>Doc</span></div>
  </div>

  <section id="screen-start" class="screen active">
    <div class="card start">
      <div class="start-heart">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2F6B54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/></svg>
      </div>
      <span class="eyebrow">Kuis kesehatan</span>
      <h1>Yuk, cek seberapa sehat kebiasaan hari-harimu</h1>
      <p>{{ count($questions) }} soal ringan seputar kebiasaan sehat sehari-hari. Jawab santai aja, di akhir kamu bakal dapat rekam kesehatan pribadi lengkap dengan tips.</p>
      <div class="meta-row">
        <span class="meta-item">{{ count($questions) }} soal</span>
        <span class="meta-item">± 3 menit</span>
        <span class="meta-item">Ramah keluarga</span>
      </div>
      <button class="primary" id="btn-start">Mulai kuis</button>
    </div>
  </section>

  <section id="screen-quiz" class="screen">
    <div class="ecg-wrap" aria-hidden="true">
      <div class="ecg-track"></div>
      <div class="ecg-fill" id="ecg-fill"></div>
    </div>
    <div class="progress-label">
      <span id="progress-text">Soal 1/{{ count($questions) }}</span>
      <span id="progress-score">Skor: 0</span>
    </div>

    <div class="card">
      <div class="qnum" id="qnum">Soal 1 dari {{ count($questions) }}</div>
      <h2 class="qtext" id="qtext">Pertanyaan</h2>
      <div class="options" id="options" role="group" aria-label="Pilihan jawaban"></div>
      <div class="feedback" id="feedback"></div>
      <div class="quiz-nav">
        <button class="primary" id="btn-next" disabled>Lanjut</button>
      </div>
    </div>
  </section>

  <section id="screen-result" class="screen">
    <div class="card">
      <div class="result-top">
        <span class="eyebrow">Rekam kesehatan CallDoc</span>
        <div class="score-ring" id="score-ring">
          <div class="score-inner">
            <div class="score-num" id="score-num">0</div>
            <div class="score-den">dari {{ count($questions) }}</div>
          </div>
        </div>
        <h2 class="tier-name" id="tier-name">—</h2>
        <p class="tier-msg" id="tier-msg">—</p>
      </div>

      <h3 class="section-title">Kartu tips buat kamu</h3>
      <p class="section-sub">Ketuk kartunya buat lihat tips lengkapnya.</p>
      <div class="tip-grid" id="tip-grid"></div>

      <h3 class="section-title">Latihan napas tenang</h3>
      <p class="section-sub">Jeda sebentar, ikuti ritmenya sebelum lanjut aktivitas.</p>
      <div class="breathe-box">
        <div class="breathe-circle out" id="breathe-circle">Mulai</div>
        <p class="breathe-msg" id="breathe-msg">Tekan tombol buat mulai latihan napas 4 hitungan.</p>
        <button class="ghost" id="btn-breathe">Mulai latihan napas</button>
      </div>

      <div class="result-actions">
        <button class="primary" id="btn-restart">Ulangi kuis</button>
      </div>
    </div>
  </section>

</div>

<script>
const questions = @json($questions);
const tips = @json($tips);

let current = 0, score = 0, answered = false, breathing = false;

const screens = {
  start: document.getElementById('screen-start'),
  quiz: document.getElementById('screen-quiz'),
  result: document.getElementById('screen-result')
};
function showScreen(name){
  Object.values(screens).forEach(s => s.classList.remove('active'));
  screens[name].classList.add('active');
}

document.getElementById('btn-start').addEventListener('click', () => {
  current = 0; score = 0;
  renderQuestion();
  showScreen('quiz');
});

function renderQuestion(){
  answered = false;
  const item = questions[current];
  document.getElementById('qnum').textContent = `Soal ${current+1} dari ${questions.length}`;
  document.getElementById('qtext').textContent = item.q;
  document.getElementById('progress-text').textContent = `Soal ${current+1}/${questions.length}`;
  document.getElementById('progress-score').textContent = `Skor: ${score}`;
  document.getElementById('ecg-fill').style.width = ((current)/questions.length*100) + '%';

  const optsWrap = document.getElementById('options');
  optsWrap.innerHTML = '';
  const letters = ['A','B','C','D'];
  item.opts.forEach((opt, i) => {
    const btn = document.createElement('button');
    btn.className = 'opt';
    btn.innerHTML = `<span class="opt-letter">${letters[i]}</span><span>${opt}</span>`;
    btn.addEventListener('click', () => selectAnswer(i, btn));
    optsWrap.appendChild(btn);
  });

  const fb = document.getElementById('feedback');
  fb.className = 'feedback';
  fb.textContent = '';
  document.getElementById('btn-next').disabled = true;
}

function selectAnswer(i, btn){
  if(answered) return;
  answered = true;
  const item = questions[current];
  const allOpts = document.querySelectorAll('.opt');
  allOpts.forEach(o => o.disabled = true);

  const fb = document.getElementById('feedback');
  if(i === item.correct){
    score++;
    btn.classList.add('correct');
    fb.classList.add('show','ok');
    fb.innerHTML = `<b>Betul!</b> ${item.note}`;
  } else {
    btn.classList.add('wrong');
    allOpts[item.correct].classList.add('correct');
    fb.classList.add('show','no');
    fb.innerHTML = `<b>Belum tepat.</b> ${item.note}`;
  }
  document.getElementById('progress-score').textContent = `Skor: ${score}`;
  document.getElementById('btn-next').disabled = false;
}

document.getElementById('btn-next').addEventListener('click', () => {
  current++;
  if(current >= questions.length){
    document.getElementById('ecg-fill').style.width = '100%';
    setTimeout(showResult, 250);
  } else {
    renderQuestion();
  }
});

function showResult(){
  const pct = Math.round(score/questions.length*100);
  document.getElementById('score-ring').style.setProperty('--pct', pct);
  document.getElementById('score-num').textContent = score;

  let tierName, tierMsg;
  if(score <= 5){
    tierName = 'Baru mulai belajar';
    tierMsg = 'Belum semua soal terjawab tepat, tapi ini titik awal yang bagus buat mulai bangun kebiasaan sehat pelan-pelan.';
  } else if(score <= 10){
    tierName = 'Lumayan sehat';
    tierMsg = 'Beberapa kebiasaan sehatmu udah on track. Tinggal lengkapi bagian yang masih bolong lewat kartu tips di bawah.';
  } else if(score <= 13){
    tierName = 'Jagoan sehat';
    tierMsg = 'Kebiasaan sehatmu udah cukup solid! Tetap konsisten dan jaga ritmenya ya.';
  } else {
    tierName = 'Juara CallDoc';
    tierMsg = 'Mantap, hampir semua kebiasaan sehat udah kamu kuasai. Pertahankan terus, ya!';
  }
  document.getElementById('tier-name').textContent = tierName;
  document.getElementById('tier-msg').textContent = tierMsg;

  const grid = document.getElementById('tip-grid');
  grid.innerHTML = '';
  tips.forEach(t => {
    const card = document.createElement('div');
    card.className = 'tip-card';
    card.innerHTML = `
      <div class="tip-inner">
        <div class="tip-face tip-front">
          <div class="tip-title">${t.title}</div>
          <div class="tip-hint">${t.hint}</div>
        </div>
        <div class="tip-face tip-back">${t.detail}</div>
      </div>`;
    card.addEventListener('click', () => card.classList.toggle('flipped'));
    grid.appendChild(card);
  });

  showScreen('result');
}

document.getElementById('btn-restart').addEventListener('click', () => {
  current = 0; score = 0;
  renderQuestion();
  showScreen('quiz');
});

const breatheCircle = document.getElementById('breathe-circle');
const breatheMsg = document.getElementById('breathe-msg');
const breatheBtn = document.getElementById('btn-breathe');
let breatheTimer = null;

function breatheStep(phase){
  if(phase === 'in'){
    breatheCircle.classList.remove('out');
    breatheCircle.classList.add('in');
    breatheCircle.textContent = 'Tarik napas';
    breatheMsg.textContent = 'Tarik napas pelan-pelan lewat hidung...';
    breatheTimer = setTimeout(() => breatheStep('hold'), 4000);
  } else if(phase === 'hold'){
    breatheCircle.textContent = 'Tahan';
    breatheMsg.textContent = 'Tahan sebentar...';
    breatheTimer = setTimeout(() => breatheStep('out'), 2000);
  } else {
    breatheCircle.classList.remove('in');
    breatheCircle.classList.add('out');
    breatheCircle.textContent = 'Buang napas';
    breatheMsg.textContent = 'Buang napas pelan lewat mulut...';
    breatheTimer = setTimeout(() => breatheStep('in'), 4000);
  }
}

breatheBtn.addEventListener('click', () => {
  breathing = !breathing;
  if(breathing){
    breatheBtn.textContent = 'Hentikan latihan';
    breatheStep('in');
  } else {
    clearTimeout(breatheTimer);
    breatheCircle.classList.remove('in');
    breatheCircle.classList.add('out');
    breatheCircle.textContent = 'Mulai';
    breatheMsg.textContent = 'Tekan tombol buat mulai latihan napas 4 hitungan.';
    breatheBtn.textContent = 'Mulai latihan napas';
  }
});
</script>
</body>
</html>
