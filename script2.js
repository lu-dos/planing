function getPlayers(){
  return JSON.parse(localStorage.getItem('players')||'[]');
}
function savePlayers(p){localStorage.setItem('players',JSON.stringify(p));}
function idOf(f,l){return `${f.trim().toLowerCase()}_${l.trim().toLowerCase()}`;}
function addPlayer(f,l,pw){
  const players=getPlayers();
  const id=idOf(f,l);
  if(players.some(u=>u.id===id)) return false;
  players.push({id,first:f,last:l,pw});
  savePlayers(players);return true;
}
function auth(f,l,pw){
  const id=idOf(f,l);
  const u=getPlayers().find(u=>u.id===id&&u.pw===pw);
  if(u){localStorage.setItem('currentUser',id);return id;}
  return null;
}
function logout(){localStorage.removeItem('currentUser');}
function currentUser(){return localStorage.getItem('currentUser');}
function getChecks(id){return JSON.parse(localStorage.getItem('checks_'+id)||'{}');}
function saveChecks(id,ch){localStorage.setItem('checks_'+id,JSON.stringify(ch));}

function loadChecks(){
  const uid=currentUser();
  let checks=uid?getChecks(uid):{};
  document.querySelectorAll('input[type=checkbox]').forEach(chk=>{
    const dateCell=chk.closest('tr')?.querySelector('.jour');
    if(!dateCell) return;
    const key='chk-'+dateCell.textContent.trim();
    chk.checked=!!checks[key];
    chk.setAttribute('aria-checked',chk.checked);
    chk.onchange=()=>{
      if(!uid){alert('Connecte-toi pour sauvegarder');chk.checked=false;return;}
      checks[key]=chk.checked;
      saveChecks(uid,checks);
      chk.setAttribute('aria-checked',chk.checked);
    };
  });
}

document.addEventListener('DOMContentLoaded',()=>{
  loadChecks();

  const loginLink=document.getElementById('loginLink');
  const signupLink=document.getElementById('signupLink');
  const logoutLink=document.getElementById('logoutLink');
  const userDisplay=document.getElementById('userDisplay');
  const loginModal=document.getElementById('loginModal');
  const signupModal=document.getElementById('signupModal');

  function updateUI(){
    const uid=currentUser();
    if(uid){
      const u=getPlayers().find(p=>p.id===uid);
      userDisplay.textContent=u?u.first:'';
      loginLink.style.display='none';
      signupLink.style.display='none';
      logoutLink.style.display='inline';
    }else{
      userDisplay.textContent='';
      loginLink.style.display='inline';
      signupLink.style.display='inline';
      logoutLink.style.display='none';
    }
  }
  updateUI();

  loginLink.addEventListener('click',e=>{e.preventDefault();loginModal.showModal();});
  signupLink.addEventListener('click',e=>{e.preventDefault();signupModal.showModal();});
  document.getElementById('loginCancel').onclick=()=>loginModal.close();
  document.getElementById('signupCancel').onclick=()=>signupModal.close();

  document.getElementById('loginForm').addEventListener('submit',e=>{
    e.preventDefault();
    const f=document.getElementById('loginPrenom').value;
    const l=document.getElementById('loginNom').value;
    const pw=document.getElementById('loginPassword').value;
    if(auth(f,l,pw)){
      loginModal.close();updateUI();loadChecks();
    }else alert('Identifiants invalides');
  });
  document.getElementById('signupForm').addEventListener('submit',e=>{
    e.preventDefault();
    const f=document.getElementById('signupPrenom').value;
    const l=document.getElementById('signupNom').value;
    const pw=document.getElementById('signupPassword').value;
    if(addPlayer(f,l,pw)){
      auth(f,l,pw);
      signupModal.close();updateUI();loadChecks();
    }else alert('Utilisateur existant');
  });
  logoutLink.addEventListener('click',e=>{e.preventDefault();logout();updateUI();loadChecks();});

  // navigation vers les semaines
  const weekSelect=document.getElementById('weekSelect');
  if(weekSelect){
    weekSelect.addEventListener('change',()=>{
      const target=document.querySelector(weekSelect.value);
      if(target) target.scrollIntoView({behavior:'smooth'});
    });
  }
  document.getElementById('printTopBtn').onclick=()=>window.print();

  // top button
  const topBtn=document.getElementById('toTop');
  const toggle=()=>window.scrollY>600?topBtn.classList.add('show'):topBtn.classList.remove('show');
  window.addEventListener('scroll',toggle);
  toggle();
  topBtn.onclick=()=>window.scrollTo({top:0,behavior:'smooth'});

  // print
  document.getElementById('printBtn').onclick=()=>window.print();
});

// PWA (optional)
if('serviceWorker' in navigator){
  navigator.serviceWorker.register('sw.js').catch(()=>{});
}
