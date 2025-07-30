function currentUser(){
  return window.currentUserId || null;
}
function getChecks(id){
  return JSON.parse(localStorage.getItem('checks_'+id)||'{}');
}
function saveChecks(id,ch){
  localStorage.setItem('checks_'+id,JSON.stringify(ch));
}
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
  const weekSelect=document.getElementById('weekSelect');
  if(weekSelect){
    weekSelect.addEventListener('change',()=>{
      const target=document.querySelector(weekSelect.value);
      if(target) target.scrollIntoView({behavior:'smooth'});
    });
  }
  document.getElementById('printTopBtn').onclick=()=>window.print();
  const topBtn=document.getElementById('toTop');
  const toggle=()=>window.scrollY>600?topBtn.classList.add('show'):topBtn.classList.remove('show');
  window.addEventListener('scroll',toggle);
  toggle();
  topBtn.onclick=()=>window.scrollTo({top:0,behavior:'smooth'});
  document.getElementById('printBtn').onclick=()=>window.print();
});

if('serviceWorker' in navigator){
  navigator.serviceWorker.register('sw.js').catch(()=>{});
}
