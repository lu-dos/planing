document.addEventListener('DOMContentLoaded',()=>{
  // checkbox persistence
  document.querySelectorAll('input[type=checkbox]').forEach(chk=>{
    const dateCell=chk.closest('tr')?.querySelector('.jour');
    if(!dateCell) return;
    const key='chk-'+dateCell.textContent.trim();
    chk.checked=localStorage.getItem(key)==='1';
    chk.setAttribute('aria-checked',chk.checked);
    chk.addEventListener('change',()=>{
      localStorage.setItem(key,chk.checked?'1':'0');
      chk.setAttribute('aria-checked',chk.checked);
    });
  });

  // progress bar
  const bar=document.getElementById('period-progress');
  const pct=Math.min(100,Math.max(0,(Date.now()-new Date('2025-07-21'))/(new Date('2025-08-17')-new Date('2025-07-21'))*100));
  bar.style.setProperty('--pct',pct);
  bar.title=`Progression : ${pct.toFixed(0)}%`;

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
